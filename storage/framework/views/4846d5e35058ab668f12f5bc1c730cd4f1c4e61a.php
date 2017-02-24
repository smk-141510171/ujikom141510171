<?php $__env->startSection('content'); ?>
<?php $page = "Tabel Tunjangan Pegawai" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: saddlebrown; "><font face="Times New Roman" size="5" color="black"><b><?php echo e($page); ?></b></font></div>
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
							<?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr>
									<td><?php echo e($data->tunjangan->kode_tunjangan); ?></td>
									<td><?php echo e($data->pegawai->nip); ?></td>
									<td><?php echo e($users->where('id',$data->pegawai->user_id)->first()->name); ?></td>
									<td><?php echo e($data->tunjangan->besaran_uang); ?></td>
                                <td >
                                  <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('tunjanganpegawai.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.aa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>