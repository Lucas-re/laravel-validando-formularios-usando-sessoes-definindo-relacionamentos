<?php
/**
 * Agora vamos imaginar que precisamos mudar as url's das nossas rotas, mas não queremos ficar alterando elas nas view's. 
 * 
 * Podemos utilizar um conceito chamado rotas nomeadas. Seguindo pela documentação do laravel, quando utilizamos o metodo de resource,
 * ele, além de definir a url e a action do controller, ele também defini um nome para a rota. Toda rota pode ter um nome; e informamos 
 * esse nome com um metodo chamado name. Exemplo:
 * 
 * Route::controller(SeriesController::class)->group(function(){
 *       Route::get('/series', 'index');
 *       Route::get('/series/criar', 'create')->name('series.create');
 *       Route::post('/series/salvar', 'store');
 *       Route::get('/series/excluir', 'excluir');
 *  });
 * 
 * Assim, em nossa view, passamos somente o nome da rota para o metodo route() que foi definida, nos eximindo de lembrar das urls de cada rota. 
 * Exemplo:
 * 
 * href="{{route('series.create')}}"
 * 
 * Então, se em algum lugar utilizamos as URL's, podemos passar a utilizar o metodo route(). Exemplo:
 * 
 * redirect(route('series.index'));
 * 
 * Porém, existem sintaxes mais interessantes como nos exemplos:
 * 
 * redirect()->route('series.index'); 
 * 
 * ou
 * 
 * to_route('series.index');
 * 
 * 
 */