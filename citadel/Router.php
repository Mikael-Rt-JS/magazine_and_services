<?php

class Router{
    //public static $uri;
    //public static $gets=explode('/',$_GET['p']);
    //public static $num=6;
    //public static function page($uri,$method){
        
    //}
    
    //БЕРЁМ АДРЕССНУЮ ССЫЛКУ И ДЕЛАЕМ ИЗ НЕГО МАССИВ
    public static function uriNow(){
        return explode('/',$_SERVER['REQUEST_URI']);
    }
    
    //КАКОЙ МЕТОД ИЗ ЗАПРОСОВ БЫЛ АКТИВЕН СЕЙЧАС
    public static function what_method($method){
        $gets=explode('/',$_GET['p']);
        if($method==='GET'){
            if(count($gets)==1){
                Router::go_page();
            }else{
                echo "p->".$gets[1];
            }
            
        }
    }
    
    //ПЕРЕЙТИ НА СТРАНИЦУ ПО АДРЕСУ
    public static function go_page(){
        $uri=Router::uriNow();
        /*if($uri[1]==="admin_orders"){
            Router::render_page($uri[1]);
        }*/
        if(file_exists("./views/pages/{$uri[1]}.php")){
            if($uri[1]){
                Router::render_page($uri[1]);
            }else{
                Router::render_page('404');
            }
        }else{
            Router::render_page('404');
        }
    }
    
    //ОТРИСОВКА СТРАНИЦЫ 
    public static function render_page($page){
        include "./views/pages/$page.php";
    }
    
    public static function ok(){
        echo 999;
    }
}