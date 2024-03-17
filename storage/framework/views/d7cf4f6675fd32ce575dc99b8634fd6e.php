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
    <div class="flex gap-[20px] p-[25px] border border-[#e5e5e5] rounded-[12px] max-sm:flex-wrap">
        <div class="min-h-[100px] min-w-[100px] max-sm:hidden">
            <div class="shimmer w-[100px] h-[100px] rounded-[12px]"></div>
        </div>

        <div class="">
            <div class="flex justify-between">
                <p class="shimmer w-[90px] h-[30px]"></p>
                
                <div class="flex items-center gap-[6px]">
                    <span class="shimmer w-[24px] h-[24px]"></span>
                    <span class="shimmer w-[24px] h-[24px]"></span>
                    <span class="shimmer w-[24px] h-[24px]"></span>
                    <span class="shimmer w-[24px] h-[24px]"></span>
                    <span class="shimmer w-[24px] h-[24px]"></span>
                </div>
            </div>

            <p class="shimmer mt-[10px] w-[130px] h-[21px]"></p>

            <div class="grid gap-[6px] mt-[20px] ">
                <p class="shimmer w-[130px] h-[21px]"></p>
                <p class="shimmer w-[130px] h-[21px]"></p>
            </div>

            <div class="flex gap-2 flex-wrap mt-[10px]">
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
                <span class="shimmer rounded-[12px] w-[48px] h-[48px]"></span>
            </div>
        </div>
    </div>
<?php endfor; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/products/reviews/card.blade.php ENDPATH**/ ?>