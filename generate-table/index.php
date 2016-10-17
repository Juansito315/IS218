<html>
   <head>
      
        <link rel="stylesheet" href="index.css" type="text/css" /> <!-- rel means it is required -->
        <title>Table generator</title>
    </head>
    <body>
        <?php
            require_once 'Table.class.php'; //calling PHP class

            //Set table's headers
            $headers = array("Company","URL", "Clickeable-Link");
            //Set table's  data
            $data[0] = array('Google', 'www.google.com','<a href="https://www.google.com/">Click here</a>');
			$data[2] = array('NJIT', 'www.njit.edu','<a href="https://www.njit.edu/">Click here</a>');
			$data[3] = array('Amazon', 'www.amazon.com','<a href="https://www.amazon.com/">Click here</a>');
        
          

            echo "<h1 style=\"text-align: center\">Table Example IS218</h1>";

            /**
             * Create an instance of Table class
             * @param <Boolean> true: zebra rows on, false: zebra rows off
             * [@param] <String> table id
             * [@param] <String> table class
             */
            $t = new Table(true, "tableID");
            
            /**
             * Set a class or id for thead, tbody and tfoot of table
             * @param <String> class name
             * [@param] <String> id name
             */
             $t->setHeaderClass("headClass");
             $t->setBodyClass("bodyClass");
             $t->setFooterClass("footClass");

            /**
             * Specify a width for every columns
             */
            
			$t->setColumnsWidth(array("20px", "150px", "150px", "80px"));

            /**
             * Show the table
             * @param <Array> headers
             * @param <Array> data
             */
             $t->showTable($headers, $data);
        ?>
    </body>
</html>
