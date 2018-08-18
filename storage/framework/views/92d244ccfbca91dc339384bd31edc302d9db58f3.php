<?php $__env->startSection('title','Description About the website'); ?>
<?php $__env->startSection('body'); ?>
<br>
<br>
<div class="col-lg-offset-4">
<br>
<h1>Read these if you are new to this website.</h1>
<br>
<ul>
	<li>1.Sign up</li>
	<li>2.Log in</li>
	<li>3.Write a review about the tourist spots you have ever visited</li>
	<li>4.Read other users reviews</li>
</ul>
<br>
<br>
<h2>N.B. : You will not be able to visit the reviews unless you are logged in</h2>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>