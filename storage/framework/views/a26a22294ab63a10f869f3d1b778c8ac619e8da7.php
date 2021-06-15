<?php $__env->startSection("contain"); ?>

<style>
.btn {
  background-color: #1a1a37;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;

 
}


/* Darker background on mouse-over */
.btn:hover {
  background-color:#ffbc3b;
}
</style>

<center><h2 style="">Stock Data :-</h2><br><br>
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
	<a href="/inwardregister/<?php echo e($it->id); ?>"><button class="btn btn-sm"><b>+</b></button></a> 
	</td>
	<td> 
	<a href="/outwardregister/<?php echo e($it->id); ?>"><button class="btn btn-sm"><b>-</b></button></a>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/home/index.blade.php ENDPATH**/ ?>