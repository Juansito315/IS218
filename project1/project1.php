<?php



echo "Qusetion No.10(Create 5 mini programs that demonstrate the use of 3 different design patterns )->ANSWER:";


class test { 
    public $fname; 
    public $lname ; 
    
    
    function __construct($fname,$lname) { 
        $this->fname=$fname;
        $this->lname=$lname; 
    }
   
    function printfname() { 
        echo $this->fname; 

    }
    function printlname() { 
        echo $this->lname; 
    }
    function changename($fname,$lname) { 
        echo "<br>";
        $this->fname=$fname;
        echo "<br>";
      $this->lname=$lname;
           echo "<br>";
    }
     function getnames() { 
        $this->printfname();
        $this->printlname(); 
    } 
}

echo "set names and make object <br>";
$test1 = new test("Stefan","Mischook");
$test1->getnames();
echo "<br>change names<br>";
$test1->changename("john","clark");
echo "<br>after changing name<br>";
$test1->getnames();

?>