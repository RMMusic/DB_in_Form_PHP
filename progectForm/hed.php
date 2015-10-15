<?php
class First
{
    protected $_base = '1';
    protected $_mySqlConnect;

    public function setBase($outSetBase){
        $this->_base = $outSetBase;
    }

    public function getBase(){
        return $this->_base;
    }

    public function sqlConnect(){
        return $this->_mySqlConnect = mysqli_connect("localhost", "root", "", "progectFormdb");
    }

    public function mySqlClose(){
        mysqli_close($this->_mySqlConnect);
        $this->_mySqlConnect = null;
    }

    public function sqlQueryInsert($sqlQuery){
        $result = mysqli_query($this->_mySqlConnect, $sqlQuery);
        return $result;
    }

    public function sqlQuerySelect(){
        $result = mysqli_query($this->_mySqlConnect, 'SELECT * FROM names');
        $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
}

$a = new First;
$a->sqlConnect();
var_dump($a->sqlQuerySelect());
var_dump($a->sqlQuerySelect());
var_dump($a->sqlQuerySelect());
$a->mySqlClose();
//var_dump($b);
//echo $a->getBase();
//$a->setBase("yo");
//echo $a->getBase();

