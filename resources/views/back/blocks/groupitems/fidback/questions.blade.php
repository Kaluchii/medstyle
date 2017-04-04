<li class="group" data-group-id="{{$item_questions->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="fidback" data-group="questions" data-entity="groupitem"
                data-item-id="{{$item_questions->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="name" data-block="fidback"
                   data-group="questions" class="input group_field" value="{{$item_questions->name_field}}"
                   data-item-id="{{$item_questions->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="mail" data-block="fidback"
                   data-group="questions" class="input group_field" value="{{$item_questions->mail_field}}"
                   data-item-id="{{$item_questions->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="question" data-block="fidback" data-group="questions"
                      class="input group_field" data-item-id="{{$item_questions->id_field}}"
                      placeholder="Текст">{{$item_questions->question_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="is_public" data-block="fidback"
                          data-group="questions" data-item-id="{{$item_questions->id_field}}" class="input group_field"
                          value="{{$item_questions->is_public_field}}">is_public</label>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="mailed" data-block="fidback"
                          data-group="questions" data-item-id="{{$item_questions->id_field}}" class="input group_field"
                          value="{{$item_questions->mailed_field}}">mailed</label>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="fidback" data-group="questions" data-entity="groupitem"
                    data-item-id="{{$item_questions->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>