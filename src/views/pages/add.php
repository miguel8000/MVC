<?php $render('header'); ?>

<h2>Novo Usuario</h2>

<section>
    <div>
        <form action="<?=$base;?>/novo" method="post">
            <label>
                Nome: <br/>
                <input type="text" class="barra" name="name"/>
            </label><br/>

            <label>
                 E-mail: <br/>
                <input type="email" class="barra" name="email"/>
            </label><br/><br/>

            <input class="botao" type="submit" value="Adicionar"/>
        </form>
    </div>
</section>

<?php $render('footer'); ?>