

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('layouts.components.alert', ); ?>
        <?php $__env->slot('title', 'Advertencia'); ?>
        <?php $__env->slot('color', 'primary'); ?>
        Alerta Roja
    <?php echo $__env->renderComponent(); ?>

    <?php echo $__env->make('layouts.partials.slider_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Portfolio\app\views/home/index.blade.php ENDPATH**/ ?>