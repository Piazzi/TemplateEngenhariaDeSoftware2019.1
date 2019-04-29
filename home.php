<?php include("header.php");

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

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <a href="#" class="item active">
                <figure>
                    <img class="img-responsive" src="css/img/exemplo-1.jpg">
                </figure>
                <figcaption>
                    <div class="carousel-caption">
                        <h3>Exemplo</h3>
                        <p class="tituloSlide">Exemplo</p>
                    </div>
                </figcaption>
            </a>
            <a href="#" class="item">
                <figure>
                    <img class="img-responsive" src="css/img/exemplo-2.jpg">
                </figure>
                <figcaption>
                    <div class="carousel-caption">
                        <h3>Exemplo</h3>
                        <p class="tituloSlide">Exemplo</p>
                    </div>
                </figcaption>
            </a><a href="#" class="item">
                <figure>
                    <img class="img-responsive" src="css/img/exemplo-3.jpg">
                </figure>
                <figcaption>
                    <div class="carousel-caption">
                        <h3>Exemplo</h3>
                        <p class="tituloSlide">Exemplo</p>
                    </div>
                </figcaption>
            </a>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php include("footer.php"); ?>