<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class  Tugas1Controller extends Controller
{
    //di sini isi controller Tugas1
    public function index(){
        return view('tugas1');
    }
}