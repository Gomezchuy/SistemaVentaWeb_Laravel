<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'isActive' => false,
    'position' => 'right',
    'width'    => '500px',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'isActive' => false,
    'position' => 'right',
    'width'    => '500px',
]); ?>
<?php foreach (array_filter(([
    'isActive' => false,
    'position' => 'right',
    'width'    => '500px',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-drawer
    <?php echo e($attributes); ?>

    is-active="<?php echo e($isActive); ?>"
    position="<?php echo e($position); ?>"
    width="<?php echo e($width); ?>"
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
            <div class="px-[25px] overflow-auto flex-1 max-sm:px-[15px]">
                <?php echo e($content); ?>

            </div>
        </template>
    <?php endif; ?>

    <?php if(isset($footer)): ?>
        <template v-slot:footer>
            <div class="pb-[30px]">
                <?php echo e($footer); ?>

            </div>
        </template>
    <?php endif; ?>
</v-drawer>

<?php if (! $__env->hasRenderedOnce('8db6cd8d-0b5e-43c3-894a-ff7956a6a1dc')): $__env->markAsRenderedOnce('8db6cd8d-0b5e-43c3-894a-ff7956a6a1dc');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-drawer-template">
        <div>
            <!-- Toggler -->
            <div @click="open">
                <slot name="toggle">
                    <?php echo app('translator')->get('admin::app.components.drawer.default-toggle'); ?>
                </slot>
            </div>

            <!-- Overlay -->
            <transition
                tag="div"
                name="drawer-overlay"
                enter-class="ease-out duration-300"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-class="ease-in duration-200"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    class="fixed inset-0  bg-gray-500 bg-opacity-50 transition-opacity z-[1]"
                    v-show="isOpen"
                ></div>
            </transition>

            <!-- Content -->
            <transition
                tag="div"
                name="drawer"
                :enter-from-class="enterFromLeaveToClasses"
                enter-active-class="transform transition ease-in-out duration-200"
                enter-to-class="translate-x-0"
                leave-from-class="translate-x-0"
                leave-active-class="transform transition ease-in-out duration-200"
                :leave-to-class="enterFromLeaveToClasses"
            >
                <div
                    class="fixed z-[1000] bg-white overflow-hidden max-sm:!w-full"
                    :class="{
                        'inset-x-0 top-0': position == 'top',
                        'inset-x-0 bottom-0': position == 'bottom',
                        'inset-y-0 ltr:right-0 rtl:left-0': position == 'right',
                        'inset-y-0 ltr:left-0 rtl:right-0': position == 'left'
                    }"
                    :style="'width:' + width"
                    v-show="isOpen"
                >
                    <div class="w-full h-full overflow-auto bg-white pointer-events-auto">
                        <div class="flex flex-col h-full w-full">
                            <div class="flex-1 min-h-0 min-w-0 overflow-auto">
                                <div class="flex flex-col h-full">
                                    <div class="grid gap-y-[10px] p-[25px] pb-[20px] max-sm:px-[15px]">
                                        <!-- Content Slot -->
                                        <slot name="header"></slot>

                                        <div class="absolute top-5 ltr:right-5 rtl:left-5">
                                            <span
                                                class="icon-cancel text-[30px] cursor-pointer"
                                                @click="close"
                                            >
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Content Slot -->
                                    <slot name="content"></slot>

                                    <!-- Footer Slot -->
                                    <slot name="footer"></slot>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </script>

    <script type="module">
        app.component('v-drawer', {
            template: '#v-drawer-template',

            props: [
                'isActive',
                'position',
                'width'
            ],

            data() {
                return {
                    isOpen: this.isActive,
                };
            },

            watch: {
                isActive: function(newVal, oldVal) {
                    this.isOpen = newVal;
                }
            },

            computed: {
                enterFromLeaveToClasses() {
                    if (this.position == 'top') {
                        return '-translate-y-full';
                    } else if (this.position == 'bottom') {
                        return 'translate-y-full';
                    } else if (this.position == 'left') {
                        return 'ltr:-translate-x-full rtl:translate-x-full';
                    } else if (this.position == 'right') {
                        return 'ltr:translate-x-full rtl:-translate-x-full';
                    }
                }
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
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/drawer/index.blade.php ENDPATH**/ ?>