<?php

use App\Http\Livewire\AllDashboards;
use App\Http\Livewire\AllProblems;
use App\Http\Livewire\AllRadars;
use App\Http\Livewire\AllUsers;
use App\Http\Livewire\Dashboards;
use App\Http\Livewire\Problems;
use App\Http\Livewire\Profiles;
use App\Http\Livewire\Radars;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboards', Dashboards::class)->name('dashboard');

Route::get('/problems', Problems::class)->name('problem');

Route::get('/radars', Radars::class)->name('radar_site');

Route::get('/profiles', Profiles::class)->name('my_profile');

Route::get('/allradars', AllRadars::class)->name('all_radar');

Route::get('/allproblems', AllProblems::class)->name('all_problem');

Route::get('/allusers', AllUsers::class)->name('all_user');

Route::get('/alldashboard', AllDashboards::class)->name('all_dashboard');
