<x-layout title="Nova Série">
    <x-series.forms :action="route('series.store')" :acao="$acao" :nome="old('nome')" :update="false"/>
</x-layout>