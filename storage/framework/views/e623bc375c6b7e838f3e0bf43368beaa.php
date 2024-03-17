<?php if (! ($breadcrumbs->isEmpty())): ?>
    <nav aria-label="">
        <ol class="flex">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(
                    $breadcrumb->url 
                    && ! $loop->last
                ): ?>
                    <li class="flex gap-x-[10px] items-center text-[16px] font-medium">
                        <a href="<?php echo e($breadcrumb->url); ?>">
                            <?php echo e($breadcrumb->title); ?>

                        </a>

                        <span class="icon-arrow-right text-[24px]"></span>
                    </li>
                <?php else: ?>
                    <li 
                        class="flex gap-x-[10px] items-center ml-[10px] text-[#6E6E6E] text-[16px] after:content-['/'] after:last:hidden" 
                        aria-current="page"
                    >
                        <?php echo e($breadcrumb->title); ?>

                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/partials/breadcrumbs.blade.php ENDPATH**/ ?>