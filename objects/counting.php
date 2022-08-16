<?php
// объект 'Counter'
class ICounter {
 
    public $simbol= "";
    public $pStatus= "";
    public $pStatus_description="";

    // Функция возвращает символ популярность которого n
    function myCount ($str,$n){
        // Проверяем удавлетворяет ли строка наши ожидания, хотим видеть только буквы
        if (ctype_alpha($str)) {

            $arrayStr = explode('',$str);
            $arrayResult = array();
            foreach($arrayStr as $key => $val) {
                if (isset($arrayResult[$val])) {
                    $arrayResult[$val]=$arrayResult[$val]+1;
                }else{
                    $arrayResult[$val]=1;
                }
            }

            $this->pStatus="200";
            $this->pStatus_description="";
            return true;

        } else {
            // echo "Строка $testcase состоит не только из букв.\n";
            $this->pStatus="400";
            $this->pStatus_description="Строка должна состоять только из букв";
            return false;
        }

    }
}