<?php
namespace app\database\config; 
use mysqli;

class connection
{
    private $hostName ='localhost';
    private $userName = 'root';
    private $password = '';
    private $database ='nti_ecommerce';
    protected $con;
    public function __construct() 
    {
        $this ->con =new mysqli($this ->hostName , $this ->userName , $this ->password ,$this ->database) ;

                            //code for test

                        // if($this ->con->connect_error)
                        // {
                        //     die ("connection failed :" . $this ->con->connect_error);
                        // }else{echo "connected successfuly" ;}
                       
                        //end test
    }
     public function runDQL($query) 
     {
        $Results= $this->con->query($query);
            return $Results;
     }
     public function runDML($query) :bool
     {
        $result =$this->con->query($query);
             if($result){
                 return true;
            }else{
                return false;
            }
     }
    public function __destruct()
    {
        $this->con->close();
    }
}
new connection;
?>