<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'  => '',
    'entity' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'  => '',
    'entity' => null,
]); ?>
<?php foreach (array_filter(([
    'name'  => '',
    'entity' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex justify-start mt-[30px] max-lg:hidden">
    <div class="flex gap-x-[14px] items-center">        
        <?php echo e(Breadcrumbs::view('shop::partials.breadcrumbs', $name, $entity)); ?>

    </div>
</div>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/breadcrumbs/index.blade.php ENDPATH**/ ?>