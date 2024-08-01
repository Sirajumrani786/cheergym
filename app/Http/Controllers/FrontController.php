<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Gym;
use App\Models\MainPage;
use App\Models\SiteGuideline;
use App\Models\PrivacyPolicy;
use App\Models\Terms;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Like;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Report;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        // Retrieve data from the MainPage model
        $data = MainPage::first();
        return view('index', compact('data'));
    }
    
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $gyms = Gym::where('name', 'LIKE', '%' . $keyword . '%')
                   ->orderBy('created_at', 'desc') // Order gyms by creation date in descending order
                   ->paginate(100);
        return view('frontend.search', compact('gyms'));
    }
    
public function getLikesDislikes()
{
    try {
        $reviews = \DB::table('reviews')
            ->leftJoin('likes', 'reviews.id', '=', 'likes.review_id')
            ->select('reviews.id',
                     \DB::raw('SUM(likes.like) as likes_count'),
                     \DB::raw('SUM(likes.dislike) as dislikes_count'))
            ->groupBy('reviews.id')
            ->get();

        if ($reviews->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'No reviews found'], 404);
        }

        return response()->json(['status' => 'success', 'reviews' => $reviews], 200);
    } catch (\Exception $e) {
        \Log::error('Error fetching likes and dislikes: ' . $e->getMessage());
        return response()->json(['status' => 'error', 'message' => 'Server error'], 500);
    }
}



    
    public function gym($id)
    {
    
        // if (!Auth::check()) {
        //     return redirect()->route('flogin');
        // }
        $reviews = DB::table('reviews')->get();
        $gym = Gym::find($id);
    
        $isSaved = false;
        
        if(Auth::check()){
            $user = Auth::user();
            $isSaved = $user->savedGyms()->where('gym_id', $id)->exists();
        }
        
        return view('frontend.gym', compact('gym' , 'reviews', 'isSaved'));
    }

    public function gym_rating($id)
    {
        if (!Auth::check()) {
            return redirect('gym/'.$id);
        }

        $gym = Gym::find($id);
        return view('frontend.gym_rating', compact('gym'));
    }
    public function compare()
    {
        return view('frontend.compare');
    }
    public function single_gym()
    {
        return view('frontend.single_gym');
    }

    public function fregister()
    {
        return view('frontend.fregister');
    }
    public function flogin()
    {
        return view('frontend.flogin');
    }

    public function do_login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('user_pannel');
    }

    public function do_register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('index');
    }

    public function user_pannel()
    {

        if (!Auth::check()) {
            return redirect()->route('flogin');
        }
        return view('frontend.user_pannel');
    }
    public function terms()
    {
        $terms = Terms::first();
        return view('frontend.terms_condetions',compact('terms'));
    }
    public function privacy()
    {
       $privacy = PrivacyPolicy::first();
        return view('frontend.privacy',compact('privacy'));
    }

      public function guidelines()
    {
       $guide = SiteGuideline::first();
        return view('frontend.guidelines',compact('guide'));
    }

    public function updateProfile(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'contact' => 'nullable',
            'location' => 'nullable',
            'state' => 'nullable',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'password' => 'nullable|confirmed',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by ID
        $user = User::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('profile')) {
            // Delete the old image if it exists
            if ($user->profile && file_exists(public_path($user->profile)) && $user->profile !== 'assets/img/image_placeholder.jpg') {
                unlink(public_path($user->profile));
            }

            // Get the file name with extension
            $fileNameWithExt = $request->file('profile')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('profile')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the file to public/profiles
            $path = $request->file('profile')->move(public_path('profiles'), $fileNameToStore);
            // Save the path in the database
            $user->profile = 'profiles/' . $fileNameToStore;
        }

        // Update user record
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('contact')) {
            $user->contact = $request->input('contact');
        }
        if ($request->filled('location')) {
            $user->location = $request->input('location');
        }
        if ($request->filled('state')) {
            $user->state = $request->input('state');
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('user_pannel')->with('success', 'User updated successfully!');
    }

    public function storeGym(Request $request)
    {
        // dd($request->all());
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'location' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload
        if ($request->hasFile('thumbnail')) {
            // Get the file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // File name to store
            $fileNameToMove = $fileName . '_' . time() . '.' . $extension;
            // Upload image
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $fileNameToMove);

            $fileNameToStore = "thumbnails/" . $fileNameToMove;
        } else {
            $fileNameToStore = '../../assets/img/image_placeholder.jpg'; // Default image if no image is uploaded
        }

        // Create gym record
        $gym = new Gym;
        $gym->name = $request->input('name');
        $gym->description = $request->input('description');
        $gym->contact = $request->input('contact');
        $gym->location = $request->input('location');
        $gym->state = $request->input('state');
        $gym->fees = $request->input('fees');
        $gym->timing_from = $request->input('timing_from');
        $gym->timing_to = $request->input('timing_to');
        $gym->is_featured = $request->input('is_featured');
        $gym->thumbnail = $fileNameToStore; // Save the file path to the database
        $gym->save();

        return redirect()->route('search')->with('success', 'Gym added successfully!');
    }

    public function updateReview(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('flogin');
        }

        $request->validate([
            // 'facilities_rating' => 'required|integer|min:1|max:5',
            // 'coaching_rating' => 'required|integer|min:1|max:5',
            // 'atmosphere_rating' => 'required|integer|min:1|max:5',
            // 'overall_rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string|max:1000',
        ]);

        DB::table('reviews')
            ->where('id', $id)
            ->update([
                'facilities_rating' => $request->input('facilities_rating'),
                'coaching_rating' => $request->input('coaching_rating'),
                'atmosphere_rating' => $request->input('atmosphere_rating'),
                'overall_rating' => $request->input('overall_rating'),
                'feedback' => $request->input('feedback'),
                'updated_at' => now(),
            ]);

        return redirect()->route('user_pannel')->with('success',"Review Updated Successfully" ); 

    }

    public function ratingstore(Request $request){
        // Validate incoming data
        $validatedData = $request->validate([
            'facilities_rating' => 'required|numeric|min:1|max:5',
            'coaching_rating' => 'required|numeric|min:1|max:5',
            'atmosphere_rating' => 'required|numeric|min:1|max:5',
            'overall_rating' => 'required|numeric|min:1|max:5',
            // Add more validation rules if needed
        ]);
        $user_id = Auth::user()->id;
     
    
        // Insert data into the database using the query builder
        DB::table('reviews')->insert([
            'facilities_rating' => $validatedData['facilities_rating'],
            'coaching_rating' => $validatedData['coaching_rating'],
            'atmosphere_rating' => $validatedData['atmosphere_rating'],
            'overall_rating' => $validatedData['overall_rating'],
            'feedback'       => $request->feedback,
            'gym_id'        => $request->gym_id,
            'user_id'        => $user_id,
        ]);
    
        // Redirect to the desired route, e.g., 'gym.show' with the gym id
        return redirect()->route('gym', ['id' => $request->gym_id]);

    }

   
    public function edit_review(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('flogin');
        }

        $review = Review::find($id);

        // $review = DB::table('reviews')->find($id);
        return view('frontend.editreview', compact('review'));
    }

    public function likeReview(Request $request)
    {
        $action = $request->action;
        $review_id = $request->review_id;

        $actions = ['like', 'dislike'];

        if (!in_array($action, $actions)) {
            return response()->json(['error' => 'Invalid action'], 400);
        }

        if($action == 'like'){
            $like = 1;
            $dislike = 0;
        }else{
            $like = 0;
            $dislike = 1;
        }

        $user = auth()->user();
    
        $existingLike = Like::where('review_id', $review_id)
                            ->where('user_id', $user->id)
                            ->first();
    
        if ($existingLike) {
            // Update the existing like record
            $existingLike->update([
                'like' => $like,
                'dislike' => $dislike,
            ]);
    
        }else{
            // Create a new like record
            Like::create([
                'review_id' => $review_id,
                'user_id' => $user->id,
                'like' => $like,
                'dislike' => $dislike,
            ]);
    
        }

        $likes =  Like::where('review_id','=',$review_id)->where('user_id','=',$user->id)->sum('like');
        $dislikes =  Like::where('review_id','=',$review_id)->where('user_id','=',$user->id)->sum('dislike');

        return response()->json(['status'=> 'success', 'message' => 'Review ' . $action . ' successfully.','likes'=>$likes,'dislikes'=>$dislikes]);
    }
    
    
    public function insertReport(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'report' => 'required|string|max:1000',
            // 'user_id' => 'required|exists:users,id',
            'review_id' => 'r   equired|exists:reviews,id',
            // Add more validation rules as per your requirements
        ]);
    
        // Insert the report into the database using DB facade
        DB::table('reports')->insert([
            'report' => $request->input('report'),
            'user_id' => auth()->user()->id,
            'review_id' => $request->input('review_id'),
            // Add more fields as per your Report model fillable attributes
        ]);
    
        // Optionally, you can return a response or redirect
        return redirect()->route('gym', ['id' => $request->input('gym_id')])->with("success", "Review reported successfully.");
    }
    public function blog()
    {
        // Retrieve data from the MainPage model
        $data = MainPage::first();
        return view('frontend.blog', compact('data'));
    }
    public function help()
    {
        // Retrieve data from the MainPage model
        $data = MainPage::first();
        return view('frontend.help', compact('data'));
    }
}



