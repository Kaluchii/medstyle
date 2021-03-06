<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{{ $title or 'Панель управления MEDSTYLE' }}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/admin/js/jquery.min.js"></script>

    @include('back/scripts')
    @yield('scripts')
</head>
<body>
<header class="header">
    <p class="site-name">Клиника эстетической медицины MEDSTYLE</p>
    <div class="button">
        <a href="/auth/logout" class="logout">Выход</a>
    </div>
</header>

<div class="main-content">
    <aside class="left-side-bar">
        <nav class="main-menu">
            <ul id="menu">
                <li><span class="menu-title">Страницы</span>
                    <ul>
                        <li><a href="/adm/edit/about">О клинике</a></li>
                        <li><a href="/adm/edit/specialists">Специалисты</a></li>
                        <li><a href="/adm/edit/services">Услуги</a></li>
                        <li><a href="/adm/edit/technology">Технологии</a></li>
                        <li><a href="/adm/edit/poleznoe">Полезное</a></li>
                        <li><a href="/adm/edit/questions">Вопросы и ответы</a></li>
                        <li><a href="/adm/edit/news">Акции</a></li>
                        <li><a href="/adm/edit/contacts">Контакты</a></li>
                    </ul>
                </li>
                <li><span class="menu-title">Специальные блоки</span>
                    <ul>
                        <li><a href="/adm/edit/problems">Причины обращения</a></li>
                        <li><a href="/adm/edit/special">Специальные предложения</a></li>
                        <li><a href="/adm/edit/slider">Главная страница и слайдер</a></li>
                        <li><a href="/adm/edit/video">Видео</a></li>
                        <li><a href="/adm/edit/age">Тестирование</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    @include('back.dom_all_images')
    @include('back.messenger')
    <article class="content">
        @yield('content')
        @yield('messenger')
        @yield('text')


    </article>
</div>
</body>
</html>