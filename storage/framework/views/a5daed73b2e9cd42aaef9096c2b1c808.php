

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<script>
    alert("<?php echo e(session('success')); ?>");
</script>
<?php endif; ?>
    <!-- <h1 class="text-4xl font-bold">
        Welcome to ShopNest
    </h1>   

    <p class="mt-3 text-gray-600">
        Your online shopping destination.
    </p> -->
    

    <h1 class="text-3xl font-bold mb-8">
        Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Users -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Users
            </h2>

            <p class="text-3xl font-bold mt-2">
                0
            </p>
        </div>


        <!-- Products -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Products
            </h2>

            <p class="text-3xl font-bold mt-2">
                0
            </p>
        </div>


        <!-- Orders -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Orders
            </h2>

            <p class="text-3xl font-bold mt-2">
                0
            </p>
        </div>


        <!-- Revenue -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Revenue
            </h2>

            <p class="text-3xl font-bold mt-2">
                ₹0
            </p>
        </div>

    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin.blade.php ENDPATH**/ ?>