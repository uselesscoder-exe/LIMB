<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
 public function pass(){
    $data = "Asmodeus";
    $data2 = "<br>Ucok";
   return view('latihan',compact('data'));
 }
 public function pass1(){
     $siswa = [
         ['nama'=>'Belphegor','kelas'=>'XI RPL 1'],
         ['nama'=>'Asmodeus','kelas'=>'XI RPL 2'],
         ['nama'=>'Amon','kelas'=>'XI RPL 3'],
     ];
     return view('latihan1',['data'=>$siswa]);
 }
 public function pass2()
 {
    $tabungan = Tabungan::all()->take(10);
    return view('latihan2',compact('tabungan'));
 }
}
