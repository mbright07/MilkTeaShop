<?php $__env->startSection('content'); ?>
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng ký</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('home-page')); ?>">Home</a> / <span>Đăng ký</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="<?php echo e(route('signup')); ?>" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="row">
					<div class="col-sm-3"></div>
					<?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo e($err); ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>
					<?php if(Session::has('success')): ?>
						<div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
					<?php endif; ?>
					<div class="col-sm-6">
						<h4>Đăng ký </h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Họ Tên*</label>
							<input type="text" id="your_last_name" name="fullname" required>
						</div>

						<div class="form-block">
							<label for="adress">Địa Chỉ</label>
							<input type="text" id="adress" name="address">
						</div>


						<div class="form-block">
							<label for="phone">Điện Thoại</label>
							<input type="text" id="phone" name="phone">
						</div>
						<div class="form-block">
							<label for="phone">Mật Khẩu*</label>
							<input type="password" id="password" name="password" style="height: 37px; border: #e1e1e1 solid 1px" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập Lại Mật Khẩu*</label>
							<input type="password" id="re_password" name="re_password" style="height: 37px; border: #e1e1e1 solid 1px" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>