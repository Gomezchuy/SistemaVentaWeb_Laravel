
<v-reporting-sales-abandoned-carts>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.sales.abandoned-carts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.sales.abandoned-carts'); ?>
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
</v-reporting-sales-abandoned-carts>

<?php if (! $__env->hasRenderedOnce('2ca797b3-4206-42d6-8859-424f182ede93')): $__env->markAsRenderedOnce('2ca797b3-4206-42d6-8859-424f182ede93');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-reporting-sales-abandoned-carts-template">
        <!-- Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.reporting.sales.abandoned-carts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.reporting.sales.abandoned-carts'); ?>
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

        <!-- Abandoned Carts Section -->
        <template v-else>
            <div class="flex-1 relative p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
                <div class="flex items-center justify-between mb-[16px]">
                    <p class="text-[16px] text-gray-600 dark:text-white font-semibold">
                        <?php echo app('translator')->get('admin::app.reporting.sales.index.abandoned-carts'); ?>
                    </p>

                    <a
                        href="<?php echo e(route('admin.reporting.sales.view', ['type' => 'abandoned-carts'])); ?>"
                        class="text-[14px] text-blue-600 cursor-pointer transition-all hover:underline"
                    >
                        <?php echo app('translator')->get('admin::app.reporting.sales.index.view-details'); ?>
                    </a>
                </div>

                <!-- Content -->
                <div class="grid gap-[16px]">
                    <!-- Stats -->
                    <div class="flex gap-[16px] justify-between">
                        <!-- Abandoned Revenue -->
                        <div class="grid gap-[4px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.sales.formatted_total }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.abandoned-revenue'); ?>
                            </p>
                            
                            <div class="flex gap-[2px] items-center">
                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.sales.progress < 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>

                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.sales.progress < 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.sales.progress.toFixed(2) }}%
                                </p>
                            </div>
                        </div>

                        <!-- Abandoned Cart -->
                        <div class="grid gap-[4px]">
                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                {{ report.statistics.carts.current }}
                            </p>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.abandoned-carts'); ?>
                            </p>
                            
                            <div class="flex gap-[2px] items-center">
                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.carts.progress < 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>

                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.carts.progress < 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.carts.progress.toFixed(2) }}%
                                </p>
                            </div>
                        </div>

                        <!-- Abandoned Rate -->
                        <div class="grid gap-[4px]">
                            <div class="flex gap-[2px]">
                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.rate.progress >= 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.rate.current.toFixed(2) }}%
                                </p>

                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.carts.progress >= 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>
                            </div>

                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                <?php echo app('translator')->get('admin::app.reporting.sales.index.abandoned-rate'); ?>
                            </p>
                            
                            <div class="flex gap-[2px] items-center">
                                <p
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.rate.progress < 0 ?  'text-red-500' : 'text-emerald-500']"
                                >
                                    {{ report.statistics.rate.progress.toFixed(2) }}%
                                </p>

                                <span
                                    class="text-[16px] text-emerald-500"
                                    :class="[report.statistics.carts.progress < 0 ? 'icon-down-stat text-red-500 dark:!text-red-500' : 'icon-up-stat text-emerald-500 dark:!text-emerald-500']"
                                ></span>
                            </div>
                        </div>
                    </div>

                    <!-- Header -->
                    <p class="py-[10px] text-[16px] text-gray-600 dark:text-white font-semibold mt-[16px]">
                        <?php echo app('translator')->get('admin::app.reporting.sales.index.abandoned-products'); ?>
                    </p>

                    <!-- Abandoned Products -->
                    <template v-if="report.statistics.products.length">
                        <div class="grid gap-[27px]">
                            <div
                                class="grid"
                                v-for="product in report.statistics.products"
                            >
                                <p class="dark:text-white">{{ product.name }}</p>

                                <div class="flex gap-[20px] items-center">
                                    <div class="w-full h-[8px] relative bg-slate-100">
                                        <div
                                            class="h-[8px] absolute left-0 bg-blue-500"
                                            :style="{ 'width': product.progress + '%' }"
                                        ></div>
                                    </div>

                                    <p class="text-[14px] text-gray-600 dark:text-gray-300 font-semibold">
                                        {{ product.count }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>

                    <!-- Empty State -->
                    <template v-else>
                        <?php echo $__env->make('admin::reporting.empty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </template>

                    <!-- Date Range -->
                    <div class="flex gap-[20px] justify-end">
                        <div class="flex gap-[4px] items-center">
                            <span class="w-[14px] h-[14px] rounded-[3px] bg-blue-500"></span>

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
        app.component('v-reporting-sales-abandoned-carts', {
            template: '#v-reporting-sales-abandoned-carts-template',

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

                    filtets.type = 'abandoned-carts';

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
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/reporting/sales/abandoned-carts.blade.php ENDPATH**/ ?>