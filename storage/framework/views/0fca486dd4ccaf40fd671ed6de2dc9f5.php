<div class="flex gap-[15px]">
    <?php $__currentLoopData = ['enable_facebook', 'enable_twitter', 'enable_google', 'enable_linkedin', 'enable_github']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(! core()->getConfigData('customer.settings.social_login.' . $social)): ?>
            <?php continue; ?>
        <?php endif; ?>

        <?php 
            $icon = explode('_', $social); 
        ?>

        <a
            href="<?php echo e(route('customer.social-login.index', $icon[1])); ?>"
            class="transition-all hover:opacity-[0.8]"
            aria-label="<?php echo e($icon[0]); ?>"
        >
            <?php echo $__env->make('social_login::icons.' . $icon[1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\SocialLogin\src/resources/views/shop/customers/session/social-links.blade.php ENDPATH**/ ?>