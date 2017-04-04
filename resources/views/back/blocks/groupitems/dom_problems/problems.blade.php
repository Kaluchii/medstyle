<tr {{$item_problems->id_field}}>
    <td><a href="/problems/">{{$item_problems->name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/problems/{{$item_problems->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_problems" data-group="problems" data-entity="groupitem"
                data-item-id="{{$item_problems->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>