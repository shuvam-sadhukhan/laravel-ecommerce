

<?php $__env->startSection('content'); ?>

<div class="max-w-4xl mx-auto px-6 py-10">



<div class="text-center mb-8">

    <h1 class="text-3xl font-bold">
        ShopNest AI Assistant
    </h1>

    <p class="text-gray-500 mt-2">
        Ask me about products, shopping, orders, payments, delivery or returns.
    </p>

</div>



<div class="bg-white border rounded-xl shadow-sm p-6">

    
    <div class="space-y-4 mb-6">

        <?php if(!empty($chat)): ?>

            <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($message['role'] === 'user'): ?>

                    
                    <div class="flex justify-end">

                        <div class="bg-indigo-600 text-white px-4 py-3 rounded-xl max-w-[75%]">

                            <?php echo e($message['message']); ?>


                        </div>

                    </div>

                <?php else: ?>

                    
                    <div class="flex justify-start">

                        <div class="bg-gray-100 text-gray-800 px-4 py-3 rounded-xl max-w-[75%]">

                            <p class="text-sm font-semibold mb-1">
                                ShopNest AI
                            </p>

                            <?php echo e($message['message']); ?>


                        </div>

                    </div>

                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

            <div class="text-center text-gray-400 py-10">

                <p class="text-lg">
                    👋 Hello! How can I help you?
                </p>

                <p class="text-sm mt-2">
                    Try asking:
                </p>

                <div class="mt-4 space-y-2 text-sm">

                    <p>"What products do you have?"</p>
                    <p>"How does delivery work?"</p>
                    <p>"Can I return a product?"</p>

                </div>

            </div>

        <?php endif; ?>

    </div>


    
    <form action="/ask-ai" method="POST">

        <?php echo csrf_field(); ?>

        <div class="flex gap-3">

            <input
                type="text"
                name="question"
                placeholder="Ask something about shopping..."
                required
                class="flex-1 border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >

            <button
                type="submit"
                class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700"
            >
                Ask
            </button>

        </div>

    </form>

</div>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/ai.blade.php ENDPATH**/ ?>