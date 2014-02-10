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
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Quem Somos</a></li>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Contatos</a></li>
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Menu de Dropdown <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Inscrição</a></li>
                                        <li class="active"><a href="#">Abas</a></li>
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
            
            <div class="row" id="blog">
                <div class="col-md-3 hidden-xs" id="left">
                    <h3>Mais Votadas</h3>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-rounded" src="http://placehold.it/64x64" >
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Titulo da Postagem</h4>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-rounded" src="http://placehold.it/64x64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Titulo da Postagem</h4>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                </p>
                            </div>
                        </li>
                        <hr>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-rounded" src="http://placehold.it/64x64" >
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Titulo da Postagem</h4>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9" id="content">
                    <h1>Ultimas do Blog</h1>
                    
                    <div class="post">
                        <div class="btn-group pull-right hidden-xs">
                            <button class="btn btn-default">E-mail</button>
                            <button class="btn btn-default">Imprimir</button>
                            <button class="btn btn-default">PDF</button>
                        </div>
                        <h2>Titulo do Post</h2>
                        <a href="post.php" class="pull-left">
                            <img src="http://placehold.it/128x128" class="img-rounded img-responsive" >
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc eu dolor nunc. Sed accumsan vitae leo eu vehicula. 
                            Morbi ut nunc et ligula elementum ullamcorper a eu turpis. 
                            Etiam ultricies eleifend porta. Nullam euismod massa quis 
                            tortor posuere, id porta tortor iaculis. Vivamus mauris 
                            lorem, malesuada sit amet tempor vel, iaculis eu risus. 
                            Nulla bibendum mattis libero, id eleifend enim porttitor ut. 
                            Phasellus eget massa porttitor, condimentum nisi eget, semper 
                            magna. Aenean pellentesque, felis sed faucibus tempor, est urna 
                            laoreet purus, volutpat dapibus turpis lacus ut magna. Vestibulum 
                            pulvinar nulla non ultrices faucibus. Sed molestie justo vitae 
                            velit rhoncus, a tristique odio tempus. Curabitur ante magna, 
                            vehicula at tortor vel, rutrum commodo ipsum.
                        </p>
                        <div class="btn-group hidden-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Publicar no twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Publicar no Facebook
                            </button>
                            <button class="btn btn-info">Leia o Post Completo &rarr;</button>
                        </div>
                        
                        <div class="btn-group visible-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Facebook
                            </button>
                            <button class="btn btn-info">&rarr;</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    
                    <div class="post">
                        <div class="btn-group pull-right hidden-xs">
                            <button class="btn btn-default">E-mail</button>
                            <button class="btn btn-default">Imprimir</button>
                            <button class="btn btn-default">PDF</button>
                        </div>
                        <h2>Titulo do Post</h2>
                        <a href="post.php" class="pull-left">
                            <img src="http://placehold.it/128x128" class="img-rounded img-responsive" >
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc eu dolor nunc. Sed accumsan vitae leo eu vehicula. 
                            Morbi ut nunc et ligula elementum ullamcorper a eu turpis. 
                            Etiam ultricies eleifend porta. Nullam euismod massa quis 
                            tortor posuere, id porta tortor iaculis. Vivamus mauris 
                            lorem, malesuada sit amet tempor vel, iaculis eu risus. 
                            Nulla bibendum mattis libero, id eleifend enim porttitor ut. 
                            Phasellus eget massa porttitor, condimentum nisi eget, semper 
                            magna. Aenean pellentesque, felis sed faucibus tempor, est urna 
                            laoreet purus, volutpat dapibus turpis lacus ut magna. Vestibulum 
                            pulvinar nulla non ultrices faucibus. Sed molestie justo vitae 
                            velit rhoncus, a tristique odio tempus. Curabitur ante magna, 
                            vehicula at tortor vel, rutrum commodo ipsum.
                        </p>
                        <div class="btn-group hidden-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Publicar no twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Publicar no Facebook
                            </button>
                            <button class="btn btn-info">Leia o Post Completo &rarr;</button>
                        </div>
                        
                        <div class="btn-group visible-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Facebook
                            </button>
                            <button class="btn btn-info">&rarr;</button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <hr>
                    
                    <div class="post">
                        <div class="btn-group pull-right hidden-xs">
                            <button class="btn btn-default">E-mail</button>
                            <button class="btn btn-default">Imprimir</button>
                            <button class="btn btn-default">PDF</button>
                        </div>
                        <h2>Titulo do Post</h2>
                        <a href="post.php" class="pull-left">
                            <img src="http://placehold.it/128x128" class="img-rounded img-responsive" >
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc eu dolor nunc. Sed accumsan vitae leo eu vehicula. 
                            Morbi ut nunc et ligula elementum ullamcorper a eu turpis. 
                            Etiam ultricies eleifend porta. Nullam euismod massa quis 
                            tortor posuere, id porta tortor iaculis. Vivamus mauris 
                            lorem, malesuada sit amet tempor vel, iaculis eu risus. 
                            Nulla bibendum mattis libero, id eleifend enim porttitor ut. 
                            Phasellus eget massa porttitor, condimentum nisi eget, semper 
                            magna. Aenean pellentesque, felis sed faucibus tempor, est urna 
                            laoreet purus, volutpat dapibus turpis lacus ut magna. Vestibulum 
                            pulvinar nulla non ultrices faucibus. Sed molestie justo vitae 
                            velit rhoncus, a tristique odio tempus. Curabitur ante magna, 
                            vehicula at tortor vel, rutrum commodo ipsum.
                        </p>
                        <div class="btn-group hidden-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Publicar no twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Publicar no Facebook
                            </button>
                            <button class="btn btn-info">Leia o Post Completo &rarr;</button>
                        </div>
                        
                        <div class="btn-group visible-xs">
                            <button class="btn btn-info">
                                <img src="img/twitter2.png" class="flutuar-ico" >
                                Twitter
                            </button>
                            <button class="btn btn-info">
                                <img src="img/facebook.png" class="flutuar-ico" >
                                Facebook
                            </button>
                            <button class="btn btn-info">&rarr;</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    
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
