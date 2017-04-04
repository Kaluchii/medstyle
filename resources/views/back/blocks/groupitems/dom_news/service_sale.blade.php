<li class="group_item" data-item-id="{{$item_service_sale->id_field}}" style="list-style-type: none">

   
   
    <select data-field-type="numb" data-field-name="serv_id" data-block="dom_news"
           data-group="service_sale" class="input group_field"
           data-item-id="{{$item_service_sale->id_field}}">
        @foreach($serv as $item)
            <option value="{{$item->id_field}}" @if($item_service_sale->serv_id_field == $item->id_field) selected @endif>{{$item->name_field}}</option>
        @endforeach
    </select>
    <div class="buttons_block text">
        <button type="button" class="any_save text" data-block="dom_news" data-group="service_sale"
                data-entity="groupitem" data-item-id="{{$item_service_sale->id_field}}"
                data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete text" data-block="dom_news" data-group="service_sale"
                data-entity="groupitem" data-item-id="{{$item_service_sale->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>