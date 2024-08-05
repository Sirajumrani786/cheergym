<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\CustomizeFrontendController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index']);

Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('help', [FrontController::class, 'help'])->name('help');

// Route for showing login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Route for submitting login form
Route::post('login', [AuthController::class, 'login']);

// Route for logging out
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

use App\Models\Gym;
use App\Models\Review;
use App\Models\User;

Route::get('/dashboard', function () {
    // Fetch data
    $totalGyms = Gym::count();
    $totalReviews = Review::count();
    $totalUsers = User::count();
    $recentUsers = User::orderBy('created_at', 'desc')->take(5)->get();
    $recentGyms = Gym::orderBy('created_at', 'desc')->take(5)->get();
    $recentReviews = Review::orderBy('created_at', 'desc')->take(5)->get();

    // Pass data to the view
    return view('dashboard', [
        'totalGyms' => $totalGyms,
        'totalReviews' => $totalReviews,
        'totalUsers' => $totalUsers,
        'recentUsers' => $recentUsers,
        'recentGyms' => $recentGyms,
        'recentReviews' => $recentReviews,
    ]);
})->middleware(['auth', 'admin_check'])->name('dashboard');

// Route::post('saveGym', [GymController::class, 'saveGym'])->name('gym.save')->middleware(['auth']);

Route::post('saveGym', [GymController::class, 'saveGym'])->name('gym.save')->middleware('auth');

