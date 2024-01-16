
<?php

class Company {

    public $name;
    public $location;
    public $tot_employees;
    public static $avg_wage = 1500;
    public static $absolute_total = 0;


    public function __construct($_name,$_location,$_tot_employees) {

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;

    }

    public function __employeesEcho() {

        if ($this->tot_employees != 0){

            echo("\nL'ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti.");


        } else {

            echo("\nL'ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti.");

        }


    }

    public function __annualExpense() {

        $annual_expense_value = self::$avg_wage * $this->tot_employees;

        echo("\n" . $annual_expense_value);

    }

}

$azienda1 = new Company("Aulab","Italia",50);

$azienda2 = new Company("Azienda_2","Francia",0);

$azienda3 = new Company("Azienda_3","Svizzera",89);

$azienda4 = new Company("Azienda_4","Germania",44);

$azienda5 = new Company("Azienda_5","Spagna",64);


$azienda1->__employeesEcho();

$azienda1->__annualExpense();


