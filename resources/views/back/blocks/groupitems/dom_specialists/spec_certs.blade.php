<li class="group_item" data-item-id="{{$item_spec_certs->id_field}}">
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="certificate" data-group="spec_certs"
                   data-field-type="image" data-item-id="{{$item_spec_certs->id_field}}" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="certificate" data-group="spec_certs"
                   data-field-type="image" data-item-id="{{$item_spec_certs->id_field}}" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="certificate" data-group="spec_certs"
                   data-field-type="image" data-item-id="{{$item_spec_certs->id_field}}" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="certificate" data-group="spec_certs"
                   data-field-type="image" data-item-id="{{$item_spec_certs->id_field}}" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="certificate" data-group="spec_certs"
                   data-field-type="image" data-item-id="{{$item_spec_certs->id_field}}" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->icon_link}}">
        </div>
        <img src="/images/{{$item_spec_certs->certificate_image->preview_link}}" class="preview"
             data-field-name="certificate" data-block="dom_specialists" data-group="spec_certs"
             data-item-id="{{$item_spec_certs->id_field}}">
        <div class="image-block-wrap">
            <input type="text" placeholder="alt текст" class="alt-text"
                   data-field-name="certificate" data-block="dom_specialists"
                   value="{{$item_spec_certs->certificate_image->alt}}"
                   data-item-id="{{$item_spec_certs->id_field}}">
            <label class="file-input">
                Загрузить
                <input type="file" accept="image/*"
                       class="input_file group_field"
                       data-field-name="certificate"
                       data-group="spec_certs"
                       data-entity="groupitem"
                       data-item-id="{{$item_spec_certs->id_field}}"
                       data-field-type="image"
                       data-block="dom_specialists"
                >
            </label>
        </div>
    </div>
    <div class="buttons_block">
        <button type="button" class="any_save" data-block="dom_specialists" data-group="spec_certs"
                data-entity="groupitem" data-item-id="{{$item_spec_certs->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="dom_specialists" data-group="spec_certs"
                data-entity="groupitem" data-item-id="{{$item_spec_certs->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>