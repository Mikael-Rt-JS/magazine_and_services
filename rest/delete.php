<?php
global $connect;
global $classes;
/*
if($deleter[1]==='delete'){
    //global $delete;
    $classes[$gets[0]]::delete($connect,$deleter[0],$deleter[2]);
    echo json_encode(['status'=>200,$deleter]);
//}else{
  //  echo json_encode(['status'=>404,$delete]);
}else{
    echo json_encode(['status'=>404,$deleter]);
}*/
if($deleter[1]==='delete'){
    $classes[$deleter[0]]::deletes($connect,$deleter[0],$deleter[2]);
    //echo json_encode(['status'=>200,'dels'=>$classes]);
}

