<v-product-card
    <?php echo e($attributes); ?>

    :product="product"
>
</v-product-card>

<?php if (! $__env->hasRenderedOnce('1c1f71fd-de1f-4808-8720-e29b07b7e201')): $__env->markAsRenderedOnce('1c1f71fd-de1f-4808-8720-e29b07b7e201');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-product-card-template">
        <!-- Grid Card -->
        <div
            class='grid gap-2.5 content-start w-full relative'
            v-if="mode != 'list'"
        >
            <div class="relative overflow-hidden group max-w-[291px] max-h-[300px] rounded-[4px]">
                <a
                    :href="`<?php echo e(route('shop.product_or_category.index', '')); ?>/${product.url_key}`"
                    :aria-label="product.name + ' '"
                >
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'relative after:content-[\' \'] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300',':src' => 'product.base_image.medium_image_url',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'relative after:content-[\' \'] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300',':src' => 'product.base_image.medium_image_url',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </a>
                
                <div class="action-items bg-black">
                    <p
                        class="inline-block absolute top-[20px] left-[20px] px-[10px]  bg-[#E51A1A] rounded-[44px] text-white text-[14px]"
                        v-if="product.on_sale"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.sale'); ?>
                    </p>

                    <p
                        class="inline-block absolute top-[20px] left-[20px] px-[10px] bg-navyBlue rounded-[44px] text-white text-[14px]"
                        v-else-if="product.is_new"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.new'); ?>
                    </p>

                    <div class="group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <?php if(core()->getConfigData('general.content.shop.wishlist_option')): ?>
                            <span
                                class="flex justify-center items-center absolute top-[20px] right-[20px] w-[30px] h-[30px] bg-white rounded-md cursor-pointer text-[25px]"
                                :class="product.is_wishlist ? 'icon-heart-fill' : 'icon-heart'"
                                @click="addToWishlist()"
                            >
                            </span>
                        <?php endif; ?>

                        <?php if(core()->getConfigData('general.content.shop.compare_option')): ?>
                            <span
                                class="icon-compare flex justify-center items-center w-[30px] h-[30px] absolute top-[60px] right-[20px] bg-white rounded-md cursor-pointer text-[25px]"
                                @click="addToCompare(product.id)"
                            >
                            </span>
                        <?php endif; ?>

                        <button
                            class="absolute bottom-[15px] left-[50%] py-[11px] px-[43px] bg-white rounded-xl text-navyBlue text-xs w-max font-medium cursor-pointer -translate-x-[50%] translate-y-[54px] group-hover:translate-y-0 transition-all duration-300"
                            @click="addToCart()"
                        >
                            <?php echo app('translator')->get('shop::app.components.products.card.add-to-cart'); ?>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid gap-2.5 content-start max-w-[291px]">
                <p class="text-base" v-text="product.name"></p>

                <div
                    class="flex gap-2.5 font-semibold text-lg"
                    v-html="product.price_html"
                >
                </div>

                <!-- Needs to implement that in future -->
                <div class="hidden flex gap-4 mt-[8px]">
                    <span class="block w-[30px] h-[30px] bg-[#B5DCB4] rounded-full cursor-pointer"></span>

                    <span class="block w-[30px] h-[30px] bg-[#5C5C5C] rounded-full cursor-pointer"></span>
                </div>
            </div>
        </div>

        <!-- List Card -->
        <div
            class="flex gap-[15px] grid-cols-2 max-w-max relative max-sm:flex-wrap rounded-[4px] overflow-hidden"
            v-else
        >
            <div class="relative max-w-[250px] max-h-[258px] overflow-hidden group"> 
                <a :href="`<?php echo e(route('shop.product_or_category.index', '')); ?>/${product.url_key}`">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'min-w-[250px] relative after:content-[\' \'] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300',':src' => 'product.base_image.medium_image_url','width' => '291','height' => '300']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-w-[250px] relative after:content-[\' \'] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300',':src' => 'product.base_image.medium_image_url','width' => '291','height' => '300']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </a>
            
                <div class="action-items bg-black"> 
                    <p
                        class="inline-block absolute top-[20px] left-[20px] px-[10px] bg-[#E51A1A] rounded-[44px] text-white text-[14px]"
                        v-if="product.on_sale"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.sale'); ?>
                    </p>

                    <p
                        class="inline-block absolute top-[20px] left-[20px] px-[10px] bg-navyBlue rounded-[44px] text-white text-[14px]"
                        v-else-if="product.is_new"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.new'); ?>
                    </p>

                    <div class="group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <?php if(core()->getConfigData('general.content.shop.wishlist_option')): ?>
                            <span 
                                class="flex justify-center items-center absolute top-[20px] right-[20px] w-[30px] h-[30px] bg-white rounded-md text-[25px] cursor-pointer"
                                :class="product.is_wishlist ? 'icon-heart-fill' : 'icon-heart'"
                                @click="addToWishlist()"
                            >
                            </span> 
                        <?php endif; ?>
                        
                        <?php if(core()->getConfigData('general.content.shop.compare_option')): ?>
                            <span 
                                class="icon-compare flex justify-center items-center absolute top-[60px] right-[20px] w-[30px] h-[30px] bg-white rounded-md text-[25px] cursor-pointer"
                                @click="addToCompare(product.id)"
                            >
                            </span>
                        <?php endif; ?>
                    </div> 
                </div> 
            </div> 

            <div class="grid gap-[15px] content-start"> 
                <p 
                    class="text-base" 
                    v-text="product.name"
                >
                </p> 

                <div 
                    class="flex gap-2.5 text-lg font-semibold"
                    v-html="product.price_html"
                >   
                </div> 

                <!-- Needs to implement that in future -->
                <div class="hidden flex gap-4"> 
                    <span class="block w-[30px] h-[30px] rounded-full bg-[#B5DCB4]">
                    </span> 

                    <span class="block w-[30px] h-[30px] rounded-full bg-[#5C5C5C]">
                    </span> 
                </div> 
                
                <p class="text-[14px] text-[#6E6E6E]" v-if="! product.avg_ratings">
                    <?php echo app('translator')->get('shop::app.components.products.card.review-description'); ?>
                </p>
            
                <p v-else class="text-[14px] text-[#6E6E6E]">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.star-rating','data' => [':value' => 'product && product.avg_ratings ? product.avg_ratings : 0','isEditable' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':value' => 'product && product.avg_ratings ? product.avg_ratings : 0','is-editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </p>
            
                <div 
                    class="primary-button px-[30px] py-[10px] whitespace-nowrap"
                    @click="addToCart()"
                >
                    <?php echo app('translator')->get('shop::app.components.products.card.add-to-cart'); ?>
                </div> 
            </div> 
        </div>
    </script>

    <script type="module">
        app.component('v-product-card', {
            template: '#v-product-card-template',

            props: ['mode', 'product'],

            data() {
                return {
                    isCustomer: '<?php echo e(auth()->guard('customer')->check()); ?>',
                }
            },

            methods: {
                addToWishlist() {
                    if (this.isCustomer) {
                        this.$axios.post(`<?php echo e(route('shop.api.customers.account.wishlist.store')); ?>`, {
                                product_id: this.product.id
                            })
                            .then(response => {
                                this.product.is_wishlist = ! this.product.is_wishlist;
                                
                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                            })
                            .catch(error => {});
                        } else {
                            window.location.href = "<?php echo e(route('shop.customer.session.index')); ?>";
                        }
                },

                addToCompare(productId) {
                    /**
                     * This will handle for customers.
                     */
                    if (this.isCustomer) {
                        this.$axios.post('<?php echo e(route("shop.api.compare.store")); ?>', {
                                'product_id': productId
                            })
                            .then(response => {
                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                            })
                            .catch(error => {
                                if ([400, 422].includes(error.response.status)) {
                                    this.$emitter.emit('add-flash', { type: 'warning', message: error.response.data.data.message });

                                    return;
                                }

                                this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message});
                            });

                        return;
                    }

                    /**
                     * This will handle for guests.
                     */
                    let items = this.getStorageValue() ?? [];

                    if (items.length) {
                        if (! items.includes(productId)) {
                            items.push(productId);

                            localStorage.setItem('compare_items', JSON.stringify(items));

                            this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.components.products.card.add-to-compare'); ?>" });
                        } else {
                            this.$emitter.emit('add-flash', { type: 'warning', message: "<?php echo app('translator')->get('shop::app.components.products.card.already-in-compare'); ?>" });
                        }
                    } else {
                        localStorage.setItem('compare_items', JSON.stringify([productId]));
                            
                        this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.components.products.card.add-to-compare'); ?>" });

                    }
                },

                getStorageValue(key) {
                    let value = localStorage.getItem('compare_items');

                    if (! value) {
                        return [];
                    }

                    return JSON.parse(value);
                },

                addToCart() {
                    this.$axios.post('<?php echo e(route("shop.api.checkout.cart.store")); ?>', {
                            'quantity': 1,
                            'product_id': this.product.id,
                        })
                        .then(response => {
                            if (response.data.data.redirect_uri) {
                                window.location.href = response.data.data.redirect_uri;
                            }

                            if (response.data.message) {
                                this.$emitter.emit('update-mini-cart', response.data.data );

                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            } else {
                                this.$emitter.emit('add-flash', { type: 'warning', message: response.data.data.message });
                            }
                        })
                        .catch(error => {
                            this.$emitter.emit('add-flash', { type: 'error', message: response.data.message });
                        });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/products/card.blade.php ENDPATH**/ ?>