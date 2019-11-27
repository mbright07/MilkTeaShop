<?php $__env->startSection('content'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h5 class="inner-title">Sản phẩm <?php echo e($nameType->name); ?></h5>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('home-page')); ?>">Home</a> / <span>Loại sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<?php $__currentLoopData = $typePro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('productType', $type->id)); ?>"><b style="color: green; font-size: 125%""><?php echo e($type->name); ?></b></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Các sản phẩm <?php echo e($nameType->name); ?></h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo e(count($argTypePro)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $argTypePro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4" style="margin-top: 20px;">
									<div class="single-item">
										<?php if($pro->promotion_price !=0): ?>
											<div class="ribbon-wrapper">
												<div class="ribbon sale">Sale</div>
											</div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('productDetail', $pro->id)); ?>"><img src="source/image/product/<?php echo e($pro->image); ?>" alt="" height="350px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($pro->name); ?></i></b></p>
											<p class="single-item-price">
												<?php if($pro->promotion_price !=0): ?>
													<span class="flash-del"><?php echo e($pro->unit_price); ?>đ</span>
													<span class="flash-sale"><?php echo e($pro->promotion_price); ?>đ</span>
												<?php else: ?>
													<span class="flash-sale"><?php echo e($pro->unit_price); ?>đ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="<?php echo e(route('add-to-cart', $pro->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('productDetail', $pro->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo e(count($otherPro)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php $__currentLoopData = $otherPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4" style="margin-top: 20px;">
									<div class="single-item">
										<?php if($other->promotion_price !=0): ?>
											<div class="ribbon-wrapper">
												<div class="ribbon sale">Sale</div>
											</div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('productDetail', $other->id)); ?>"><img src="source/image/product/<?php echo e($other->image); ?>" alt="" height="350px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($other->name); ?></i></b></p>
											<p class="single-item-price">
												<?php if($other->promotion_price !=0): ?>
													<span class="flash-del"><?php echo e($other->unit_price); ?>đ</span>
													<span class="flash-sale"><?php echo e($other->promotion_price); ?>đ</span>
												<?php else: ?>
													<span class="flash-sale"><?php echo e($other->unit_price); ?>đ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="<?php echo e(route('add-to-cart', $other->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('productDetail', $other->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<div class="row"><?php echo e($otherPro->links()); ?></div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>