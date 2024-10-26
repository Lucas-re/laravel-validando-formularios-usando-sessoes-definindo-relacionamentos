<?php
/**
 * No relacionamento de series com temporadas, além de informar com qual classe ela vai se relacionar, podemos informar qual o nome
 * da chave estrangeira
 * 
 * return $this->hasMany(Season::class, 'series_id');
 * 
 * Caso seja necessario fazer com que a chave estrangeira referenciasse uma coluna na tabela que não é a chave primaria, poderiamos passar 
 * como parametro a coluna
 * 
 * return $this->hasMany(Season::class, 'series_id', 'id');
 * 
 * Agora vamos criar as migrations das classes criadas:
 * Na migration das temporadas vamos ter algum inteiro para fazer relacionamento com o id da serie 
 * 
 * $table->unsignedBigInteger('series_id');
 * 
 * Para criar o relacionamento de chave estrangeira podemos utilizar o metodo foreign(), onde passamos o nome do campo e a qual campo e tabela
 * ele faz referencia
 * 
 * $table->foreign('series_id')->references('id')->on('series');
 * 
 * uma outra forma de fazer esse relacionamento é utilizando o metdo foreignId(), que cria o campo ja se relacionando ao campo primario da tabela
 * passada na relação
 * 
 * $table->foreignId('series_id')->constrained();
 * 
 * Para cada serie, se acessarmos o metodo temporada, temos acesso ao relacionamento e com isso conseguimos modificar a query. Exemplo:
 * 
 * $series->temporadas()->whereIn()->get();
 * 
 * Se acessarmos a temporada como uma propriedade, temos como resultado a coleção, ou seja, todas as temporadas. Exemplo
 * 
 * $series->temporadas;
 */
