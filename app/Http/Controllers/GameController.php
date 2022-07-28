<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $new_game;
    public $update_game;
    public function __construct()
    {
        $this->new_game = new Game();
    }
    public function index()
    {
        $data = Game::all();
        $no = 1;
        return view('game.index',["data" => $data,"no" => $no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
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
            'nama' => 'required|min:3|max:50,',
            'deskripsi' => 'required|min:99|',
            'gambar' => 'required|max:500|mimes:jpg,jpeg,png'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'mimes' => ":attribute ekstensi error, gunakan : .png, .jpg, .jpeg"
        ];

        $this->validate($request, $rules, $message);


        $this->new_game->nama_game = $request->nama;
        $this->new_game->slug = Str::slug($request->nama);
        $this->new_game->deskripsi = $request->deskripsi;
        $nm = $request->gambar;
        $nama_file = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
        $this->new_game->gambar = $nama_file;
        $nm->move(public_path() . "/upload", $nama_file);
        $this->new_game->save();

        return redirect()->route('game.index')->with('status','Game Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Game::find($id);
        return view('game.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_game = Game::find($id);
        return view("game.put",['edit' => $edit_game]);
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

        $update_game = Game::find($id);
        
        $rules = [
            'nama' => 'required|min:3|max:50,',
            'deskripsi' => 'required|min:3|',
            'gambar' => 'required|max:500|mimes:jpg,jpeg,png'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'mimes' => ":attribute ekstensi error, gunakan : .png, .jpg, .jpeg"
        ];

        $this->validate($request, $rules, $message);


        $update_game->nama_game = $request->nama;
        $update_game->slug = Str::slug($request->nama);
        $update_game->deskripsi = $request->deskripsi;
        $gambar_lama = $update_game->gambar;

        if(!$request->gambar){
           $update_game->gambar = $gambar_lama; 
        }else{
            if($request->gambar != $gambar_lama){
                $gambar_baru = $request->gambar;
                $nama_file = time() . rand(100, 999) . "." . $gambar_baru->getClientOriginalExtension();
                $update_game->gambar = $nama_file;
                $gambar_baru->move(public_path() . "/upload", $nama_file);
                $path = "upload/".$gambar_lama;
                if(File::exists($path)){
                    File::delete($path);
                }
            }else{
                $request->gambar->move(public_path()."/upload" . $gambar_lama);
            }
        }
        $update_game->update();

        return redirect()->route('game.index')->with('status','Game Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Game::find($id);

        $path = "upload/" . $hapus->gambar;
        if(File::exists($path)){
            File::delete($path);
        }
        $hapus->delete();
        return redirect()->route("game.index")->with("status","Game Berhasil Dihapus");
    }
}
