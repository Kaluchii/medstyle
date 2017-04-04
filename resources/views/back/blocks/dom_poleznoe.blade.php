@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="poleznoe" data-owner-id="0">
        @foreach($dom_poleznoe->poleznoe_group  as $item_poleznoe)
            @include('back.blocks.groupitems.dom_poleznoe.poleznoe   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="poleznoe" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="poleznoe_wrap" data-owner-id="0">
        @foreach($dom_poleznoe->poleznoe_wrap_group  as $item_poleznoe_wrap)
            @include('back.blocks.groupitems.dom_poleznoe.poleznoe_wrap   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="poleznoe_wrap" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="polez_pokazania" data-owner-id="0">
        @foreach($dom_poleznoe->polez_pokazania_group  as $item_polez_pokazania)
            @include('back.blocks.groupitems.dom_poleznoe.polez_pokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="polez_pokazania" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="polez_protivopokazania"
        data-owner-id="0">
        @foreach($dom_poleznoe->polez_protivopokazania_group  as $item_polez_protivopokazania)
            @include('back.blocks.groupitems.dom_poleznoe.polez_protivopokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="polez_protivopokazania"
            data-descr="Эл. первой группы" data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="polez_after_proc" data-owner-id="0">
        @foreach($dom_poleznoe->polez_after_proc_group  as $item_polez_after_proc)
            @include('back.blocks.groupitems.dom_poleznoe.polez_after_proc   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="polez_after_proc" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_poleznoe" data-group="polez_effect_up" data-owner-id="0">
        @foreach($dom_poleznoe->polez_effect_up_group  as $item_polez_effect_up)
            @include('back.blocks.groupitems.dom_poleznoe.polez_effect_up   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_poleznoe" data-group="polez_effect_up" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_poleznoe" data-entity="block" data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
