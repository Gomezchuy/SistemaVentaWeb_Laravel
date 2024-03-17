<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => ['hasHeader' => true,'hasFeature' => false,'hasFooter' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['has-header' => true,'has-feature' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
		<?php echo app('translator')->get('shop::app.checkout.success.thanks'); ?>
     <?php $__env->endSlot(); ?>

	<div class="absolute top-[60%] left-[50%] -translate-x-[50%] -translate-y-[60%]">
		<div class="grid gap-y-[20px] place-items-center">
			<img 
				class="" 
				src="<?php echo e(bagisto_asset('images/thank-you.png')); ?>" 
				alt="thankyou" 
				title=""
			>

			<p class="text-[20px]">

				<?php if(auth()->guard('customer')->user()): ?>
					<?php echo app('translator')->get('shop::app.checkout.success.order-id-info', [
							'order_id' => '<a class="text-[#0A49A7]" href="' . route('shop.customers.account.orders.view', $order->id) . '">' . $order->increment_id . '</a>'
					]); ?>
				<?php else: ?>
					<?php echo app('translator')->get('shop::app.checkout.success.order-id-info', ['order_id' => $order->increment_id]); ?> 
				<?php endif; ?>
			</p>

			<p class="text-[26px] font-medium">
				<?php echo app('translator')->get('shop::app.checkout.success.thanks'); ?>
			</p>
			
			<p class="text-[20px] text-[#6E6E6E]">
				<?php echo app('translator')->get('shop::app.checkout.success.info'); ?>
			</p>

			<?php echo e(view_render_event('bagisto.shop.checkout.continue-shopping.before', ['order' => $order])); ?>


			<a href="<?php echo e(route('shop.home.index')); ?>">
				<div class="block w-max mx-auto m-auto py-[11px] px-[43px] bg-navyBlue rounded-[18px] text-white text-basefont-medium text-center cursor-pointer">
             		<?php echo app('translator')->get('shop::app.checkout.cart.index.continue-shopping'); ?>
				</div> 
			</a>
			
			<?php echo e(view_render_event('bagisto.shop.checkout.continue-shopping.after', ['order' => $order])); ?>

			
		</div>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Shop\src/resources/views/checkout/success.blade.php ENDPATH**/ ?>