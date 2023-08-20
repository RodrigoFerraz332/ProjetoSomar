<?php

use App\Http\Controllers\OdsController;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\MasterRegisteredUserController;

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
    $causas = DB::select('SELECT * FROM causa_de_atuacao');

    return view('projetos')
        ->with('odss', $odss)
        ->with('causas', $causas);
})->name('ods.index');

Route::controller(OdsController::class)->group(function () {
    Route::get('/ods/busca', 'filter')->name('ods.filter');
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

Route::group(['middleware' => ['role:master']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/admin/projetos/aprovar', [ProjetoController::class, 'aprovarProjetos'])->name('projetos.lista');
    Route::get('/admin/projetos/aprovar/{id}', [ProjetoController::class, 'aprovarProjeto'])->name('projetos.lista.aprovar');
    
    
    

    Route::get('master_register', [MasterRegisteredUserController::class, 'create'])
        ->name('master_register');
      

    Route::post('master_register', [MasterRegisteredUserController::class, 'store']);
});

// Route::controller(ProjetoController::class)->group(function () {
//     Route::get('/projetos', 'index')->name('projetos.index');
// });


Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/admin/projetos', [ProjetoController::class, 'cadastro'])->name('projeto.cadastro');
    Route::get('/admin/projetos', [ProjetoController::class, 'edit'])->name('projeto.form');
    

});


require __DIR__.'/auth.php';
