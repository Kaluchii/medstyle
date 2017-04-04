<tr {{$item_age->id_field}}>
    <td>{{$item_age->age_name_field}}</td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/age/{{$item_age->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="testing_block" data-group="age" data-entity="groupitem"
                data-item-id="{{$item_age->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>