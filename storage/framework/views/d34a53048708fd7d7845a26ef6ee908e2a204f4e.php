<?php $__env->startSection('content'); ?>

<form method="GET" action="/login">
	<input type="submit" value="Login">
</form>

<form method="GET" action="/register">
	<input type="submit" value="Register">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>