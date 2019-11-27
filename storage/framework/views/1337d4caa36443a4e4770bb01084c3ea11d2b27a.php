<?php $__env->startSection('content'); ?>
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('home-page')); ?>">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="<?php echo e(route('login')); ?>" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="row">
					<div class="col-sm-3"></div>
					<?php if(Session::has('flag')): ?>
						<div class="alert alert-<?php echo e(Session::get('flag')); ?>"><?php echo e(Session::get('message')); ?></div>
					<?php endif; ?>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật Khẩu*</label>
							<input type="password" id="password" name="password" style="height: 37px; border: #e1e1e1 solid 1px" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>