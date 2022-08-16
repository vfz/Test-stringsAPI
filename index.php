<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, OPTIONS, GET");
header("Access-Control-Max-Age: 3600");

$target=$_GET['q'];

$urlParams= explode("/",$target);

switch($urlParams[0])
{
    case 'counting';
        require_once('./objects/counting.php');
        $ICounter = new ICounter();
        $ICounter->myCount($urlParams[1],2);
        // код ответа
        http_response_code($ICounter->pStatus);
        echo json_encode(array("string" =>$urlParams[1], "resulttest" =>"2-d","Method"=>$urlParams[0], 'status'=>$ICounter->pStatus, 'statusDescription'=>$ICounter->pStatus_description));
        break;

    default;
         // код ответа
         http_response_code(404);
         echo json_encode(array("error" =>'404', "errorText" =>"Method not found", "Method"=>$urlParams[0]));
        break;
}
