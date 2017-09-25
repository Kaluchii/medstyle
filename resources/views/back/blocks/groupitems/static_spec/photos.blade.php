<li class="group_item" data-item-id="{{$item_photos->id_field}}">
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="photo" data-group="photos" data-field-type="image"
                   data-item-id="{{$item_photos->id_field}}" data-block="static_spec"
                   value="{{$item_photos->photo_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="photo" data-group="photos"
                   data-field-type="image" data-item-id="{{$item_photos->id_field}}" data-block="static_spec"
                   value="{{$item_photos->photo_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="photo" data-group="photos"
                   data-field-type="image" data-item-id="{{$item_photos->id_field}}" data-block="static_spec"
                   value="{{$item_photos->photo_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="photo" data-group="photos"
                   data-field-type="image" data-item-id="{{$item_photos->id_field}}" data-block="static_spec"
                   value="{{$item_photos->photo_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="photo" data-group="photos" data-field-type="image"
                   data-item-id="{{$item_photos->id_field}}" data-block="static_spec"
                   value="{{$item_photos->photo_image->icon_link}}">
        </div>
        <img src="/images/{{$item_photos->photo_image->preview_link}}" class="preview" data-field-name="photo"
             data-block="static_spec" data-group="photos" data-item-id="{{$item_photos->id_field}}">
        <div class="image-block-wrap">
            <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_photos->photo_image->alt}}"
                   data-field-name="photo"
                   data-block="static_spec"
                   data-item-id="{{$item_photos->id_field}}">
            <label class="file-input">
                Загрузить
                <input type="file" accept="image/*"
                       class="input_file group_field"
                       data-field-name="photo"
                       data-group="photos"
                       data-entity="groupitem"
                       data-item-id="{{$item_photos->id_field}}"
                       data-field-type="image"
                       data-block="static_spec"
                >
            </label>
        </div>
    </div>
    <div class="buttons_block">
        <button type="button" class="any_save" data-block="static_spec" data-group="photos" data-entity="groupitem"
                data-item-id="{{$item_photos->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete" data-block="static_spec" data-group="photos" data-entity="groupitem"
                data-item-id="{{$item_photos->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>