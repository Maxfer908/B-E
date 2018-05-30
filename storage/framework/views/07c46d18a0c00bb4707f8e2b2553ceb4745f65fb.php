<html>
<head>
    <title>My first Laravel App</title>
</head>
<body>
    <h1>TestApp</h1>
    <a href="<?php echo e(url('/page1')); ?>">Страница 1</a>
    <a href="<?php echo e(url('/page2')); ?>">Страница 2</a>
    <a href="<?php echo e(url('/page1')); ?>">Страница 3</a>
    <hr>
    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
