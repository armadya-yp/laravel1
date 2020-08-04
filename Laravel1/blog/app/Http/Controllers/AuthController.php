<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    //Route::get('dosen', 'DosenController@index');


public function index(){
    return "Halo ini adalah method index, dalam controller AuthController. ";
}

}