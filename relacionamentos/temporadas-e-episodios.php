<?php
/**
 * Para definirmos um relacionamento com o Eloquent ORM não vamos criar uma propriedade nova, nós vamos criar um metodo de relacionamento
 * Mas antes que criarmos o relacionamento entre serie e temporada, precisamos ter a temporada. E para isso vamos criar as models de temporada
 * e de episódios 
 * 
 * No terminal executamos ´´´ php artisan make:model <nome_da_model> -m ´´´  |  php artisan make:model Season -m
 * 
 * O parametro -m ja cria uma migration da model
 * 
 * Em algum momento que tenhamos uma serie, queremos acessar suas temporadas. E para acessar essa informação, vamos criar um metodo de 
 * relacionamento e o nome desse metodo será o nome pelo qual queremos acessar esse relacionamento, neste caso, temporadas dentro da classe
 * serie
 * 
 * E ele precisa retornar alguma forma de relacionamento. Neste caso, esperamos que uma serie possa ter muitas tempordas, e para isso,
 * criamos o seguinte retorno:
 * 
 * return $this->hasMany(Season::class);
 * 
 * Isso esta informando que uma serie vai ter um relacionamento com a model de temporada do tipo um para muitos. Uma serie possui varias temporadas
 * Inclusive, podemos fazer o relacionamento inverso também; dizendo que uma temporada pertence a alguma serie. Criamos o metodo dentro da classe 
 * Serie que nos retorna este relacionamento
 * 
 * return $this->belongsTo(Serie::class);
 */