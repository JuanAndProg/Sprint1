<?php
class Employee {
  public $name;
  public $salary;

  public function initialize($employee_name, $employee_salary) {
    $this->name = $employee_name;
    $this->salary = $employee_salary;
  }

  public function printData() {
    echo "Employee name: " . $this->name . "<br>";
    if ($this->salary > 6000) {
        echo "Aquest empleat haurà de pagar impostos";
    } else {
        echo "Aquest empleat no haurà de pagar impostos";
    }
  }
}

$emp = new Employee();
$emp->initialize("John Doe", 7000);
$emp->printData();

?>