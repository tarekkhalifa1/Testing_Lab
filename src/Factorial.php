<?php 
class Factorial {
    public function factorial($n)
    {
        if (!is_int($n)) return NULL;
    
        if ($n ==0 || $n == 1) return 1;

        elseif ($n >1) return $n * $this->factorial($n-1);
        
        else return NULL;

    } // end function factorial

} // end factorial class