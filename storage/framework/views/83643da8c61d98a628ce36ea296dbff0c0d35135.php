<?php $__env->startSection('content'); ?>
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm <?php echo e($product->name); ?></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('home-page')); ?>">Home</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/<?php echo e($product->image); ?>" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2><?php echo e($product->name); ?></h2></p>
								<br/>
								<p class="single-item-price">
									<?php if($product->promotion_price != 0): ?>
										<span class="flash-del"><?php echo e($product->unit_price); ?>đ</span>
										<span class="flash-sale"><?php echo e($product->promotion_price); ?>đ</span>
									<?php else: ?>
										<span class="flash-sale"><?php echo e($product->unit_price); ?>đ</span>
									<?php endif; ?>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p><?php echo e($product->description); ?></p>
							</div>
							<div class="space20">&nbsp;</div>

							<!--<p>Số lượng:</p>-->
							<div class="single-item-options">
								<!--<select class="wc-select" name="color">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>-->
								<br/>
								<a><u><i><b style="font-size: 200%; color: red">Thêm vào giỏ hàng:</b></i></u></a>
								<a class="add-to-cart" href="<?php echo e(route('add-to-cart', $product->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<!--<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p><?php echo e($product->description); ?></p>
						</div>
					</div>-->

					<div class="space100">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>
						<br/><br/>
						<div class="row">
							<?php $__currentLoopData = $relatedPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($related->id != $product->id): ?>
								<div class="col-sm-4" style="margin-top: 20px;">
									<div class="single-item">
										<?php if($related->promotion_price !=0): ?>
											<div class="ribbon-wrapper">
												<div class="ribbon sale">Sale</div>
											</div>
										<?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('productDetail', $related->id)); ?>"><img src="source/image/product/<?php echo e($related->image); ?>" alt="" height="350px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($related->name); ?></i></b></p>
											<p class="single-item-price">
												<?php if($related->promotion_price !=0): ?>
													<span class="flash-del"><?php echo e($related->unit_price); ?>đ</span>
													<span class="flash-sale"><?php echo e($related->promotion_price); ?>đ</span>
												<?php else: ?>
													<span class="flash-sale"><?php echo e($related->unit_price); ?>đ</span>
												<?php endif; ?>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="<?php echo e(route('add-to-cart', $related->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('productDetail', $related->id)); ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="row"><?php echo e($relatedPro->links()); ?></div>
					</div> <!-- .beta-products-list -->
				</div>

				<div class="col-sm-3 aside">

					<!--<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->

					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3><br/>
						<?php $__currentLoopData = $newPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="<?php echo e(route('productDetail', $new->id)); ?>"><img src="source/image/product/<?php echo e($new->image); ?>" alt=""></a>
									<div class="media-body" style="font-size: 115%">
										<?php echo e($new->name); ?>

									</div>
									<?php if($new->promotion_price != 0): ?>
									<span class="beta-sales-price"><?php echo e($new->promotion_price); ?>đ</span>
									<?php else: ?>
									<span class="beta-sales-price"><?php echo e($new->unit_price); ?>đ</span>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>