<?php
// объект 'Counter'
class ICounter {
 
    public $pSimbol= "";
    public $pStatus= "";
    public $pStatus_description="";

    // Функция возвращает символ популярность которого n=2
    // TODO: ввести параметр $n для поиска произвольного по полулярности символа 1,2,3,7 и т.д. Потребуются доп. проверки на имеющееся колво уникальных символов
    
    function myCount ($str){

        if(!isset($str) || strlen($str)<3){
            $this->pStatus="400";
            $this->pStatus_description="Проверяемая строка меньше трех символов";
            $this->pSimbol=false;
            return false;
        }

        // Проверяем удавлетворяет ли строка наши ожидания, хотим видеть только латинские буквы
        if (ctype_alpha($str)) {

            //Сколько разкаждый символ встретился в строке
            $arrayResult =count_chars($str, 1);

            //Если все символы встречаются одинаковое кол-во раз поругаемся на это
            if(count(array_unique($arrayResult))<2){
                $this->pStatus="400";
                $this->pStatus_description="В строке все символы встречаются одинаково часто";
                $this->pSimbol=false;
                return false;
            }

            // Сортируем массив по убыванию
            arsort($arrayResult);
            
            // Присваиваем значение самой популярной буквы и следующей для проверки
            $firstWord=$arrayResult[key($arrayResult)];
            $testWord=$arrayResult[key($arrayResult)];

            // смещаем курсор в массиве до следующего по популярности символа
            while($firstWord==$testWord){

                next($arrayResult);
                $testWord=$arrayResult[key($arrayResult)];
                
            }

            // массив со значением дублирующихся по вхождению символов
            $freqs = array_count_values($arrayResult);

            // если второй по поулярности симовл 1 то возвращаем его если таких больше одного то false
            $this->pSimbol=$freqs[$arrayResult[key($arrayResult)]]==1 ? chr(key($arrayResult)) : false;
            $this->pStatus=!$this->pSimbol ? "400" : "200";
            $this->pStatus_description=!$this->pSimbol ? "В строке несколько символов претендующих на ответ " : "ок";
            return true;

        } else {
            // echo "Строка $testcase состоит не только из букв.\n";
            $this->pStatus="400";
            $this->pStatus_description="Строка должна состоять только из латинских букв";
            $this->pSimbol=false;
            return false;
        }

    }
}