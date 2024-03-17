
<?php if($attributes->has('as')): ?>
    <v-form <?php echo e($attributes); ?>>
        <?php echo e($slot); ?>

    </v-form>


<?php else: ?>
    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
        'method' => 'POST',
    ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
        'method' => 'POST',
    ]); ?>
<?php foreach (array_filter(([
        'method' => 'POST',
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

    <?php
        $method = strtoupper($method);
    ?>

    <v-form
        method="<?php echo e($method === 'GET' ? 'GET' : 'POST'); ?>"
        :initial-errors="<?php echo e(json_encode($errors->getMessages())); ?>"
        v-slot="{ meta, errors, setValues }"
        <?php echo e($attributes); ?>

    >
        <?php if (! (in_array($method, ['HEAD', 'GET', 'OPTIONS']))): ?>
            <?php echo csrf_field(); ?>
        <?php endif; ?>

        <?php if(! in_array($method, ['GET', 'POST'])): ?>
            <?php echo method_field($method); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>

    </v-form>
<?php endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/form/index.blade.php ENDPATH**/ ?>