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
        <?php echo app('translator')->get('shop::app.customers.account.reviews.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <?php $__env->startSection('breadcrumbs'); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'reviews']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'reviews']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <!-- Reviews Vue Component -->
    <v-product-reviews>
        <!-- Reviews Shimmer Effect -->
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.customers.account.reviews.index','data' => ['count' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.customers.account.reviews'); ?>
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
    </v-product-reviews>

    <?php if (! $__env->hasRenderedOnce('764e8014-4322-434c-ba59-339df2197bad')): $__env->markAsRenderedOnce('764e8014-4322-434c-ba59-339df2197bad');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-product-reviews-template">
            <div>
                <!-- Reviews Shimmer Effect -->
                <template v-if="isLoading">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.customers.account.reviews.index','data' => ['count' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.customers.account.reviews'); ?>
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

                <?php echo view_render_event('bagisto.shop.customers.account.reviews.list.before', ['reviews' => $reviews]); ?>


                <!-- Reviews Information -->
                <template v-else>
                    <div class="flex-auto">
                        <div class="max-md:max-w-full">
                            <h2 class="text-[26px] font-medium">
                                <?php echo app('translator')->get('shop::app.customers.account.reviews.title'); ?>
                            </h2>
                
                            <?php if(! $reviews->isEmpty()): ?>
                                
                                <div class="grid gap-[20px] mt-[60px] max-1060:grid-cols-[1fr]">
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a
                                            href="<?php echo e(route('shop.product_or_category.index', $review->product->url_key)); ?>"
                                            id="<?php echo e($review->product_id); ?>"
                                        >
                                            <div class="flex gap-[20px] p-[25px] border border-[#e5e5e5] rounded-[12px] max-sm:flex-wrap">
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'max-w-[128px] max-h-[146px] min-w-[128px] w-[128px] h-[146px] rounded-[12px]','src' => ''.e($review->product->base_image_url ?? bagisto_asset('images/small-product-placeholder.webp')).'','alt' => 'Review Image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-w-[128px] max-h-[146px] min-w-[128px] w-[128px] h-[146px] rounded-[12px]','src' => ''.e($review->product->base_image_url ?? bagisto_asset('images/small-product-placeholder.webp')).'','alt' => 'Review Image']); ?>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                
                                                <div class="w-full">
                                                    <div class="flex justify-between">
                                                        <p class="text-[20px] font-medium max-sm:text-[16px]">
                                                            <?php echo e($review->title); ?>

                                                        </p>
                
                                                        <div class="flex gap-[10px] items-center">
                                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                                <span class="icon-star-fill text-[24px] <?php echo e($review->rating >= $i ? 'text-[#ffb600]' : 'text-[#6E6E6E]'); ?>"></span>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                
                                                    <p class="mt-[10px] text-[14px] font-medium max-sm:text-[12px]">
                                                        <?php echo e($review->created_at); ?>

                                                    </p>
                
                                                    <p class="mt-[20px] text-[16px] text-[#6E6E6E] max-sm:text-[12px]">
                                                        <?php echo e($review->comment); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php else: ?>
                                
                                <div class="grid items-center justify-items-center place-content-center w-[100%] m-auto h-[476px] text-center">
                                    <img class="" src="<?php echo e(bagisto_asset('images/review.png')); ?>" alt="" title="">
                
                                    <p class="text-[20px]">
                                        <?php echo app('translator')->get('shop::app.customers.account.reviews.empty-review'); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </template>

                <?php echo view_render_event('bagisto.shop.customers.account.reviews.list.after', ['reviews' => $reviews]); ?>


            </div>
        </script>

        <script type="module">
            app.component("v-product-reviews", {
                template: '#v-product-reviews-template',

                data() {
                    return {
                        isLoading: true,
                    };
                },

                mounted() {
                    this.get();
                },

                methods: {
                    get() {
                        this.$axios.get("<?php echo e(route('shop.customers.account.reviews.index')); ?>")
                            .then(response => {
                                this.isLoading = false;
                            })
                            .catch(error => {});
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
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/customers/account/reviews/index.blade.php ENDPATH**/ ?>