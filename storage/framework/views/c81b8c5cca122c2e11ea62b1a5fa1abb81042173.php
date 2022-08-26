<div class="flex flex-col w-full h-full pt-40 bg-gray-600/50" @click="idmodal=null">
    <div class="flex flex-col justify-center w-1/2 shadow dark:bg-gray-700 h-auto m-5 p-3 bg-white self-center rounded-md">

        <div class="p-2 mb-2 border-b-2 border-gray-300 ">
                <h1 class="text-2xl"><?php echo e($produto->nome); ?></h1>
        </div>
        <p><?php echo e($produto->descricao); ?></p>
        <ul>
            <li>Quantidade: <?php echo e($produto->qtd_estoque); ?></li>
            <li>Preço: <?php echo e($produto->preco); ?></li>
            <li>Importado: <?php echo e($produto->importado ? 'Sim' : 'Não'); ?></li>
        </ul>
        <form id="<?php echo e($produto->id); ?>"
             wire:submit.prevent=
                "remove(<?php echo e($produto->id); ?>)">
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
        </form>
        <table>
            <tr align="center">
                <td>
                    <button class='btn btn-info' @click="idmodal=null">Cancelar</button></a>
                </td>
                <td>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button-error','data' => ['@click' => 'idmodal=null;','form' => ''.e($produto->id).'','type' => 'submit','name' => 'confirmar','class' => 'btn btn-danger bg-']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'idmodal=null;','form' => ''.e($produto->id).'','type' => 'submit','name' => 'confirmar','class' => 'btn btn-danger bg-']); ?>Deletar
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php /**PATH C:\Users\Aluno\php\cstsi_daoo_20221_laravel\resources\views/components/forms/produto-remove.blade.php ENDPATH**/ ?>