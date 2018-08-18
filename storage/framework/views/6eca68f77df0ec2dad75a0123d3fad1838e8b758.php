<?php $__env->startSection('title','Reviews of different tourist spots'); ?>
<?php $__env->startSection('body'); ?>
<br>
	<?php echo $__env->make('tourist.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
	<br>
	<br>
		<a href="tourist/create" class="btn btn-info">Add New</a>
	</div>

<div class="col-lg-6 col-lg-offset-3">
	<center><h1>Reviews:</h1></center>
	<ul class="list-group col-lg-50">
	  <?php $__currentLoopData = $tourists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<li class="list-group-item d-flex justify-content-between align-items-center">
    			<a href="<?php echo e('/tourist/'.$tourist->id); ?>"><?php echo e($tourist->title); ?></a>
    			<span class="badge badge-primary badge-pill"><?php echo e($tourist->created_at); ?></span>
          <a href="<?php echo e('/tourist/'.$tourist->id.'/edit'); ?>">Edit</a>
          <form class="form-group pull-right" action="<?php echo e('/tourist/'.$tourist->id); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('DELETE')); ?>

          <input type="submit" value="delete">
          </form>
    	</li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>