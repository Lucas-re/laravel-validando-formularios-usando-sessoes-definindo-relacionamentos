<x-layout title="Nova Série">

    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
        <a class="btn btn-secondary" href="{{route('series.index')}}">Voltar</a>
    </form>

</x-layout>