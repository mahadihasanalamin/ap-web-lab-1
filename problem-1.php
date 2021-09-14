<?php 
class Student{
    public $id;
    public $name;
    public $dob;
    public $courses = [];


    function showInfo(){
        echo "Student Information:"."<br>";
        echo "ID: ".$this->id."<br>";
        echo "Name: ".$this->name."<br>";
        echo "DOB: ".$this->dob."<br>";
    }

    function addCourses($courseName){
        $count= count($this->courses);
        $this->courses[$count] = $courseName;
    }

    function showAllCourses(){
        echo "Course List:"."<br>";
        $count= count($this->courses);
        for($i = 0; $i<=$count-1; $i++){
            echo $this->courses[$i]."<br>";
        }
    }

}

$student = new Student();
$student->id =1;
$student->name = 'Mahadi Hasan Al Amin';
$student->dob = '25.01.1997';
$student->showInfo();
echo "<br>";
$student->addCourses('java');
$student->addCourses('Webtech');
$student->showAllCourses();

?>