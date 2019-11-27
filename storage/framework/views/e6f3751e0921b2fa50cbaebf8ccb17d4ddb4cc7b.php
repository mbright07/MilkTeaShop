<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Danh Sách</small>
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
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($u->id); ?></td>
                                <td><?php echo e($u->full_name); ?></td>
                                <td><?php echo e($u->email); ?></td>
                                <td>
                                    <?php if($u->quyen == 1): ?>
                                        <?php echo e("Admin"); ?>

                                    <?php else: ?>
                                        <?php echo e("Thường"); ?>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($u->phone); ?></td>
                                <td><?php echo e($u->address); ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/<?php echo e($u->id); ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/<?php echo e($u->id); ?>">Edit</a></td>
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