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
									<h1 class="mb-2">Register</h1>
								</div>
								<form class="card-body pt-3" id="register" name="register" method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
									<div class="form-group">
										<label class="form-label">Username</label>
										<input class="form-control" placeholder="Name" name="name" type="Text">
									</div>
									<div class="form-group">
										<label class="form-label">E-Mail</label>
										<input class="form-control" placeholder="Email" name="email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" name="password" type="password">
									</div>
                                    <div class="form-group">
										<label class="form-label">Confirm Password</label>
										<input class="form-control" placeholder="password" name="password_confirmation" type="password">
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
											<span class="custom-control-label">I agree to the <a href="#" class="text-primary">Terms of services</a> and <a href="#" class="text-primary">Privacy policy</a></span>
										</label>
									</div>
									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">Create Account</button>
									</div>
									<div class="text-center mt-4">
										<p class="text-dark mb-0">Already have an account?<a class="text-primary ml-1" href="<?php echo e(route('login')); ?>">LogIn</a></p>
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

<?php echo $__env->make('layouts.custom-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/auth/register.blade.php ENDPATH**/ ?>