<?php 

/** 
 * Khai báo class Employee.
 * Trong class Employee khai báo thuộc tính:
 * $EmployeeName,$salary ở kiểu dữ liệu private
 * $age ở kiểu dữ liệu public.
 * constructor setName param string $name : tên nhân viên
 * constructor getName không có tham số
 * constructor setAge param int $age: tuổi nhân viên
 * constructor setAgeEmployee:
 *               int $age :tuổi nhân viên
 *               $salary : lương nhân viên
 *               $EmployeeName : Tên nhân viên
 * */ 
class Employee
{
    private $EmployeeName; 
    public $age;
    private $salary;
 
    public function setName(string $name)
    {
        $this->EmployeeName = $name;
        return $this;
    }
 
    public function getName(): string
    {
        return $this->EmployeeName;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
    public function setSalary(int $salary): self
    {
        $this->salary = $salary;
        return $this;
    }

    public function setAgeEmployee(int $age, $salary, $EmployeeName): self
    {
        $this->age = $age;
        return $this;
    }

}
/**
 * Khởi tạo 1 đối tượng $employee của class Employee với 2 đối số :
 *                                      ->setName : tên nhân viên
 *                                      ->setAge : tuổi 
 * 
*/
$employee =(new Employee())
->setName('John Doe')
->setAge(20);
/**
 * Hiển thị thông tin nhân viên:
 *      Employee name, Age.          
 */
echo 'Employee name: '.$employee->getName().
    ', Age: '.$employee->age;

// EOF

