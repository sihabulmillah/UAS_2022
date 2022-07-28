<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public $pesanan;
    public function __construct()
    {
        $this->pesanan = new Pesanan();
    }
    public function index()
    {
        $batas = 6;
        $data = Pesanan::simplePaginate($batas);
        $jumlah = $data->count();
        if($data->count() >= 6){
        $no = $batas * ($data->currentPage() -1);
        }else{$no = 1;}
        return view('pesanan.index',["data" => $data,"no"=>$no,'jumlah' => $jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id_pengguna' => 'required|min:3|max:10',
            'jumlah' => 'required'
        ];
        $message = [
            'require' => ':attribute tidak boleh kosong',
            'min' => ':attribute terlalu pendek',
            'max' => ':attribute terlalu panjang'
        ];

        $this->validate($request,$rules,$message);
        $this->pesanan->id_pengguna = $request->id_pengguna;
        $this->pesanan->diamond_id = $request->diamond;
        $this->pesanan->jumlah_diamond = $request->jumlah;
        
        $this->pesanan->save();
        return redirect()->route('checkout');
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
