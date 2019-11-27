<?php $__env->startSection('content'); ?>
	 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
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
                                <th>Thể Loại</th>
                                <th>Mô Tả</th>
                                <th>Giá Gốc</th>
                                <th>Giá Khuyến Mãi</th>
                                <th>Sản Phẩm Mới</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                    <td><?php echo e($sp->id); ?></td>
                                    <td>
                                        <img width="100px" src="source/image/product/<?php echo e($sp->image); ?>"/>
                                        <p><?php echo e($sp->name); ?></p>
                                    </td>
                                    <td><?php echo e($sp->productType->name); ?></td>
                                    <td><?php echo $sp->description; ?></td>
                                    <td><?php echo e($sp->unit_price); ?></td>
                                    <td><?php echo e($sp->promotion_price); ?></td>
                                    <td>
                                        <?php if($sp->new == 0): ?>
                                            <?php echo e("Không"); ?>

                                        <?php else: ?>
                                            <?php echo e("Có"); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/<?php echo e($sp->id); ?>"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/<?php echo e($sp->id); ?>">Edit</a></td>
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