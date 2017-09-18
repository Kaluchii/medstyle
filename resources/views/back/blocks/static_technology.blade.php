@extends('back.layout')
@section('content')
    <?php $title = 'Технологии'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_technology"
                   class="input block_field" value="{{$static_technology->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_technology"
                   class="input block_field" value="{{$static_technology->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_technology"
                   class="input block_field" value="{{$static_technology->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_technology"
                   class="input block_pre_field" value="{{$static_technology->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание
            <textarea data-field-type="text" data-field-name="descriptions" data-block="static_technology"
                      class="input block_field"
                      placeholder="Текст">{{$static_technology->descriptions_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Картинка справа
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                           data-block="static_technology"
                           value="{{$static_technology->background_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                           data-block="static_technology"
                           value="{{$static_technology->background_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                           data-block="static_technology"
                           value="{{$static_technology->background_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                           data-block="static_technology"
                           value="{{$static_technology->background_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                           data-block="static_technology" value="{{$static_technology->background_image->icon_link}}">
                </div>
                <img src="/images/{{$static_technology->background_image->preview_link}}" class="preview"
                     data-field-name="background" data-block="static_technology">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$static_technology->background_image->alt}}" data-field-name="background"
                           data-block="static_technology">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                               data-field-name="background" data-field-type="image" data-block="static_technology">
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Сертификаты
            <ul class="group_block group_container" data-block="static_technology" data-group="techno_cert"
                data-owner-id="0">
                @foreach($static_technology->techno_cert_group  as $item_techno_cert)
                    @include('back.blocks.groupitems.static_technology.techno_cert   ')
                @endforeach
            </ul>
        </label>
        <button class="any_create" data-block="static_technology" data-group="techno_cert"
                data-descr="Эл. первой группы"
                data-owner-id="0">
            <span>Добавить сертификат</span>
        </button>
    </div>
    <div class="block">
        <label class="input-name">Список технологий</label>

        <table class="spec">
            <thead>
            <tr>
                <td>Технология</td>
                <td></td>
                <td></td>
                <td>Редактировать</td>
                <td>Удалить</td>
            </tr>
            </thead>
            <tbody class="group-block group_container" data-block="dom_technologys" data-group="technologys"
                   data-owner-id="0">
            @foreach($dom_technologys->technologys_group as $item_technologys)
                @include('back.blocks.groupitems.dom_technologys.technologys')
            @endforeach
            </tbody>
            <tfoot>
            <tr class="bottom">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="any_create" data-block="dom_technologys" data-group="technologys"
                            data-descr="Эл. первой группы" data-owner-id="0">
                        Добавить технологию
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_technology" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
