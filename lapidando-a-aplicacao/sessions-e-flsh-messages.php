<?php
/**
 * Em sessões o php permite que armazenamos uma informação pequena no servidor e depois, através de um cookie que o servidor envia novamente, 
 * ele consegue identificar quem é o dono daquela sessão.
 * 
 * Como podemos pegar os dados de uma sessão? atraves do request temos um metodo chamado session(). Em session temos varios metodos disponiveis para
 * trabalhar com a sessão. Exemplo:
 * 
 * $request->session()->put('mensagem.sucesso', 'Serie removida com sucesso');
 * 
 * Com isso estamos adicionando um dado na sessão, e agora, na index, precisamos recuperar esse dado da sessão.
 * Adicionamos no metodo index o request recuperando o dado que foi adicionado na sessão. Exemplo:
 * 
 * $mensagemSucesso = $request->session()->get('mensagem.sucesso');
 * 
 * Agora precisamos mandar isso para a view. Adicionamos ele no retorno do metodo index da seguinte forma:
 * 
 * with('mensagemSucesso', $mensagemSucesso);
 * 
 * Agora, em nossa view, adicionamos uma tag para exibição da mensagem de sucesso caso ela exista 
 * 
 *  @isset($mensagemSucesso)
 *       <div class="alert alert-success">
 *           {{ $$mensagemSucesso }}
 *       </div>
 *   @endisset 
 * 
 * Agora, após a exibição da mensagem de sucesso, vamos remover essa inforamção após a exibição.
 * Adicionamos ao metodo destroy, após excluir a informação, a remoção da seguinte forma:
 * 
 * $request->session()->forget('mensagem.sucesso');
 * 
 * Uma forma mais simples de fazer isso é usando o flash. Ao inves de utilizarmos o put para adicionar a mensagem a sessão, utilizamos o flash()
 * e com isso não precisamos adicionar o metodo forget() para 'apagar' a informação da sessão porque com o flash ela já é 'esquecida'
 * automaticamente. Exemplo:
 * 
 * $request->session()->flash('mensagem.sucesso', 'Serie removida com sucesso');
 * 
 * Uma outra facilidade é, ao inves de utilizar a session dentro de request, podemos utilizar uma função que o laravel chama de helper para 
 * buscar dados da sessão. Com isso temos a função session()
 * Para adicionar dados na sessão:
 * 
 * session(['mensagem.sucesso' => 'Serie removida com sucesso']);
 * 
 * Para recuperar dados da sessão 
 */