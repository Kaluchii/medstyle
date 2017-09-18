<li class="group_item" data-item-id="{{$item_videos->id_field}}">
    <label>Обложка</label>
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="wrap" data-group="videos" data-field-type="image"
                   data-item-id="{{$item_videos->id_field}}" data-block="dom_videos"
                   value="{{$item_videos->wrap_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="wrap" data-group="videos" data-field-type="image"
                   data-item-id="{{$item_videos->id_field}}" data-block="dom_videos"
                   value="{{$item_videos->wrap_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="wrap" data-group="videos" data-field-type="image"
                   data-item-id="{{$item_videos->id_field}}" data-block="dom_videos"
                   value="{{$item_videos->wrap_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="wrap" data-group="videos"
                   data-field-type="image" data-item-id="{{$item_videos->id_field}}" data-block="dom_videos"
                   value="{{$item_videos->wrap_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="wrap" data-group="videos" data-field-type="image"
                   data-item-id="{{$item_videos->id_field}}" data-block="dom_videos"
                   value="{{$item_videos->wrap_image->icon_link}}">
        </div>
        <img src="/images/{{$item_videos->wrap_image->preview_link}}" class="preview" data-field-name="wrap"
             data-block="dom_videos" data-group="videos" data-item-id="{{$item_videos->id_field}}">
        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_videos->wrap_image->alt}}"
               data-field-name="wrap"
               data-block="dom_videos"
               data-item-id="{{$item_videos->id_field}}">
        <label class="file-input">
            Загрузить
            <input type="file" accept="image/*"
                   class="input_file group_field"
                   data-field-name="wrap"
                   data-group="videos"
                   data-entity="groupitem"
                   data-item-id="{{$item_videos->id_field}}"
                   data-field-type="image"
                   data-block="dom_videos"
            >
        </label>
    </div>
    <label>Ссылка</label>
    <input type="text" data-field-type="string" data-field-name="link" data-block="dom_videos" data-group="videos"
           class="input group_field" value="{{$item_videos->link_field}}" data-item-id="{{$item_videos->id_field}}"
           placeholder="Строка">
    <label>Название</label>
    <input type="text" data-field-type="string" data-field-name="name" data-block="dom_videos" data-group="videos"
           class="input group_field" value="{{$item_videos->name_field}}" data-item-id="{{$item_videos->id_field}}"
           placeholder="Строка">
    <div class="buttons_block">
        <button type="button" class="any_save" data-block="dom_videos" data-group="videos" data-entity="groupitem"
                data-item-id="{{$item_videos->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete" data-block="dom_videos" data-group="videos" data-entity="groupitem"
                data-item-id="{{$item_videos->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>