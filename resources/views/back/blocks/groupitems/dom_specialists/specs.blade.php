<tr {{$item_specs->id_field}}>
    <td><a href="/specialist/{{$item_specs->slug_field}}">{{$item_specs->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/specialists/{{$item_specs->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="{{$item_specs->block_name_field}}"
                data-group="{{$item_specs->group_name_field}}" data-entity="groupitem"
                data-item-id="{{$item_specs->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>