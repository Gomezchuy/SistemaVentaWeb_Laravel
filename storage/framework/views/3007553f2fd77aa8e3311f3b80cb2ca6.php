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
        <?php echo app('translator')->get('admin::app.customers.customers.view.title'); ?>
     <?php $__env->endSlot(); ?>

    <div class="grid">
        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <div class="flex gap-[10px] items-center">
                <p class="text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                    <?php echo e($customer->first_name . " " . $customer->last_name); ?>

                </p>
                
                <div>
                    
                    <?php if($customer->status == 1): ?>
                        <span class="label-active text-[14px] mx-[5px]">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.active'); ?>
                        </span>
                    <?php else: ?>    
                        <span class="label-cancelled text-[14px] mx-[5px]">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.inactive'); ?>
                        </span>
                    <?php endif; ?>

                    
                    <?php if($customer->is_suspended == 1): ?>
                        <span class="label-cancelled text-[14px]">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.suspended'); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>    

            
            <a
                href="<?php echo e(route('admin.customers.customers.index')); ?>"
                class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white"
            >
                <?php echo app('translator')->get('admin::app.customers.customers.view.back-btn'); ?>
            </a>
        </div>
    </div>

    <?php echo view_render_event('bagisto.admin.customers.customers.view.filters.before'); ?>


    
    <div class="flex gap-x-[4px] gap-y-[8px] items-center flex-wrap mt-[28px]">
        
        <?php echo $__env->make('admin::customers.addresses.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php if(bouncer()->hasPermission('customers.customers.delete')): ?>
            <div 
                class="inline-flex gap-x-[8px] items-center justify-between w-full max-w-max px-[4px] py-[6px] text-gray-600 dark:text-gray-300 font-semibold text-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"
                @click="$emitter.emit('open-confirm-modal', {
                    message: '<?php echo app('translator')->get('admin::app.customers.customers.view.account-delete-confirmation'); ?>',

                    agree: () => {
                        this.$refs['delete-account'].submit()
                    }
                })"
            >
                <span class="icon-cancel text-[24px]"></span>

                <?php echo app('translator')->get('admin::app.customers.customers.view.delete-account'); ?>

                
                <form 
                    method="post"
                    action="<?php echo e(route('admin.customers.customers.delete', $customer->id)); ?>" 
                    ref="delete-account"
                >
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.admin.customers.customers.view.filters.after'); ?>


    
    <div class="flex gap-[10px] mt-[14px] max-xl:flex-wrap">
        
        <div class=" flex flex-col gap-[8px] flex-1 max-xl:flex-auto">

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.orders.before'); ?>


            
            <div class=" bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                <?php if($totalOrderCount = count($customer->orders)): ?>
                    <div class=" p-[16px] flex justify-between">
                        
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.orders', ['order_count' => $totalOrderCount]); ?>
                        </p>    

                        <?php
                            $revenue = core()->currency($customer->orders
                                ->whereNotIn('status', ['canceled', 'closed'])
                                ->sum('grand_total'));
                        ?>

                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.total-revenue', ['revenue' => $revenue]); ?>
                        </p>
                    </div>

                    
                    <div class="table-responsive grid w-full">
                        <?php $__currentLoopData = $customer->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex justify-between items-center px-[16px] py-[16px] transition-all hover:bg-gray-50 dark:hover:bg-gray-950">
                                <div class="row grid grid-cols-3 w-full">
                                    <div class="flex gap-[10px]">
                                        <div class="flex flex-col gap-[6px]">
                                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                                <?php echo app('translator')->get('admin::app.customers.customers.view.increment-id', ['increment_id' => $order->increment_id]); ?>
                                            </p>

                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo e($order->created_at); ?>

                                            </p>

                                            <?php switch($order->status):
                                                case ('processing'): ?>
                                                    <p class="label-active">
                                                        <?php echo app('translator')->get('admin::app.customers.customers.view.processing'); ?>
                                                    </p>
                                                    <?php break; ?>

                                                <?php case ('completed'): ?>
                                                    <p class="label-active">
                                                        <?php echo app('translator')->get('admin::app.customers.customers.view.completed'); ?>
                                                    </p>
                                                    <?php break; ?>

                                                <?php case ('pending'): ?>
                                                    <p class="label-pending">
                                                        <?php echo app('translator')->get('admin::app.customers.customers.view.pending'); ?>
                                                    </p>
                                                    <?php break; ?>

                                                <?php case ('canceled'): ?>
                                                    <p class="label-cancelled">
                                                        <?php echo app('translator')->get('admin::app.customers.customers.view.canceled'); ?>
                                                    </p>
                                                    <?php break; ?>

                                                <?php case ('closed'): ?>
                                                    <p class="label-closed">
                                                        <?php echo app('translator')->get('admin::app.customers.customers.view.closed'); ?>
                                                    </p>
                                                    <?php break; ?>

                                            <?php endswitch; ?>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-[6px]">
                                        
                                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                            <?php echo e(core()->currency($order->grand_total )); ?>

                                        </p>

                                           
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.pay-by', ['payment_method' => core()->getConfigData('sales.payment_methods.' . $order->payment->method . '.title')]); ?>
                                        </p>

                                        
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo e($order->channel->code); ?>

                                        </p>
                                    </div>

                                    
                                    <div class="flex flex-col gap-[6px]">
                                        <p class="text-[16px] text-gray-800 dark:text-white">
                                            <?php echo e($order->billingAddress->name); ?>

                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo e($order->billingAddress->email); ?>

                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php if($order->billingAddress->address1): ?>
                                                <?php echo e($order->billingAddress->address1); ?>,
                                            <?php endif; ?>

                                            <?php if($order->billingAddress->city): ?>
                                                <?php echo e($order->billingAddress->city); ?>,
                                            <?php endif; ?>

                                            <?php if($order->billingAddress->state): ?>
                                                <?php echo e($order->billingAddress->state); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>

                                <a 
                                    href="<?php echo e(route('admin.sales.orders.view', $order->id)); ?>" 
                                    class="icon-sort-right text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] rounded-[6px] cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800"
                                >
                                </a>
                            </div>

                            <span class="block w-full border-b-[1px] dark:border-gray-800"></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                     
                    <div class="p-[16px] flex justify-between">
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.orders', ['order_count' => $totalOrderCount]); ?>
                        </p>
                    </div>

                    
                    <div class="table-responsive grid w-full">
                        <div class="grid gap-[14px] justify-center justify-items-center py-[40px] px-[10px]">
                            <!-- Placeholder Image -->
                            <img
                                src="<?php echo e(bagisto_asset('images/empty-placeholders/orders-empty.svg')); ?>"
                                class="w-[80px] h-[80px] border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion"
                            />

                            <div class="flex flex-col items-center">
                                <p class="text-[16px] text-gray-400 font-semibold"> 
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.empty-order'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.orders.after'); ?>


            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.invoices.before'); ?>


            
            <div class="bg-white dark:bg-gray-900 rounded box-shadow">
                <?php if($totalInvoiceCount = count($customer->invoices)): ?>
                    
                    <p class="p-[16px] text-[16px] text-gray-800 dark:text-white font-semibold">
                        <?php echo app('translator')->get('admin::app.customers.customers.view.invoice', ['invoice_count' => $totalInvoiceCount]); ?>
                    </p>

                    
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left min-w-[800px]">
                            <thead class="text-[14px] text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-900 border-b-[1px] border-gray-200 dark:border-gray-800">
                                <tr>
                                    <?php $__currentLoopData = ['invoice-id', 'invoice-date', 'invoice-amount', 'order-id']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th scope="col" class="px-6 py-[16px] font-semibold"> 
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.' . $item); ?>
                                        </th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            </thead>

                            <?php $__currentLoopData = $customer->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                    
                                    <tr class="bg-white dark:bg-gray-900 border-b transition-all hover:bg-gray-50 dark:hover:bg-gray-950 dark:border-gray-800">
                                        <td class="px-6 py-[16px] text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.invoice-id-prefix', ['invoice_id' => $invoice->id] ); ?>
                                        </td>

                                        <td class="px-6 py-[16px] text-gray-600 dark:text-gray-300 whitespace-nowrap">
                                            <?php echo e($invoice->created_at); ?>

                                        </td>

                                        <td scope="row" class="px-6 py-[16px] text-gray-600 dark:text-gray-300">
                                            <?php echo e(core()->currency($invoice->grand_total)); ?>

                                        </td>

                                        <td class="px-6 py-[16px] text-gray-600 dark:text-gray-300">
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.order-id-prefix', ['order_id' => $invoice->order_id] ); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                <?php else: ?>
                    
                    <div class="flex justify-between p-[16px]">
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.invoice', ['invoice_count' => $totalInvoiceCount]); ?>
                        </p>
                    </div>

                    <div class="table-responsive grid w-full">
                        <div class="grid gap-[14px] justify-center justify-items-center py-[40px] px-[10px]">
                            
                            <img
                                src="<?php echo e(bagisto_asset('images/settings/invoice.svg')); ?>"
                                class="w-[80px] h-[80px] border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion"
                            />

                            <div class="flex flex-col items-center">
                                <p class="text-[16px] text-gray-400 font-semibold"> 
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.empty-invoice'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.invoices.after'); ?>


            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.reviews.before'); ?>


            
            <div class="bg-white dark:bg-gray-900 rounded box-shadow">
                <?php if($totalReviewsCount = count($customer->reviews) ): ?>
                    
                    <p class=" p-[16px] text-[16px] text-gray-800 dark:text-white font-semibold">
                        <?php echo app('translator')->get('admin::app.customers.customers.view.reviews', ['review_count' => $totalReviewsCount]); ?>
                    </p>

                    <?php $__currentLoopData = $customer->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="grid gap-y-[16px] p-[16px] transition-all hover:bg-gray-50 dark:hover:bg-gray-950">
                            <div class="flex justify-start [&amp;>*]:flex-1">
                                <div class="flex flex-col gap-[6px]">
                                    
                                    <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                        <?php echo e($review->name); ?>

                                    </p>

                                    
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e($review->product->name); ?>

                                    </p>

                                    
                                    <?php switch($review->status):
                                        case ('approved'): ?>
                                            <p class="label-active">
                                                <?php echo app('translator')->get('admin::app.customers.customers.view.approved'); ?>
                                            </p>
                                            <?php break; ?>

                                        <?php case ('pending'): ?>
                                            <p class="label-pending">
                                                <?php echo app('translator')->get('admin::app.customers.customers.view.pending'); ?>
                                            </p>
                                            <?php break; ?>

                                        <?php case ('disapproved'): ?>
                                            <p class="label-cancelled">
                                                <?php echo app('translator')->get('admin::app.customers.customers.view.disapproved'); ?>
                                            </p>
                                            <?php break; ?>

                                    <?php endswitch; ?>
                                </div>

                                <div class="flex flex-col gap-[6px]">
                                    
                                    <div class="flex">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.star-rating.index','data' => ['isEditable' => false,'value' => $review->rating]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($review->rating)]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e($review->created_at); ?>

                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo app('translator')->get('admin::app.customers.customers.view.id', ['id' => $review->id]); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-between gap-x-[16px] items-center">
                                <div class="flex flex-col gap-[6px]">
                                    
                                    <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                        <?php echo e($review->title); ?>

                                    </p>

                                    
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e($review->comment); ?>

                                    </p>
                                </div>

                                <a 
                                    href="<?php echo e(route('admin.catalog.products.edit', $review->product->id)); ?>"
                                    class="icon-sort-right text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] rounded-[6px] cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800"
                                >
                                </a>
                            </div>
                        </div>

                        <span class="block w-full border-b-[1px] dark:border-gray-800"></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                <?php else: ?>
                    
                    <div class="flex justify-between p-[16px]">
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.reviews', ['review_count' => $totalReviewsCount]); ?>
                        </p>
                    </div>

                    <div class="table-responsive grid w-full">
                        <div class="grid gap-[14px] justify-center justify-items-center py-[40px] px-[10px]">
                            
                            <img
                                src="<?php echo e(bagisto_asset('images/empty-placeholders/reviews-empty.svg')); ?>"
                                class="w-[80px] h-[80px] border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion"
                            />

                            <div class="flex flex-col items-center">
                                <p class="text-[16px] text-gray-400 font-semibold"> 
                                   <?php echo app('translator')->get('admin::app.customers.customers.view.empty-review'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
          
            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.reviews.after'); ?>


            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.notes.before'); ?>


            
            <div class="bg-white dark:bg-gray-900  rounded box-shadow">
                <p class="p-[16px] pb-0 text-[16px] text-gray-800 dark:text-white font-semibold">
                    <?php echo app('translator')->get('admin::app.customers.customers.view.add-note'); ?>
                </p>

                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => route('admin.customer.note.store', $customer->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.customer.note.store', $customer->id))]); ?>
                    <div class="p-[16px]">
                        
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'textarea','name' => 'note','id' => 'note','rules' => 'required','label' => trans('admin::app.customers.customers.view.note'),'placeholder' => trans('admin::app.customers.customers.view.note-placeholder'),'rows' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'textarea','name' => 'note','id' => 'note','rules' => 'required','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.customers.customers.view.note')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.customers.customers.view.note-placeholder')),'rows' => '3']); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'note']); ?>
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
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.notify-customer'); ?>
                                </p>
                            </label>
                            
                            
                            <button
                                type="submit"
                                class="secondary-button"
                            >
                                <?php echo app('translator')->get('admin::app.customers.customers.view.submit-btn-title'); ?>
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

                <?php $__currentLoopData = $customer->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid gap-[6px] p-[16px]">
                        <p class="text-[16px] text-gray-800 dark:text-white leading-6">
                            <?php echo e($note->note); ?>

                        </p>

                        
                        <p class="flex gap-2 text-gray-600 dark:text-gray-300 items-center">
                            <?php if($note->customer_notified): ?>
                                <span class="h-fit text-[24px] rounded-full icon-done text-blue-600 bg-blue-100"></span>  

                                <?php echo app('translator')->get('admin::app.customers.customers.view.customer-notified', ['date' => core()->formatDate($note->created_at, 'Y-m-d H:i:s a')]); ?>
                            <?php else: ?>
                                <span class="h-fit text-[24px] rounded-full icon-cancel-1 text-red-600 bg-red-100"></span>

                                <?php echo app('translator')->get('admin::app.customers.customers.view.customer-not-notified', ['date' => core()->formatDate($note->created_at, 'Y-m-d H:i:s a')]); ?>
                            <?php endif; ?>
                        </p>
                    </div>

                    <span class="block w-full border-b-[1px] dark:border-gray-800"></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.notes.after'); ?>


        </div>

        
        <div class="flex flex-col gap-[8px] w-[360px] max-w-full max-sm:w-full">

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.accordion.customer.before'); ?>


            
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
                    <div class="flex w-[100%]">
                        <p class="w-[100%] p-[10px] text-gray-800 dark:text-white text-[16px] font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.customer'); ?>
                        </p>
    
                        
                       <?php echo $__env->make('admin::customers.customers.edit', ['groups' => $groups], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <div class="grid gap-y-[10px]">
                        <p class="text-gray-800 font-semibold dark:text-white">
                            <?php echo e($customer->first_name . " " . $customer->last_name); ?>

                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.email', ['email' => $customer->email]); ?>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.phone', ['phone' => $customer->phone ?? 'N/A']); ?>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.gender', ['gender' => $customer->gender ?? 'N/A']); ?>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.date-of-birth', ['dob' => $customer->date_of_birth ?? 'N/A']); ?>
                        </p>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.group', ['group_code' => $customer->group->code ?? 'N/A']); ?>
                        </p>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.accordion.customer.after'); ?>


            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.accordion.address.before'); ?>


            
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
                    <div class="flex items-center justify-between p-[6px]">
                        <p class="text-gray-800 dark:text-white text-[16px] font-semibold">
                            <?php echo app('translator')->get('admin::app.customers.customers.view.address', ['count' => count($customer->addresses)]); ?>
                        </p>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <?php if(count($customer->addresses)): ?>
                        <?php $__currentLoopData = $customer->addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid gap-y-[10px]">
                                <?php if( $address->default_address ): ?>
                                    <p class="label-pending">
                                        <?php echo app('translator')->get('admin::app.customers.customers.view.default-address'); ?>
                                    </p>
                                <?php endif; ?>

                                <p class="text-gray-800 font-semibold dark:text-white">
                                    <?php echo e($address->name); ?>

                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($address->address1); ?>,

                                    <?php if($address->address2): ?>
                                        <?php echo e($address->address2); ?>,
                                    <?php endif; ?>

                                    <?php echo e($address->city); ?>,
                                    <?php echo e($address->state); ?>,
                                    <?php echo e(core()->country_name($address->country)); ?>


                                    <?php if($address->postcode): ?>
                                        (<?php echo e($address->postcode); ?>)
                                    <?php endif; ?>
                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.phone', ['phone' => $address->phone ?? 'N/A']); ?>
                                </p>

                                <div class="flex gap-[10px]">
                                    
                                    <?php echo $__env->make('admin::customers.addresses.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    
                                    <?php if(bouncer()->hasPermission('customers.addresses.delete')): ?>
                                        <p 
                                            class="text-blue-600 cursor-pointer transition-all hover:underline"
                                            @click="$emitter.emit('open-confirm-modal', {
                                                message: '<?php echo app('translator')->get('admin::app.customers.customers.view.address-delete-confirmation'); ?>',

                                                agree: () => {
                                                    this.$refs['delete-address-<?php echo e($address->id); ?>'].submit()
                                                }
                                            })"
                                        >
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.delete'); ?>
                                        </p>

                                        <form 
                                            method="post"
                                            action="<?php echo e(route('admin.customers.customers.addresses.delete', $address->id)); ?>"
                                            ref="delete-address-<?php echo e($address->id); ?>" 
                                        >
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    <?php endif; ?>

                                    
                                    <?php if(! $address->default_address ): ?>
                                        <p 
                                            class="text-blue-600 cursor-pointer transition-all hover:underline"
                                            onclick="event.preventDefault();
                                            document.getElementById('default-address<?php echo e($address->id); ?>').submit();"
                                        >
                                            <?php echo app('translator')->get('admin::app.customers.customers.view.set-as-default'); ?>
                                        </p>

                                        <form
                                            class="hidden"
                                            method="post"
                                            action="<?php echo e(route('admin.customers.customers.addresses.set_default', $customer->id)); ?>" 
                                            id="default-address<?php echo e($address->id); ?>" 
                                        >
                                            <?php echo csrf_field(); ?>

                                            <input
                                                type="text"
                                                name="set_as_default"
                                                value="<?php echo e($address->id); ?>"
                                            />
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <?php if($index < count($customer->addresses) - 1): ?>
                                <span class="block w-full mb-[16px] mt-[16px] border-b-[1px] dark:border-gray-800"></span>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>    
                        
                        <div class="flex gap-[20px] items-center py-[10px]">
                            <img
                                src="<?php echo e(bagisto_asset('images/settings/address.svg')); ?>"
                                class="w-[80px] h-[80px] border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion"
                            >

                            <div class="flex flex-col gap-[6px]">
                                <p class="text-[16px] text-gray-400 font-semibold">
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.empty-title'); ?>
                                </p>

                                <p class="text-gray-400">
                                    <?php echo app('translator')->get('admin::app.customers.customers.view.empty-description'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php echo view_render_event('bagisto.admin.customers.customers.view.card.accordion.address.after'); ?>


        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/customers/customers/view.blade.php ENDPATH**/ ?>