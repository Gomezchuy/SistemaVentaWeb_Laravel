<?php if($product->type == 'downloadable'): ?>
    <?php echo view_render_event('bagisto.shop.products.view.downloadable.before', ['product' => $product]); ?>


    <?php if($product->downloadable_samples->count()): ?>
        <div class="sample-list mb-[25px] mt-[30px]">
            <label class="mb-[15px] font-medium">
                <?php echo app('translator')->get('shop::app.products.view.type.downloadable.samples'); ?>
            </label>

            <ul>
                <?php $__currentLoopData = $product->downloadable_samples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sample): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-[5px]">
                        <a 
                            href="<?php echo e(route('shop.downloadable.download_sample', ['type' => 'sample', 'id' => $sample->id])); ?>" 
                            class="text-[#0A49A7]"
                            target="_blank"
                        >
                            <?php echo e($sample->title); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if($product->downloadable_links->count()): ?>
        <label class="flex mt-[30px] mb-[15px] font-medium">
            <?php echo app('translator')->get('shop::app.products.view.type.downloadable.links'); ?>
        </label>

        <div class="grid gap-[15px]">
            <?php $__currentLoopData = $product->downloadable_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="select-none flex gap-x-[15px]">
                    <div class="flex">
                        <v-field
                            type="checkbox"
                            name="links[]"
                            value="<?php echo e($link->id); ?>"
                            id="<?php echo e($link->id); ?>"
                            class="hidden peer"
                            rules="required"
                            label="<?php echo app('translator')->get('shop::app.products.view.type.downloadable.links'); ?>"
                        >
                        </v-field>
                        
                        <label
                            class="icon-uncheck text-[24px] text-navyBlue peer-checked:icon-check-box peer-checked:text-navyBlue cursor-pointer"
                            for="<?php echo e($link->id); ?>"
                        ></label>
                        
                        <label
                            for="<?php echo e($link->id); ?>"
                            class="ml-1 cursor-pointer"
                        >
                            <?php echo e($link->title . ' + ' . core()->currency($link->price)); ?>

                        </label>

                        <?php if(
                            $link->sample_file
                            || $link->sample_url
                        ): ?>
                            <a 
                                href="<?php echo e(route('shop.downloadable.download_sample', ['type' => 'link', 'id' => $link->id])); ?>"
                                target="_blank"
                                class="text-[#0A49A7] ml-2"
                            >
                                <?php echo app('translator')->get('shop::app.products.view.type.downloadable.sample'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <v-error-message
                name="links[]"
                v-slot="{ message }"
            >
                <p
                    class="mt-1 text-red-500 text-xs italic"
                    v-text="message"
                >
                </p>
            </v-error-message>
        </div>
    <?php endif; ?>

    <?php echo view_render_event('bagisto.shop.products.view.downloadable.before', ['product' => $product]); ?>

<?php endif; ?>
<?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/products/view/types/downloadable.blade.php ENDPATH**/ ?>