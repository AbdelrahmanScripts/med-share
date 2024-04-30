<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/home', function () {
    return Inertia::render('admins/home');
})->name('home');

Route::get('/ListgovDonations', function () {
    return Inertia::render('admins/Donations/index');
})->name('ListgovDonations');

Route::get('/govDonations', function () {
    return Inertia::render('admins/Donations/governments');
})->name('govDonations');

Route::get('/dashboardView', function () {
    return Inertia::render('admins/Dashboard/dashboardView');
})->name('dashboardView');

Route::get('/charityTable', function () {
    return Inertia::render('admins/Charity/charityTable');
})->name('charityTable');

Route::get('/users', function () {
    return Inertia::render('admins/Users/userTable');
})->name('users');

Route::get('/systemUsers', function () {
    return Inertia::render('admins/SystemUsers/systemUserTable');
})->name('systemUsers');

Route::get('/systemUsers', function () {
    return Inertia::render('admins/SystemUsers/systemUserTable');
})->name('systemUsers');

Route::get('/ListgovDonations/show', function () {
    return Inertia::render('admins/Donations/show');
})->name('showDonation');

Route::get('charityTable/show', function () {
    return Inertia::render('admins/Charity/show');
})->name('showCharity');

Route::get('UsersTable/show', function () {
    return Inertia::render('admins/Users/show');
})->name('showUser');

Route::get('SystemUsersTable/show', function () {
    return Inertia::render('admins/SystemUsers/show');
})->name('showSystemUser');



// test login
Route::get('/test', function () {
    return view('test');
})->name('test');





require __DIR__.'/auth.php';
