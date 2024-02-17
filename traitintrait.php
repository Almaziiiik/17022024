<?php
trait SkillTrait{
    public function Skill($Skill){
        echo "pushing $Skill";
}}
trait TrainingTrait{
    public function Training($Train){
        echo "training $Train";
}}

trait ProfessionalDevelopmentTrait{
    use SkillTrait ,TrainingTrait;
}
class Developer {
    use ProfessionalDevelopmentTrait;

    public function sleep() {
        echo "отдых после обучения";
    }

    public function developSoftware() {
        echo " : useTraining($Train)";
    }
}

$math = new Developer;
$math->developSoftware("Матеша");
?>