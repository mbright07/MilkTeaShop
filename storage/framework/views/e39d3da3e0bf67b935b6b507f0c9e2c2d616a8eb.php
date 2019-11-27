<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small><?php echo e($hoadon->id); ?></small>
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
                        <form action="admin/hoadon/sua/<?php echo e($hoadon->id); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Khách Hàng</label>
                                <select class="form-control" name="khachhang">
                                    <?php $__currentLoopData = $khachhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                            <?php if($hoadon->customer->id == $kh->id): ?>
                                                <?php echo e("selected"); ?>

                                            <?php endif; ?>
                                        value="<?php echo e($kh->id); ?>">ID: <?php echo e($kh->id); ?> - <?php echo e($kh->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Ngày Đặt Hàng</label>
                                <input type="date" class="form-control" name="date_order" placeholder="Điền ngày đặt hàng" value="<?php echo e($hoadon->date_order); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Tổng Tiền</label>
                                <input type="number" class="form-control" name="total" placeholder="Điền tổng tiền"  value="<?php echo e($hoadon->total); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Hình Thức Thanh Toán</label>
                                <label class="radio-inline">
                                    <input name="payment" value="COD" 
                                        <?php if($hoadon->payment == "COD"): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">COD
                                </label>
                                <label class="radio-inline">
                                    <input name="payment" value="ATM" 
                                        <?php if($hoadon->payment == "ATM"): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">ATM
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <textarea id="demo" class="form-control ckeditor" rows="5" name="note"><?php echo e($hoadon->note); ?></textarea>
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