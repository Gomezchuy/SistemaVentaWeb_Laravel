<?php if($prices['final']['price'] < $prices['regular']['price']): ?>
    <p class="font-medium text-[#6E6E6E] line-through">
        <?php echo e($prices['regular']['formatted_price']); ?>

    </p>

    <p class="font-semibold">
        <?php echo e($prices['final']['formatted_price']); ?>

    </p>
<?php else: ?>
    <p class="font-semibold">
        <?php echo e($prices['regular']['formatted_price']); ?>

    </p>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/products/prices/index.blade.php ENDPATH**/ ?>