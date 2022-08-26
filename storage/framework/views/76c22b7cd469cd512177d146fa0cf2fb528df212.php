<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            <?php if($produtos->count() > 0): ?>
                <?php if (isset($component)) { $__componentOriginala5c2e8d797ccb87269339ccaed995fb47120006b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ProductsTable::class, ['listProducts' => $produtos,'type' => 'striped'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('products-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\ProductsTable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5c2e8d797ccb87269339ccaed995fb47120006b)): ?>
<?php $component = $__componentOriginala5c2e8d797ccb87269339ccaed995fb47120006b; ?>
<?php unset($__componentOriginala5c2e8d797ccb87269339ccaed995fb47120006b); ?>
<?php endif; ?>
            <?php else: ?>
                <p>Produtos não encontrados! </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Aluno\php\cstsi_daoo_20221_laravel\resources\views/livewire/products.blade.php ENDPATH**/ ?>