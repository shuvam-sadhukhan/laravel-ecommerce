<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ShopNest</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-16">

            <!-- Logo + ShopNest -->
            <a href="/login" class="flex items-center gap-3">
                
                <!-- Logo -->
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center">
                    <span class="text-white font-bold text-lg">
                        S
                    </span>
                </div>

                <!-- Brand Name -->
                <span class="text-2xl font-bold text-gray-800">
                    ShopNest
                </span>

            </a>


           


           
        </div>
    </div>
</nav>
   <main class="max-w-7xl mx-auto px-6 py-8">

        <?php echo $__env->yieldContent('content'); ?>

    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/layouts/auth.blade.php ENDPATH**/ ?>