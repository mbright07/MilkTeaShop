<?php $__env->startSection('content'); ?>
	 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi Tiết
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
                                <th>Tên Sản Phẩm</th>
                                <th>Hóa Đơn</th>
                                <th>Số Lượng</th>
                                <th>Giá Gốc</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $chitiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                    <td><?php echo e($ct->id); ?></td>
                                    <td><?php echo e($ct->product->name); ?></td>
                                    <td><?php echo e($ct->id_bill); ?></td>
                                    <td><?php echo e($ct->quantity); ?></td>
                                    <td><?php echo e($ct->unit_price); ?></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitiet/xoa/<?php echo e($ct->id); ?>"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitiet/sua/<?php echo e($ct->id); ?>">Edit</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>