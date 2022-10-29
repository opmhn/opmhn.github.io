<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slide;
use App\Models\artikel;
use App\Models\kategori;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
     
    $kategori = kategori :: all();
    $wilayah = Wilayah::all();
    $artikel = artikel :: all();
    $slide = Slide :: all();
     return view('fronted.home',[
        'kategori' => $kategori,
        'wilayah' => $wilayah,
        'artikel' => $artikel,
        'slide' => $slide
     ]);

    }
    public function detail($slug){
        $kategori = kategori :: all();
        $wilayah = Wilayah :: all();
        $artikel = artikel :: where('slug',$slug)->first();
        return view('fronted.artikel.detail',[
            'artikel' => $artikel,
            'kategori' => $kategori,
            'wilayah' => $wilayah,
        ]);
    }
     public function view($id)
    {
        // $kategori = kategori::where('slug',$slug)->first();
        // if ($kategori) {
        //     $artikel = artikel :: where('kategori_id',$kategori->id)->get();
        //     return view ('fronted.kat',compact('artikel','kategori'));
        // } else {
        //   return redirect('/');
        // }
        
            //   $kategori = kategori :: all();
            //   $slide = Slide :: all();
            //   $artikel = artikel :: where('kategori_id',$slug)->get();
            //   return view('fronted.home',[
            //       'artikel' => $artikel,
            //       'kategori' => $kategori,
            //       'slide' => $slide ]);
             
      $data['kategori'] = kategori :: all();
      $data['wilayah'] = Wilayah::all();
      $data['slide'] = Slide :: all();
      $data['artikel'] = artikel::where('kategori_id','=',$id)->get();
      return view ('fronted.kat')->with($data);
    }
    public function viewwil($id)
    {
        // $kategori = kategori::where('slug',$slug)->first();
        // if ($kategori) {
        //     $artikel = artikel :: where('kategori_id',$kategori->id)->get();
        //     return view ('fronted.kat',compact('artikel','kategori'));
        // } else {
        //   return redirect('/');
        // }

        //   $kategori = kategori :: all();
        //   $slide = Slide :: all();
        //   $artikel = artikel :: where('kategori_id',$slug)->get();
        //   return view('fronted.home',[
        //       'artikel' => $artikel,
        //       'kategori' => $kategori,
        //       'slide' => $slide ]);

        $data['kategori'] = kategori::all();
        $data['wilayah'] = Wilayah::all();
        $data['slide'] = Slide::all();
        $data['artikel'] = artikel::where('wilayah_id', '=', $id)->get();
        return view('fronted.wil')->with($data);
    }
}