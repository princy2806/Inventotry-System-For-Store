<?php $__env->startSection("contain"); ?>


<center><h1>User Data :-</h1>
<a href="/usermaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>User Name</th>
	<th>Email Id</th>
	<th>Contact No. </th>
	<th>User Type</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $usermaster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($user->uname); ?></td>
	<td><?php echo e($user->uemail); ?></td>
	<td><?php echo e($user->ucontact); ?></td>
	<td><?php echo e($user->utype); ?></td>
	
	<td>
	<a href="/usermaster/<?php echo e($user->id); ?>/edit">Edit</a> / <a href="/usermaster/<?php echo e($user->id); ?>/destroy">Delete</a>
	
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/usermaster/index.blade.php ENDPATH**/ ?>