<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------
    | Dashboard Redirect (ROLE-BASED)
    |--------------------------------------------------
    */
    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->role === 'educator') {
            return redirect()->route('educator.dashboard');
        }

        if ($user->role === 'learner') {
            return redirect()->route('learner.dashboard');
        }

        abort(403);
    })->name('dashboard');


    /*
    |--------------------------------------------------
    | Educator Routes
    |--------------------------------------------------
    */
    Route::get('/educator/dashboard', function () {
        abort_if(auth()->user()->role !== 'educator', 403);
        return view('educator.dashboard');
    })->name('educator.dashboard');

    // Educators manage courses
    Route::resource('courses', CourseController::class)
        ->middleware('auth');


    /*
    |--------------------------------------------------
    | Learner Routes
    |--------------------------------------------------
    */
    Route::get('/learner/dashboard', function () {
        abort_if(auth()->user()->role !== 'learner', 403);
        return view('learner.dashboard');
    })->name('learner.dashboard');


    /*
    |--------------------------------------------------
    | Profile Routes (Both Roles)
    |--------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Auth Routes (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
