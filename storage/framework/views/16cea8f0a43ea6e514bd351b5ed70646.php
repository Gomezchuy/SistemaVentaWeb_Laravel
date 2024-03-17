<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('admin::app.sales.invoices.view.title', ['invoice_id' => $invoice->increment_id ?? $invoice->id]); ?>
     <?php $__env->endSlot(); ?>

    <?php
        $order = $invoice->order;
    ?>

    
    <div class="grid">
        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <?php echo view_render_event('sales.invoice.title.before', ['order' => $order]); ?>


            <p class="text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                <?php echo app('translator')->get('admin::app.sales.invoices.view.title', ['invoice_id' => $invoice->increment_id ?? $invoice->id]); ?>

                <span class="label-active text-[14px] mx-[5px]">
                    <?php echo e($invoice->status_label); ?>

                </span>
            </p>

            <?php echo view_render_event('sales.invoice.title.after', ['order' => $order]); ?>


            <div class="flex gap-x-[10px] items-center">
                
                <a
                    href="<?php echo e(route('admin.sales.invoices.index')); ?>"
                    class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
                >
                    <?php echo app('translator')->get('admin::app.account.edit.back-btn'); ?>
                </a>
            </div>
        </div>
    </div>

    
    <div class="flex  gap-[16px] justify-between items-center mt-[28px] max-md:flex-wrap">
        <div class="flex gap-x-[4px] gap-y-[8px] items-center flex-wrap">
            <?php echo view_render_event('sales.invoice.page_action.before', ['order' => $order]); ?>


            <a
                href="<?php echo e(route('admin.sales.invoices.print', $invoice->id)); ?>"
                class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
            >
                <span class="icon-printer text-[24px] "></span> 

                <?php echo app('translator')->get('admin::app.sales.invoices.view.print'); ?>
            </a>

            
            <div>
                <button
                    type="button"
                    class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
                    @click="$refs.groupCreateModal.open()"
                >
                    <span class="icon-mail text-[24px] "></span>

                    <?php echo app('translator')->get('admin::app.sales.invoices.view.send-duplicate-invoice'); ?>
                </button>

                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => route('admin.sales.invoices.send_duplicate', $invoice->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.sales.invoices.send_duplicate', $invoice->id))]); ?>
                    <!-- Create Group Modal -->
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.modal.index','data' => ['ref' => 'groupCreateModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'groupCreateModal']); ?>
                         <?php $__env->slot('header', null, []); ?> 
                            <!-- Modal Header -->
                            <p class="text-[18px] text-gray-800 dark:text-white font-bold">
                                <?php echo app('translator')->get('admin::app.sales.invoices.view.send-duplicate-invoice'); ?>
                            </p>
                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('content', null, []); ?> 
                            <!-- Modal Content -->
                            <div class="px-[16px] py-[10px] border-b-[1px] dark:border-gray-800">
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
                                        <?php echo app('translator')->get('admin::app.sales.invoices.view.email'); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'email','name' => 'email','id' => 'email','rules' => 'required|email','value' => $invoice->order->customer_email,'label' => trans('admin::app.sales.invoices.view.email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','name' => 'email','id' => 'email','rules' => 'required|email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($invoice->order->customer_email),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.invoices.view.email'))]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'email']); ?>
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
                         <?php $__env->endSlot(); ?>
        
                         <?php $__env->slot('footer', null, []); ?> 
                            <!-- Modal Submission -->
                            <div class="flex gap-x-[10px] items-center">
                                <button 
                                    type="submit"
                                    class="primary-button"
                                >
                                    <?php echo app('translator')->get('admin::app.sales.invoices.view.send'); ?>
                                </button>
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

            <?php echo view_render_event('sales.invoice.page_action.after', ['order' => $order]); ?>


        </div>
    </div>

    
    <div class="flex gap-[10px] mt-[14px] max-xl:flex-wrap">
        
        <div class="flex flex-col gap-[8px] flex-1 max-xl:flex-auto">
            
            <div class="bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                <p class="text-[16px] text-gray-800 dark:text-white font-semibold mb-[16px] p-[16px]">
                    <?php echo app('translator')->get('admin::app.sales.invoices.view.invoice-items'); ?> (<?php echo e(count($invoice->items)); ?>)
                </p>

                <div class="grid">
                    
                    <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex gap-[10px] justify-between px-[16px] py-[24px] border-b-[1px] border-slate-300 dark:border-gray-800">
                            <div class="flex gap-[10px]">
                                
                                <?php if($item->product?->base_image_url): ?>
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
                                    
                                    <p class="text-[16x] text-gray-800 dark:text-white font-semibold">
                                        <?php echo e($item->name); ?>

                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.sales.invoices.view.amount-per-unit', [
                                            'amount' => core()->formatBasePrice($item->base_price),
                                            'qty'    => $item->qty,
                                            ]); ?>
                                    </p>

                                    <div class="flex flex-col gap-[6px] place-items-start">
                                        <?php if(isset($item->additional['attributes'])): ?>
                                             
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($attribute['attribute_name']); ?> : <?php echo e($attribute['option_label']); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        <?php endif; ?>

                                        
                                        <p class="text-gray-600 dark:text-gray-300">
                                             <?php echo app('translator')->get('admin::app.sales.invoices.view.sku', ['sku' => $item->getTypeInstance()->getOrderedItem($item)->sku]); ?>
                                        </p>

                                        
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.invoices.view.qty', ['qty' => $item->qty]); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid gap-[4px] place-content-start">
                                
                                <p class="flex items-center gap-x-[4px] justify-end text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($item->base_total + $item->base_tax_amount - $item->base_discount_amount)); ?>

                                </p>

                                
                                <div class="flex flex-col gap-[6px] items-end place-items-start">
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.sales.invoices.view.price', ['price' => core()->formatBasePrice($item->base_price)]); ?>
                                    </p>

                                    
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.sales.invoices.view.tax', ['tax' => core()->formatBasePrice($item->base_tax_amount)]); ?>
                                    </p>

                                    
                                    <?php if($invoice->base_discount_amount > 0): ?>
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.invoices.view.discount', ['discount' => core()->formatBasePrice($item->base_discount_amount)]); ?>
                                        </p>
                                    <?php endif; ?>

                                    
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.sales.invoices.view.sub-total', ['sub_total' => core()->formatBasePrice($item->base_total)]); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="flex w-full gap-[10px] justify-end mt-[16px] p-[16px]">
                    <div class="flex flex-col gap-y-[6px]">
                        <p class="text-gray-600 dark:text-gray-300 font-semibold">
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.sub-total-summary'); ?>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.shipping-and-handling'); ?>                    
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.summary-tax'); ?>    
                        </p>

                        <?php if($invoice->base_discount_amount > 0): ?>
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.invoices.view.summary-discount'); ?>    
                            </p>
                        <?php endif; ?>

                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.grand-total'); ?>   
                        </p>
                    </div>

                    <div class="flex flex-col gap-y-[6px]">
                        
                        <p class="text-gray-600 dark:text-gray-300 font-semibold">
                            <?php echo e(core()->formatBasePrice($invoice->base_sub_total)); ?>

                        </p>

                        
                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo e(core()->formatBasePrice($invoice->base_shipping_amount)); ?>

                        </p>

                        
                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo e(core()->formatBasePrice($invoice->base_tax_amount)); ?>

                        </p>

                        
                        <?php if($invoice->base_discount_amount > 0): ?>
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e(core()->formatBasePrice($invoice->base_discount_amount)); ?>

                            </p>
                        <?php endif; ?>
                        
                        
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo e(core()->formatBasePrice($invoice->base_grand_total)); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="flex flex-col gap-[8px] w-[360px] max-w-full max-sm:w-full">
            
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.accordion.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <p class="text-gray-600 dark:text-gray-300 text-[16px] p-[10px] font-semibold">
                        <?php echo app('translator')->get('admin::app.sales.invoices.view.customer'); ?>
                    </p>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <div class="flex flex-col <?php echo e($order->billing_address ? 'pb-[16px]' : ''); ?>">
                        <p class="text-gray-800 font-semibold dark:text-white">
                            <?php echo e($invoice->order->customer_full_name); ?>

                        </p>

                        <?php echo view_render_event('sales.invoice.customer_name.after', ['order' => $order]); ?>


                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.sales.invoices.view.customer-email', ['email' => $invoice->order->customer_email]); ?>
                        </p>

                        <?php echo view_render_event('sales.invoice.customer_email.after', ['order' => $order]); ?>

                    </div>

                    <?php if($order->billing_address || $order->shipping_address): ?>
                        
                        <?php if($order->billing_address): ?>
                            <div class="<?php echo e($order->shipping_address ? 'pb-[16px]' : ''); ?>">
                                <span class="block w-full border-b-[1px] dark:border-gray-800  "></span>

                                <div class="flex items-center justify-between">
                                    <p class="text-gray-600 dark:text-gray-300 text-[16px] py-[16px] font-semibold">
                                        <?php echo app('translator')->get('Billing Address'); ?>
                                    </p>
                                </div>

                                <?php echo $__env->make('admin::sales.address', ['address' => $order->billing_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo view_render_event('sales.invoice.billing_address.after', ['order' => $order]); ?>

                            </div>
                        <?php endif; ?>

                        
                        <?php if($order->shipping_address): ?>
                            <span class="block w-full border-b-[1px] dark:border-gray-800"></span>

                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 dark:text-gray-300 text-[16px] py-[16px] font-semibold">
                                    <?php echo app('translator')->get('Shipping Address'); ?>
                                </p>
                            </div>

                            <?php echo $__env->make('admin::sales.address', ['address' => $order->shipping_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo view_render_event('sales.invoice.shipping_address.after', ['order' => $order]); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
            
            
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.accordion.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <p class="text-gray-600 dark:text-gray-300 text-[16px] p-[10px] font-semibold">
                        <?php echo app('translator')->get('admin::app.sales.invoices.view.order-information'); ?> 
                    </p>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <div class="flex w-full gap-[20px] justify-start">
                        <div class="flex flex-col gap-y-[6px]">
                            <?php $__currentLoopData = ['order-id', 'order-date', 'order-status', 'invoice-status', 'channel']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.invoices.view.' . $item); ?> 
                                </p>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="flex  flex-col gap-y-[6px]">
                            
                            <p class="text-blue-600 font-semibold transition-all hover:underline">
                                <a href="<?php echo e(route('admin.sales.orders.view', $order->id)); ?>">#<?php echo e($order->increment_id); ?></a>
                            </p>

                            <?php echo view_render_event('sales.invoice.increment_id.after', ['order' => $order]); ?>


                            
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e(core()->formatDate($order->created_at)); ?>

                            </p>

                            <?php echo view_render_event('sales.invoice.created_at.after', ['order' => $order]); ?>


                            
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e($order->status_label); ?>

                            </p>

                            <?php echo view_render_event('sales.invoice.status_label.after', ['order' => $order]); ?>


                            
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e($invoice->status_label); ?>

                            </p>

                            
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e($order->channel_name); ?>

                            </p>

                            <?php echo view_render_event('sales.invoice.channel_name.after', ['order' => $order]); ?>

                        </div>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/invoices/view.blade.php ENDPATH**/ ?>