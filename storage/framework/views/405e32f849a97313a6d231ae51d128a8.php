<div class="grid gap-[14px] justify-center justify-items-center py-[40px] px-[10px]">
    <img
        class="w-[120px] h-[120px] p-2 dark:invert dark:mix-blend-exclusion"
        src="<?php echo e(bagisto_asset('images/empty-placeholders/default-empty.svg')); ?>"
    >

    <div class="flex flex-col gap-[5px] items-center">

        <p class="text-[16px] text-gray-400 font-semibold">
            <?php echo app('translator')->get('admin::app.reporting.empty.title'); ?>
        </p>
        
        <p class="text-gray-400">
            <?php echo app('translator')->get('admin::app.reporting.empty.info'); ?>
        </p>
    </div>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/reporting/empty.blade.php ENDPATH**/ ?>