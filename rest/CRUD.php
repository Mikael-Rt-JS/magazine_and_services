<?php

abstract class CRUD{
    
    public static function create_insert($post,$keys){
        return 'lol';
    }
    
    public static function test($gets){
        echo json_encode([$gets,'CRUD'=>'good']);
    }
    
    public static function info_column($connect,$gets){
        $data=mysqli_query($connect,"DESC `{$gets[0]}`");
        $dataAll=mysqli_fetch_all($data);
        mysqli_close($connect);
        echo json_encode(['status'=>200,'info'=>$dataAll]);
        //echo json_encode([$gets,'CRUD'=>'good']);
    }
    
    public static function read($connect,$gets){
        $data=mysqli_query($connect,"SELECT * FROM `{$gets[0]}` LIMIT {$gets[2]},{$gets[3]}");
        $lengthData=mysqli_query($connect,"SELECT COUNT(*) FROM `{$gets[0]}`");
        $lengthData=mysqli_fetch_all($lengthData);
        $dataAll=[];
        while($row=mysqli_fetch_assoc($data)){
            $dataAll[]=$row;
        }
        mysqli_close($connect);
        echo json_encode(['status'=>200,'data'=>$dataAll,'lengthData'=>$lengthData]);
        //echo json_encode([$gets,'CRUD'=>'good']);
    }
    
    public static function deletes($connect,$table,$id){
        $data=mysqli_query($connect,"DELETE FROM `$table` WHERE `id`=$id");
        mysqli_close($connect);
        echo json_encode(['status'=>200,'row'=>'Rows deleted!','sql'=>"DELETE FROM `$table` WHERE 'id'=$id"]);
        //echo json_encode([$gets,'CRUD'=>'good']);
    }
    
    public static function add($connect,$sql){
        mysqli_query($connect,$sql);
        $id=mysqli_insert_id($connect);
        $data_ready=[
            "status"=>200,
            "add_id"=>$id
        ];
        echo json_encode($data_ready);
    }
}