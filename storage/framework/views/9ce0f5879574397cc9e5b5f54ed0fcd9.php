
<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>"/>

    <meta name="keywords" content="<?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>"/>
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => ['hasHeader' => false,'hasFeature' => false,'hasFooter' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['has-header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-feature' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="lex flex-wrap">
        <div class="w-full flex justify-between px-[60px] py-[17px] border border-t-0 border-b-[1px] border-l-0 border-r-0 max-lg:px-[30px] max-sm:px-[15px]">
            <div class="flex items-center gap-x-[54px] max-[1180px]:gap-x-[35px]">
                <a
                    href="<?php echo e(route('shop.home.index')); ?>"
                    class="flex min-h-[30px]"
                    aria-label="Bagisto "
                >
                    <img
                        src="<?php echo e(bagisto_asset('images/logo.svg')); ?>"
                        alt="Bagisto "
                        width="131"
                        height="29"
                    >
                </a>
            </div>
        </div>
    </div>

    <div class="container px-[60px] max-lg:px-[30px] max-sm:px-[15px]">
        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'checkout']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'checkout']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <v-checkout>
            
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage'); ?>
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
        </v-checkout>
    </div>

    <?php if (! $__env->hasRenderedOnce('16a281f0-ba0c-4283-9b75-91c677b60715')): $__env->markAsRenderedOnce('16a281f0-ba0c-4283-9b75-91c677b60715');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-checkout-template">
            <div class="grid grid-cols-[1fr_auto] gap-[30px] max-lg:grid-cols-[1fr]">
                <div    
                    class="overflow-y-auto"
                    ref="scrollBottom"
                >
                    <?php echo $__env->make('shop::checkout.onepage.addresses.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('shop::checkout.onepage.shipping', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('shop::checkout.onepage.payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
                
                <?php echo $__env->make('shop::checkout.onepage.summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </script>

        <script type="module">
            app.component('v-checkout', {
                template: '#v-checkout-template',

                data() {
                    return {
                        cart: {},

                        isCartLoading: true,
                    }
                },

                created() {
                    this.getOrderSummary();
                }, 

                methods: {
                    getOrderSummary() {
                        this.$axios.get("<?php echo e(route('shop.checkout.onepage.summary')); ?>")
                            .then(response => {
                                this.cart = response.data.data;

                                this.isCartLoading = false;

                                let container = this.$refs.scrollBottom;

                                if (container) {
                                    container.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'end'
                                    });
                                }
                            })
                            .catch(error => console.log(error));
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
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/checkout/onepage/index.blade.php ENDPATH**/ ?>