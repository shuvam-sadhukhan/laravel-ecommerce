

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<script>
    alert("<?php echo e(session('success')); ?>");
</script>
<?php endif; ?>
    <h1 class="text-4xl font-bold">
        Welcome to ShopNest
    </h1>

    <p class="mt-3 text-gray-600">
        Your online shopping destination.
    </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/dashboard.blade.php ENDPATH**/ ?>