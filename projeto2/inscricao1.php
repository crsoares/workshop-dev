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
                                        <li class="active"><a href="#">Inscrição</a></li>
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
            
            <div id="inscricao1" class="row">
                <div class="col-md-12">
                    <h1>Realize sua Inscrição</h1>
                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%"></div>
                        <span class="sr-only">5% complete</span>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nome</label>
                            <input class="form-control" type="text" placeholder="Seu Nome" >
                        </div>
                        <div class="col-md-6">
                            <label>Telefone</label>
                            <input class="form-control" type="text" placeholder="Seu Telefone" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                            <input class="form-control" type="text" placeholder="Seu E-mail" >
                        </div>
                        <div class="col-md-6">
                            <label>Repetir Email</label>
                            <input class="form-control" type="text" placeholder="Repetir E-mail" >
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="inscricao2.php" class="btn btn-primary">Slavar e ir para o proximo</a>
                    </div>
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
