<?php $__env->startSection("contain"); ?>


<h1 > Edit Category Details</h1>
<form action="/categorymaster/<?php echo e($category->id); ?>/update" method="post">
<?php echo method_field('POST'); ?>
<?php echo csrf_field(); ?>
Enter User Name :-<br>
<input type="text" name="cname" value="<?php echo e($category->cname); ?>"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\inventory\resources\views/categorymaster/edit.blade.php ENDPATH**/ ?>