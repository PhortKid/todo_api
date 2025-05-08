<?php
//tumetumia try na catch kwa sababu ya ikitokea error tuweze ku handle
try {
  $conn=new mysqli('localhost','root','','todo_app');
    //echo  json_encode(['status'=>'success','message'=>'database connected successfuly']);
} catch(Exception) {
  echo  json_encode(['status'=>'error','message'=>'database not connected']);
}



