<v-products-carousel
    src="<?php echo e($src); ?>"
    title="<?php echo e($title); ?>"
    navigation-link="<?php echo e($navigationLink ?? ''); ?>"
>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.products.carousel','data' => ['navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.products.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</v-products-carousel>

<?php if (! $__env->hasRenderedOnce('0928cd89-58b6-46ff-aa00-7ea0b8257667')): $__env->markAsRenderedOnce('0928cd89-58b6-46ff-aa00-7ea0b8257667');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-products-carousel-template">
        <div class="container mt-20 max-lg:px-[30px] max-sm:mt-[30px]" v-if="! isLoading && products.length">
            <div class="flex justify-between">
                <h3 class="text-[30px] font-dmserif max-sm:text-[25px]" v-text="title"></h3>

                <div class="flex gap-8 justify-between items-center">
                    <span
                        class="icon-arrow-left-stylish rtl:icon-arrow-right-stylish inline-block text-[24px] cursor-pointer"
                        @click="swipeLeft"
                    >
                    </span>

                    <span
                        class="icon-arrow-right-stylish rtl:icon-arrow-left-stylish inline-block text-[24px] cursor-pointer"
                        @click="swipeRight"
                    >
                    </span>
                </div>
            </div>

            <div
                ref="swiperContainer"
                class="flex gap-8 [&>*]:flex-[0] mt-[40px] overflow-auto scroll-smooth scrollbar-hide max-sm:mt-[20px]"
            >
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.card','data' => ['class' => 'min-w-[291px]','vFor' => 'product in products']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'min-w-[291px]','v-for' => 'product in products']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>

            <a
                :href="navigationLink"
                class="secondary-button block w-max mt-[60px] mx-auto py-[11px] px-[43px] rounded-[18px] text-base text-center"
                v-if="navigationLink"
            >
                <?php echo app('translator')->get('shop::app.components.products.carousel.view-all'); ?>
            </a>
        </div>

        <!-- Product Card Listing -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.products.carousel','data' => ['navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.products.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </template>
    </script>

    <script type="module">
        app.component('v-products-carousel', {
            template: '#v-products-carousel-template',

            props: [
                'src',
                'title',
                'navigationLink',
            ],

            data() {
                return {
                    isLoading: true,

                    products: [],

                    offset: 323,
                };
            },

            mounted() {
                this.getProducts();
            },

            methods: {
                getProducts() {
                    this.$axios.get(this.src)
                        .then(response => {
                            this.isLoading = false;

                            this.products = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                },

                swipeLeft() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft -= this.offset;
                },

                swipeRight() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft += this.offset;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/products/carousel.blade.php ENDPATH**/ ?>