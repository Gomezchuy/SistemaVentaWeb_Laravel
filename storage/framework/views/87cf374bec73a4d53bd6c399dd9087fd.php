<v-create-invoices>
    <div
        class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
    >
        <span class="icon-sales text-[24px]"></span> 

        <?php echo app('translator')->get('admin::app.sales.invoices.create.invoice'); ?>     
    </div>
</v-create-invoices>

<?php if (! $__env->hasRenderedOnce('92e1c62b-d4db-4307-9417-88652aff0f39')): $__env->markAsRenderedOnce('92e1c62b-d4db-4307-9417-88652aff0f39');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-create-invoices-template">
        <div>
            <div
                class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
                    @click="$refs.invoice.open()"
                >
                    <span class="icon-sales text-[24px]"></span> 
            
                    <?php echo app('translator')->get('admin::app.sales.invoices.create.invoice'); ?>     
            </div>

            <!-- Invoice Create drawer -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['method' => 'POST','action' => route('admin.sales.invoices.store', $order->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'POST','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.sales.invoices.store', $order->id))]); ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['ref' => 'invoice']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'invoice']); ?>
                    <!-- Drawer Header -->
                     <?php $__env->slot('header', null, []); ?> 
                        <div class="grid gap-[12px]">
                            <div class="flex justify-between items-center">
                                <p class="text-[20px] font-medium dark:text-white">
                                    <?php echo app('translator')->get('admin::app.sales.invoices.create.new-invoice'); ?>         
                                </p>
    
                                <button
                                    type="submit"
                                    class="mr-[45px] primary-button"
                                >
                                <?php echo app('translator')->get('admin::app.sales.invoices.create.create-invoice'); ?>        
                                </button>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
    
                    <!-- Drawer Content -->
                     <?php $__env->slot('content', null, ['class' => '!p-0']); ?> 
                        <div class="grid">
                            <div class="p-[16px] !pt-0">
                                <div class="grid">
                                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex gap-[10px] justify-between py-[16px]">
                                            <div class="flex gap-[10px]">
                                                <?php if($item->product?->base_image_url): ?>
                                                    <img
                                                        class="w-full h-[60px] max-w-[60px] max-h-[60px] relative rounded-[4px]"
                                                        src="<?php echo e($item->product?->base_image_url); ?>"
                                                    >
                                                <?php else: ?>
                                                    <div class="w-full h-[60px] max-w-[60px] max-h-[60px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion">
                                                        <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">
                                                        
                                                        <p class="absolute w-full bottom-[5px] text-[6px] text-gray-400 text-center font-semibold"> 
                                                            <?php echo app('translator')->get('admin::app.sales.invoices.create.product-image'); ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>
                
                                                <div class="grid gap-[6px] place-content-start">
                                                    <p class="text-[16x] text-gray-800 dark:text-white font-semibold"><?php echo e($item->name); ?></p>
                
                                                    <div class="flex flex-col gap-[6px] place-items-start">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.invoices.create.amount-per-unit', [
                                                                'amount' => core()->formatBasePrice($item->base_price),
                                                                'qty'    => $item->qty_ordered,
                                                            ]); ?>
                                                        </p>
                
                                                        <?php if(isset($item->additional['attributes'])): ?>
                                                            <p class="text-gray-600 dark:text-gray-300">
                                                                <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php echo e($attribute['attribute_name']); ?> : <?php echo e($attribute['option_label']); ?>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        <?php endif; ?>
                
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.invoices.create.sku', ['sku' => $item->sku]); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => ['class' => 'mb-[10px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-[10px]']); ?>
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                                    <?php echo app('translator')->get('admin::app.sales.invoices.create.qty-to-invoiced'); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'invoice[items][' . $item->id . ']','id' => 'invoice[items][' . $item->id . ']','value' => $item->qty_to_invoice,'rules' => 'required|numeric|min:0','class' => '!w-[100px]','label' => 'Qty to invoiced','placeholder' => 'Qty to invoiced']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('invoice[items][' . $item->id . ']'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('invoice[items][' . $item->id . ']'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->qty_to_invoice),'rules' => 'required|numeric|min:0','class' => '!w-[100px]','label' => 'Qty to invoiced','placeholder' => 'Qty to invoiced']); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'invoice[items][' . $item->id . ']']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('invoice[items][' . $item->id . ']')]); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </script>

    <script type="module">
        app.component('v-create-invoices', {
            template: '#v-create-invoices-template',
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/invoices/create.blade.php ENDPATH**/ ?>