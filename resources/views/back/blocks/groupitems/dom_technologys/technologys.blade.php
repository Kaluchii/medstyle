<tr {{$item_technologys->id_field}}>
    <td><a href="/technology/{{$item_technologys->slug_field}}">{{$item_technologys->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/technology/{{$item_technologys->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="{{$item_technologys->block_name_field}}"
                data-group="{{$item_technologys->group_name_field}}" data-entity="groupitem"
                data-item-id="{{$item_technologys->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>