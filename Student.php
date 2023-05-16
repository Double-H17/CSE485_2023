<?php
class Student{
    private $id;
    private $name;
    private $age;
    private $grade;

    public function __construct($id, $name, $age, $grade){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        return $this->age = $age;
    }
    public function getGrade(){
        return $this->grade;
    }

    public function setGrade($grade){
        return $this->grade = $grade;
    }
}
?>