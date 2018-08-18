<?php $__env->startSection('editID',$item->id); ?>
<?php $__env->startSection('title','edit your review'); ?>
<?php $__env->startSection('Edittitle',$item->title); ?>
<?php $__env->startSection('Editplace',$item->place); ?>
<?php $__env->startSection('Editcountry',$item->country); ?>
<?php $__env->startSection('Editbody',$item->body); ?>
<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('tourist.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>