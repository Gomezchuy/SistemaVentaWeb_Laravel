<?php echo view_render_event('bagisto.shop.checkout.shipping.method.before'); ?>


<v-shipping-method ref="vShippingMethod">
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.shipping-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.shipping-method'); ?>
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
</v-shipping-method>

<?php echo view_render_event('bagisto.shop.checkout.shipping.method.after'); ?>


<?php if (! $__env->hasRenderedOnce('ad457f82-2051-4818-b5bd-d4a733c6db69')): $__env->markAsRenderedOnce('ad457f82-2051-4818-b5bd-d4a733c6db69');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-shipping-method-template">
        <div class="mt-[30px]">
            <template v-if="! isShowShippingMethod && isShippingMethodLoading">
                <!-- Shipping Method Shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.shipping-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.shipping-method'); ?>
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

            <template v-if="isShowShippingMethod">
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
                                <?php echo app('translator')->get('shop::app.checkout.onepage.shipping.shipping-method'); ?>
                            </h2>
                        </div>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <div class="flex flex-wrap gap-[30px] mt-[30px]">
                            <div
                                class="relative max-w-[218px] max-sm:max-w-full max-sm:flex-auto select-none"
                                v-for="shippingMethod in shippingMethods"
                            >

                                <?php echo view_render_event('bagisto.shop.checkout.shipping-method.before'); ?>


                                <div v-for="rate in shippingMethod.rates">
                                    <input 
                                        type="radio"
                                        name="shipping_method"
                                        :id="rate.method"
                                        :value="rate.method"
                                        class="hidden peer"
                                        @change="store(rate.method)"
                                    >

                                    <label 
                                        class="icon-radio-unselect absolute ltr:right-[20px] rtl:left-[20px] top-[20px] text-[24px] text-navyBlue peer-checked:icon-radio-select cursor-pointer"
                                        :for="rate.method"
                                    >
                                    </label>

                                    <label 
                                        class="block p-[20px] border border-[#E9E9E9] rounded-[12px] cursor-pointer"
                                        :for="rate.method"
                                    >
                                        <span class="icon-flate-rate text-[60px] text-navyBlue"></span>

                                        <p class="text-[25px] mt-[5px] font-semibold max-sm:text-[20px]">
                                            {{ rate.base_formatted_price }}
                                        </p>
                                        
                                        <p class="text-[12px] mt-[10px] font-medium">
                                            <span class="font-medium">{{ rate.method_title }}</span> - {{ rate.method_description }}
                                        </p>
                                    </label>
                                </div>

                                <?php echo view_render_event('bagisto.shop.checkout.shipping-method.after'); ?>


                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-shipping-method', {
            template: '#v-shipping-method-template',

            data() {
                return {
                    shippingMethods: [],

                    isShowShippingMethod: false,

                    isShippingMethodLoading: false,
                }
            },

            methods: {
                store(selectedShippingMethod) {
                    this.$parent.$refs.vCartSummary.canPlaceOrder = false;

                    this.$parent.$refs.vPaymentMethod.isShowPaymentMethod = false;

                    this.$parent.$refs.vPaymentMethod.isPaymentMethodLoading = true;

                    this.$axios.post("<?php echo e(route('shop.checkout.onepage.shipping_methods.store')); ?>", {    
                            shipping_method: selectedShippingMethod,
                        })
                        .then(response => {
                            this.$parent.getOrderSummary();

                            this.$parent.$refs.vPaymentMethod.payment_methods = response.data.payment_methods;
                                
                            this.$parent.$refs.vPaymentMethod.isShowPaymentMethod = true;

                            this.$parent.$refs.vPaymentMethod.isPaymentMethodLoading = false;
                        })
                        .catch(error => {});
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/checkout/onepage/shipping.blade.php ENDPATH**/ ?>