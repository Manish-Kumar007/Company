<?php 
    class DatabaseConnection{
        protected $Host ="localhost";
        protected $ServerName='root';
        protected $ServerPass='root@123';
        protected $DatabaseName='wire_and_nail';
        public $con = null;
        

        public function __construct(){
            
            $this->con = mysqli_connect($this->Host,$this->ServerName,$this->ServerPass,$this->DatabaseName);
            // print_r($this->con);
            // print_r("Host".$this->Host);
            if (mysqli_connect_error($this->con))
            {
                echo "fail".mysqli_connect_error($this->con);
            }
            echo "Succeeded";
        }

        


    }
    $db=new DatabaseConnection();
?>
