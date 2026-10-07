

<?php $__env->startSection('content'); ?>

<div class="max-w-6xl mx-auto px-6 py-10">

    <div class="grid md:grid-cols-2 gap-10">

        
        <div>

            <?php if($product->image): ?>

                <img
                    src="<?php echo e(asset('storage/' . $product->image)); ?>"
                    alt="<?php echo e($product->name); ?>"
                    class="w-full h-[450px] object-cover rounded-xl"
                >

            <?php else: ?>

                <div class="h-[450px] flex items-center justify-center border rounded-xl">
                    No Image
                </div>

            <?php endif; ?>

        </div>


        
        <div>

            <h1 class="text-3xl font-bold">
                <?php echo e($product->name); ?>

            </h1>

            <p class="text-gray-500 mt-2">
                Product ID: <?php echo e($product->id); ?>

            </p>

            <p class="text-2xl font-bold mt-6">
                ₹<?php echo e($product->price); ?>

            </p>

            <p class="mt-6 text-gray-600">
                <?php echo e($product->description); ?>

            </p>

            <p class="mt-6">
                Stock:
                <span class="font-semibold">
                    <?php echo e($product->stock); ?>

                </span>
            </p>

           <form action="/cart/add/<?php echo e($product->id); ?>" method="POST">
                 <?php echo csrf_field(); ?>

    <button type="submit" class="mt-8 w-full bg-indigo-600 text-white py-3 rounded-lg">
        Add to Cart
    </button>
</form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/products/show.blade.php ENDPATH**/ ?>