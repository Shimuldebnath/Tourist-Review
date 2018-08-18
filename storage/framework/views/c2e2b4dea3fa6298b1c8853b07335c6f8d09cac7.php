<?php $__env->startSection('title','Read the full review'); ?>
<?php $__env->startSection('body'); ?>
	<br>
	
	<br>
	
	
	
	<ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h1><?php echo e($item->title); ?></h1><br>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h3>Country:<?php echo e($item->country); ?></h3>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h4>Place:<?php echo e($item->place); ?></h4>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <p>Review:<?php echo e($item->body); ?></p>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <b><p>Written By : <?php echo e($item->email); ?></p></b>
		  </li>


	</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>