<?php 
/**
 * Vamos começar a aprender alguns detalhes do framework: 
 * Existem varias formas de pegar alguma coisa que vem do Request; uma outra forma de pegar valores de input pelo request é 
 * acessando diretamente a propriedade. Exemplo: 
 * 
 * $nomeSerie = $request->nome;
 * 
 * Se existe um campo html chamado 'nome' que esta vindo no corpo da requisição, podemos acessar diretamente a propriedade e por baixo dos panos 
 * o laravel ja consegue buscar essa dado da requisição utilizando os metodos magicos como __get
 * 
 * Uma outra forma de buscar dados na requisição e utilizando o metodo all que nos retorna todos os dados da requisição em um array associativo.
 * 
 * $request->all() 
 * 
 * Caso na requisição tivessemos mais de um dado a ser armazenado, precisariamos passar esses valores para cada atributo da classe para ser 
 * incluido; mas o Eloquent nos fornece uma forma de termos um Mass Assignment (Atribuição em massa), ou seja preencher varios campos ao mesmo 
 * tempo. Exemplo:
 * 
 * Serie::create(['nome' => 'Teste']);
 * 
 * Toda model do Eloquent possui esse metodo estatico chamado create, e ele recebe por parametro um array associativo do nome do campo no banco
 * de dados e o valor que será inserido
 * 
 * Para utilizarmos o M.S precisamos informar na model quais campos podem ser atribuindos dessa forma. pra isso utilizamos a propriedade 
 * fillable. o valor dessa propriedade é um array e devemos informar neste array quais campos é permitido fazer essa atribuição em massa
 * 
 * protected $fillable = ['nome']; 
 * 
 * 
 * Se quisessemos buscar somente um campo especifico na requisição utilizamos o metodo only() e passamos para ele, em um array o nome do campo 
 * especifo. Exemplo:
 * 
 * 
 * 
 * 
 */