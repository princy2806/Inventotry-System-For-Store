<?php $__env->startSection("contain"); ?>


<h1>User Details</h1>
<form action="/usermaster/store" method="post">
<?php echo csrf_field(); ?>
Enter User Name :-<br>
<input type="text" name="uname"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail" pattern="[^ @]*@[^ @]*" required><br><br>
Enter Password :-<br>
<input type="password" name="upassword" required><br><br>
Confirm Password :-<br>
<input type="passeord" name="cpassword" required><br><br>
Enter Contact No. :-<br>
<input type="text" name="ucontact" pattern="[0-9]{10}" required><br><br>
User Type :-<br>
<input type="text" name="utype" required><br><br>

<br><br>
<input type="submit" value="submit" >

	<!-- Error -->
    <?php if(count($errors) > 0): ?>
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			<?php endif; ?>
		<!-- Success message -->
			<?php if(Session::has('success')): ?>
				<?php echo e(Session::get('success')); ?> 
			<?php endif; ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/usermaster/create.blade.php ENDPATH**/ ?>