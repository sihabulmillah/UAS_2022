<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diamond;
use App\Models\Game;
class DiamondController extends Controller
{
    public $new_diamond;
    public function __construct()
    {
        $this->new_diamond = new Diamond();
    }
    public function index()
    {
        $batas = 6;
        $data = Diamond::simplePaginate($batas);
        $jumlah = $data->count();
        $no = $batas * ($data->currentPage() -1);
        return view('diamond.index',["data" => $data,"no"=>$no,'jumlah' => $jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Game::all();
        return view('diamond.create',compact('data'));
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
            'pilih' => 'required',
            'harga' => 'required|digits_between:4,6'
        ];
        $message = [
            'required' => ":attribute tidak boleh kosong",
            'digits_between' =>":attribute min 4 digit max 6 digit"
        ];

        $this->validate($request,$rules,$message);

        $this->new_diamond->game_id = $request->pilih;
        $this->new_diamond->harga_diamond = $request->harga;

        $this->new_diamond->save();
        return redirect()->route('diamond.index')->with('status','Data Diamond Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_data = Diamond::find($id);
        $data = Game::all();
        return view('diamond.put',['edit' => $edit_data,"data" => $data]);
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
        $rules = [
            'pilih' => 'required',
            'harga' => 'required|digits_between:4,6'
        ];
        $message = [
            'required' => ":attribute tidak boleh kosong",
            'digits_between' =>":attribute min 4 digit max 6 digit"
        ];

        $this->validate($request,$rules,$message);

        $update_diamond = Diamond::find($id);
        $update_diamond->game_id = $request->pilih;
        $update_diamond->harga_diamond = $request->harga;

        $update_diamond->update();
        return redirect()->route('diamond.index')->with('status','Data Diamond Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Diamond::find($id);

        $hapus->delete();
        return redirect()->route('diamond.index')->with('status','Data Diamond Berhasil Dihapus');
    }
}
