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

                <div class="modulo laranja">
                    <h3>4.Array </h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=array&file=ativ_array">Ativ. Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes_array">Operações Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=multi">Multidimensionais</a></li>
                        <li><a href="exercicio.php?dir=array&file=constantes">Constantes</a></li>
                        <li><a href="exercicio.php?dir=array&file=get">$GET</a></li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">Comparação</a></li>
                    </ul>
                </div>

                <div class="modulo verde-escuro">
                    <h3>5.Estruturas de Controle</h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=repeticoes&file=ativ_for">Ativ. For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=ativ_impressao">Ativ. Impressão</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=ativ_tabela">Ativ. Tabela</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=ativ_tabela2">Ativ. Tabela 2</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break Continue</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=while">While</a></li>

                    </ul>
                </div>

                <div class="modulo vermelho-escuro">
                    <h3>6.Estruturas de Controle</h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=funcoes&file=escopo">Função & Escopo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos & Retorno</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=palindromo">Atividade Palindromo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variáveis</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumento Padrão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=anonimas">Funções Anônimas</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closure & Callable</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=ativ_recursao">Atividade de Recursão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>

                    </ul>
                </div>

                <div class="modulo azul-escuro">
                    <h3>7.POO</h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=classes_objetos&file=classe">Primeira Classe</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=classe_data">Classe Data</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=const_destrutor">Const. e Destrutor</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros Estáticos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=abstract">Classe Abstrata</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=ativ_erros">Ativ. Erros</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=modificador_final">Modificador Final</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=traits_01">Traits 01</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=traits_02">Traits 02</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=magic_methods">Métodos Mágicos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=polimorfismo">Polimorfismo</a></li>
                    </ul>
                </div>

                <div class="modulo roxo-escuro">
                    <h3>8.Includes</h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=includes&file=include">Include </a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_funcao">Include Função</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_vs_requiere">Include vs Require</a></li>
                        <li><a href="exercicio.php?dir=includes&file=require_return">Require & return</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_once">Include Once</a></li>
                        <li><a href="exercicio.php?dir=includes&file=ativ_include">Atividade iclude </a></li>

                    </ul>
                </div>

                <div class="modulo laranja-escuro">
                    <h3>9. Namespace</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=namespace&file=basico">Exemplo Básico</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=sub_namespaces">Sub-Namespaces</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=use_as">Use/As</a> </li>
                    </ul>
                </div>

                <div class="modulo verde">
                    <h3>10. Trat. de Erro</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tratamentoDeErro&file=try_catch">Try/Catch</a></li>
                        <li><a href="exercicio.php?dir=tratamentoDeErro&file=erros_personalizados">Erros Personalizados</a></li>
                        <li><a href="exercicio.php?dir=tratamentoDeErro&file=ativi_intdiv_teste">Ativ. intdiv</a></li>
                        <li><a href="exercicio.php?dir=tratamentoDeErro&file=gerenciador_erro">Error Handler</a></li>
                    </ul>
                </div>


                <div class="modulo vermelho">
                    <h3>10.Sessão </h3>
                    <ul>
                        <!-- no href, precisa ter o ?dir=teste para puxar o arquivo sem pecisar do diretório da pasta -->
                        <!-- <li><a href="exercicio.php?dir=teste">Exercicio A</a></li>    -->
                        <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Sessões</a></li>
                       

                    </ul>
                </div>

            </nav>


        </div>

    </main>


    <!-- rodape -->
    <!-- introdução do php -->
    <footer class="containerT">
        <!-- php para colocar a data, por padrão o php utiliza o sistema de data D=DIA, M=MES, Y=ANO, S=SEGUNDOS -->
        Produzido pela desenvolvedora: Milena Akamine <?= date('Y') ?>
    </footer>
    <!-- HTML                                     PHP -->
</body>

</html>

<!-- Foi alterado o arquivo de 'index.html' para 'index.php', a partir disso
pode-se utilizar o código php para gerar de forma dinâmica o html; então
o código em html continua sendo usual e funcionando. Tudo auquilo que já foi construído
com html, css e JavaScript  funcionam de forma transparente dentro do php, então se torna um PLUS
de HTML, CSS e JavaScript + PHP-->