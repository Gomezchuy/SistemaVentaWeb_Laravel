<v-categories-carousel
    src="<?php echo e($src); ?>"
    title="<?php echo e($title); ?>"
    navigation-link="<?php echo e($navigationLink ?? ''); ?>"
>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.categories.carousel','data' => ['count' => 8,'navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.categories.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 8,'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</v-categories-carousel>

<?php if (! $__env->hasRenderedOnce('922cb176-b15a-4351-8d9c-a10e92406e26')): $__env->markAsRenderedOnce('922cb176-b15a-4351-8d9c-a10e92406e26');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-categories-carousel-template">
        <div class="container mt-[60px] max-lg:px-[30px] max-sm:mt-[20px]" v-if="! isLoading && categories?.length">
            <div class="relative">
                <div
                    ref="swiperContainer"
                    class="flex gap-10 overflow-auto scroll-smooth scrollbar-hide max-sm:gap-4"
                >
                    <div
                        class="grid grid-cols-1 gap-[15px] justify-items-center min-w-[120px] max-w-[120px] font-medium"
                        v-for="category in categories"
                    >
                        <a
                            :href="category.url_path"
                            class="w-[110px] h-[110px] bg-[#F5F5F5] rounded-full"
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => [':src' => 'category.images.logo_url','width' => '110','height' => '110','class' => 'w-[110px] h-[110px] rounded-full',':alt' => 'category.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':src' => 'category.images.logo_url','width' => '110','height' => '110','class' => 'w-[110px] h-[110px] rounded-full',':alt' => 'category.name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </template>
                        </a>

                        <a
                            :href="category.url_path"
                            class=""
                        >
                            <p
                                class="text-center text-black text-[18px] max-sm:font-normal"
                                v-text="category.name"
                            >
                            </p>
                        </a>
                    </div>
                </div>

                <span
                    class="flex items-center justify-center absolute top-[37px] -left-[41px] w-[50px] h-[50px] bg-white border border-black rounded-full transition icon-arrow-left-stylish text-[25px] hover:bg-black hover:text-white max-lg:-left-[29px] cursor-pointer"
                    @click="swipeLeft"
                >
                </span>

                <span
                    class="flex items-center justify-center absolute top-[37px] -right-[22px] w-[50px] h-[50px] bg-white border border-black rounded-full transition icon-arrow-right-stylish text-[25px] hover:bg-black hover:text-white max-lg:-right-[29px] cursor-pointer"
                    @click="swipeRight"
                >
                </span>
            </div>
        </div>

        <!-- Category Carousel Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.categories.carousel','data' => ['count' => 8,'navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.categories.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 8,'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </template>
    </script>

    <script type="module">
        app.component('v-categories-carousel', {
            template: '#v-categories-carousel-template',

            props: [
                'src',
                'title',
                'navigationLink',
            ],

            data() {
                return {
                    isLoading: true,

                    categories: [],

                    offset: 323,
                };
            },

            mounted() {
                this.getCategories();
            },

            methods: {
                getCategories() {
                    this.$axios.get(this.src)
                        .then(response => {
                            this.isLoading = false;

                            this.categories = response.data.data;
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
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/categories/carousel.blade.php ENDPATH**/ ?>