<div class="flex gap-[5px]">
    <div class="grid">
        <?php $__currentLoopData = range(1, 10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="shimmer w-[39px] h-[15px]"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="w-full grid gap-[5px]">
        <div class="flex items-end w-full pl-[10px] border-l-[1px]  border-b-[1px] aspect-[3.23/1]">
            <div class="w-full flex gap-[20px] justify-between items-end aspect-[3.23/1] max-lg:gap-[15px] max-sm:gap-[10px]">
                <?php $__currentLoopData = range(1, 30); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="flex shimmer w-full"
                        style="height: <?php echo e(rand(10, 100)); ?>%"
                    ></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="flex gap-[20px] justify-between pl-[10px] max-lg:gap-[15px] max-sm:gap-[10px]">
            <?php $__currentLoopData = range(1, 30); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="shimmer flex w-full h-[15px]"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<div class="flex gap-[20px] justify-center">
    <div class="flex gap-[4px] items-center">
        <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
        <div class="shimmer w-[143px] h-[17px]"></div>
    </div>
    
    <div class="flex gap-[4px] items-center">
        <div class="shimmer w-[14px] h-[14px] rounded-[3px]"></div>
        <div class="shimmer w-[143px] h-[17px]"></div>
    </div>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/shimmer/reporting/graph.blade.php ENDPATH**/ ?>