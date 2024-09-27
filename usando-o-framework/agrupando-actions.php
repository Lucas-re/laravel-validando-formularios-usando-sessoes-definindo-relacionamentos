<?php
/**
 * Vamos agrupar as rotas que direcionam para o mesmo controller:
 * Se temos varios controllers executando ações diferentes, podemos criar um Route::controller() e informar qual o controller que vai estar
 * controlando o grupo de rotas que informamos no metodo group.
 * Dentro do metodo group informamos uma função anonima, e para essa função passamos as definições das rotas sem precisar informar a classe
 * em cada uma delas. Exemplo:
 * 
 *  Route::controller(SeriesController::class)->group(function(){
 *     Route::get('/series', 'index');
 *     Route::get('/series/criar', 'create');
 *     Route::post('/series/salvar', 'store');
 *     Route::get('/series/excluir', 'excluir');
 * });
 * 
 * Uma outra forma, mais simples, de fazer isso é utilizando o Route::resource() informando o grupo de rotas e o nome da classe controller.
 * Exemplo: 
 * 
 * Route::resource('/series', SeriesController::class);
 * 
 * Porém essa forma funciona quando a classe é criada usando as actions com as nomenclaturas padrões do framework, como index, create, store...
 * porque a partir da rota /series, que ele entende que é a index, ele vai tentar acessar as outras actions das outras rotas.
 *  
 */
