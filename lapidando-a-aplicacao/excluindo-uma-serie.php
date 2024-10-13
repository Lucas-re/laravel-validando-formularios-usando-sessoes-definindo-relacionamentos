<?php
/**
 * No front da aplicação, vamos adicionar um botão para exluir uma serie., porém, esse botão não poder ser simplesmente um link
 * porque quando temos uma ação que vai acessar o nosso banco de dados ou executar uma regra de negócio e ter algo que é permanente:
 * salva no banco, cria uma mensagem, envia um email; esse tipo de ação não deve ser feito atraves de uma requisição get.
 * 
 * Imagina que após disponibilizar a aplicação na web o motor do google vai acessar esse sistema e vai seguir os links, ou seja, ele vai seguir
 * esse link de remover e vai acabar removendo as series, por exemplo
 * 
 * Então sempre que temos uma açõa que é permanente, iremos usar o verbo POST 
 * Com isso vamos criar a nova rota: 
 * 
 * Route::post('/series/destroy/{id_serie}', [SeriesController::class, 'destroy'])->name('series.destroy');
 * 
 * No arquivo index.blade.php adicionamos o botão de exclusão dentro de um formulario que utiliza do metodo post para enviar a requisição
 * e da action 'series.destroi' passando como paramentro o id da serie:
 * 
 * <form action="{{route('series.destroy',$serie->id)}}" method="POST">
 *   @csrf
 *   <button class="btn btn-danger btn-sm"> X </button>
 * </form>
 * 
 * Agora, para remover uma serie usamos o metodo destroy(), passando por parametro um array de varios id's que queremos remover ou,
 * somente um id 
 * 
 * Serie::destroy($idSerie);
 * 
 * OBS: neste exemplo estamos utilizando o metodo post ao inves de utilizarmos o delete porque o html suporta somente os metodos post e get.
 * Se queremos usar um metodo http que o html não suporta, o laravel nos fornece uma 'ferramenta' para resolver isso.
 * No formulario, além de informar o @csrf informamos que o metodo por baixo dos panos vai ser o DELETE da seguinte forma @method('DELETE')
 * 
 * O laravel não transforma essa requisição em uma requisição utilizando o metodo delete; ele envia um outro campo informando que é para ele
 * tratar como se fosse uma rota no delete. Exemplo:
 * 
 * No formulario:
 * 
 * <form action="{{route('series.destroy',$serie->id)}}" method="POST">
 *   @csrf
 *   @method('DELETE')
 *   <button class="btn btn-danger btn-sm"> X </button>
 * </form>
 * 
 * Na rota:
 * 
 * Route::delete('/series/destroy/{id_serie}', [SeriesController::class, 'destroy'])->name('series.destroy');
 * 
 * Uma outra OBS: quando temos uma rota chamada delete, utilizando os padrões de resource controllers, podemos, simplesmente informar no
 * Route::resource que temos o metodo destroy. Exemplo:
 * 
 * Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy']);
 * 
 * Quando utilizamos dessa forma é seguido o padrão de url Resource Controller. e o padão é: com o nome do parametro, para as rotas que precisam de
 * parametro, sendo a primeira parte da rota no singular. Exemplo: 
 * 
 * /photos/{photos}
 */