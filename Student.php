<?php

    class Student{
        private int $id;
        private string $firstName;
        private string $lastName;
        private string $email;
        private array $grades;
        
        // constructeur de la classe student
        public function __construct(string $firstName, string $lastName, $email)
        {
            $this->id = -1;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->grades = [];


        }
        
        
                // get() et set() de l'attribut firstname

        public function setfirstName( string $firstName):void
        {
            $this->firstName = $firstName;
        }
        
        public function getfirstName():string
        {
            return $this->firstName;
        }
        
                // get() et set() de l'attribut lastname

        
         public function setlastName( string $lastName):void
        {
            $this->firstName = $lastName;
        }
        
        public function getlastName():string
        {
            return $this->lastName;
        }
        
        
        // get() et set() de l'attribut email
                
         public function setemail( string $email):void
        {
            $this->email = $email;
        }
        
        public function getemail():string
        {
            return $this->email;
        }
        
                // get() et set() de l'attribut grades

         public function setgrades( array $grades):void
        {
            $this->grades = $grades;
        }
        
        public function getgrades()
        {
            return $this->grades;
        }
        
        
        // methode getFullName
        public function getFullName():string
        {
            return $this->fullName; 
        }
        
        
        public function addGrade(int $nombre)
        {
            $this->grades[]=$nombre;
            return $this->grades;
        }
        
        // fonction removeGrade pour retirer un elément de l'attribut de type tableau
        public function removeGrade(int $nombre)
        {
            if(count($this->grades)>0){
                
                $key = array_search($nombre,$this->grades);
                if ($key !== false){
                array_splice($this->grades, $key,1);
            }
                
            }
            

        
    }
}


    $student = new Student("aaaaa","bbbbb","abc@gmail.com");

     $student->addGrade(5);
     
     $student->removeGrade(5);
     
     
      print_r($student);

?>