<v-create-refund>
    <div class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]">
        <span class="icon-cancel text-[24px]"></span> 

        <?php echo app('translator')->get('admin::app.sales.orders.view.refund'); ?>     
    </div>
</v-create-refund>

<?php if (! $__env->hasRenderedOnce('e4215e90-03c4-4d73-9420-1aafea4a46b7')): $__env->markAsRenderedOnce('e4215e90-03c4-4d73-9420-1aafea4a46b7');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-create-refund-template">
        <div>
            <div
                class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
                @click="$refs.refund.open()"
            >
                <span class="icon-cancel text-[24px]"></span> 

                <?php echo app('translator')->get('admin::app.sales.orders.view.refund'); ?>     
            </div>

            <!-- refund Create Drawer -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['method' => 'POST','action' => route('admin.sales.refunds.store', $order->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'POST','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.sales.refunds.store', $order->id))]); ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['ref' => 'refund']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'refund']); ?>
                    <!-- Drawer Header -->
                     <?php $__env->slot('header', null, []); ?> 
                        <div class="grid gap-[12px]">
                            <div class="flex justify-between items-center">
                                <p class="text-[20px] font-medium dark:text-white">
                                    <?php echo app('translator')->get('admin::app.sales.refunds.create.title'); ?>
                                </p>

                                <div class="flex gap-x-[10px]">
                                    <!-- Update Quantity Button -->
                                    <div 
                                        class="transparent-button text-red-600 hover:bg-gray-200 dark:hover:bg-gray-800"
                                        @click="updateQty"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.refunds.create.update-quantity-btn'); ?>
                                    </div>

                                    <!-- Refund Submit Button -->
                                    <button
                                        type="submit"
                                        class="mr-[45px] primary-button"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.refunds.create.refund-btn'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>

                    <!-- Drawer Content -->
                     <?php $__env->slot('content', null, ['class' => '!p-0']); ?> 
                        <div class="grid">
                            <div class="p-[16px] !pt-0">
                                <div class="grid">
                                    <!-- Item Listing -->
                                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex gap-[10px] justify-between py-[16px]">
                                            <div class="flex gap-[10px]">
                                                <?php if($item->product->base_image_url): ?>
                                                    <img
                                                        class="w-full h-[60px] max-w-[60px] max-h-[60px] relative rounded-[4px]"
                                                        src="<?php echo e($item->product->base_image_url); ?>"
                                                    >
                                                <?php else: ?>
                                                    <div class="w-full h-[60px] max-w-[60px] max-h-[60px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion">
                                                        <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">
                                                        
                                                        <p class="absolute w-full bottom-[5px] text-[6px] text-gray-400 text-center font-semibold"> 
                                                            <?php echo app('translator')->get('admin::app.sales.invoices.view.product-image'); ?> 
                                                        </p>
                                                    </div>
                                                <?php endif; ?>
                
                                                <div class="grid gap-[6px] place-content-start">
                                                    <!-- Item Additional Attributes -->
                                                    <p class="text-[16x] text-gray-800 dark:text-white font-semibold">
                                                        <?php echo e($item->name); ?>

                                                    </p>
                
                                                    <div class="flex flex-col gap-[6px] place-items-start">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.amount-per-unit', [
                                                                'amount' => core()->formatBasePrice($item->base_price),
                                                                'qty'    => $item->qty_ordered,
                                                            ]); ?>
                                                        </p>

                                                        <!-- Item Additional Attributes -->
                                                        <?php if(isset($item->additional['attributes'])): ?>
                                                            <p class="text-gray-600 dark:text-gray-300">
                                                                <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php echo e($attribute['attribute_name']); ?> : <?php echo e($attribute['option_label']); ?>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        <?php endif; ?>
                
                                                        <!-- Item SKU -->
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.sku', ['sku' => Webkul\Product\Helpers\ProductType::hasVariants($item->type) ? $item->child->sku : $item->sku]); ?>
                                                        </p>

                                                        <!-- Item Status -->
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo e($item->qty_ordered ? trans('admin::app.sales.refunds.create.item-ordered', ['qty_ordered' => $item->qty_ordered]) : ''); ?>


                                                            <?php echo e($item->qty_invoiced ? trans('admin::app.sales.refunds.create.item-invoice', ['qty_invoiced' => $item->qty_invoiced]) : ''); ?>


                                                            <?php echo e($item->qty_shipped ? trans('admin::app.sales.refunds.create.item-shipped', ['qty_shipped' => $item->qty_shipped]) : ''); ?>


                                                            <?php echo e($item->qty_refunded ? trans('admin::app.sales.refunds.create.item-refunded', ['qty_refunded' => $item->qty_refunded]) : ''); ?>


                                                            <?php echo e($item->qty_canceled ? trans('admin::app.sales.refunds.create.item-canceled', ['qty_canceled' => $item->qty_canceled]) : ''); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="gap-[10px] justify-between pb-[16px] border-b-[1px] border-slate-300 dark:border-gray-800">
                                            <!-- Information -->
                                            <div class="flex justify-between">
                                                <!-- Quantity to Refund -->
                                                <div class="">
                                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                                        <?php echo app('translator')->get('admin::app.sales.refunds.create.qty-to-refund'); ?>
                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => ['class' => '!mb-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!mb-0']); ?>
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'refund[items]['.e($item->id).']','id' => 'refund[items]['.e($item->id).']','rules' => 'required|numeric|min_value:0|max_value:' . $item->qty_ordered,'label' => trans('admin::app.sales.refunds.create.qty-to-refund'),'vModel' => 'refund.items['.e($item->id).']']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'refund[items]['.e($item->id).']','id' => 'refund[items]['.e($item->id).']','rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('required|numeric|min_value:0|max_value:' . $item->qty_ordered),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.refunds.create.qty-to-refund')),'v-model' => 'refund.items['.e($item->id).']']); ?>
                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'refund[items]['.e($item->id).']']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'refund[items]['.e($item->id).']']); ?>
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

                                                <!-- Item Order Summary -->
                                                <div class="flex w-full gap-[20px] justify-end item">
                                                    <div class="flex flex-col gap-y-[6px]">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.price'); ?>
                                                        </p>

                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.subtotal'); ?>
                                                        </p>

                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.tax-amount'); ?>
                                                        </p>

                                                        <?php if($order->base_discount_amount > 0): ?>
                                                            <p class="text-gray-600 dark:text-gray-300"> 
                                                                <?php echo app('translator')->get('admin::app.sales.refunds.create.discount-amount'); ?>
                                                            </p>
                                                        <?php endif; ?>

                                                        <p class="text-gray-600 dark:text-gray-300 font-semibold">
                                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.grand-total'); ?>
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-y-[6px]">
                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo e(core()->formatBasePrice($item->base_price)); ?>

                                                        </p>

                                                        <p class="text-gray-600 dark:text-gray-300">
                                                            <?php echo e(core()->formatBasePrice($item->base_total)); ?> 
                                                        </p>

                                                        <p class="text-gray-600 dark:text-gray-300"> 
                                                            <?php echo e(core()->formatBasePrice($item->base_tax_amount)); ?> 
                                                        </p>

                                                        <?php if($order->base_discount_amount > 0): ?>
                                                            <p class="text-gray-600 dark:text-gray-300"> 
                                                                <?php echo e(core()->formatBasePrice($item->base_discount_amount)); ?>

                                                            </p>
                                                        <?php endif; ?> 

                                                        <p class="text-gray-600 dark:text-gray-300 font-semibold"> 
                                                            <?php echo e(core()->formatBasePrice($item->base_total + $item->base_tax_amount - $item->base_discount_amount)); ?> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div v-if="refund.summary" class="grid grid-cols-3 gap-x-[20px] mt-[10px]">
                                    <!-- Refund Shipping -->
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.refund-shipping'); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'refund[shipping]','id' => 'refund[shipping]','rules' => 'required|min_value:0|max_value:' . $order->base_shipping_invoiced - $order->base_shipping_refunded,'vModel' => 'refund.summary.shipping.price','label' => trans('admin::app.sales.refunds.create.refund-shipping')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'refund[shipping]','id' => 'refund[shipping]','rules' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('required|min_value:0|max_value:' . $order->base_shipping_invoiced - $order->base_shipping_refunded),'v-model' => 'refund.summary.shipping.price','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.refunds.create.refund-shipping'))]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'refund[shipping]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'refund[shipping]']); ?>
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

                                    <!-- Adjustment Refund -->
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.adjustment-refund'); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'refund[adjustment_refund]','id' => 'refund[adjustment_refund]','value' => '0','rules' => 'required|min_value:0','label' => trans('admin::app.sales.refunds.create.adjustment-refund')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'refund[adjustment_refund]','id' => 'refund[adjustment_refund]','value' => '0','rules' => 'required|min_value:0','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.refunds.create.adjustment-refund'))]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'refund[adjustment_refund]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'refund[adjustment_refund]']); ?>
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

                                    <!-- Adjustment Fee -->
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.adjustment-fee'); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'refund[adjustment_fee]','id' => 'refund[adjustment_fee]','value' => '0','rules' => 'required|min_value:0','label' => trans('admin::app.sales.refunds.create.adjustment-fee')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'refund[adjustment_fee]','id' => 'refund[adjustment_fee]','value' => '0','rules' => 'required|min_value:0','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.refunds.create.adjustment-fee'))]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'refund[adjustment_fee]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'refund[adjustment_fee]']); ?>
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

                                <!-- Order Summary -->
                                <div class="flex w-full gap-[20px] justify-end">
                                    <div class="flex flex-col gap-y-[6px]">
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.subtotal'); ?>
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300"> 
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.discount-amount'); ?>
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.tax-amount'); ?>
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300 font-semibold">
                                            <?php echo app('translator')->get('admin::app.sales.refunds.create.grand-total'); ?>
                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-y-[6px]">
                                        <p class="text-gray-600 dark:text-gray-300"> 
                                            {{ refund.summary.subtotal.formatted_price }} 
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300"> 
                                            {{ refund.summary.discount.formatted_price }} 
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300"> 
                                            {{ refund.summary.tax.formatted_price }} 
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300"> 
                                            {{ refund.summary.grand_total.formatted_price }} 
                                        </p>
                                    </div>
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
        app.component('v-create-refund', {
            template: '#v-create-refund-template',

            data() {
                return {
                    refund: {
                        items: {},

                        summary: null
                    }
                };
            },

            mounted() {
                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    this.refund.items[<?php echo e($item->id); ?>] = <?php echo e($item->qty_to_refund); ?>;
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                this.updateQty();
            },

            methods: {
                updateQty() {
                    this.$axios.post("<?php echo e(route('admin.sales.refunds.update_qty', $order->id)); ?>", this.refund.items)
                        .then((response) => {

                            if (! response.data) {
                                this.$emitter.emit('add-flash', { type: 'warning', message: "<?php echo app('translator')->get('admin::app.sales.refunds.invalid-qty'); ?>" });
                            } else {
                                this.refund.summary = response.data;
                            }
                        })
                        .catch((error) => {})
                }
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/refunds/create.blade.php ENDPATH**/ ?>