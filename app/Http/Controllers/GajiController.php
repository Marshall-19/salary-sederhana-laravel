<?php

namespace App\Http\Controllers;

use App\Gaji;
use App\Tunjangan;
use App\Karyawan;
use App\Jabatan;
use Illuminate\Http\Request;
use Alert;
use Validator;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $karyawan = Karyawan::paginate(10);
        return view('gaji.index', compact('karyawan'));


    	// return data ke view
        // return view('gaji.index', compact('gaji','tunjangan','karyawan'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_gaji($id)
    {

        $karyawan = Karyawan::find($id);
        $tunjangan = Tunjangan::all();

    	// return data ke view
        return view('gaji.tambah', compact('tunjangan','karyawan', 'id'))->with('i');
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
       $array = implode(',', $request->input('id_tunjangan'));
       $total_tunjangan = 0;
       $input['id_tunjangan'] = json_encode($array);
       foreach($request->input('id_tunjangan') as $id){
           $total_tunjangan += Tunjangan::find($id)->nominal;
       }
       $karyawan = Karyawan::find($request->id_karyawan);
       $gaji_pokok = $karyawan->jabatan->gaji_pokok;
       $input['total_tunjangan'] = $total_tunjangan;
       $input['tanggal_gajian'] = date('Y-m-d');
       $input['total_gaji'] = $gaji_pokok + $total_tunjangan - $input['potongan'];
       Gaji::create($input);

       Alert::success('Berhasil','Gaji Ditambahkan');
       return redirect('gaji');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        $gaji = Gaji::where('id_karyawan', $id)->get()->all();
        return view('gaji.detail', compact('karyawan', 'gaji'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        $karyawan = Karyawan::find($id);
        // $jabatan = jabatan::find($id);
        $Tunjangan = Tunjangan::all();
        return view('karyawan.edit', compact('karyawan','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        //
    }
}
