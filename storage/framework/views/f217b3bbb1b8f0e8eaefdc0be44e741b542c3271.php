<?php $__env->startSection('title','Submit your review'); ?>
<?php $__env->startSection('body'); ?>
<br>
	<div class="container">
	<br>
	<br>
		<a href="/tourist" class="btn btn-info">Back</a>
		<?php echo $__env->make('tourist.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>


	<div class="col-lg-4 col-lg-offset-4">
		<h2><?php echo e(ucfirst(substr(Route::currentRouteName(),8))); ?> Review</h2>
		<form class="form-horizontal" action="/tourist/<?php echo $__env->yieldContent('editID'); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php $__env->startSection('editMethod'); ?>
		<?php echo $__env->yieldSection(); ?>
  			<fieldset>
			    <div class="form-group">
			      <label for="country">Country</label>
			      <input type="text" class="form-control" id="country" name="country" value="<?php echo $__env->yieldContent('Editcountry'); ?>" placeholder="Enter country">
			    </div>
			    
			    <div class="form-group">
			      <label for="place">Tourist Place</label>
			      <input type="text" class="form-control" id="place" name="place" value="<?php echo $__env->yieldContent('Editplace'); ?>" placeholder="Enter spot">
			    </div>

			    <div class="form-group">
			      <label for="title">Title</label>
			      <input type="text" class="form-control" id="title" name="title" value="<?php echo $__env->yieldContent('Edittitle'); ?>" placeholder="Enter title">
			    </div>


			    <div class="form-group">
			      <label for="Textarea">Review</label>
			      <textarea class="form-control" id="Textarea" name="body" rows="5" placeholder="Enter review"><?php echo $__env->yieldContent('Editbody'); ?></textarea>
			    </div>

				<div class="form-group">
			      <label for="email">Email address</label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			    </div>
  
      
    			<button type="submit" class="btn btn-success">Submit</button>
  			</fieldset>
		</form>
		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.newapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>