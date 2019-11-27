<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thể Loại
                                <small><?php echo e($theloai->name); ?></small>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">
                            <form action="admin/theloai/sua/<?php echo e($theloai->id); ?>" method="POST" enctype="multipart/form-data">
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

                                <div class="form-group">
                                    <label>Tên Thể Loại</label>
                                    <input class="form-control" name="name" placeholder="Điền tên thể loại" value="<?php echo e($theloai->name); ?>" />
                                </div>

                                <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea id="demo" class="form-control ckeditor" rows="5" name="description"><?php echo e($theloai->description); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Hình Ảnh</label>
                                    <p>
                                    <img width="400px" src="source/image/product/<?php echo e($theloai->image); ?>" />
                                    </p>
                                    <input type="file" name="Hinh" class="form-control" />
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