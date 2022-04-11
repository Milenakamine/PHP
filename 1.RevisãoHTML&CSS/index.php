<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Estudo PHP - Introdução</title>
</head>



<body>

    <!-- cabeçalho -->
    <header class="containerP">
        <h1>Estudos de PHP</h1>
        <h2>Indice de Exercícios</h2>

    </header>


    <!-- pricipal -->
    <main class="containerS">
        <div class="conteudo">


            <nav class="moduloGeral">


                <div class="modulo verde">
                    <h3>Modulo 01 </h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Modulo 02 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo azul">
                    <h3>Modulo 03 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo roxo">
                    <h3>Modulo 04 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo laranja">
                    <h3>Modulo 05 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo verde-escuro">
                    <h3>Modulo 06 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo vermelho-escuro">
                    <h3>Modulo 07 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo azul-escuro">
                    <h3>Modulo 08 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>

                <div class="modulo roxo-escuro">
                    <h3>Modulo 09 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>   
                        <li><a href="#">Exercicio B</a></li>   
                        <li><a href="#">Exercicio C</a></li>   
                    </ul>
                </div>


            </nav>


        </div>

    </main>


    <!-- rodape -->
    <!-- introdução do php -->
    <footer class="containerT">
        <!-- php para colocar a data, por padrão o php utiliza o sistema de data D=DIA, M=MES, Y=ANO, S=SEGUNDOS -->
        Produzido pela desenvolvedora: Milena Akamine <?= date('Y') ?> </footer>
        <!-- HTML                                     PHP -->
    </body>
    
</html>

<!-- Foi alterado o arquivo de 'index.html' para 'index.php', a partir disso
pode-se utilizar o código php para gerar de forma dinâmica o html; então
o código em html continua sendo usual e funcionando. Tudo auquilo que já foi construído
com html, css e JavaScript  funcionam de forma transparente dentro do php, então se torna um PLUS
de HTML, CSS e JavaScript + PHP-->