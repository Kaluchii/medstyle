@extends('back.layout')
@section('content')
    <?php $title='Специалисты — ' . $item_specs->name_field?>
    <div class="block">
            <label>Тайтл страницы
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="dom_specialists"
                       data-group="specs " class="input group_field" value="{{$item_specs->page_title_field}}"
                       data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
            </label>
    </div>
    <div class="block">
        <label>Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_specialists"
                   data-group="specs " class="input group_field" value="{{$item_specs->seo_description_field}}"
                   data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label>Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_specialists"
                   data-group="specs " class="input group_field" value="{{$item_specs->seo_keywords_field}}"
                   data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label>Фото</label>
        <div class="image-load">
            <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="spec_photo" data-group="specs"
                       data-field-type="image" data-item-id="{{$item_specs->id_field}}" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->icon_link}}">
                <input type="hidden" class="preview_link" data-field-name="spec_photo" data-group="specs"
                       data-field-type="image" data-item-id="{{$item_specs->id_field}}" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="spec_photo" data-group="specs"
                       data-field-type="image" data-item-id="{{$item_specs->id_field}}" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="spec_photo" data-group="specs"
                       data-field-type="image" data-item-id="{{$item_specs->id_field}}" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="spec_photo" data-group="specs"
                       data-field-type="image" data-item-id="{{$item_specs->id_field}}" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->icon_link}}">
            </div>
            <img src="/images/{{$item_specs->spec_photo_image->preview_link}}" class="preview"
                 data-field-name="spec_photo" data-block="dom_specialists" data-group="specs"
                 data-item-id="{{$item_specs->id_field}}">
            <div class="image-block-wrap">
                <input type="text" placeholder="alt текст" class="alt-text"
                       data-field-name="spec_photo" data-block="dom_specialists"
                       value="{{$item_specs->spec_photo_image->alt}}" data-item-id="{{$item_specs->id_field}}">
                <label class="file-input">
                    Загрузить
                    <input type="file" accept="image/*"
                           class="input_file group_field"
                           data-field-name="spec_photo"
                           data-group="specs"
                           data-entity="groupitem"
                           data-item-id="{{$item_specs->id_field}}"
                           data-field-type="image"
                           data-block="dom_specialists"
                    >
                </label>
            </div>
        </div>
    </div>
    <div class="block">
        <label>Имя
            <input type="text" data-field-type="string" data-field-name="name" data-block="dom_specialists"
                   data-group="specs " class="input group_field" value="{{$item_specs->name_field}}"
                   data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label>Вид ссылки в адресной строке
            <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_specialists"
                   data-group="specs " class="input group_pre_field" value="{{$item_specs->slug_field}}"
                   data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label>Професия
            <input type="text" data-field-type="string" data-field-name="profession" data-block="dom_specialists"
                   data-group="specs" class="input group_field" value="{{$item_specs->profession_field}}"
                   data-item-id="{{$item_specs->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label>Описание</label>
            <textarea data-field-type="text" data-field-name="about" data-block="dom_specialists"
                      class="input group_field" data-group="specs" data-item-id="{{$item_specs->id_field}}"
                      placeholder="Текст">{{$item_specs->about_field}}
            </textarea>
    </div>
    </li>
    <div class="block">
        <label class="input-name">Сертификаты</label>
        <ul class="group_container slider" data-block="dom_specialists" data-group="spec_certs"
            data-owner-id="{{$item_specs->id_field}}">
            @foreach($item_specs->spec_certs_group as $item_spec_certs)
                @include('back.blocks.groupitems.dom_specialists.spec_certs')
            @endforeach
        </ul>
        <button class="any_create" data-block="dom_specialists" data-group="spec_certs" data-descr="Эл. первой группы"
                data-owner-id="{{$item_specs->id_field}}">
            <span>Добавить сертификаты</span>
        </button>
    </div>


    <div class="block buttons">
        <button type="button" class="any_save big" data-block="dom_specialists" data-group="specs"
                data-entity="groupitem"
                data-item-id="{{$item_specs->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
    </div>
@endsection