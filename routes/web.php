<?php
use App\Http\Controllers\OdsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\ProjetoController;
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

Route::get('/projetos', function () {
    $odss = DB::select('SELECT * FROM odss');
    return view('projetos')->with('odss', $odss);
});
Route::controller(OdsController::class)->group(function () {
    Route::get('/ods/{id}', 'show')->name('ods.show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::controller(PaginaInicialController::class)->group(function () {
    Route::get('/', 'paginainicial')->name('index');
});

// Route::controller(ProjetoController::class)->group(function () {
//     Route::get('/projetos', 'index')->name('projetos.index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/admin/projetos', [ProjetoController::class, 'cadastro'])->name('projeto.cadastro');

});

require __DIR__.'/auth.php';
