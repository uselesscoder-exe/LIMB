<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;
use App\People;
class BookController extends Controller
{
    public function bookall()
 {
    $book = Tugas::all();
    return view('bookall',compact('book'));
 }
 public function bookfind($id){
    $book= Tugas::findOrFail($id);
    return view('bookfind',compact('book'));
 }
 public function pall(){
    $people= People::all();
    return view('pall',compact('people'));
 }
 public function pfind($id){
    $people= People::findOrFail($id);
    return view('pfind',compact('people'));
 }
}
