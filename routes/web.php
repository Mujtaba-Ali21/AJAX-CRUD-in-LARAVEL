    <?php


use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;


// Create

Route::get('/', function () {
    return view('welcome');
});

Route::post('/createProduct', [StudentController::class, 'createProduct']);


// Read

Route::get('/show', [StudentController::class, 'showData']);


// Update

Route::get('/edit/{id}', [StudentController::class, 'editData']);
Route::post('/update/{id}', [StudentController::class, 'updateData']);


// Delete

Route::get('/remove/{id}', [StudentController::class, 'removeData']);
