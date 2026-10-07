


<?php $__env->startSection('content'); ?>

<div class="min-h-[80vh] flex items-center justify-center">

    <div class="w-full max-w-md">

        <!-- Register Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">

            <!-- Heading -->    
            <div class="text-center mb-8">

                <!-- Logo -->
                <div class="mx-auto w-14 h-14 rounded-2xl bg-indigo-600
                            flex items-center justify-center shadow-lg mb-4">
                    <span class="text-white text-2xl font-bold">
                        S
                    </span>
                </div>

                <h1 class="text-3xl font-bold text-gray-800">
                    Create Account
                </h1>

                <p class="text-gray-500 mt-2">
                    Join ShopNest and start shopping
                </p>

            </div>


            <!-- Registration Form -->
            <form action="/register" method="POST" class="space-y-5">

                <?php echo csrf_field(); ?>


                <!-- Name -->
                <div>
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="<?php echo e(old('name')); ?>"
                        placeholder="Tom Alread"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm mt-1">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                <!-- Email -->
                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="<?php echo e(old('email')); ?>"
                        placeholder="example@gmail.com"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm mt-1">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                <!-- Password -->
                <div>
                    <label
                        for="password"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a strong Password"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm mt-1">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                <!-- Confirm Password -->
                <div>
                    <label
                        for="password_confirmation"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Must be same as Password given"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                </div>


                <!-- Register Button -->
                <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white
                           py-3 rounded-xl font-semibold
                           hover:bg-indigo-700
                           active:scale-[0.98]
                           transition duration-200
                           shadow-md"
                >
                    Create Account
                </button>

            </form>


            <!-- Login Link -->
            <div class="text-center mt-6">

                <p class="text-gray-500 text-sm">
                    Already have an account?

                    <a
                        href="/login"
                        class="text-indigo-600 font-semibold
                               hover:text-indigo-700"
                    >
                        Login
                    </a>
                </p>

            </div>

        </div>


        <!-- Small Footer Text -->
        <p class="text-center text-gray-400 text-sm mt-6">
            By creating an account, you agree to our
            <a href="#" class="text-indigo-600 hover:underline">
                Terms
            </a>
            and
            <a href="#" class="text-indigo-600 hover:underline">
                Privacy Policy
            </a>.
        </p>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/register.blade.php ENDPATH**/ ?>