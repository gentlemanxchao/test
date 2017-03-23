<?php
// 本类由系统自动生成，仅供测试用途
class TestAction extends Action {
    public function index(){
    	$credit=10;
    	$hello='hello';
    	;
    	$extra=array('credit'=>$credit,'hello'=>$hello);
	var_dump($extra); 
	var_dump($hello);
	
    }
    public function test(){
    	var_dump("index xiamian test");
    	R('Enter/Enter/test');
    }
    function hello($test=array()){
    	
    }
}