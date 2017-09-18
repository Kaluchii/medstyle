<tr {{$item_serv_category->id_field}}>
    <td><a href="/services">{{$item_serv_category->category_title_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/category/{{$item_serv_category->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="{{$item_serv_category->block_name_field}}"
                data-group="{{$item_serv_category->group_name_field}}" data-entity="groupitem"
                data-item-id="{{$item_serv_category->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>