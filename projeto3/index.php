<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>3 projeto curso bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/template.css" rel="stylesheet" media="screen">
        
        <!-- HTML5 compativel com IE8 -->
        <!--[if 1t IE 9]>
            <script src="/js/html5shiv.js"></script>
            <script src="/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Navegacao</span>
                        <navbar class="icon-bar"></navbar>
                        <navbar class="icon-bar"></navbar>
                        <navbar class="icon-bar"></navbar>
                    </button>
                    <h4><a class="brand" href="#">B2B - Curso de Bootstrap</a></h4>
                </div>
                <div class="collapse navbar-collapse navbar-top pull-left">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Contatos</a></li>
                    </ul>
                </div>
                <div class="pull-right" style="margin-right: 15px;">
                    <span id="botao-carrinho" style="margin-right: 10px;">
                        <a href="#" id="meu-carrinho" class="btn btn-info" data-toggle="popover" 
                           data-placement="bottom" data-html="true" 
                           data-content="nenhum produto foi adicionado. <br><br><a href='#' class='btn btn-success'>Comprar Produtos</a>"
                           data-original-title="Carrinho de Compras">Meu Carrinho</a>
                    </span>
                    <span style="vertical-align: middle; padding-right: 10px;">Crysthiano Aguiar</span>
                    <img src="http://placehold.it/40x40" class="img-circle" style="margin-top: 5px; margin-bottom: 5px;" >
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-2">
                    <p>
                        <img src="http://placehold.it/203x180" class="img-responsive" >
                    </p>
                    <br>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="#">
                                <img src="img/dashboard.png" > Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/faq.png" > Sistema de FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/comprar.png" > Comprar Produtos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/carrinho2.png" > Carrinho de Compras
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/sair.png" > Sair
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <h1>Sistema B2B - Dashboard</h1>
                    <div class="row" id="icones-dashboard">
                        <div class="col-md-3">
                            <div class="bloco-icone">
                                <h4>Meu Saldo</h4>
                                <div>
                                    <img src="img/saldo.png" >
                                    <span class="texto-bloco">R$ 356,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bloco-icone">
                                <h4>Meu Saldo</h4>
                                <div>
                                    <img src="img/saldo.png" >
                                    <span class="texto-bloco">R$ 356,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bloco-icone">
                                <h4>Meu Saldo</h4>
                                <div>
                                    <img src="img/saldo.png" >
                                    <span class="texto-bloco">R$ 356,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bloco-icone">
                                <h4>Meu Saldo</h4>
                                <div>
                                    <img src="img/saldo.png" >
                                    <span class="texto-bloco">R$ 356,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Ultimos Produtos Adicionados</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="http://placehold.it/265x186/F0F0F0;" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            <footer>
                <p>&copy;Curso de Bootstrap 2013 - Todos os direitos reservados</p>
            </footer>
            
        </div>
        
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        
        <script src="js/bootstrap.js"></script>
        
        <script>
            $(function(){
              $("#meu-carrinho").popover();  
            });
        </script>
    </body>
</html>
    