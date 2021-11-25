<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carousel;
class CarouselController extends Controller
{
    public function index(){

        $list = Carousel::All();

        return view('backoffice.carousel', compact('list'));
    }

    
    public function store(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('nama_gambar');
            
            $image_name = time() . "_" . $image->getClientOriginalName();
    
            // dd($image_name);
    
            $tujuan_upload = 'storage';
            $image->move($tujuan_upload, $image_name);
    
            $image = Carousel::create([
                'nama_gambar' => $image_name
            ]);
    
            return redirect('carousel')
            -> with('success', 'Article berhasil ditambah');   
        }else {
            return redirect() -> back() 
            -> with('success', 'masukkan gambar terlebih dahulu');
        }
    }

    public function destroy($id){
        $destroy = Carousel::find($id)->delete();

        return redirect('carousel')
            -> with('success', 'gambar berhasil dihapus');
    }
}
