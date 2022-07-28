<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public $new_user;
    public function __construct()
    {
        $this->new_user = new Pengguna();
    }
    public function index()
    {
        $data = Pengguna::all();
        $no = 1;

        return view('user.index',["data" => $data,"no" =>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.create");
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
            'nama' => 'required|min:3|max:50|',
            'username' => 'required|min:3|max:50|',
            'password' => 'required|min:3|max:50',
            'konfirmasi' => 'required|min:3|max:50|same:password',
            'email' => 'required',
            'alamat' => 'required',
            'level' => 'required',
            'foto' => 'required|max:500|mimes:jpg,jpeg,png'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'same' => ":attribute password tidak sesuai",
            'mimes' => ":attribute ekstensi error, gunakan : .png, .jpg, .jpeg"
        ];

        $this->validate($request, $rules, $message);

        $this->new_user->nama = $request->nama;
        $this->new_user->username = $request->username;
        $this->new_user->password = Hash::make($request->password);
        $this->new_user->role = $request->level;
        $this->new_user->alamat = $request->alamat;
        $this->new_user->email = $request->email;

        $nm = $request->foto;
        $nama_file = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
        $this->new_user->foto = $nama_file;
        $nm->move(public_path() . "/upload", $nama_file);
        $this->new_user->save();
        return redirect()->route('user.index')->with('status', 'Data user berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pengguna::find($id);
        return view('user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengguna::find($id);
        return view('user.edit',["data" => $data]);
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
            'nama' => 'required|min:3|max:50|',
            'username' => 'required|min:3|max:50|',
            'password' => 'required|min:3|max:50',
            'email' => 'required',
            'alamat' => 'required',
            'konfirmasi' => 'required|min:3|max:50|same:password',
            'level' => 'required',
            'foto' => 'required|max:500|mimes:jpg,jpeg,png'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'same' => ":attribute password tidak sesuai",
            'mimes' => ":attribute ekstensi error, gunakan : .png, .jpg, .jpeg"
        ];

        $this->validate($request, $rules, $message);

        $update_pengguna = Pengguna::find($id);

        $update_pengguna->nama = $request->nama;
        $update_pengguna->username = $request->username;
        $update_pengguna->password = Hash::make($request->password);
        $update_pengguna->role = $request->level;
        $update_pengguna->alamat = $request->alamat;
        $update_pengguna->email = $request->email;
        $gambar_lama = $update_pengguna->foto;

        if(!$request->foto){
           $update_pengguna->foto = $gambar_lama; 
        }else{
            if($request->foto != $gambar_lama){
                $gambar_baru = $request->foto;
                $nama_file = time() . rand(100, 999) . "." . $gambar_baru->getClientOriginalExtension();
                $update_pengguna->foto = $nama_file;
                $gambar_baru->move(public_path() . "/upload", $nama_file);
                $path = "upload/".$gambar_lama;
                if(File::exists($path)){
                    File::delete($path);
                }
            }else{
                $request->foto->move(public_path()."/upload" . $gambar_lama);
            }
        }
        $update_pengguna->save();
        return redirect()->route('user.index')->with('status', 'Data user berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();
        return redirect()->route('user.index')->with('status', 'Data user berhasil di hapus');
    }
}
