<?php $reviewHelper = app('Webkul\Product\Helpers\Review'); ?>
<?php $productViewHelper = app('Webkul\Product\Helpers\View'); ?>

<?php
    $avgRatings = round($reviewHelper->getAverageRating($product));

    $percentageRatings = $reviewHelper->getPercentageRating($product);

    $customAttributeValues = $productViewHelper->getAdditionalData($product);
?>


<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo e(trim($product->meta_description) != "" ? $product->meta_description : \Illuminate\Support\Str::limit(strip_tags($product->description), 120, '')); ?>"/>

    <meta name="keywords" content="<?php echo e($product->meta_keywords); ?>"/>

    <?php if(core()->getConfigData('catalog.rich_snippets.products.enable')): ?>
        <script type="application/ld+json">
            <?php echo e(app('Webkul\Product\Helpers\SEO')->getProductJsonLd($product)); ?>

        </script>
    <?php endif; ?>

    <?php $productBaseImage = product_image()->getProductBaseImage($product); ?>

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title" content="<?php echo e($product->name); ?>" />

    <meta name="twitter:description" content="<?php echo htmlspecialchars(trim(strip_tags($product->description))); ?>" />

    <meta name="twitter:image:alt" content="" />

    <meta name="twitter:image" content="<?php echo e($productBaseImage['medium_image_url']); ?>" />

    <meta property="og:type" content="og:product" />

    <meta property="og:title" content="<?php echo e($product->name); ?>" />

    <meta property="og:image" content="<?php echo e($productBaseImage['medium_image_url']); ?>" />

    <meta property="og:description" content="<?php echo htmlspecialchars(trim(strip_tags($product->description))); ?>" />

    <meta property="og:url" content="<?php echo e(route('shop.product_or_category.index', $product->url_key)); ?>" />
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
        <?php echo e(trim($product->meta_title) != "" ? $product->meta_title : $product->name); ?>

     <?php $__env->endSlot(); ?>

    <?php echo view_render_event('bagisto.shop.products.view.before', ['product' => $product]); ?>


    
    <div class="flex justify-center max-lg:hidden">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'product','entity' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'product','entity' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    
    <v-product :product-id="<?php echo e($product->id); ?>">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.products.view','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.products.view'); ?>
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
    </v-product>

    
    <div class="1180:mt-[80px]">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.index','data' => ['position' => 'center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'center']); ?>
            
            <?php echo view_render_event('bagisto.shop.products.view.description.before', ['product' => $product]); ?>


            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => trans('shop::app.products.view.description'),'isSelected' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.products.view.description')),'is-selected' => true]); ?>
                <div class="container mt-[60px] max-1180:px-[20px]">
                    <p class="text-[#6E6E6E] text-[18px] max-1180:text-[14px]">
                        <?php echo $product->description; ?>

                    </p>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php echo view_render_event('bagisto.shop.products.view.description.after', ['product' => $product]); ?>



            
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => trans('shop::app.products.view.additional-information'),'isSelected' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.products.view.additional-information')),'is-selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
                <div class="container mt-[60px] max-1180:px-[20px]">
                    <div class="grid gap-[15px] grid-cols-[auto_1fr] max-w-max mt-[30px]">
                        <?php $__currentLoopData = $customAttributeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customAttributeValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid">
                                <p class="text-[16px] text-black">
                                    <?php echo $customAttributeValue['label']; ?>

                                </p>
                            </div>

                            <?php if(
                                $customAttributeValue['type'] == 'file'
                                && $customAttributeValue['value']
                            ): ?>
                                <a
                                    href="<?php echo e(Storage::url($product[$customAttributeValue['code']])); ?>"
                                    download="<?php echo e($customAttributeValue['label']); ?>"
                                >
                                    <span class="icon-download text-[24px]"></span>
                                </a>
                            <?php elseif(
                                $customAttributeValue['type'] == 'image'
                                && $customAttributeValue['value']
                            ): ?>
                                <a
                                    href="<?php echo e(Storage::url($product[$customAttributeValue['code']])); ?>"
                                    download="<?php echo e($customAttributeValue['label']); ?>"
                                >
                                    <img 
                                        class="h-[20px] w-[20px] min-h-[20px] min-w-[20px]"
                                        src="<?php echo e(Storage::url($customAttributeValue['value'])); ?>"
                                    />
                                </a>
                            <?php else: ?> 
                                <div class="grid">
                                    <p class="text-[16px] text-[#7D7D7D]">
                                        <?php echo $customAttributeValue['value'] ? $customAttributeValue['value'] : '-'; ?>

                                    </p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.tabs.item','data' => ['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => trans('shop::app.products.view.review'),'isSelected' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'container mt-[60px] !p-0 max-1180:hidden','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.products.view.review')),'is-selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
                <?php echo $__env->make('shop::products.view.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    
    <div class="container mt-[40px] max-1180:px-[20px] 1180:hidden">
        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.accordion.index','data' => ['isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-active' => true]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <div class="flex justify-between mb-[20px] mt-[20px]">
                    <p class="text-[16px] font-medium 1180:hidden">
                        <?php echo app('translator')->get('shop::app.products.view.description'); ?>
                    </p>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <p class="text-[#6E6E6E] text-[18px] max-1180:text-[14px] mb-[20px]">
                    <?php echo $product->description; ?>

                </p>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.accordion.index','data' => ['isActive' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <div class="flex justify-between mb-[20px] mt-[20px]">
                    <p class="text-[16px] font-medium 1180:hidden">
                        <?php echo app('translator')->get('shop::app.products.view.additional-information'); ?>
                    </p>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <div class="container mt-[20px] mb-[20px] max-1180:px-[20px]">
                    <p class="text-[#6E6E6E] text-[18px] max-1180:text-[14px]">
                        <?php $__currentLoopData = $customAttributeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customAttributeValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid">
                                <p class="text-[16px] text-black">
                                    <?php echo e($customAttributeValue['label']); ?>

                                </p>
                            </div>

                            <?php if(
                                $customAttributeValue['type'] == 'file'
                                || $customAttributeValue['type'] == 'image'
                            ): ?>
                                <a
                                    href="<?php echo e(Storage::url($product[$customAttributeValue['code']])); ?>"
                                    download="<?php echo e($customAttributeValue['label']); ?>"
                                >
                                    <p class="text-[16px] text-blue-500 underline">
                                        <?php echo e($customAttributeValue['label']); ?>

                                    </p>
                                </a>
                            <?php else: ?> 
                                <div class="grid">
                                    <p class="text-[16px] text-[#6E6E6E]">
                                        <?php echo e($customAttributeValue['value'] ?? '-'); ?>

                                    </p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.accordion.index','data' => ['isActive' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
             <?php $__env->slot('header', null, []); ?> 
                <div class="flex justify-between mb-[20px] mt-[20px]">
                    <p class="text-[16px] font-medium 1180:hidden">
                        <?php echo app('translator')->get('shop::app.products.view.review'); ?>
                    </p>
                </div>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <?php echo $__env->make('shop::products.view.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.carousel','data' => ['title' => trans('shop::app.products.view.related-product-title'),'src' => route('shop.api.products.related.index', ['id' => $product->id])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.products.view.related-product-title')),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.api.products.related.index', ['id' => $product->id]))]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.carousel','data' => ['title' => trans('shop::app.products.view.up-sell-title'),'src' => route('shop.api.products.up-sell.index', ['id' => $product->id])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.products.view.up-sell-title')),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.api.products.up-sell.index', ['id' => $product->id]))]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <?php echo view_render_event('bagisto.shop.products.view.after', ['product' => $product]); ?>


    <?php if (! $__env->hasRenderedOnce('f0595931-1ed2-4585-ad78-b47002c1eacc')): $__env->markAsRenderedOnce('f0595931-1ed2-4585-ad78-b47002c1eacc');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-product-template">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.index','data' => ['vSlot' => '{ meta, errors, handleSubmit }','as' => 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-slot' => '{ meta, errors, handleSubmit }','as' => 'div']); ?>
                <form
                    ref="formData"
                    @submit="handleSubmit($event, addToCart)"
                >
                    <input 
                        type="hidden" 
                        name="product_id" 
                        value="<?php echo e($product->id); ?>"
                    >

                    <input
                        type="hidden"
                        name="is_buy_now"
                        v-model="is_buy_now"
                    >
                    
                    <input 
                        type="hidden" 
                        name="quantity" 
                        :value="qty"
                    >

                    <div class="container px-[60px] max-1180:px-[0px]">
                        <div class="flex gap-[40px] mt-[48px] max-1180:flex-wrap max-lg:mt-0 max-sm:gap-y-[25px]">
                            <!-- Gallery Blade Inclusion -->
                            <?php echo $__env->make('shop::products.view.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <!-- Details -->
                            <div class="max-w-[590px] relative max-1180:w-full max-1180:max-w-full max-1180:px-[20px]">
                                <?php echo view_render_event('bagisto.shop.products.name.before', ['product' => $product]); ?>


                                <div class="flex gap-[15px] justify-between">
                                    <h1 class="text-[30px] font-medium max-sm:text-[20px]">
                                        <?php echo e($product->name); ?>

                                    </h1>

                                    <?php if(core()->getConfigData('general.content.shop.wishlist_option')): ?>
                                        <div
                                            class="flex items-center justify-center min-w-[46px] min-h-[46px] max-h-[46px] bg-white border border-black rounded-full text-[24px] transition-all hover:opacity-[0.8] cursor-pointer"
                                            :class="isWishlist ? 'icon-heart-fill' : 'icon-heart'"
                                            @click="addToWishlist"
                                        >
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php echo view_render_event('bagisto.shop.products.name.before', ['product' => $product]); ?>


                                <!-- Rating -->
                                <?php echo view_render_event('bagisto.shop.products.rating.before', ['product' => $product]); ?>


                                <div class="flex gap-[15px] items-center mt-[15px]">
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.star-rating','data' => ['value' => $avgRatings,'isEditable' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::products.star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avgRatings),'is-editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                    <div class="flex gap-[15px] items-center">
                                        <p class="text-[#6E6E6E] text-[14px]">
                                            (<?php echo e($product->approvedReviews->count()); ?> <?php echo app('translator')->get('reviews'); ?>)
                                        </p>
                                    </div>
                                </div>

                                <?php echo view_render_event('bagisto.shop.products.rating.after', ['product' => $product]); ?>


                                <!-- Pricing -->
                                <?php echo view_render_event('bagisto.shop.products.price.before', ['product' => $product]); ?>


                                <p class="flex gap-2.5 items-center mt-[25px] text-[24px] !font-medium max-sm:mt-[15px] max-sm:text-[18px]">
                                    <?php echo $product->getTypeInstance()->getPriceHtml(); ?>


                                    <span class="text-[18px] text-[#6E6E6E]">
                                        <?php if(
                                            (bool) core()->getConfigData('taxes.catalogue.pricing.tax_inclusive') 
                                            && $product->getTypeInstance()->getTaxCategory()
                                        ): ?>
                                            <?php echo app('translator')->get('shop::app.products.view.tax-inclusive'); ?>
                                        <?php endif; ?>
                                    </span>
                                </p>

                                <?php echo view_render_event('bagisto.shop.products.price.after', ['product' => $product]); ?>


                                <?php echo view_render_event('bagisto.shop.products.short_description.before', ['product' => $product]); ?>


                                <p class="mt-[25px] text-[18px] text-[#6E6E6E] max-sm:text-[14px] max-sm:mt-[15px]">
                                    <?php echo $product->short_description; ?>

                                </p>

                                <?php echo view_render_event('bagisto.shop.products.short_description.after', ['product' => $product]); ?>


                                <?php echo $__env->make('shop::products.view.types.configurable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo $__env->make('shop::products.view.types.grouped', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo $__env->make('shop::products.view.types.bundle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo $__env->make('shop::products.view.types.downloadable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                <!-- Product Actions and Qunatity Box -->
                                <div class="flex gap-[15px] max-w-[470px] mt-[30px]">

                                    <?php echo view_render_event('bagisto.shop.products.view.quantity.before', ['product' => $product]); ?>


                                    <?php if($product->getTypeInstance()->showQuantityBox()): ?>
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.quantity-changer.index','data' => ['name' => 'quantity','value' => '1','class' => 'gap-x-[16px] py-[15px] px-[26px] rounded-[12px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::quantity-changer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'quantity','value' => '1','class' => 'gap-x-[16px] py-[15px] px-[26px] rounded-[12px]']); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                    <?php echo view_render_event('bagisto.shop.products.view.quantity.after', ['product' => $product]); ?>


                                    <!-- Add To Cart Button -->
                                    <?php echo view_render_event('bagisto.shop.products.view.add_to_cart.before', ['product' => $product]); ?>


                                    <button
                                        type="submit"
                                        class="secondary-button w-full max-w-full"
                                        <?php echo e(! $product->isSaleable(1) ? 'disabled' : ''); ?>

                                    >
                                        <?php echo app('translator')->get('shop::app.products.view.add-to-cart'); ?>
                                    </button>

                                    <?php echo view_render_event('bagisto.shop.products.view.add_to_cart.after', ['product' => $product]); ?>

                                </div>

                                <!-- Buy Now Button -->
                                <?php echo view_render_event('bagisto.shop.products.view.buy_now.before', ['product' => $product]); ?>


                                <?php if(core()->getConfigData('catalog.products.storefront.buy_now_button_display')): ?>
                                    <button
                                        type="submit"
                                        class="primary-button w-full max-w-[470px] mt-[20px]"
                                        @click="is_buy_now=1;"
                                        <?php echo e(! $product->isSaleable(1) ? 'disabled' : ''); ?>

                                    >
                                        <?php echo app('translator')->get('shop::app.products.view.buy-now'); ?>
                                    </button>
                                <?php endif; ?>

                                <?php echo view_render_event('bagisto.shop.products.view.buy_now.after', ['product' => $product]); ?>


                                <!-- Share Buttons -->
                                <div class="flex gap-[35px] mt-[40px] max-sm:flex-wrap max-sm:justify-center">
                                    <?php echo view_render_event('bagisto.shop.products.view.compare.before', ['product' => $product]); ?>


                                    <div
                                        class="flex gap-[10px] justify-center items-center cursor-pointer"
                                        @click="is_buy_now=0; addToCompare(<?php echo e($product->id); ?>)"
                                    >
                                        <?php if(core()->getConfigData('general.content.shop.compare_option')): ?>
                                            <span class="icon-compare text-[24px]"></span>

                                            <?php echo app('translator')->get('shop::app.products.view.compare'); ?>
                                        <?php endif; ?>
                                    </div>

                                    <?php echo view_render_event('bagisto.shop.products.view.compare.after', ['product' => $product]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </script>

        <script type="module">
            app.component('v-product', {
                template: '#v-product-template',

                props: ['productId'],

                data() {
                    return {
                        isWishlist: Boolean("<?php echo e((boolean) auth()->guard()->user()?->wishlist_items->where('channel_id', core()->getCurrentChannel()->id)->where('product_id', $product->id)->count()); ?>"),

                        isCustomer: '<?php echo e(auth()->guard('customer')->check()); ?>',

                        is_buy_now: 0,
                    }
                },

                methods: {
                    addToCart(params) {
                        let formData = new FormData(this.$refs.formData);

                        this.$axios.post('<?php echo e(route("shop.api.checkout.cart.store")); ?>', formData, {
                                headers: {
                                    'Content-Type': 'multipart/form-data'
                                }
                            })
                            .then(response => {
                                if (response.data.message) {
                                    this.$emitter.emit('update-mini-cart', response.data.data);

                                    this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                    if (response.data.redirect) {
                                        window.location.href= response.data.redirect;
                                    }
                                } else {
                                    this.$emitter.emit('add-flash', { type: 'warning', message: response.data.data.message });
                                }
                            })
                            .catch(error => {});
                    },

                    addToWishlist() {
                        if (this.isCustomer) {
                            this.$axios.post('<?php echo e(route('shop.api.customers.account.wishlist.store')); ?>', {
                                    product_id: "<?php echo e($product->id); ?>"
                                })
                                .then(response => {
                                    this.isWishlist = ! this.isWishlist;

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
                        let existingItems = this.getStorageValue(this.getCompareItemsStorageKey()) ?? [];

                        if (existingItems.length) {
                            if (! existingItems.includes(productId)) {
                                existingItems.push(productId);

                                this.setStorageValue(this.getCompareItemsStorageKey(), existingItems);

                                this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.products.view.add-to-compare'); ?>" });
                            } else {
                                this.$emitter.emit('add-flash', { type: 'warning', message: "<?php echo app('translator')->get('shop::app.products.view.already-in-compare'); ?>" });
                            }
                        } else {
                            this.setStorageValue(this.getCompareItemsStorageKey(), [productId]);

                            this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.products.view.add-to-compare'); ?>" });
                        }
                    },

                    getCompareItemsStorageKey() {
                        return 'compare_items';
                    },

                    setStorageValue(key, value) {
                        localStorage.setItem(key, JSON.stringify(value));
                    },

                    getStorageValue(key) {
                        let value = localStorage.getItem(key);

                        if (value) {
                            value = JSON.parse(value);
                        }

                        return value;
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
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/products/view.blade.php ENDPATH**/ ?>