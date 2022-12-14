<?php
    include('../../back_end/private/protect.php');
?>



<!doctype html>
<html lang="pt-br">
<head>

    <title>Web Code - Noticias em sua tela a toda hora !</title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Veja as ultimas noticias em sua tela a todo mundo, seja ela sobre tecnologia ou esporte, explore a grande variedade de assunto e temas, e se mantenha atualizado em qualquer lugar">
    <meta name="author" content="Vitor Gabriel, and Template Bootstrap">

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- ========================== Style sheets ========================== -->
        <link rel="stylesheet" href="./app.css">
        <link rel="stylesheet" href="./index.css">

        <!-- ========================== Scripts Sheets ========================== -->
        <script src="./app.js" defer></script>
        <script src="./index.js"></script>


        <style>
            .containerUsername
            {
                padding: .3rem 1.5rem .3rem 1.5rem;
                border: .1rem solid #000;
                border-radius: .3rem;

                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            .containerUsername i
            {
                font-size: 2.3rem;
                margin-right: 1.5rem;
            }
        </style>

</head>
<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">
                        <i class="bi bi-gear-fill fs-5"></i>
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"/>
                            <path d="M21 21l-5.2-5.2"/>
                        </svg>
                    </a>
                    <div class="containerUsername">
                        <i class="bi bi-person-circle"></i>
                        <?php
                            echo "<h1 class='usernameSession' style='font-family: momospace; font-size: 1.1rem'>".$_SESSION['nomeUser']."</h1>";
                        ?>
                    </div>
                    <a class="btn btn-outline-secondary ms-1" href="../../back_end/private/logout.php">Sair</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Mundo</a>
                <a class="p-2 link-secondary" href="#">Filmes</a>
                <a class="p-2 link-secondary" href="#">Tecnologia</a>
                <a class="p-2 link-secondary" href="#">Design</a>
                <a class="p-2 link-secondary" href="#">Cultura</a>
                <a class="p-2 link-secondary" href="#">neg??cio</a>
                <a class="p-2 link-secondary" href="#">Politica</a>
                <a class="p-2 link-secondary" href="#">Opini??o</a>
                <a class="p-2 link-secondary" href="#">Ci??ncia</a>
                <a class="p-2 link-secondary" href="#">Vida</a>
                <a class="p-2 link-secondary" href="#">Estilo</a>
                <a class="p-2 link-secondary" href="#">viagem</a>
            </nav>
        </div>

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Profiss??es do futuro</h1>
                <p class="lead my-3">Entenda como a tecnologia estar?? presente em todas as profiss??es em um futuro n??o muito distante, e qual ser?? o motivo disso, praticidade ?, talvez seja o alto nivel...</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continuar lendo...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static card-post">
                        <strong class="d-inline-block mb-2 text-primary">Tecnologia</strong>
                        <h3 class="mb-0">Desempenho de sistemas de TI.</h3>
                        <div class="mb-1 text-muted">04/10/2022</div>
                        <p class="card-text mb-auto">4 tend??ncias para otimizar o desempenho de sistemas de TI.</p>
                        <a href="#" class="stretched-link">ver mais...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static card-post">
                        <strong class="d-inline-block mb-2 text-primary">Tecnologia</strong>
                        <h3 class="mb-0">Intelig??ncia artificial (IA.). </h3>
                        <div class="mb-1 text-muted">04/10/2022</div>
                        <p class="card-text mb-auto">Como atenuar os riscos da intelig??ncia artificial para as empresas?.</p>
                        <a href="#" class="stretched-link">ver mais...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    Esteja por dentro tamb??m...
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">Vantagens da linguagem java no mercado atual.</h2>
                    <p class="blog-post-meta">Outubro 4, 2022 por <a href="#">Web_Code</a></p>

                    <p>
                        Por oferecer v??rios recursos para o seu desenvolvimento, o Java ?? uma das linguagens de programa????o mais conhecidas.E para que voc?? entenda mais sobre essa linguagem e quais suas vantagens e desvantagens, a web_code preparou esse artigo com as informa????es que voc?? precisa. Segue a leitura! 
                    </p>
                    <hr>
                    <p>
                        O Java ?? uma linguagem de programa????o que iniciou-se em 1991, quando uma equipe da Sun Microsystems come??ou um projeto de uma linguagem com foco em orienta????o de projetos. 
                    </p>
                    <br>
                    <blockquote>
                        <p>
                            Com isso, ganhou popularidade, passou por v??rias adapta????es para dispor uma intera????o total com os objetos descritos, e atualmente seu uso ?? muito amplo, ?? poss??vel utiliz??-lo em aplicativos e sistemas entregando muita versatilidade.
                            Todavia, assim como qualquer linguagem de programa????o, o Java apresenta pr??s e contras sobre sua opera????o. Algumas de suas caracteristicas s??o:
                        </p>
                    </blockquote>
                    <p>
                        Os elementos inseridos nessa linguagem s??o chamados de ???objetos que interagem entre si???. 

                        No Java, a sintaxe utilizada tem semelhan??as com outra linguagem que ?? a C++, por??m com caracter??sticas mais simplificadas. 
                        <br>
                        Al??m disso, os c??digos s??o escritos dentro de uma certa classe, no qual todos os elementos se chamam: objetos. Por isso a linguagem Java se orienta para objetos. 
                        <br>
                        A principal motiva????o dessa linguagem era ser simples e de f??cil aprendizado, para que pudesse ser usada por programadores iniciantes. 
                        <br>
                        Outra caracter??stica ?? que o Java ?? uma linguagem multiplataforma. Ou seja, tem a capacidade de rodar em v??rios sistemas diferentes: Android, Windows, Linux. 
                        <br>
                        Ademais, tem ferramentas que possibilita o desenvolver v??rias aplica????es, na qual a torna muito vers??til e intuitiva. 
                        <br>
                        Algumas dessas ferramentas s??o:
                        <br>                         
                        <ul>
                            <li>Spring: permite a invers??o de controle;</li>
                            <li>Log4j: o objetivo ?? facilitar a cria????o de logs;</li>
                            <li>Junit: atua na cria????o de testes unit??rios.</li>
                        </ul>
                    </p>
                    <h2>iPhone 14: 3 inova????es que a Apple trouxe em sua nova linha de smartphones</h2>
                    <p class="blog-post-meta">Outubro 4, 2022 por <a href="#">Web_Code</a></p>
                    <p>
                        A Apple comemorou o 15?? anivers??rio do iPhone com o lan??amento da sua mais nova vers??o: o iPhone 14.
                        <hr>
                        Em um evento h??brido ??? que contou com a maioria das apresenta????es pr??-gravadas, al??m de uma apresenta????o ao vivo para um pequeno grupo de convidados na sede da Apple em Cupertino, na Calif??rnia ???, a empresa revelou os quatro novos aparelhos que comp??em a linha iPhone 14 (iPhone 14, 14 Plus, 14 Pro e 14 Pro Max).
                    </p>
                    <hr>
                    <p>
                        l??m disso, tamb??m anunciou novas vers??es de seus fones de ouvido e rel??gios.Mas, afinal, quais s??o as principais inova????es do iPhone 14?
                    </p>
                    <ul>
                        <li>1. C??meras e sensores aprimorados</li>
                        <li>2. Detec????o de acidentes</li>
                        <li>Tela sempre ativa no Pro</li>
                    </ul>

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Outras</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Novas</a>
                </nav>

            </div>

            <aside class="col-md-4">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">Sobre</h4>
                    <p class="mb-0">
                        Esteja por dentro de suas noticias favoritas a todo momento, para uma melhor precis??o de recomenda????o fa??a login, e selecione os temas que mais de agrada, (configura????es > publico > feed > configura????es)
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Arquivos Gravados</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Mar??o 2022</a></li>
                        <li><a href="#">Fevereiro 2022</a></li>
                        <li><a href="#">Janeiro 2022</a></li>
                        <li><a href="#">Dezembro 2022</a></li>
                        <li><a href="#">Novembro 2022</a></li>
                        <li><a href="#">Outubro 2022</a></li>
                        <li><a href="#">Setembro 2022</a></li>
                        <li><a href="#">Agosto 2022</a></li>
                        <li><a href="#">Julho 2022</a></li>
                        <li><a href="#">Junho 2022</a></li>
                        <li><a href="#">Maio 2022</a></li>
                        <li><a href="#">Abril 2022</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Contato</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside>

        </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
        <p> Template <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Voltar para o topo</a>
        </p>
    </footer>



</body>

</html>