<?php
global $connect;
global $classes;

if(isset($_GET['p'])){
    $gets=explode('/',$_GET['p']);
    if($gets[0]==='api_test'){
        if($gets[1]==='info'){
            $classes[$gets[0]]::info_column($connect,$gets);
        }else if($gets[1]==='read'){
            $classes[$gets[0]]::read($connect,$gets);
        }
        
        //echo json_encode([$gets]);
    }
    
}