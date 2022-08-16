<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, OPTIONS, GET");
header("Access-Control-Max-Age: 3600");

$target=$_GET['q'];

$urlParams= explode("/",$target);

switch($urlParams[0]){
    case 'counting';
        require_once('./objects/counting.php');
        $ICounter = new ICounter();
        $ICounter->myCount($urlParams[1]);

        // код ответа
        http_response_code($ICounter->pStatus);
        echo json_encode(array("string" =>$urlParams[1], "resulttest" =>$ICounter->pSimbol,"Method"=>$urlParams[0], 'status'=>$ICounter->pStatus, 'statusDescription'=>$ICounter->pStatus_description));
        break;
    // Проверка на полиндромность
    case 'palindrome';
        require_once('./objects/palindrome.php');
        $IPalindrome = new IPalindrome();
        $IPalindrome->myPalindrome($urlParams[1]);
        // код ответа
        http_response_code($IPalindrome->pStatus);
        echo json_encode(array("string" =>$urlParams[1], "resulttest" =>$IPalindrome->pResult,"Method"=>$urlParams[0], 'status'=>$IPalindrome->pStatus, 'statusDescription'=>$IPalindrome->pStatus_description));
        break;

    default;
         // код ответа
         http_response_code(404);
         echo json_encode(array("status" =>'404', "statusDescription" =>"Method not found", "Method"=>$urlParams[0]));
        break;
}
