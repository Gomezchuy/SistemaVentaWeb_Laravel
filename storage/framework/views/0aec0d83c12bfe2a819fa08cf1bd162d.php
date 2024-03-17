<template v-if="isLoading">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.datagrid.toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.datagrid.toolbar'); ?>
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
    <div class="mt-[28px] flex items-center justify-between gap-[16px] max-md:flex-wrap">
        <!-- Left Toolbar -->
        <div class="flex gap-x-[4px]">
            <!-- Mass Actions Panel -->
            <div
                class="flex w-full items-center gap-x-[4px]"
                v-if="applied.massActions.indices.length"
            >
                <!-- Mass Action Dropdown -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <!-- Dropdown Toggler -->
                     <?php $__env->slot('toggle', null, []); ?> 
                        <button class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border border-gray-300 bg-white px-[10px] py-[6px] text-center leading-[24px] text-gray-600 transition-all marker:shadow hover:border-gray-400 focus:border-gray-400 focus:ring-black">
                            <span>
                                <?php echo app('translator')->get('shop::app.components.datagrid.toolbar.mass-actions.select-action'); ?>
                            </span>

                            <span class="icon-sort-down text-[24px]"></span>
                        </button>
                     <?php $__env->endSlot(); ?>

                    <!-- Dropdown Content -->
                     <?php $__env->slot('menu', null, ['class' => 'border-gray-300 !p-0 shadow-[0_5px_20px_rgba(0,0,0,0.15)]']); ?> 
                        <template v-for="massAction in available.massActions">
                            <li
                                class="group/item relative overflow-visible"
                                v-if="massAction?.options?.length"
                            >
                                <a
                                    class="whitespace-no-wrap flex cursor-not-allowed justify-between gap-[5px] rounded-t px-4 py-2 hover:bg-gray-100"
                                    href="javascript:void(0);"
                                >
                                    <i
                                        class="text-[24px]"
                                        :class="massAction.icon"
                                        v-if="massAction?.icon"
                                    >
                                    </i>

                                    <span>
                                        {{ massAction.title }}
                                    </span>

                                    <i class="icon-arrow-right !icon-arrow-left text-[24px]"></i>
                                </a>

                                <ul class="absolute left-full top-0 z-10 hidden w-max min-w-[150px] rounded-[4px] border border-gray-300 bg-white shadow-[0_5px_20px_rgba(0,0,0,0.15)] group-hover/item:block">
                                    <li v-for="option in massAction.options">
                                        <a
                                            class="whitespace-no-wrap block rounded-t px-4 py-2 hover:bg-gray-100"
                                            href="javascript:void(0);"
                                            v-text="option.name"
                                            @click="performMassAction(massAction, option)"
                                        >
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li v-else>
                                <a
                                    class="whitespace-no-wrap flex gap-[5px] rounded-b px-4 py-2 hover:bg-gray-100"
                                    href="javascript:void(0);"
                                    @click="performMassAction(massAction)"
                                >
                                    <i
                                        class="text-[24px]"
                                        :class="massAction.icon"
                                        v-if="massAction?.icon"
                                    >
                                    </i>

                                    {{ massAction.title }}
                                </a>
                            </li>
                        </template>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <div class="pl-[10px]">
                    <p class="text-[14px] font-light text-gray-800">
                        <!-- Need to manage this translation. -->
                        {{ applied.massActions.indices.length }} of {{ available.meta.total }} Selected
                    </p>
                </div>
            </div>

            <!-- Search Panel -->
            <div
                class="flex w-full items-center gap-x-[4px]"
                v-else
            >
                <!-- Search Panel -->
                <div class="flex max-w-[445px] items-center max-sm:w-full max-sm:max-w-full">
                    <div class="relative w-full">
                        <input
                            type="text"
                            name="search"
                            class="rounded-lg border border-gray-300 bg-white px-3 py-2 text-[15px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400"
                            :value="getAppliedColumnValues('all')"
                            placeholder="<?php echo app('translator')->get('shop::app.components.datagrid.toolbar.search.title'); ?>"
                            @keyup.enter="filterPage"
                        >

                        <div class="icon-search pointer-events-none absolute right-[10px] top-[8px] flex items-center text-[22px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Toolbar -->
        <div class="flex gap-x-[16px]">
            <!-- Items Per Page Dropdown -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'bottom-left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-left']); ?>
                <!-- Dropdown Toggler -->
                 <?php $__env->slot('toggle', null, []); ?> 
                    <button class="flex justify-between items-center gap-[15px] max-w-[200px] w-full pl-[15px] pr-[12px] py-[7px] rounded-lg bg-white border border-[#E9E9E9] text-[14px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pr-[10px] max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">
                        <span v-text="applied.pagination.perPage"></span>

                        <span class="icon-arrow-down text-[24px]"></span>
                    </button>
                 <?php $__env->endSlot(); ?>

                <!-- Dropdown Content -->
                 <?php $__env->slot('menu', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.menu.item','data' => ['vFor' => 'perPageOption in available.meta.per_page_options','vText' => 'perPageOption','@click' => 'changePerPageOption(perPageOption)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => 'perPageOption in available.meta.per_page_options','v-text' => 'perPageOption','@click' => 'changePerPageOption(perPageOption)']); ?>
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

            <!-- Filters Activation Button -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.drawer.index','data' => ['width' => '350px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '350px']); ?>
                 <?php $__env->slot('toggle', null, []); ?> 
                    <button class="flex justify-between items-center gap-[15px] max-w-[200px] w-full pl-[12px] pr-[15px] py-[7px] rounded-lg bg-white border border-[#E9E9E9] text-[14px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pr-[10px] max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">
                        <span class="flex justify-between items-center gap-[5px]">
                            <span class="icon-filter text-[24px]"></span>

                            <?php echo app('translator')->get('shop::app.components.datagrid.toolbar.filter.title'); ?>
                        </span>
                    </button>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('header', null, ['class' => 'border-b-[1px] border-[#E9E9E9]']); ?> 
                    <?php echo app('translator')->get('shop::app.components.datagrid.filters.title'); ?>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.datagrid.filters','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::datagrid.filters'); ?>
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
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </div>
</template>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/datagrid/toolbar.blade.php ENDPATH**/ ?>