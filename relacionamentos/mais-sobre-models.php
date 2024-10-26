<?php
/**
 * Podemos criar uma forma de informar para o laravel para que, sempre que ele for buscar dados, utilizar um escopo de busca. E justamente
 * o nome dessa tecnica é escopo.
 * 
 * Existem escopos globais e locais. Nos escopos locais iremos informar que queremos pegar todas as series do escopo; já os escopos globais
 * serão aplicados sempre que for buscar as series
 * 
 * Adicionamos esse escopos globais em um metodo do laravel, que é executado pelo proprio laravel, chamado booted(), ou seja, quando essa model
 * for inicializada é adicionado esse escopo.
 * dentro dele adicionado a chamada para o addGlobalScope() e passamos para ele o nome que o escopo terá e uma função que vai configurar esse escopo
 * e essa função recebe por parametro um queryBuilder do Eloquent
 * Desse builder podemos adicionar um orderBy('nome'). Exemplo:
 * 
 * protected static function booted(){
 * 
 *  self::addGlobalScope('ordered', function(Builder $queryBuilder){
 *      $queryBuilder->orderBy('nome');
 *  });
 * 
 * }
 * 
 * Dessa forma, sempre que for consultadas as series, elas ja virão ordenadas
 * 
 * Podemos criar um escopo local. Exemplo:
 * 
 *  public function scopeActiveSeries(Builder $queryBuilder)
 *  {
 *      return $queryBuilder->where('active', true);
 *  }
 * 
 * E para acessar esse escopo local, adicionariamos ele ao controller. Dessa forma teriamos acesso ao queryBuilder, e poderiamos ordenar 
 * e etc. Exemplo:
 * 
 * $aSeries = Serie::activeSeries()->get();
 * 
 * Um outro detalhe interessante sobre os relacinamentos: Sempre que buscarmos uma serie ela virá sem suas temporadas e só se tentarmos acessar 
 * as temporadas que o eloquent busca as temporadas dela no banco. O nome disso é Lazy Loading, para que não seja preciso ficar buscando dados que 
 * são desnecessarios. 
 * Mas se queremos que em uma busca das series ele traga as series e suas temporadas, podemos fazer isso atraves do metodo with() passando todos os 
 * relacionamentos que queremos adicionar. Exemplo
 * 
 * $aSeries = Serie::with(['temporadas'])->get();
 * 
 * 
 * 
 */