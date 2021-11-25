<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visi;

class VisiController extends Controller
{
    public function detail($id){
        $visi = Visi::find($id);

        return view('backoffice.visi', compact('visi'));
    }

    public function update($id, Request $request){

        
        $updateVisi = Visi::find($id);
        // dd($request->all());
        
        $message = [
            'required' => 'form ini wajib diisi',
            'max' => 'from ini diisi maksimal 100 karakter'
        ];
        $this->validate($request, [
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|max:100',
            'content' => 'required|max:100'
        ], $message);
        
        $image = $request->file('image');
        
        $image_name = time() . "_" . $image->getClientOriginalName();
        
        $tujuan_upload = 'storage';
        $image->move($tujuan_upload, $image_name);
        
        $updateVisi->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name
        ]);

        return redirect() -> back() 
        -> with('success', 'komentar berhasil ditambahkan');
    }
}
