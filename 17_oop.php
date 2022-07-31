<?php
    /*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
    OOP consists of classes that can hold "properties" and "methods". Objects can be created 
    from classes (objects are instances of classes)
    */

    class User {
        // properties are attributes that belong to a class
        
        // Access Modifiers: public, private, protected:
        // public: can be accessed from anywhere
        // private: can only be accessed from inside the class
        // protected: can only be accessed from inside the class and by inheriting classes

        public $name;
        public $email;
        public $password;

        // a constructor is a method that runs when an object is created
        public function __construct($name, $email, $password) {   
            // echo 'constructor ran';
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Method is a function that belongs to a class
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }

    // Instantiate a User object
    $user1 = new User('Alex', 'alex@gmail.com', 'password');
    // $user1->set_name('Alexei');

    // $user2 = new User();
    // $user2->set_name('John');
    // to access or assign attributes from an object use thin arrow.
    // object->property_of_that_object = new_value
    // $user1->name = 'Alex';

    var_dump($user1);
    echo $user1->get_name();

    // inheritance
    class Employee extends User {

        // public $title;

        public function __construct($name, $email, $password, $title) {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function get_title() {
            return $this->title;
        }
    }

    $employee1 = new Employee('Sara', 'sara@gmail.com', '4345', 'manager');
    echo $employee1->get_title();
    ?>