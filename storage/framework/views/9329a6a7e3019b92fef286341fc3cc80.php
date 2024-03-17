<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'isActive' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'isActive' => false,
]); ?>
<?php foreach (array_filter(([
    'isActive' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-modal
    is-active="<?php echo e($isActive); ?>"
    <?php echo e($attributes); ?>

>
    <?php if(isset($toggle)): ?>
        <template v-slot:toggle>
            <?php echo e($toggle); ?>

        </template>
    <?php endif; ?>

    <?php if(isset($header)): ?>
        <template v-slot:header>
            <?php echo e($header); ?>

        </template>
    <?php endif; ?>

    <?php if(isset($content)): ?>
        <template v-slot:content>
            <?php echo e($content); ?>

        </template>
    <?php endif; ?>
</v-modal>

<?php if (! $__env->hasRenderedOnce('7f4a73b4-47fc-4d68-9a46-2dc28e37c046')): $__env->markAsRenderedOnce('7f4a73b4-47fc-4d68-9a46-2dc28e37c046');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-modal-template">
        <div>
            <div @click="toggle">
                <slot name="toggle">
                </slot>
            </div>

            <transition
                tag="div"
                name="modal-overlay"
                enter-class="ease-out duration-300"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-class="ease-in duration-200"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity z-[1]"
                    v-show="isOpen"
                ></div>
            </transition>

            <transition
                tag="div"
                name="modal-content"
                enter-class="ease-out duration-300"
                enter-from-class="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                enter-to-class="opacity-100 translate-y-0 md:scale-100"
                leave-class="ease-in duration-200"
                leave-from-class="opacity-100 translate-y-0 md:scale-100"
                leave-to-class="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
            >
                <div
                    class="fixed inset-0 z-10 transform transition overflow-y-auto" v-show="isOpen"
                >
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="w-full max-w-[595px] z-[999] absolute left-[50%] top-[50%] bg-[#F5F5F5] max-md:w-[90%] -translate-x-[50%] -translate-y-[50%]">
                            <div>
                                <div class="flex gap-[20px] justify-between items-center p-[30px] bg-white border-b-[1px] border-[#E9E9E9]">
                                    <slot name="header">
                                        <?php echo app('translator')->get('admin::app.components.modal.default-header'); ?>
                                    </slot>

                                    <span
                                        class="icon-cancel text-[30px] cursor-pointer"
                                        @click="toggle"
                                    >
                                    </span>
                                </div>
                            </div>

                            <div>
                                <slot name="content">
                                    <?php echo app('translator')->get('admin::app.components.modal.default-content'); ?>
                                </slot>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </script>

    <script type="module">
        app.component('v-modal', {
            template: '#v-modal-template',

            props: ['isActive'],

            data() {
                return {
                    isOpen: this.isActive,
                };
            },

            methods: {
                toggle() {
                    this.isOpen = ! this.isOpen;

                    if (this.isOpen) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow ='scroll';
                    }

                    this.$emit('toggle', { isActive: this.isOpen });
                },

                open() {
                    this.isOpen = true;

                    document.body.style.overflow = 'hidden';

                    this.$emit('open', { isActive: this.isOpen });
                },

                close() {
                    this.isOpen = false;

                    document.body.style.overflow = 'auto';

                    this.$emit('close', { isActive: this.isOpen });
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/modal/index.blade.php ENDPATH**/ ?>