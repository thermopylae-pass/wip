<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBTest
 *
 * @author andrewmartinez
 */
class DBTest extends WebTestCase{
    //put your code here            
    public function testConnection(){
        $this->assertNotEquals(NULL, Yii::app()->db);
    }
}

?>
