<?php

namespace App\Http\Controllers;

use App\Konten;
use Illuminate\Http\Request;
use Validator;
use Alert;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konten = Konten::paginate(10);
        return view('konten.index', compact('konten'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // $validator = Validator::make($input, [

        //     'judul_berita' => 'max:50',
        //     'isi_berita' => 'max:500',
        //     'penerbit' => 'max:50',


        // ]);
        // if($validator->fails())
        //     {
        //         return back()->withInput();
        //     }
        $input['tanggal_terbit'] = date('Y-m-d');
            Konten::create($input);
            Alert::success('success','Input Berhasil');
            return redirect()->route('konten.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $konten = Konten::find($id);
        return view('konten.detail', compact('konten'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konten = Konten::find($id);
        return view('konten.edit', compact('konten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $konten = Konten::find($id);

        $input = $request->all();
        $validator = Validator::make($input, [

            'judul_konten' => 'max:50',
            'isi_konten' => 'max:500',
            'penerbit' => 'max:50',


        ]);
        if($validator->fails())
            {
                return back()->withInput();
            }
            $konten->update($input);

            Alert::success('success','Update Berhasil');
            return redirect()->route('konten.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $konten = Konten::find($id);
        $konten->delete();

        Alert::success('success','Hapus Berhasil');
        return redirect()->route('konten.index');
    }
}
