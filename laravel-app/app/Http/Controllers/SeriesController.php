<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{   
    /**
     * Index: retorna pagina principal
     */
    public function index(Request $request)
    {
        /**
         * pega o parametro id passado pela url
         */
        // return $request->get('id');



        /**
         * pega a url
         */
        // return $request->url();



        /**
         * faz o redirecionamento da pagina colocando o status code
         */
        // return response('', 302, ['location' => 'https://www.google.com']);



        /**
         * faz o redirecionamento de forma simples
         */
        // return redirect('https://www.google.com');

        

        /**
         * Consulta dados utilizado a classe DB
         */
        // $aSeries = DB::select('SELECT nome FROM series; ');
        // dd($aSeries);



        /**
         * Consultas dados utilizando o Eloquent ORM
         */
        // $aSeries = Serie::all();
        // $aSeries = Serie::query()->where('nome', 'Arrow')->get();
        $aSeries = Serie::query()->orderBy('id')->get();



        /**
         * temos essa forma de se retorna para uma view
         */
        
        // return view('listar-series', [
        //     'aSeries' => $aSeries
        // ]);



        /**
         * forma mais compacta
         */
        // return view('listar-series', compact('aSeries'));



        /**
         * com o metodo with 
         */
         return view('series.index')->with('aSeries', $aSeries);
        
    }


    /**
     * Create: retona pagina de cadastro
     */
    public function create()
    {
        return view('series.create');
    }


    /**
     * Store: Insere nova serie no banco
     */
    public function store(Request $request) 
    {

        ##### receber dados ########

        /**
         * Busca somente o campo especificado passado no parametro
         */
        //$request->only(['nome']);


        /**
         * Cria uma exceção. Busca todos os campos na requisição
         * exceto o que foi informado no parametro
         */
        //$request->except(['_token']);


        /**
         * pegar o valor acessando o indice do atributo
         */
        // $nomeSerie = $request->input('nome');


        /**
         * pegar o valor diretamente do atributo
         */
        // $nomeSerie = $request->nome;


        /**
         * Retorna todos os dados da requisição 
         * em um array associativo.
         */
        // $request->all();



        ###### Incluir ########

        /**
         * Pega todos os valores da requisição em um array associativo 
         * e insere utilizando o Mass Asingnment
         */
        Serie::create($request->all());


        /**
         * Insere dados atraves da classe DB
         */
        // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        // return redirect('/series');


        /**
         * Insere dados atraves do Eloquent ORM 
         */
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();


        /**
         * Redirecionamento simples
         */
        //return redirect('/series');


        /**
         * Redirecionamento com metodo route
         * modelo 1
         */
        //return redirect()->route('series.index'); 


        /**
         * Redirecionamento com metodo route
         * modelo 2
         */
        //return redirect(route('series.index'));


        /**
         * Redirecionamento com metodo route
         * modelo 2
         */
        return to_route('series.index');
           
    }

    
    /**
     * 
     */
    public function excluir(Request $request)
    {
        
        $idSerie = $request->all();
        dd($idSerie);

        
       
    }
}
