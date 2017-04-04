@extends('back.layout')
@section('content')
    <?php $title = 'О клинике'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_about"
                   class="input block_field" value="{{$static_about->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_about"
                   class="input block_field" value="{{$static_about->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_about"
                   class="input block_field" value="{{$static_about->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_about"
                   class="input block_pre_field" value="{{$static_about->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Текст "О клинике"
            <textarea data-field-type="text" data-field-name="aboutfirm" data-block="static_about"
                      class="input block_field" placeholder="Текст">{{$static_about->aboutfirm_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-name"> Фото для 3д-тура
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="d3_tour" data-field-type="image"
                           data-block="static_about" value="{{$static_about->d3_tour_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="d3_tour" data-field-type="image"
                           data-block="static_about" value="{{$static_about->d3_tour_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="d3_tour" data-field-type="image"
                           data-block="static_about" value="{{$static_about->d3_tour_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="d3_tour" data-field-type="image"
                           data-block="static_about" value="{{$static_about->d3_tour_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="d3_tour" data-field-type="image"
                           data-block="static_about" value="{{$static_about->d3_tour_image->icon_link}}">
                </div>
                <img src="/images/{{$static_about->d3_tour_image->preview_link}}" class="preview"
                     data-field-name="d3_tour" data-block="static_about">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$static_about->d3_tour_image->alt}}" data-field-name="d3_tour"
                           data-block="static_about">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                               data-field-name="d3_tour" data-field-type="image" data-block="static_about">
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ссылка на 3д-тур
            <input type="text" data-field-type="string" data-field-name="d3_link" data-block="static_about"
                   class="input block_field" value="{{$static_about->d3_link_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Текст ссылки
            <input type="text" data-field-type="string" data-field-name="linktext" data-block="static_about"
                   class="input block_field" value="{{$static_about->linktext_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_about" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
