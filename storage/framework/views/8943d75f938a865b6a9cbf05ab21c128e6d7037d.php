<?php $__env->startSection('content'); ?>

<h1>Login</h1>

<form method="POST" action="/login">
 <?php echo e(csrf_field()); ?>


  Name:<br>
  <input type="text" name="name" required><br><br>

  password:<br>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="Submit">

  <?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>