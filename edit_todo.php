<?php
    include 'connection.php';//kuivuta database connections 

    if(isset($_GET['todo_id'])){  //kuangalia kama method iliyotumika ni GET request
        //apa chini tumevuta data kutoka kwa mtu aliyetuma
        $todo_id=$_GET['todo_id'];
        $name=$_GET['name'];
        $date=$_GET['date'];
        $time=$_GET['time'];

        try{
            $sql="UPDATE `todos` SET `name`='$name' ,`date`='$date' , `time`='$time' WHERE `id`='$todo_id' ";
            $query=mysqli_query($conn,$sql);//kuingiza data

                if($query){
                echo json_encode(['status'=>'success','message'=>'Data Updated']);//kama data imeeditiwa
                }else{
                    echo json_encode(['status'=>'error','message'=>'Data Not Updated']);//kama data haijaeditiwa
                }

        }catch(Exception $e){

           echo json_encode(['status'=>'error','message'=>'Server Error']);//kumpa message kama data haijaeditiwa na kuna error
        }
        
    }else{
        echo json_encode(['status'=>'error','message'=>'Use GET request']);//kama hajatumia method GET
    }
