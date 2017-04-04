<li class="group_item" data-item-id="{{$item_slider->id_field}}">
    <label>Изображение</label>
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->wrap_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->wrap_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->wrap_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="wrap" data-group="slider"
                   data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->wrap_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->wrap_image->icon_link}}">
        </div>
        <img src="/images/{{$item_slider->wrap_image->preview_link}}" class="preview" data-field-name="wrap"
             data-block="static_index_page" data-group="slider" data-item-id="{{$item_slider->id_field}}">
        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_slider->wrap_image->alt}}"
               data-field-name="wrap"
               data-block="static_index_page"
               data-item-id="{{$item_slider->id_field}}">
        <label class="file-input">
            Загрузить
            <input type="file" accept="image/*"
                   class="input_file group_field"
                   data-field-name="wrap"
                   data-group="slider"
                   data-entity="groupitem"
                   data-item-id="{{$item_slider->id_field}}"
                   data-field-type="image"
                   data-block="static_index_page"
            >
        </label>
    </div>
    <label>Изображение</label>
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="desc_wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->desc_wrap_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="desc_wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->desc_wrap_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="desc_wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->desc_wrap_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="desc_wrap" data-group="slider"
                   data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->desc_wrap_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="desc_wrap" data-group="slider" data-field-type="image"
                   data-item-id="{{$item_slider->id_field}}" data-block="static_index_page"
                   value="{{$item_slider->desc_wrap_image->icon_link}}">
        </div>
        <img src="/images/{{$item_slider->desc_wrap_image->preview_link}}" class="preview" data-field-name="desc_wrap"
             data-block="static_index_page" data-group="slider" data-item-id="{{$item_slider->id_field}}">
        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_slider->desc_wrap_image->alt}}"
               data-field-name="desc_wrap"
               data-block="static_index_page"
               data-item-id="{{$item_slider->id_field}}">
        <label class="file-input">
            Загрузить
            <input type="file" accept="image/*"
                   class="input_file group_field"
                   data-field-name="desc_wrap"
                   data-group="slider"
                   data-entity="groupitem"
                   data-item-id="{{$item_slider->id_field}}"
                   data-field-type="image"
                   data-block="static_index_page"
            >
        </label>
    </div>
    <label>Ссылка</label>
    <input type="text" data-field-type="string" data-field-name="link" data-block="static_index_page"
           data-group="slider" class="input group_field" value="{{$item_slider->link_field}}"
           data-item-id="{{$item_slider->id_field}}" placeholder="Строка">
    <label>Название слайда</label>
    <input type="text" data-field-type="string" data-field-name="slide_title" data-block="static_index_page"
           data-group="slider" class="input group_field" value="{{$item_slider->slide_title_field}}"
           data-item-id="{{$item_slider->id_field}}" placeholder="Строка">
    <label>Описание для слайда</label>
    <input type="text" data-field-type="string" data-field-name="descr" data-block="static_index_page"
           data-group="slider" class="input group_field" value="{{$item_slider->descr_field}}"
           data-item-id="{{$item_slider->id_field}}" placeholder="Строка">
    <label>Ориентация текста</label>
    <select data-field-type="numb" data-field-name="flag" class="input group_field" data-group="slider"
            data-block="static_index_page" data-item-id="{{$item_slider->id_field}}">
        @if($item_slider->flag_field == 1)
            <option value="1" selected>Левый флаг</option>
            <option value="2">Правый флаг</option>
            <option value="3">Центр</option>
        @elseif($item_slider->flag_field == 2)
            <option value="1">Левый флаг</option>
            <option value="2" selected>Правый флаг</option>
            <option value="3">Центр</option>
        @elseif($item_slider->flag_field == 3)
            <option value="1">Левый флаг</option>
            <option value="2">Правый флаг</option>
            <option value="3" selected>Центр</option>
        @else
            <option value="1" selected>Левый флаг</option>
            <option value="2">Правый флаг</option>
            <option value="3">Центр</option>
        @endif

    </select>

    <div class="buttons_block">
        <button type="button" class="any_save" data-block="static_index_page" data-group="slider"
                data-entity="groupitem" data-item-id="{{$item_slider->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="static_index_page" data-group="slider"
                data-entity="groupitem" data-item-id="{{$item_slider->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>