Route::middleware(['auth', 'admin_check'])->group(function () {

    // Show form to add a new gym
    Route::get('addGym', [GymController::class, 'create'])->name('gym.create');

    // Store the newly added gym
    Route::post('addGym', [GymController::class, 'store'])->name('gym.store');

    // Show all gyms
    Route::get('seeGyms', [GymController::class, 'index'])->name('gym.index');

    // Show details of a specific gym
    Route::get('seeGym/{gym}', [GymController::class, 'show'])->name('gym.show');

    Route::post('updateGymProfile/{id}', [GymController::class, 'updateGymProfile'])->name('gym.updateGymProfile');

    // Show form to edit a specific gym
    Route::get('editGym/{gym}', [GymController::class, 'edit'])->name('gym.edit');

    // Update a specific gym
    Route::post('updateGym/{gym}', [GymController::class, 'update'])->name('gym.update');

    // Update if gym is featured or now 
    Route::post('/updateGymFeatured/{review}', [GymController::class, 'toggleFeatured'])->name('gym.featured');

    // Delete a specific gym
    Route::delete('deleteGym/{gym}', [GymController::class, 'destroy'])->name('gym.destroy');


    // Show form to add a new review
    Route::get('addReview', [ReviewController::class, 'create'])->name('review.create');

    // Store the newly added review
    Route::post('addReview', [ReviewController::class, 'store'])->name('review.store');

    // Show all reviews
    Route::get('seeReviews', [ReviewController::class, 'index'])->name('review.index');

    // Show details of a specific review
    Route::get('seeReview/{review}', [ReviewController::class, 'show'])->name('review.show');

    // Show form to edit a specific review
    Route::get('editReview/{review}', [ReviewController::class, 'edit'])->name('review.edit');

    // Update a specific review
    Route::post('updateReview/{review}', [ReviewController::class, 'update'])->name('review.update');

    // Update review status
    Route::post('/updateReviewStatus/{review}', [ReviewController::class, 'updateStatus'])->name('review.status');

    // Delete a specific review
    Route::delete('deleteReview/{review}', [ReviewController::class, 'destroy'])->name('review.destroy');


    // Show form to add a new User
    Route::get('addUser', [UserController::class, 'create'])->name('user.create');

    // Store the newly added User
    Route::post('addUser', [UserController::class, 'store'])->name('user.store');

    // Show all User
    Route::get('seeUsers', [UserController::class, 'index'])->name('user.index');

    // Show details of a specific User
    Route::get('seeUser/{user}', [UserController::class, 'show'])->name('user.show');

    // Show details of a update User
    Route::post('userUpdate/{id}', [UserController::class, 'updateProfile'])->name('user.updateProfile');

    // Show details of a logged in User
    Route::get('profile/{user}', [UserController::class, 'profile'])->name('user.profile');

    // Show form to edit a specific User
    Route::get('editUser/{user}', [UserController::class, 'edit'])->name('user.edit');

    // Update a specific User
    Route::post('updateUser/{user}', [UserController::class, 'update'])->name('user.update');

    // Delete a specific User
    Route::delete('deleteUser/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::post('import', [ImportController::class, 'import'])->name('gyms.import');

    Route::get('customizeMainPage', [CustomizeFrontendController::class, 'editMainPage'])->name('mainpage.edit');
    Route::post('mainpage/store', [CustomizeFrontendController::class, 'storeMainPage'])->name('mainpage.store');
    Route::post('mainpage/update', [CustomizeFrontendController::class, 'updateMainPage'])->name('mainpage.update');
    Route::get('/terms-and-conditions', [CustomizeFrontendController::class, 'editTermsPage'])->name('terms.edit');
    Route::post('/terms-and-conditions/store', [CustomizeFrontendController::class, 'storeTermsPage'])->name('terms.store');
    Route::post('/terms-and-conditions/update', [CustomizeFrontendController::class, 'updateTermsPage'])->name('terms.update');
    Route::get('/privacy-policy', [CustomizeFrontendController::class, 'editPrivacyPage'])->name('privacy.edit');
    Route::post('/privacy-policy/store', [CustomizeFrontendController::class, 'storePrivacyPage'])->name('privacy.store');
    Route::post('/privacy-policy/update', [CustomizeFrontendController::class, 'updatePrivacyPage'])->name('privacy.update');
    Route::get('/site-guidelines', [CustomizeFrontendController::class, 'editSiteGuidelines'])->name('guideline.edit');
    Route::post('/site-guidelines/store', [CustomizeFrontendController::class, 'storeSiteGuidelines'])->name('guideline.store');
    Route::post('/site-guidelines/update', [CustomizeFrontendController::class, 'updateSiteGuidelines'])->name('guideline.update');
    
    
    
      Route::get('seeReport', [ReportController::class, 'index'])->name('report.index');
});

// Frontend routes
Route::get('index', [FrontController::class, 'index'])->name('index');
Route::get('search', [FrontController::class, 'search'])->name('search');
Route::get('gym/{id}', [FrontController::class, 'gym'])->name('gym');
Route::get('gym_rating/{id}', [FrontController::class, 'gym_rating'])->name('gym_rating');
Route::get('compare', [FrontController::class, 'compare'])->name('compare');
Route::get('fregister', [FrontController::class, 'fregister'])->name('fregister');
Route::get('flogin', [FrontController::class, 'flogin'])->name('flogin');
Route::get('user_pannel', [FrontController::class, 'user_pannel'])->name('user_pannel');
Route::get('terms', [FrontController::class, 'terms'])->name('terms');
Route::get('privacy', [FrontController::class, 'privacy'])->name('privacy');
Route::get('guidelines', [FrontController::class, 'guidelines'])->name('guidelines');
Route::post('user/login', [FrontController::class, 'do_login'])->name('user.login');
Route::post('user/register', [FrontController::class, 'do_register'])->name('user.register');
Route::post('user/Store-Gym', [FrontController::class, 'storeGym'])->name('user.storeGym');
Route::post('updateProfile/{id}', [FrontController::class, 'updateProfile'])->name('fuser.update');

Route::post('ratingstore', [FrontController::class, 'ratingstore'])->name('ratingstore');

Route::post('updateReview/{review}', [frontController::class, 'updateReview'])->name('freview.update')->middleware('auth');

Route::get('/reviews/likes-dislikes', [frontController::class, 'getLikesDislikes'])->name('freview.update.likes');

Route::get('edit_review/{id}', [FrontController::class, 'edit_review'])->name('edit_review')->middleware('auth');

Route::post('/like-review', [FrontController::class, 'likeReview'])->name('freview.like')->middleware('auth');

Route::post('/report-review', [FrontController::class, 'insertReport'])->name('freview.report')->middleware('auth');


require __DIR__ . '/auth.php';
