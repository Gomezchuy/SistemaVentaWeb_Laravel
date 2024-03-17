<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title'      => '',
    'isSelected' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title'      => '',
    'isSelected' => false,
]); ?>
<?php foreach (array_filter(([
    'title'      => '',
    'isSelected' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-tab-item
    title="<?php echo e($title); ?>"
    is-selected="<?php echo e($isSelected); ?>"
    <?php echo e($attributes->merge(['class' => 'p-5 max-1180:px-[20px]'])); ?>

>
    <template v-slot>
        <?php echo e($slot); ?>

    </template>
</v-tab-item>

<?php if (! $__env->hasRenderedOnce('1cf8e4bc-54ba-426b-b0ff-20b9d2a52edf')): $__env->markAsRenderedOnce('1cf8e4bc-54ba-426b-b0ff-20b9d2a52edf');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-tab-item-template">
        <div
            v-if="isActive"
            class="animate-[on-fade_0.5s_ease-in-out]"
        >
            <slot></slot>
        </div>
    </script>

    <script type="module">
        app.component('v-tab-item', {
            template: '#v-tab-item-template',

            props: ['title', 'isSelected'],

            data() {
                return {
                    isActive: false
                }
            },

            mounted() {
                this.isActive = this.isSelected;

                /**
                 * On mounted, pushing element to its parents component.
                 */
                this.$parent.$data.tabs.push(this);
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/tabs/item.blade.php ENDPATH**/ ?>