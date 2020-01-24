<?php

use Illuminate\Database\Seeder;

class TugasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
    ['nama_buku'=>'How to commit suicide', 'id_buku'=>'ZF909', 'jumlah_halaman'=>'180', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to make a bad kraby patty', 'id_buku'=>'SW219', 'jumlah_halaman'=>'98', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to make your friend cried and become the most hated guy in the city', 'id_buku'=>'SW999', 'jumlah_halaman'=>'131', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to be a bad cashier', 'id_buku'=>'SW391', 'jumlah_halaman'=>'185', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to swear your neighboor', 'id_buku'=>'SW212', 'jumlah_halaman'=>'110', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to make chum bucket success', 'id_buku'=>'SW909', 'jumlah_halaman'=>'180', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to be famous', 'id_buku'=>'SW222', 'jumlah_halaman'=>'111', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to beak your toe nail', 'id_buku'=>'SW121', 'jumlah_halaman'=>'122', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to burn your stove', 'id_buku'=>'SW331', 'jumlah_halaman'=>'110', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward'],
    ['nama_buku'=>'How to play clarinet', 'id_buku'=>'SW211', 'jumlah_halaman'=>'154', 'penerbit'=>'Pt,gudang garam', 'penulis'=>'Squidward']
];
    DB::table('tugas')->insert($posts);
    }
}
