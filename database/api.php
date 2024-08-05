<?php
// echo "<pre>";

class Database_operation{
    public $dbcon;
    public $table;
    function __construct($con,$table){
          $this->dbcon=$con;  
          $this->table=$table;
          
    }
    function read(){
        $table= $this->table;
        $qry=$this->dbcon->prepare("select * from $table");
        $qry->execute();
        $res=$qry->fetchAll();
        if($qry->execute()){
            // print_r($res);
            return $res;
        }
        else{
            echo "read data error";
        }
    }
    function getData_like($col,$key){
        $table= $this->table;
        $qry=$this->dbcon->prepare("select * from $table where $col like '$key%'");
        echo "select * from $table where $col like '$key%'";
        // die;
        $qry->execute();
        $res=$qry->fetchAll();
        if($qry->execute()){
            print_r($res);
            return $res;
        }
        else{
            echo "read data error";
        }
    }

    function searchData($key,$val){

        $table=$this->table;
        $schQry=$this->dbcon->prepare("select * from $table where $key='$val'");
        
        $schQry->execute();
        $res=$schQry->fetch();
        if($schQry->execute()){
            // print_r($res);
            return $res;
        }
        else{
            echo "read data error";
        }
    }
    function findData($key,$key2,$val,$val2){
        $table=$this->table;
        $schQry=$this->dbcon->prepare("select * from $table where $key='$val' and $key2='$val2'");
        $schQry->execute();
        $res=$schQry->fetch();
        if($schQry->execute()){
            // print_r($res);
            return $res;
        }
        else{
            echo "read data error";
        }
    }

    function insert_allVoter($request){
           $table=$this->table;
           $party_id=$request['party_id'];
           $party_name=$request['party_name'];
           $user_id=$request['user_id'];
           $user_name=$request['user_name'];
           $user_mobile=$request['user_mobile']; 
           $date=$request['date'];
           $time=$request['time']; 

           $insQry=$qry=$this->dbcon->prepare("insert into $table(party_id,party_name,user_id,user_name,user_mobile,date,time) values( $party_id,'$party_name',$user_id,'$user_name',$user_mobile,'$date','$time')");
       
           if($insQry->execute()){
               return true;
               
           }
           else{
               return false;
           }
           
    }

    function insert($request){
        $table=$this->table;
        $name=$request['name'];
        $mobile=$request['mobile'];
        $pass=$request['password'];
        $address=$request['address'];
        $pimg=$request['pimg'];
        $dob=$request['dob'];
        $insQry=$qry=$this->dbcon->prepare("insert into $table(name,mobile,password,address,pimg,dob) values('$name',$mobile,'$pass','$address','$pimg','$dob')");
       
        if($insQry->execute()){
            echo 'successfull submit data';
            
        }
        else{
            echo "read data error";
        }
    }

    function deleteData($key,$val){
        $table=$this->table;
        $qry="delete from $table where $key=$val";
        $delQry=$this->dbcon->prepare($qry);
        if($delQry->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function updateData($col,$key,$val,$newVal){
        $table=$this->table;
        echo "////////////////////////////<br>";
        echo $col."<br>",$key."<br>",$val ."<br>",$newVal;
        echo "<br>////////////////////////////";
        
        $upQry=$this->dbcon->prepare("update $table set $col=$newVal where $key=$val") or die('something error in update');
            // echo "update $table set $col=$newVal where $key=$val";
        if($upQry->execute()){
          return true;
        }
        else{
        return false;
        }
    }

    function update_candidate($arr,$ckey,$cvalue){
        
        print_r($arr);
        $name=$arr['name'];
        $mobile=$arr['mobile'];
        $party_name=$arr['party_name'];
        $dob=$arr['dob'];
        $pimg=$arr['pimg'];
        $party_img=$arr['party_img'];
        $menifesto=$arr['menifesto'];

        $qry="update candidate set name='$name',mobile=$mobile,party_name='$party_name',dob='$dob',pimg='$pimg',party_img='$party_img',menifesto='$menifesto' where $ckey=$cvalue";
       echo $qry; 
  
      
          $respQry=$this->dbcon->prepare($qry);
  
           if($respQry->execute()){
              return true;
           }
          else{
              echo "<script>alert('update error');</script>";
              return false;
          }
          
  
          }
  
          function insert_candidate($arr){
        
            print_r($arr);
            $name=$arr['name'];
            $mobile=$arr['mobile'];
            $party_name=$arr['party_name'];
            $dob=$arr['dob'];
            $pimg=$arr['pimg'];
            $party_img=$arr['party_img'];
            $menifesto=$arr['menifesto'];
    
            $qry="insert into candidate(name,mobile,dob,pimg,party_name,party_img,menifesto) values('$name',$mobile,'$dob','$pimg','$party_name','$party_img','$menifesto')";
           echo $qry; 
      
                // die;
              $respQry=$this->dbcon->prepare($qry);
      
               if($respQry->execute()){
                  return true;
               }
              else{
                  echo "<script>alert('insert error');</script>";
                  return false;
              }
              
      
              }
      

    
    function update_voter($arr,$ckey,$cvalue){
        print_r($arr);
        $name=$arr['name'];
        $mobile=$arr['mobile'];
        $address=$arr['address'];
        $dob=$arr['dob'];
        $pimg=$arr['pimg'];
        $qry="update signup set name='$name',mobile=$mobile,address='$address',dob='$dob',pimg='$pimg' where $ckey=$cvalue";
    //  echo $qry; 

    // die;
        $respQry=$this->dbcon->prepare($qry);

         if($respQry->execute()){
            return true;
         }
        else{
            echo "<script>alert('update error');</script>";
            return false;
        }
        

    }


    }

// function filt_data($arr){
    //     $ar2=array();
    //     echo "///////////////////////////////////<br>";
    //     foreach($arr as $key){
    //         if(gettype($key)=='string'){
    //             array_push($ar2,"$key");
    //             echo $key;
    //         }
    //     }
    //     return $ar2;
    //   }
