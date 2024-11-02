<?php



class Account
{


    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        // echo $this->public . "<br>";
        // echo $this->protected . "<br>";
        // echo $this->private . "<br>";
    }



    public string $name;
    public float $balance;
    public function __construct($newName, $newBalance)
    {

        $this->name = $newName;
        $this->balance = $newBalance;
    }
}
