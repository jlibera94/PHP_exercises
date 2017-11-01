<?php
  function findSummation($aNum){
    
         if( !is_int($aNum) || $aNum < 0 )
          {
             return false;
          }
         return $aNum*($aNum + 1)/2;
   }

   function uppercaseFirstandLast($x){
       return strrev(ucwords(strrev(ucwords(strtolower($x)))));
       
   }

  function findAverage_and_Median(){
	 
	function median($arr){
    if($arr){
        $count = count($arr);
        sort($arr);
        $mid = floor(($count-1)/2);
        return ($arr[$mid]+$arr[$mid+1-$count%2])/2;
        }
    return 0;
    }
    function mean($arr){
    return ($arr) ? array_sum($arr)/count($arr) : 0;
    }
	
    $test = array(
                array(5,2,1,3,4),
                array(5,4,2,3,1,6),
                array(32,23,54,45,267),
                array(12,1,5,3,2),
                array(2,4,5,8,9),
                ); 
	
    foreach($test as $arr){
    echo 'Mean: '.mean($arr)."<br>";
    echo 'Median: '.median($arr)."<br><br>";
    }
 }

       
  function find4Digits($str){
       $arr = explode(" ",$str);
       $i=0;
       $st="";
       while($i<count($arr)){
           if(strlen($arr[$i])==4){
               $st=$arr[$i];
               break;
           }
           $i++;
       }
       if($i==count($arr)-1)
           return false;
       else
           return $st;
      
   }

?>
<!DOCTYPE HTML>
<html>
    <header>
        <title>Functions</title>
    </header>
    <body>
        <h1>findSummation</h1>
        <h4> <?php echo findSummation(3); ?></h4>
        
        <h1>uppercaseFirstandLast</h1>
        <h4> <?php echo uppercaseFirstandLast("steve"); ?></h4>
        <h4> <?php echo uppercaseFirstandLast("kyle"); ?></h4>
        <h4> <?php echo uppercaseFirstandLast("joe"); ?></h4>
        
        <h1>findAverage_and_Median</h1>
         <?php   findAverage_and_Median(); ?>
        
        <h1>find4Digits</h1>
        <h4> <?php echo find4Digits("45 1234 41234"); ?></h4>
        
    </body>
    
</html>