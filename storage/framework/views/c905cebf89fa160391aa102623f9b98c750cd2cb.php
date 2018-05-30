<?php $__env->startSection('content'); ?>
    <h2>Это страница 1.</h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>