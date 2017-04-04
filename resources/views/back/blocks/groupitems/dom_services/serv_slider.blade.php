<li class="group_item" data-item-id="{{$item_serv_slider->id_field}}">


    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="slide" data-group="serv_slider" data-field-type="image"
                   data-item-id="{{$item_serv_slider->id_field}}" data-block="dom_services"
                   value="{{$item_serv_slider->slide_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="slide" data-group="serv_slider"
                   data-field-type="image" data-item-id="{{$item_serv_slider->id_field}}" data-block="dom_services"
                   value="{{$item_serv_slider->slide_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="slide" data-group="serv_slider"
                   data-field-type="image" data-item-id="{{$item_serv_slider->id_field}}" data-block="dom_services"
                   value="{{$item_serv_slider->slide_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="slide" data-group="serv_slider"
                   data-field-type="image" data-item-id="{{$item_serv_slider->id_field}}" data-block="dom_services"
                   value="{{$item_serv_slider->slide_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="slide" data-group="serv_slider"
                   data-field-type="image" data-item-id="{{$item_serv_slider->id_field}}" data-block="dom_services"
                   value="{{$item_serv_slider->slide_image->icon_link}}">
        </div>
        <img src="/images/{{$item_serv_slider->slide_image->preview_link}}" class="preview" data-field-name="slide"
             data-block="dom_services" data-group="serv_slider" data-item-id="{{$item_serv_slider->id_field}}">
        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_serv_slider->slide_image->alt}}"
               data-field-name="slide"
               data-block="dom_services"
               data-item-id="{{$item_serv_slider->id_field}}">
        <label class="file-input">
            Загрузить
            <input type="file" accept="image/*"
                   class="input_file group_field"
                   data-field-name="slide"
                   data-group="serv_slider"
                   data-entity="groupitem"
                   data-item-id="{{$item_serv_slider->id_field}}"
                   data-field-type="image"
                   data-block="dom_services"
            >
        </label>
    </div>


    <div class="buttons_block">
        <button type="button" class="any_save" data-block="dom_services" data-group="serv_slider"
                data-entity="groupitem" data-item-id="{{$item_serv_slider->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="dom_services" data-group="serv_slider"
                data-entity="groupitem" data-item-id="{{$item_serv_slider->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>