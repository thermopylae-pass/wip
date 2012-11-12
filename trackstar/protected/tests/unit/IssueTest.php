<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IssueTest
 *
 * @author andrewmartinez
 */
class IssueTest extends WebTestCase {
    //put your code here
    public $fixtures = array('projects'=>'Project',
                            'issues'=>'Issue',);
    
    public function testGetTypes(){
        $options = Issue::model()->typeOptions;
        $this->assertTrue(is_array($options));
        $this->assertTrue( 3 == count($options));
        
        $this->assertTrue( in_array('Bug', $options));
        $this->assertTrue( in_array('Feature', $options));
        $this->assertTrue( in_array('Task', $options));
    }
    
    public function testGetStatus(){
        $status = Issue::model()->statusOptions;
        $this->assertTrue(is_array($status));
        
        $this->assertTrue(in_array('Not yet started', $status));
        $this->assertTrue(in_array('Started', $status));
        $this->assertTrue(in_array('Finished', $status));
    }
    
    public function testGetStatusText()
    {
        $this->assertTrue('Started' == $this->issues('issueBug')->getStatusText());
    }
    public function testGetTypeText()
    {
        $this->assertTrue('Bug' == $this->issues('issueBug')->getTypeText());
    }
    
}

?>
