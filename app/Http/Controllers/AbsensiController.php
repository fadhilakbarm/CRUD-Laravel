<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['absensi'] = Absensi::all();
        return view('absensi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $absensi             = new Absensi;
        $absensi->nama       = $request->nama;
        $absensi->jam_masuk  = $request->jam_masuk;
        $absensi->jam_pulang = $request->jam_pulang;
        $absensi->keterangan = $request->keterangan;
        $absensi->save();

        return redirect('absensi');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {        
        
        $absensi = Absensi::find($id);
        
        return view('absensi.show' , ['absensi' => $absensi]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $absensi = Absensi::find($id);

        return view('absensi.edit', ['absensi' => $absensi ]);

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
        
        $absensi = Absensi::find($id);

        $absensi->nama       = $request->nama;
        $absensi->jam_masuk  = $request->jam_masuk;
        $absensi->jam_pulang = $request->jam_pulang;
        $absensi->keterangan = $request->keterangan;
        $absensi->update();

         return redirect('absensi');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
     
        $absensi = Absensi::find($id);

        $absensi->delete();

        return redirect('absensi');

    }
}
