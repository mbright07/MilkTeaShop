<?php $__env->startSection('content'); ?>
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                        <form action="admin/user/them" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người dùng" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập email người dùng" />
                            </div>
                            <div class="form-group">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Xác nhận mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Quyền Người Dùng</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" checked="" type="radio">Thường
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Điện Thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ" />
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
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>