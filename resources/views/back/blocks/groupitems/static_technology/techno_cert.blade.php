<li class="group_item" data-item-id="{{$item_techno_cert->id_field}}">
    <div class="image-load">
        <div class="img-hide-block">
            <input type="hidden" class="prefix" data-field-name="cert" data-group="techno_cert" data-field-type="image"
                   data-item-id="{{$item_techno_cert->id_field}}" data-block="static_technology"
                   value="{{$item_techno_cert->cert_image->icon_link}}">
            <input type="hidden" class="preview_link" data-field-name="cert" data-group="techno_cert"
                   data-field-type="image" data-item-id="{{$item_techno_cert->id_field}}" data-block="static_technology"
                   value="{{$item_techno_cert->cert_image->preview_link}}">
            <input type="hidden" class="primary_link" data-field-name="cert" data-group="techno_cert"
                   data-field-type="image" data-item-id="{{$item_techno_cert->id_field}}" data-block="static_technology"
                   value="{{$item_techno_cert->cert_image->primary_link}}">
            <input type="hidden" class="secondary_link" data-field-name="cert" data-group="techno_cert"
                   data-field-type="image" data-item-id="{{$item_techno_cert->id_field}}" data-block="static_technology"
                   value="{{$item_techno_cert->cert_image->secondary_link}}">
            <input type="hidden" class="icon_link" data-field-name="cert" data-group="techno_cert"
                   data-field-type="image" data-item-id="{{$item_techno_cert->id_field}}" data-block="static_technology"
                   value="{{$item_techno_cert->cert_image->icon_link}}">
        </div>
        <img src="/images/{{$item_techno_cert->cert_image->preview_link}}" class="preview" data-field-name="cert"
             data-block="static_technology" data-group="techno_cert" data-item-id="{{$item_techno_cert->id_field}}">
        <div class="image-block-wrap">
            <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_techno_cert->cert_image->alt}}"
                   data-field-name="cert"
                   data-block="static_technology"
                   data-item-id="{{$item_techno_cert->id_field}}">
            <label class="file-input">
                Загрузить
                <input type="file" accept="image/*"
                       class="input_file group_field"
                       data-field-name="cert"
                       data-group="techno_cert"
                       data-entity="groupitem"
                       data-item-id="{{$item_techno_cert->id_field}}"
                       data-field-type="image"
                       data-block="static_technology"
                >
            </label>
        </div>
    </div>
    <div class="buttons_block">
        <button type="button" class="any_save" data-block="static_technology" data-group="techno_cert"
                data-entity="groupitem" data-item-id="{{$item_techno_cert->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="static_technology" data-group="techno_cert"
                data-entity="groupitem" data-item-id="{{$item_techno_cert->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>