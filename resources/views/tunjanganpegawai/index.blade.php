@extends('layouts.aa')
@section('content')
<?php $page = "Tabel Tunjangan Pegawai" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: saddlebrown; "><font face="Times New Roman" size="5" color="black"><b>{{$page}}</b></font></div>
                <div class="panel-body" align="center">
					<div class="table-responsive ">
						<table class="table">
							<thead >
								<tr class="success">
									<th>Kode Tunjangan</th>
									<th>NIP Pegawai</th>									
									<th>Nama Pegawai</th>
									<th>Besar Tunjangan</th>
									<th colspan="2"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($tunjangan_pegawai as $data)
								<tr>
									<td>{{$data->tunjangan->kode_tunjangan}}</td>
									<td>{{$data->pegawai->nip}}</td>
									<td>{{$users->where('id',$data->pegawai->user_id)->first()->name}}</td>
									<td>{{$data->tunjangan->besaran_uang}}</td>
                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection