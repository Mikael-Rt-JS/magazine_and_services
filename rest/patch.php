<?php


if($_PATCH){
    parse_str(file_get_contents('php://input'), $_PATCH);
    echo json_encode([$_PATCH]);
}
