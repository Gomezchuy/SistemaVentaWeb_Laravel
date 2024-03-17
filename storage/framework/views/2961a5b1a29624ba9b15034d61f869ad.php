<?php if($product->type == 'grouped'): ?>
    <?php echo view_render_event('bagisto.shop.products.view.grouped_products.before', ['product' => $product]); ?>


    <div class="w-[455px] max-w-full">
        <?php
            $groupedProducts = $product->grouped_products()->orderBy('sort_order')->get();
        ?>

        <?php if($groupedProducts->count()): ?>
            <div class="grid gap-[20px] mt-[30px]">
                <?php $__currentLoopData = $groupedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($groupedProduct->associated_product->getTypeInstance()->isSaleable()): ?>
                        <div class="flex gap-[20px] justify-between items-center">
                            <div class="text-[14px] font-medium">
                                <p class="">
                                    <?php echo app('translator')->get('shop::app.products.view.type.grouped.name'); ?>
                                </p>

                                <p class="text-[#6E6E6E] mt-[5px]">
                                    <?php echo e($groupedProduct->associated_product->name . ' + ' . core()->currency($groupedProduct->associated_product->getTypeInstance()->getFinalPrice())); ?>

                                </p>

                            </div>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.quantity-changer.index','data' => ['name' => 'qty['.e($groupedProduct->associated_product_id).']','value' => $groupedProduct->qty,'class' => 'gap-x-[16px] py-[10px] px-[12px] rounded-[12px]','@change' => 'updateItem($event)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::quantity-changer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'qty['.e($groupedProduct->associated_product_id).']','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($groupedProduct->qty),'class' => 'gap-x-[16px] py-[10px] px-[12px] rounded-[12px]','@change' => 'updateItem($event)']); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        
    </div>

    <?php echo view_render_event('bagisto.shop.products.view.grouped_products.before', ['product' => $product]); ?>

<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/products/view/types/grouped.blade.php ENDPATH**/ ?>