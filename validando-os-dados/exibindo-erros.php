<?php
/**
 * OBS: se estivessemos criando uma api a resposta de redirecionamento não seria interessante. Então o laravel, ao inves de retornar uma 
 * resposta de redirecionamento, ele retorna um json com as mensagens de erro
 * 
 * Quando temos uma validação que falha além de adicionar todo o request na flash message, ele adiciona todas as mensagens de erro.
 * Existe um detalhe por baixo dos panos do laravel que transforma esses erros em uma variavel chamada erros
 * Inclusive, na doc do laravel, existe um html pronto para mostrar todas as mensagens de erros que existirem.
 * Nele é verificado se existe algum dado na vairiavel erro
 * 
 * Pegamos esse template e adicionamos no layout para que em todas as telas sejam exibidas as mensagens de erro, se houver 
 * 
 * além das mensagens de erros, o laravel coloca na flash message toda a requisição, então, caso preciamos preencher o campo de um formulario
 * podemos informar o dado que esta vindo da sessão da seguinte forma:
 * 
 * :nome="old('nome')"
 * 
 * O laravel fornece o metodo old() que pega da flash session a requisição anterior e com isso podemos pegar o valor que tinha sido
 * enviado na requisição.
 */