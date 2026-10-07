

<?php $__env->startSection('content'); ?>

<div class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-8">
        Shop Products
    </h1>
<a href="/products"><button class="px-4 py-2 border rounded-lg">
              All
            </button></a>
    
   
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="/products/category/<?php echo e($category->id); ?>"><button class="px-4 py-2 border rounded-lg">
                <?php echo e($category->name); ?>

            </button></a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>


    
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="border rounded-xl p-4">

                <?php if($product->image): ?>
                    <img
                        src="<?php echo e(asset('storage/' . $product->image)); ?>"
                        alt="<?php echo e($product->name); ?>"
                        class="w-full h-48 object-cover rounded-lg"
                    >
                <?php endif; ?>

                <h2 class="text-lg font-semibold mt-4">
                    <?php echo e($product->name); ?>

                </h2>

                <p class="text-gray-500">
                    <?php echo e($product->category_name); ?>

                </p>

                <p class="font-bold mt-2">
                    ₹<?php echo e($product->price); ?>

                </p>

                <a href="/products/<?php echo e($product->id); ?>"><button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-lg">
                    View Product
                </button></a>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <p>No products available.</p>

        <?php endif; ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/products/index.blade.php ENDPATH**/ ?>