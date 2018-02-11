<?php $__env->startSection('content'); ?>

<p>Wellcome user <?php echo e(Auth::user()->name); ?></p>

<form method="POST" action="/links">
 <?php echo e(csrf_field()); ?>


  

  <p>Insert e-mail adress:</p><br>
  <input type="text" name="adrese" ><br><br>

  <input type="submit" value="Submit">

</form> 


	<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<p><a target="_blank" href="https://<?php echo e($link->adrese); ?>"><?php echo e($link->adrese); ?></a></p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<form "POST" action="/logout">

<input type="submit" value="Logout">

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>