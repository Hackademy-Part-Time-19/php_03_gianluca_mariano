
<?php

class Company {

    public $name;
    public $location;
    public $tot_employees;
    public static $annual_Expenses_Tot;
    public static $avg_wage = 1500;
    public static $absolute_total = 0;



    public function __construct($_name,$_location,$_tot_employees) {

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;

    }

    public function employeesEcho() {

        if ($this->tot_employees != 0){

            echo("\nL'ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti.");


        } else {

            echo("\nL'ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti.");

        }


    }

    public function annualExpense($months) {

        $annual_expense_value = (self::$avg_wage * $months) * $this->tot_employees;

        return $annual_expense_value;

    }

    public function printAnnualExpense($months = 12) {

        echo("L'azienda " . $this->name . " ha speso " . $this->annualExpense($months) . " euro \n" );


    }


    public function annualExpensesTot() {

        return self::$annual_Expenses_Tot += $this->__annualExpense();


    }

}

$azienda1 = new Company("Aulab","Italia",50);

$azienda2 = new Company("Azienda_2","Francia",0);

$azienda3 = new Company("Azienda_3","Svizzera",89);

$azienda4 = new Company("Azienda_4","Germania",44);

$azienda5 = new Company("Azienda_5","Spagna",64);


//$azienda1->employeesEcho();

//$azienda1->annualExpense();

echo ($azienda1->printAnnualExpense());




