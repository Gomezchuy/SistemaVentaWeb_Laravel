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

<v-datagrid <?php echo e($attributes); ?>>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.datagrid.index','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.datagrid'); ?>
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

    <?php echo e($slot); ?>

</v-datagrid>

<?php if (! $__env->hasRenderedOnce('85dec7b1-00ad-4c96-ae7f-c1c2d788f921')): $__env->markAsRenderedOnce('85dec7b1-00ad-4c96-ae7f-c1c2d788f921');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-datagrid-template"
    >
        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.datagrid.toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::datagrid.toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <div class="flex mt-[30px]">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.datagrid.table','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::datagrid.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?>
                    <template #header>
                        <slot
                            name="header"
                            :columns="available.columns"
                            :actions="available.actions"
                            :mass-actions="available.massActions"
                            :records="available.records"
                            :meta="available.meta"
                            :sort-page="sortPage"
                            :selectAllRecords="selectAllRecords"
                            :applied="applied"
                            :is-loading="isLoading"
                        >
                        </slot>
                    </template>

                    <template #body>
                        <slot
                            name="body"
                            :columns="available.columns"
                            :actions="available.actions"
                            :mass-actions="available.massActions"
                            :records="available.records"
                            :meta="available.meta"
                            :setCurrentSelectionMode="setCurrentSelectionMode"
                            :applied="applied"
                            :is-loading="isLoading"
                        >
                        </slot>
                    </template>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-datagrid', {
            template: '#v-datagrid-template',

            props: ['src'],

            data() {
                return {
                    isLoading: false,

                    available: {
                        id: null,

                        columns: [],

                        actions: [],

                        massActions: [],

                        records: [],

                        meta: {},
                    },

                    applied: {
                        massActions: {
                            meta: {
                                mode: 'none',

                                action: null,
                            },

                            indices: [],

                            value: null,
                        },

                        pagination: {
                            page: 1,

                            perPage: 10,
                        },

                        sort: {
                            column: null,

                            order: null,
                        },

                        filters: {
                            columns: [
                                {
                                    index: 'all',
                                    value: <?php echo json_encode(request()->has('search') ? [request()->get('search')] : [], 15, 512) ?>,
                                },
                            ],
                        },
                    },
                };
            },

            mounted() {
                this.boot();
            },

            methods: {
                /**
                 * Initialization: This function checks for any previously saved filters in local storage and applies them as needed.
                 *
                 * @returns {void}
                 */
                boot() {
                    let datagrids = this.getDatagrids();

                    if (datagrids?.length) {
                        const currentDatagrid = datagrids.find(({
                            src
                        }) => src === this.src);

                        if (currentDatagrid) {
                            this.applied.pagination = currentDatagrid.applied.pagination;

                            this.applied.sort = currentDatagrid.applied.sort;

                            this.applied.filters = currentDatagrid.applied.filters;

                            this.get();

                            return;
                        }
                    }

                    this.get();
                },

                /**
                 * Get. This will prepare params from the `applied` props and fetch the data from the backend.
                 *
                 * @returns {void}
                 */
                get() {
                    let params = {
                        pagination: {
                            page: this.applied.pagination.page,
                            per_page: this.applied.pagination.perPage,
                        },

                        sort: {},

                        filters: {},
                    };

                    if (
                        this.applied.sort.column &&
                        this.applied.sort.order
                    ) {
                        params.sort = this.applied.sort;
                    }

                    this.applied.filters.columns.forEach(column => {
                        params.filters[column.index] = column.value;
                    });

                    this.isLoading = true;

                    this.$axios
                        .get(this.src, {
                            params
                        })
                        .then((response) => {
                            /**
                             * Precisely taking all the keys to the data prop to avoid adding any extra keys from the response.
                             */
                            const {
                                id,
                                columns,
                                actions,
                                mass_actions,
                                records,
                                meta
                            } = response.data;

                            this.available.id = id;

                            this.available.columns = columns;

                            this.available.actions = actions;

                            this.available.massActions = mass_actions;

                            this.available.records = records;

                            this.available.meta = meta;

                            this.setCurrentSelectionMode();

                            this.updateDatagrids();

                            this.isLoading = false;
                        });
                },

                /**
                 * Change Page.
                 *
                 * The reason for choosing the numeric approach over the URL approach is to prevent any conflicts with our existing
                 * URLs. If we were to use the URL approach, it would introduce additional arguments in the `get` method, necessitating
                 * the addition of a `url` prop. Instead, by using the numeric approach, we can let Axios handle all the query parameters
                 * using the `applied` prop. This allows for a cleaner and more straightforward implementation.
                 *
                 * @param {string|integer} directionOrPageNumber
                 * @returns {void}
                 */
                changePage(directionOrPageNumber) {
                    let newPage;

                    if (typeof directionOrPageNumber === 'string') {
                        if (directionOrPageNumber === 'previous') {
                            newPage = this.available.meta.current_page - 1;
                        } else if (directionOrPageNumber === 'next') {
                            newPage = this.available.meta.current_page + 1;
                        } else {
                            console.warn('Invalid Direction Provided : ' + directionOrPageNumber);

                            return;
                        }
                    } else if (typeof directionOrPageNumber === 'number') {
                        newPage = directionOrPageNumber;
                    } else {
                        console.warn('Invalid Input Provided: ' + directionOrPageNumber);

                        return;
                    }

                    /**
                     * Check if the `newPage` is within the valid range.
                     */
                    if (newPage >= 1 && newPage <= this.available.meta.last_page) {
                        this.applied.pagination.page = newPage;

                        this.get();
                    } else {
                        console.warn('Invalid Page Provided: ' + newPage);
                    }
                },

                /**
                 * Change per page option.
                 *
                 * @param {integer} option
                 * @returns {void}
                 */
                changePerPageOption(option) {
                    this.applied.pagination.perPage = option;

                    this.get();
                },

                /**
                 * Sort Page.
                 *
                 * @param {object} column
                 * @returns {void}
                 */
                sortPage(column) {
                    if (column.sortable) {
                        this.applied.sort = {
                            column: column.index,
                            order: this.applied.sort.order === 'asc' ? 'desc' : 'asc',
                        };

                        /**
                         * When the sorting changes, we need to reset the page.
                         */
                        this.applied.pagination.page = 1;

                        this.get();
                    }
                },

                /**
                 * Filter Page.
                 *
                 * @param {object} $event
                 * @param {object} column
                 * @param {object} additional
                 * @returns {void}
                 */
                filterPage($event, column = null, additional = {}) {
                    let quickFilter = additional?.quickFilter;

                    if (quickFilter?.isActive) {
                        let options = quickFilter.selectedFilter;

                        switch (column.type) {
                            case 'date_range':
                            case 'datetime_range':
                                this.applyFilter(column, options.from, {
                                    range: {
                                        name: 'from'
                                    }
                                });

                                this.applyFilter(column, options.to, {
                                    range: {
                                        name: 'to'
                                    }
                                });

                                break;

                            default:
                                break;
                        }
                    } else {
                        /**
                         * Here, either a real event will come or a string value. If a string value is present, then
                         * we create a similar event-like structure to avoid any breakage and make it easy to use.
                         */
                        if ($event?.target?.value === undefined) {
                            $event = {
                                target: {
                                    value: $event,
                                }
                            };
                        }

                        this.applyFilter(column, $event.target.value, additional);

                        if (column) {
                            $event.target.value = '';
                        }
                    }

                    this.get();
                },

                applyFilter(column, requestedValue, additional = {}) {
                    let appliedColumn = this.findAppliedColumn(column?.index);

                    /**
                     * If no column is found, it means that search from the toolbar have been
                     * activated. In this case, we will search for `all` indices and update the
                     * value accordingly.
                     */
                    if (!column) {
                        let appliedColumn = this.findAppliedColumn('all');

                        if (!requestedValue) {
                            this.applied.filters.columns = this.applied.filters.columns.filter(column => column.index !== 'all');

                            return;
                        }

                        if (appliedColumn) {
                            appliedColumn.value = [requestedValue];
                        } else {
                            this.applied.filters.columns.push({
                                index: 'all',
                                value: [requestedValue]
                            });
                        }

                        /**
                         * Else, we will look into the sidebar filters and update the value accordingly.
                         */
                    } else {
                        /**
                         * Here if value already exists, we will not do anything.
                         */
                         if (
                            requestedValue === undefined ||
                            requestedValue === '' ||
                            appliedColumn?.value.includes(requestedValue)
                        ) {
                            return;
                        }

                        switch (column.type) {
                            case 'date_range':
                            case 'datetime_range':
                                let {
                                    range
                                } = additional;

                                if (appliedColumn) {
                                    let appliedRanges = appliedColumn.value[0];

                                    if (range.name == 'from') {
                                        appliedRanges[0] = requestedValue;
                                    }

                                    if (range.name == 'to') {
                                        appliedRanges[1] = requestedValue;
                                    }

                                    appliedColumn.value = [appliedRanges];
                                } else {
                                    let appliedRanges = ['', ''];

                                    if (range.name == 'from') {
                                        appliedRanges[0] = requestedValue;
                                    }

                                    if (range.name == 'to') {
                                        appliedRanges[1] = requestedValue;
                                    }

                                    this.applied.filters.columns.push({
                                        ...column,
                                        value: [appliedRanges]
                                    });
                                }

                                break;

                            default:
                                if (appliedColumn) {
                                    appliedColumn.value.push(requestedValue);
                                } else {
                                    this.applied.filters.columns.push({
                                        ...column,
                                        value: [requestedValue]
                                    });
                                }

                                break;
                        }
                    }
                },

                //================================================================
                // Filters logic, will move it from here once completed.
                //================================================================

                findAppliedColumn(columnIndex) {
                    return this.applied.filters.columns.find(column => column.index === columnIndex);
                },

                hasAnyAppliedColumnValues(columnIndex) {
                    let appliedColumn = this.findAppliedColumn(columnIndex);

                    return appliedColumn?.value.length > 0;
                },

                getAppliedColumnValues(columnIndex) {
                    let appliedColumn = this.findAppliedColumn(columnIndex);

                    return appliedColumn?.value ?? [];
                },

                removeAppliedColumnValue(columnIndex, appliedColumnValue) {
                    let appliedColumn = this.findAppliedColumn(columnIndex);

                    appliedColumn.value = appliedColumn?.value.filter(value => value !== appliedColumnValue);

                    /**
                     * Clean up is done here. If there are no applied values present, there is no point in including the applied column as well.
                     */
                    if (!appliedColumn.value.length) {
                        this.applied.filters.columns = this.applied.filters.columns.filter(column => column.index !== columnIndex);
                    }

                    this.get();
                },

                removeAppliedColumnAllValues(columnIndex) {
                    this.applied.filters.columns = this.applied.filters.columns.filter(column => column.index !== columnIndex);

                    this.get();
                },

                //================================================================
                // Mass actions logic, will move it from here once completed.
                //================================================================

                setCurrentSelectionMode() {
                    this.applied.massActions.meta.mode = 'none';

                    if (!this.available.records.length) {
                        return;
                    }

                    let selectionCount = 0;

                    this.available.records.forEach(record => {
                        const id = record[this.available.meta.primary_column];

                        if (this.applied.massActions.indices.includes(id)) {
                            this.applied.massActions.meta.mode = 'partial';

                            ++selectionCount;
                        }
                    });

                    if (this.available.records.length === selectionCount) {
                        this.applied.massActions.meta.mode = 'all';
                    }
                },

                selectAllRecords() {
                    this.setCurrentSelectionMode();

                    if (['all', 'partial'].includes(this.applied.massActions.meta.mode)) {
                        this.available.records.forEach(record => {
                            const id = record[this.available.meta.primary_column];

                            this.applied.massActions.indices = this.applied.massActions.indices.filter(selectedId => selectedId !== id);
                        });

                        this.applied.massActions.meta.mode = 'none';
                    } else {
                        this.available.records.forEach(record => {
                            const id = record[this.available.meta.primary_column];

                            let found = this.applied.massActions.indices.find(selectedId => selectedId === id);

                            if (!found) {
                                this.applied.massActions.indices.push(id);
                            }
                        });

                        this.applied.massActions.meta.mode = 'all';
                    }
                },

                validateMassAction() {
                    if (!this.applied.massActions.indices.length) {
                        this.$emitter.emit('add-flash', { type: 'warning', message: 'No records have been selected.' });

                        return false;
                    }

                    if (!this.applied.massActions.meta.action) {
                        this.$emitter.emit('add-flash', { type: 'warning', message: 'You must select a mass action.' });

                        return false;
                    }

                    if (
                        this.applied.massActions.meta.action?.options?.length &&
                        this.applied.massActions.value === null
                    ) {
                        this.$emitter.emit('add-flash', { type: 'warning', message: 'You must select a mass action\'s option.' });

                        return false;
                    }

                    return true;
                },

                performMassAction(currentAction, currentOption = null) {
                    this.applied.massActions.meta.action = currentAction;

                    if (currentOption) {
                        this.applied.massActions.value = currentOption.value;
                    }

                    if (!this.validateMassAction()) {
                        return;
                    }

                    const {
                        action
                    } = this.applied.massActions.meta;

                    const method = action.method.toLowerCase();

                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            switch (method) {
                                case 'post':
                                case 'put':
                                case 'patch':
                                    this.$axios[method](action.url, {
                                            indices: this.applied.massActions.indices,
                                            value: this.applied.massActions.value,
                                        })
                                        .then(response => {
                                            this.$emitter.emit('add-flash', {
                                                type: 'success',
                                                message: response.data.message
                                            });

                                            this.get();
                                        })
                                        .catch((error) => {
                                            this.$emitter.emit('add-flash', {
                                                type: 'error',
                                                message: error.response.data.message
                                            });
                                        });

                                    break;

                                case 'delete':
                                    this.$axios[method](action.url, {
                                            indices: this.applied.massActions.indices
                                        })
                                        .then(response => {
                                            this.get();
                                        });

                                    break;

                                default:
                                    console.error('Method not supported.');

                                    break;
                            }
                        }
                    });
                },

                //=======================================================================================
                // Support for previous applied values in datagrids. All code is based on local storage.
                //=======================================================================================

                updateDatagrids() {
                    let datagrids = this.getDatagrids();

                    if (datagrids?.length) {
                        const currentDatagrid = datagrids.find(({
                            src
                        }) => src === this.src);

                        if (currentDatagrid) {
                            datagrids = datagrids.map(datagrid => {
                                if (datagrid.src === this.src) {
                                    return {
                                        ...datagrid,
                                        requestCount: ++datagrid.requestCount,
                                        available: this.available,
                                        applied: this.applied,
                                    };
                                }

                                return datagrid;
                            });
                        } else {
                            datagrids.push(this.getDatagridInitialProperties());
                        }
                    } else {
                        datagrids = [this.getDatagridInitialProperties()];
                    }

                    this.setDatagrids(datagrids);
                },

                getDatagridInitialProperties() {
                    return {
                        src: this.src,
                        requestCount: 0,
                        available: this.available,
                        applied: this.applied,
                    };
                },

                getDatagridsStorageKey() {
                    return 'datagrids';
                },

                getDatagrids() {
                    let datagrids = localStorage.getItem(
                        this.getDatagridsStorageKey()
                    );

                    return JSON.parse(datagrids) ?? [];
                },

                setDatagrids(datagrids) {
                    localStorage.setItem(
                        this.getDatagridsStorageKey(),
                        JSON.stringify(datagrids)
                    );
                },

                //================================================================
                // Remaining logic, will check.
                //================================================================

                // refactor when not in that much use case...
                performAction(action) {
                    const method = action.method.toLowerCase();

                    switch (method) {
                        case 'get':
                            window.location.href = action.url;

                            break;

                        case 'post':
                        case 'put':
                        case 'patch':
                        case 'delete':
                            this.$emitter.emit('open-confirm-modal', {
                                agree: () => {
                                    this.$axios[method](action.url)
                                        .then(response => {
                                            this.get();
                                        });
                                }
                            });

                            break;

                        default:
                            console.error('Method not supported.');

                            break;
                    }
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/datagrid/index.blade.php ENDPATH**/ ?>