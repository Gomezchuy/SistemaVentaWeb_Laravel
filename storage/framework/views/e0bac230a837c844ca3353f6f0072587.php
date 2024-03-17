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
        <?php echo app('translator')->get('admin::app.sales.orders.view.title', ['order_id' => $order->increment_id]); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="grid">
        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <?php echo view_render_event('sales.order.title.before', ['order' => $order]); ?>

            <div class="flex gap-[10px] items-center">
                <p class="text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                    <?php echo app('translator')->get('admin::app.sales.orders.view.title', ['order_id' => $order->increment_id]); ?>
                </p>

                <div>
                    <?php switch($order->status):
                        case ('processing'): ?>
                            <span class="label-processing text-[14px] mx-[5px]">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.processing'); ?>    
                            </span>
                            <?php break; ?>

                        <?php case ('completed'): ?>
                            <span class="label-closed text-[14px] mx-[5px]">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.completed'); ?>    
                            </span>
                            <?php break; ?>

                        <?php case ('pending'): ?>
                            <span class="label-pending text-[14px] mx-[5px]">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.pending'); ?>    
                            </span>
                            <?php break; ?>

                        <?php case ('closed'): ?>
                            <span class="label-closed text-[14px] mx-[5px]">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.closed'); ?>    
                            </span>
                            <?php break; ?>

                        <?php case ('canceled'): ?>
                            <span class="label-cancelled text-[14px] mx-[5px]">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.canceled'); ?>    
                            </span>
                            <?php break; ?>

                    <?php endswitch; ?>
                </div>
            </div>

            <?php echo view_render_event('sales.order.title.after', ['order' => $order]); ?>


            
            <a
                href="<?php echo e(route('admin.sales.orders.index')); ?>"
                class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
            >
                <?php echo app('translator')->get('admin::app.account.edit.back-btn'); ?>
            </a>
        </div>
    </div>

    <div class="justify-between gap-x-[4px] gap-y-[8px] items-center flex-wrap mt-[20px]">
        <div class="flex gap-[5px]">
            <?php echo view_render_event('sales.order.page_action.before', ['order' => $order]); ?>


            <?php if(
                $order->canCancel()
                && bouncer()->hasPermission('sales.orders.cancel')
            ): ?>
               <form
                    method="POST"
                    ref="cancelOrderForm"
                    action="<?php echo e(route('admin.sales.orders.cancel', $order->id)); ?>"
                >
                    <?php echo csrf_field(); ?>
                </form>

                <div 
                    class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
                    @click="$emitter.emit('open-confirm-modal', {
                        message: '<?php echo app('translator')->get('shop::app.customers.account.orders.view.cancel-confirm-msg'); ?>',
                        agree: () => {
                            this.$refs['cancelOrderForm'].submit()
                        }
                    })"
                >
                    <span class="icon-cancel text-[24px]"></span>

                    <a
                        href="javascript:void(0);"
                    >
                        <?php echo app('translator')->get('admin::app.sales.orders.view.cancel'); ?>    
                    </a>
                </div>
            <?php endif; ?>

            <?php if(
                $order->canInvoice()
                && $order->payment->method !== 'paypal_standard'
            ): ?>
              
                <?php echo $__env->make('admin::sales.invoices.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($order->canShip()): ?>
                <?php echo $__env->make('admin::sales.shipments.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($order->canRefund()): ?>
                <?php echo $__env->make('admin::sales.refunds.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php echo view_render_event('sales.order.page_action.after', ['order' => $order]); ?>

        </div>

        
        <div class="flex gap-[10px] mt-[14px] max-xl:flex-wrap">
            
            <div class="flex flex-col gap-[8px] flex-1 max-xl:flex-auto">
                <div class="bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                    <div class="flex justify-between p-[16px]">
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold mb-[16px]">
                            <?php echo app('translator')->get('Order Items'); ?> (<?php echo e(count($order->items)); ?>)
                        </p>

                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.sales.orders.view.grand-total', ['grand_total' => core()->formatBasePrice($order->base_grand_total)]); ?>
                        </p>
                    </div>

                    
                    <div class="grid">
                        <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex gap-[10px] justify-between px-[16px] py-[24px] border-b-[1px] border-slate-300 dark:border-gray-800">
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
                                                <?php echo app('translator')->get('admin::app.sales.invoices.view.product-image'); ?> 
                                            </p>
                                        </div>
                                    <?php endif; ?>
                    
                                    <div class="grid gap-[6px] place-content-start">
                                        <p class="text-[16x] text-gray-800 dark:text-white font-semibold">
                                            <?php echo e($item->name); ?>

                                        </p>

                                        <div class="flex flex-col gap-[6px] place-items-start">
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo app('translator')->get('admin::app.sales.orders.view.amount-per-unit', [
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
                                                <?php echo app('translator')->get('admin::app.sales.orders.view.sku', ['sku' => $item->sku]); ?>
                                            </p>

                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo e($item->qty_ordered ? trans('admin::app.sales.orders.view.item-ordered', ['qty_ordered' => $item->qty_ordered]) : ''); ?>


                                                <?php echo e($item->qty_invoiced ? trans('admin::app.sales.orders.view.item-invoice', ['qty_invoiced' => $item->qty_invoiced]) : ''); ?>


                                                <?php echo e($item->qty_shipped ? trans('admin::app.sales.orders.view.item-shipped', ['qty_shipped' => $item->qty_shipped]) : ''); ?>


                                                <?php echo e($item->qty_refunded ? trans('admin::app.sales.orders.view.item-refunded', ['qty_refunded' => $item->qty_refunded]) : ''); ?>


                                                <?php echo e($item->qty_canceled ? trans('admin::app.sales.orders.view.item-canceled', ['qty_canceled' => $item->qty_canceled]) : ''); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-[4px] place-content-start">
                                    <div class="">
                                        <p class="flex items-center gap-x-[4px] justify-end text-[16px] text-gray-800 dark:text-white font-semibold">
                                            <?php echo e(core()->formatBasePrice($item->base_total + $item->base_tax_amount - $item->base_discount_amount)); ?>

                                        </p>
                                    </div>

                                    <div class="flex flex-col gap-[6px] items-end place-items-start">
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.orders.view.price', ['price' => core()->formatBasePrice($item->base_price)]); ?>
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo e($item->tax_percent); ?>%
                                            <?php echo app('translator')->get('admin::app.sales.orders.view.tax', ['tax' => core()->formatBasePrice($item->base_tax_amount)]); ?>
                                        </p>
                                        <?php if($order->base_discount_amount > 0): ?>
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo app('translator')->get('admin::app.sales.orders.view.discount', ['discount' => core()->formatBasePrice($item->base_discount_amount)]); ?>
                                            </p>
                                        <?php endif; ?>

                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.sales.orders.view.sub-total', ['sub_total' => core()->formatBasePrice($item->base_total)]); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="flex w-full gap-[10px] justify-end mt-[16px] p-[16px]">
                        <div class="flex flex-col gap-y-[6px]">
                            <p class="text-gray-600 dark:text-gray-300  font-semibold">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.summary-sub-total'); ?>
                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.summary-tax'); ?>
                            </p>

                            <?php if($haveStockableItems = $order->haveStockableItems()): ?>
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.shipping-and-handling'); ?></p>
                            <?php endif; ?>

                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.summary-grand-total'); ?>
                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.total-paid'); ?>
                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.total-refund'); ?>
                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.total-due'); ?>
                            </p>
                        </div>
                        <div class="flex  flex-col gap-y-[6px]">
                            <p class="text-gray-600 dark:text-gray-300  font-semibold">
                                <?php echo e(core()->formatBasePrice($order->base_sub_total)); ?>

                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e(core()->formatBasePrice($order->base_tax_amount)); ?>

                            </p>

                            <?php if($haveStockableItems): ?>
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e(core()->formatBasePrice($order->base_shipping_amount)); ?>

                                </p>
                            <?php endif; ?>

                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                <?php echo e(core()->formatBasePrice($order->base_grand_total)); ?>

                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e(core()->formatBasePrice($order->base_grand_total_invoiced)); ?>

                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo e(core()->formatBasePrice($order->base_grand_total_refunded)); ?>

                            </p>

                            <?php if($order->status !== 'canceled'): ?>
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e(core()->formatBasePrice($order->base_total_due)); ?>

                                </p>
                            <?php else: ?>
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e(core()->formatBasePrice(0.00)); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            
                
                <div class="bg-white dark:bg-gray-900 rounded box-shadow">
                    <p class="p-[16px] pb-0 text-[16px] text-gray-800 dark:text-white font-semibold">
                        <?php echo app('translator')->get('admin::app.sales.orders.view.comments'); ?>
                    </p>

                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => ''.e(route('admin.sales.orders.comment', $order->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.sales.orders.comment', $order->id)).'']); ?>
                        <div class="p-[16px]">
                            <div class="mb-[10px]">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'textarea','name' => 'comment','id' => 'comment','rules' => 'required','label' => trans('admin::app.sales.orders.view.comments'),'placeholder' => trans('admin::app.sales.orders.view.write-your-comment'),'rows' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'textarea','name' => 'comment','id' => 'comment','rules' => 'required','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.orders.view.comments')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.sales.orders.view.write-your-comment')),'rows' => '3']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'comment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'comment']); ?>
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

                            <div class="flex justify-between items-center">
                                <label 
                                    class="flex gap-[4px] w-max items-center p-[6px] cursor-pointer select-none"
                                    for="customer_notified"
                                >
                                    <input 
                                        type="checkbox" 
                                        name="customer_notified"
                                        id="customer_notified"
                                        value="1"
                                        class="hidden peer"
                                    >
                        
                                    <span class="icon-uncheckbox rounded-[6px] text-[24px] cursor-pointer peer-checked:icon-checked peer-checked:text-blue-600 "></span>
                        
                                    <p class="flex gap-x-[4px] items-center cursor-pointer text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 font-semibold">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.notify-customer'); ?>
                                    </p>
                                </label>
                                
                                <button
                                    type="submit"
                                    class="secondary-button"
                                >
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.submit-comment'); ?>
                                </button>
                            </div>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 

                    <span class="block w-full border-b-[1px] dark:border-gray-800"></span>

                    
                    <?php $__currentLoopData = $order->comments()->orderBy('id', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid gap-[6px] p-[16px]">
                            <p class="text-[16px] text-gray-800 dark:text-white leading-6">
                                <?php echo e($comment->comment); ?>

                            </p>

                            
                            <p class="flex gap-2 text-gray-600 dark:text-gray-300 items-center">  
                                <?php if($comment->customer_notified): ?>
                                    <span class="h-fit text-[24px] rounded-full icon-done text-blue-600 bg-blue-100"></span> 

                                    <?php echo app('translator')->get('admin::app.sales.orders.view.customer-notified', ['date' => core()->formatDate($comment->created_at, 'Y-m-d H:i:s a')]); ?>
                                <?php else: ?>
                                    <span class="h-fit text-[24px] rounded-full icon-cancel-1 text-red-600 bg-red-100"></span>

                                    <?php echo app('translator')->get('admin::app.sales.orders.view.customer-not-notified', ['date' => core()->formatDate($comment->created_at, 'Y-m-d H:i:s a')]); ?>
                                <?php endif; ?>
                            </p>
                        </div>

                        <span class="block w-full border-b-[1px] dark:border-gray-800"></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <?php echo view_render_event('sales.order.tabs.before', ['order' => $order]); ?>


            
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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.customer'); ?>
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <div class="<?php echo e($order->billing_address ? 'pb-[16px]' : ''); ?>">
                            <div class="flex flex-col gap-[5px]">
                                <p class="text-gray-800 font-semibold dark:text-white">
                                    <?php echo e($order->customer_full_name); ?>

                                </p>

                                <?php echo view_render_event('sales.order.customer_full_name.after', ['order' => $order]); ?>


                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($order->customer_email); ?>

                                </p>

                                <?php echo view_render_event('sales.order.customer_email.after', ['order' => $order]); ?>


                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.customer-group'); ?> : <?php echo e($order->is_guest ? core()->getGuestCustomerGroup()?->name : ($order->customer->group->name ?? '')); ?>

                                </p>

                                <?php echo view_render_event('sales.order.customer_group.after', ['order' => $order]); ?>

                            </div>
                        </div>
                        
                        
                        <?php if($order->billing_address): ?>
                            <span class="block w-full border-b-[1px] dark:border-gray-800"></span>

                            <div class="<?php echo e($order->shipping_address ? 'pb-[16px]' : ''); ?>">

                                <div class="flex items-center justify-between">
                                    <p class="text-gray-600 dark:text-gray-300  text-[16px] py-[16px] font-semibold">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.billing-address'); ?>
                                    </p>
                                </div>

                                <?php echo $__env->make('admin::sales.address', ['address' => $order->billing_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo view_render_event('sales.order.billing_address.after', ['order' => $order]); ?>

                            </div>
                        <?php endif; ?>

                        
                        <?php if($order->shipping_address): ?>
                            <span class="block w-full border-b-[1px] dark:border-gray-800"></span>

                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 dark:text-gray-300 text-[16px] py-[16px] font-semibold">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.shipping-address'); ?>
                                </p>
                            </div>

                            <?php echo $__env->make('admin::sales.address', ['address' => $order->shipping_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo view_render_event('sales.order.shipping_address.after', ['order' => $order]); ?>

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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.order-information'); ?>
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <div class="flex w-full gap-[20px] justify-start">
                            <div class="flex flex-col gap-y-[6px]">
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.order-date'); ?>
                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.order-status'); ?>
                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.channel'); ?>
                                </p>
                            </div>
                    
                            <div class="flex flex-col gap-y-[6px]">
                                <?php echo view_render_event('sales.order.created_at.before', ['order' => $order]); ?>


                                
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e(core()->formatDate($order->created_at)); ?>

                                </p>

                                <?php echo view_render_event('sales.order.created_at.after', ['order' => $order]); ?>

                            
                                
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($order->status_label); ?>

                                </p>
                            
                                <?php echo view_render_event('sales.order.status_label.after', ['order' => $order]); ?>


                                
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($order->channel_name); ?>

                                </p>

                                <?php echo view_render_event('sales.order.channel_name.after', ['order' => $order]); ?>

                            </div>
                        </div>
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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.payment-and-shipping'); ?>
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <div>
                            
                            <p class="text-gray-800 font-semibold dark:text-white">
                                <?php echo e(core()->getConfigData('sales.payment_methods.' . $order->payment->method . '.title')); ?>

                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.payment-method'); ?>
                            </p>

                            
                            <p class="pt-[16px] text-gray-800 dark:text-white font-semibold">
                                <?php echo e($order->order_currency_code); ?>

                            </p>

                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.currency'); ?>
                            </p>

                            <?php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($order->payment->method); ?>

                            
                            <?php if(! empty($additionalDetails)): ?>
                                <p class="pt-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e($additionalDetails['title']); ?>

                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($additionalDetails['value']); ?>

                                </p>
                            <?php endif; ?>

                            <?php echo view_render_event('sales.order.payment-method.after', ['order' => $order]); ?>

                        </div>

                        
                        <?php if($order->shipping_address): ?>
                            <span class="block w-full mt-[16px] border-b-[1px] dark:border-gray-800  "></span>
                            <div class="pt-[16px]">
                                <p class="text-gray-800 font-semibold dark:text-white">
                                    <?php echo e($order->shipping_title); ?>

                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.shipping-method'); ?>
                                </p>

                                <p class="pt-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($order->base_shipping_amount)); ?>

                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.sales.orders.view.shipping-price'); ?>
                                </p>
                            </div>

                            <?php echo view_render_event('sales.order.shipping-method.after', ['order' => $order]); ?>

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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.invoices'); ?> (<?php echo e(count($order->invoices)); ?>)
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <?php $__empty_1 = true; $__currentLoopData = $order->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="grid gap-y-[10px]">
                                <div>
                                    <p class="text-gray-800 font-semibold dark:text-white">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.invoice-id', ['invoice' => $invoice->increment_id ?? $invoice->id]); ?>
                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e(core()->formatDate($invoice->created_at, 'd M, Y H:i:s a')); ?>

                                    </p>
                                </div>

                                <div class="flex gap-[10px]">
                                    <a
                                        href="<?php echo e(route('admin.sales.invoices.view', $invoice->id)); ?>"
                                        class="text-[14px] text-blue-600 transition-all hover:underline"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.view'); ?>
                                    </a>

                                    <a
                                        href="<?php echo e(route('admin.sales.invoices.print', $invoice->id)); ?>"
                                        class="text-[14px] text-blue-600 transition-all hover:underline"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.download-pdf'); ?>
                                    </a>
                                </div>
                            </div>

                            <?php if($index < count($order->invoices) - 1): ?>
                                <span class="block w-full mb-[16px] mt-[16px] border-b-[1px] dark:border-gray-800  "></span>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.no-invoice-found'); ?>
                            </p>
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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.shipments'); ?> (<?php echo e(count($order->shipments)); ?>)
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <?php $__empty_1 = true; $__currentLoopData = $order->shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="grid gap-y-[10px]">
                                <div>
                                    
                                    <p class="text-gray-800 font-semibold dark:text-white">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.shipment', ['shipment' => $shipment->id]); ?>
                                    </p>

                                    
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e(core()->formatDate($shipment->created_at, 'd M, Y H:i:s a')); ?>

                                    </p>
                                </div>

                                <div class="flex gap-[10px]">
                                    <a
                                        href="<?php echo e(route('admin.sales.shipments.view', $shipment->id)); ?>"
                                        class="text-[14px] text-blue-600 transition-all hover:underline"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.view'); ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.no-shipment-found'); ?>
                            </p>
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
                            <?php echo app('translator')->get('admin::app.sales.orders.view.refund'); ?>
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <?php $__empty_1 = true; $__currentLoopData = $order->refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="grid gap-y-[10px]">
                                <div>
                                    <p class="text-gray-800 font-semibold dark:text-white">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.refund-id', ['refund' => $refund->id]); ?>
                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e(core()->formatDate($refund->created_at, 'd M, Y H:i:s a')); ?>

                                    </p>

                                    <p class="mt-[16px] text-gray-800 dark:text-white font-semibold">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.name'); ?>
                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e($refund->order->customer_full_name); ?>

                                    </p>

                                    <p class="mt-[16px] text-gray-800 dark:text-white font-semibold">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.status'); ?>
                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.refunded'); ?> 
                                        
                                        <span class="text-gray-800 font-semibold dark:text-white">
                                            <?php echo e(core()->formatBasePrice($refund->base_grand_total)); ?>

                                        </span>
                                    </p>
                                </div>

                                <div class="flex gap-[10px]">
                                    <a
                                        href="<?php echo e(route('admin.sales.refunds.view', $refund->id)); ?>"
                                        class="text-[14px] text-blue-600 transition-all hover:underline"
                                    >
                                        <?php echo app('translator')->get('admin::app.sales.orders.view.view'); ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                            <p class="text-gray-600 dark:text-gray-300">
                                <?php echo app('translator')->get('admin::app.sales.orders.view.no-refund-found'); ?>
                            </p>
                        <?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
            </div>

            <?php echo view_render_event('sales.order.tabs.after', ['order' => $order]); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/sales/orders/view.blade.php ENDPATH**/ ?>