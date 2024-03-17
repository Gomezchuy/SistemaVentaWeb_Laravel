
<v-coupon 
    :is-coupon-applied="cart.coupon_code"
    :sub-total="cart.base_grand_total"
>
</v-coupon>

<?php if (! $__env->hasRenderedOnce('e4bf0191-a0a3-4708-a69b-d744871ee8d6')): $__env->markAsRenderedOnce('e4bf0191-a0a3-4708-a69b-d744871ee8d6');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-coupon-template">
        <div class="flex justify-between text-right">
            <p class="text-[16px] max-sm:text-[14px] max-sm:font-normal">
                {{ isCouponApplied ? "<?php echo app('translator')->get('shop::app.checkout.cart.coupon.applied'); ?>" : "<?php echo app('translator')->get('shop::app.checkout.cart.coupon.discount'); ?>" }}
            </p>

            <p class="text-[16px] font-medium max-sm:text-[14px]">
                <!-- Apply coupon modal -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.modal.index','data' => ['ref' => 'couponModel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'couponModel']); ?>
                    <!-- Modal Toggler -->
                     <?php $__env->slot('toggle', null, []); ?> 
                        <span 
                            class="text-[#0A49A7] cursor-pointer" 
                            v-if="! isCouponApplied"
                        >
                            <?php echo app('translator')->get('shop::app.checkout.cart.coupon.apply'); ?>
                        </span>
                     <?php $__env->endSlot(); ?>

                    <!-- Modal Header -->
                     <?php $__env->slot('header', null, []); ?> 
                        <h2 class="text-[25px] font-medium max-sm:text-[22px]">
                            <?php echo app('translator')->get('shop::app.checkout.cart.coupon.apply'); ?>
                        </h2>
                     <?php $__env->endSlot(); ?>

                    <!-- Modal Contentd -->
                     <?php $__env->slot('content', null, []); ?> 
                        <!-- Apply Coupon Form -->
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.index','data' => ['vSlot' => '{ meta, errors, handleSubmit }','as' => 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-slot' => '{ meta, errors, handleSubmit }','as' => 'div']); ?>
                            <!-- Apply coupon form -->
                            <form @submit="handleSubmit($event, applyCoupon)">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.control','data' => ['type' => 'text','name' => 'code','class' => 'py-[20px] px-[25px]','rules' => 'required','placeholder' => trans('shop::app.checkout.cart.coupon.enter-your-code'),'vModel' => 'code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'code','class' => 'py-[20px] px-[25px]','rules' => 'required','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.checkout.cart.coupon.enter-your-code')),'v-model' => 'code']); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.error','data' => ['class' => 'flex','controlName' => 'code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex','control-name' => 'code']); ?>
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

                                <!-- Coupon Form Action Container -->
                                <div class="p-[30px] bg-white mt-[20px]">
                                    <div class="flex justify-between items-center gap-[15px] flex-wrap">
                                        <p class="text-[14px] font-medium text-[#6E6E6E]">
                                            <?php echo app('translator')->get('shop::app.checkout.cart.coupon.subtotal'); ?>
                                        </p>

                                        <div class="flex gap-[30px] items-center flex-auto flex-wrap">
                                            <p 
                                                class="text-[30px] font-semibold max-sm:text-[22px]"
                                                v-text="subTotal"
                                            >
                                            </p>

                                            <button
                                                class="block flex-auto w-max py-[11px] px-[43px] bg-navyBlue rounded-[18px] text-white text-base font-medium text-center cursor-pointer max-sm:text-[14px] max-sm:px-[25px]"
                                                type="submit"
                                            >
                                               <?php echo app('translator')->get('shop::app.checkout.cart.coupon.button-title'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

                <!-- Applied Coupon Information Container -->
                <div 
                    class="flex justify-between items-center text-[12px] font-small "
                    v-if="isCouponApplied"
                >
                    <p 
                        class="text-[16px] font-medium cursor-pointer text-navyBlue"
                        title="<?php echo app('translator')->get('shop::app.checkout.cart.coupon.applied'); ?>"
                    >
                        "{{ isCouponApplied }}"
                    </p>

                    <span 
                        class="icon-cancel text-[30px] cursor-pointer"
                        title="<?php echo app('translator')->get('shop::app.checkout.cart.coupon.remove'); ?>"
                        @click="destroyCoupon"
                    >
                    </span>
                </div>
            </p>
        </div>
    </script>

    <script type="module">
        app.component('v-coupon', {
            template: '#v-coupon-template',
            
            props: ['isCouponApplied', 'subTotal'],

            data() {
                return {
                    coupons: [],

                    code: '',
                }
            },

            methods: {
                applyCoupon(params, { resetForm}) {
                    this.$axios.post("<?php echo e(route('shop.api.checkout.cart.coupon.apply')); ?>", params)
                        .then((response) => {
                            this.$parent.$parent.$refs.vCart.get();
                  
                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                            this.$refs.couponModel.toggle();

                            resetForm();
                        })
                        .catch((error) => {
                            if ([400, 422].includes(error.response.request.status)) {
                                this.$emitter.emit('add-flash', { type: 'warning', message: error.response.data.message });

                                this.$refs.couponModel.toggle();

                                return;
                            }

                            this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message });

                            this.$refs.couponModel.toggle();
                        });
                },

                destroyCoupon() {
                    this.$axios.delete("<?php echo e(route('shop.api.checkout.cart.coupon.remove')); ?>", {
                            '_token': "<?php echo e(csrf_token()); ?>"
                        })
                        .then((response) => {
                            this.$parent.$parent.$refs.vCart.get();

                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                        })
                        .catch(error => console.log(error));
                },
            }
        })
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/checkout/cart/coupon.blade.php ENDPATH**/ ?>