<?php



echo "Design Patterns Project 1(Create 5 mini programs that demonstrate the use of 3 different design patterns )->ANSWER:";



echo 'Factory';

//One of the most commonly used design patterns is the factory pattern. In this pattern, a class simply creates the object you want to use. Consider the following example of the factory pattern:


class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"


Singleton

When designing web applications, it often makes sense conceptually and architecturally to allow access to one and only one instance of a particular class. The singleton pattern enables us to do this. 



class Singleton
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
}

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Singleton::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)








echo 'Strategy';

//With the strategy pattern you encapsulate specific families of algorithms allowing the client class responsible for instantiating a particular algorithm to have no knowledge of the actual implementation. There are several variations on the strategy pattern, the simplest of which is outlined below:


class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load();
    }
}

$client = new SomeClient();

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();

// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();




echo 'Model-View-Controller';

//The model-view-controller (MVC) pattern and its relatives HMVC and MVVM lets you break up code into logical objects that serve very specific purposes. Models serve as a data access layer where data is fetched and returned in formats usable throughout your application. Controllers handle the request, process the data returned from models and load views to send in the response. And views are display templates (markup, xml, etc) that are sent in the response to the web browser.

?>