<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách Hàng
                            <small>Thêm</small>
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

                        <form action="admin/khachhang/them" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Tên </label>
                                <input class="form-control" name="name" placeholder="Nhập tên" />
                            </div>

                            <div class="form-group">
                                <label>Giới Tính </label>
                                <label class="radio-inline">
                                    <input name="gender" value="nam" checked="" type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="nu" type="radio">Nữ
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Email </label>
                                <input class="form-control" name="email" placeholder="Nhập email" />
                            </div>

                            <div class="form-group">
                                <label>Địa Chỉ </label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ" />
                            </div>

                            <div class="form-group">
                                <label>Số Điện Thoại </label>
                                <input class="form-control" name="phone_number" placeholder="Nhập số điện thoại" />
                            </div>

                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <textarea id="demo" class="form-control ckeditor" rows="5" name="note"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>