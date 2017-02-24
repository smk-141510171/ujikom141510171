@extends('layouts.aa')
@section('content')
<?php $page="Tabel Lembur Pegawar"?>
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
									<th>Kode Kategori Lembur</th>									
									<th>Nama Pegawai</th>
									<th>Jumlah Jam</th>
									<th colspan="3"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							@foreach($lembur_pegawai as $data)
								<tr>
									<td>{{$data->kategori_lembur->kode_lembur}}</td>
									<td>{{$users->where('id',$data->pegawai->user_id)->first()->name}}</td>
									<td>{{$data->jumlah_jam}}</td>
									<td align="right">
                                    <a href="{{route('lemburpegawai.edit', $data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('lemburpegawai.destroy', $data->id),
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