<?php
    include 'connection.php';//kuivuta database connections 

    if(isset($_GET['todo_id'])){  //kuangalia kama method iliyotumika ni GET request
        //apa chini tumevuta data kutoka kwa mtu aliyetuma
        $todo_id=$_GET['todo_id'];//hii ni id ya todo ambayo inafutwa

        try{
            $sql="DELETE FROM `todos` WHERE `id`='$todo_id' ";
            $query=mysqli_query($conn,$sql);//kufuta  data

                if($query){
                echo json_encode(['status'=>'success','message'=>'Data Deleted']);//kama data imefutwa
                }else{
                    echo json_encode(['status'=>'error','message'=>'Data Not Deleted']);//kama data haijafutwa
                }

        }catch(Exception $e){
            echo json_encode(['status'=>'error','message'=>'Server Error']);//kumpa message kama data haijafutwa na kuna error
        }
        
    }else{
        echo json_encode(['status'=>'error','message'=>'Use GET request']);//kama hajatumia method GET
    }