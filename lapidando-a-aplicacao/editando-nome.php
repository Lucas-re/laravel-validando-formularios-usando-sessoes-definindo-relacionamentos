<?php
/**
 * Vamos implementar a funcionalidade de editar uma serie
 * 
 * Vamos criar um botão que seja um link para a url de editar na view de exibição das series
 * 
 * <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm"> E </a>
 * 
 * Criamos o metodo edit no controller que ira nos retornar a view de edição da series.
 * 
 * Criamos a view para edição em resources/views nela adicionamos na action a rota que leva para o metodo update do controller de series 
 * 
 * :action="route('series.update', $serie->id)"
 * 
 * No controller, criamos o metodo update, responsavel por atualizar os dados da serie a qual foi passado o id
 * 
 */