<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

// route resourch controller
Route::resource('user',UserController::class);

// Jadi misalkan kalian memanggil route(‘user.index’) maka
// method yang akan digunakan adalah GET. Route dari resource
// controller juga bisa diberi nama, namun caranya agak berbeda.

Route::resource('user',UserController::class)->names([
    'index' => 'user.list'
    // tentukan nama action kemudian beri nama setelah prefix user
]);

// Penulisan parameternya juga berbeda, disini akan menggunakan
// atribut parameters.
Route::resource('user',UserController::class)->parameters([
    'user' => 'user_type'
    // Akan menghasilkan URI /user/{user_type}
]);




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
