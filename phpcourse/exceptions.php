<?php
    function divide($a, $b){
        if($b == 0){
            throw new Exception("Cannot divide by zero");
        }
        echo "ABC";
        return $a/$b;
    }
    function advDivide($a, $b){
        $div = 0;
        try {
            $div = $a/$b;
            return $div;
        } catch (Throwable $e) {
            echo "Have error:".$e->getMessage()."\n";
        }
        finally{
            echo "Finish advDivide";
        }
    }
    echo advDivide(4,0);
?>