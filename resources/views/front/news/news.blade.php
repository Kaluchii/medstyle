@extends('front.layout')
@include('front.news.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <article class="content akcii">
        {{--<div class="content-head">--}}
            {{--<h1 class="content-head-title spec">{{$static->title_field}}</h1>--}}
            {{--<div class="grid grid-pad head-grid">--}}
                {{--<div class="col-1-2 text-block">--}}
                    {{--{!! $static->descriptions_field !!}--}}
                {{--</div>--}}
                {{--<div class="col-1-2">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="grid grid-pad akcii flex-grid">

            <?php $i= 0;
            function str_replace_once($search, $replace, $text)
            {
                $pos = strpos($text, $search);
                return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
            }
            function wrap_in_link( $str, $slug)
            {
                $astart = '<a href=\'' . $slug . '\' class=\'link\'>';
                $aend = '</a>';
                $str = str_replace_once('#', $astart, $str);
                $str = str_replace_once('#', $aend, $str);
                return $str;
            }
            ?>
            @foreach($dom->special_offers_group as $item)
                <?php $i++; ?>
                @if($i <= 3)

                    <div class="row">
                        <div class="col-9-12">
                            <h2 class="shares-name">
                                <?php $link = wrap_in_link($item->prev_name_field, $item->slug_field); ?>
                                {!! $link !!}
                            </h2>
                            <p class="shares-description">{{$item->prev_text_field}}</p>
                        </div>
                        <div class="col-3-12">
                            <a href="{{$item->slug_field}}" class="shares-link">
                                <img src="/images/{{$item->prev_image->primary_link}}" alt="">
                                <p class="shares-date">{{$item->all_text_field}}</p>
                            </a>
                        </div>
                    </div>

                @endif
            @endforeach


        </div>

    </article>
@endsection
