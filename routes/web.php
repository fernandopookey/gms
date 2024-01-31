<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaketMemberController;
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
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/paket-member', [App\Http\Controllers\Admin\PaketMemberController::class, 'index'])->name('daftarPaketMember');

Route::get('paket-member-create', [App\Http\Controllers\Admin\PaketMemberController::class, 'create'])->name('createPaketMember');

Route::post('paket-member-create', [App\Http\Controllers\Admin\PaketMemberController::class, 'store'])->name('storePaketMember');

Route::get('paket-member-{id}-edit', [App\Http\Controllers\Admin\PaketMemberController::class, 'edit'])->name('editPaketMember');

Route::post('paket-member-{id}-edit', [App\Http\Controllers\Admin\PaketMemberController::class, 'update'])->name('updatePaketMember');

Route::get('paket-member-{id}-delete', [App\Http\Controllers\Admin\PaketMemberController::class, 'destroy'])->name('deletePaketMember');

require __DIR__ . '/auth.php';
