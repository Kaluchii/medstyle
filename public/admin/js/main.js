/**
 * Created by KocaHocTpa on 10.02.2016.
 */

$(document).ready(function(){
    $('.menu-btn').on('click', function(){
        if ($('aside').hasClass('left')){
            $('aside').css('left','-17%').removeClass('left');
            $('.menu-btn').html(' ► ');
        }else {
            $('aside').addClass('left').css('left','0%');
            $('.menu-btn').html(' ◄ ');
        }
    });
    $(function(){

        //$.trumbowyg.btnsGrps.test = ['bold', 'link'];

        //var customizedButtonPaneTbwOptions = {
        //    lang: 'en',
        //    closable: true,
        //    fixedBtnPane: true,
        //    resetCss: true,
        //    removeformatPasted: true,
        //    tagsToRemove: ['script', 'style'],
        //    btnsDef: {
        //        // Customizables dropdowns
        //        align: {
        //            dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        //            ico: 'justifyLeft'
        //        },
        //        image: {
        //            dropdown: ['insertImage', 'upload'],
        //            ico: 'insertImage'
        //        }
        //    },
        //    btns: ['viewHTML',
        //        '|', 'formatting',
        //        '|', 'btnGrp-test',
        //        '|', 'align',
        //        '|', 'btnGrp-lists',
        //        '|', 'image',
        //        '|', 'foreColor', 'backColor',
        //        '|', 'fontSize', 'fontFamily',
        //        '|', 'removeformat']
        //};
        //$('textarea').trumbowyg(customizedButtonPaneTbwOptions);
        $('textarea').summernote({
            height    : 400,
            lang      : 'ru-RU',
            codemirror: {
                theme: 'monokai'
            },
            styleTags: ['p', 'blockquote', 'h1', 'h2','h3','h4'] ,
            toolbar   : [
                ['style', ['style', 'bold', 'italic', 'clear']],
                ['insert', ['picture', 'link', 'video']],
                ['paragraph', ['ul', 'ol']],
                ['misc', ['fullscreen', 'codeview']]
            ],
            callbacks : {
                //onPaste: function (e) {
                //    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                //    e.preventDefault();
                //    document.execCommand('insertText', false, bufferText);
                //},
                onCreateLink: function (url) {
                    if (url.indexOf('http://') !== 0 && url.indexOf('#') !== 0) {
                        url = 'http://' + url;
                    }
                    return url;
                },
                onImageUpload: function (files, editor, welEditable) {
                    var _this = this;
                    data = new FormData();
                    data.append("imagefile", files[0]);
                    data.append("block_name", 'dom_all_images');
                    data.append("group_name", 'images_set');
                    data.append("image_name", 'text_pict');
                    $.ajax({
                        data       : data,
                        type       : "POST",
                        headers    : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url        : "/adm/create_group_image",
                        cache      : false,
                        contentType: false,
                        processData: false,
                        success    : function (data) {
                            //console.log(data);
                            //console.log(this);
                            $(_this).summernote('editor.insertImage', data.file);
                            $('.group_container[data-block="dom_all_images"][data-group="images_set"][data-owner-id="0"]').append(data.complhtml);
                        }
                    });
                }
            }
        });
        function sendFile(file, editor, welEditable) {

        }






    });

    $('a').each(function(){
        if ($(this).attr('href') == document.location.pathname && $(this).attr('href') == document.location.pathname ){
            $(this).addClass('curr_page');
        }
    });


    function translit(){
        var space = '-';
        var text = $('.input[data-field-name="name"]').val().toLowerCase();
        var transl = {
            'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
            'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
            'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
            'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya',
            ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
            '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
            '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
            ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
            '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
            '?': space, '<': space, '>': space, '№':space
        };
        var result = '';
        var curent_sim = '';
        for(i=0; i < text.length; i++) {
            if(transl[text[i]] != undefined) {
                if(curent_sim != transl[text[i]] || curent_sim != space){
                    result += transl[text[i]];
                    curent_sim = transl[text[i]];
                }
            }
            else {
                result += text[i];
                curent_sim = text[i];
            }
        }
        result = TrimStr(result);
        function TrimStr(s) {
            s = s.replace(/^-/, '');
            return s.replace(/-$/, '');
        }

        $('.input[data-field-name="slug"]').val(result);
    }
    $('.input[data-field-name="name"]').keyup(function(){
        translit();
    });
    $('body').on('click',function(){
       $('.message-container').removeClass('success').removeClass('alert');
    });

});