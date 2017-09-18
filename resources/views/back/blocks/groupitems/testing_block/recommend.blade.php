<li class="group_item" data-item-id="{{$item_recommend->id_field}}">
    <label>Услуга</label>
    <select data-field-type="numb" data-field-name="service_id" data-block="testing_block"
            data-group="recommend" class="input group_field" data-item-id="{{$item_recommend->id_field}}">
            @foreach($all_services as $item)
                <option value="{{$item->id_field}}"
                @if($item->id_field == $item_recommend->service_id_field)
                    selected
                @endif
                >{{$item->name_field}}</option>
            @endforeach
    </select>


    <div class="buttons_block">
        <button type="button" class="any_save" data-block="testing_block" data-group="recommend"
                data-entity="groupitem" data-item-id="{{$item_recommend->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="testing_block" data-group="recommend"
                data-entity="groupitem" data-item-id="{{$item_recommend->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>