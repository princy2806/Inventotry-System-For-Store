<?php $__env->startSection("contain"); ?>


<center><h1 >Outward Register Data :-</h1>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Item Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Expire Date</th>
	<th> Order Date & Time</th>
	</tr>
	<?php $__currentLoopData = $outward->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
    <td><?php echo e($ou->iname); ?></td>
	<td><?php echo e($ou->uname); ?></td>
    <td><?php echo e($ou->quantity); ?></td>
	<td><?php echo e($ou->expiredate); ?></td>
	<td><?php echo e($ou->created_at); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/outwardregister/index.blade.php ENDPATH**/ ?>