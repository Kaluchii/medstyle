@extends('back.layout')
@section('content')
    <?php $title = 'Специальные предложения — ' . $item_special_offers->name_field?>
    <li class="group_item" data-item-id="{{$item_special_offers->id_field}}">


        <div class="block">
            <label>Превью специального предложения для главной</label>
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="wrap" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->wrap_image->icon_link}}">
                    <input type="hidden" class="prev_link" data-field-name="wrap" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->wrap_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="wrap" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->wrap_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="wrap" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->wrap_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="wrap" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->wrap_image->icon_link}}">
                </div>
                <img src="/images/{{$item_special_offers->wrap_image->preview_link}}" class="prev"
                     data-field-name="wrap" data-block="dom_specials" data-group="special_offers"
                     data-item-id="{{$item_special_offers->id_field}}">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           data-field-name="wrap" data-block="dom_specials"
                           value="{{$item_special_offers->wrap_image->alt}}"
                           data-item-id="{{$item_special_offers->id_field}}">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="wrap"
                               data-group="special_offers"
                               data-entity="groupitem"
                               data-item-id="{{$item_special_offers->id_field}}"
                               data-field-type="image"
                               data-block="dom_specials"
                        >
                    </label>
                </div>
            </div>
        </div>
        <div class="block">
            <label>Превью специального предложения для страницы акций (370х380px)</label>
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="prev" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->prev_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="prev" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->prev_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="prev" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->prev_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="prev" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->prev_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="prev" data-group="special_offers"
                           data-field-type="image" data-item-id="{{$item_special_offers->id_field}}"
                           data-block="dom_specials" value="{{$item_special_offers->prev_image->icon_link}}">
                </div>
                <img src="/images/{{$item_special_offers->prev_image->preview_link}}" class="preview"
                     data-field-name="prev" data-block="dom_specials" data-group="special_offers"
                     data-item-id="{{$item_special_offers->id_field}}">
                <div class="image-block-prev">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           data-field-name="prev" data-block="dom_specials"
                           value="{{$item_special_offers->prev_image->alt}}"
                           data-item-id="{{$item_special_offers->id_field}}">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="prev"
                               data-group="special_offers"
                               data-entity="groupitem"
                               data-item-id="{{$item_special_offers->id_field}}"
                               data-field-type="image"
                               data-block="dom_specials"
                        >
                    </label>
                </div>
            </div>
        </div>

        <div class="block">
            <label>Название акции</label>
            <input type="text" data-field-type="string" data-field-name="prev_name" data-block="dom_specials"
                   data-group="special_offers" class="input group_field"
                   value="{{$item_special_offers->prev_name_field}}"
                   data-item-id="{{$item_special_offers->id_field}}" placeholder="Строка">
        </div>

        <div class="block">
            <label>Текст превью</label>
            <textarea data-field-type="string" data-field-name="prev_text" data-block="dom_specials"
                      data-group="special_offers" class="input group_field"
                      data-item-id="{{$item_special_offers->id_field}}"
                      placeholder="Строка">{{$item_special_offers->prev_text_field}}</textarea>
        </div>
        <div class="block">
            <label>Дата окончания</label>
            <input type="text" data-field-type="text" data-field-name="all_text" data-block="dom_specials"
                   data-group="special_offers" class="input group_field"
                   value="{{$item_special_offers->all_text_field}}"
                   data-item-id="{{$item_special_offers->id_field}}" placeholder="Строка">
        </div>

        <div class="block">
            <label>Ссылка </label>
            <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_specials"
                   data-group="special_offers" class="input group_pre_field"
                   value="{{$item_special_offers->slug_field}}" data-item-id="{{$item_special_offers->id_field}}"
                   placeholder="Строка">
        </div>

        <div class="block buttons">
            <button type="button" class="any_save big" data-block="dom_specials" data-group="special_offers"
                    data-entity="groupitem" data-item-id="{{$item_special_offers->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </li>
@endsection
