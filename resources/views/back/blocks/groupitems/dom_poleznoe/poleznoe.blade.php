<tr {{$item_poleznoe->id_field}}>
    <td><a href="/poleznoe/">{{$item_poleznoe->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/poleznoe/{{$item_poleznoe->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_poleznoe" data-group="poleznoe" data-entity="groupitem"
                data-item-id="{{$item_poleznoe->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>