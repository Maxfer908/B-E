<?php $__env->startSection('content'); ?>
<h1>Дискриминант</h1>

<?php if($res != ''): ?>
    Result:<strong><?php echo e($res); ?></strong>!
<?php endif; ?>

<form>
    <?php echo csrf_field(); ?>
    <input type="text" name="arg1" value="X"/><br>
    <input type="text" name="arg2" value="Y"/><br>
    <input type="text" name="arg3" value="Z"/><br>
    <input type="submit">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.MathHelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>