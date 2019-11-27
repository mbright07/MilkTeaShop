<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
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
                                <th>Khách Hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Tổng Tiền</th>
                                <th>Hình Thức Thanh Toán</th>
                                <th>Ghi Chú</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $hoadon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($hd->id); ?></td>
                                <td><?php echo e($hd->customer->name); ?></td>
                                <td><?php echo e($hd->date_order); ?></td>
                                <td><?php echo e($hd->total); ?></td>
                                <td><?php echo e($hd->payment); ?></td>
                                <td><?php echo $hd->note; ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/xoa/<?php echo e($hd->id); ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hoadon/sua/<?php echo e($hd->id); ?>">Edit</a></td>
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