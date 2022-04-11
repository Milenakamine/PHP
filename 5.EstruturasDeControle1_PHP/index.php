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
                    <h3>Básico </h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola PHP</a></li>   
                        <li><a href="exercicio.php?dir=basico&file=html">Integração ao HTML</a></li>   
                        <li><a href="exercicio.php?dir=basico&file=css">Integração ao CSS</a></li>   
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>   
                        <li><a href="exercicio.php?dir=basico&file=atividade">Atividade</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=valor">Valores</a></li>   

                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>1.Tipos </h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro (INT)</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Flutuante (FLOAT)</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=ativprecedencia">Ativ. Precedência</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=ativstring">Ativ. String</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>   
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>   
                        
                    </ul>
                </div>
                
                <div class="modulo azul">
                    <h3>2.Variavéis </h3> 
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=ativequacao">Ativ. Equação</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variavéis</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor Referência</a></li>   
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Valor Constante</a></li>   
                        
                    </ul>
                </div>

                <div class="modulo roxo">
                    <h3>3.Controle </h3> 
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else (condicionamento)</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=ativ_pi">Ativ. PI</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=ativ_operadoreslg">Ativ. Operadores Lógicos</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>   
                        <li><a href="exercicio.php?dir=controle&file=ativ_switch">Atividade Switch</a></li>   
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