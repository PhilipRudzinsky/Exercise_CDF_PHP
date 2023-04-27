<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $tab = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"]);


    echo "Witaj ",$name, " na mojej stronie <br>";


        var_dump($tab);
        echo "<br>";
        $n=0;
        for($i=0;$i<sizeof($tab);$i++)
        {
            if(is_numeric($tab[$i])&&$tab[$i]!=0)
            {
                (double)$tab[$i];
                $n++;
            }

        }
        echo array_sum($tab);
        echo "<br>";
        echo array_sum($tab)/$n;

}
