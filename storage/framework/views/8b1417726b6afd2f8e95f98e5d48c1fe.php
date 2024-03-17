<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['count' => 0]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['count' => 0]); ?>
<?php foreach (array_filter((['count' => 0]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex justify-between items-center overflow-auto journal-scroll">
    <h2 class="shimmer w-[110px] h-[39px]"></h2>
</div>

<div class="grid gap-[20px] mt-[60px] max-1060:grid-cols-[1fr]">
    <?php for($i = 0;  $i < $count; $i++): ?>
        <!-- Single card -->
        <div class="flex gap-[20px] p-[25px] border rounded-[12px] max-sm:flex-wrap">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'max-w-[128px] max-h-[146px] min-w-[128px] w-[128px] h-[146px] rounded-[12px]','alt' => 'Review Image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-w-[128px] max-h-[146px] min-w-[128px] w-[128px] h-[146px] rounded-[12px]','alt' => 'Review Image']); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <div class="w-full">
                <div class="flex justify-between">
                    <p class="shimmer h-[30px] w-[110px]"></p>

                    <div class="flex gap-[10px] items-center">
                        <span class="shimmer h-[24px] w-[24px]"></span>
                        <span class="shimmer h-[24px] w-[24px]"></span>
                        <span class="shimmer h-[24px] w-[24px]"></span>
                        <span class="shimmer h-[24px] w-[24px]"></span>
                        <span class="shimmer h-[24px] w-[24px]"></span>
                    </div>
                </div>

                <p class="shimmer h-[20px] w-[110px] mt-[10px]"></p>

                <p class="shimmer h-[20px] w-full mt-[20px]"></p>

                <p class="shimmer h-[20px] w-full mt-[10px]"></p>
            </div>
        </div>
    <?php endfor; ?>
</div><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/customers/account/reviews/index.blade.php ENDPATH**/ ?>