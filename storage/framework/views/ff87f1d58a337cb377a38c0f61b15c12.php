<v-product-gallery ref="gallery">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.products.gallery','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.products.gallery'); ?>
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
</v-product-gallery>

<?php if (! $__env->hasRenderedOnce('38496413-810c-4d45-a945-dd420ea01663')): $__env->markAsRenderedOnce('38496413-810c-4d45-a945-dd420ea01663');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-product-gallery-template">
        <div class="flex gap-[30px] h-max sticky top-[30px] max-1180:hidden">
            <!-- Product Image Slider -->
            <div class="flex-24 place-content-start h-509 overflow-x-hidden overflow-y-auto flex gap-[30px] max-w-[100px] flex-wrap">
                <img 
                    :class="`min-w-[100px] max-h-[100px] rounded-[12px] ${ hover ? 'cursor-pointer' : '' }`" 
                    v-for="image in media.images"
                    :src="image.small_image_url"
                    alt="<?php echo app('translator')->get('shop::app.products.view.gallery.thumbnail-image'); ?>"
                    width="100"
                    height="100"
                    @mouseover="change(image)"
                />

                <!-- Need to Set Play Button  -->
                <video 
                    class="min-w-[100px] rounded-[12px]"
                    v-for="video in media.videos"
                    @mouseover="change(video)"
                >
                    <source 
                        :src="video.video_url" 
                        type="video/mp4"
                    />
                </video>
            </div>
            
            <!-- Media shimmer Effect -->
            <div
                class="max-w-[560px] max-h-[609px]"
                v-show="isMediaLoading"
            >
                <div class="min-w-[560px] min-h-[607px] bg-[#E9E9E9] rounded-[12px] shimmer"></div>
            </div>

            <div
                class="max-w-[560px] max-h-[609px]"
                v-show="! isMediaLoading"
            >
                <img 
                    class="min-w-[450px] rounded-[12px]" 
                    :src="baseFile.path" 
                    v-if="baseFile.type == 'image'"
                    alt="<?php echo app('translator')->get('shop::app.products.view.gallery.product-image'); ?>"
                    width="560"
                    height="609"
                    @load="onMediaLoad()"
                />

                <div
                    class="min-w-[450px] rounded-[12px]"
                    v-if="baseFile.type == 'video'"
                >
                    <video  
                        controls                             
                        width='475'
                        @load="onMediaLoad()"
                    >
                        <source 
                            :src="baseFile.path" 
                            type="video/mp4"
                        />
                    </video>    
                </div>
                
            </div>
        </div>

        <!-- Product slider Image with shimmer -->
        <div class="flex gap-[30px] 1180:hidden overflow-auto scrollbar-hide">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => [':src' => 'image.large_image_url','class' => 'min-w-[450px] max-sm:min-w-full w-[490px]','vFor' => 'image in media.images']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':src' => 'image.large_image_url','class' => 'min-w-[450px] max-sm:min-w-full w-[490px]','v-for' => 'image in media.images']); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </script>

    <script type="module">
        app.component('v-product-gallery', {
            template: '#v-product-gallery-template',

            data() {
                return {
                    isMediaLoading: true,

                    media: {
                        images: <?php echo json_encode(product_image()->getGalleryImages($product), 15, 512) ?>,

                        videos: <?php echo json_encode(product_video()->getVideos($product), 15, 512) ?>,
                    },

                    baseFile: {
                        type: '',

                        path: ''
                    },

                    hover: false,
                }
            },

            watch: {
                'media.images': {
                    deep: true,

                    handler(newImages, oldImages) {
                        if (JSON.stringify(newImages) !== JSON.stringify(oldImages)) {
                            this.baseFile.path = newImages[0].large_image_url; 
                        }
                    },
                },
            },

            mounted() {
                if (this.media.images.length) {
                    this.baseFile.type = 'image';
                    this.baseFile.path = this.media.images[0].large_image_url;
                } else {
                    this.baseFile.type = 'video';
                    this.baseFile.path = this.media.videos[0].video_url;
                }
            },

            methods: {
                onMediaLoad() {
                    this.isMediaLoading = false;
                },

                change(file) {
                    if (file.type == 'videos') {
                        this.baseFile.type = 'video';

                        this.baseFile.path = file.video_url;
                    } else {
                        this.baseFile.type = 'image';

                        this.baseFile.path = file.large_image_url;
                    }
                    
                    this.hover = true;
                }
            }
        })
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/products/view/gallery.blade.php ENDPATH**/ ?>