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

    <div class="shimmer flex items-center gap-x-[10px] py-[12px] px-[20px] rounded-[12px]">
        <span class="w-[108px] h-[24px]"></span>
    </div>
</div>

<div class="overflow-auto journal-scroll">
    <?php for($i = 0;  $i < $count; $i++): ?>
        <div class="flex flex-wrap gap-[75px] mt-[30px] max-1060:flex-col">
            <div class="grid gap-y-[25px] flex-1">
                <!-- Single card -->
                <div class="flex justify-between gap-x-[10px] pb-[18px] border-b-[1px] border-[#E9E9E9]">
                    <div class="flex gap-x-[20px]">
                        <div class="">
                            <div class="shimmer w-[110px] h-[110px]"></div>
                        </div>

                        <div class="grid gap-y-[10px]">
                            <div class="shimmer w-[200px] h-[21px]"></div>
                            <div class="flex gap-x-[10px] gap-y-[6px] flex-wrap">
                                <div class="grid gap-[8px]">
                                </div>
                            </div>

                            <div class="shimmer w-[100px] h-[21px]"></div>
                            
                            <div class="hidden gap-[10px] place-content-start max-sm:grid">
                                <div class="shimmer w-[100px] h-[27px]"></div>

                                <div class="shimmer w-[100px] h-[24px]"></div>
                            </div>

                            <div class="flex gap-[20px] flex-wrap">
                                <div class="shimmer w-[110px] h-[40px] rounded-[54px]"></div>
                                <div class="shimmer w-[158px] h-[40px] rounded-[18px]"></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-[10px] place-content-start max-sm:hidden">
                        <div class="shimmer w-[100px] h-[27px]"></div>
                        
                        <div class="shimmer w-[100px] h-[24px]"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/shimmer/customers/account/wishlist/index.blade.php ENDPATH**/ ?>