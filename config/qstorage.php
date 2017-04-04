<?php

return [

   /*
    * static blocks
    */

    'static_index_page'=>[
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'groups' =>[
            'slider' => [
                'stringfields' => ['link','slide_title','descr'],
                'images'       => ['wrap','desc_wrap'],
                'numbs'        => ['flag']
            ]
        ]
    ],
    'static_all_site' =>[
        'stringfields'=>['head_phone','address','map_link','facebook']
    ],
    'static_spec' =>[
        'title' => '',
        'textfields'    => ['description'],
        'images'        => ['for_life'],
        'stringfields'  => ['for_life_text','page_title','seo_description','seo_keywords'],
        'groups' => [
            'photos'    =>[
                'images' => ['photo']
            ]
        ]
    ],
    'static_services' => [
        'title' => 'Услуги',
        'textfields' => ['descriptions'],
        'images'     => ['background'],
        'stringfields' => ['page_title','seo_description','seo_keywords'],
    ],
    'static_technology' => [
        'title' => 'Услуги',
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'textfields' => ['descriptions'],
        'images'     => ['background'],
        'groups'     => [
            'techno_cert' => [
                'images' => ['cert']
            ]
        ]
    ],
    'static_news' => [
        'title' => 'Услуги',
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'textfields' => ['descriptions'],
        'images'     => ['background']
    ],
    'static_poleznoe' => [
        'title' => 'Услуги',
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'textfields' => ['descriptions'],
        'images'     => ['background']
    ],
    'static_questions' => [
        'title' => 'Вопросы и ответы',
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'images' => ['background'],
    ],
    'static_about' => [
        'title' => '',
        'textfields' => ['aboutfirm'],
        'images'     => ['d3_tour'],
        'stringfields' => ['d3_link','linktext','page_title','seo_description','seo_keywords']
    ],
    'static_contacts' =>[
        'textfields' => ['contacts','maps'],
        'stringfields' => ['page_title','seo_description','seo_keywords'],
        'images' => ['photo'],
    ],



    /*
     * dynamic blocks
     */
    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images'    => ['text_pict']
            ]
        ]
    ],
    'dom_videos'=>[
        'title'  => 'Видео',
        'groups' =>[
            'videos' =>[
                'images'        => ['wrap'],
                'stringfields'  => ['link','name']
            ]
        ]
    ],
    'dom_problems' => [
        'title' => '',
        'groups' => [
            'problems' => [
                'stringfields' => ['name','page_title','seo_description','seo_keywords'],
                'textfields'   => ['text'],
                'numb'         => ['problem_id']
            ]
        ]
    ]

    ,
    'dom_specials'=>[
        'title'  => 'Специальные предложения',
        'groups' =>[
            'special_offers' => [
                'images'        => ['wrap','prev'],
                'stringfields'  => ['prev_text','prev_name','name','seo_description','seo_keywords','preview_name'],
                'textfields'    => ['all_text','preview_text']
            ]
        ]
    ],
    'dom_specialists' => [
        'groups' => [
            'specs' =>[
                'images' => ['spec_photo'],
                'stringfields' => ['name','profession','page_title','seo_description','seo_keywords'],
                'textfields'   => ['about'],
                'numbs'         => ['spec_id'],
            ],
            'spec_certs' => [
                'owner' => 'specs',
                'images'=> ['certificate']
            ]
        ]
    ],
    'dom_services' => [
        'groups' => [
            'serv_category' => [
                'images' => ['category_pict'],
                'stringfields' => ['name','category_title'],
                'textfields' => ['descr_on_main']
            ],
            'services' => [
                'owner' => 'serv_category',
                'stringfields'=> ['name','page_title','discount','discount_comment','seo_description','seo_keywords'],
                'textfields'  => ['descr_1','descr_2','descr_3','right_side_1','right_side_2','right_side_3'],
                'images'      => ['big_pict','background','over_background'],
                'bools'       => ['is_white'],
            ],
            'serv_slider'   => [
                'owner' => 'services',
                'images' => ['slide']
            ],
            'serv_pokazania' =>[
                'owner' => 'services',
                'stringfields' => ['p_name']
            ],
            'serv_protivopokazania' =>[
                'owner' => 'services',
                'stringfields' => ['p_name']
            ],
            'serv_after_proc' =>[
                'owner' => 'services',
                'stringfields' => ['p_name']
            ],
            'serv_effect_up'=>[
                'owner' => 'services',
                'stringfields' => ['serv_name','link']
            ]
        ]
    ],
    'dom_technologys' => [
        'groups' => [
            'technologys' => [
                'stringfields'=> ['name','page_title','seo_description','seo_keywords'],
                'textfields'  => ['desrc_0','descr_1','descr_2','descr_3','right_side_1','right_side_2','right_side_3'],
                'images'      => ['big_image','background','wrap'],
                'bools'       => ['is_white'],
            ],
            'tech_pokazania' =>[
                'owner' => 'technologys',
                'stringfields' => ['p_name']
            ],
            'tech_protivopokazania' =>[
                'owner' => 'technologys',
                'stringfields' => ['p_name']
            ],
            'tech_after_proc' =>[
                'owner' => 'technologys',
                'stringfields' => ['p_name']
            ],
            'tech_effect_up'=>[
                'owner' => 'technologys',
                'stringfields' => ['serv_name','link']
            ]
        ]
    ],
    'dom_news' => [
        'groups' => [
            'news' => [
                'stringfields'=> ['name','page_title','seo_description','seo_keywords'],
                'textfields'  => ['content'],
                'images'      => ['desktop_background','mobile_background','right_block'],
                'bools'       => ['is_white'],
            ],
            'service_sale' => [
                'owner'     => 'news',
                'numbs'      => ['serv_id']
            ]
        ]
    ],
    'dom_poleznoe' => [
        'groups' => [
            'poleznoe' => [
                'stringfields'=> ['name','page_title','seo_description','seo_keywords'],
                'textfields'  => ['descr_0','descr_1','descr_2','descr_3','right_side_1','right_side_2','right_side_3'],
                'images'      => ['big_pict','background'],
                'bools'       => ['is_white','test'],
            ],
            'polez_pokazania' =>[
                'owner' => 'poleznoe',
                'stringfields' => ['p_name']
            ],
            'polez_protivopokazania' =>[
                'owner' => 'poleznoe',
                'stringfields' => ['p_name']
            ],
            'polez_after_proc' =>[
                'owner' => 'poleznoe',
                'stringfields' => ['p_name']
            ],
            'polez_effect_up'=>[
                'owner' => 'poleznoe',
                'stringfields' => ['serv_name','link']
            ]
        ]
    ],
    'dom_questions' => [
        'groups' => [
            'question' => [
                'textfields' => ['question_text','answer_text'],
                'stringfields' => ['question_name','seo_description','seo_keywords'],
                'numbs'         => ['spec_id','problem_id']
            ]
        ]
    ],

    'testing_block' => [
        'groups' =>[
            'age' => [
                'stringfields' => ['age_name','testing_title'],
            ],
            'anket_item' => [
                'owner' => 'age',
                'stringfields' => ['question_text','question_name','question_answer','question_link','question_link_name'],
                'textfields'   => ['question_answer_text']
            ],
            'recommend' => [
                'owner' => 'anket_item',
                'numbs' => ['service_id']
            ]
        ]
    ],




    /*
     * fidback (popups) config
     */

    'fidback' => [
        'stringfields' => ['mail_rec','mail_username','site_name'],
        'groups' => [
            'questions' => [
                'stringfields' => ['name','mail'],
                'textfields'   => ['question'],
                'bools'         => ['is_public','mailed']
            ],
            'consultation'     => [
                'stringfields' => ['name','phone'],
                'textfields'   => ['comment'],
                'numbs'        => ['service_id'],
                'bools'        => ['mailed']
            ]
        ]
    ]

];
