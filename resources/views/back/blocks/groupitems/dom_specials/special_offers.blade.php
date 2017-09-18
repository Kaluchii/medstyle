<tr>
    <td><a href="/adm/edit/special/{{$item_special_offers->id_field}}">{{$item_special_offers->prev_name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/special/{{$item_special_offers->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_specials" data-group="special_offers"
                data-entity="groupitem" data-item-id="{{$item_special_offers->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>