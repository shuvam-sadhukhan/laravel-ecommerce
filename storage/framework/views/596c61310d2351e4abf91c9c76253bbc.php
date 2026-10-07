

<?php $__env->startSection('content'); ?>

<div class="max-w-2xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Category</h1>
        <p class="text-gray-500">
            Update the category information.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <form
            action="/admin/categories/<?php echo e($category->id); ?>"
            method="POST"
        >

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Category Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="<?php echo e($category->name); ?>"
                    class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
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

            <div class="flex gap-3">

                <a
                    href="/admin/categories"
                    class="px-5 py-3 border rounded-lg"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-black text-white px-5 py-3 rounded-lg"
                >
                    Update Category
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/editCategories.blade.php ENDPATH**/ ?>