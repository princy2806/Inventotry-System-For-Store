<?php $__env->startSection("contain"); ?>


<h1>Place Details</h1>
<form action="/placemaster/store" method="post">
<?php echo csrf_field(); ?>
Enter Mark :-<br>
<input type="text" name="landmark"><br><br>
Enter Location :-<br>
<input type="text" name="location"><br><br>
Enter Contact No. :-<br>
<input type="text" name="contact"><br><br>
<br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/placemaster/create.blade.php ENDPATH**/ ?>