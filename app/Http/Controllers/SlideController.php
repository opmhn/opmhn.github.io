<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $slide = Slide :: all();
     return view('back.slide.index',compact ('slide') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_slide'=> 'required',
            'gambar_slide'=>'mimes:jpeg,gif,jpg,png,bmp'
        ]);
        if (!empty($request ->file('gambar_slide'))) {
            $data = $request->all();
            $data['gambar_slide']= $request-> file('gambar_slide')->store('slide');

            Slide::create($data);
            return redirect()->route('slide.index')->With('BERHASIL', 'DATA BERHASIL DISIMPAN');
        } else {
            $data = $request->all();
            Slide::create($data);

            return redirect()->route('slide.index')->With('BERHASIL', 'DATA BERHASIL DISIMPAN');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide=Slide::find($id);
        Storage::delete($slide->gambar_slide);
        $slide->delete();
        return redirect()->route('slide.index')->with(['BERHASIL'=>'DATA BERHASIL HAPUS']);
    }
}
