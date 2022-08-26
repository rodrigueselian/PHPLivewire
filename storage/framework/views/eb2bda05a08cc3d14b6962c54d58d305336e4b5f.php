<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        
        <h2 class='text-2xl'>Atualizar Produto</h2>
     <?php $__env->endSlot(); ?>

    <form id='update' action="<?php echo e(route('update',$produto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="<?php echo e($produto->nome); ?>"/></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10"><?php echo e($produto->descricao); ?></textarea></td>
            </tr>
            <tr>
                <td>Quantidade em Estoque:</td>
                <td><input type="text" name="qtd_estoque" value="<?php echo e($produto->qtd_estoque); ?>"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco" value="<?php echo e($produto->preco); ?>"/></td>
            </tr>
            <tr>
                <td>Importado:</td>
                <td><input type="checkbox" name="importado" <?php echo e(($produto->importado)?'checked':''); ?>/></td>
            </tr>
        </table>
    </form>
    <table>
        <tr align="center">
            <td>
                <a href="/produtos"><button class='btn btn-danger'>Cancelar</button></a>
            </td>
            <td >
                <input form="update" type="submit" class='btn btn-success' name='confirmar' value="Atualizar"/>
            </td>
        </tr>
    </table>
    <?php if(isset($msg)): ?>
    <p><?php echo e($msg); ?></p>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Aluno\php\cstsi_daoo_20221_laravel\resources\views/produto_edit.blade.php ENDPATH**/ ?>