<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'isActive' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'isActive' => true,
]); ?>
<?php foreach (array_filter(([
    'isActive' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-accordion
    is-active="<?php echo e($isActive); ?>"
    <?php echo e($attributes); ?>

>
    <?php if(isset($header)): ?>
        <template v-slot:header>
            <?php echo e($header); ?>

        </template>
    <?php endif; ?>

    <?php if(isset($content)): ?>
        <template v-slot:content>
            <div>
                <?php echo e($content); ?>

            </div>
        </template>
    <?php endif; ?>
</v-accordion>

<?php if (! $__env->hasRenderedOnce('37e2da80-18e6-4fab-90d2-800136a67d19')): $__env->markAsRenderedOnce('37e2da80-18e6-4fab-90d2-800136a67d19');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-accordion-template">
        <div <?php echo e($attributes->merge(['class' => 'border-b-[1px] border-[#E9E9E9]'])); ?>>
            <div
                :class="`flex justify-between items-center py-[10px] cursor-pointer select-none ${isOpen ? 'active' : ''}`"
                @click="toggle"
            >
                <slot name="header">
                    <?php echo app('translator')->get('admin::app.components.accordion.default-content'); ?>

                </slot>

                <span :class="`text-[24px] ${isOpen ? 'icon-arrow-up' : 'icon-arrow-down'}`"></span>
            </div>

            <div class="z-10 bg-white rounded-lg" v-show="isOpen">
                <slot name="content">
                    <?php echo app('translator')->get('admin::app.components.accordion.default-content'); ?>
                </slot>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-accordion', {
            template: '#v-accordion-template',

            props: [
                'isActive',
            ],

            data() {
                return {
                    isOpen: this.isActive,
                };
            },

            methods: {
                toggle() {
                    this.isOpen = ! this.isOpen;

                    this.$emit('toggle', { isActive: this.isOpen });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/accordion/index.blade.php ENDPATH**/ ?>