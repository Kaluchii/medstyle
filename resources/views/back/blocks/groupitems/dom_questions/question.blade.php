<tr {{$item_question->id_field}}>
    <td><a href="/questions/">Вопрос от: {{$item_question->question_name_field}}</a></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/question/{{$item_question->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="{{$item_question->block_name_field}}"
                data-group="{{$item_question->group_name_field}}" data-entity="groupitem"
                data-item-id="{{$item_question->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>