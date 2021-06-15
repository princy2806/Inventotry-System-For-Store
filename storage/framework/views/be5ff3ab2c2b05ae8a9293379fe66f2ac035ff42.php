<?php $__env->startSection("contain"); ?>


<h1> Edit Item Details</h1>
<form action="/itemmaster/<?php echo e($item->id); ?>/update" method="post" enctype="multipart/form-data">
<?php echo method_field('POST'); ?>
<?php echo csrf_field(); ?>
Enter Category Id:-<br>
<input type="text" name="catid" value="<?php echo e($item->catid); ?>" ><br><br>
Enter Item Name :-<br>
<input type="text" name="iname" value="<?php echo e($item->iname); ?>"><br><br>
Enter Current Stock :-<br>
<input type="text" name="currentstock" value="<?php echo e($item->currentstock); ?>"><br><br>
Enter Min Stock :-<br>
<input type="text" name="minstock" value="<?php echo e($item->minstock); ?>"><br><br>
Enter Item Image :-<br>
<input type="file" name="image" ><br><br>
Enter Price :-<br>
<input type="text" name="mrp" value="<?php echo e($item->mrp); ?>"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/itemmaster/edit.blade.php ENDPATH**/ ?>