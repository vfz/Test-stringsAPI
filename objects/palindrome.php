<?php
// объект 'Palindrome'
class IPalindrome {
 
    public $pResult= false;
    public $pStatus= "";
    public $pStatus_description="";

    // такой вариант функции позволит проверять строки в любой кодировке и локали
    private function mb_strrev($str){
        $r = '';
        for ($i = mb_strlen($str); $i>=0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }

    // Функция возвращает true если строка палиндром и false если нет
    function myPalindrome ($str){
        //Строго говоря палиндром это сочетание символов одинаково читаемое в обе стороны но будем считать что еденичный симовл это палиндром
        if(!isset($str) || empty($str)){
            $this->pStatus="400";
            $this->pStatus_description="нет строки для проверки";
            return false;
        }
        $this->pResult = $str===$this->mb_strrev($str) ? true : false;      
        $this->pStatus="200";
        $this->pStatus_description= "";

        return  $this->pResult;
    }
}