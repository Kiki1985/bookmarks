<?php $__env->startSection('content'); ?>

<h1>Bookmarks</h1>

<div style="float: left; margin-right: 10px">
	<form method="GET" action="/login">
		<input type="submit" value="Login">
	</form>
</div>

<div style="float: left">
	<form method="GET" action="/register">
		<input type="submit" value="Register">
	</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/miroslav/Code/bookmarks/resources/views/index.blade.php */ ?>