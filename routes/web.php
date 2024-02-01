<?php

use App\Http\Controllers\Admin\CustomerServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberTransactionsController;
use App\Http\Controllers\Admin\MyPackageController;
use App\Http\Controllers\Admin\PersonalTrainerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaketMemberController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\TeamController;
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

// Create Personal Trainer
Route::get('/personal-trainer-create', [App\Http\Controllers\Admin\PersonalTrainerController::class, 'create'])->name('createPersonalTrainer');

// route untuk menampilkan view edit Personal Trainer
Route::get('/personal-trainer/{id}/edit', [App\Http\Controllers\Admin\PersonalTrainerController::class, 'edit'])->name('editPersonalTrainer');

// Store Personal Trainer
Route::post('/personal-trainer-create', [App\Http\Controllers\Admin\PersonalTrainerController::class, 'store'])->name('storePersonalTrainer');

// route untuk menyimpan perubahan kategori, perhatikan bahwa fungsi routenya adalah post
// Route::post('/personal-trainer/{id}/edit', [App\Http\Controllers\Admin\PersonalTrainerController::class, 'update'])->name('updatePersonalTrainer');

Route::resource('personal-trainer', PersonalTrainerController::class);

// Edit Personal Trainer
Route::get('/personal-trainer-{id}', [PersonalTrainerController::class, 'edit'])->name('personal-trainer.edit');

// Destroy
Route::get('/personal-trainer-delete-{id}', [App\Http\Controllers\Admin\PersonaltrainerController::class, 'destroy'])->name('deletePersonalTrainer');

// Team page
Route::get('/teams', [TeamController::class, 'index'])->name('teams');

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
    Route::get('/member-edit-{id}', [MemberController::class, 'edit'])->name('editMember');
    Route::get('/member-{id}', [App\Http\Controllers\Admin\MemberController::class, 'destroy'])->name('deleteMember');
    // Route::patch('/member-update-{id}', [MemberController::class, 'edit'])->name('member.update');

    // Route::resource('member-transaction', MemberTransactionsController::class);
    Route::get('/member-transactions', [MemberTransactionsController::class, 'index'])->name('mtIndex');
    // Route::get('/member-transactions', [MemberTransactionsController::class, 'index'])->name('member-transactions-index');
    // Route::get('/member-transactions-create', [MemberTransactionsController::class, 'create'])->name('member-transactions.create');
    // Route::get('/member-transactions-edit-{id}', [MemberTransactionsController::class, 'edit'])->name('member-transactions.edit');
    // Route::get('/member-transactions-{id}', [App\Http\Controllers\Admin\MemberTransactionsController::class, 'destroy'])->name('deleteMemberTransactions');

    Route::get('/personal-trainer', [PersonalTrainerController::class, 'index'])->name('personal-trainer-index');
    Route::get('/customer-service', [CustomerServiceController::class, 'index'])->name('customer-service-index');
    Route::get('/my-package', [MyPackageController::class, 'index'])->name('my-package');
});


Route::get('/paket-member', [App\Http\Controllers\Admin\PaketMemberController::class, 'index'])->name('daftarPaketMember');

Route::get('paket-member-create', [App\Http\Controllers\Admin\PaketMemberController::class, 'create'])->name('createPaketMember');

Route::post('paket-member-create', [App\Http\Controllers\Admin\PaketMemberController::class, 'store'])->name('storePaketMember');

Route::get('paket-member-{id}-edit', [App\Http\Controllers\Admin\PaketMemberController::class, 'edit'])->name('editPaketMember');

Route::post('paket-member-{id}-edit', [App\Http\Controllers\Admin\PaketMemberController::class, 'update'])->name('updatePaketMember');

Route::get('paket-member-{id}-delete', [App\Http\Controllers\Admin\PaketMemberController::class, 'destroy'])->name('deletePaketMember');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



require __DIR__ . '/auth.php';
