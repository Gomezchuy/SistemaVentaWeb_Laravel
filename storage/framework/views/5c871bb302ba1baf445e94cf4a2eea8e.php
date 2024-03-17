<div class="container mt-20 max-lg:px-[30px] max-sm:mt-[30px]">
    <div class="flex justify-between">
        <h3 class="shimmer w-[200px] h-[45px]"></h3>

        <div class="flex gap-8 justify-between items-center">
            <span class="shimmer inline-block w-[24px] h-[24px]"></span>

            <span class="shimmer inline-block w-[24px] h-[24px]"></span>
        </div>
    </div>

    <div class="flex gap-8 mt-[40px] overflow-auto scrollbar-hide max-sm:mt-[20px]">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.products.cards.grid','data' => ['class' => 'min-w-[291px]','count' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.products.cards.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-w-[291px]','count' => 4]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    <?php if($navigationLink): ?>
        <a class="shimmer block w-[150.172px] h-[48px] mt-[60px] mx-auto rounded-[18px]"></a>
    <?php endif; ?>
</div>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/products/carousel.blade.php ENDPATH**/ ?>