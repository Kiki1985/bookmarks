<?php $__env->startSection('content'); ?>
<p>Wellcome user <?php echo e(Auth::user()->name); ?></p>

<p>Insert e-mail adress:</p>

<form method="POST" action="/links">
 <?php echo e(csrf_field()); ?>


  

  
  <input type="text" name="adrese" ><br><br>

  <input type="submit" value="Submit"><br><br><br><br>

</form> 

<form method="GET" action="/logout">
	<input type="submit" value="Logout">
</form>

<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<p><?php echo e($link->body); ?></p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/miroslav/Code/bookmarks/resources/views/home.blade.php */ ?>