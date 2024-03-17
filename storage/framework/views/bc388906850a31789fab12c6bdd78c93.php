<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.account.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.account'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('shop::app.customers.account.orders.view.page-title', ['order_id' => $order->increment_id]); ?>
     <?php $__env->endSlot(); ?>
    
    
    <?php $__env->startSection('breadcrumbs'); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'orders.view','entity' => $order]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'orders.view','entity' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <div class="flex justify-between items-center">
        <div class="">
            <h2 class="text-[26px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.orders.view.page-title', ['order_id' => $order->increment_id]); ?>
            </h2>
        </div>

        <?php if($order->canCancel()): ?>
            <form
                method="POST"
                ref="cancelOrderForm"
                action="<?php echo e(route('shop.customers.account.orders.cancel', $order->id)); ?>"
            >
                <?php echo csrf_field(); ?>
            </form>

            <a
                class="secondary-button flex items-center gap-x-[10px] py-[12px] px-[20px] border-[#E9E9E9] font-normal"
                href="javascript:void(0);"
                @click="$emitter.emit('open-confirm-modal', {
                    message: '<?php echo app('translator')->get('shop::app.customers.account.orders.view.cancel-confirm-msg'); ?>',

                    agree: () => {
                        this.$refs['cancelOrderForm'].submit()
                    }
                })"
            >
                <?php echo app('translator')->get('shop::app.customers.account.orders.view.cancel-btn-title'); ?>
            </a>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.orders.view.before', ['order' => $order]); ?>


    
    <div>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.index','data' => ['class' => 'mt-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-5']); ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['class' => '!px-0','title' => trans('shop::app.customers.account.orders.view.information.info'),'isSelected' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!px-0','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.customers.account.orders.view.information.info')),'is-selected' => true]); ?>
                <div class="text-[15px] font-medium">
                    <label>
                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.placed-on'); ?>
                    </label>

                    <span>
                        <?php echo e(core()->formatDate($order->created_at, 'd M Y')); ?>

                    </span>
                </div>

                <div class="relative overflow-x-auto mt-[30px] border rounded-[12px]">
                    <table class="w-full text-sm text-left ">
                        <thead class="bg-[#F5F5F5] border-b-[1px] border-[#E9E9E9] text-[14px] text-black">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.sku'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.product-name'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.price'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.item-status'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.subtotal'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.tax-percent'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.tax-amount'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.grand-total'); ?>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-white border-b">
                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.sku'); ?>"
                                    >
                                        <?php echo e($item->getTypeInstance()->getOrderedItem($item)->sku); ?>

                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.product-name'); ?>"
                                    >
                                        <?php echo e($item->name); ?>


                                        <?php if(isset($item->additional['attributes'])): ?>
                                            <div>
                                                <?php $__currentLoopData = $item->additional['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <b><?php echo e($attribute['attribute_name']); ?> : </b><?php echo e($attribute['option_label']); ?><br>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.price'); ?>"
                                    >
                                        <?php echo e(core()->formatPrice($item->price, $order->order_currency_code)); ?>

                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value= "<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.item-status'); ?>"
                                    >
                                        <span >
                                           <?php echo e(__('shop::app.customers.account.orders.view.information.item-ordered', ['qty_ordered' => $item->qty_ordered])); ?>

                                        </span>

                                        <span>
                                            <?php echo e($item->qty_invoiced ? __('shop::app.customers.account.orders.view.information.item-invoice', ['qty_invoiced' => $item->qty_invoiced]) : ''); ?>

                                        </span>

                                        <span>
                                            <?php echo e($item->qty_shipped ? __('shop::app.customers.account.orders.view.information.item-shipped', ['qty_shipped' => $item->qty_shipped]) : ''); ?>

                                        </span>

                                        <span>
                                            <?php echo e($item->qty_refunded ? __('shop::app.customers.account.orders.view.information.item-refunded', ['qty_refunded' => $item->qty_refunded]) : ''); ?>

                                        </span>

                                        <span>
                                            <?php echo e($item->qty_canceled ? __('shop::app.customers.account.orders.view.information.item-canceled', ['qty_canceled' => $item->qty_canceled]) : ''); ?>

                                        </span>
                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.subtotal'); ?>"
                                    >
                                        <?php echo e(core()->formatPrice($item->total, $order->order_currency_code)); ?>

                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.tax-percent'); ?>"
                                    >
                                        <?php echo e(number_format($item->tax_percent, 2)); ?>%
                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.tax-amount'); ?>"
                                    >
                                        <?php echo e(core()->formatPrice($item->tax_amount, $order->order_currency_code)); ?>

                                    </td>

                                    <td
                                        class="px-6 py-[16px] text-black font-medium"
                                        data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.information.grand-total'); ?>"
                                    >
                                        <?php echo e(core()->formatPrice($item->total + $item->tax_amount - $item->discount_amount, $order->order_currency_code)); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <div class="flex gap-[40px] items-start mt-[30px] max-lg:gap-[20px] max-md:grid">
                    <div class="flex-auto max-md:mt-[30px]">
                        <div class="flex justify-end">
                            <div class="grid gap-[8px] max-w-max">
                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.subtotal'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php echo e(core()->formatPrice($order->sub_total, $order->order_currency_code)); ?>

                                        </p>
                                    </div>
                                </div>

                                <?php if($order->haveStockableItems()): ?>
                                    <div class="flex w-full gap-x-[20px] justify-between">
                                        <p class="text-[14px]">
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.shipping-handling'); ?>
                                        </p>

                                        <div class="flex gap-x-[20px]">
                                            <p class="text-[14px]">-</p>

                                            <p class="text-[14px]">
                                                <?php echo e(core()->formatPrice($order->shipping_amount, $order->order_currency_code)); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($order->base_discount_amount > 0): ?>
                                    <div class="flex gap-x-[20px] justify-between w-full">
                                        <p class="text-[14px]">
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.discount'); ?>

                                            <?php if($order->coupon_code): ?>
                                                (<?php echo e($order->coupon_code); ?>)
                                            <?php endif; ?>
                                        </p>

                                        <div class="flex gap-x-[20px]">
                                            <p class="text-[14px]">-</p>

                                            <p class="text-[14px]">
                                                <?php echo e(core()->formatPrice($order->discount_amount, $order->order_currency_code)); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.tax'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php echo e(core()->formatPrice($order->tax_amount, $order->order_currency_code)); ?>

                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.grand-total'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php echo e(core()->formatPrice($order->grand_total, $order->order_currency_code)); ?>

                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.total-paid'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php echo e(core()->formatPrice($order->grand_total_invoiced, $order->order_currency_code)); ?>

                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.total-refunded'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php echo e(core()->formatPrice($order->grand_total_refunded, $order->order_currency_code)); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-x-[20px] justify-between w-full">
                                    <p class="text-[14px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.information.total-due'); ?>
                                    </p>

                                    <div class="flex gap-x-[20px]">
                                        <p class="text-[14px]">-</p>

                                        <p class="text-[14px]">
                                            <?php if($order->status !== 'canceled'): ?>
                                                <?php echo e(core()->formatPrice($order->total_due, $order->order_currency_code)); ?>

                                            <?php else: ?>
                                                <?php echo e(core()->formatPrice(0.00, $order->order_currency_code)); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php if($order->invoices->count()): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['title' => trans('shop::app.customers.account.orders.view.invoices.invoices')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.customers.account.orders.view.invoices.invoices'))]); ?>

                    <?php $__currentLoopData = $order->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex justify-between items-center">
                            <div class="">
                                <p class="text-[15px] font-medium">
                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.individual-invoice', ['invoice_id' => $invoice->increment_id ?? $invoice->id]); ?>
                                </p>
                            </div>
                            <div class="secondary-button flex gap-x-[10px] items-center py-[12px] px-[20px] border-[#E9E9E9] font-normal">
                                <a href="<?php echo e(route('shop.customers.account.orders.print-invoice', $invoice->id)); ?>">
                                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.print'); ?>
                                </a>
                            </div>
                        </div>

                        <div class="relative overflow-x-auto mt-[30px] border rounded-[12px]">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-[#F5F5F5] border-b-[1px] border-[#E9E9E9] text-[14px] text-black">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.sku'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.product-name'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.price'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.qty'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.subtotal'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.tax-amount'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.grand-total'); ?>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b">
                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.sku'); ?>"
                                            >
                                                <?php echo e($item->getTypeInstance()->getOrderedItem($item)->sku); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.product-name'); ?>"
                                            >
                                                <?php echo e($item->name); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.price'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->price, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.qty'); ?>"
                                            >
                                                <?php echo e($item->qty); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.subtotal'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->total, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.tax-amount'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->tax_amount, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.grand-total'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->total + $item->tax_amount, $order->order_currency_code)); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="flex gap-[40px] items-start mt-[30px] max-lg:gap-[20px] max-md:grid">
                            <div class="flex-auto max-md:mt-[30px]">
                                <div class="flex justify-end">
                                    <div class="grid gap-[8px] max-w-max">
                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.subtotal'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($invoice->sub_total, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.shipping-handling'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($invoice->shipping_amount, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <?php if($invoice->base_discount_amount > 0): ?>
                                            <div class="flex gap-x-[20px] justify-between w-full">
                                                <p class="text-[14px]">
                                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.discount'); ?>
                                                </p>

                                                <div class="flex gap-x-[20px]">
                                                    <p class="text-[14px]">-</p>

                                                    <p class="text-[14px]">
                                                        <?php echo e(core()->formatPrice($invoice->discount_amount, $order->order_currency_code)); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.tax'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($invoice->tax_amount, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.invoices.grand-total'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($invoice->grand_total, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($order->shipments->count()): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['title' => ''.e(__('shop::app.customers.account.orders.view.shipments.shipments')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('shop::app.customers.account.orders.view.shipments.shipments')).'']); ?>

                    <?php $__currentLoopData = $order->shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <label class="text-[15px] font-medium">
                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.tracking-number'); ?>
                            </label>

                            <span>
                                <?php echo e($shipment->track_number); ?>

                            </span>
                        </div>

                        <div class="text-[15px] font-medium">
                            <span>
                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.individual-shipment', ['shipment_id' => $shipment->id]); ?>
                            </span>
                        </div>

                        <div class="relative overflow-x-auto border rounded-[12px] mt-[30px]">
                            <table class="w-full text-sm text-left">
                                <thead class="text-[14px] text-black bg-[#F5F5F5] border-b-[1px] border-[#E9E9E9]  ">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.sku'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.product-name'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.qty'); ?>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $shipment->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b">
                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.sku'); ?>"
                                            >
                                                <?php echo e($item->sku); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.product-name'); ?>"
                                            >
                                                <?php echo e($item->name); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.shipments.qty'); ?>"
                                            >
                                                <?php echo e($item->qty); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($order->refunds->count()): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['title' => '@lang(\'shop::app.customers.account.orders.view.refunds.refunds\') }}']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '@lang(\'shop::app.customers.account.orders.view.refunds.refunds\') }}']); ?>
                    <?php $__currentLoopData = $order->refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-[15px] font-medium">
                            <span>
                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.individual-refund', ['refund_id' => $refund->id]); ?>
                            </span>
                        </div>

                        <div class="relative overflow-x-auto mt-[30px] border rounded-[12px]">
                            <table class="w-full text-sm text-left">
                                <thead class="text-[14px] text-black bg-[#F5F5F5] border-b-[1px] border-[#E9E9E9]  ">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.sku'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.product-name'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.price'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.qty'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.subtotal'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.tax-amount'); ?>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-[16px] font-medium"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.grand-total'); ?>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $refund->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b">
                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.sku'); ?>"
                                            >
                                                <?php echo e($item->child ? $item->child->sku : $item->sku); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.product-name'); ?>"
                                            >
                                                <?php echo e($item->name); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.price'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->price, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.qty'); ?>"
                                            >
                                                <?php echo e($item->qty); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.subtotal'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->total, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.tax-amount'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->tax_amount, $order->order_currency_code)); ?>

                                            </td>

                                            <td
                                                class="px-6 py-[16px] text-black font-medium"
                                                data-value="<?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.grand-total'); ?>"
                                            >
                                                <?php echo e(core()->formatPrice($item->total + $item->tax_amount, $order->order_currency_code)); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php if(! $refund->items->count()): ?>
                                        <tr>
                                            <td><?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.no-result-found'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="flex gap-[40px] items-start mt-[30px] max-lg:gap-[20px] max-md:grid">
                            <div class="flex-auto max-md:mt-[30px]">
                                <div class="flex justify-end">
                                    <div class="grid gap-[8px] max-w-max">
                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.subtotal'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($refund->sub_total, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.shipping-handling'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($refund->shipping_amount, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <?php if($refund->discount_amount > 0): ?>
                                            <div class="flex gap-x-[20px] justify-between w-full">
                                                <p class="text-[14px]">
                                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.discount'); ?>
                                                </p>

                                                <div class="flex gap-x-[20px]">
                                                    <p class="text-[14px]">-</p>

                                                    <p class="text-[14px]">
                                                        <?php echo e(core()->formatPrice($order->discount_amount, $order->order_currency_code)); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if($refund->tax_amount > 0): ?>
                                            <div class="flex gap-x-[20px] justify-between w-full">
                                                <p class="text-[14px]">
                                                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.tax'); ?>
                                                </p>

                                                <div class="flex gap-x-[20px]">
                                                    <p class="text-[14px]">-</p>

                                                    <p class="text-[14px]">
                                                        <?php echo e(core()->formatPrice($refund->tax_amount, $order->order_currency_code)); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.adjustment-refund'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($refund->adjustment_refund, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.adjustment-fee'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($refund->adjustment_fee, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-[20px] justify-between w-full">
                                            <p class="text-[14px]">
                                                <?php echo app('translator')->get('shop::app.customers.account.orders.view.refunds.grand-total'); ?>
                                            </p>

                                            <div class="flex gap-x-[20px]">
                                                <p class="text-[14px]">-</p>

                                                <p class="text-[14px]">
                                                    <?php echo e(core()->formatPrice($refund->grand_total, $order->order_currency_code)); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <div class="flex flex-wrap gap-x-[64px] gap-y-[30px] justify-between mt-[42px] pt-[26px] border-t-[1px] border-[#E9E9E9]">
            
            <?php if($order->billing_address): ?>
                <div class="grid gap-[15px] max-w-[200px] max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-[16px] text-[#6E6E6E]">
                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.billing-address'); ?>
                    </p>

                    <div class="grid gap-[10px]">
                        <p class="text-[14px]">
                            <?php echo $__env->make('admin::sales.address', ['address' => $order->billing_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </p>

                        <?php echo view_render_event('bagisto.shop.customers.account.orders.view.billing_address.after', ['order' => $order]); ?>

                    </div>
                </div>
            <?php endif; ?>

            
            <?php if($order->shipping_address): ?>
                <div class="grid gap-[15px] max-w-[200px] max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-[16px] text-[#6E6E6E]">
                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipping-address'); ?>
                    </p>

                    <div class="grid gap-[10px]">
                        <p class="text-[14px]">
                            <?php echo $__env->make('admin::sales.address', ['address' => $order->shipping_address], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo view_render_event('bagisto.shop.customers.account.orders.view.shipping_address.after', ['order' => $order]); ?>

                        </p>
                    </div>
                </div>

                
                <div class="grid gap-[15px] max-w-[200px] place-content-baseline max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-[16px] text-[#6E6E6E]">
                        <?php echo app('translator')->get('shop::app.customers.account.orders.view.shipping-method'); ?>
                    </p>

                    <p class="text-[14px]">
                        <?php echo e($order->shipping_title); ?>

                    </p>
                </div>

                <?php echo view_render_event('bagisto.shop.customers.account.orders.view.shipping_method.after', ['order' => $order]); ?>


            <?php endif; ?>

            
            <div class="grid gap-[15px] place-content-baseline max-w-[200px] max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                <p class="text-[16px] text-[#6E6E6E]">
                    <?php echo app('translator')->get('shop::app.customers.account.orders.view.payment-method'); ?>
                </p>

                <p class="text-[14px]">
                    <?php echo e(core()->getConfigData('sales.payment_methods.' . $order->payment->method . '.title')); ?>

                </p>

                <?php if(! empty($additionalDetails)): ?>
                    <div class="instructions">
                        <label><?php echo e($additionalDetails['title']); ?></label>
                    </div>
                <?php endif; ?>

                <?php echo view_render_event('bagisto.shop.customers.account.orders.view.payment_method.after', ['order' => $order]); ?>

            </div>
        </div>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.orders.view.after', ['order' => $order]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/customers/account/orders/view.blade.php ENDPATH**/ ?>