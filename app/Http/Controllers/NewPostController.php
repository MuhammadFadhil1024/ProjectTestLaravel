<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use Carbon\Carbon;


class NewPostController extends Controller
{
    public function index(){
        return view('backoffice.newpost');
    }

    public function store(Request $request)
    {   
        
        // dd($date);
        
        
        if ($request->hasFile('image')) {
            $date = Carbon::today();
            $image = $request->file('image');
            
            $image_name = time() . "_" . $image->getClientOriginalName();
            
            $tujuan_upload = 'storage';
            $image->move($tujuan_upload, $image_name);
            
            $message = [
                'required' => 'form ini wajib diisi',
                'max' => 'from ini diisi maksimal 100 karakter'
            ];
            
            $this->validate($request, [
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'title' => 'required|max:100',
                'sub_title' => 'required|max:100'
            ], $message);
            
            $article = Article::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'content' => $request->content,
                'date' => $date,
                'image' => $image_name,
            ]);
        }else {
            return redirect() -> back() 
            -> with('success', 'masukkan gambar terlebih dahulu');
            
        }

        }

        
}
