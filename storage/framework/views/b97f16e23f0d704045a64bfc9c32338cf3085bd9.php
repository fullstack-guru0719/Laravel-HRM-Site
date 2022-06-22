<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

		<div class="page login-bg1">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col-md-5 p-md-0">
							<div class="card p-5">
								<div class="pl-4 pt-4 pb-2">
									<a class="header-brand" href="<?php echo e(url('index')); ?>">
										<img src="<?php echo e(URL::asset('assets/images/brand/logo.png')); ?>" class="header-brand-img custom-logo" alt="Dayonelogo">
										<img src="<?php echo e(URL::asset('assets/images/brand/logo-white.png')); ?>" class="header-brand-img custom-logo-dark" alt="Dayonelogo">
									</a>
								</div>
								<div class="p-5 pt-0">
									<h1 class="mb-2">Login</h1>
									<p class="text-muted">Sign In to your account</p>
								</div>
								<form class="card-body pt-3" id="login" name="login" method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
									<div class="form-group">
										<label class="form-label">Email</label>
										<input class="form-control" placeholder="Email" name="email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" name="password" type="password">
									</div>
									
									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</div>
									<div class="text-center mt-3">
										<p class="mb-2"><a href="<?php echo e(route('password.request')); ?>">Forgot Password</a></p>
										<p class="text-dark mb-0">Don't have account?<a class="text-primary ml-1" href="<?php echo e(route('register')); ?>">Register</a></p>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.custom-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/auth/login.blade.php ENDPATH**/ ?>