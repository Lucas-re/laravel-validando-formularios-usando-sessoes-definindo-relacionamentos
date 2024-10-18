<?php 
/**
 * Após criarmos a validação identificamos duas incoveniencias: a primeira é que teriamos que copiar a validação para p metodo update
 * e o outro ponto é que estamos com a mensagem de erro misturado português com ingles 
 * 
 * Podemos, ao inves de utilizar o request generico do laravel, criar o nosso proprio request e lá, informar todas as regras necessarias 
 * e para isso vamos utilizar o artisan 
 * 
 * php artisan make:request <nome_da_classe>  |  php artisan make:request SeriesFormRequest 
 * 
 * Esse comando cria uma classe de request no diretorio app/Http/Requests e dentro dessa classe, ele ja extende o form request do laravel
 * então ja temos todas as funcionalidade de uma requisição normal
 * 
 * Dentro dessa classe, o metodo authorize() nos informa quem esta autorizado a fazer esse request, estando true, todos estão autorizados
 * a fazer o request
 * 
 * No metodo rules() ficam as regras de validação. Dentro dele adicionamos a nossa regra de validação
 * 
 * 'nome' => ['required','min:3']
 * 
 * Dessa forma temos uma classe especifica para as nossas validações, com isso, no Controller, ao inves de utilizarmos a classe Request, usamos
 * o SeriesFormRequest nos metodos que precisam validar o campo nome
 * 
 * Agora para modificarmos as mensagens de erro, temos duas formas; uma delas é utilizando o proprio SeriesFormRequest. Podemos implementar o 
 * metodo messages() retornando um array com todas as mensagens que podemos utilizar. Nele associamos o tipo do erro a mensagem que será exibida
 * Exemplo:
 * 
 * 'nome.required' => 'O campo nome é obrgatório'
 * 
 * Com isso caso o nome não seja informado, irá exebir a mensagem associada.
 * E se quisermos uma mensagem personalizada para todos os erros de nome adicionamos um * a regra. Exmplo:
 * 
 * 'nome.*' => 'O campo nome é obrgatório',
 * 
 * Essas formas com o messages, utilizamos quando queremos ter uma mensagem especifica para um campo especifico de um request especifico
 * E o que queremos é traduzir a mensagem que esta sendo exibida em inglês
 * 
 * Para isso acessamos a pasta lang e percebemos que todo o sistema esta em inglês e poderiamos trabalhar com traduções.
 * A configuração do idioma fica em config/app.php; dentro desse aruquivo temos o Application Locale Configuration que por padrão vem definido 
 * como inglês. E porderiamos alterar para quando o laravel inicializar ele veirificar do navegador qual é a linguagem utilizada e ele modificaria.
 * Ou poderiamos setar como portugues.
 * 
 * Mas, em validation.php dentro da pasta lang/en podemos escrever essa mensagem em português. Esse arquivo tem os textos para cada uma das regras 
 * existentes 
 */