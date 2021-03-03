
<?php 

// 1.Сделайте функцию, которая возвращает куб числа. Число передается параметром.

echo "zadanie 1 </br>";

function kubchisla($num1) { 

return $num1 * $num1 * $num1;

}

echo kubchisla(6);

//2. Сделайте функцию, которая возвращает сумму двух чисел. Числа
//передаются параметрами функции.

echo "</br>zadanie 2 </br>";

function summa($num1, $num2) { 

    return $num1 + $num2;
    
    }
    
echo summa(2,3);

//3.Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

echo "</br>zadanie 3 </br>";

function day($day) { 

    switch ($day) {
        case 1:
            echo "ponedelnik";
            break;
        case 2:
            echo "vtornik";
            break;
        case 3:
            echo "sreda";
            break;
    }
    
    }
    
echo day(2);

//4.Сделайте функцию, которая параметром принимает число и проверяет -
//отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
//а если нет - false.

echo "</br>zadanie 4 </br>";

function proverkachisla($chislo4) { 

    if ($chislo4 == 0) {
        echo "vy vveli 0";
    } elseif ($chislo4 < 0) {
        $chislo4 = true;
        return $chislo4;
    } elseif ($chislo4 > 0) {
        $chislo4 = false;
        return $chislo4;
    }

    
    }
    
echo proverkachisla(0);

//5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
//принимает целое число и возвращает сумму его цифр.

echo "</br>zadanie 5 </br>";

function getDigitsSum($digit) {
    $num = "$digit";
    $sum = 0;

    for ($i = 0; $i < strlen($num); $i++) {
        $sum += +$num[$i];
    }
    return $sum;
}

echo getDigitsSum(25);

//6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
//используйте вспомогательную функцию getDigitsSum из предыдущей задачи.

echo "</br>zadanie 6 </br>";

function findYear($findSum)
{
    $arYear = array();
    for ($i = 1; $i <= 2020; $i++) {
        if (getDigitsSum($i) == $findSum) {
            array_push($arYear, $i);
        }
    }
    return $arYear;
}

foreach (findYear(13) as $year) {
    echo "$year ";
}

//7. Сделайте функцию isEven() (even - это четный), которая параметром
//принимает целое число и проверяет: четное оно или нет. Если четное - пусть
//функция возвращает true, если нечетное - false.

echo "</br>zadanie 7 </br>";


function chetnoe($chislo7) {
    if ($chislo7 % 2 === 0) {
            $chislo7 = true;
            return $chislo7;
        }
    else {
            $chislo7 = false;
            return $chislo7;
        }
}   

echo chetnoe(20);

//8.Сделайте функцию, которая принимает строку на русском языке, а
//возвращает ее транслит.

//9. Сделайте функцию, которая возвращает множественное или единственное
//число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
//первым параметром принимает число, а следующие 3 параметра — форма
//для единственного числа, для чисел два, три, четыре и для чисел, больших
//четырех, например, func(3, 'яблоко', 'яблока', 'яблок').

//10. Дан массив с числами. Выведите последовательно его элементы
//используя рекурсию и не используя цикл.



//11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти,
//опять сложите его цифры. И так, пока сумма не станет однозначным числом
//(9 и менее).

echo "</br>zadanie 11 </br>";

function calculate($number)
{
    $sum = getDigitsSum($number);

    if ($sum <=9) return $sum;
    else 
    return calculate($sum);

}

echo "Chislo ", calculate(2137);

//12.Рассчитать скорость движения машины и выведите её в удобочитаемом
//виде. Осуществить возможность вывода в км/ч, м/c. Представить решение
//задачи с помощью одной функции.

echo "</br>zadanie 12 </br>";

function skorost($raastoyanie, $vrema)
{
    $skorost = $raastoyanie / $vrema;
    $skorost2 = $raastoyanie / $vrema * (5 / 18);

    echo "skorost ravna ", $skorost, " km/ch";
    echo " skorost ravna ", round($skorost2), " m/sek";

}

echo skorost(12,2);

//13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при
//условии что каждую букву из строки 1 можно использовать только один раз.

echo "</br>zadanie 13 </br>";

function sostavlenie($word1, $word2)
{

    $word1 = preg_split("/[\s,]+/", $word1);  //разбивка на символы учитывая пробелы
    $word2 = preg_split("/[\s,]+/", $word2);  
    $razlichie = array_diff($word1, $word2); //если есть различия, то записывается сходство в переменную
    
    
   foreach($razlichie as $value)
  {
    // echo "$value";
  }
  
  if ($razlichie ==! true) {
   	echo "mozhno";
  } else {
  	echo "nelzya";
  }

}

sostavlenie('privet пока', 'privet пока');

//14.Палиндромом называют последовательность символов, которая читается
//как слева направо, так и справа налево. Напишите функцию по определению
//палиндрома по переданному параметру.

echo "</br>zadanie 14 </br>";

function polindrom($slovo)
{
    if ($slovo == strrev($slovo)) { //функция переворачивая строки
        echo "palindrom";
    } else {
        echo "ne palindrom";
    }

}

echo polindrom("kolok");


//15. Создание функцию создания таблицы умножения в HTML-документе в
//виде таблицы с использованием соотв. тегов.

//16. Дана строка с текстом. Напишите функцию определения самого длинного
//слова.

echo "</br>zadanie 16 </br>";

function proverkaslova($string)
{
    $word = '';
    $string = explode(' ', $string); // разбивает строки

    foreach ($string as $value) {
        if (strlen($word) < strlen($value)) {
            $word = $value;
        }
    }

    return $word;
}

echo proverkaslova("восход красивой луны на небе");


//17. Напишите функцию определения суммарного количества единиц в числах
//от 1 до 100.

echo "</br>zadanie 17 </br>";

function calckolvo($searchnumber)
{
    $count = 0;

    for ($i = 1; $i <= 3; $i++) {
        if (strripos("$i", "$searchnumber") !== false) // вхождение символа в строку
            $count++;
    }

    return $count;
}

echo calckolvo(4);

//18. Напишите функцию, которая разбивает длинную строку тегами <br> так,
//чтобы длина каждой подстроки была не более N символов. Новая подстрока
//не должна начинаться с пробела.