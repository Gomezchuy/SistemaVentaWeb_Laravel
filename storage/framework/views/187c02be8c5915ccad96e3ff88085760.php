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
        <?php echo app('translator')->get('shop::app.customers.account.profile.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <?php $__env->startSection('breadcrumbs'); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'profile']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <div class="flex justify-between items-center">
        <h2 class="text-[26px] font-medium">
            <?php echo app('translator')->get('shop::app.customers.account.profile.title'); ?>
        </h2>

        <a
            href="<?php echo e(route('shop.customers.account.profile.edit')); ?>"
            class="secondary-button py-[12px] px-[20px] border-[#E9E9E9] font-normal"
        >
            <?php echo app('translator')->get('shop::app.customers.account.profile.edit'); ?>
        </a>
    </div>

    
    <div class="grid grid-cols-1 gap-y-[25px] mt-[30px]">
        <div class="grid grid-cols-[2fr_3fr] w-full px-[30px] py-[12px] border-b-[1px] border-[#E9E9E9]">
            <p class="text-[14px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.profile.first-name'); ?>
            </p>

            <p class="text-[14px] text-[#6E6E6E] font-medium">
                <?php echo e($customer->first_name); ?>

            </p>
        </div>

        <div class="grid grid-cols-[2fr_3fr] w-full px-[30px] py-[12px] border-b-[1px] border-[#E9E9E9]">
            <p class="text-[14px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.profile.last-name'); ?>
            </p>

            <p class="text-[14px] font-medium text-[#6E6E6E]">
                <?php echo e($customer->last_name); ?>

            </p>
        </div>

        <div class="grid grid-cols-[2fr_3fr] w-full px-[30px] py-[12px] border-b-[1px] border-[#E9E9E9]">
            <p class="text-[14px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.profile.gender'); ?>
            </p>

            <p class="text-[14px] text-[#6E6E6E] font-medium">
                <?php echo e($customer->gender ?? '-'); ?>

            </p>
        </div>

        <div class="grid grid-cols-[2fr_3fr] w-full px-[30px] py-[12px] border-b-[1px] border-[#E9E9E9]">
            <p class="text-[14px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.profile.dob'); ?>
            </p>

            <p class="text-[14px] text-[#6E6E6E] font-medium">
                <?php echo e($customer->date_of_birth ?? '-'); ?>

            </p>
        </div>

        <div class="grid grid-cols-[2fr_3fr] w-full px-[30px] py-[12px] border-b-[1px] border-[#E9E9E9]">
            <p class="text-[14px] font-medium">
                <?php echo app('translator')->get('shop::app.customers.account.profile.email'); ?>
            </p>

            <p class="text-[14px] text-[#6E6E6E] font-medium">
                <?php echo e($customer->email); ?>

            </p>
        </div>

        <?php echo view_render_event('bagisto.shop.customers.account.profile.delete.before'); ?>


        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.modal.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('toggle', null, []); ?> 
                <div
                    class="primary-button py-[11px] px-[43px] rounded-[18px]"
                >
                    <?php echo app('translator')->get('shop::app.customers.account.profile.delete-profile'); ?>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('header', null, []); ?> 
                <h2 class="text-[25px] font-medium max-sm:text-[22px]">
                    <?php echo app('translator')->get('shop::app.customers.account.profile.enter-password'); ?>
                </h2>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.index','data' => ['action' => ''.e(route('shop.customers.account.profile.destroy')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('shop.customers.account.profile.destroy')).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <div class="p-[30px] bg-white">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.control','data' => ['type' => 'password','name' => 'password','class' => 'py-[20px] px-[25px]','rules' => 'required','placeholder' => 'Enter your password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','name' => 'password','class' => 'py-[20px] px-[25px]','rules' => 'required','placeholder' => 'Enter your password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.error','data' => ['class' => ' text-left','controlName' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ' text-left','control-name' => 'password']); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <div class="p-[30px] bg-white mt-[20px]">
                        <button
                            type="submit"
                            class="primary-button flex py-[11px] px-[43px] rounded-[18px] max-sm:text-[14px] max-sm:px-[25px]"
                        >
                            <?php echo app('translator')->get('shop::app.customers.account.profile.delete'); ?>
                        </button>
                    </div>
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

        <?php echo view_render_event('bagisto.shop.customers.account.profile.delete.after'); ?>


    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/customers/account/profile/index.blade.php ENDPATH**/ ?>