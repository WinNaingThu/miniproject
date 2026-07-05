<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TimeLeap;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductFormController;
use App\Http\Controllers\RegisterFormController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PlatformController;
use App\Models\Finance;
use App\Http\Controllers\PlannerController;
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
    return view('welcome');
});

Route::get('in', function () {
    return view('index');
});

Route::get('sn', function () {
    return view('snake');
});

Route::get('fr', function () {
    return view('frame');
});

Route::get('/one', function () {

    $name = 'Win Win';
    $age = '18';
    $grade = 'Final Year';

    return view('studentinfo', compact('name','age','grade') ); 
    });

Route::get('/two', function(){
    $name=' win win ';
    $age = 17;
    $grade ='Firstyear';
    $about='He is Gay';
    $gg='Gay is Dog';
     
    return view('dog', compact('name','age','grade','about','gg'));
    });

   
    Route::get('/hello', [HelloController::class, 'index']);

    Route::get('/stututu', [StudentController::class,'show']);

    Route::get('/numnum', [NumberController::class,'index']);

    Route::get('timetimetime', [TimeLeap::class,'index']);

    Route::get('/studentformform', [FormController::class,'showForm']);
    Route::post('/studentformform', [FormController::class,'submitForm']);


    Route::post('/win', [ProductFormController::class,'store']);
    Route::get('/win', [ProductFormController::class,'create']);


    Route::get('/register', [RegisterFormController::class, 'showregister']);
    Route::post('/r', [RegisterFormController::class, 'resultregister']);


    Route::post('/jobexample', [JobController::class,'store']);
    Route::get ('/jobexample', [JobController::class,'create']);





Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');






Route::resource ('vehicleform', VehicleController::class);


Route::get('/register/step1', [RegisterController::class, 'showStep1'])->name('register.step1');
Route::post('/register/step1', [RegisterController::class, 'postStep1'])->name('register.postStep1');
Route::post('/register/step2', [RegisterController::class, 'postStep2'])->name('register.postStep2');


Route::get('/platform', [PlatformController::class, 'showForm'])->name('platform.form');
Route::post('/platform', [PlatformController::class, 'redirectToPlatform'])->name('platform.redirect');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert-finances', function () {
    $records = [
        [
            'title' => 'Freelance Web Project',
            'type' => 'income',
            'amount' => 1500.00,
            'note' => 'Earned from international client for e-commerce website development.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Office Space Rental',
            'type' => 'outcome',
            'amount' => 450.50,
            'note' => 'Monthly rent payment for January.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Bonus from Company',
            'type' => 'income',
            'amount' => 500.00,
            'note' => 'Performance bonus received.',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ];
    Finance::insert($records);
    return "Successfully added (3) Databases";
    });



    
   

Route::get('/', function () {
    return redirect('/healthform');
});
Route::get('/healthsystem', function () {
    return redirect('/healthform');
});
Route::resource('/healthform', HealthController::class);



Route::get('/', [PlannerController::class, 'index'])->name('planners.index');
Route::get('/create', [PlannerController::class, 'create'])->name('planners.create');
Route::post('/store', [PlannerController::class, 'store'])->name('planners.store');
Route::get('/edit/{id}', [PlannerController::class, 'edit'])->name('planners.edit');
Route::post('/update/{id}', [PlannerController::class, 'update'])->name('planners.update');
Route::get('/delete/{id}', [PlannerController::class, 'destroy'])->name('planners.delete');
Route::get('/complete/{id}', [PlannerController::class, 'complete'])->name('planners.complete');