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

<?php for($i = 0;  $i < $count; $i++): ?>
    <div class="grid gap-2.5 relative w-full max-w-[291px] max-sm:grid-cols-1 <?php echo e($attributes["class"]); ?>">
        <div class="shimmer relative w-full rounded-[4px]">
            <div class="relative after:content-[' '] after:block after:pb-[calc(100%+9px)]"></div>
        </div>

        <div class="grid gap-2.5 content-start">
            <p class="shimmer w-[75%] h-[24px]"></p>
            <p class="shimmer w-[55%] h-[24px]"></p>

            
            <div class="hidden flex gap-4 mt-[12px]">
                <span class="shimmer w-[30px] h-[30px] block rounded-full"></span>
                <span class="shimmer w-[30px] h-[30px] block rounded-full"></span>
            </div>
        </div>
    </div>
<?php endfor; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/products/cards/grid.blade.php ENDPATH**/ ?>