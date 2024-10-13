<?php
/**
 * Agora vamos adicionar o nome da serie que foi manipulada a mensagem. Com isso, ao criar uma serie, precisamos pegar o nome 
 * dela para adicionar à mensagem. 
 * O metodo statico create nos retorna a model que foi criada, então de ja temos o dado em mãos, basta adicionarmos ela à mensagem
 * 
 * $serie = Serie::create($request->all());
 * 
 * Com isso adicionamos o nome da serie na criação da mensagem da sessão.
 * 
 * $request->session()->put('mensagem.sucesso',"Serie '{$serie->nome}' adicionada com sucesso");
 * 
 * Porém, para exibirmos o nome da serie que será removida, o metodo destroy não nos retorna o nome da serie. Com isso, vamos precisar 
 * primeiro buscar os dados da serie para depois exclui-lá. 
 * 
 * Para isso utilizamos o metod find().
 * 
 * $serie = Serie::find($idSerie);
 * 
 * Temos uma outra forma. 
 * O laravel consegue nos ajudar quando temos parametros nas rotas e esses parametros nos tras algumas informações, e essas informações vão 
 * variar a depender do tipo do parametro. Exemplo:
 * Para acessarmos os atributos da serie diretamente pelo parametro da requisição adicionamos ao destroy Serie $series
 * 
 * destroy(Request $request, Serie $series)
 * 
 * Com isso, ja acessamos os atributos e metodos desse objeto diretamente, como por exemplo: delete() e nome. Exemplo
 * 
 * $series->delete();
 * $series->nome
 */