<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public $pesanan;
    public $bayar;
    public function __construct()
    {
        $this->pesanan = new Pesanan();
        $this->bayar = new Pembayaran();
    }
    public function landing()
    {
        $data = DB::table('game')->limit(6)->get();
        return view('landing',
        ["data" => $data]
    );
    }

    public function game()
    {
        $data = Game::all();
        return view('games',
        ["data" => $data]
    );
    }

    public function topup($id)
    {
        $data = Game::find($id);
        return view('topup',
        ["data" => $data]
    );
    }

    public function checkout($id)
    {   
        $data = Pesanan::find($id);
        return view('checkout',
        ["data" => $data]
    );
    }
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
        return redirect()->route('checkout',[$this->pesanan->id]);
    }
    public function bayar(Request $request)
    {
        $this->bayar->pesanan_id = $request->id;
        $this->bayar->total_bayar = $request->total;
        $this->bayar->save();
        return redirect()->route('landing');
    }
}
