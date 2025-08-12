
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registro;
use App\Http\Controllers\login;
use GuzzleHttp\Middleware;

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

Route::get('/',[pageController::class, 'inicio']);

Route::get('/',[pageController::class, 'inicio'])->name('inicio');

Route::get('/impresoras',[pageController::class, 'impresoras'])->name('impresoras');


Route::get('/soporte/{equipo?}',[pageController::class, 'equipoSoporte'])->name('soporte');


Route::get('/consumibles',[pageController::class,'consumibles'])->name('consumibles');

Route::get('/soporte',[pageController::class,'soporte'])->name('soporte');

Route::get('/login',[pageController::class,'login'])->name('login')->middleware('guest');

Route::post('/login', [login::class,'store'])->name('store');

Route::get('/registro',[pageController::class,'registro'])->name('registro')->middleware('guest');

Route::post('/registro',[registro::class,'store'])->name('store');
Route::post('/revisarEmail',[registro::class,'revisarEmail'])->name('revisarEmail');
Route::post('/duplicacionDeTel',[registro::class,'duplicacionDeTel'])->name('duplicacionDeTel');

Route::get('/nuestra-historia', function () {
    return view('nuestra-historia');
})->name('nuestra-historia');

Route::get('/mision-vision', function () {
    return view('mision-vision');
})->name('mision-vision');

Route::get('/servicios-especializados', function () {
    return view('servicios-especializados');
})->name('servicios-especializados');

Route::get('/cobertura-atencion', function () {
    return view('cobertura-atencion');
})->name('cobertura-atencion');

Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
})->name('preguntas-frecuentes');

Route::get('/guia-compra', function () {
    return view('guia-compra');
})->name('guia-compra');

Route::get('/destroy',[login::class,'destroy'])->name('destroy');





