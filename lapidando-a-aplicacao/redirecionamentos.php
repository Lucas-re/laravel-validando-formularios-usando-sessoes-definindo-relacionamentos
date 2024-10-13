<?php
/**
 * Vamos recaptular como o laravel consegue injetar algumas dependencias. Exemplo: sempre quando temos uma rota com algum parametro, 
 * conseguimos buscar esse parametro no nosso metodo, simplesmente por ele ter o mesmo nome e o tipo que informamos como vai ser esse
 * parametro, da uma dica para o laravel de como ele vai nos devolver esse dado.
 * 
 * Em metodos de redirecionamento temos um metodo chamado with(). O with faz o redirecionamento com uma flash message, ou seja, com 
 * um dado na flash session. 
 * Com isso podemos simplesmente passar os parametros da sessão. Exemplo:
 * 
 * return to_route('series.index')->with('mensagem.sucesso', "Serie '{$series->nome}' removida com sucesso");
 */