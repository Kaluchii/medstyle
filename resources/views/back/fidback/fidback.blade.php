@extends('back.layout')
@section('content')
    <?php $title = 'Попапы и почта'?>
    <div class="block">
        <label class="input-name">Вопросы</label>
        <ul class="popups-list">
            @foreach($popups->questions_group as $item)
                <li class="popups_item">
                    <div class="name">{{$item->name_field}}</div>
                    <div class="mail">{{$item->mail_field}}</div>
                    <div class="question">{{$item->question_field}}</div>
                    @if($item->is_public_field)
                        <div class="public yes">Можно публиковать</div>
                    @else
                        <div class="public no">Нельзя публиковать</div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <div class="block">
        <label class="input-name">Заявки на консультацию</label>
        <ul class="popups-list">
            @foreach($popups->consultation_group as $item)
                <li class="popups_item">
                    <div class="name">{{$item->name_field}}</div>
                    <div class="mail">{{$item->phone_field}}</div>
                    <div class="question">{{$item->comment_field}}</div>
                    @foreach($serv as $item_s)
                        @if($item_s->id_field == $item->service_id_field)
                            <div class="question">{{$item_s->name_field}}</div>
                        @endif
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
@endsection