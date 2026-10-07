<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ShopNest Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6">

            <h1 class="text-2xl font-bold mb-8">
                ShopNest
            </h1>

            <nav class="space-y-3">

                <a href="/admin/dashboard"
                   class="block px-4 py-2 rounded hover:bg-gray-800">
                    Dashboard
                </a>

                <a href="/admin/products"
                   class="block px-4 py-2 rounded hover:bg-gray-800">
                    Products
                </a>

                <a href="/admin/categories"
                   class="block px-4 py-2 rounded hover:bg-gray-800">
                    Categories
                </a>

                <a href="#"
                   class="block px-4 py-2 rounded hover:bg-gray-800">
                    Orders
                </a>

                <a href="/admin/users"
                   class="block px-4 py-2 rounded hover:bg-gray-800">
                    Users
                </a>

            </nav>

            <div class="mt-10">

                

                    <a href="/logout"><button
                        type="submit"
                        class="w-full text-left px-4 py-2 rounded
                               bg-red-600 hover:bg-red-700"
                    >
                        Logout
                    </button></a>
                

            </div>

        </aside>


        <!-- Main Content -->
        <main class="flex-1">

            <!-- Topbar -->
            <header class="bg-white shadow px-8 py-5">

                <div class="flex justify-between items-center">

                    <h2 class="text-xl font-semibold">
                        Admin Panel
                    </h2>

                    <p>
                        Welcome,
                        <span class="font-semibold">
                            <?php echo e(auth()->user()->name); ?>

                        </span>
                    </p>

                </div>

            </header>


            <!-- Page Content -->
            <section class="p-8">

                <?php echo $__env->yieldContent('content'); ?>

            </section>

        </main>

    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/layouts/admin.blade.php ENDPATH**/ ?>