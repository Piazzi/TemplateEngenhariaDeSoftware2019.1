<?php include("header.php") ?>

<div class="container">
    <h1 style="color: #b11016; text-align:center" class="page-header">Registre-se</h1>
    <?php 
    if(isset($_GET["cadastrado"]) && $_GET["cadastrado"] == true) {
    ?>
        <p class="alert alert-success" >Cadastro concluído com sucesso.</p>
    <?php
    }
    if(isset($_GET["cadastrado"]) && $_GET["cadastrado"] == false) {
    ?>
        <p class="alert alert-danger" >Cadastro não pôde ser concluído.</p>
    <?php
    } ?>
    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <form method="post" action="verifica-registro.php">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control" name="nome" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input class="form-control" name="senha" type="password" required>
                        </div>   
                        <input hidden name="categoria" value="cliente">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h4 style="text-align: center">Ao se registrar você precisa ler nossos <strong>Termos e Condições</strong></h4>

    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eveniet cum libero nisi neque inventore, quas pariatur maxime ipsa animi repudiandae eaque at consequuntur rerum nobis eius eligendi totam similique?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero magni laudantium illo consequatur, porro voluptas aliquid fugit cupiditate ea, sit quaerat? Repudiandae maiores quia rerum amet eos aperiam in. Quidem!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php")?>
