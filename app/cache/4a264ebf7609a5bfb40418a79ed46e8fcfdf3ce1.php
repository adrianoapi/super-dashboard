<html>
    <head>
        <title>App Name</title>
    </head>
    <body>

        <div class="container">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <p><a href="<?php echo e($new['link']); ?>" target="_blank"><?php echo e($new['title']); ?></a></p>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </body>
</html>