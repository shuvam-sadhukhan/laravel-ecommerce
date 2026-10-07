

<?php $__env->startSection('content'); ?>

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Product</h1>

        <p class="text-gray-500">
            Update product information.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <form
            action="/admin/products/<?php echo e($product->id); ?>"
            method="POST"   enctype="multipart/form-data"
        >

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Category -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Category
                </label>

                <select
                    name="category_id"
                    class="w-full border rounded-lg px-4 py-3"
                >

                    <option value="">
                        Select Category
                    </option>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option
                            value="<?php echo e($category->id); ?>">
                            <!-- <?php echo e(old('category_id', $product->category_id) == $category->id ? 'selected' : ''); ?> -->
                        
                            <?php echo e($category->name); ?>

                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-2">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            <!-- Product Name -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Product Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="<?php echo e(old('name', $product->name)); ?>"
                    class="w-full border rounded-lg px-4 py-3"
                >

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-2">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            <!-- Description -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="5"
                    class="w-full border rounded-lg px-4 py-3"
                ><?php echo e(old('description', $product->description)); ?></textarea>

                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-2">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            <!-- Price -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Price
                </label>

                <input
                    type="number"
                    name="price"
                    step="0.01"
                    value="<?php echo e(old('price', $product->price)); ?>"
                    class="w-full border rounded-lg px-4 py-3"
                >

                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-2">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>
            <div class="mb-5">

    <label class="block text-sm font-medium mb-2">
        Product Image
    </label>

    <?php if($product->image): ?>
        <img
            src="<?php echo e(asset('storage/' . $product->image)); ?>"
            class="w-24 h-24 object-cover rounded-lg mb-3"
        >
    <?php endif; ?>

    <input
        type="file"
        name="image"
        accept="image/*"
        class="w-full border rounded-lg px-4 py-3"
    >

    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-sm mt-2">
            <?php echo e($message); ?>

        </p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>


          

            


            <!-- Buttons -->

            <div class="flex gap-3">

                <a
                    href="/admin/products"
                    class="px-5 py-3 border rounded-lg"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-black text-white px-5 py-3 rounded-lg"
                >
                    Update Product
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/editProducts.blade.php ENDPATH**/ ?>