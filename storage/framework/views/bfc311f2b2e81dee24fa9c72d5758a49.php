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
        <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.name'); ?>
     <?php $__env->endSlot(); ?>

    
    <?php $__env->startSection('breadcrumbs'); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'downloadable-products']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'downloadable-products']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <div class="flex-auto">
        <div class="max-md:max-w-full">
            <h2 class="text-[26px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.name'); ?>
            </h2>

            <?php echo view_render_event('bagisto.shop.customers.account.downloadable_products.list.before'); ?>


            <?php if(! $downloadableLinkPurchased->isEmpty()): ?>
                
                <div class="relative overflow-x-auto border border-b-0  rounded-[12px] mt-[30px]">
                    <table class="w-full text-sm text-left">
                        <thead class="border-b-[1px] border-[#E9E9E9] text-[14px] text-black bg-[#F5F5F5]">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.orderId'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.title'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.date'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.status'); ?>
                                </th>

                                <th
                                    scope="col"
                                    class="px-6 py-[16px] font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.remaining-downloads'); ?>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $downloadableLinkPurchased; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-white border-b">
                                    <th 
                                        scope="row" 
                                        class="px-6 py-[16px] whitespace-nowrap text-blackfont-medium  first:rounded-bl-[12px]"
                                    >
                                        <?php echo e($item->order_id); ?>

                                    </th>

                                    <td 
                                        class="px-6 py-[16px] text-black font-medium"
                                    >
                                        <?php if($item->status == 'available'): ?>
                                            <a  
                                                class="text-blue-600"
                                                href="<?php echo e(route('shop.customers.account.downloadable_products.download', $item->id)); ?>" 
                                                target="_blank"
                                            >
                                                <?php echo e($item->product_name); ?>

                                            </a>
                                        <?php else: ?> 
                                            <?php echo e($item->product_name); ?>

                                        <?php endif; ?>
                                    </td>

                                    <td class="px-6 py-[16px] text-black font-medium">
                                        <?php echo e($item->created_at); ?>

                                    </td>

                                    <td 
                                        class="px-6 py-[16px] text-black font-medium"
                                    > 
                                        <?php switch($item->status):
                                            case ('completed'): ?>

                                                <span class="px-[10px] py-[4px] rounded-[12px] bg-[#5BA34B] text-white text-[12px]">
                                                    <?php echo e($item->status); ?>

                                                </span>
                                                <?php break; ?>

                                            <?php case ('pending'): ?>

                                                <span class="px-[10px] py-[4px] rounded-[12px] bg-[#FDB60C] text-white text-[12px]">
                                                    <?php echo e($item->status); ?>

                                                </span>
                                                <?php break; ?>

                                            <?php case ('available'): ?>
                                                <span class=" px-[10px] py-[4px] rounded-[12px] bg-[#5BA34B] text-white text-[12px]">
                                                    <?php echo e($item->status); ?>

                                                </span>
                                                <?php break; ?>
                                        <?php endswitch; ?>
                                    </td>

                                    <td 
                                        class="px-6 py-[16px] text-black font-medium last:rounded-br-[12px]"
                                    > 
                                        <?php echo e($item->download_bought); ?> - <?php echo e($item->download_used); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <p class="text-[14px] text-right font-medium mt-[20px]"> 
                    <?php echo e($downloadableLinkPurchased->count()); ?>

                    
                    <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.records-found'); ?>
                </p>
            <?php else: ?>
                
                <div class="grid items-center justify-items-center place-content-center w-[100%]] m-auto h-[476px] text-center">
                    <img
                        src="<?php echo e(bagisto_asset('images/empty-dwn-product.png')); ?>"
                        class=""
                        alt=""
                        title=""
                    >

                    <p class="text-[20px]">
                        <?php echo app('translator')->get('shop::app.customers.account.downloadable-products.empty-product'); ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php echo view_render_event('bagisto.shop.customers.account.downloadable_products.list.after'); ?>


        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/customers/account/downloadable_products/index.blade.php ENDPATH**/ ?>