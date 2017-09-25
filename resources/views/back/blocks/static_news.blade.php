@extends('back.layout')
@section('content')
    <?php $title='Новинки'?>
    <div class="block">
        <label class="input-name">Тайтл страницы
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_news"
                   class="input block_field" value="{{$static_news->page_title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание страницы (максимум 160 символов)
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_news"
                   class="input block_field" value="{{$static_news->seo_description_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Ключевые слова
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_news"
                   class="input block_field" value="{{$static_news->seo_keywords_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Заголовок
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_news"
                   class="input block_pre_field" value="{{$static_news->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block">
        <label class="input-name">Описание
            <textarea data-field-type="text" data-field-name="descriptions" data-block="static_news"
                      class="input block_field" placeholder="Текст">{{$static_news->descriptions_field}}</textarea>
        </label>
    </div>
    <div class="block">
        <div class="block">
            <label class="input-name">Список новинок</label>
            <table class="spec">
                <thead>
                <tr>
                    <td>Новинка</td>
                    <td></td>
                    <td></td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_news" data-group="news" data-owner-id="0">
                @foreach($dom_news->news_group as $item_news)
                    @include('back.blocks.groupitems.dom_news.news')
                @endforeach
                </tbody>
                <tfoot>
                <tr class="bottom">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_news" data-group="news"
                                data-descr="Эл. первой группы" data-owner-id="0">
                            Добавить новинку
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save big" data-block="static_news" data-entity="block" data-descr="">
            Сохранить
        </button>
        </label>
    </div>
@endsection
