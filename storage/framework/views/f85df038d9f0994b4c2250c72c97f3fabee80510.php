<?php $__env->startSection("contain"); ?>


<h1 >Category Details</h1>
<form action="/categorymaster/store" method="post">
<?php echo csrf_field(); ?>
Enter Category Name :-<br>
<input type="text" name="cname"><br><br>
<br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/categorymaster/create.blade.php ENDPATH**/ ?>