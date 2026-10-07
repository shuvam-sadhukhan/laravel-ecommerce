

<?php $__env->startSection('content'); ?>

<div class="max-w-5xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-8">
        My Cart
    </h1>

    <?php if(session('success')): ?>
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>


    <?php if(count($cart) > 0): ?>

        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="flex items-center gap-6 border-b py-5">

                <?php if($item['image']): ?>
                    <img
                        src="<?php echo e(asset('storage/' . $item['image'])); ?>"
                        class="w-24 h-24 object-cover rounded-lg"
                    >
                <?php endif; ?>

                <div class="flex-1">

                    <h2 class="text-lg font-semibold">
                        <?php echo e($item['name']); ?>

                    </h2>

                    <p class="text-gray-600">
                        ₹<?php echo e($item['price']); ?>

                    </p>
                    
            <div class="flex items-center gap-2 mt-3">

                
                <form
                    action="/cart/decrease/<?php echo e($id); ?>"
                    method="POST"
                >
                    <?php echo csrf_field(); ?>

                    <button
                        type="submit"
                        class="w-8 h-8 border rounded"
                    >
                        -
                    </button>
                </form>

                    <p>
                        Quantity:
                        <?php echo e($item['quantity']); ?>

                    </p>
                      
                <form
                    action="/cart/increase/<?php echo e($id); ?>"
                    method="POST"
                >
                    <?php echo csrf_field(); ?>

                    <button
                        type="submit"
                        class="w-8 h-8 border rounded"
                    >
                        +
                    </button>
                </form>
                </div>
                 
            <form
                action="/cart/remove/<?php echo e($id); ?>"
                method="POST"
                class="mt-2"
            >
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button
                    type="submit"
                    class="text-red-500"
                >
                    Remove
                </button>
            </form>
                <p class="font-bold">
                    ₹<?php echo e($item['price'] * $item['quantity']); ?>

                </p>
                

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <div class="mt-8 border-t pt-6 text-right">

    <p class="text-2xl font-bold">
        Total: ₹<?php echo e($total); ?>

    </p>

</div>
    <?php else: ?>

        <p class="text-gray-500">
            Your cart is empty.
        </p>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/cart/index.blade.php ENDPATH**/ ?>