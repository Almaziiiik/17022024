<?php
    trait ReportingTrait {
        public function generateReport($mail) {
            echo "отчет отправлен на  $mail";
    }
}


    class Analyst{
        use ReportingTrait{
            ReportingTrait::generateReport as private performHealthCheck;
        }   

        public function publicReport($mail) {
            $this->performHealthCheck($mail);
    }
    }

$analyst= new Analyst();
$analyst->publicReport("almazr836@gmail.com");



?>