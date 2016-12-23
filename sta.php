<?php
/**
 * Created by PhpStorm.
 * User: jieaido
 * Date: 2016/12/23
 * Time: 16:38
 */
class  User{
    public static $CountNum;
    public $selfNum;

    /**
     * User constructor.
     */
    public function __construct($i)
    {
        self::$CountNum++;
        $this->selfNum=$i;
    }

}
for($i=1;$i<10;$i++){

    $t1=new User($i);
    $t2=new User($i+1);

}

echo User::$CountNum;
var_dump($t1->selfNum);