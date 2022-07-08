<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>Editar
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[ 
                    <img width=25px src="<?=$base;?>/assets/images/document.png">  ]</a>
                <hr/>
                Excluir
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm ('Tem certeza que deseja excluir?')">[ 
                    <img width=25px src="<?=$base;?>/assets/images/trash.png">  ]</a>
            </td>      
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer');?>