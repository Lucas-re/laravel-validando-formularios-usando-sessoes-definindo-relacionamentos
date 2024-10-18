<?php 
/**
 * Vamos criar vallidações no request para que a requisição seja validada
 * No metodo store adicionamos a validação do request, validate()
 * 
 * $request->validate();
 * 
 * O metodo validate() espera algumas regras, e caso essas regras não sejam satisfeitas o laravel redireciona o usuario
 * de volta para a ultima url; e além de redirecionar ele vai adicionar os campos os campos que foi enviado todo o request
 * em uma flash message
 * 
 * Passamos para o validate um array de regras informando quais regras ele deve respeitar. Exemplo:
 * 
 *         $request->validate([
 *            'nome' => 'required|min:3'
 *         ]);
 * 
 * ou podemos passar as regras em um array.
 *
 *         $request->validate([
 *            'nome' => ['required','min:3']
 *         ]);
 * 
 * Em ambos casos temos uma validação para o campo nome onde ele é obrigatório e precisa de pelo menos 3 caracteres
 */