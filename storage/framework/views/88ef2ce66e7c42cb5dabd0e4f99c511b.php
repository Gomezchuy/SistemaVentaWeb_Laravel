
<?php
    $menu = \Webkul\Core\Tree::create();

    foreach (config('menu.customer') as $item) {
        $menu->add($item, 'menu');
    }

    $menu->items = core()->sortItems($menu->items);

    $customer = auth()->guard('customer')->user();
?>

<div class="panel-side grid grid-cols-[1fr] gap-[30px] max-w-[380px] max-h-[1320px] overflow-y-auto overflow-x-hidden journal-scroll min-w-[342px] max-xl:min-w-[270px] max-md:max-w-full">
    
    <div class="grid grid-cols-[auto_1fr] gap-[15px] items-center px-[20px] py-[25px] border border-[#E9E9E9] rounded-[12px]">
        <div class="">
            <img
                src="<?php echo e($customer->image_url ??  bagisto_asset('images/user-placeholder.png')); ?>"
                class="w-[60px] h-[60px] rounded-full"
                alt="Profile Image"
            >
        </div>

        <div class="flex flex-col justify-between">
            <p class="text-[25px] font-mediums">Hello! <?php echo e($customer->first_name); ?></p>

            <p class="text-[#6E6E6E] "><?php echo e($customer->email); ?></p>
        </div>
    </div>

    
    <?php $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="max-md:border max-md:border-t-0 max-md:border-r-[1px] max-md:border-l-[1px] max-md:border-b-[1px] max-md:border-[#E9E9E9]   max-md:rounded-[6px]">
            <v-account-navigation>
                
                <div class="max-md:flex max-md:gap-x-[15px] max-md:justify-between max-md:items-center pb-[20px] max-md:bg-gray-200 max-md:px-[25px] max-md:py-[20px] max-md:rounded-tl-[6px] max-md:rounded-tr-[6px] accordian-toggle md:pointer-events-none select-none">
                    <p class="text-[20px] md:font-medium"><?php echo app('translator')->get($menuItem['name']); ?></p>

                    <span class="icon-arrow-right text-[24px] md:hidden"></span>
                </div>

                
                <div class="grid border border-t-0 border-r-[1px] border-l-[1px] border-b-[1px] border-[#E9E9E9] rounded-[6px] max-md:hidden max-md:border-none accordian-content">
                    <?php if(! (bool) core()->getConfigData('general.content.shop.wishlist_option')): ?>
                        <?php
                            unset($menuItem['children']['wishlist']);
                        ?>
                    <?php endif; ?>

                    <?php $__currentLoopData = $menuItem['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($subMenuItem['url']); ?>">
                            <div class="flex justify-between px-[25px] py-[20px] border-t-[1px] border-[#E9E9E9] hover:bg-[#f3f4f682] cursor-pointer <?php echo e(request()->routeIs($subMenuItem['route']) ? 'bg-gray-100' : ''); ?>">
                                <p class="flex gap-x-[15px] items-center text-[18px] font-medium">
                                    <span class="<?php echo e($subMenuItem['icon']); ?>  text-[24px]"></span>

                                    <?php echo app('translator')->get($subMenuItem['name']); ?>
                                </p>

                                <span class="icon-arrow-right text-[24px] max-md:hidden"></span>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </v-account-navigation>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php if (! $__env->hasRenderedOnce('03d1cc61-4f5c-484c-8c8b-7b2ce25ce7d2')): $__env->markAsRenderedOnce('03d1cc61-4f5c-484c-8c8b-7b2ce25ce7d2');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-account-navigation-template">
        <div>
            <slot></slot>
        </div>
    </script>

    <script type="module">
        app.component("v-account-navigation", {
            template: '#v-account-navigation-template',

            data() {
                return {
                    isOpen: false,
                };
            },

            mounted() {
                this.$el.querySelector('.accordian-toggle').addEventListener('click', () => {
                    this.toggleAccordion();
                });
            },

            methods: {
                toggleAccordion() {
                    this.isOpen = ! this.isOpen;

                    if (this.isOpen) {
                        this.$el.querySelector('.icon-arrow-right').classList.add('icon-arrow-down');
                        this.$el.querySelector('.icon-arrow-down').classList.remove('icon-arrow-right');

                        this.$el.querySelector('.accordian-content').style.display = "grid";
                    } else {
                        this.$el.querySelector('.icon-arrow-down').classList.add('icon-arrow-right');
                        this.$el.querySelector('.icon-arrow-right').classList.remove('icon-arrow-down');

                        this.$el.querySelector('.accordian-content').style.display = "none";
                    }
                },
            },
        });
      </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/components/layouts/account/navigation.blade.php ENDPATH**/ ?>