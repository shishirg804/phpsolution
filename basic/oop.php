<?php
  // If public can be accesed from anywhere, if private can be accesed inside this class and if protected can be accesed inside this class and all those which extend it
    class Person{
      // Its better to use private and then create a function to manipulate those properties
      //  public $name;
       private $name;
        // public $email;
       private $email;

      //  Static methods, punlic can be used even without creating a an instance of that class.Like Person::$ageLimit
      public static $ageLimit=40;

      // making a static private variable adn a public static function
      private static $ageLimit2=50;
    
      // constructor
       // If there are many variables this can be tirirng so we can create a constructor for this
       public function __construct($name,$email)
       {
        //  echo 'Person Created!';
         $this->name=$name;
         $this->email=$email;
        //  gives class name
         echo __CLASS__.' created<br>';

       }
      //  destructor
       public function __destruct()
       {
    
        //  gives class name
         echo __CLASS__.' destroyed<br>';

       }
      
      //  geters and setters
      public function setName($name){
         $this->name=$name;
      }
      public function getName(){
        return $this->name.'<br>';
      }
       public function setEmail($email){
         $this->email=$email;
      }
      public function getEmail(){
        return $this->email.'<br>';
      }
      // using a static function, we cannot use this to access static variables in class instead we use use self::$variablename
      public static function getAgeLimit(){
        return self::$ageLimit2.'<br>';
      }
    }
  
  // $person1=new Person('Varun Ramnani','v@gmail.com');

  // // $person1->name='Varun Ramnani';

  // // echo $person1->name;
  // // $person1->setName('Varun Ramnani');
  // echo $person1->getName();
  // // $person1->setEmail('v@gmail.com');
  // echo $person1->getEmail();

  class Customer extends Person{
    private $balance;

      public function __construct($name,$email,$balance)
      {
         parent::__construct($name,$email,$balance);
         $this->balance=$balance;
         echo "A new customer created<br>";

      }
      public function setBalance($balance){
         $this->balance=$balance;
      }
      public function getBalance(){
        return $this->balance.'<br>';
      }
  }

  // $customer1=new Customer('Varun Ramnani','v@gmail.com',400);
  // echo $customer1->getBalance();

  echo Person::$ageLimit.'<br/>';

    echo Person::getAgeLimit();

  
?>