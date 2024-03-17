<?php echo view_render_event('bagisto.shop.checkout.payment.method.before'); ?>


<v-payment-method ref="vPaymentMethod">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.payment-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.payment-method'); ?>
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
</v-payment-method>

<?php echo view_render_event('bagisto.shop.checkout.payment.method.after'); ?>


<?php if (! $__env->hasRenderedOnce('def30037-d0fc-416c-812c-9a8b4fa5cf77')): $__env->markAsRenderedOnce('def30037-d0fc-416c-812c-9a8b4fa5cf77');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-payment-method-template">
        <div class="mt-[30px] mb-[30px]">
            <template v-if="! isShowPaymentMethod && isPaymentMethodLoading">
                <!-- Payment Method shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.payment-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.payment-method'); ?>
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
    
            <template v-if="isShowPaymentMethod">
                <div>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.accordion.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('header', null, []); ?> 
                            <div class="flex justify-between items-center">
                                <h2 class="text-[26px] font-medium max-sm:text-[20px]">
                                    <?php echo app('translator')->get('shop::app.checkout.onepage.payment.payment-method'); ?>
                                </h2>
                            </div>
                         <?php $__env->endSlot(); ?>
        
                         <?php $__env->slot('content', null, []); ?> 
                            <div class="flex flex-wrap gap-[29px] mt-[30px]">
                                <div 
                                    class="relative max-sm:max-w-full max-sm:flex-auto cursor-pointer"
                                    v-for="(payment, index) in payment_methods"
                                >

                                    <?php echo view_render_event('bagisto.shop.checkout.payment-method.before'); ?>


                                    <input 
                                        type="radio" 
                                        name="payment[method]" 
                                        :value="payment.payment"
                                        :id="payment.method"
                                        class="hidden peer"    
                                        @change="store(payment)"
                                    >
        
                                    <label 
                                        :for="payment.method" 
                                        class="absolute ltr:right-[20px] rtl:left-[20px] top-[20px] icon-radio-unselect text-[24px] text-navyBlue peer-checked:icon-radio-select cursor-pointer"
                                    >
                                    </label>

                                    <label 
                                        :for="payment.method" 
                                        class="w-[190px] p-[20px] block border border-[#E9E9E9] rounded-[12px] max-sm:w-full cursor-pointer"
                                    >

                                        <img
                                            class="max-w-[55px] max-h-[45px]"
                                            :src="paymentImages[payment.method] || '<?php echo e(bagisto_asset('images/paypal.png')); ?>'"
                                            width="55"
                                            height="55"
                                            :alt="payment.method_title"
                                            :title="payment.method_title"
                                        >
                                        
                                        <p class="text-[14px] font-semibold mt-[5px]">
                                            {{ payment.method_title }}
                                        </p>
                                        
                                        <p class="text-[12px] font-medium mt-[10px]">
                                            {{ payment.description }}
                                        </p>
                                    </label>

                                    <?php echo view_render_event('bagisto.shop.checkout.payment-method.after'); ?>


                                    <!-- Todo implement the additionalDetails -->
                                    
                                </div>
                            </div>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-payment-method', {
            template: '#v-payment-method-template',

            data() {
                return {
                    paymentMethods: [],

                    paymentImages: {
                        moneytransfer: "<?php echo e(bagisto_asset('images/money-transfer.png')); ?>",
                        cashondelivery: "<?php echo e(bagisto_asset('images/cash-on-delivery.png')); ?>",
                    },

                    isShowPaymentMethod: false,

                    isPaymentMethodLoading: false,
                }
            },

            methods: {
                store(selectedPaymentMethod) {
                    this.$axios.post("<?php echo e(route('shop.checkout.onepage.payment_methods.store')); ?>", {
                            payment: selectedPaymentMethod
                        })
                        .then(response => {
                            this.$parent.$refs.vCartSummary.selectedPaymentMethod = selectedPaymentMethod;

                            if (response.data.cart) {
                                this.$parent.$refs.vCartSummary.canPlaceOrder = true;
                            }
                        })
                        .catch(error => console.log(error));
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/checkout/onepage/payment.blade.php ENDPATH**/ ?>