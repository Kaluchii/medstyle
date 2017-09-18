@extends('back.layout')
@section('content')
    <?php $title='Слайдер'?>
    <div class="block">
        <label class="input-name">Тайтл страницы</label>
        <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_index_page"
               class="input block_field" placeholder="Текст" value="{{$static_index_page->page_title_field}}">
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)</label>
        <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_index_page"
               class="input block_field" placeholder="Текст" value="{{$static_index_page->seo_description_field}}">
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова</label>
        <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_index_page"
               class="input block_field" placeholder="Текст" value="{{$static_index_page->seo_keywords_field}}">
    </div>
    <div class="block">
        <label class="input-name">Слайдер</label>
        <ul class="group_block group_container slider" data-block="static_index_page" data-group="slider"
            data-owner-id="0">
            @foreach($static_index_page->slider_group  as $item_slider)
                @include('back.blocks.groupitems.static_index_page.slider   ')
            @endforeach
        </ul>

        <button class="any_create" data-block="static_index_page" data-group="slider" data-descr="Эл. первой группы"
                data-owner-id="0">
            <span>Добавить слайд</span>
        </button>

        <div class="block buttons">
            <button class="btn btn-primary pull-right any_save big" data-block="static_index_page" data-entity="block"
                    data-descr="">
                Сохранить
            </button>
        </div>
    </div>
@endsection
