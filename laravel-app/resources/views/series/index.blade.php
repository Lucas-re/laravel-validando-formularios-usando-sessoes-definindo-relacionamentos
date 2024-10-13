<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="{{route('series.create')}}">Adicionar Nova Serie</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($aSeries as $serie)
        <li class="list-group-item d-flex justify-content-between align-item-center">
            {{$serie->nome}}

            <span class="d-flex">
                <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm"> E </a>
                <form action="{{route('series.destroy', $serie->id)}}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"> X </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
    
</x-layout>