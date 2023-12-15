<?php 

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Home,Form};
use App\Http\Livewire\{About,Anasayfa,Contact,Galeri,Services};
use Livewire\Livewire;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('livewire.anasayfa');
})->name('home'); // Anasayfa route'u 'home' ismiyle adlandırıldı.

Route::get('/services', function () {
    return view('livewire.services');
});

Route::get('/galeri', function () {
    return view('livewire.galeri');
});

Route::get('/contact', function () {
    return view('livewire.contact');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Kullanıcı giriş yapmışsa anasayfaya yönlendirme
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Çıkış işlemi
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    
    // Kullanıcı adını güncelleme ve profil yönlendirmeleri
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Giriş yap ve kayıt ol sayfaları
require __DIR__.'/auth.php';
