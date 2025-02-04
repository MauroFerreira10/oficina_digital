<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ViaturaController;
use App\Http\Controllers\ServicoController;
use App\Models\Servico;
use App\Http\Controllers\UserController;



Route::get('/viaturas/{viatura}/edit', [ViaturaController::class, 'edit'])->name('viaturas.edit');

Route::get('/viaturas/{viatura}/edit', [ViaturaController::class, 'edit'])->name('viaturas.edit');

Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/viaturas/{viatura}/edit', [ViaturaController::class, 'edit'])->name('viaturas.edit');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        Route::get('/viaturas/{viatura}/edit', [ViaturaController::class, 'edit'])->name('viaturas.edit');

    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/cliente/viaturas', [ViaturaController::class, 'index'])->name('cliente.viaturas');
    });
    Route::resource('viaturas', ViaturaController::class)->middleware('auth');

    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('viaturas', ViaturaController::class);
    });

    Route::middleware(['role:secretario'])->group(function () {
        Route::get('/secretario/viaturas', [ViaturaController::class, 'index']);
    });

    Route::middleware(['role:tecnico'])->group(function () {
        Route::get('/tecnico/viaturas', [ViaturaController::class, 'verTecnico']);
    });

    Route::middleware(['role:cliente'])->group(function () {
        Route::get('/cliente/estado', [ViaturaController::class, 'estadoCliente']);
    });
});


Route::middleware(['auth'])->get('/servicos', function () {
    // Recupera os serviços do banco de dados
    $servicos = Servico::all();
    return view('servicos.index', ['servicos' => $servicos]);
})->name('servicos.index');


Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('viaturas', ViaturaController::class)->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

// Definindo a rota home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rota do dashboard (pode incluir outros conteúdos, por exemplo)
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rotas para listar viaturas e serviços
Route::middleware(['auth'])->group(function () {
    Route::get('/viaturas', [ViaturaController::class, 'index'])->name('viaturas.index');
    Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
