<?php

namespace App\Http\Controllers;

use App\Wali;
use Auth;
use App\User;
use App\ModelSiswa;
use App\SiswaWali;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WaliController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('base.Wali.dataWali');
    }

    public function dashboardWali()
    {   
        
        $data = Wali::where('id', '=', Auth::user()->id)->first();
        // $siswa = ModelSiswa::('')
        // dd($data);
        return view('wali.wali', compact('data'));
    }

    public function profileWali(){
        $id = Auth::user()->id;
        // dd($id);
        $data = Wali::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        $siswaWali = SiswaWali::join('users', 'users.id', '=', 'siswa_wali.siswa_id')
                                ->where('wali_id', '=', $id)
                                ->select('users.*', 'siswa_wali.*')
                                ->get();
        // dd($siswaWali);
        // $waliSiswa = Wali::where('id', '')
        return view('wali.profile.profileWali', compact('data', 'user', 'siswaWali'));
    }

    // public function editProfile($id)
    // {
    //     $data = Wali::where('id','=',$id)->get();
    //     $user = User::where('id','=',$id)->get();
    //     return view('wali.editprofile', compact('data', 'user'));
    // }

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
        //
        $this->validate($request,[
                'tanggal_lahir' => 'required',          
           ],
    
           [
                'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong',
           ]);
        // dd($request);
    
        $data = new Wali();
        $data->id = $request->id;
        $data->tanggal_lahir = $request->tanggal_lahir;

        if($request->file){
            $foto = $request->file('file');
            $nama_file = time()."_".$foto->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $foto->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        $data->save();
        return redirect('informasiWali');

    }

    public function informasiWali(){

        $data = Wali::where('id', '=', Auth::user()->id)->get();
        
        return view('base.Wali.informasiWali', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Wali::where('id','=',$id)->get();
        $user = User::where('id','=',$id)->get();
        return view('wali.profile.editProfile', compact('data', 'user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name' => 'required|min:3|string',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|min:11|email',
       ],
       [
            'name.min' => 'Nama lengkap tidak boleh kurang dari 3 karakter',
            'name.string' => 'Nama lengkap harus berupa huruf',
            'phone.min' => 'No telp tidak boleh kurang dari 11 angka',
            'phone.numeric' => 'No telp harus berisi angka',
            'email.min' => 'Email tidak boleh kurang dari 11 karakter',
            'email.email' => 'Email tidak valid',
       ]);

            $user = User::where('id',$id)->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->save();
            
            $data = Wali::where('id',$id)->first();
            $data->tanggal_lahir = $request->tanggal_lahir;
            if($request->file){
                $foto = $request->file('file');
                $nama_file = time()."_".$foto->getClientOriginalName();  
                $tujuan_upload = 'data_file';
                $foto->move($tujuan_upload,$nama_file);
                $data->file = $nama_file;  
            }
            $data->save();

        if ($user->wasChanged('email') && $user->email) {
            $user->email_verified_at=NULL;
            $user->active=0;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect('verify?email='.$user->email);
        }
        else if(Auth::user()->role == 'wali'){
            return redirect('profileWali')->with('success', 'Berhasil Merubah Data');
            } 
    }

    public function updateSiswa(Request $request, $id)
    {
        //
        $this->validate($request,[
            'siswa_id' => 'required',
            'status_siswa' => 'required|string',
       ]);
        $user = User::where('id',$id)->first();
        $data = Wali::where('id',$id)->first();
        $data->siswa_id = $request->siswa_id;
        $data->status_siswa = $request->status_siswa;
        $data->save();

        if ($user->wasChanged('email') && $user->email) {
            $user->email_verified_at=NULL;
            $user->active=0;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect('verify?email='.$user->email);
        }
        else if(Auth::user()->role == 'wali'){
            return redirect('profileWali')->with('success', 'Berhasil Merubah Data');
            } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
