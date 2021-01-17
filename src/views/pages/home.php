<?php $render('header'); ?>

<div class="divLink">
    <a class="addLinkBg link" href="<?=$base;?>/novo">Novo Usuario +</a>
</div>

<div class="table-responsive col-sm">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>EDITAR</th>
                <th>EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario):?>
                <tr>
                    <td><?=$usuario['id'];?></td>
                    <td><?=$usuario['nome'];?></td>
                    <td><?=$usuario['email'];?></td>
                    <td>
                        <a class="editLinkBg link" href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">EDITAR</a>
                    </td>
                    <td>
                        <a class="delLinkBg link" href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" 
                        onclick="return confirm('Tem certeza que deseja excluir?')">EXCLUIR</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>    
    </table>
</div>
<?php $render('footer'); ?>