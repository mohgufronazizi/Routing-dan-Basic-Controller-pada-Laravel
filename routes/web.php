<?php

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


// Latihan Routing

// coba routing
// Route::get('/coba-routing', function () {
//     return 'ini adalah hasil dari routing';
// });

// routing dengan parameter 
Route::get('/coba-routing/{nama}', function ($nama) {
    return 'ini adalah hasil dari routing. Kenalin aku '.$nama;
});

// routing dengan parameter tahap 2
Route::get('/coba-routing/{nama?}', function ($nama = "Nilai Default") {
    return 'ini adalah hasil dari routing. Kenalin aku '.$nama;
});

//route dengan controller dan route bernama

//Pada praktek selanjutnya akan menggunakan Controller sehingga
// route akan mengarah ke Controller untuk menerima balikan. Contohnya
// kalian punya Controller dengan nama UserController dan akan
// mengakses method index()
Route::get('/users', [UserController::class,'index']);


// lita dapat mengubah nama route user menjadi sesuka kita, conoth diubah ke list-user
// Route::get('/users', [UserController::class,'index'])->name('list-user');

// Setelah itu di dalam project apabila kalian ingin memanggil route
// tersebut cukup menggunakan sintaks route(‘nama_route’)

// generrate url
// route('list-user');

// generate redirect
// redirect(route('list-user'));

// route group
// Group memungkinkan kalian untuk berbagi atribut route seperti
// middleware tanpa perlu mendefinisikan lagi atribut tersebut di setiap
// route.
// Route::middleware(['auth'])->group(function(){
//     // route ini menggunakan middleware auth
//     Routh::get(
//         '/users',
//         [UserController::class, 'index']
//     )->name('list-user');

//     // Route ini dan selanjutnya juga akan menggunakan middlware auth
//     Routh::get('/user/profile',function(){

//     });
// });


// Route Prefix
// Prefix dapat digunakan untuk mengawali setiap route dalam grup
// dengan URI yang diberikan. Misalkan dari route sebelumnya akan
// mengawali semua route dalam group dengan ‘users’ maka kita
// berikan atribut prefix(‘users’). Apabila ada route bernama di
// dalam group wajib menambahkan “.” di akhir nama prefix sehingga
// menjadi prefix(‘users.’).
// Route::prefix('users.')->group(function(){
//     // URI route akan otomatis diawali users/..
//     Routh::get(
//         '/',
//         [UserController::class, 'index']
//     )->name('list-user');

//     // pemanggilan rote name akan menjadi users.list-user
//     Routh::get('/profile',function(){

//     });
// });