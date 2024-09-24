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
        $aSeries = Serie::query()->orderBy('id')->get();
        // $aSeries = Serie::query()->where('nome', 'Arrow')->get();
        // dd($aSeries);



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
        $nomeSerie = $request->input('nome');

        /**
         * Insere dados atraves da classe DB
         */
        // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        // return redirect('/series');



        /**
         * Insere dados atraves do Eloquent ORM 
         */
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
           
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
