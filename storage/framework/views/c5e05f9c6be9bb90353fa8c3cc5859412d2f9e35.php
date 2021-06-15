<?php $__env->startSection("contain"); ?>


<h1>Item Details</h1>
<form action="/itemmaster/store" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>
Enter Category :-<br>
<select name="catid" >
	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($c->id); ?>"><?php echo e($c->cname); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br><br>
Enter Item Name :-<br>
<input type="text" name="iname"><br><br>
Enter Current stock :-<br>
<input type="text" name="currentstock"><br><br>
Enter Minimum Stock :-<br>
<input type="text" name="minstock"><br><br>
Enter Item Image :-<br>
<input type="file" name="image" ><br><br>
Enter Price :-<br>
<input type="text" name="mrp"><br><br>

<br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/itemmaster/create.blade.php ENDPATH**/ ?>