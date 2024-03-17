
<v-reporting-customers-total-traffic>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.customers.total-traffic','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.customers.total-traffic'); ?>
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
</v-reporting-customers-total-traffic>

<?php if (! $__env->hasRenderedOnce('bf15c95d-c5c4-433b-bd9d-735d4be91562')): $__env->markAsRenderedOnce('bf15c95d-c5c4-433b-bd9d-735d4be91562');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-reporting-customers-total-traffic-template">
        <!-- Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.customers.total-traffic','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.customers.total-traffic'); ?>
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

        <!-- Total Customer Section -->
        <template v-else>
            <div class="flex-1 relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                <!-- Header -->
                <div class="flex items-center justify-between mb-[16px]">
                    <p class="text-[16px] text-gray-600 dark:text-white font-semibold">
                        <?php echo app('translator')->get('admin::app.reporting.customers.index.customers-traffic'); ?>
                    </p>
                </div>
                
                <!-- Content -->
                <div class="grid gap-[16px]">
                    <div class="flex gap-[16px] justify-between">
                        <!-- Total Visitors -->
                        <div class="grid gap-[4px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.total.current }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.customers.index.total-visitors'); ?>
                            </p>
                            
                            <div class="flex gap-[2px] items-center">
                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.total.progress < 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>

                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.total.progress < 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.total.progress.toFixed(2) }}%
                                </p>
                            </div>
                        </div>

                        <!-- Unique Visitors -->
                        <div class="grid gap-[4px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.unique.current }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.customers.index.unique-visitors'); ?>
                            </p>
                            
                            <div class="flex gap-[2px] items-center">
                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.unique.progress < 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>

                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.unique.progress < 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.unique.progress.toFixed(2) }}%
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="text-[16px] text-gray-600 dark:text-gray-300 font-semibold">
                        <?php echo app('translator')->get('admin::app.reporting.customers.index.traffic-over-week'); ?>
                    </p>

                    <!-- Bar Chart -->
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.charts.bar','data' => [':labels' => 'chartLabels',':datasets' => 'chartDatasets']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::charts.bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':labels' => 'chartLabels',':datasets' => 'chartDatasets']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <!-- Date Range -->
                    <div class="flex gap-[20px] justify-center">
                        <div class="flex gap-[4px] items-center">
                            <span class="w-[14px] h-[14px] rounded-[3px] bg-emerald-400"></span>

                            <p class="text-[12px] dark:text-gray-300">
                                {{ report.date_range.previous }}
                            </p>
                        </div>

                        <div class="flex gap-[4px] items-center">
                            <span class="w-[14px] h-[14px] rounded-[3px] bg-sky-400"></span>

                            <p class="text-[12px] dark:text-gray-300">
                                {{ report.date_range.current }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-reporting-customers-total-traffic', {
            template: '#v-reporting-customers-total-traffic-template',

            data() {
                return {
                    report: [],

                    isLoading: true,
                }
            },

            computed: {
                chartLabels() {
                    return this.report.statistics.over_time.previous['label'];
                },

                chartDatasets() {
                    return [{
                        data: this.report.statistics.over_time.previous['total'],
                        pointStyle: false,
                        backgroundColor: '#34D399',
                        fill: true,
                    }, {
                        data: this.report.statistics.over_time.current['total'],
                        pointStyle: false,
                        backgroundColor: '#0E9CFF',
                        fill: true,
                    }];
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

                    filtets.type = 'customers-traffic';

                    this.$axios.get("<?php echo e(route('admin.reporting.customers.stats')); ?>", {
                            params: filtets
                        })
                        .then(response => {
                            this.report = response.data;

                            this.isLoading = false;
                        })
                        .catch(error => {});
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/reporting/customers/total-traffic.blade.php ENDPATH**/ ?>