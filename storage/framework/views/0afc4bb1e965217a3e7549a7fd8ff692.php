<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.account.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.account'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('shop::app.customers.account.wishlist.page-title'); ?>
     <?php $__env->endSlot(); ?>

    <!-- Breadcrumbs -->
    <?php $__env->startSection('breadcrumbs'); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'wishlist']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'wishlist']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <!-- Wishlist Vue Component -->
    <v-wishlist-products>
        <!-- Wishlist Shimmer Effect -->
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.customers.account.wishlist.index','data' => ['count' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.customers.account.wishlist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 4]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </v-wishlist-products>

    <?php if (! $__env->hasRenderedOnce('6099df0c-f6ce-45ad-8887-1167b3670aee')): $__env->markAsRenderedOnce('6099df0c-f6ce-45ad-8887-1167b3670aee');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-wishlist-products-template">
            <div>
                <!-- Wishlist Shimmer Effect -->
                <template v-if="isLoading">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.customers.account.wishlist.index','data' => ['count' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.customers.account.wishlist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 4]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </template>

                <?php echo view_render_event('bagisto.shop.customers.account.wishlist.list.before'); ?>


                <!-- Wishlist Information -->
                <template v-else>
                    <div class="flex justify-between items-center overflow-auto journal-scroll">
                        <h2 class="text-[26px] font-medium">
                            <?php echo app('translator')->get('shop::app.customers.account.wishlist.page-title'); ?>
                        </h2>

                        <div
                            class="secondary-button flex gap-x-[10px] items-center py-[12px] px-[20px] border-[#E9E9E9]"
                            @click="removeAll"
                            v-if="wishlist.length"
                        >
                            <span class="icon-bin text-[24px]"></span>
                            <?php echo app('translator')->get('shop::app.customers.account.wishlist.delete-all'); ?>
                        </div>
                    </div>

                    <div 
                        v-if="wishlist.length" 
                        v-for="item in wishlist"
                        class="flex gap-[75px] flex-wrap mt-[30px] max-1060:flex-col"
                    >
                        <div class="grid gap-[30px] flex-1">
                            <div class="grid gap-y-[25px]">
                                <!-- Wishlist item -->
                                <div class="flex gap-x-[10px] justify-between pb-[18px] border-b-[1px] border-[#E9E9E9]">
                                    <div class="flex gap-x-[20px]">
                                        <div class="">
                                            <a :href="`<?php echo e(route('shop.product_or_category.index', '')); ?>/${item.product.url_key}`">
                                                <!-- Wishlist Item Image -->
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'max-w-[110px] max-h-[110px] min-w-[110px] w-[110px] h-[110px] rounded-[12px]',':src' => 'item.product.base_image.small_image_url']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-w-[110px] max-h-[110px] min-w-[110px] w-[110px] h-[110px] rounded-[12px]',':src' => 'item.product.base_image.small_image_url']); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                            </a>
                                        </div>

                                        <div class="grid gap-y-[10px]">
                                            <p 
                                                class="text-[16px] font-medium" 
                                                v-text="item.product.name"
                                            >
                                            </p>

                                            <!--Wishlist Item attributes -->
                                            <div 
                                                class="flex gap-x-[10px] gap-y-[6px] flex-wrap"
                                                v-if="item.options.length"
                                            >
                                                <div class="grid gap-[8px]">
                                                    <div class="">
                                                        <p
                                                            class="flex gap-x-[15px] text-[16px] items-center cursor-pointer"
                                                            @click="item.option_show = ! item.option_show"
                                                        >
                                                            <?php echo app('translator')->get('shop::app.customers.account.wishlist.see-details'); ?>
        
                                                            <span
                                                                class="text-[24px]"
                                                                :class="{'icon-arrow-up': item.option_show, 'icon-arrow-down': ! item.option_show}"
                                                            >
                                                            </span>
                                                        </p>
                                                    </div>
        
                                                    <div 
                                                        class="grid gap-[8px]" 
                                                        v-show="item.option_show"
                                                    >
                                                        <div v-for="option in item.options">
                                                            <p class="text-[14px] font-medium">
                                                                {{ option.attribute_name + ':' }}
                                                            </p>
        
                                                            <p class="text-[14px]">
                                                                {{ option.option_label }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:hidden">
                                                <p 
                                                    class="text-[18px] font-semibold" 
                                                    v-html="item.product.min_price"
                                                >
                                                </p>

                                                <!--Wishlist Item removed button-->
                                                <a 
                                                    class="flex justify-end text-[16px] text-[#0A49A7] cursor-pointer" 
                                                    @click="remove(item.id)"
                                                >
                                                    <?php echo app('translator')->get('shop::app.customers.account.wishlist.remove'); ?>
                                                </a>
                                            </div>

                                            <div class="flex gap-[20px] flex-wrap">
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.quantity-changer.index','data' => ['name' => 'quantity','class' => 'flex gap-x-[10px] items-center max-h-[40px] py-[5px] px-[14px] border border-navyBlue  rounded-[54px]','@change' => 'setItemQuantity($event, item)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::quantity-changer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'quantity','class' => 'flex gap-x-[10px] items-center max-h-[40px] py-[5px] px-[14px] border border-navyBlue  rounded-[54px]','@change' => 'setItemQuantity($event, item)']); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                                <!--Wishlist Item Move-to-cart-->
                                                <button
                                                    type="button"
                                                    class="primary-button block w-max max-h-[40px] py-[6px] px-[25px] rounded-[18px] text-base text-center"
                                                    @click="moveToCart(item.id)"
                                                >
                                                    <?php echo app('translator')->get('shop::app.customers.account.wishlist.move-to-cart'); ?>
                                                </button>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="max-sm:hidden">
                                        <p 
                                            class="text-[18px] font-semibold" 
                                            v-html="item.product.min_price"
                                        >
                                        </p>

                                        <a 
                                            class="flex justify-end text-[16px] text-[#0A49A7] cursor-pointer" 
                                            @click="remove(item.id)"
                                        >
                                            <?php echo app('translator')->get('shop::app.customers.account.wishlist.remove'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Empty Wishlist-->
                    <div
                        class="grid items-center justify-items-center w-[100%] m-auto h-[476px] place-content-center text-center"
                        v-else
                    >
                        <img
                            src="<?php echo e(bagisto_asset('images/wishlist.png')); ?>"
                            class=""
                            alt=""
                            title=""
                        >

                        <p class="text-[20px]">
                            <?php echo app('translator')->get('shop::app.customers.account.wishlist.empty'); ?>
                        </p>
                    </div>
                </template>

                <?php echo view_render_event('bagisto.shop.customers.account.wishlist.list.after'); ?>


            </div>
        </script>

        <script type="module">
            app.component("v-wishlist-products", {
                template: '#v-wishlist-products-template',

                data() {
                    return {
                        isLoading: true,

                        wishlist: [],
                    };
                },

                mounted() {
                    this.get();
                },

                methods: {
                    get() {
                        this.$axios.get("<?php echo e(route('shop.api.customers.account.wishlist.index')); ?>")
                            .then(response => {
                                this.isLoading = false;

                                this.wishlist = response.data.data
                                    .map((wishlist) => ({ ...wishlist, quantity: 1 }));
                            })
                            .catch(error => {});
                    },

                    remove(id) {
                        this.$axios.delete(`<?php echo e(route('shop.api.customers.account.wishlist.destroy', '')); ?>/${id}`)
                            .then(response => {
                                this.wishlist = this.wishlist.filter(wishlist => wishlist.id != id);

                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            })
                            .catch(error => {});
                    },

                    removeAll() {
                        this.$axios.delete("<?php echo e(route('shop.api.customers.account.wishlist.destroy_all')); ?>")
                            .then(response => {
                                this.wishlist = [];

                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                            })
                            .catch(error => {});
                    },

                    moveToCart(id) {
                        let url = `<?php echo e(route('shop.api.customers.account.wishlist.move_to_cart', ':wishlist_id:')); ?>`;
                        url = url.replace(':wishlist_id:', id);

                        let existingItem = this.wishlist.find(item => item.id == id);

                        if (existingItem) {
                            this.$axios.post(url, {
                                    quantity: existingItem.quantity,
                                    product_id: id
                                })
                                .then(response => {
                                    if (response.data.redirect) {
                                        this.$emitter.emit('add-flash', { type: 'warning', message: response.data.message });

                                        window.location.href = response.data.data;
                                    } else {
                                        this.wishlist = this.wishlist.filter(wishlist => wishlist.id != id);

                                        this.$emitter.emit('update-mini-cart', response.data.data.cart);

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                                    }
                                })
                                .catch(error => {});
                        }
                    },
                    setItemQuantity(quantity, requestedItem) {
                        let existingItem = this.wishlist.find((item) => item.id === requestedItem.id);

                        if (existingItem) {
                            existingItem.quantity = quantity;
                        }
                    },
                },
            });
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/customers/account/wishlist/index.blade.php ENDPATH**/ ?>