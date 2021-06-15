<?php $__env->startSection("contain"); ?>


<h1> Edit PLace Details</h1>
<form action="/placemaster/<?php echo e($place->id); ?>/update" method="post">
<?php echo method_field('POST'); ?>
<?php echo csrf_field(); ?>
Enter LandMark :-<br>
<input type="text" name="landmark" value="<?php echo e($place->landmark); ?>"><br><br>
Enter Location :-<br>
<input type="text" name="location" value="<?php echo e($place->location); ?>"><br><br>
Enter Contact No. :-<br>
<input type="text" name="contact" value="<?php echo e($place->contact); ?>"><br><br>
<br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/placemaster/edit.blade.php ENDPATH**/ ?>