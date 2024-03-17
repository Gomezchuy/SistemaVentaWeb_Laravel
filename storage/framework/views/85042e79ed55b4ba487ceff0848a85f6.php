<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['isMultiRow' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['isMultiRow' => false]); ?>
<?php foreach (array_filter((['isMultiRow' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-table>
    <?php echo e($slot); ?>

</v-table>

<?php if (! $__env->hasRenderedOnce('82c73105-67be-4d18-916e-0e66f1067b9b')): $__env->markAsRenderedOnce('82c73105-67be-4d18-916e-0e66f1067b9b');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-table-template">
        <div class="w-full overflow-x-auto border rounded-[12px]">
            <!-- Main Table -->
            <div class="table-responsive grid w-full box-shadow rounded-[4px] bg-white overflow-hidden">
                <slot name="header">
                    <template v-if="$parent.isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.datagrid.table.head','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.datagrid.table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div
                            class="row grid gap-[10px] px-6 py-[16px] font-medium border-b-[1px] border-[#E9E9E9] text-[14px] bg-[#F5F5F5] text-black items-center"
                            :style="`grid-template-columns: repeat(${gridsCount}, 1fr)`"
                        >
                            <!-- Mass Actions -->
                            <p v-if="$parent.available.massActions.length">
                                <label for="mass_action_select_all_records">
                                    <input
                                        type="checkbox"
                                        name="mass_action_select_all_records"
                                        id="mass_action_select_all_records"
                                        class="peer hidden"
                                        :checked="['all', 'partial'].includes($parent.applied.massActions.meta.mode)"
                                        @change="$parent.selectAllRecords"
                                    >

                                    <span
                                        class="icon-uncheckbox cursor-pointer rounded-[6px] text-[24px]"
                                        :class="[
                                            $parent.applied.massActions.meta.mode === 'all' ? 'peer-checked:icon-checked peer-checked:text-blue-600' : (
                                                $parent.applied.massActions.meta.mode === 'partial' ? 'peer-checked:icon-checkbox-partial peer-checked:text-blue-600' : ''
                                            ),
                                        ]"
                                    >
                                    </span>
                                </label>
                            </p>

                            <!-- Columns -->
                            <p
                                v-for="column in $parent.available.columns"
                                v-if="$parent.available.actions.length"
                                class="flex items-center gap-[5px]"
                                :class="{'cursor-pointer select-none': column.sortable}"
                                @click="$parent.sortPage(column)"
                            >
                                {{ column.label }}

                                <i
                                    class="text-[16px] text-gray-800 align-text-bottom"
                                    :class="[$parent.applied.sort.order === 'asc' ? 'icon-arrow-down': 'icon-arrow-up']"
                                    v-if="column.index == $parent.applied.sort.column"
                                ></i>
                            </p>

                            <!-- Actions -->
                            <p class="col-start-[none]">
                                <?php echo app('translator')->get('shop::app.components.datagrid.table.actions'); ?>
                            </p>
                        </div>
                    </template>
                </slot>

                <slot name="body">
                    <template v-if="$parent.isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.datagrid.table.body','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.datagrid.table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.datagrid.table.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.datagrid.table.footer'); ?>
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

                    <template v-else>
                        <template v-if="$parent.available.records.length">
                            <div>
                                <div
                                    class="row grid gap-[10px] items-center px-6 py-[16px] bg-white border-b text-gray-600 transition-all font-medium"
                                    v-for="record in $parent.available.records"
                                    :style="`grid-template-columns: repeat(${gridsCount}, 1fr)`"
                                >
                                    <!-- Mass Actions -->
                                    <p v-if="$parent.available.massActions.length">
                                        <label :for="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`">
                                            <input
                                                type="checkbox"
                                                class="peer hidden"
                                                :name="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`"
                                                :value="record[$parent.available.meta.primary_column]"
                                                :id="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`"
                                                v-model="$parent.applied.massActions.indices"
                                                @change="$parent.setCurrentSelectionMode"
                                            >

                                            <span class="icon-uncheckbox peer-checked:icon-checked cursor-pointer rounded-[6px] text-[24px] peer-checked:text-blue-600">
                                            </span>
                                        </label>
                                    </p>

                                    <!-- Columns -->
                                    <p
                                        v-if="record.is_closure"
                                        v-for="column in $parent.available.columns"
                                        v-html="record[column.index]"
                                    >
                                    </p>

                                    <p
                                        v-else
                                        v-for="column in $parent.available.columns"
                                        v-html="record[column.index]"
                                    >
                                    </p>

                                    <!-- Actions -->
                                    <p
                                        v-if="$parent.available.actions.length"
                                        class="col-start-[none]"
                                    >
                                        <span
                                            class="cursor-pointer rounded-[6px] p-[6px] text-[24px] transition-all hover:bg-gray-200 max-sm:place-self-center"
                                            :class="action.icon"
                                            v-text="!action.icon ? action.title : ''"
                                            v-for="action in record.actions"
                                            @click="$parent.performAction(action)"
                                        >
                                        </span>
                                    </p>
                                </div>

                                <!-- Information Panel -->
                                <div class="flex justify-between items-center p-[25px]">
                                    <p class="text-[12px] font-medium">
                                        Showing {{ $parent.available.meta.from }} to {{ $parent.available.meta.to }} of {{ $parent.available.meta.total }} entries
                                    </p>

                                    <!-- Pagination -->
                                    <div class="flex items-center gap-[4px]">
                                        <div
                                            class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border border-transparent p-[6px] text-center text-gray-600 transition-all marker:shadow hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black active:border-gray-300"
                                            @click="changePage('previous')"
                                        >
                                            <span class="icon-sort-left text-[24px]"></span>
                                        </div>

                                        <div
                                            class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border border-transparent p-[6px] text-center text-gray-600 transition-all marker:shadow hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-black active:border-gray-300"
                                            @click="changePage('next')"
                                        >
                                            <span class="icon-sort-right text-[24px]"></span>
                                        </div>
                                    </div>

                                    <nav aria-label="Page Navigation">
                                        <ul class="inline-flex items-center -space-x-px">
                                            <li @click="$parent.changePage('previous')">
                                                <a
                                                    href="javascript:void(0);"
                                                    class="flex items-center justify-center w-[35px] h-[37px] border border-[#E9E9E9] rounded-l-lg leading-normal font-medium hover:bg-gray-100"
                                                    aria-label="Previous Page"
                                                >
                                                    <span class="icon-arrow-left text-[24px]"></span>
                                                </a>
                                            </li>

                                            <li>
                                                <input
                                                    type="text"
                                                    :value="$parent.available.meta.current_page"
                                                    class="px-[15px] pt-[6px] pb-[5px] max-w-[42px] border border-[#E9E9E9] leading-normal text-black font-medium text-center hover:bg-gray-100"
                                                    @change="$parent.changePage(parseInt($event.target.value))"
                                                    aria-label="Page Number"
                                                >
                                            </li>

                                            <li @click="$parent.changePage('next')">
                                                <a
                                                    href="javascript:void(0);"
                                                    class="flex items-center justify-center w-[35px] h-[37px] border border-[#E9E9E9] rounded-r-lg leading-normal font-medium hover:bg-gray-100"
                                                    aria-label="Next Page"
                                                >
                                                    <span class="icon-arrow-right text-[24px]"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </template>

                        <template v-else>
                            <div class="row grid px-[16px] py-[16px] border-b-[1px] border-gray-300 text-gray-600 text-center">
                                <p>
                                    <?php echo app('translator')->get('shop::app.components.datagrid.table.no-records-available'); ?>
                                </p>
                            </div>
                        </template>
                    </template>
                </slot>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-table', {
            template: '#v-table-template',

            computed: {
                gridsCount() {
                    let count = this.$parent.available.columns.length;

                    if (this.$parent.available.actions.length) {
                        ++count;
                    }

                    if (this.$parent.available.massActions.length) {
                        ++count;
                    }

                    return count;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/datagrid/table.blade.php ENDPATH**/ ?>