<?php
/**
 * Class mySQL Singleton
 */
class mySQL{
    private static $instance=null;
    private  $connection;
    private function __construct(){
    }

    /**
     * @param $host
     * @param $user
     * @param $pass
     * @param $db
     */
    public function connect($host = 'localhost' ,$user='Gecata',$pass='1234',$db='books'){
        $this->connection = mysqli_connect($host,$user,$pass,$db);
        mysqli_set_charset($this->connection,'utf8');
    }

    /**
     * @return mySQL connection
     */
    public function getConnection(){
       return $this->connection;
    }

    /**
     * @return mySQL|null
     */
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new mySQL();
        }
        return self::$instance;
    }
}
