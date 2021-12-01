<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use Illuminate\Http\Request;
use Validator;
use Alert;

class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tunjangan = Tunjangan::paginate(10);
        return view('tunjangan.index', compact('tunjangan'))->with('i');
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
        $validator = Validator::make($input, [

            'nama_tunjangan' => 'max:50',
            'nominal' => 'max:9'

        ]);
        if($validator->fails())
            {
                return back()->withInput();
            }
            Tunjangan::create($input);
            Alert::success('success','Input Berhasil');
            return redirect()->route('tunjangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tunjangan  $tunjangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.detail', compact('tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tunjangan  $tunjangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.edit', compact('tunjangan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tunjangan  $tunjangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tunjangan = Tunjangan::find($id);

        $input = $request->all();
        $validator = Validator::make($input, [

            'nama_tunjangan' => 'max:50',
            'nominal' => 'max:9'

        ]);
        if($validator->fails())
            {
                return back()->withInput();
            }
            $tunjangan->update($input);
            Alert::success('success','Input Berhasil');
            return redirect()->route('tunjangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tunjangan  $tunjangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tunjangan = Tunjangan::find($id);
        $tunjangan->delete();

        Alert::success('success','Input Berhasil');

        return redirect()->route('tunjangan.index')
        ->with('success','Berhasil!');

    }
    public function test(){
        echo "Hello";
    }
}
