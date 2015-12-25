<div class="container-fluid">
    <nav class="navbar navbar-default">  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><?= anchor('Home', 'Home') ?></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alunos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Mensalidades</a></li>
                        <li><a href="#">Frequencia</a></li>
                    </ul>
                </li>
                <li><a href="#">Exames</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configurações<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?= anchor('Academia', 'Academias') ?></li>
                        <li><?= anchor('Dojo', 'Dojos') ?></li>
                        <li><?= anchor('ArteMarcial', 'Artes Marciais') ?></li>
                        <li><?= anchor('Graduacao', 'Graduações') ?></li>
                        <li class="divider"></li>
                        <li><?= anchor('Turma', 'Turmas') ?></li>
                        <li><?= anchor('Horario', 'Horários') ?></li>
                        <li class="divider"></li>
                        <li><?= anchor('TipoContato', 'Tipos de Contato') ?></li>
                        <li class="divider"></li>
                        <li><?= anchor('Usuario', 'Usuários') ?></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="Login/logout" >Logout</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

