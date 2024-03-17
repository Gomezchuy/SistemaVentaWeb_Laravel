
<div class="flex-1 relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
    
    <div class="shimmer w-[150px] h-[17px] mb-[16px]"></div>

    <div class="grid grid-cols-4 gap-[24px]">
        <?php $__currentLoopData = range(1, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="grid gap-[16px]">
                <div class="grid gap-[2px]">
                    <div class="shimmer w-[75px] h-[17px]"></div>
                    <div class="shimmer w-[120px] h-[17px]"></div>
                </div>

                <div class="shimmer w-full relative aspect-[0.5/1]"></div>

                <div class="shimmer w-[175px] h-[17px]"></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="flex gap-[20px] justify-end mt-[24px]">
        <div class="flex gap-[4px] items-center">
            <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
            <div class="shimmer w-[143px] h-[17px]"></div>
        </div>
    </div>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/shimmer/reporting/sales/purchase-funnel.blade.php ENDPATH**/ ?>