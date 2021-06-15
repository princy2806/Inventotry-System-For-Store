<?php $__env->startSection("contain"); ?>


<center><h1 >Inward Register Data :-</h1>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Item Name</th>
	<th>place Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Price</th>
    <th>Expire Date</th>
    <th>Date & Time</th>
	</tr>
	<?php $__currentLoopData = $inward->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
    <td><?php echo e($in->iname); ?></td>
	<td><?php echo e($in->landmark); ?></td>
    <td><?php echo e($in->uname); ?></td>
    <td><?php echo e($in->quantity); ?></td>
	<td><?php echo e($in->price); ?></td>
    <td><?php echo e($in->expiredate); ?></td>
<td><?php echo e($in->created_at); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/inwardregister/index.blade.php ENDPATH**/ ?>