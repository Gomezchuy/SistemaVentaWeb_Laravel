<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'text',
    'name' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'text',
    'name' => '',
]); ?>
<?php foreach (array_filter(([
    'type' => 'text',
    'name' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php switch($type):
    case ('hidden'): ?>
    <?php case ('text'): ?>
    <?php case ('email'): ?>
    <?php case ('password'): ?>
    <?php case ('number'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500 hover:border-red-500' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

            >
        </v-field>

        <?php break; ?>

    <?php case ('file'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500 hover:border-red-500' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

            >
        </v-field>

        <?php break; ?>

    <?php case ('color'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->except('class')); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
                v-bind="field"
                <?php echo e($attributes->except(['value'])->merge(['class' => 'w-full appearance-none border rounded-[6px] text-[14px] text-gray-600 transition-all hover:border-gray-400'])); ?>

            >
        </v-field>
        <?php break; ?>

    <?php case ('textarea'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <textarea
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500 hover:border-red-500' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

            >
            </textarea>
        </v-field>

        <?php if($attributes->get('tinymce', false) || $attributes->get(':tinymce', false)): ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tinymce.index','data' => ['selector' => 'textarea#' . $attributes->get('id')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tinymce'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['selector' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('textarea#' . $attributes->get('id'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php break; ?>

    <?php case ('date'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flat-picker.date','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input
                    name="<?php echo e($name); ?>"
                    v-bind="field"
                    :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500 hover:border-red-500' : '']"
                    <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

                    autocomplete="off"
                >
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </v-field>

        <?php break; ?>

    <?php case ('datetime'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flat-picker.datetime','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::flat-picker.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input
                    name="<?php echo e($name); ?>"
                    v-bind="field"
                    :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500 hover:border-red-500' : '']"
                    <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

                    autocomplete="off"
                >
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </v-field>
        <?php break; ?>

    <?php case ('select'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <select
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'custom-select block w-full py-2 px-3 shadow bg-white border border-[#E9E9E9] rounded-lg text-[16px] transition-all hover:border-gray-400 focus:border-gray-400'])); ?>

            >
                <option value="" selected disabled>Select</option>
                <?php echo e($slot); ?>

            </select>
        </v-field>

        <?php break; ?>

    <?php case ('multiselect'): ?>
        <v-field
            as="select"
            name="<?php echo e($name); ?>"
            :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex flex-col w-full min-h-[82px] py-2 px-3 bg-white border border-[#E9E9E9] rounded-[6px] text-[14px] text-gray-600 font-normal transition-all hover:border-gray-400'])); ?>

            multiple
        >
            <?php echo e($slot); ?>

        </v-field>

        <?php break; ?>

    <?php case ('checkbox'): ?>
        <v-field
            type="checkbox"
            name="<?php echo e($name); ?>"
            class="hidden"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="checkbox"
                name="<?php echo e($name); ?>"
                v-bind="field"
                class="sr-only peer"
                <?php echo e($attributes->except(['rules', 'label', ':label'])); ?>

            />
        </v-field>

        <label
            class="icon-uncheckbox text-[24px] peer-checked:icon-checked peer-checked:text-navyBlue cursor-pointer"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
        </label>

        <?php break; ?>

    <?php case ('radio'): ?>
        <v-field
            type="radio"
            name="<?php echo e($name); ?>"
            class="hidden"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="radio"
                name="<?php echo e($name); ?>"
                v-bind="field"
                class="sr-only peer"
                <?php echo e($attributes->except(['rules', 'label', ':label'])); ?>

            />
        </v-field>

        <label
            class="icon-radio-normal text-[24px] peer-checked:icon-radio-selected peer-checked:text-navyBlue cursor-pointer"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
        </label>

        <?php break; ?>

    <?php case ('switch'): ?>
        <label class="relative inline-flex items-center cursor-pointer">
            <v-field
                type="checkbox"
                name="<?php echo e($name); ?>"
                class="hidden"
                v-slot="{ field }"
                <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

            >
                <input
                    type="checkbox"
                    name="<?php echo e($name); ?>"
                    id="<?php echo e($name); ?>"
                    class="sr-only peer"
                    v-bind="field"
                    <?php echo e($attributes->except(['v-model', 'rules', ':rules', 'label', ':label'])); ?>

                />
            </v-field>

            <label
                class="rounded-full w-[36px] h-[20px] bg-gray-200 cursor-pointer peer-focus:ring-blue-300 after:bg-white after:border-gray-300 peer-checked:bg-navyBlue peer peer-checked:after:border-white peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] peer-focus:outline-none after:border after:rounded-full after:h-[16px] after:w-[16px] after:transition-all"
                for="<?php echo e($name); ?>"
            ></label>
        </label>

        <?php break; ?>

    <?php case ('image'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.index','data' => ['name' => ''.e($name).'',':class' => '[errors[\''.e($name).'\'] ? \'border border-red-500\' : \'\']','attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($name).'',':class' => '[errors[\''.e($name).'\'] ? \'border border-red-500\' : \'\']','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('custom'): ?>
        <v-field <?php echo e($attributes); ?>>
            <?php echo e($slot); ?>

        </v-field>
<?php endswitch; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/form/control-group/control.blade.php ENDPATH**/ ?>