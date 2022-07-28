<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public $bayar;
    public function __construct()
    {
        $this->bayar = new Pembayaran();
    }
    public function index()
    {
    
        $batas = 6;
        $data = Pembayaran::simplePaginate($batas);
        $jumlah = $data->count();
        if($data->count() >= 6){
        $no = $batas * ($data->currentPage() -1);
        }else{$no = 1;}
        return view('pembayaran.index',["data" => $data,"no"=>$no,'jumlah' => $jumlah]);
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
        $this->bayar->pesanan_id = $request->pesanan;
        $this->bayar->total_bayar = $request->bayar;
        $this->bayar->save();
        return redirect()->route('landing');
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
        //
    }
}
