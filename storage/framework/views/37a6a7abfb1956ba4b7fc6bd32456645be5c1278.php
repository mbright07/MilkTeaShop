<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?>

                        </div>
                    <?php endif; ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Thể Loại</th>
                                <th>Mô Tả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($tl->id); ?></td>
                                <td>
                                    <img width="100px" src="source/image/product/<?php echo e($tl->image); ?>"/>
                                    <p><?php echo e($tl->name); ?></p>
                                </td>
                                <td><?php echo $tl->description; ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloai/xoa/<?php echo e($tl->id); ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloai/sua/<?php echo e($tl->id); ?>">Edit</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>