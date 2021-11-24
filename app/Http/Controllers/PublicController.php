<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carousel;

use App\Models\Article;

use App\Models\Komentar;

use App\Models\User;
use App\Http\Controllers\Auth;

class PublicController extends Controller
{
    public function index(){
        $carousel = Carousel::All();
        $article = Article::All();
        

        
        return view('welcome', compact('carousel', 'article'));
    }
    
    public function detail($id){
        $detail = Article::find($id);

        return view('detail_article', compact('detail'));
    }

    public function komentar(){

        $daftar_komentar = Komentar::All();

        return view('komentar', compact('daftar_komentar'));
    }

    public function store(Request $request){

        $message = [
            'required' => 'form ini wajib diisi',
            'max' => 'from ini diisi maksimal 100 karakter'
        ];

        $this->validate($request, [
            'email' => 'required|max:100',
            'nama' => 'required|max:100',
            'komentar' => 'required'
        ], $message);

        $komentar = Komentar::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'komentar' => $request->komentar,
        ]);
        return redirect() -> back() 
            -> with('success', 'komentar berhasil ditambahkan');
    }

    public function post_komentar (Request $request){
        $id = auth()->id();
        // dd($id);
        $save = komentar::create([
            'user_id' => $id,
            'id_article' => $request->id_article,
            'content' => $request->content,
        ]);
        return redirect() -> back() 
            -> with('success', 'komentar berhasil ditambahkan');
    }
}
