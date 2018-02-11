<?php $__env->startSection('content'); ?>

<p>Wellcome user <?php echo e(Auth::user()->name); ?></p>

 <form method="POST" action="/posts">
 <?php echo e(csrf_field()); ?>


  Title:<br>
  <input type="text" name="title" ><br>

  Body:<br>
  <input type="text" name="body" ><br><br>

  <input type="submit" value="Submit">

</form> 

<ul>
	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($post->title); ?>:  <a target="_blank" href="https://<?php echo e($post->body); ?>"><?php echo e($post->body); ?></a> , created at: <?php echo e($post->created_at->toFormattedDateString()); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<form "POST" action="/logout">

<input type="submit" value="Logout">

</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>