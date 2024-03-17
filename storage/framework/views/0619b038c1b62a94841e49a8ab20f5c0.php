<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'inputType' => 'checkbox'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'inputType' => 'checkbox'
]); ?>
<?php foreach (array_filter(([
    'inputType' => 'checkbox'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-tree-view 
    <?php echo e($attributes->except('input-type')); ?>

    input-type="<?php echo e($inputType); ?>"
>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.tree.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.tree'); ?>
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
</v-tree-view>

<?php if (! $__env->hasRenderedOnce('25fe1c55-6147-4b11-96c6-db4d66f1b35a')): $__env->markAsRenderedOnce('25fe1c55-6147-4b11-96c6-db4d66f1b35a');
$__env->startPush('scripts'); ?>
    
    <script type="module">
        app.component('v-tree-view',{
            name: 'v-tree-view',

            inheritAttrs: false,

            props: {
                inputType: {
                    type: String,
                    required: false,
                    default: 'checkbox'
                },

                nameField: {
                    type: String,
                    required: false,
                    default: 'permissions'
                },

                idField: {
                    type: String,
                    required: false,
                    default: 'id'
                },

                valueField: {
                    type: String,
                    required: false,
                    default: 'value'
                },

                captionField: {
                    type: String,
                    required: false,
                    default: 'name'
                },

                childrenField: {
                    type: String,
                    required: false,
                    default: 'children'
                },

                items: {
                    type: [Array, String, Object],
                    required: false,
                    default: () => ([])
                },

                behavior: {
                    type: String,
                    required: false,
                    default: 'reactive'
                },

                value: {
                    type: [Array, String, Object],
                    required: false,
                    default: () => ([])
                },

                fallbackLocale: {
                    type: String,
                    required: false
                },
            },

            data() {
                return {
                    finalValues: []
                }
            },

            computed: {
                savedValues () {
                    if(! this.value)
                        return [];

                    if(this.inputType == 'radio')
                        return [this.value];

                    return (typeof this.value == 'string') ? JSON.parse(this.value) : this.value;
                }
            },


            methods: {
                generateChildren () {
                    let childElements = [];

                    let items = (typeof this.items == 'string') ? JSON.parse(this.items) : this.items;

                    for (let key in items) {
                        childElements.push(this.generateTreeItem(items[key]));
                    }

                    return childElements;
                },

                generateTreeItem(item) {
                    return this.$h(this.$resolveComponent('v-tree-item'), {
                            items: item,
                            value: this.finalValues,
                            savedValues: this.savedValues,
                            nameField: this.nameField,
                            inputType: this.inputType,
                            captionField: this.captionField,
                            childrenField: this.childrenField,
                            valueField: this.valueField,
                            idField: this.idField,
                            behavior: this.behavior,
                            fallbackLocale: this.fallbackLocale,
                            onInputChange: (selection) => {
                                this.finalValues = selection;
                            },
                        })
                }
            },

            render () {
                return this.$h('div', {
                        class: [
                            'v-tree-container group',
                        ]
                    }, [this.generateChildren()]
                )
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>


<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.item'); ?>
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

<?php if($inputType == 'checkbox'): ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.checkbox','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.checkbox'); ?>
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
<?php else: ?> 
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.radio','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.radio'); ?>
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
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/tree/view.blade.php ENDPATH**/ ?>