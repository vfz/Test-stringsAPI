<?php
// объект 'Counter'
class ICounter {
 
    public $pSimbol= "";
    public $pStatus= "";
    public $pStatus_description="";

    // Функция возвращает символ популярность которого n
    function myCount ($str,$n){
        // Проверяем удавлетворяет ли строка наши ожидания, хотим видеть только буквы
        if (ctype_alpha($str)) {

            $arrayResult =count_chars($str, 1);    
            arsort($arrayResult);
            next($arrayResult);
            $freqs = array_count_values($arrayResult);
            $this->pSimbol=$freqs[$arrayResult[key($arrayResult)]]==1 ? chr(key($arrayResult)) : false;


            $this->pStatus=!$this->pSimbol ? "400" : "200";
            $this->pStatus_description=!$this->pSimbol ? "В строке несколько символов претендующих на ответ" : "";
            return true;

        } else {
            // echo "Строка $testcase состоит не только из букв.\n";
            $this->pStatus="400";
            $this->pStatus_description="Строка должна состоять только из букв";
            $this->pSimbol=false;
            return false;
        }

    }
}