<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function latihan()
    {
        return 'lorem ipsum';
    }

    public function tambah($a = 0, $b = 0){
        $tennis = $a + $b;
        $tennis1 = $a - $b;
        $tennis2 = $a / $b;
        $tennis3 = $a * $b;
        echo $a.'+'.$b.'='.$tennis;
        echo '<br>'.$a.'-'.$b.'='.$tennis1;
        echo '<br>'.$a.':'.$b.'='.$tennis2;
        echo '<br>'.$a.'x'.$b.'='.$tennis3;
    }
    public function plus($a = 0, $b = 0){
        $str = $a+$b;
        $plus=$a+$b;
        if(isset($a)){
            $str = $a.'+';
        }
        if (isset($b)) {
            $str .= $b .'='.$plus;
        }
        return $str;
    }
    public function minus($a = 0, $b = 0){
        $str = $a-$b;
        $plus=$a-$b;
        if(isset($a)){
            $str = $a.'-';
        }
        if (isset($b)) {
            $str .= $b .'='.$plus;
        }
        return $str;
    }
    public function spare($a = 0, $b = 0){
        $str = $a/$b;
        $plus=$a/$b;
        if(isset($a)){
            $str = $a.'/';
        }
        if (isset($b)) {
            $str .= $b .'='.$plus;
        }
        return $str;
    }
    public function multi($a = 0, $b = 0){
        $str = $a*$b;
        $plus=$a*$b;
        if(isset($a)){
            $str = $a.'X';
        }
        if (isset($b)) {
            $str .= $b .'='.$plus;
        }
        return $str;
    }
    public function loop()
    {
        $data = [
            ['Nama'=>'Pride','Kelas'=>'Class A','Money'=>50000],
            ['Nama'=>'Leviathan','Kelas'=>'Class B','Money'=>36000],
            ['Nama'=>'Wrath','Kelas'=>'Class C','Money'=>25000],
            ['Nama'=>'Sloth','Kelas'=>'Class D','Money'=>9000],
            ['Nama'=>'Greed','Kelas'=>'Class E','Money'=>15000],
            ];
            // $dd($data);
        foreach($data as $val => $key)
        {
            if ($key['Money']>=50000) {
                $ta=$key['Money']*25/100;
                $total=$key['Money']-$ta;
            }
            elseif ($key['Money']>=25000) {
                $ta=$key['Money']*15/100;
                $total=$key['Money']-$ta;
            }
            elseif ($key['Money']>=10000) {
                $ta=$key['Money']*10/100;
                $total=$key['Money']-$ta;
            }
            else{
                $ta=0;
                $total=$key['Money'];
            }
            echo "<hr> Nama :". $key['Nama'].
            " <br> Kelas :". $key['Kelas'].
            " <br> Money :".$key['Money'].
            " <br> Tabungan :".$ta.
            " <br> Total uang :".$total."<hr>";
        }
    }
    public function kantor(){
        $Manager=5000000;
        $Sekretaris=3500000;
        $Staff=2500000;
        $data = [
            ['Nama'=>'Anggara','Agama'=>'Islam','Alamat'=>'Jl Martawangsa','Jenis Kelamin'=>'Laki-Laki','Jabatan'=>'Manager','Jam Kerja'=>250,'Gaji Bersih'=>$Manager],
            ['Nama'=>'Enterprise','Agama'=>'Hindu','Alamat'=>'Jl Kidul','Jenis Kelamin'=>'Perempuan','Jabatan'=>'Sekretaris','Jam Kerja'=>200,'Gaji Bersih'=>$Sekretaris],
            ['Nama'=>'Alan','Agama'=>'Kristen','Alamat'=>'Jl Gilgamesh','Jenis Kelamin'=>'Laki-Laki','Jabatan'=>'Staff','Jam Kerja'=>150,'Gaji Bersih'=>$Staff],
        ];
        foreach ($data as $key => $value) {
            if ($value['Jam Kerja']>=250) {
                $a=$value['Gaji Bersih']*10/100;
                $bonus=$value['Gaji Bersih']+$a;
                $ppn = $bonus*0.025;
                $gatot = $bonus-$ppn;
            }
            elseif ($value['Jam Kerja']>=200) {
                $a=$value['Gaji Bersih']*5/100;
                $bonus=$value['Gaji Bersih']+$a;
                $ppn = $bonus*0.025;
                $gatot = $bonus-$ppn;
            }
            else {
                $a = 0;
                $bonus=$value['Gaji Bersih'];
                $ppn = $bonus*0.025;
                $gatot = $bonus-$ppn;
            }
            echo "<hr> Nama :". $value['Nama'].
            " <br> Agama :". $value['Agama'].
            " <br> Alamat :".$value['Alamat'].
            " <br> Jenis Kelamin :".$value['Jenis Kelamin'].
            " <br> Jabatan :".$value['Jabatan'].
            " <br> Jam Kerja :". $value['Jam Kerja'].
            " <br> Gaji Bersih :". $value['Gaji Bersih'].
            " <br> Bonus :".$a.
            " <br> Potongan :".$ppn.
            " <br> Total uang :".$gatot."<hr>";
        }
    }
}
