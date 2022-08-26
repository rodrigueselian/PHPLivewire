<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Editar</h1>
    <div x-data="{
        id:<?php echo e($produto->id); ?>,
        nome:'<?php echo e($produto->nome); ?>',
        descricao:'<?php echo e($produto->descricao); ?>',
        quantidade:<?php echo e($produto->qtd_estoque); ?>,
        preco:<?php echo e($produto->preco); ?>,
        importado:false,
        update(){
            $wire.set('idprod', this.id)
            $wire.set('nome', this.nome)
            $wire.set('descricao', this.descricao)
            $wire.set('quantidade', this.quantidade)
            $wire.set('preco', this.preco)
            $wire.set('importado', this.importado)
            $wire.update();
        }
    }">
    
    <form @submit.prevent="update()" id="produto-edit">
    <?php echo csrf_field(); ?>
        <!-- <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/> -->
        <table>
        <input x-model="id" type="hidden" name="id" />
            <tr>
                <td>Nome:</td>
                <td><input x-model="nome" type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td>
                    <textarea x-model="descricao" name="descricao" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Quantidade em Estoque:</td>
                <td><input x-model="quantidade" type="text" name="qtd_estoque" /></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input x-model="preco" type="number" name="preco" /></td>
            </tr>
            <tr>
                <td>Importado:</td>
                <td><input x-model="importado" type="checkbox" name="importado" /></td>
            </tr>
</table>
</form>
<table>
        <tr align="center">
            <td>
                <button @click="idmodal=null" class='btn btn-danger'>
                    Cancelar
                </button>
            </td>
            <td>
                <button form="produto-edit" @click="idmodal=null" class='btn btn-success bg-green-600'>
                    Editar
                </button>
            </td>
        </tr>
    </table>
</div>

</div>
<?php /**PATH C:\Users\Aluno\php\cstsi_daoo_20221_laravel\resources\views/components/forms/produto-update.blade.php ENDPATH**/ ?>