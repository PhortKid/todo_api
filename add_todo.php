<?php
    include 'connection.php';//kuivuta database connections 

    if(isset($_POST['name'])){  //kuangalia kama method iliyotumika ni POST request
        //apa chini tumevuta data kutoka kwa mtu aliyetuma
        $name=$_POST['name'];
        $date=$_POST['date'];
        $time=$_POST['time'];

        try{
            $sql="INSERT INTO  todos(`name`,`date`,`time`) VALUES('$name','$date','$time')";
            $query=mysqli_query($conn,$sql);//kuingiza data

                if($query){
                echo json_encode(['status'=>'success','message'=>'Data Inserted']);//kama data imeingia
                }else{
                    echo json_encode(['status'=>'error','message'=>'Data Not inserted']);//kama data haijaingia
                }

        }catch(Exception){
            echo json_encode(['status'=>'error','message'=>'Server Error']);//kumpa message kama data haijaingia na kuna error
        }
        
    }else{
        echo json_encode(['status'=>'error','message'=>'Use POST request']);//kama hajatumia method POST
    }



