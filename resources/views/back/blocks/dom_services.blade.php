@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_services" data-group="serv_category" data-owner-id="0">
        @foreach($dom_services->serv_category_group  as $item_serv_category)
            @include('back.blocks.groupitems.dom_services.serv_category   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="serv_category" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_services" data-group="services" data-owner-id="0">
        @foreach($dom_services->services_group  as $item_services)
            @include('back.blocks.groupitems.dom_services.services   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="services" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_services" data-group="serv_pokazania" data-owner-id="0">
        @foreach($dom_services->serv_pokazania_group  as $item_serv_pokazania)
            @include('back.blocks.groupitems.dom_services.serv_pokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="serv_pokazania" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_services" data-group="serv_protivopokazania"
        data-owner-id="0">
        @foreach($dom_services->serv_protivopokazania_group  as $item_serv_protivopokazania)
            @include('back.blocks.groupitems.dom_services.serv_protivopokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="serv_protivopokazania"
            data-descr="Эл. первой группы" data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_services" data-group="serv_after_proc" data-owner-id="0">
        @foreach($dom_services->serv_after_proc_group  as $item_serv_after_proc)
            @include('back.blocks.groupitems.dom_services.serv_after_proc   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="serv_after_proc" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_services" data-group="serv_effect_up" data-owner-id="0">
        @foreach($dom_services->serv_effect_up_group  as $item_serv_effect_up)
            @include('back.blocks.groupitems.dom_services.serv_effect_up   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_services" data-group="serv_effect_up" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_services" data-entity="block" data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
