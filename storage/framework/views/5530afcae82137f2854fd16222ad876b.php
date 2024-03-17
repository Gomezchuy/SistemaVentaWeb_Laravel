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
        <?php echo app('translator')->get('admin::app.customers.reviews.index.title'); ?>
     <?php $__env->endSlot(); ?>

    <div class="flex  gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="py-[11px] text-[20px] text-gray-800 dark:text-white font-bold">
            <?php echo app('translator')->get('admin::app.customers.reviews.index.title'); ?>
        </p>
    </div>

    <?php echo view_render_event('admin.customers.reviews.edit.before'); ?>


    <v-review-edit-drawer></v-review-edit-drawer>

    <?php echo view_render_event('admin.customers.groups.edit.after'); ?>


    <?php if (! $__env->hasRenderedOnce('b76869e3-ea5f-4499-aeb2-bef499eafd62')): $__env->markAsRenderedOnce('b76869e3-ea5f-4499-aeb2-bef499eafd62');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-review-edit-drawer-template">

            <?php echo view_render_event('admin.customers.reviews.list.before'); ?>


            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.index','data' => ['src' => ''.e(route('admin.customers.customers.review.index')).'','isMultiRow' => true,'ref' => 'review_data']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::datagrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(route('admin.customers.customers.review.index')).'','isMultiRow' => true,'ref' => 'review_data']); ?>
                <?php 
                    $hasPermission = bouncer()->hasPermission('customers.reviews.mass-update') || bouncer()->hasPermission('customers.reviews.mass-delete');
                ?>

                <!-- Datagrid Header -->
                <template #header="{ columns, records, sortPage, selectAllRecords, applied, isLoading }">
                    <template v-if="! isLoading">
                        <div class="row grid grid-rows-1 grid-cols-[2fr_1fr_minmax(150px,_4fr)_0.5fr] items-center px-[16px] py-[10px] border-b-[1px] dark:border-gray-800">
                            <div
                                class="flex gap-[10px] items-center"
                                v-for="(columnGroup, index) in [['customer_full_name', 'product_name', 'product_review_status'], ['rating', 'created_at', 'product_review_id'], ['title', 'comment']]"
                            >
                                <?php if($hasPermission): ?>
                                    <label
                                        class="flex gap-[4px] w-max items-center cursor-pointer select-none"
                                        for="mass_action_select_all_records"
                                        v-if="! index"
                                    >
                                        <input 
                                            type="checkbox" 
                                            name="mass_action_select_all_records"
                                            id="mass_action_select_all_records"
                                            class="hidden peer"
                                            :checked="['all', 'partial'].includes(applied.massActions.meta.mode)"
                                            @change="selectAllRecords"
                                        >
                            
                                        <span
                                            class="icon-uncheckbox cursor-pointer rounded-[6px] text-[24px]"
                                            :class="[
                                                applied.massActions.meta.mode === 'all' ? 'peer-checked:icon-checked peer-checked:text-blue-600' : (
                                                    applied.massActions.meta.mode === 'partial' ? 'peer-checked:icon-checkbox-partial peer-checked:text-blue-600' : ''
                                                ),
                                            ]"
                                        >
                                        </span>
                                    </label>
                                <?php endif; ?>

                                <!-- Product Name, Review Status -->
                                <p class="text-gray-600 dark:text-gray-300">
                                    <span class="[&>*]:after:content-['_/_']">
                                        <template v-for="column in columnGroup">
                                            <span
                                                class="after:content-['/'] last:after:content-['']"
                                                :class="{
                                                    'text-gray-800 dark:text-white font-medium': applied.sort.column == column,
                                                    'cursor-pointer hover:text-gray-800 dark:hover:text-white': columns.find(columnTemp => columnTemp.index === column)?.sortable,
                                                }"
                                                @click="
                                                    columns.find(columnTemp => columnTemp.index === column)?.sortable ? sortPage(columns.find(columnTemp => columnTemp.index === column)): {}
                                                "
                                            >
                                                {{ columns.find(columnTemp => columnTemp.index === column)?.label }}
                                            </span>
                                        </template>
                                    </span>

                                    <i
                                        class="ltr:ml-[5px] rtl:mr-[5px] text-[16px] text-gray-800 dark:text-white align-text-bottom"
                                        :class="[applied.sort.order === 'asc' ? 'icon-down-stat': 'icon-up-stat']"
                                        v-if="columnGroup.includes(applied.sort.column)"
                                    ></i>
                                </p>
                            </div>
                        </div>
                    </template>               

                    <!-- Datagrid Head Shimmer -->
                    <template v-else>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.head','data' => ['isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>
                </template>

                <template #body="{ columns, records, setCurrentSelectionMode, applied, isLoading, performAction }">
                    <template v-if="! isLoading">
                        <div
                            class="row grid grid-cols-[2fr_1fr_minmax(150px,_4fr)_0.5fr] px-[16px] py-[10px] border-b-[1px] dark:border-gray-800 transition-all hover:bg-gray-50 dark:hover:bg-gray-950"
                            v-for="record in records"
                        >
                            <!-- Name, Product, Description -->
                            <div class="flex gap-[10px]">
                                <?php if($hasPermission): ?>
                                    <input 
                                        type="checkbox" 
                                        :name="`mass_action_select_record_${record.product_review_id}`"
                                        :id="`mass_action_select_record_${record.product_review_id}`"
                                        :value="record.product_review_id"
                                        class="hidden peer"
                                        v-model="applied.massActions.indices"
                                        @change="setCurrentSelectionMode"
                                    >
                        
                                    <label 
                                        class="icon-uncheckbox rounded-[6px] text-[24px] cursor-pointer peer-checked:icon-checked peer-checked:text-blue-600"
                                        :for="`mass_action_select_record_${record.product_review_id}`"
                                    ></label>
                                <?php endif; ?>

                                <div class="flex flex-col gap-[6px]">
                                    <p
                                        class="text-[16px] text-gray-800 dark:text-white font-semibold"
                                        v-text="record.customer_full_name"
                                    >
                                    </p>
                                    <p
                                        class="text-gray-600 dark:text-gray-300"
                                        v-text="record.product_name"
                                    >
                                    </p>

                                    <p v-html="record.product_review_status"></p>
                                </div>
                            </div>

                            <!-- Rating, Date, Id Section -->
                            <div class="flex flex-col gap-[6px]">
                                <div class="flex">
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.star-rating.index','data' => ['isEditable' => false,':value' => 'record.rating']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),':value' => 'record.rating']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                </div>

                                <p
                                    class="text-gray-600 dark:text-gray-300"
                                    v-text="record.created_at"
                                >
                                </p>

                                <p
                                    class="text-gray-600 dark:text-gray-300"
                                >
                                    {{ "<?php echo app('translator')->get('admin::app.customers.reviews.index.datagrid.review-id'); ?>".replace(':review_id', record.product_review_id) }}
                                </p>
                            </div>

                            <!-- Title, Description -->
                            <div class="flex flex-col gap-[6px]">
                                <p
                                    class="text-[16px] text-gray-800 dark:text-white font-semibold"
                                    v-text="record.title"
                                >
                                </p>

                                <p
                                    class="text-gray-600 dark:text-gray-300"
                                    v-text="record.comment"
                                >
                                </p>
                            </div>

                            <div class="flex gap-[5px] place-content-end items-center self-center">
                                <!-- Review Delete Button -->
                                <a @click="performAction(record.actions.find(action => action.method === 'DELETE'))">
                                    <span
                                        :class="record.actions.find(action => action.method === 'DELETE')?.icon"
                                        class="text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] rounded-[6px] cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800"
                                    >
                                    </span>
                                </a>

                                <!-- View Button -->
                                <a
                                    v-if="record.actions.find(action => action.title === 'Edit')"
                                    @click="edit(record.actions.find(action => action.title === 'Edit')?.url)"
                                >
                                    <span class="icon-sort-right text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] rounded-[6px] cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </template>

                    <!-- Datagrid Body Shimmer -->
                    <template v-else>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.body','data' => ['isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>
                </template>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php echo view_render_event('admin.customers.reviews.list.after'); ?>


            <!-- Drawer content -->
            <div class=" flex flex-col gap-[8px] flex-1 max-xl:flex-auto">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['vSlot' => '{ meta, errors, handleSubmit }','as' => 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-slot' => '{ meta, errors, handleSubmit }','as' => 'div']); ?>
                    <form
                        @submit="handleSubmit($event, update)"
                        ref="reviewCreateForm"
                    >
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['ref' => 'review']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'review']); ?>
                            <!-- Drawer Header -->
                             <?php $__env->slot('header', null, []); ?> 
                                <div class="flex justify-between items-center">
                                    <p class="text-[20px] font-medium dark:text-white">
                                        <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.title'); ?>
                                    </p>
                
                                    <button class="mr-[45px] primary-button">
                                        <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.save-btn'); ?>
                                    </button>
                                </div>
                             <?php $__env->endSlot(); ?>

                            <!-- Drawer Content -->
                             <?php $__env->slot('content', null, []); ?> 
                                <div class="flex flex-col gap-[16px] px-[5px] py-[10px]">
                                    <div class="grid grid-cols-2 gap-[16px]">
                                        <div class="">
                                            <!-- Customer Name -->
                                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                                <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.customer'); ?>
                                            </p>

                                            <p 
                                                class="text-gray-800 font-semibold dark:text-white" 
                                                v-text="review.name !== '' ? review.name : 'N/A'"
                                            >
                                            </p>
                                        </div>

                                        <div class="">
                                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                                <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.product'); ?>
                                            </p>

                                            <p 
                                                class="text-gray-800 font-semibold dark:text-white" 
                                                v-text="review.product.name"
                                            >
                                            </p>
                                        </div>
                
                                        <div class="">
                                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                                <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.id'); ?>
                                            </p>

                                            <p 
                                                class="text-gray-800 font-semibold dark:text-white" 
                                                v-text="review.id"
                                            >
                                            </p>
                                        </div>
                
                                        <div class="">
                                            <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                                <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.date'); ?>
                                            </p>

                                            <p 
                                                class="text-gray-800 font-semibold dark:text-white" 
                                                v-text="review.date"
                                            >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'hidden','name' => 'id',':value' => 'review.id','rules' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'hidden','name' => 'id',':value' => 'review.id','rules' => 'required']); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                                <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.status'); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'select','name' => 'status',':value' => 'review.status','rules' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'select','name' => 'status',':value' => 'review.status','rules' => 'required']); ?>
                                                <option value="approved" >
                                                    <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.approved'); ?>
                                                </option>
                
                                                <option value="disapproved">
                                                    <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.disapproved'); ?>
                                                </option>
                
                                                <option value="pending">
                                                    <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.pending'); ?>
                                                </option>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'status']); ?>
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
                                    </div>
                
                                    <div class="w-full ">
                                        <p class="text-gray-600 dark:text-gray-300 font-semibold">
                                            <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.rating'); ?> 
                                        </p>

                                        <div class="flex">
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.star-rating.index','data' => ['isEditable' => false,':value' => 'review.rating']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),':value' => 'review.rating']); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                
                                    <div class="w-full">
                                        <p class="block text-[12px] text-gray-800 dark:text-white font-medium leading-[24px]">
                                            <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.review-title'); ?> 
                                        </p>

                                        <p 
                                            class="text-gray-800 font-semibold dark:text-white" 
                                            v-text="review.title"
                                        >
                                        </p>
                                    </div>
                
                                    <div class="w-full">
                                        <p class="block text-[12px] text-gray-600 dark:text-gray-300 font-semibold leading-[24px]">
                                            <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.review-comment'); ?>     
                                        </p>

                                        <p 
                                            class="text-gray-800 dark:text-white" 
                                            v-text="review.comment"
                                        >
                                        </p>
                                    </div>

                                    <div
                                        class="w-full"
                                        v-if="review.images.length"
                                    >
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php echo app('translator')->get('admin::app.customers.reviews.index.edit.images'); ?>     
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    
                                        <div class="flex flex-wrap gap-4">
                                            <div v-for="image in review.images" :key="image.id">
                                                <img
                                                    v-if="image.type === 'image'"
                                                    class="h-[60px] w-[60px] rounded-[4px]"
                                                    :src="image.url"
                                                    alt="Image"
                                                />

                                                <video
                                                    v-else
                                                    class="h-[60px] w-[60px] rounded-[4px]"
                                                    controls
                                                    autoplay
                                                >
                                                    <source
                                                        :src="image.url"
                                                        type="video/mp4"
                                                    >
                                                </video>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </form>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
        </script>

        <script type="module">
            app.component('v-review-edit-drawer', {
                template: '#v-review-edit-drawer-template',

                data() {
                    return {
                        review: {},
                    }
                },

                methods: {
                    edit(url) {
                        this.$axios.get(url)
                            .then((response) => {
                                this.$refs.review.open(),

                                this.review = response.data.data
                            })
                            .catch(error => {
                                if (error.response.status ==422) {
                                    setErrors(error.response.data.errors);
                                }
                            });
                   
                    },

                    update(params) {
                        let formData = new FormData(this.$refs.reviewCreateForm);

                        formData.append('_method', 'put');

                        this.$axios.post(`<?php echo e(route('admin.customers.customers.review.update', '')); ?>/${params.id}`, formData)
                            .then((response) => {
                                this.$refs.review.close();

                                this.$refs.review_data.get();

                                this.$emitter.emit('add-flash', { type: 'success', message: 'Review Updated Successfully' });
                            })
                            .catch(error => {
                                if (error.response.status == 422) {
                                    setErrors(error.response.data.errors);
                                }
                            });
                    },
                }
            })
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/customers/reviews/index.blade.php ENDPATH**/ ?>