<?php echo view_render_event('bagisto.admin.catalog.product.edit.form.images.before', ['product' => $product]); ?>


<div class="relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
    <!-- Panel Header -->
    <div class="flex gap-[20px] justify-between mb-[16px]">
        <div class="flex flex-col gap-[8px]">
            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                <?php echo app('translator')->get('admin::app.catalog.products.edit.images.title'); ?>
            </p>

            <p class="text-[12px] text-gray-500 dark:text-gray-300 font-medium">
                <?php echo app('translator')->get('admin::app.catalog.products.edit.images.info'); ?>
            </p>
        </div>
    </div>

    <!-- Image Blade Component -->
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.media.images','data' => ['name' => 'images[files]','allowMultiple' => 'true','showPlaceholders' => 'true','uploadedImages' => $product->images]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::media.images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'images[files]','allow-multiple' => 'true','show-placeholders' => 'true','uploaded-images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->images)]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>

<?php echo view_render_event('bagisto.admin.catalog.product.edit.form.images.after', ['product' => $product]); ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/catalog/products/edit/images.blade.php ENDPATH**/ ?>