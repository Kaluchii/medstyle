<li class="group" data-group-id="{{$item_consultation->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="fidback" data-group="consultation" data-entity="groupitem"
                data-item-id="{{$item_consultation->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="name" data-block="fidback"
                   data-group="consultation" class="input group_field" value="{{$item_consultation->name_field}}"
                   data-item-id="{{$item_consultation->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="phone" data-block="fidback"
                   data-group="consultation" class="input group_field" value="{{$item_consultation->phone_field}}"
                   data-item-id="{{$item_consultation->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="comment" data-block="fidback" data-group="consultation"
                      class="input group_field" data-item-id="{{$item_consultation->id_field}}"
                      placeholder="Текст">{{$item_consultation->comment_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="number" data-field-type="numb" data-field-name="service_id" data-block="fidback"
                   data-group="%group%" data-item-id="{{$item_consultation->id_field}}" class="input group_field"
                   value="{{$item_consultation->service_id_field}}" placeholder="Целое число">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="mailed" data-block="fidback"
                          data-group="consultation" data-item-id="{{$item_consultation->id_field}}"
                          class="input group_field" value="{{$item_consultation->mailed_field}}">mailed</label>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="fidback" data-group="consultation"
                    data-entity="groupitem" data-item-id="{{$item_consultation->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>