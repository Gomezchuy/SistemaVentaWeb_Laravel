<div class="grid gap-[27px]">
    <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="grid">
            <div class="shimmer w-[150px] h-[17px]"></div>

            <div class="flex gap-[20px] items-center">
                <div class="shimmer w-full h-[8px]"></div>

                <div class="shimmer w-[35px] h-[17px]"></div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="flex gap-[20px] justify-end">
        <div class="flex gap-[4px] items-center">
            <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
            <div class="shimmer w-[143px] h-[17px]"></div>
        </div>
    </div>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/shimmer/reporting/progress-bar.blade.php ENDPATH**/ ?>