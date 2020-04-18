<?php
class User
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function SayHello()
    {
        echo "hello i'm" . " " . $this->firstName . " " . $this->lastName;
    }
}

$jc = new User("jc", "jc");
echo $jc->SayHello();
