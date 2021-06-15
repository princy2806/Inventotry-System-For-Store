<?php $__env->startSection("contain"); ?>


<h1> Edit User Details</h1>
<form action="/usermaster/<?php echo e($user->id); ?>/update" method="post">
<?php echo method_field('POST'); ?>
<?php echo csrf_field(); ?>
Enter User Name :-<br>
<input type="text" name="uname" value="<?php echo e($user->uname); ?>"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail" value="<?php echo e($user->uemail); ?>"><br><br>
Enter Password :-<br>
<input type="password" name="upassword" value="<?php echo e($user->upassword); ?>"><br><br>
Confirm Password :-<br>
<input type="password" name="cpassword" value="<?php echo e($user->password); ?>"><br><br>
Enter Contact No. :-<br>
<input type="text" name="ucontact" value="<?php echo e($user->ucontact); ?>"><br><br>
User Type :-<br>
<input type="text" name="utype" value="<?php echo e($user->utype); ?>"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\inventory\resources\views/usermaster/edit.blade.php ENDPATH**/ ?>