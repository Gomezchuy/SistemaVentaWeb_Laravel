<?php switch($attribute->type):
    case ('text'): ?>
        <v-field
            type="text"
            name="<?php echo e($attribute->code); ?>"
            :rules="<?php echo e($attribute->validations); ?>"
            label="<?php echo e($attribute->admin_name); ?>"
            value="<?php echo e(old($attribute->code) ?: $product[$attribute->code]); ?>"
            v-slot="{ field }"
        >
            <input
                type="text"
                name="<?php echo e($attribute->code); ?>"
                id="<?php echo e($attribute->code); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($attribute->code); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                class="flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800"
                <?php if($attribute->code == 'url_key'): ?> v-slugify <?php endif; ?>
                <?php if($attribute->code == 'name'): ?> v-slugify-target:url_key="setValues" <?php endif; ?>
            >
        </v-field>

        <?php break; ?>

    <?php case ('price'): ?>
        <div class="relative">
            <span class="absolute ltr:left-[15px] rtl:right-[15px] top-[50%] -translate-y-[50%] text-gray-500 dark:text-gray-300 <?php echo e($attribute->code == 'price' ? 'text-[20px]' : ''); ?>">
                <?php echo e(core()->currencySymbol(core()->getBaseCurrencyCode())); ?>

            </span>

            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => $attribute->code,'id' => $attribute->code,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'','class' => 'ltr:pl-[30px] rtl:pr-[30px] ' . ($attribute->code == 'price' ? 'py-2 bg-gray-50 text-[20px] font-bold' : '')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('ltr:pl-[30px] rtl:pr-[30px] ' . ($attribute->code == 'price' ? 'py-2 bg-gray-50 text-[20px] font-bold' : ''))]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>

        <?php break; ?>

    <?php case ('textarea'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'textarea','name' => $attribute->code,'id' => $attribute->code,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'','tinymce' => (bool) $attribute->enable_wysiwyg]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'textarea','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'','tinymce' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((bool) $attribute->enable_wysiwyg)]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('date'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'date','name' => $attribute->code,'id' => $attribute->code,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'']); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('datetime'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'datetime','name' => $attribute->code,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'datetime','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'value' => ''.e(old($attribute->code) ?: $product[$attribute->code]).'']); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('select'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'select','name' => $attribute->code,'id' => $attribute->code,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'value' => old($attribute->code) ?: $product[$attribute->code]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'select','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old($attribute->code) ?: $product[$attribute->code])]); ?>
            <?php
                $selectedOption = old($attribute->code) ?: $product[$attribute->code];

                if ($attribute->code != 'tax_category_id') {
                    $options = $attribute->options()->orderBy('sort_order')->get();
                } else {
                    $options = app('Webkul\Tax\Repositories\TaxCategoryRepository')->all();
                }
            ?>

            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($option->id); ?>"
                    <?php echo e($selectedOption == $option->id ? 'selected' : ''); ?>

                >
                    <?php echo e($option->admin_name ?? $option->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('multiselect'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'multiselect','name' => $attribute->code . '[]','id' => $attribute->code . '[]',':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'multiselect','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '[]'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '[]'),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name)]); ?>
            <?php
                $selectedOption = old($attribute->code) ?: explode(',', $product[$attribute->code]);
            ?>

            <?php $__currentLoopData = $attribute->options()->orderBy('sort_order')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($option->id); ?>"
                    <?php echo e(in_array($option->id, $selectedOption) ? 'selected' : ''); ?>

                >
                    <?php echo e($option->admin_name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('checkbox'): ?>
        <?php
            $selectedOption = old($attribute->code) ?: explode(',', $product[$attribute->code]);
        ?>

        <?php $__currentLoopData = $attribute->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex gap-[10px] py-[6px] items-center">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'checkbox','name' => $attribute->code . '[]','value' => $option->id,'id' => $attribute->code . '_' . $option->id,'for' => $attribute->code . '_' . $option->id,':rules' => ''.e($attribute->validations).'','label' => $attribute->admin_name,'checked' => in_array($option->id, $selectedOption)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '[]'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($option->id),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '_' . $option->id),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '_' . $option->id),':rules' => ''.e($attribute->validations).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(in_array($option->id, $selectedOption))]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <p class="text-gray-600 dark:text-gray-300 font-semibold">
                    <?php echo e($option->admin_name); ?>

                </p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php break; ?>

    <?php case ('boolean'): ?>
        <?php $selectedValue = old($attribute->code) ?: $product[$attribute->code] ?>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'switch','name' => $attribute->code,'id' => $attribute->code,'value' => 1,'label' => $attribute->admin_name,'checked' => (boolean) $selectedValue]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'switch','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code),'value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->admin_name),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((boolean) $selectedValue)]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('image'): ?>
    <?php case ('file'): ?>
        <div class="flex gap-[10px]">
            <?php if($product[$attribute->code]): ?>
                <a
                    href="<?php echo e(route('admin.catalog.products.file.download', [$product->id, $attribute->id] )); ?>"
                    class="flex"
                >
                    <?php if($attribute->type == 'image'): ?>
                        <img
                            src="<?php echo e(Storage::url($product[$attribute->code])); ?>"
                            class="w-[45px] h-[45px] border dark:border-gray-800 rounded-[4px] overflow-hidden hover:border-gray-400"
                        />
                    <?php else: ?>
                        <div class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border border-transparent p-[6px] text-center text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:bg-gray-200 dark:hover:bg-gray-800 active:border-gray-300">
                            <i class="icon-down-stat text-[24px]"></i>
                        </div>
                    <?php endif; ?>
                </a>

                <input type="hidden" name="<?php echo e($attribute->code); ?>" value="<?php echo e($product[$attribute->code]); ?>"/>
            <?php endif; ?>

            <v-field
                type="text"
                class="w-full"
                name="<?php echo e($attribute->code); ?>"
                :rules="<?php echo e($attribute->validations); ?>"
                label="<?php echo e($attribute->admin_name); ?>"
                v-slot="{ handleChange, handleBlur }"
                value="<?php echo e(old($attribute->code) ?: $product[$attribute->code]); ?>"
            >
                <input
                    type="file"
                    name="<?php echo e($attribute->code); ?>"
                    id="<?php echo e($attribute->code); ?>"
                    :class="[errors['<?php echo e($attribute->code); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                    class="flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800"
                    @change="handleChange"
                    @blur="handleBlur"
                >
            </v-field>
        </div>

        <?php if($product[$attribute->code]): ?>
            <div class="flex gap-[10px] items-center mt-[10px]">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'checkbox','name' => $attribute->code . '[delete]','value' => '1','id' => $attribute->code . '_delete','for' => $attribute->code . '_delete']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '[delete]'),'value' => '1','id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '_delete'),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->code . '_delete')]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <p class="text-[14px] text-gray-600 dark:text-gray-300">
                    <?php echo app('translator')->get('admin::app.catalog.products.edit.remove'); ?>
                </p>
            </div>
        <?php endif; ?>

        <?php break; ?>

<?php endswitch; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/catalog/products/edit/controls.blade.php ENDPATH**/ ?>