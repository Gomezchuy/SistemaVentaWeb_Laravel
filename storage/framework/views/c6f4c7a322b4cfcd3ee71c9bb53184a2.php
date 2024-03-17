<?php if(core()->getConfigData('catalog.products.social_share.enabled')): ?>
    <?php
        $message = core()->getConfigData('catalog.products.social_share.share_message');
    ?>

    <div class="flex gap-[25px]">
        <?php echo view_render_event('bagisto.shop.products.view.share.before', ['product' => $product]); ?>


        <div class="hidden gap-[10px] justify-center items-center max-md:flex cursor-pointer">
            <span class="icon-share text-[24px]"></span>
            <a href="intent://share/#Intent;action=android.intent.action.SEND;type=text/plain;S.android.intent.extra.TEXT=<?php echo e(rawurlencode($product->name . ' ' . route('shop.product_or_category.index', [$product->url_key]))); ?>;end">
                <?php echo app('translator')->get('admin::app.configuration.index.catalog.products.social-share.share'); ?>
            </a>
        </div>

        <div class="max-md:hidden">
            <ul class="flex gap-[15px]">
                <?php $__currentLoopData = ['facebook', 'twitter', 'instagram', 'pinterest', 'linkedin', 'whatsapp', 'email']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(! core()->getConfigData('catalog.products.social_share.' . $social)): ?>
                        <?php continue; ?>
                    <?php endif; ?>

                    <?php echo $__env->make('social_share::links.' . $social , compact('product', 'message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <?php echo view_render_event('bagisto.shop.products.view.share.after', ['product' => $product]); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\SocialShare\src\Providers/../Resources/views/share.blade.php ENDPATH**/ ?>