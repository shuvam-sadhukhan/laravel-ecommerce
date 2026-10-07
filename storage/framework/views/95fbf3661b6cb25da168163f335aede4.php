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
            <a href="/dashboard" class="flex items-center gap-3">
                
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


            <!-- Search -->
            <div class="hidden md:flex flex-1 max-w-md mx-8">
                <div class="relative w-full">

                    <input
                        type="text"
                        placeholder="Search products..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 pr-10
                               focus:outline-none focus:ring-2 focus:ring-indigo-500
                               focus:border-transparent"
                    >

                    <button
                        class="absolute right-2 top-1/2 -translate-y-1/2
                               text-gray-500 hover:text-indigo-600"
                    >
                        🔍
                    </button>

                </div>
            </div>


            <!-- Right Side -->
            <div class="flex items-center gap-4">

               
                 <a
                    href="/products"
                    class="text-gray-600 hover:text-indigo-600 font-medium px-4"
                >
                    Shop Products
                </a>
                <?php
    $cart = session()->get('cart', []);
    $cartCount = collect($cart)->sum('quantity');
?>
                <!-- Cart -->
                <a
                    href="/cart" class="relative"
                    class="text-gray-600 hover:text-indigo-600 font-medium px-4"
                >
                    🛒 Cart
                     <?php if($cartCount > 0): ?>
        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
            <?php echo e($cartCount); ?>

        </span>
    <?php endif; ?>
                </a>
                <a
                    href="#"
                    class="text-gray-600 hover:text-indigo-600 font-medium px-4"
                >
                    Welcome, <?php echo e(auth()->user()->name); ?>

                </a>

                <!-- Register -->
                <a
                    href="/logout"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg
                           hover:bg-indigo-700 transition"
                >
                    Logout
                </a>
                <a href="/ask-ai"
                   class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                   Ask AI
                   </a>

            </div>

        </div>
    </div>
</nav>


    <main class="max-w-7xl mx-auto px-6 py-8">

        <?php echo $__env->yieldContent('content'); ?>

    </main>

    
<footer class="bg-gray-900 text-gray-300 mt-16">

    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- Brand -->
            <div>
                <div class="flex items-center gap-3 mb-4">

                    <!-- Logo -->
                    <div class="w-10 h-10 rounded-xl bg-indigo-600
                                flex items-center justify-center">
                        <span class="text-white font-bold text-lg">
                            S
                        </span>
                    </div>

                    <h2 class="text-2xl font-bold text-white">
                        ShopNest
                    </h2>

                </div>

                <p class="text-gray-400 leading-relaxed">
                    Your trusted online shopping destination.
                    Discover quality products at great prices.
                </p>
            </div>


            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-4">
                    Quick Links
                </h3>

                <ul class="space-y-3">
                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Products
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Categories
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Customer Service -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-4">
                    Customer Service
                </h3>

                <ul class="space-y-3">
                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Contact Us
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Shipping Information
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Return Policy
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Account -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-4">
                    My Account
                </h3>

                <ul class="space-y-3">
                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Login
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            Register
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            My Orders
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-indigo-400 transition">
                            My Cart
                        </a>
                    </li>



</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/layouts/app.blade.php ENDPATH**/ ?>