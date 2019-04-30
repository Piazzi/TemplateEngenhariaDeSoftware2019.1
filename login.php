<?php include("header.php"); ?>
<div class="container" center-block>
    <div class="row login">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <form method="post" action="./validate-login.php">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Login</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input class="form-control" placeholder="Email do Usuário" name="email" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="senha" type="password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                        </div>
                            <button type="submit" class="btn btn-default">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center">Não possui login?</h4>
                </div>
                <div class="panel-body">
                    <h3 style="text-align: center"><a href="register.php">Registre-se <i class="fa fa-plus-circle"></i></a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<hr>
<?php include("footer.php"); ?>