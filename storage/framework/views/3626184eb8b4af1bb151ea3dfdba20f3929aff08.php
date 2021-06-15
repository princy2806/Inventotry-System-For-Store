<?php $__env->startSection("contain"); ?>


<center><h1>Place Data :-</h1>
<a href="/placemaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Landmark</th>
	<th>Location</th>
	<th>Contact No.</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $placemaster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($place->landmark); ?></td>
	<td><?php echo e($place->location); ?></td>
	<td><?php echo e($place->contact); ?></td>
	<td>
	<a href="/placemaster/<?php echo e($place->id); ?>/edit">Edit</a> / <a href="/placemaster/<?php echo e($place->id); ?>/destroy">Delete</a>
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/placemaster/index.blade.php ENDPATH**/ ?>