<?php $__env->startSection("contain"); ?>


<center><h1 style="text-decoration:underline">Category Data :-</h1>
<a href="/categorymaster/create" style="font-size:20px;"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Category Name</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($cat->cname); ?></td>
	<td>
	<a href="/categorymaster/<?php echo e($cat->id); ?>/edit">Edit</a> / <a href="/categorymaster/<?php echo e($cat->id); ?>/destroy">Delete</a>
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/categorymaster/index.blade.php ENDPATH**/ ?>