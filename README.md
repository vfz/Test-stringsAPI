# Test-stringsAPI
Этот пример простого rest API

## Настройка проекта
```
Скопируйте все файлы в каталог вашего проекта

Если вы используете nginx, вам необходимо настроить сервер для замены URL-адресов. Пример конфигурации для nginx см. в файле проекта nginx Example.conf.
Для Apache используйте .htaccess
```

Методы
----------------

### counting

Возвращает второй наиболее часто встречающийся символ из заданной строки
для тестирования принимаются только строки из латинских букв
**URL: \[BASE\_URL\]/counting/YOUR_STRING_FOR_TESTING**

пример ответа:

```json
{
	"string": "YOURSTRINGrfeeee",
	"resulttest": "R",
	"Method": "counting",
	"status": "200",
	"statusDescription": "ок"
}
```
### palindrome
Возвращает true, если строка является палиндромом или содержит один символ, или false, если строка пуста или не является полиндромом.
**URL: \[BASE\_URL\]/palindrome/YOUR_STRING_FOR_TESTING**

пример ответа:

```json
{
	"string": "YOUUOY",
	"resulttest": true,
	"Method": "palindrome",
	"status": "200",
	"statusDescription": ""
}
```
English
========
# Test-stringsAPI
This exepmle simple rest API

## Project setup
```
Copy all the files in your project directory

If you use nginx, you will need to configure your server for replace URLs exemple configuration for nginx see in project file nginx Example.conf
For Apache, use .htaccess 
```

Methods
----------------

### counting

Returns the second most common character from the given string
only strings from latin letters are accepted for testing
**URL: \[BASE\_URL\]/counting/YOUR_STRING_FOR_TESTING**

response exemple:

```json
{
	"string": "YOURSTRINGrfeeee",
	"resulttest": "R",
	"Method": "counting",
	"status": "200",
	"statusDescription": "ок"
}
```
### palindrome
Returns true if the string is a palindrome or contein one simbol or false if str is empty or not polindrome
**URL: \[BASE\_URL\]/palindrome/YOUR_STRING_FOR_TESTING**

response exemple:

```json
{
	"string": "YOUUOY",
	"resulttest": true,
	"Method": "palindrome",
	"status": "200",
	"statusDescription": ""
}
```

