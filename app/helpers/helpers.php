<?php

 function is_active($routename){
     
 if( request()->segment(2)!=null)
    {
     echo   request()->segment(2)==$routename?'active':'';

    }else{

     echo  $routename=='admin'?'active':'';

    }
  
    
}