<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PersonalTrainerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::group(['middleware' => ['auth', 'verified']], function () {
//     Route::resource('member-package', '\App\Http\Controllers\Member\MemberPackageController');
// });

// Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/members', [MemberController::class, 'index'])->name('members');

//     // Route::get('/add-data', [MergeCreateDataController::class, 'index'])->name('add-data');

//     // Route::resource('member', '\App\Http\Controllers\Member\MemberController');
//     // Route::delete('members-bulk-delete', [MemberController::class, 'bulkDelete'])->name('members-bulk-delete');

//     // Route::resource('member-package', '\App\Http\Controllers\Member\MemberPackageController');
// });

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('member', MemberController::class);
    Route::get('/member-create', [MemberController::class, 'create'])->name('member.create');
    Route::get('/member-edit-{id}', [MemberController::class, 'edit'])->name('member.edit');
    Route::get('/member-{id}', [App\Http\Controllers\Admin\MemberController::class, 'destroy'])->name('deleteMember');
    // Route::patch('/member-update-{id}', [MemberController::class, 'edit'])->name('member.update');

    Route::get('/personal-trainer', [PersonalTrainerController::class, 'index'])->name('personal-trainer-index');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


require __DIR__ . '/auth.php';
