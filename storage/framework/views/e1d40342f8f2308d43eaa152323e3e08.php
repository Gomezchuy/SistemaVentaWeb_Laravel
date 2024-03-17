<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['attributeCount' => 3, 'productCount' => 3]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['attributeCount' => 3, 'productCount' => 3]); ?>
<?php foreach (array_filter((['attributeCount' => 3, 'productCount' => 3]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php for($i = 0;  $i < $attributeCount; $i++): ?>
    <div class="flex items-center max-w-full border-b-[1px] border-[#E9E9E9] max-sm:border-0">
        <div class="min-w-[304px] max-w-full max-sm:hidden">
            <p class="shimmer w-[55%] h-[21px]"></p>
        </div>
        
        <div class="flex gap-[12px] border-l-[1px] border-[#E9E9E9] max-sm:border-0">
            <?php for($j = 0;  $j < $productCount; $j++): ?>
                <div class="w-[311px] max-w-[311px] pr-0 p-[20px] max-sm:pl-0">
                    <div class="grid gap-[5px]">
                        <p class="shimmer hidden w-[55%] h-[21px] max-sm:block"></p>
                        <p class="shimmer w-[55%] h-[21px]"></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
<?php endfor; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/compare/attribute.blade.php ENDPATH**/ ?>