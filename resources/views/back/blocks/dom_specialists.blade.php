@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_specialists" data-group="specs" data-owner-id="0">
        @foreach($dom_specialists->specs_group  as $item_specs)
            @include('back.blocks.groupitems.dom_specialists.specs   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_specialists" data-group="specs" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_specialists" data-group="spec_certs" data-owner-id="0">
        @foreach($dom_specialists->spec_certs_group  as $item_spec_certs)
            @include('back.blocks.groupitems.dom_specialists.spec_certs   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_specialists" data-group="spec_certs" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_specialists" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
