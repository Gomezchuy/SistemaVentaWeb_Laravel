<div class="flex gap-[6px]">
    <?php
        $maxVisibleItems = 3;
        $items = $order->items->take($maxVisibleItems);
        $restCount = max($order->items->count() - $maxVisibleItems, 0);
    ?>

    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $imageCount = $item->product?->images->count();
        ?>

        <div class="relative">
            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] relativerounded-[4px]">
                <?php if($imageCount > 0): ?>
                    <img 
                        class="w-full h-full rounded-[4px]" 
                        src="<?php echo e($item->product->base_image_url); ?>"
                    >
                    <span class="absolute bottom-[1px] ltr:left-[1px] rtl:right-[1px] text-[12px] font-bold text-white bg-darkPink rounded-full px-[6px]"><?php echo e($imageCount); ?></span>
                <?php else: ?>
                    <div class="w-full h-[60px] max-w-[60px] max-h-[60px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion">
                        <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">
                        
                        <p class="absolute w-full bottom-[5px] text-[6px] text-gray-400 text-center font-semibold"> 
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.product-image'); ?> 
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($restCount >= 1): ?>
            <a href="<?php echo e(route('admin.sales.orders.view', $order->id)); ?>">
                <div class="flex items-center w-[65px] h-[65px] bg-gray-50 dark:bg-gray-800 rounded-[4px]">
                    <p class="text-[12px] text-gray-600 dark:text-gray-300 text-center font-bold px-[6px] py-[6px]">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.product-count', ['count' => $restCount]); ?>
                    </p>
                </div>
            </a>
        <?php endif; ?>
    </div>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/orders/images.blade.php ENDPATH**/ ?>