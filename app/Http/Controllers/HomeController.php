<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public final function index(){
        return view('page1-home.index');
    }

    public final function getProduk(){
        $produk = DB::table('produk')
            ->select('nama_produk','deskripsi_produk','harga_produk')
            ->get();
        return view('test',['produk'=>$produk]);
    }

    public final function getKategori(){
        $kategori = DB::table('kategori')
            ->select('nama_kategori')
            ->get();
        return view('kategori',['kategori'=>$kategori]);
    }

    public final function test(){
        $newProduk = DB::table('new_produk')
            ->select('nama_produk')
            ->join('produk','produk_id','=','id_produk')
            ->get();
        return view('test',['hasil'=>$newProduk]);

    }

    public final function getTag(){
        $tag = DB::table('tag')
            ->select('nama_tag')
            ->get();
        return view('tag',['tag'=>$tag]);
    }

    public final function getTopProduk(){
        $top = DB::table('top_produk')
            ->select('nama_produk')
            ->join('produk','produk_id','=','id_produk')
            ->get();
        return view('topProduk',['topProduk'=>$top]);
    }
}
