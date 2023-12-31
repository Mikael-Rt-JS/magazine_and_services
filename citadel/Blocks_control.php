<?php

class Blocks_control{
    public static $blocks=[
        '404'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'about'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_categories'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_main_categories'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_message_to_me'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_my_products'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_news_on_sait'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_news_products'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_orders'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_payment_systems'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_personal_data'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_products'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_ready_orders'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'admin_users'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'basket'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'contacts'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'forgot_your_password'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'home'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'mail_confirmation'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'services'=>[
            "phpCSSBlocks"=>['./assets/css/global.css','./assets/css/services_header.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/services_header.php','./views/blocks/global/footer.php']
        ],
        'news_on_sait'=>[
            "phpCSSBlocks"=>['./assets/css/global.css','./assets/css/news_card_block.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php','./views/blocks/global/news_card_block.php']
        ],
        'news_products'=>[
            "phpCSSBlocks"=>['./assets/css/global.css','./assets/css/news_card_block.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php','./views/blocks/global/news_card_block.php']
        ],
        'payment_systems'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'policy'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'product_info'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'signin'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'signup'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_message_to_me'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_my_orders'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_my_products'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_orders'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_personal_data'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ],
        'user_ready_orders'=>[
            "phpCSSBlocks"=>['./assets/css/global.css'],
            'phpHTMLBlocks'=>['./views/blocks/global/footer.php']
        ]
    ];
    //'./views/blocks/admin/aside_settings.php';
    
    public static function render_blocks($uri){
        //return json_encode(self::$blocks)." uri: ".json_encode($uri);
        if(file_exists("./views/pages/{$uri[1]}.php")){
            return self::$blocks[$uri[1]]["phpHTMLBlocks"];
        }else{
            return self::$blocks['404']["phpHTMLBlocks"];
        }
    }
    
    public static function adding_css($uri){
        //return json_encode(self::$blocks)." uri: ".json_encode($uri);
        if(file_exists("./views/pages/{$uri[1]}.php")){
            return self::$blocks[$uri[1]]["phpCSSBlocks"];
        }else{
            return self::$blocks['404']["phpCSSBlocks"];
        }
    }
}