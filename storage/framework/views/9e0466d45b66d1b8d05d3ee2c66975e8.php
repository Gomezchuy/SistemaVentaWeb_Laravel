<div class="flex flex-col">
    <p class="text-gray-800 font-semibold leading-6 dark:text-white">
        <?php echo e($address->company_name ?? ''); ?>

    </p>

    <p class="text-gray-800 font-semibold leading-6 dark:text-white">
        <?php echo e($address->name); ?>

    </p>
    
    <p class="text-gray-600 dark:text-gray-300 leading-6">
        <?php echo e($address->address1); ?><br>

        <?php if($address->address2): ?>
            <?php echo e($address->address2); ?><br>
        <?php endif; ?>

        <?php echo e($address->city); ?><br>

        <?php echo e($address->state); ?><br>

        <?php echo e(core()->country_name($address->country)); ?> <?php if($address->postcode): ?> (<?php echo e($address->postcode); ?>) <?php endif; ?><br>

        <?php echo e(__('admin::app.sales.orders.view.contact')); ?> : <?php echo e($address->phone); ?>

    </p>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/address.blade.php ENDPATH**/ ?>