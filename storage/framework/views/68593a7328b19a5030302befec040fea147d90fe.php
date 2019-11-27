<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Khách Hàng
                                <small><?php echo e($khachhang->name); ?></small>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">
                            <form action="admin/khachhang/sua/<?php echo e($khachhang->id); ?>" method="POST" >
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                
                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
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

                            <div class="form-group">
                                <label>Tên </label>
                                <input class="form-control" name="name" placeholder="Nhập tên" value="<?php echo e($khachhang->name); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Giới Tính</label>
                                <label class="radio-inline">
                                    <input name="gender" value="nam" 
                                        <?php if($khachhang->gender == "nam"): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="nu" 
                                        <?php if($khachhang->gender == "nu"): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">Nữ
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Email </label>
                                <input class="form-control" name="email" placeholder="Nhập email" value="<?php echo e($khachhang->email); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Địa Chỉ </label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ" value="<?php echo e($khachhang->address); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Số Điện Thoại </label>
                                <input class="form-control" name="phone_number" placeholder="Nhập số điện thoại" value="<?php echo e($khachhang->phone_number); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <textarea id="demo" class="form-control ckeditor" rows="5" name="note"><?php echo e($khachhang->note); ?></textarea>
                            </div>


                                <button type="submit" class="btn btn-default">Sửa</button>
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