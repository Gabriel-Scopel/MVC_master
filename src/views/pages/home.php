<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a> //base se refere a url padrão do sistema 
//essa rota "/novo" foi criada em routes.php. Lá nós temos o redirecionamento para o controler que possui a classe homecontroller que possui o método add


<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id'];?></td> //id, nome e email pegos no homecontroller
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