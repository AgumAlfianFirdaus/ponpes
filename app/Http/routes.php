 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/', function () {
	 // return view('new_login');

// });
Route::get('read','AdminController@readData');

Route::post('login', 'AdminController@login');
Route::get('read','SantriController@readData');
Route::get('/','SantriController@index');
Route::get('read_santri','SantriController@readSantri');
Route::post('daftar_santri','SantriController@daftarSantri');
Route::get('hapus/{nis}','SantriController@delete');
Route::get('santri_edit/{nis}','SantriController@editdata');
Route::post('santri_process', 'SantriController@proccesEdit');
Route::get('edit-user/{id}', 'SantriController@editUser');
Route::post('user-process', 'SantriController@userProcess');
Route::get('data_guru', 'SantriController@dataGuru');
Route::get('print', 'SantriController@printsantri');
Route::get('printbayar', 'SantriController@printBayar');
Route::get('pembayaran', 'SantriController@pembayaran');
Route::post('bayar', 'SantriController@bayarProses');  
Route::get('del/{no_pembayaran}', 'SantriController@delPembayaran');
Route::get('logout', 'SantriController@logout');

// Route::post('santri_daf', ' SantriController@santriDaf');

Route::get('/gentelella/index','ExampleController@index');
Route::get('/gentelella/blank','ExampleController@blank');
Route::get('/gentelella/manage','ExampleController@manage');
Route::get('/gentelella/form','ExampleController@form');
Route::get('/gentelella/outbox','ExampleController@outbox');
Route::get('/gentelella/profile','ExampleController@profile');

