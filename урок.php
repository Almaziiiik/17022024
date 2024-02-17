<?php
	trait OrganizingTrait  {
        public function organize($mail) {
            echo "сообщение о распределении задач: $mail \n";
        }
    }
     
    trait CommunicationTrait {
        public function comunicate($com) {
            echo "начало встречи: $com \n";
    }
}
    class Manager {
        use OrganizingTrait, CommunicationTrait ;
    }

    $Vasya=new Manager;
    $Vasya->organize("починить трубы");
    $Mario=new Manager;
    $Mario->comunicate("спасать принцесс");
?>  