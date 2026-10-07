

<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Products</h1>
        <p class="text-gray-500">
            Manage your ShopNest products
        </p>
    </div>

    <a
        href="/admin/products/create"
        class="bg-black text-white px-4 py-2 rounded-lg"
    >
        Add Product
    </a>

</div>

<?php if(session('success')): ?>
    <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="text-left px-6 py-4">ID</th>
                <th class="text-left px-6 py-4">Name</th>
                <th class="text-left px-6 py-4">Category ID</th>
                <th class="text-left px-6 py-4">Price</th>
               <th class="text-left px-6 py-4">Image</th>
                <th class="text-left px-6 py-4">Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr class="border-t">

                    <td class="px-6 py-4">
                        <?php echo e($product->id); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($product->name); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($product->category_name); ?>

                    </td>

                    <td class="px-6 py-4">
                        ₹<?php echo e($product->price); ?>

                    </td>
                    <td class="px-6 py-4">
                        <?php if($product->image): ?>

        <img
            src="<?php echo e(asset('storage/' . $product->image)); ?>"
            alt="<?php echo e($product->name); ?>"
            class="w-16 h-16 object-cover rounded-lg"
        >

    <?php else: ?>

        <span class="text-gray-400">
            No image
        </span>

    <?php endif; ?>
                     </td>
                    
                    <td class="px-6 py-4">
                        <a
                            href="/admin/products/<?php echo e($product->id); ?>/edit"
                            class="text-blue-600 mr-3"
                        >
                            Edit
                        </a>

                        <a
                            href="/admin/products/<?php echo e($product->id); ?>/delete"
                            class="text-red-600"
                        >
                            Delete
                        </a>
                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="6" class="text-center py-8 text-gray-500">
                        No products found.
                    </td>
                </tr>

            <?php endif; ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/adminProducts.blade.php ENDPATH**/ ?>