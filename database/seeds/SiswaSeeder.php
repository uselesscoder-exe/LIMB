<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        //
        ['nama'=>'Asmodeus', 'nisn'=>'ZF909', 'jenis_kelamin'=>'Laki-Laki', 'Alamat'=>'Desa seven hells', 'tgl_lahir'=>'2002-9-17', 'umur'=>'18'],
        ['nama'=>'Amon', 'nisn'=>'XR402', 'jenis_kelamin'=>'Laki-Laki', 'Alamat'=>'Desa seven hells', 'tgl_lahir'=>'2003-9-17', 'umur'=>'17'],
        ['nama'=>'Ira', 'nisn'=>'RQ444', 'jenis_kelamin'=>'Laki-Laki', 'Alamat'=>'Desa seven hells', 'tgl_lahir'=>'2004-9-17', 'umur'=>'16'],
        ['nama'=>'Jalter', 'nisn'=>'NF404', 'jenis_kelamin'=>'Perempuan', 'Alamat'=>'Desa seven hells', 'tgl_lahir'=>'2005-9-17', 'umur'=>'15'],
        ['nama'=>'Mammon', 'nisn'=>'LO209', 'jenis_kelamin'=>'Laki-Laki', 'Alamat'=>'Desa seven hells', 'tgl_lahir'=>'2006-9-17', 'umur'=>'14']
];
    DB::table('siswa')->insert($posts);
    }
}
