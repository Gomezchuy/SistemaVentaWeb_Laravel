<?php echo view_render_event('bagisto.shop.categories.view.toolbar.before'); ?>


<v-toolbar @filter-applied='setFilters("toolbar", $event)'></v-toolbar>

<?php echo view_render_event('bagisto.shop.categories.view.toolbar.after'); ?>


<?php $toolbar = app('Webkul\Product\Helpers\Toolbar'); ?>

<?php if (! $__env->hasRenderedOnce('30006422-c474-4dc2-8df7-3c7adffc6c91')): $__env->markAsRenderedOnce('30006422-c474-4dc2-8df7-3c7adffc6c91');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id='v-toolbar-template'>
        <div>
            <!-- Desktop Toolbar -->
            <div class="flex justify-between max-md:hidden">
                <!-- Product Sorting Filters -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'bottom-left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-left']); ?>
                     <?php $__env->slot('toggle', null, []); ?> 
                        <!-- Dropdown Toggler -->
                        <button class="flex justify-between items-center gap-[15px] max-w-[200px] w-full p-[14px] rounded-lg bg-white border border-[#E9E9E9] text-[16px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pr-[10px] max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">
                            {{ sortLabel ?? "<?php echo app('translator')->get('shop::app.products.sort-by.title'); ?>" }}

                            <span class="icon-arrow-down text-[24px]"></span>
                        </button>
                     <?php $__env->endSlot(); ?>
                
                    <!-- Dropdown Content -->
                     <?php $__env->slot('menu', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.menu.item','data' => ['vFor' => '(sort, key) in filters.available.sort',':class' => '{\'bg-gray-100\': sort.value == filters.applied.sort}','@click' => 'apply(\'sort\', sort.value)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => '(sort, key) in filters.available.sort',':class' => '{\'bg-gray-100\': sort.value == filters.applied.sort}','@click' => 'apply(\'sort\', sort.value)']); ?>
                            {{ sort.title }}
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <!-- Product Pagination Limit -->
                <div class="flex gap-[40px] items-center">
                    <!-- Product Pagination Limit -->
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'bottom-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-right']); ?>
                         <?php $__env->slot('toggle', null, []); ?> 
                            <!-- Dropdown Toggler -->
                            <button class="flex gap-[15px] justify-between items-center max-w-[200px] bg-white border border-[#E9E9E9] text-[16px] rounded-lg w-full p-[14px] max-md:pr-[10px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">
                                {{ filters.applied.limit ?? "<?php echo app('translator')->get('shop::app.categories.toolbar.show'); ?>" }}

                                <span class="text-[24px] icon-arrow-down"></span>
                            </button>
                         <?php $__env->endSlot(); ?>
                    
                        <!-- Dropdown Content -->
                         <?php $__env->slot('menu', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.menu.item','data' => ['vFor' => '(limit, key) in filters.available.limit',':class' => '{\'bg-gray-100\': limit == filters.applied.limit}','@click' => 'apply(\'limit\', limit)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => '(limit, key) in filters.available.limit',':class' => '{\'bg-gray-100\': limit == filters.applied.limit}','@click' => 'apply(\'limit\', limit)']); ?>
                                {{ limit }}
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <!-- Listing Mode Switcher -->
                    <div class="flex gap-[20px] items-center">
                        <span
                            class="text-[24px] cursor-pointer"
                            :class="(filters.applied.mode === 'list') ? 'icon-listing-fill' : 'icon-listing'"
                            @click="changeMode('list')"
                        >
                        </span>

                        <span
                            class="text-[24px] cursor-pointer"
                            :class="(filters.applied.mode === 'grid') ? 'icon-grid-view-fill' : 'icon-grid-view'"
                            @click="changeMode()"
                        >
                        </span>
                    </div>
                </div>
            </div>

            <!-- Modile Toolbar -->
            <div class="md:hidden">
                <ul>
                    <li
                        class="p-[10px]"
                        :class="{'bg-gray-100': sort.value == filters.applied.sort}"
                        v-for="(sort, key) in filters.available.sort"
                        @click="apply('sort', sort.value)"
                    >
                        {{ sort.title }}
                    </li>
                </ul>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-toolbar', {
            template: '#v-toolbar-template',

            data() {
                return {
                    filters: {
                        available: {
                            sort: <?php echo json_encode($toolbar->getAvailableOrders(), 15, 512) ?>,

                            limit: <?php echo json_encode($toolbar->getAvailableLimits(), 15, 512) ?>,

                            mode: <?php echo json_encode($toolbar->getAvailableModes(), 15, 512) ?>,
                        },

                        applied: {
                            sort: '<?php echo e($toolbar->getOrder(isset($params) ? $params : [])['value']); ?>',

                            limit: '<?php echo e($toolbar->getLimit(isset($params) ? $params : [] )); ?>',

                            mode: '<?php echo e($toolbar->getMode(isset($params) ? $params : [] )); ?>',
                        }
                    }
                };
            },

            mounted() {
                this.$emit('filter-applied', this.filters.applied);
            },

            computed: {
                sortLabel() {
                    return this.filters.available.sort.find(sort => sort.value === this.filters.applied.sort).title;
                }
            },

            methods: {
                apply(type, value) {
                    this.filters.applied[type] = value;

                    this.$emit('filter-applied', this.filters.applied);
                },

                changeMode(value = 'grid') {
                    this.filters.applied['mode'] = value;

                    this.$emit('filter-applied', this.filters.applied);
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/categories/toolbar.blade.php ENDPATH**/ ?>