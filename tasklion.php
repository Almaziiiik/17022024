<?php

trait TrainingTrait {
    abstract public function train($lesson);
}

class Teacher{
 
    use TrainingTrait;
    public function train($lesson) {  
        echo "Проведение учебного занятия: $lesson";
    }  
    public function prepareLesson($lesson) {
        $this->train($lesson);
}
}

$math = new Teacher;
$math->prepareLesson("Матеша");

?>