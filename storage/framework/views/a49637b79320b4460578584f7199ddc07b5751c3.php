<?php $__env->startSection("contain"); ?>


<h1>Outward Details</h1>
<form action="/outwardregister/store" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<input type="hidden" value="<?php echo e($item->id); ?>" name="itemid"/><br><br>
<br><br>
Select Admin :-<br>
<select name="uid" >
	<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($u->id); ?>"><?php echo e($u->uname); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br><br>
Enter Quantity:-<br>
<input type="text" name="quantity"><br><br>
Expire Date:-<br>
<input type="date" name="expiredate"><br><br>


<br><br>
<input type="submit" value="submit" >

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

<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/outwardregister/create.blade.php ENDPATH**/ ?>