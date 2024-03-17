<?php echo view_render_event('bagisto.admin.catalog.product.edit.form.categories.before', ['product' => $product]); ?>



<div class="p-[16px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow">
    
    <p class="flex justify-between text-[16px] text-gray-800 dark:text-white font-semibold mb-[16px]">
        <?php echo app('translator')->get('admin::app.catalog.products.edit.categories.title'); ?>
    </p>

    <?php echo view_render_event('bagisto.admin.catalog.product.edit.form.categories.controls.before', ['product' => $product]); ?>


    
    <div class="mb-[20px] text-[14px] text-gray-600 dark:text-gray-300">

        <v-product-categories>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.tree.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.tree'); ?>
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
        </v-product-categories>

    </div>

    <?php echo view_render_event('bagisto.admin.catalog.product.edit.form.categories.controls.after', ['product' => $product]); ?>

</div>

<?php echo view_render_event('bagisto.admin.catalog.product.edit.form.categories.after', ['product' => $product]); ?>



<?php if (! $__env->hasRenderedOnce('56601959-3de3-4c56-97b4-1c08cb32acf5')): $__env->markAsRenderedOnce('56601959-3de3-4c56-97b4-1c08cb32acf5');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-product-categories-template">
        <div>
            <template v-if="isLoading">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.tree.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.tree'); ?>
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
            </template>

            <template v-else>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.view','data' => ['inputType' => 'checkbox','nameField' => 'categories','idField' => 'id','valueField' => 'id',':items' => 'categories','value' => json_encode($product->categories->pluck('id')),'behavior' => 'no','fallbackLocale' => config('app.fallback_locale')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['input-type' => 'checkbox','name-field' => 'categories','id-field' => 'id','value-field' => 'id',':items' => 'categories','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(json_encode($product->categories->pluck('id'))),'behavior' => 'no','fallback-locale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('app.fallback_locale'))]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-product-categories', {
            template: '#v-product-categories-template',

            data() {
                return {
                    isLoading: true,

                    categories: [],
                }
            },

            mounted() {
                this.get();
            },

            methods: {
                get() {
                    this.$axios.get("<?php echo e(route('admin.catalog.categories.tree')); ?>")
                        .then(response => {
                            this.isLoading = false;

                            this.categories = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/catalog/products/edit/categories.blade.php ENDPATH**/ ?>