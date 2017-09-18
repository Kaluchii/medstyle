<li class="group_item" data-item-id="{{$item_tech_after_proc->id_field}}">
    <input type="text" data-field-type="string" data-field-name="p_name" data-block="dom_technologys"
           data-group="tech_after_proc" class="input group_field" value="{{$item_tech_after_proc->p_name_field}}"
           data-item-id="{{$item_tech_after_proc->id_field}}" placeholder="Строка">
    <div class="buttons_block text">
        <button type="button" class="any_save text" data-block="dom_technologys" data-group="tech_after_proc"
                data-entity="groupitem" data-item-id="{{$item_tech_after_proc->id_field}}"
                data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete text" data-block="dom_technologys" data-group="tech_after_proc"
                data-entity="groupitem" data-item-id="{{$item_tech_after_proc->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>