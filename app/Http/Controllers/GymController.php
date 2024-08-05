<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\SavedGyms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GymController extends Controller
{
    public function index()
    {
        $gyms = Gym::latest()->get();
        return view('gym.index', compact('gyms'));
    }

    public function create()
    {
        return view('gym.create');
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            // 'description' => 'required|string|max:255',
            // 'contact' => 'required',
            // 'location' => 'required',
            // 'fees' => 'required',
            // 'timing_from' => 'required',
            // 'timing_to' => 'required',
            // 'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
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
        $gym->location = $request->input('location');
        $gym->state = $request->input('state');
        
        // $gym->description = $request->input('description');
        // $gym->contact = $request->input('contact');
        // $gym->location = $request->input('location');
        // $gym->fees = $request->input('fees');
        // $gym->timing_from = $request->input('timing_from');
        // $gym->timing_to = $request->input('timing_to');
        // $gym->is_featured = $request->input('is_featured');
        // $gym->thumbnail = $fileNameToStore; // Save the file path to the database
        $gym->save();

        return redirect()->route('gym.index')->with('success', 'Gym added successfully!');
    }

    public function show(Gym $gym)
    {
        return view('gym.show', compact('gym'));
    }

    public function edit(Gym $gym)
    {
        return view('gym.edit', compact('gym'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            // 'description' => 'nullable|string|max:255',
            // 'contact' => 'nullable',
            // 'location' => 'nullable',
            // 'fees' => 'nullable',
            // 'timing_from' => 'nullable',
            // 'timing_to' => 'nullable',
            // 'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            // 'is_featured' => 'nullable',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the gym by ID
        $gym = Gym::find($id);

        // Handle image upload
        if ($request->hasFile('thumbnail')) {
            // Delete the old image if it exists
            if ($gym->thumbnail && file_exists(public_path($gym->thumbnail))) {
                unlink(public_path($gym->thumbnail));
            }

            // Get the file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the file to public/thumbnails
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $fileNameToStore);
            // Save the path in the database
            $gym->thumbnail = 'thumbnails/' . $fileNameToStore;
        }

        // Update gym record only if fields are present in the request
        if ($request->has('name')) {
            $gym->name = $request->input('name');
        }
        
         if ($request->has('location')) {
            $gym->location = $request->input('location');
        }
        
         if ($request->has('state')) {
            $gym->state = $request->input('state');
        }
        
        if ($request->has('description')) {
            $gym->description = $request->input('description');
        }
        if ($request->has('contact')) {
            $gym->contact = $request->input('contact');
        }
        if ($request->has('location')) {
            $gym->location = $request->input('location');
        }
        if ($request->has('fees')) {
            $gym->fees = $request->input('fees');
        }
        if ($request->has('timing_from')) {
            $gym->timing_from = $request->input('timing_from');
        }
        if ($request->has('timing_to')) {
            $gym->timing_to = $request->input('timing_to');
        }
        if ($request->has('is_featured')) {
            $gym->is_featured = $request->input('is_featured');
        } else {
            $gym->is_featured = 0;
        }

        $gym->save();

        return redirect()->route('gym.index')->with('success', 'Gym updated successfully!');
    }

    public function updateGymProfile(Request $request, $id)
    {

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            'description' => 'nullable|string|max:255',
            'contact' => 'nullable',
            'location' => 'nullable',
            'fees' => 'nullable',
            'timing_from' => 'nullable',
            'timing_to' => 'nullable',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'is_featured' => 'nullable',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the gym by ID
        $gym = Gym::find($id);

        // Handle image upload
        if ($request->hasFile('thumbnail')) {
            // Delete the old image if it exists
            if ($gym->thumbnail && file_exists(public_path($gym->thumbnail))) {
                unlink(public_path($gym->thumbnail));
            }

            // Get the file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the file to public/thumbnails
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $fileNameToStore);
            // Save the path in the database
            $gym->thumbnail = 'thumbnails/' . $fileNameToStore;
        }

        // Update gym record only if fields are present in the request
        if ($request->has('name')) {
            $gym->name = $request->input('name');
        }
        if ($request->has('description')) {
            $gym->description = $request->input('description');
        }
        if ($request->has('contact')) {
            $gym->contact = $request->input('contact');
        }
        if ($request->has('location')) {
            $gym->location = $request->input('location');
        }
        if ($request->has('fees')) {
            $gym->fees = $request->input('fees');
        }
        if ($request->has('timing_from')) {
            $gym->timing_from = $request->input('timing_from');
        }
        if ($request->has('timing_to')) {
            $gym->timing_to = $request->input('timing_to');
        }
        if ($request->has('is_featured')) {
            $gym->is_featured = 1;
        } else {
            $gym->is_featured = 0;
        }
        $gym->save();

        return redirect()->route('gym.show', $id)->with('success', 'Gym updated successfully!');
    }

    public function toggleFeatured(Request $request, $id)
    {
        // Find the gym by its ID
        $gym = Gym::findOrFail($id);

        // Get the current status before updating
        $previousStatus = $gym->is_featured;

        // Update the status based on the request value
        $gym->is_featured = $request->input('is_featured');
        $gym->save();

        // Set the default message
        $message = 'Gym featured status updated successfully!';

        // Check if the status has changed
        if ($previousStatus != $gym->is_featured) {
            // Adjust the message based on the new status
            $message = "The Gym " . $gym->name . ($gym->is_featured ? ' is featured now.' : ' is not featured anymore.');
        }

        // Redirect with the dynamic message
        return redirect()->route('gym.index')->with('success', $message);
    }


    public function destroy($id)
    {
        $gym = Gym::find($id);

        if (!$gym) {
            return redirect()->route('gym.index')->with('error', 'Gym not found!');
        }

        $gym->delete();
        return redirect()->route('gym.index')->with('success', 'Gym deleted successfully!');
    }
    
    public function saveGym(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'gym_id' => 'required|integer',
        ]);
    
        $user = auth()->user();
        
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated.'], 401);
        }
    
        $gymId = $validatedData['gym_id'];
    
        // Check if the gym is already saved by the user
        $existingSavedGym = SavedGyms::where('user_id', $user->id)
                                      ->where('gym_id', $gymId)
                                      ->first();
    
        if ($existingSavedGym) {
            // If it exists, delete the record
            $existingSavedGym->delete();
    
            // Return JSON response with unsaved success message
            return response()->json(['success' => true, 'message' => 'You have unsaved the gym successfully!']);
        } else {
            // If it does not exist, create a new SavedGyms instance and save the data
            SavedGyms::create([
                'user_id' => $user->id,
                'gym_id' => $gymId,
            ]);
    
            // Return JSON response with saved success message
            return response()->json(['success' => true, 'message' => 'Gym saved successfully!']);
        }
    }
    



    
}
