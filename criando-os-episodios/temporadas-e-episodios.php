<?php 
/**
 * Primeiro vamos alterar a view do formulario de criar serie deixando de usar o componente 
 * Além do nome da serie, vamos criar mais dois inputs para adicionar as temporadas e os episodios 
 * 
 * OBS: Para facilitar o debug é interessante que se instale o debugbar do laravel:
 * 
 * composer require barryvdh/laravel-debugbar --dev
 * 
 * Agora, após criar a serie vamos também criar as temporadas, e, para cada temporada será adiciondo os episodios. 
 * Vamos criar um for aninhado para fazer a iteração. Exemplo:
 * 
 *      $serie = Serie::create($request->all());
 *      for ($i = 1; $i <= $request->seasonQty; $i++){
 *          $season = $serie->seasons()->create([
 *              'number' => $i, 
 *          ]);
 *
 *          for($j = 1; $j <= $request->episodesPerSeason; $j++){
 *              $season->episodes()->create([
 *                  'number' => $j
 *              ]);
 *          }
 *          
 *      }
 *
 * Porém dessa forma ele precisa inserir os dados executando muitas queries o que afeta a performance.
 */