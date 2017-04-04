@extends('back.layout')
@section('content')
    <?php $title = 'Услуги'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_services"
                   class="input block_field" value="{{$static_services->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_services"
                   class="input block_field" value="{{$static_services->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_services"
                   class="input block_field" value="{{$static_services->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_services"
                   class="input block_pre_field" value="{{$static_services->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Задний фон
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                           data-block="static_services" value="{{$static_services->background_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                           data-block="static_services" value="{{$static_services->background_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                           data-block="static_services" value="{{$static_services->background_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                           data-block="static_services" value="{{$static_services->background_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                           data-block="static_services" value="{{$static_services->background_image->icon_link}}">
                </div>
                <img src="/images/{{$static_services->background_image->preview_link}}" class="preview"
                     data-field-name="background" data-block="static_services">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$static_services->background_image->alt}}" data-field-name="background"
                           data-block="static_services">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                               data-field-name="background" data-field-type="image" data-block="static_services">
                    </label>
                </div>
            </div>
            <div class="block">
                <label class="input-name">Описание
                    <textarea data-field-type="text" data-field-name="descriptions" data-block="static_services"
                              class="input block_field"
                              placeholder="Текст">{{$static_services->descriptions_field}}</textarea>
                </label>
            </div>
        </label>

        <div class="block">
            <label class="input-name">Категории услуг</label>

            <table class="spec">
                <thead>
                <tr>
                    <td>Категория услуг</td>
                    <td></td>
                    <td></td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_services" data-group="serv_category"
                       data-owner-id="0">
                @foreach($dom_services->serv_category_group as $item_serv_category)
                    @include('back.blocks.groupitems.dom_services.serv_category')
                @endforeach
                </tbody>
                <tfoot>
                <tr class="bottom">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_services" data-group="serv_category"
                                data-descr="Эл. первой группы" data-owner-id="0">
                            Добавить категорию
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>


    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_services" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
