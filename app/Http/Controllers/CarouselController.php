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
        $image = $request->file('nama_gambar');
        
        $image_name = time() . "_" . $image->getClientOriginalName();

        // dd($image_name);

        $tujuan_upload = 'carousel_image';
        $image->move($tujuan_upload, $image_name);

        $image = Carousel::create([
            'nama_gambar' => $image_name
        ]);

        return redirect('carousel')
        -> with('success', 'Article berhasil ditambah');
    }

    public function destroy($id){
        $destroy = Carousel::find($id)->delete();

        return redirect('carousel')
            -> with('success', 'gambar berhasil dihapus');
    }
}
