<?php
class AutoMagazin{
    public $name;
    public $color;
    public $year;

    public function __construct($name, $color, $year)
    {
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
    }

    public function info()
    {
        echo "Это $this->name, $this->color цвет, $this->year года <br> ";
    }


}
class Base extends AutoMagazin {
    public $model;
    public $hourse;
    public $price;
    public function __construct($name, $color, $year, $model, $hourse, $price)
    {
        parent::__construct($name, $color, $year);
        $this->model = $model;
        $this->hourse = $hourse;
        $this->price = $price;
    }
    public function info()
    {
        parent::info();
        echo "<br>Характеристики:<br> Модель: $this->model. <br>Лошадинные силы:$this->hourse. <br>Цена:$this->price.<br><br>";
    }
}
$audi = new Base('Audi','черный','2020','RS 7','345','8.000.000');
$audi->info();

$bmw = new Base('BMW','желтый','2019','X7 M - competition','435','11.000.000');
$bmw->info();

//class A { //создается новый класс
//    public function foo() { //создается публичный метод
//        static $x = 0; //статически присваивается иксу нолик, т.е. присваивается один раз, и запоминается, больше присваиваться заново нолик не будет
//        // он запоминает что нолик уже был и ведет так сказать счетчик
//        echo ++$x;
//    }
//}
//$a1 = new A(); // создается новая переменная под классом А
//$a2 = new A();// создается новая, другая, переменная под классом А
//$a1->foo();// вывод
//$a2->foo();// так как икс объявлен нулем статически то у данной переменной исходное значение уже не ноль а 1 и т.д.
//$a1->foo();
//$a2->foo();

//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A { //
//}
//$a1 = new A();// тут работает так как должно работать, т.е. для класса А ведется свой счетчик
//$b1 = new B(); // а тут уже из за statiс , так как оно срабатывает счетчик открывается для В отдельно, и можно сказать что это два разных счетчика
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;// я понимаю что тут не достает скобок, но почему нет ошибки, не особо уловил, или не изменился итоговый вывод
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();