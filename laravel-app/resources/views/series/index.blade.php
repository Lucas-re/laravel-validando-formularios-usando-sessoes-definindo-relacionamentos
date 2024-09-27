<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="{{route('series.create')}}">Adicionar Nova Serie</a>
    
    <table class="table table-hover">
        <thead>
            <tr>
                
                <th></th>
                <th scope="col">ID</th>
                <th></th>
                <th scope="col">NOME</th>
                <th></th>
                <th scope="col">AÇÕES</th>
                
            </tr>
        </thead>
        @foreach ($aSeries as $serie)

                <tbody>
                    <tr>
                        <td></td>
                        <td id="id">{{$serie->id}}</td>
                        <td></td>
                        <td >{{$serie->nome}}</td>
                        <td></td>
                        <td> <a class="btn btn-danger mb-2" href="/series/excluir">Excluir</a> </td>
                        
                    </tr>
                </tbody>
            
        @endforeach
    </table>
    
</x-layout>