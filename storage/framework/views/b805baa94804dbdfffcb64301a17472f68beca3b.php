<?php $__env->startSection('content'); ?>
<?php $page = "Tabel Tunjangan" ?>
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
                                    <th>Nama Jabatan</th>
                                    <th>Nama Golongan</th>
                                    <th>Status</th>
                                    <th>Jumlah Anak</th>
                                    <th>Besaran Uang</th>
                                    <th colspan="3"><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->kode_tunjangan); ?></td>
                                    <td><?php echo e($data->jabatan->nama_jabatan); ?></td>
                                    <td><?php echo e($data->golongan->nama_golongan); ?></td>
                                    <td><?php echo e($data->status); ?></td>
                                    <td><?php echo e($data->jumlah_anak); ?></td>
                                    <td><?php echo e($data->besaran_uang); ?></td>
                                    <td align="right">
                                    <a href="<?php echo e(route('tunjangan.edit', $data->id)); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                </td>
                                <td >
                                  <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
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