<li class="group_item" data-item-id="{{$item_news_effect_up->id_field}}">
    <input type="text" data-field-type="string" data-field-name="serv_pict" data-block="dom_news"
           data-group="news_effect_up" class="input group_field" value="{{$item_news_effect_up->serv_pict_field}}"
           data-item-id="{{$item_news_effect_up->id_field}}" placeholder="Строка">

    <input type="text" data-field-type="string" data-field-name="link" data-block="dom_news" data-group="news_effect_up"
           class="input group_field" value="{{$item_news_effect_up->link_field}}"
           data-item-id="{{$item_news_effect_up->id_field}}" placeholder="Строка">
    <div class="buttons_block text">
        <button type="button" class="any_save text" data-block="dom_news" data-group="news_effect_up" data-entity="groupitem"
                data-item-id="{{$item_news_effect_up->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete text" data-block="dom_news" data-group="news_effect_up"
                data-entity="groupitem" data-item-id="{{$item_news_effect_up->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>