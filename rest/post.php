<?php
global $connect;
global $classes;

if(isset($_POST)){
    $post=explode('/',$_GET['p']);
    if($post[0]==="api_test"){
        if($post[1]==="add"){
            //$_POST = json_decode(file_get_contents('php://input'), true);
            $keys=array_keys($_POST);
            $sql="INSERT INTO `{$post[0]}` (`";
            $keysStr=implode("`,`",$keys);
            $sql.=$keysStr."`) VALUES (";
            $values=array_values($_POST);
            $valArr=[];
            for($i=0;$i<count($values);$i++){
                if(is_numeric($values[$i])){
                    $valArr[]=$values[$i];
                }else{
                    if(empty($values[$i])){
                        $valArr[]="'-'";
                    }else{
                        $valArr[]="'".$values[$i]."'";
                    }
                }
            }
            $valStr=implode(",",$valArr);
            $sql.=$valStr.")";
            $classes[$post[0]]::add($connect,$sql);
            //echo json_encode([$post,$sql]);
        }else if($post[1]==="add_and_file"){
            //$_POST = json_decode(file_get_contents('php://input'), true);
            //$_FILES['images'][0]['name']
            //var_dump($_POST);
            echo json_encode(['status'=>200,$_FILES['images']['size']]);
        }
        
    }
    
}
