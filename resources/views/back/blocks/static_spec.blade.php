@extends('back.layout')
@section('content')
    <?php $title = 'Специалисты'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_spec"
                   class="input block_field" value="{{$static_spec->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_spec"
                   class="input block_field" value="{{$static_spec->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_spec"
                   class="input block_field" value="{{$static_spec->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_spec"
                   class="input block_pre_field" value="{{$static_spec->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание
            <textarea data-field-type="text" data-field-name="description" data-block="static_spec"
                      class="input block_field" placeholder="Текст">{{$static_spec->description_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Картинка справа
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="for_life" data-field-type="image"
                           data-block="static_spec" value="{{$static_spec->for_life_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="for_life" data-field-type="image"
                           data-block="static_spec" value="{{$static_spec->for_life_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="for_life" data-field-type="image"
                           data-block="static_spec" value="{{$static_spec->for_life_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="for_life" data-field-type="image"
                           data-block="static_spec" value="{{$static_spec->for_life_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="for_life" data-field-type="image"
                           data-block="static_spec" value="{{$static_spec->for_life_image->icon_link}}">
                </div>
                <img src="/images/{{$static_spec->for_life_image->preview_link}}" class="preview"
                     data-field-name="for_life" data-block="static_spec">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$static_spec->for_life_image->alt}}" data-field-name="for_life"
                           data-block="static_spec">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                               data-field-name="for_life" data-field-type="image" data-block="static_spec">
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Текст под картинкой
            <input type="text" data-field-type="string" data-field-name="for_life_text" data-block="static_spec"
                   class="input block_field" value="{{$static_spec->for_life_text_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Кадры из жизни</label>
        <ul class="group_block group_container slider" data-block="static_spec" data-group="photos" data-owner-id="0">
            @foreach($static_spec->photos_group  as $item_photos)
                @include('back.blocks.groupitems.static_spec.photos   ')
            @endforeach
        </ul>

        <button class="any_create" data-block="static_spec" data-group="photos" data-descr="Эл. первой группы"
                data-owner-id="0">
            <span>Добавить кадр</span>
        </button>
    </div>
    <div class="block">
        <label class="input-name">Список специалистов</label>
        <table class="spec">
            <thead>
            <tr>
                <td>Имя</td>
                <td></td>
                <td></td>
                <td>Редактировать</td>
                <td>Удалить</td>
            </tr>
            </thead>
            <tbody class="group-block group_container" data-block="dom_specialists" data-group="specs"
                   data-owner-id="0">
            @foreach($dom_specialists->specs_group as $item_specs)
                @include('back.blocks.groupitems.dom_specialists.specs')
            @endforeach
            </tbody>
            <tfoot>
            <tr class="bottom">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="any_create" data-block="dom_specialists" data-group="specs"
                            data-descr="Эл. первой группы" data-owner-id="0">
                        Добавить специалиста
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_spec" data-entity="block"
                data-descr="">
            Сохранить
        </button>
    </div>
@endsection
