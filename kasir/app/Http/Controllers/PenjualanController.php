<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::paginate(5);
        return view('page.penjualan.index')->with([
            'penjualan' => $penjualan
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
            'kode_penjualan' => $request->input('kode_penjualan'),
            'tgl_penjualan' => $request->input('tgl_penjualan'),
            'id_konsumen' => $request->input('id_konsumen'),
            'status_pembelian' => $request->input('status_pembelian'),
            'user' => $request->input('user'),
        ];

        Penjualan::create($data);

        return back()->with('message_delete', 'Data Penjualan Sudah dihapus');
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
            'kode_penjualan' => $request->input('kode_penjualan'),
            'tgl_penjualan' => $request->input('tgl_penjualan'),
            'id_konsumen' => $request->input('id_konsumen'),
            'status_pembelian' => $request->input('status_pembelian'),
            'user' => $request->input('user'),
        ];

        $datas = Penjualan::findOrFail($id);
        $datas->update($data);
        return back()->with('message_delete', 'Data Penjualan Sudah dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penjualan::findOrFail($id);
        $data->delete();
        return back()->with('message_delete','Data Penjualan Sudah dihapus');
    }
}
