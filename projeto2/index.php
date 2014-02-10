<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>2 projeto curso bootstrap</title>
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
        
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Título do modal</h4>
                    </div>
                    <div class="modal-body">
                        Conteúdo do Modal
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row" id="topo">
                <div class="col-md-5">
                    <a href="index.php">
                        <img src="img/logo-bootstrap.gif" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-7 text-right">
                    <a href="#" class="btn btn-danger" rel="popouver" data-placement="bottom"
                       data-toggle="popover" data-content="Descrição do popover" 
                       data-original-title="Titulo do popover">Popouver</a>
                    
                    <a href="#myModal" role="button" data-toggle="modal" class="btn btn-info">Minha Modal</a>
                </div>
            </div><!-- fim do topo -->
            
            <div id="menu" class="row">
                <div class="col-md-12">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Navegação</span>
                                <navbar class="icon-bar"></navbar>
                                <navbar class="icon-bar"></navbar>
                                <navbar class="icon-bar"></navbar>
                            </button>
                        </div><!-- Fim navbar-header -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Quem Somos</a></li>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Contatos</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Menu de Dropdown <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Inscrição</a></li>
                                        <li><a href="#">Abas</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form pull-right hidden-xs" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite a palavra....">
                                </div>
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </form>
                        </div>
                    </div><!-- Fim do navbar -->
                </div>
            </div><!-- Fim do menu -->
            
            <div id="slide" class="row">
                <div class="col-md-12">
                    <div id="myCarrousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarrousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarrousel" data-slide-to="1"></li>
                            <li data-target="#myCarrousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="active item">
                                <img class="media-object img-rounded" src="http://placehold.it/1170x350/B7394C">
                            </div>
                            <div class="item">
                                <img class="media-object img-rounded" src="http://placehold.it/1170x350/3895B8">
                            </div>
                            <div class="item">
                                <img class="media-object img-rounded" src="http://placehold.it/1170x350/BAB436">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarrousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarrousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row" id="noticias">
                <div class="col-md-4">
                    <h2>Título da Notícia</h2>
                    <p>
                        <img src="img/fone.png" class="img-responsive pull-left">
                        Donec id elit non mi porta 
                        <a href="#" rel="tooltip" data-original-title="Exemplo de Tooltip">gravida</a>
                        at eget metus. 
                       Fusce dapibus, tellus ac cursus commodo, tortor 
                       mauris condimentum nibh, ut fermentum massa justo 
                       sit amet risus. Etiam porta sem malesuada magna 
                       mollis euismod. Donec sed odio dui.
                    </p>
                    <p>
                        <a class="btn btn-default" href="#">Mais Detalhes &raquo;</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Titulo da Noticia</h2>
                    <p>
                        <img src="img/grana.png" class="img-responsive pull-left">
                        Donec id elit non mi porta gravida at eget metus. 
                       Fusce dapibus, tellus ac cursus commodo, tortor 
                       mauris condimentum nibh, ut fermentum massa justo 
                       sit amet risus. Etiam porta sem malesuada magna 
                       mollis euismod. Donec sed odio dui.
                    </p>
                    <p>
                        <a class="btn btn-default" href="#">Mais detalher &raquo;</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Tititulo da Noticia</h2>
                    <p>
                        <img src="img/livro.png" class="img-responsive pull-left" >
                        Donec id elit non mi porta gravida at eget metus. 
                       Fusce dapibus, tellus ac cursus commodo, tortor 
                       mauris condimentum nibh, ut fermentum massa justo 
                       sit amet risus. Etiam porta sem malesuada magna 
                       mollis euismod. Donec sed odio dui.
                    </p>
                    <p>
                        <a class="btn btn-default" href="#">Mais detalhes &raquo;</a>
                    </p>
                </div>
            </div>
            
            <hr>
            
            <footer>
                <p>&copy; Curso de Bootstrap 2013 - Todos os direitos reservados.</p>
            </footer>
            
        </div><!-- Fim do container -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        
        <script src="js/bootstrap.js"></script>
        
        <script type="text/javascript">
            $(function(){
                $("[rel='popouver']").popover();
                $("[rel='tooltip']").tooltip();
            });
        </script>
    </body>
</html>
