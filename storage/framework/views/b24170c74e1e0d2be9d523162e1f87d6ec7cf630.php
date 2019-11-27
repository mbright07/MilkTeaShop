<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi Tiết Hóa Đơn
                            <small><?php echo e($chitiet->id); ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger ">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('loi')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('loi')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="admin/chitiet/sua/<?php echo e($chitiet->id); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                            <div class="form-group">
                                <label>Sản Phẩm</label>
                                <select class="form-control" name="SanPham">
                                    <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                            <?php if($chitiet->id_product == $sp->id): ?>
                                                <?php echo e("selected"); ?>

                                            <?php endif; ?>
                                        value="<?php echo e($sp->id); ?>"><?php echo e($sp->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Hóa Đơn</label>
                                <select class="form-control" name="HoaDon">
                                    <?php $__currentLoopData = $hoadon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                            <?php if($chitiet->id_bill == $hd->id): ?>
                                                <?php echo e("selected"); ?>

                                            <?php endif; ?>
                                        value="<?php echo e($hd->id); ?>"><?php echo e($hd->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label>
                                <input class="form-control" name="quantity" placeholder="Nhập số lượng" value="<?php echo e($chitiet->quantity); ?>" />
                            </div>

                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>