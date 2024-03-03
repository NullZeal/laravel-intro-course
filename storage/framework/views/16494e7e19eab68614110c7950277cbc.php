<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article>
        <h1>
            <a href="/posts/<?php echo e($post->slug); ?>">
                <?php echo e($post->title); ?>

            </a>
        </h1>
        <div>
            <?php echo e($post->excerpt); ?>

        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH A:\Coding\laravel\blog\resources\views/posts.blade.php ENDPATH**/ ?>