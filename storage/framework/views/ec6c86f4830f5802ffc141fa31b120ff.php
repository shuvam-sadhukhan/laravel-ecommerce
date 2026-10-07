

<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold">
            Users
        </h1>

        <p class="text-gray-500 mt-1">
            Manage ShopNest users
        </p>
    </div>

</div>


<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>
                <th class="text-left px-6 py-4">
                    ID
                </th>

                <th class="text-left px-6 py-4">
                    Name
                </th>

                <th class="text-left px-6 py-4">
                    Email
                </th>

                <th class="text-left px-6 py-4">
                    Role
                </th>

                <th class="text-left px-6 py-4">
                    Created
                </th>
                <th class="text-left px-6 py-4" colspan="2" align="center">
                    Action
                </th>
            </tr>

        </thead>


        <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr class="border-t">

                    <td class="px-6 py-4">
                        <?php echo e($user->id); ?>

                    </td>

                    <td class="px-6 py-4 font-medium">
                        <?php echo e($user->name); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($user->email); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($user->role); ?>

                    </td>

                    <td class="px-6 py-4">
                        <?php echo e($user->created_at->format('d M Y')); ?>

                    </td>

                    <td class="px-6 py-4">
                     <a href="/admin/users/<?php echo e($user->id); ?>" class="text-blue-600 hover:underline" >
                        View
                         </a>
                      </td>
                      <td class="px-6 py-4">
                     <a href="/admin/delete/<?php echo e($user->id); ?>" class="text-blue-600 hover:underline" >
                        Delete
                         </a>
                      </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>
<?php if(session('success')): ?>

    <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">
        <?php echo e(session('success')); ?>

    </div>

<?php endif; ?>

<?php if(session('error')): ?>

    <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg">
        <?php echo e(session('error')); ?>

    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/admin/users.blade.php ENDPATH**/ ?>