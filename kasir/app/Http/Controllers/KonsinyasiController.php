<?php

namespace App\Http\Controllers;

use App\Models\Konsinyasi;
use Illuminate\Http\Request;

class KonsinyasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsinyasi = Konsinyasi::paginate(5);
        return view('page.konsinyasi.index')->with([
            'konsinyasi' => $konsinyasi,
        ]);
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
        $data = [
            'konsinyasi' => $request->input('konsinyasi'),
        ];

        Konsinyasi::create($data);

        return back()->with('message_delete', 'Data Konsinyasi Sudah dihapus'); 
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
        $data = [
            'konsinyasi' => $request->input('konsinyasi'),
        ];

        $datas = Konsinyasi::findOrFail($id);
        $datas->update($data);
        return back()->with('message_delete', 'Data Konsinyasi Sudah dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Konsinyasi::findOrFail($id);
        $data->delete();
        return back()->with('message_delete','Data Konsinyasi Sudah dihapus');
    }
}
