<?php $__env->startSection("contain"); ?>

<center><h1 style="text-decoration:underline">Item Data :-</h1>
<a href="/itemmaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Category Name</th>
	<th>Item Name</th>
	<th>Current Stock</th>
	<th>Min Stock</th>
	<th>Item Image</th>
	<th>Price</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $item->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($it->cname); ?></td>
	<td><?php echo e($it->iname); ?></td>
	<td><?php echo e($it->currentstock); ?></td>
	<td><?php echo e($it->minstock); ?></td>
	<td>
		<img src="<?php echo e('itemimages/' . $it->image); ?>" width="100px" height="100px"/>
	</td>
	<td><?php echo e($it->mrp); ?></td>
	<td>
	<a href="/itemmaster/<?php echo e($it->id); ?>/edit">Edit</a> / <a href="/itemmaster/<?php echo e($it->id); ?>/destroy">Delete</a>
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/itemmaster/index.blade.php ENDPATH**/ ?>