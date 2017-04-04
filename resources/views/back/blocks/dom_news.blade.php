@extends('back.layout')
@section('content')
    <ul class="group_block group_container" data-block="dom_news" data-group="news" data-owner-id="0">
        @foreach($dom_news->news_group  as $item_news)
            @include('back.blocks.groupitems.dom_news.news   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news" data-descr="Эл. первой группы" data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_news" data-group="news_wrap" data-owner-id="0">
        @foreach($dom_news->news_wrap_group  as $item_news_wrap)
            @include('back.blocks.groupitems.dom_news.news_wrap   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news_wrap" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_news" data-group="news_pokazania" data-owner-id="0">
        @foreach($dom_news->news_pokazania_group  as $item_news_pokazania)
            @include('back.blocks.groupitems.dom_news.news_pokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news_pokazania" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_news" data-group="news_protivopokazania" data-owner-id="0">
        @foreach($dom_news->news_protivopokazania_group  as $item_news_protivopokazania)
            @include('back.blocks.groupitems.dom_news.news_protivopokazania   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news_protivopokazania" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_news" data-group="news_after_proc" data-owner-id="0">
        @foreach($dom_news->news_after_proc_group  as $item_news_after_proc)
            @include('back.blocks.groupitems.dom_news.news_after_proc   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news_after_proc" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <ul class="group_block group_container" data-block="dom_news" data-group="news_effect_up" data-owner-id="0">
        @foreach($dom_news->news_effect_up_group  as $item_news_effect_up)
            @include('back.blocks.groupitems.dom_news.news_effect_up   ')
        @endforeach
    </ul>
    <button class="any_create" data-block="dom_news" data-group="news_effect_up" data-descr="Эл. первой группы"
            data-owner-id="0">
        <span>Добавить элемент первой группы</span>
    </button>

    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="dom_news" data-entity="block" data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
