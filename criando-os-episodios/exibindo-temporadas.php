<?php
/**
 * Agora vamos transformar esse novo campo em um link para também exibir as temporadas e episodios da serie
 * Vamos criar um controller de temporadas. No terminal executamos o comando:
 * 
 * ´´´ php artisan make:controller SeasonsController ´´´ 
 * 
 * Depois de criado o controller, criamos a rota que ira trazer as temporadas de uma serie 
 * 
 * Route::get('/series/{serie}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
 * 
 * E no controller das temporadas, criamos o metodo index que ira renderizar a view exibindo as temporadas da serie selecionada
 * 
 * Analisando a rotina percebemos que ela fes diversas queries para buscar a serie suas temporadas e episodios. Com isso estamos desperdiçando 
 * recurso.
 * O que podemos fazer é o eager loading, ou seja, na hora de buscar as temporadas de uma serie dizemos que queremos também os seus episódios 
 * Exemplo:
 * 
 * $aSeasons = $serie->seasons()->with('episodes')->get();
 */