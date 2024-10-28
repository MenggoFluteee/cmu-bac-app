<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\LaborController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticularController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectMinimumEquipmentController;
use App\Http\Controllers\ProjectParticularController;
use App\Http\Controllers\ProjectParticularEquipmentController;
use App\Http\Controllers\ProjectParticularLaborController;
use App\Http\Controllers\ProjectParticularMaterialController;
use App\Http\Controllers\ProjectSignatoryController;
use App\Http\Controllers\ProjectTechnicalPersonnelController;
use App\Models\Project;
use App\Models\ProjectMinimumEquipment;
use App\Models\ProjectParticular;
use App\Models\ProjectParticularEquipment;
use App\Models\ProjectParticularLabor;
use App\Models\ProjectParticularMaterial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
