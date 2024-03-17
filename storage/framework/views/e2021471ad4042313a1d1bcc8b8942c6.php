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
        <?php echo app('translator')->get('admin::app.reporting.sales.index.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="flex gap-[16px] justify-between items-center mb-[20px] max-sm:flex-wrap">
        
        <div class="flex gap-[6px]">
            <p class="pt-[6px] text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                <?php echo app('translator')->get('admin::app.reporting.sales.index.title'); ?>
            </p>
        </div>

        <!-- Actions -->
        <v-reporting-filters>
            
            <div class="flex gap-[6px]">
                <div class="shimmer w-[140px] h-[39px] rounded-[6px]"></div>
                <div class="shimmer w-[140px] h-[39px] rounded-[6px]"></div>
            </div>
        </v-reporting-filters>
    </div>

    
    <div class="flex flex-col gap-[15px] flex-1 max-xl:flex-auto">
        <!-- Sales Section -->
        <?php echo $__env->make('admin::reporting.sales.total-sales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Purchase Funnel and Abandoned Carts Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Purchase Funnel Section -->
            <?php echo $__env->make('admin::reporting.sales.purchase-funnel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Abandoned Carts Section -->
            <?php echo $__env->make('admin::reporting.sales.abandoned-carts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Total Orders and Average Order Value Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Total Orders Section -->
            <?php echo $__env->make('admin::reporting.sales.total-orders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Average Order Value Section -->
            <?php echo $__env->make('admin::reporting.sales.average-order-value', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Tax Collected and Shipping Collected Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Tax Collected Section -->
            <?php echo $__env->make('admin::reporting.sales.tax-collected', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Shipping Collected Section -->
            <?php echo $__env->make('admin::reporting.sales.shipping-collected', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Refunds and Top Payment Methods Sections Container -->
        <div class="flex justify-between gap-[15px] flex-1 [&>*]:flex-1 max-xl:flex-auto">
            <!-- Refunds Section -->
            <?php echo $__env->make('admin::reporting.sales.total-refunds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Top Payment Methods Section -->
            <?php echo $__env->make('admin::reporting.sales.top-payment-methods', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php if (! $__env->hasRenderedOnce('13f115bd-0c12-4236-86cf-1139360726b9')): $__env->markAsRenderedOnce('13f115bd-0c12-4236-86cf-1139360726b9');
$__env->startPush('scripts'); ?>
        <script type="module" src="<?php echo e(bagisto_asset('js/chart.js')); ?>"></script>

        <script type="text/x-template" id="v-reporting-filters-template">
            <div class="flex gap-[6px]">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => ['class' => '!w-[140px]',':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!w-[140px]',':allow-input' => 'false']); ?>
                    <input
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        v-model="filters.start"
                        placeholder="<?php echo app('translator')->get('admin::app.reporting.sales.index.start-date'); ?>"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => ['class' => '!w-[140px]',':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!w-[140px]',':allow-input' => 'false']); ?>
                    <input
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        v-model="filters.end"
                        placeholder="<?php echo app('translator')->get('admin::app.reporting.sales.index.end-date'); ?>"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
        </script>

        <script type="module">
            app.component('v-reporting-filters', {
                template: '#v-reporting-filters-template',

                data() {
                    return {
                        filters: {
                            start: "<?php echo e($startDate->format('Y-m-d')); ?>",
                            
                            end: "<?php echo e($endDate->format('Y-m-d')); ?>",
                        }
                    }
                },

                watch: {
                    filters: {
                        handler() {
                            this.$emitter.emit('reporting-filter-updated', this.filters);
                        },

                        deep: true
                    }
                },
            });
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/reporting/sales/index.blade.php ENDPATH**/ ?>