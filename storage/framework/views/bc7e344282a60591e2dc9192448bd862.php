

<?php $__env->startSection('content'); ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold">
        User Details
    </h1>

    <p class="text-gray-500 mt-1">
        View account information
    </p>
</div>

<div class="bg-white rounded-xl shadow p-6 max-w-2xl">

    <div class="space-y-4">

        <div>
            <p class="text-sm text-gray-500">ID</p>
            <p class="font-semibold">
                <?php echo e($user->id); ?>

            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Name</p>
            <p class="font-semibold">
                <?php echo e($user->name); ?>

            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-semibold">
                <?php echo e($user->email); ?>

            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Role</p>
            <p class="font-semibold">
                <?php echo e($user->role); ?>

            </p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Joined</p>
            <p class="font-semibold">
                <?php echo e($user->created_at->format('d M Y')); ?>

            </p>
        </div>

    </div>

    <div class="mt-6">
        <a
            href="/admin/users"
            class="px-4 py-2 bg-gray-800 text-white rounded-lg"
        >
            Back to Users
        </a>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/showUser.blade.php ENDPATH**/ ?>