<v-seo-helper></v-seo-helper>

<?php if (! $__env->hasRenderedOnce('a7760412-7d4c-4682-b78a-1cc3e72c0b6b')): $__env->markAsRenderedOnce('a7760412-7d4c-4682-b78a-1cc3e72c0b6b');
$__env->startPush('scripts'); ?>
    
    <script type="text/x-template" id="v-seo-helper-template">
        <div class="flex flex-col gap-[3px] mb-[30px]">
            <p 
                class="text-[#161B9D] dark:text-white"
                v-text="metaTitle"
            >
            </p>

            <!-- SEO Meta Title -->
            <p 
                class="text-[#135F29]"
                v-text="'<?php echo e(URL::to('/')); ?>/' + (metaTitle ? metaTitle.toLowerCase().replace(/\s+/g, '-') : '')"
            >
            </p>

            <!-- SEP Meta Description -->
            <p 
                class="text-gray-600 dark:text-gray-300"
                v-text="metaDescription"
            >
            </p>
        </div>
    </script>

    <script type="module">
        app.component('v-seo-helper', {
            template: '#v-seo-helper-template',

            data() {
                return {
                    metaTitle: this.$parent.getValues()['meta_title'],

                    metaDescription: this.$parent.getValues()['meta_description'],
                }
            },

            mounted() {
                let self = this;

                self.metaTitle = document.getElementById('meta_title').value;

                self.metaDescription = document.getElementById('meta_description').value;

                document.getElementById('meta_title').addEventListener('input', function(e) {
                    self.metaTitle = e.target.value;
                });

                document.getElementById('meta_description').addEventListener('input', function(e) {
                    self.metaDescription = e.target.value;
                });
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/seo/index.blade.php ENDPATH**/ ?>