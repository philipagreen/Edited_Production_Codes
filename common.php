<?php

class commonFunctions
{
    private $private_var;
    public $pub_var;
    
    public function boldName($name)
    {
        $bold_name = "<b>$name</b>";
        return $bold_name;
    }
    
    public function colorName($name, $color)
    {
        switch ($color)
        {
            case 'RED':
                $colored_name = "<p style='color:red'>$name</p>";
                break;
            case 'BLUE':
                $colored_name = "<p style='color:blue'>$name</p>";
                break;
            default:
                $colored_name = "<p style='color:yellow'>$name</p>";
                break;
        }
        
        return $colored_name;
    }
    
    function setPrivateVar($string)
    {
        $this->private_var = $string;
    }
    
    function getPrivateVar()
    {
        return $this->private_var;
    }
    
    function printRuler()
    {
        echo "<hr>";
    }
    
    function printFormattedArray($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}

?>
