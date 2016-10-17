<?php

class Table {
    private $zebra;
    private $tableId;
    private $tableClass;
    private $headerId;
    private $headerClass;
    private $bodyId;
    private $bodyClass;
    private $footerId;
    private $footerClass;
    private $zebraClass;
    private $tableWidth;
    private $columnsWidth;

   
    public function __construct($zebra=null, $id=null, $class=null) {
        if ($id != null)
            $this->tableId = "id=\"$id\"";
        if ($class != null)
            $this->tableClass = "class=\"$class\"";
        if ($zebra != null)
            $this->zebra = true;
        else
            $this->zebra = false;
    }

 
    public function setZebra($zebra) {
        $this->zebra = $zebra;
    }

    
    public function setTableWidth($string) {
        $this->tableWidth = "style=\"width:$string\"";
    }

    
    public function setColumnsWidth($array) {        
        foreach ($array as $elem) {
            if ($elem != "")
                $this->columnsWidth[] = "style=\"width:$elem\"";
            else
                $this->columnsWidth[] = "";
        }
    }

    
    public function setTableClass($class) {
        $this->tableClass = "class=\"$class\"";
    }

    
    public function setTableId($id) {
        $this->tableId = "id=\"$id\"";
    }

    
    public function setHeaderClass($class) {
        $this->headerClass = "class=\"$class\"";
    }

    
    public function setHeaderId($id) {
        $this->headerId = "id=\"$id\"";
    }

    
    public function setBodyClass($class) {
        $this->bodyClass = "class=\"$class\"";
    }

    
    public function setBodyId($id) {
        $this->bodyId = "id=\"$id\"";
    }


    public function setFooterClass($class) {
        $this->footerClass = "class=\"$class\"";
    }

    
    public function setFooterId($id) {
        $this->footerId = "id=\"$id\"";
    }


    public function showTable($headers, $data) {
        $count = 0;
        $table = "<table $this->tableWidth $this->tableId $this->tableClass>";

        //HEADER
        $table .= "<thead $this->headerId $this->headerClass><tr>";
        foreach($headers as $h) {
            $style = $this->columnsWidth[$count];
            $table .= "<td $style>$h</td>";
            $count++;
        }
        $table .= "</tr></thead>";

        //FOOTER
        $table .= "<tfoot $this->footerId $this->footerClass><tr>";
        foreach($headers as $h)
            $table .= "<td></td>";
        $table .= "</tr></tfoot><tbody $this->bodyId $this->bodyClass>";

        //BODY
        $count = 0;
        foreach ($data as $row) {
            if ($this->zebra) {
                $count++;
                if ($count%2 == 1)
                    $this->zebraClass = "class=\"zebraOn\"";
                else
                    $this->zebraClass = "class=\"zebraOff\"";
            }

            $table .= "<tr $this->zebraClass>";
            foreach ($row as $col)
                $table .= "<td>$col</td>";
            $table .= "</tr>";
        }        

        $table .= "</tbody></table>";

        echo $table;
    }
}

?>
