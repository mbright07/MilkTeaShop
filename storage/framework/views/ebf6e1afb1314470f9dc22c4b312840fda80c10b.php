<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small><?php echo e($sanpham->name); ?></small>
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

                        <form action="admin/sanpham/sua/<?php echo e($sanpham->id); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                            <div class="form-group">
                                <label>Thể Loại</label>
                                <select class="form-control" name="TheLoai" id="TheLoai">
                                    <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                            <?php if($sanpham->productType->id == $tl->id): ?>
                                                <?php echo e("selected"); ?>

                                            <?php endif; ?>
                                        value="<?php echo e($tl->id); ?>"><?php echo e($tl->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo e($sanpham->name); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Giá Gốc</label>
                                <input type="number" class="form-control" name="unit_price" placeholder="Nhập giá gốc" value="<?php echo e($sanpham->unit_price); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Giá Khuyến Mãi</label>
                                <input type="number" class="form-control" name="promotion_price" placeholder="Nhập giá khuyến mãi" value="<?php echo e($sanpham->promotion_price); ?>" />
                            </div>

                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea id="demo" class="form-control ckeditor" rows="5" name="description"><?php echo e($sanpham->description); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <p>
                                <img width="400px" src="source/image/product/<?php echo e($sanpham->image); ?>" />
                                </p>
                                <input type="file" name="Hinh" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Mới</label>
                                <label class="radio-inline">
                                    <input name="new" value="0" 
                                        <?php if($sanpham->new == 0): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="new" value="1" 
                                        <?php if($sanpham->new == 1): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>
                                    type="radio">Có
                                </label>
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