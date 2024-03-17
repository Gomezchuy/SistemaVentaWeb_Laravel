
<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo app('translator')->get('shop::app.compare.title'); ?>"/>

    <meta name="keywords" content="<?php echo app('translator')->get('shop::app.compare.title'); ?>"/>
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('shop::app.compare.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="flex justify-center mt-[20px] max-lg:hidden">
		<div class="flex gap-x-[10px] items-center">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'compare']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'compare']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
		</div>
	</div>

    
    <div class="container px-[60px] max-lg:px-[30px] max-sm:px-[15px] mt-[30px]">
        <v-compare>
            <!---- Shimmer Effect -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.compare.index','data' => ['attributeCount' => count($comparableAttributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.compare'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributeCount' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(count($comparableAttributes))]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </v-compare>
    </div>

    <?php if (! $__env->hasRenderedOnce('574883eb-0d3a-4e7c-af1f-b687d08deb54')): $__env->markAsRenderedOnce('574883eb-0d3a-4e7c-af1f-b687d08deb54');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-compare-template">
            <div>

                <?php echo view_render_event('bagisto.shop.customers.account.compare.view.before'); ?>


                <div v-if="! isLoading">
                    <div class="flex justify-between items-center">
                        <h2 class="text-[26px] font-medium">
                            <?php echo app('translator')->get('shop::app.compare.title'); ?>
                        </h2>

                        <div
                            class="secondary-button flex gap-x-[10px] items-center py-[12px] px-[20px] border-[#E9E9E9] font-normal whitespace-nowrap"
                            v-if="items.length"
                            @click="removeAll"
                        >
                            <span class="icon-bin text-[24px]"></span>
                            <?php echo app('translator')->get('shop::app.compare.delete-all'); ?>
                        </div>
                    </div>

                    <div
                        class="grid mt-[60px] overflow-auto journal-scroll"
                        v-if="items.length"
                    >
                        <template v-for="attribute in comparableAttributes">
                            <!---- Product Card -->
                            <div
                                class="flex items-center max-w-full border-b-[1px] border-[#E9E9E9]"
                                v-if="attribute.code == 'product'"
                            >
                                <div class="min-w-[304px] max-w-full max-sm:hidden">
                                    <p class="text-[14px] font-medium">
                                        {{ attribute.name ?? attribute.admin_name }}
                                    </p>
                                </div>
                                <div class="flex gap-[12px] border-l-[1px] border-[#E9E9E9] max-sm:border-0">
                                    <div
                                        class="relative group"
                                        v-for="product in items"
                                    >
                                        <span
                                            class="hidden absolute top-[60px] right-[20px] justify-center items-center w-[30px] h-[30px] rounded-md bg-white cursor-pointer icon-cancel text-[25px] group-hover:flex group-hover:z-[1] transition-all duration-300"
                                            @click="remove(product.id)"
                                        ></span>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.card','data' => ['class' => 'min-w-[311px] max-w-[311px] pt-0 pr-0 p-[20px] max-sm:pl-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-w-[311px] max-w-[311px] pt-0 pr-0 p-[20px] max-sm:pl-0']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <!---- Comparable Attributes -->
                            <div
                                class="flex items-center max-w-full border-b-[1px] border-[#E9E9E9] last:border-none"
                                v-else
                            >
                                <div class="min-w-[304px] max-w-full max-sm:hidden">
                                    <p class="text-[14px] font-medium">
                                        {{ attribute.name ?? attribute.admin_name }}
                                    </p>
                                </div>

                                <div class="flex gap-[12px] border-l-[1px] border-[#E9E9E9] max-sm:border-0">
                                    <div
                                        class="w-[311px] max-w-[311px] pr-0 p-[20px] max-sm:pl-0"
                                        v-for="(product, index) in items"
                                    >
                                        <p class="hidden mb-[5px] text-[14px] font-medium max-sm:block">
                                            {{ attribute.name ?? attribute.admin_name }} :
                                        </p>

                                        <p class="text-[14px]">
                                            {{ product[attribute.code] ?? 'N/A' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div
                        class="grid items-center justify-items-center place-content-center w-[100%] m-auto h-[476px] text-center"
                        v-else
                    >
                        <img src="<?php echo e(bagisto_asset('images/thank-you.png')); ?>"/>
                        
                        <p class="text-[20px]"><?php echo app('translator')->get('shop::app.compare.empty-text'); ?></p>
                    </div>
                </div>

                <div v-else>
                    <!---- Shimmer Effect -->
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.compare.index','data' => ['attributeCount' => count($comparableAttributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.compare'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributeCount' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(count($comparableAttributes))]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>

                <?php echo view_render_event('bagisto.shop.customers.account.compare.view.after'); ?>


            </div>
        </script>

        <script type="module">
            app.component("v-compare", {
                template: '#v-compare-template',

                data() {
                    return  {
                        comparableAttributes: [
                            ...[{'code': 'product', 'name': 'Product'}],
                            ...<?php echo json_encode($comparableAttributes, 15, 512) ?>
                        ],

                        items: [],

                        isCustomer: '<?php echo e(auth()->guard('customer')->check()); ?>',

                        isLoading: true,
                    }
                },

                mounted() {
                    this.getItems();
                },

                methods: {
                    getItems() {
                        let productIds = [];
                        
                        if (! this.isCustomer) {
                            productIds = this.getStorageValue('compare_items');
                        }
                        
                        this.$axios.get("<?php echo e(route('shop.api.compare.index')); ?>", {
                                params: {
                                    product_ids: productIds,
                                },
                            })
                            .then(response => {
                                this.isLoading = false;

                                this.items = response.data.data;
                            })
                            .catch(error => {});
                    },

                    remove(productId) {
                        this.$emitter.emit('open-confirm-modal', {
                            agree: () => {
                                if (! this.isCustomer) {
                                    const index = this.items.findIndex((item) => item.id === productId);

                                    this.items.splice(index, 1);

                                    let items = this.getStorageValue()
                                        .filter(item => item != productId);

                                    localStorage.setItem('compare_items', JSON.stringify(items));

                                    return;
                                }

                                this.$axios.post("<?php echo e(route('shop.api.compare.destroy')); ?>", {
                                        '_method': 'DELETE',
                                        'product_id': productId,
                                    })
                                    .then(response => {
                                        this.items = response.data.data;

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                    })
                                    .catch(error => {
                                        this.$emitter.emit('add-flash', { type: 'error', message: response.data.message });
                                    });
                            }
                        });
                    },

                    removeAll() {
                        this.$emitter.emit('open-confirm-modal', {
                            agree: () => {
                                if (! this.isCustomer) {
                                    localStorage.removeItem('compare_items');

                                    this.items = [];

                                    this.$emitter.emit('add-flash', { type: 'success', message:  "<?php echo app('translator')->get('shop::app.compare.remove-all-success'); ?>" });

                                    return;
                                }
                                
                                this.$axios.post("<?php echo e(route('shop.api.compare.destroy_all')); ?>", {
                                        '_method': 'DELETE',
                                    })
                                    .then(response => {
                                        this.items = [];

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                                    })
                                    .catch(error => {});
                            }
                        });
                    },

                    getStorageValue() {
                        let value = localStorage.getItem('compare_items');

                        if (! value) {
                            return [];
                        }

                        return JSON.parse(value);
                    },
                }
            });
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/compare/index.blade.php ENDPATH**/ ?>