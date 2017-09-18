<?php
/**
 * Created by PhpStorm.
 * User: KocaHocTpa
 * Date: 04.02.2016
 * Time: 17:34
 */
return [

    'title'       =>   '
<input type="text" data-field-type="%type%" data-field-name="%name%" data-block="%block%" class="input block_pre_field" value="%value%" placeholder="Заголовок">',
    'stringfield' =>   '
<input type="text" data-field-type="%type%" data-field-name="%name%" data-block="%block%" class="input block_field" value="%value%" placeholder="Строка">',
    'textfield'   =>   '
<textarea data-field-type="%type%" data-field-name="%name%" data-block="%block%" class="input block_field" placeholder="Текст">%value%</textarea>',

    'image'       =>   '
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="%name%" data-field-type="%type%" data-block="%block%" value="%preview%">
        <input type="hidden" class="preview_link" data-field-name="%name%" data-field-type="%type%" data-block="%block%" value="%preview%">
        <input type="hidden" class="primary_link" data-field-name="%name%" data-field-type="%type%" data-block="%block%" value="%primary%">
        <input type="hidden" class="secondary_link" data-field-name="%name%" data-field-type="%type%" data-block="%block%" value="%secondary%">
        <input type="hidden" class="icon_link" data-field-name="%name%" data-field-type="%type%" data-block="%block%" value="%icon%">
    </div>
    <img src="/images/%preview%" class="preview" data-field-name="%name%" data-block="%block%">
    <input type="text" placeholder="alt текст" class="alt-text" value="%alt%" data-field-name="%name%" data-block="%block%">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="%name%" data-field-type="%type%" data-block="%block%">
    </label>
</div>',

    'numb'        =>   '
<input type="number" data-field-type="%type%" data-field-name="%name%" data-block="%block%" class="input block_field" value="%value%" placeholder="Целое число">',
    'bool'        =>   '
<label><input type="checkbox" data-field-type="%type%" data-field-name="%name%" data-block="%block%" class="input block_field" value="%value%">%name%</label>',

    'save_block'  =>   '<button class="btn btn-primary pull-right any_save" data-block="%block%" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>',
    'block_wrap' =>'<div class="block">
<label class="input-name">',




















    'group_stringfield' =>   '
<input type="text" data-field-type="%type%" data-field-name="%name%" data-block="%block%" data-group="%group%" class="input group_field" value="%value%" data-item-id="%id%" placeholder="Строка">',
    'group_textfield'   =>   '
<textarea data-field-type="%type%" data-field-name="%name%" data-block="%block%" data-group="%group%" class="input group_field" data-item-id="%id%" placeholder="Текст">%value%</textarea>',

    'group_image'       =>   '
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="%name%" data-group="%group%" data-field-type="%type%" data-item-id="%id%" data-block="%block%" value="%icon%">
        <input type="hidden" class="preview_link" data-field-name="%name%" data-group="%group%" data-field-type="%type%" data-item-id="%id%" data-block="%block%" value="%preview%">
        <input type="hidden" class="primary_link" data-field-name="%name%" data-group="%group%" data-field-type="%type%" data-item-id="%id%" data-block="%block%" value="%primary%">
        <input type="hidden" class="secondary_link" data-field-name="%name%" data-group="%group%" data-field-type="%type%" data-item-id="%id%" data-block="%block%" value="%secondary%">
        <input type="hidden" class="icon_link" data-field-name="%name%" data-group="%group%" data-field-type="%type%" data-item-id="%id%" data-block="%block%" value="%icon%">
    </div>
    <img src="/images/%preview%" class="preview" data-field-name="%name%" data-block="%block%"  data-group="%group%" data-item-id="%id%">
    <input type="text" placeholder="alt текст" class="alt-text" value="%alt%" data-item-id="%id%">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*"
        class="input_file group_field"
        data-field-name="%name%"
        data-group="%group%"
        data-entity="groupitem"
        data-item-id="%id%"
        data-field-type="%type%"
        data-block="%block%"
        >
    </label>
</div>',

    'group_numb'        =>   '
<input type="number" data-field-type="%type%" data-field-name="%name%" data-block="%block%" data-group="%group%" data-item-id="%id%" class="input group_field" value="%value%" placeholder="Целое число">',
    'group_bool'        =>   '
<label><input type="checkbox" data-field-type="%type%" data-field-name="%name%" data-block="%block%" data-group="%group%" data-item-id="%id%" class="input group_field" value="%value%">%name%</label>',
]


?>