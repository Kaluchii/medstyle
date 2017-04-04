@extends('back.layout')
@section('content')
    <?php $title='Контакты'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_contacts"
                   class="input block_field" placeholder="Текст" value="{{$static_contacts->page_title_field}}">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_contacts"
                   class="input block_field" placeholder="Строка" value="{{$static_contacts->seo_description_field}}">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_contacts"
                   class="input block_field" placeholder="Строка" value="{{$static_contacts->seo_keywords_field}}">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Список контактов
            <textarea data-field-type="text" data-field-name="contacts" data-block="static_contacts"
                      class="input block_field" placeholder="Текст">{{$static_contacts->contacts_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-name">Карта
            <textarea data-field-type="text" data-field-name="maps" data-block="static_contacts"
                      class="input block_field" placeholder="Текст">{{$static_contacts->maps_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <label class="input-file">Фото здания
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="photo" data-field-type="image"
                           data-block="static_contacts" value="{{$static_contacts->photo_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="photo" data-field-type="image"
                           data-block="static_contacts" value="{{$static_contacts->photo_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="photo" data-field-type="image"
                           data-block="static_contacts" value="{{$static_contacts->photo_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="photo" data-field-type="image"
                           data-block="static_contacts" value="{{$static_contacts->photo_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="photo" data-field-type="image"
                           data-block="static_contacts" value="{{$static_contacts->photo_image->icon_link}}">
                </div>
                <img src="/images/{{$static_contacts->photo_image->preview_link}}" class="preview"
                     data-field-name="photo" data-block="static_contacts">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$static_contacts->photo_image->alt}}" data-field-name="photo"
                           data-block="static_contacts">
                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                               data-field-name="photo" data-field-type="image" data-block="static_contacts">
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_contacts" data-entity="block"
                data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
