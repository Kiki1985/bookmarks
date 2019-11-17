<?php $__env->startSection('content'); ?>

<h1>Register</h1>

<form method="POST" action="/register">
 <?php echo e(csrf_field()); ?>


  Name:<br>
  <input type="text" name="name" required><br><br>

  email:<br>
  <input type="text" name="email" required><br><br>

  password:<br>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="Submit">

  

 </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/miroslav/Code/bookmarks/resources/views/registration/create.blade.php */ ?>