<?php $__env->startSection("contain"); ?>

<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
 
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

<center><h1 style="text-decoration:underline">Item Data :-</h1>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr id="i2">
	
	<th><center>Item Name</center></th>
	<th><center>Current Stock</center></th>
	<th><center>min Stock</center></th>
	
	<th colspan="2"><center>Action</center></th>
	
	</tr>
	<?php $__currentLoopData = $item->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<tr>
	<td><?php echo e($it->iname); ?></td>
	<td><?php echo e($it->currentstock); ?></td>
	<td>
	<?php echo e($it->minstock); ?>

	</td>
	<td>
	<a href="/inwardregister/<?php echo e($it->id); ?>"><button class="btn"><i class="fa fa-plus"></i></button></a> 
	</td>
	<td> 
	<a href="/outwardregister/<?php echo e($it->id); ?>">
	<button class="btn"><i class="fa fa-minus"></i></button></a>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/home/index.blade.php ENDPATH**/ ?>