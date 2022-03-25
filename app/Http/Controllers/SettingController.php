<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun=\App\Akun::All(); // ambil semua data di table akun
        $setting=\App\Setting::All();// ambil semua data di table setting
        return view(
            'admin.setting.setting',
            ['akun' => $akun,'setting'=> $setting]
        );
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
        //
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

    public function simpan(Request $request)
    {
        $kode = $request->kode;
        $akun = $request->akun;
        foreach ($akun as $key => $no) { // melakukan lopping data paramater array
            $input['no_akun'] = $akun[$key];
            Setting::where('id_setting', $kode[$key])->update($input);
        }
        Alert::Success('Pesan ', 'Setting Akun telah dilakukan '); // alert
        return redirect('setting'); // kembali ke url setting
    }
}
