@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_technologys" data-group="technologys" data-owner-id="0">
        @foreach($dom_technologys->technologys_group  as $item_technologys)
            @include('back.blocks.groupitems.dom_technologys.technologys   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="technologys" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_technologys" data-group="technologys_wrap"
        data-owner-id="0">
        @foreach($dom_technologys->technologys_wrap_group  as $item_technologys_wrap)
            @include('back.blocks.groupitems.dom_technologys.technologys_wrap   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="technologys_wrap" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_technologys" data-group="tech_pokazania" data-owner-id="0">
        @foreach($dom_technologys->tech_pokazania_group  as $item_tech_pokazania)
            @include('back.blocks.groupitems.dom_technologys.tech_pokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="tech_pokazania" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_technologys" data-group="tech_protivopokazania"
        data-owner-id="0">
        @foreach($dom_technologys->tech_protivopokazania_group  as $item_tech_protivopokazania)
            @include('back.blocks.groupitems.dom_technologys.tech_protivopokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="tech_protivopokazania"
            data-descr="Эл. первой группы" data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_technologys" data-group="tech_after_proc" data-owner-id="0">
        @foreach($dom_technologys->tech_after_proc_group  as $item_tech_after_proc)
            @include('back.blocks.groupitems.dom_technologys.tech_after_proc   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="tech_after_proc" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_technologys" data-group="tech_effect_up" data-owner-id="0">
        @foreach($dom_technologys->tech_effect_up_group  as $item_tech_effect_up)
            @include('back.blocks.groupitems.dom_technologys.tech_effect_up   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_technologys" data-group="tech_effect_up" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_technologys" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
