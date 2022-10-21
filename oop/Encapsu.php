<?php

class Encapsu{
    public $name="HMA";
    protected $age=23;
    private $love="HAHAHA";

    public function share(){
        return $this->name." is a programmer";
    }
    protected function learn(){
        return $this->name." is a program";
    }
    private function job(){
        return $this->name." is to be programmer";
    }

    /**
     * @return string
     */
    public function getLove()
    {
        return $this->love;
    }

    /**
     * @param string $love
     */
    public function setLove($love)
    {
        $this->love = $love;
    }

}
$obj=new Access();
echo $obj->setLove("ck");
echo $obj->getLove();
