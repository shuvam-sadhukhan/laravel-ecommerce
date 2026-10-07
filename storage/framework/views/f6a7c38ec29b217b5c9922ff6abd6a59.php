

<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <h1 class="text-2xl font-bold">Categories</h1>
        <p class="text-gray-500">Manage product categories</p>
    </div>

    <a href="/admin/categories/create"
       class="bg-black text-white px-4 py-2 rounded-lg">
        Add Category
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="text-left px-6 py-4">ID</th>
                <th class="text-left px-6 py-4">Name</th>
                <th class="text-left px-6 py-4">Slug</th>
                <th class="text-left px-6 py-4">Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr class="border-t">

                    <td class="px-6 py-4">
                        <?php echo e($category->id); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($category->name); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($category->slug); ?>

                    </td>

                    <td class="px-6 py-4">
                        <a href="/admin/categories/<?php echo e($category->id); ?>/edit" class="text-blue-600 mr-3">
                            Edit
                        </a>

                        <a href="/admin/categories/<?php echo e($category->id); ?>/delete" class="text-red-600">
                            Delete
                        </a>
                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="4" class="text-center py-8 text-gray-500">
                        No categories found.
                    </td>
                </tr>

            <?php endif; ?>

        </tbody>

    </table>

</div>
<?php if(session('success')): ?>
    <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/adminCategories.blade.php ENDPATH**/ ?>