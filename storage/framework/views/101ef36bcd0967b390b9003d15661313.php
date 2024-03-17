
<v-reporting-sales-purchase-funnel>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.sales.purchase-funnel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.sales.purchase-funnel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</v-reporting-sales-purchase-funnel>

<?php if (! $__env->hasRenderedOnce('48738115-ef44-4318-bedc-b0b224df9d38')): $__env->markAsRenderedOnce('48738115-ef44-4318-bedc-b0b224df9d38');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-reporting-sales-purchase-funnel-template">
        <!-- Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.sales.purchase-funnel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.sales.purchase-funnel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </template>

        <!-- Purchase Funnel Section -->
        <template v-else>
            <div class="flex-1 relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                <!-- Header -->
                <p class="text-[16px] text-gray-600 dark:text-white font-semibold mb-[16px]">
                    <?php echo app('translator')->get('admin::app.reporting.sales.index.purchase-funnel'); ?>
                </p>
                
                <!-- Content -->
                <div class="grid grid-cols-4 gap-[24px]">
                    <!-- Total Visits -->
                    <div class="flex flex-col gap-[16px]">
                        <div class="grid gap-[2px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.visitors.total }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.total-visits'); ?>
                            </p>
                        </div>

                        <div class="w-full relative bg-slate-100 aspect-[0.5/1]">
                            <div
                                class="w-full absolute bottom-0 bg-emerald-400"
                                :style="{ 'height': report.statistics.visitors.progress + '%' }"
                            ></div>
                        </div>

                        <p class="text-gray-600 dark:text-gray-300">
                            <?php echo app('translator')->get('admin::app.reporting.sales.index.total-visits-info'); ?>
                        </p>
                    </div>

                    <!-- Total Product Visits -->
                    <div class="flex flex-col gap-[16px]">
                        <div class="grid gap-[2px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.product_visitors.total }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.product-views'); ?>
                            </p>
                        </div>

                        <div class="w-full relative bg-slate-100 aspect-[0.5/1]">
                            <div
                                class="w-full absolute bottom-0 bg-emerald-400"
                                :style="{ 'height': (report.statistics.product_visitors.progress).toFixed(2) + '%' }"
                            ></div>
                        </div>

                        <p
                            class="text-gray-600 dark:text-gray-300"
                            v-html="'<?php echo app('translator')->get('admin::app.reporting.sales.index.product-views-info'); ?>'.replace(':progress', '<span class=\'text-emerald-400 font-semibold\'>' + report.statistics.product_visitors.progress + '%</span>')"
                        ></p>
                    </div>

                    <!-- Total Added To Cart -->
                    <div class="flex flex-col gap-[16px]">
                        <div class="grid gap-[2px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.carts.total }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.added-to-cart'); ?>
                            </p>
                        </div>

                        <div class="w-full relative bg-slate-100 aspect-[0.5/1]">
                            <div
                                class="w-full absolute bottom-0 bg-emerald-400"
                                :style="{ 'height': (report.statistics.carts.progress).toFixed(2) + '%' }"
                            ></div>
                        </div>

                        <p
                            class="text-gray-600 dark:text-gray-300"
                            v-html="'<?php echo app('translator')->get('admin::app.reporting.sales.index.added-to-cart-info'); ?>'.replace(':progress', '<span class=\'text-emerald-400 font-semibold\'>' + report.statistics.carts.progress + '%</span>')"
                        ></p>
                    </div>

                    <!-- Total Purchased -->
                    <div class="flex flex-col gap-[16px]">
                        <div class="grid gap-[2px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.orders.total }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.purchased'); ?>
                            </p>
                        </div>

                        <div class="w-full relative bg-slate-100 dark:text-gray-300 aspect-[0.5/1]">
                            <div
                                class="w-full absolute bottom-0 bg-emerald-400"
                                :style="{ 'height': report.statistics.orders.progress + '%' }"
                            ></div>
                        </div>

                        <p
                            class="text-gray-600 dark:text-gray-300"
                            v-html="'<?php echo app('translator')->get('admin::app.reporting.sales.index.purchased-info'); ?>'.replace(':progress', '<span class=\'text-emerald-400 font-semibold\'>' + report.statistics.orders.progress + '%</span>')"
                        ></p>
                    </div>
                </div>

                <!-- Date Range Section -->
                <div class="flex gap-[20px] justify-end mt-[24px]">
                    <div class="flex gap-[4px] items-center">
                        <span class="w-[14px] h-[14px] rounded-[3px] bg-emerald-400"></span>

                        <p class="text-[12px] dark:text-gray-300">
                            {{ report.date_range.current }}
                        </p>
                    </div>
                </div>
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-reporting-sales-purchase-funnel', {
            template: '#v-reporting-sales-purchase-funnel-template',

            data() {
                return {
                    report: [],

                    isLoading: true,
                }
            },

            mounted() {
                this.getStats({});

                this.$emitter.on('reporting-filter-updated', this.getStats);
            },

            methods: {
                getStats(filtets) {
                    this.isLoading = true;

                    var filtets = Object.assign({}, filtets);

                    filtets.type = 'purchase-funnel';

                    this.$axios.get("<?php echo e(route('admin.reporting.sales.stats')); ?>", {
                            params: filtets
                        })
                        .then(response => {
                            this.report = response.data;

                            this.isLoading = false;
                        })
                        .catch(error => {});
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/reporting/sales/purchase-funnel.blade.php ENDPATH**/ ?>