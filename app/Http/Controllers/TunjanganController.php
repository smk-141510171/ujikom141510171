<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\golongan;
use App\tunjangan;
use Validator;
use Input;
use Alert;
class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunjangan = tunjangan::with('jabatan')->get();
        $tunjangan = tunjangan::with('golongan')->get();
        $tunjangan = tunjangan::all();
        return view('tunjangan.index',compact('tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        return view('tunjangan.create',compact('jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tunjangan = Request::all();
        $rules = ['kode_tunjangan'  => 'required|unique:tunjangans',
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'status' => 'required',
            'jumlah_anak' => 'required|numeric',
            'besaran_uang' => 'required|numeric|unique:tunjangans'];
        $sms = ['kode_tunjangan.required' => 'Harus Diisi',
                'kode_tunjangan.unique' => 'Data Sudah Ada',
                'jumlah_anak.numeric' => 'Harus Angka',
                'besaran_uang.numeric' => 'Harus Angka',
                'jabatan_id.required' => 'Harus Diisi',
                'golongan_id.required' => 'Harus Diisi',
                'status.required' => 'Harus Diisi',
                'jumlah_anak.required' => 'Harus Diisi',
                'besaran_uang.required' => 'Harus Diisi',
                'besaran_uang.unique' => 'Tidak Boleh Sama ',
                ];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            alert()->error('Data Salah');  
            return redirect('tunjangan/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        { 
        
       $tunjangan1 = tunjangan::where('jabatan_id',$tunjangan['jabatan_id'])->where('golongan_id',$tunjangan['golongan_id'])->where('status',$tunjangan['status'])->where('jumlah_anak',$tunjangan['jumlah_anak'])->first();
        if(isset($tunjangan1))
        {
            $error_create = true;
            $golongan = golongan::all();
            $jabatan = jabatan::all();
            return view('tunjangan.create',compact('tunjangan1','error_create','golongan','jabatan'));
            
        }
        tunjangan::create($tunjangan);
        return redirect('tunjangan');
        }
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
        $tunjangan = tunjangan::with('golongan');
        $tunjangan = tunjangan::with('jabatan');
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $tunjangan=tunjangan::find($id);
        return view('tunjangan.edit',compact('tunjangan','jabatan','golongan'));
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
        $tunjanganUpdate=Request::all();
        $tunjangan=tunjangan::find($id);
        $tunjangan->update($tunjanganUpdate);
        return redirect('tunjangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tunjangan::find($id)->delete();
        alert()->success('Data Terhapus');
        return redirect('tunjangan');
    }
}
