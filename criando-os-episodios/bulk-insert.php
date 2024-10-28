<?php
/**
 * Se temos necessidades especificas o framework não vai nos ajudar tanto.
 * Se olharmos a documentação de relacionamentos do laravel vamos ver que além do create() existe o createMany(), saveMany(), mas todos esses
 * fazem inserções um por um dos arrays que serão passados e isso ainda não resolveria nosso problema
 * 
 * Para resolver o nosso problema vamos ter que criar um insert. Para cada uma das temporadas que tivermos, vamos adicionar as informações 
 * delas a um array de seasons e nesse array de seasons vamos adicionar as informações. Exemplo:
 */

//  $serie = Serie::create($request->all());

//  $aSeasons = [];
//  for ($i = 1; $i <= $request->seasonQty; $i++){
//      $aSeasons[] = [
//          'series_id' => $serie->id,
//          'number' => $i
//      ];
//  }
//  Season::insert($aSeasons);

//  $aEpisodes = [];
//  foreach ($serie->seasons as $season){

//      for($j = 1; $j <= $request->episodesPerSeason; $j++){
//          $aEpisodes[] = [
//              'season_id' => $season->id,
//              'number' => $j
//          ];
//      }
//  }
//  Episode::insert($aEpisodes);