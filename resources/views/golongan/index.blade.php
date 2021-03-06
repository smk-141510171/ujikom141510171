@extends('layouts.aa')
@section('content')
<?php $page = "Tabel Golongan" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: saddlebrown; "><font face="Times New Roman" size="5" color="black"><b>{{$page}}</b></font></div>
                <div class="panel-body" align="center">
			<div class="table-responsive table-hover">
				<table class="table">
					<thead>
						<tr class="success">
							<th>Kode golongan</th>
							<th>Nama golongan</th>
							<th>Besaran Uang</th>
							<th colspan="3"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
					@foreach($golongan as $data)
						<tr>
							<td>{{$data->kode_golongan}}</td>
							<td>{{$data->nama_golongan}}</td>
							<td>{{$data->besaran_uang}}</td>
							<td align="right">
                                    <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>
                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('golongan.destroy', $data->id),
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
@endsection