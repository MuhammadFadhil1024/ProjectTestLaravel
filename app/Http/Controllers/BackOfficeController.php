<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use App\Models\Komentar;

use App\Models\Visi;

class BackOfficeController extends Controller
{

    public function index(){

        $article = Article::count();
        $list = Article::All();
        $komentar = Komentar::count();
        $visi = Visi::all();
        // dd($article);

        return view('backoffice.dashboard', compact('article', 'list','komentar', 'visi'));
    }

    public function detail($id){

        $detail = Article::find($id);
        // dd($detail);
        return view('backoffice.update', compact('detail'));

    }

    
    public function update($id, Request $request){
        $message = [
            'required' => 'form ini wajib diisi',
            'max' => 'from ini diisi maksimal 100 karakter'
        ];
        $this->validate($request, [
            // 'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:100',
            'sub_title' => 'required|max:100'
        ], $message);
        
        $updateArticle = Article::find($id);
        
        // dd($updateArticle);

        $image = $request->file('image');
        
        $image_name = time() . "_" . $image->getClientOriginalName();

        $tujuan_upload = 'storage';
        $image->move($tujuan_upload, $image_name);

        $updateArticle->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'coantent' => $request->content,
            'image' => $image_name
        ]);

        return redirect('dashboard')
        -> with('success', 'Article berhasil diupdate');

    }

    public function destroy($id)
    {
    $destroy = Article::find($id)->delete();
    return redirect('dashboard')
    -> with('success', 'Article berhasil dihapus');
    }
    
}
