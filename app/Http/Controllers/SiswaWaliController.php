<?php

namespace App\Http\Controllers;

use App\SiswaWali;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelSiswa;
use App\Wali;
use App\User;
use Auth;


class SiswaWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    
        $id = Auth::user()->id;
        $siswa = ModelSiswa::join('users', 'model_siswas.id', '=', 'users.id')
                            ->select('users.id', 'users.name')
                            ->getQuery()
                            ->get();
        // dd($siswa);
        $data = Wali::where('id','=',$id)->get();
        $user = User::where('id','=',$id)->get();
        return view('wali.profile.tambahSiswa', compact('data', 'user', 'siswa'));
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
        // dd($request);
        $this->validate($request,[
            'siswa_id' => 'required',
            'wali_id' => 'required',          
            'status_siswa' => 'required',                    
       ],

       [
            'siswa_id.required' => 'Tanggal lahir tidak boleh kosong',
            'wali_id.required' => 'Tanggal lahir tidak boleh kosong',
            'status_siswa.required' => 'Tanggal lahir tidak boleh kosong',
       ]);
        // dd($request);
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();

        $data = new SiswaWali();
        $data->siswa_id = $request->siswa_id;
        $data->wali_id = $request->wali_id;
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
            return redirect('profileWali')->with('success', 'Berhasil Menambah Data');
            } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiswaWali  $siswaWali
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaWali $siswaWali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiswaWali  $siswaWali
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaWali $siswaWali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiswaWali  $siswaWali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'status_siswa' => 'required',
       ]);
        
            $user = User::where('id',$id)->first();
            $data = SiswaWali::where('id',$id)->first();
            $data->status_siswa = $request->status_siswa;
            $data->save();
            
        if ($user->wasChanged('email') && $user->email) {
            $user->email_verified_at=NULL;
            $user->active=0;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect('verify?email='.$user->email);
        }
        else if(Auth::user()->role == 'siswa'){
            return redirect('profileMurid')->with('success', 'Berhasil Merubah Data');
            } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiswaWali  $siswaWali
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    $data = SiswaWali::findOrFail($id);
    $data->delete();
    

        return back()->with('success', 'Berhasil menghapus data');
    }
}
