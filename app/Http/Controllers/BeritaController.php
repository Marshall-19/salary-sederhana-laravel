<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Validator;
use Alert;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::paginate(10);
        return view('berita.index', compact('berita'))->with('i');
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
            Berita::create($input);
            Alert::success('success','Input Berhasil');
            return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        $input = $request->all();
        $validator = Validator::make($input, [

            'judul_berita' => 'max:50',
            'isi_berita' => 'max:500',
            'penerbit' => 'max:50',


        ]);
        if($validator->fails())
            {
                return back()->withInput();
            }
            $berita->update($input);
            Alert::success('success','Update Berhasil');
            return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        Alert::success('success','Hapus Berhasil');
        return redirect()->route('berita.index');

    }
}
