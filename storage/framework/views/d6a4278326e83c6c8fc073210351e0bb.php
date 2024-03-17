<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['options']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['options']); ?>
<?php foreach (array_filter((['options']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-carousel>
    <div class="shimmer w-full aspect-[2.743/1]">
    </div>
</v-carousel>

<?php if (! $__env->hasRenderedOnce('02a8feb2-699e-47b7-a4e0-68ee2cc5e6d7')): $__env->markAsRenderedOnce('02a8feb2-699e-47b7-a4e0-68ee2cc5e6d7');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-carousel-template">
        <div class="w-full relative m-auto">
            <a
                v-for="(image, index) in images"
                class="fade"
                :href="image.link || '#'"
                ref="slides"
                :key="index"
                aria-label="Image Slide "
            >
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'w-full aspect-[2.743/1]',':src' => 'image.image',':srcset' => 'image.image + \' 1920w, \' + image.image.replace(\'storage\', \'cache/large\') + \' 1280w,\' + image.image.replace(\'storage\', \'cache/medium\') + \' 1024w, \' + image.image.replace(\'storage\', \'cache/small\') + \' 525w\'','alt' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full aspect-[2.743/1]',':src' => 'image.image',':srcset' => 'image.image + \' 1920w, \' + image.image.replace(\'storage\', \'cache/large\') + \' 1280w,\' + image.image.replace(\'storage\', \'cache/medium\') + \' 1024w, \' + image.image.replace(\'storage\', \'cache/small\') + \' 525w\'','alt' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </a>

            <span
                class="icon-arrow-left text-[24px] font-bold text-white w-auto -mt-[22px] p-[12px] absolute top-1/2 left-[10px] bg-[rgba(0,0,0,0.8)] transition-all opacity-30 rounded-full hover:opacity-100 cursor-pointer"
                v-if="images?.length >= 2"
                @click="navigate(currentIndex -= 1)"
            >
            </span>

            <span
                class="icon-arrow-right text-[24px] font-bold text-white w-auto -mt-[22px] p-[12px] absolute top-1/2 right-[10px] bg-[rgba(0,0,0,0.8)] transition-all opacity-30 rounded-full hover:opacity-100 cursor-pointer"
                v-if="images?.length >= 2"
                @click="navigate(currentIndex += 1)"
            >
            </span>
        </div>
    </script>

    <script type="module">
        app.component("v-carousel", {
            template: '#v-carousel-template',

            data() {
                return {
                    currentIndex: 1,

                    images: <?php echo json_encode($options['images'] ?? [], 15, 512) ?>,
                };
            },

            mounted() {
                this.navigate(this.currentIndex);

                this.play();
            },

            methods: {
                navigate(index) {
                    if (index > this.images.length) {
                        this.currentIndex = 1;
                    }

                    if (index < 1) {
                        this.currentIndex = this.images.length;
                    }

                    let slides = this.$refs.slides;

                    for (let i = 0; i < slides.length; i++) {
                        if (i == this.currentIndex - 1) {
                            continue;
                        }
                        
                        slides[i].style.display = 'none';
                    }

                    slides[this.currentIndex - 1].style.display = 'block';
                },

                play() {
                    let self = this;

                    setInterval(() => {
                        this.navigate(this.currentIndex += 1);
                    }, 5000);
                }
            }
        });
    </script>

    <style>
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/carousel/index.blade.php ENDPATH**/ ?>