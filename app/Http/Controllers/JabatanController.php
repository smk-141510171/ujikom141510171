<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use Alert;
use Validator;
use Input;
class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $jabatan = jabatan::all();
        return view('jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = jabatan::all();
        return view('jabatan.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jabatan=Request::all();
        $nama_jabatan = jabatan::all()->where('nama_jabatan',$jabatan['nama_jabatan'])->first();
        $uang_jabatan = jabatan::all()->where('besaran_uang',$jabatan['besaran_uang'])->first();
        $rules=['kode_jabatan'=>'required|unique:jabatans',
                'nama_jabatan'=>'required|unique:jabatans',
                'besaran_uang'=>'required|numeric|unique:jabatans'];
        if(isset($nama_jabatan))
        {
                if (isset($uang_jabatan)) 
                {
            $sms=['besaran_uang.unique'=>'Besaran Uang Sudah ada '.$uang_jabatan->kode_jabatan,
                'kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Kode Sudah Ada',
                'nama_jabatan.unique'=> 'Nama jabatan Sudah Ada di '.$nama_jabatan->kode_jabatan,
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
                }
                else
                {

                $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Kode Sudah Ada',
                'nama_jabatan.unique'=> 'Nama jabatan Sudah Ada di '.$nama_jabatan->kode_jabatan,
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
                }
        }
        elseif(isset($uang_jabatan))
        {
            $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Kode Sudah Ada',
                'besaran_uang.unique'=>'Besaran Uang Sudah ada '.$uang_jabatan->kode_jabatan,
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
        }
        else
        {
        $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'kode_jabatan.unique'=>'Kode Sudah Ada',
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
        }
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            alert()->error('Data Salah');  
            return redirect('jabatan/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        alert()->success('Data Tersimpan');
      
        jabatan::create($jabatan);
        return redirect('jabatan');
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
        $jabatan=jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));
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
        $data=Request::all();
        $kode_lama = jabatan::where('id',$id)->first()->kode_jabatan;
        $nama_lama = jabatan::where('id',$id)->first()->nama_jabatan;
        $uang_lama = jabatan::where('id',$id)->first()->besaran_uang;
        if($data['kode_jabatan'] != $kode_lama)
        {
        $rules=['kode_jabatan'=>'required|unique:jabatans',
                'nama_jabatan'=>'required',
                'besaran_uang'=>'required|numeric'];
        
        }
        elseif ($data['nama_jabatan'] != $nama_lama)
        {
            $rules=['kode_jabatan'=>'required',
                'nama_jabatan'=>'required|unique:jabatans',
                'besaran_uang'=>'required|numeric'];
        }
        elseif ($data['besaran_uang'] != $uang_lama)
        {
            $rules=['kode_golongan'=>'required',
                'nama_golongan'=>'required',
                'besaran_uang'=>'required|numeric|unique:jabatans'];
        }  
        else
        {
            $rules=['kode_jabatan'=>'required',
                    'nama_jabatan'=>'required',
                    'besaran_uang'=>'required|numeric'];
        }
        $sms=['kode_jabatan.required'=>'Harus Di Isi',
                'nama_jabatan.unique'=> 'Nama '.$data['nama_jabatan'].' Sudah ada',
                'kode_jabatan.unique'=>'Kode '.$data['kode_jabatan'].' Sudah ada',
                'besaran_uang.unique'=>'Besaran Uang Tidak Boleh sama ',
                'nama_jabatan.required'=>'Harus Di Isi',
                'besaran_uang.required'=>'Harus Diisi',
                'besaran_uang.numeric'=>'Harus Angka'];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            alert()->error('Data Salah');  
            return redirect('jabatan/'.$id.'/edit')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        jabatan::where('id', $id)->first()->update([
            'kode_jabatan'=> $data['kode_jabatan'],
            'nama_jabatan'=> $data['nama_jabatan'],
            'besaran_uang'=> $data['besaran_uang']
            ]);
        }
         return redirect('jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jabatan::find($id)->delete();
        alert()->success('Data Terhapus');
        return redirect('jabatan');
    }
}
