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

<?php for($i = 0; $i < $count; $i++): ?>
<div class="grid grid-cols-1 gap-[25px]">
    <div class="grid gap-2.5 grid-cols-2 relative max-w-max max-sm:grid-cols-1">
        <div class="shimmer relative min-w-[250px] min-h-[258px] overflow-hidden rounded-[4px]"> 
            <img class="rounded-sm bg-[#F5F5F5]">
        </div>

        <div class="grid gap-[15px] content-start">
            <p class="shimmer w-[75%] h-[24px]"></p>

            <p class="shimmer w-[55%] h-[24px]"></p>

            
            <div class="hidden flex gap-4"> 
                <span class="shimmer w-[30px] h-[30px] block rounded-full"></span> 

                <span class="shimmer w-[30px] h-[30px] block rounded-full"></span> 
            </div>

            <p class="shimmer w-[100%] h-[24px]"></p>

            <div class="shimmer w-[152px] h-[46px] rounded-[12px]"></div>
        </div>
    </div>
</div>
<?php endfor; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/products/cards/list.blade.php ENDPATH**/ ?>