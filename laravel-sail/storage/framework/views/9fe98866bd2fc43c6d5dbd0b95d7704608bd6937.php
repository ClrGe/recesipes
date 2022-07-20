<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body>
        <div>
            <div>
                <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            
            <div>
                <?php echo $__env->make('layouts.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div> 
        </div>               
        <footer>
            <div>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </footer>
    </body>
    
</html><?php /**PATH C:\CESI\CUBES\Cubes_Web_Mobile\Git\recesipes\laravel-sail\resources\views/layouts/app.blade.php ENDPATH**/ ?>