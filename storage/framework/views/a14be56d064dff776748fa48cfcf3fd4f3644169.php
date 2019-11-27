<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
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
                        <form action="admin/hoadon/them" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Khách Hàng</label>
                                <select class="form-control" name="khachhang">
                                    <?php $__currentLoopData = $khachhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kh->id); ?>">ID: <?php echo e($kh->id); ?> - <?php echo e($kh->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Ngày Đặt Hàng</label>
                                <input type="date" class="form-control" name="date_order" placeholder="Điền ngày đặt hàng" />
                            </div>

                            <div class="form-group">
                                <label>Tổng Tiền</label>
                                <input type="number" class="form-control" name="total" placeholder="Điền tổng tiền" />
                            </div>

                            <div class="form-group">
                                <label>Hình Thức Thanh Toán </label>
                                <label class="radio-inline">
                                    <input name="payment" value="COD" checked="" type="radio">COD
                                </label>
                                <label class="radio-inline">
                                    <input name="payment" value="ATM" type="radio">ATM
                                </label>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>