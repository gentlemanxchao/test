<?php
// 本类由系统自动生成，仅供测试用途
header("Content-Type:text/html; charset=utf8");
class HomeAction extends Action {
    public function index(){
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    var_dump("hello");
    }
    public function test(){
    var_dump("home home test hello hello");
    }
    function dispach(){
    	$data=1;
    	if($data){
    		$this->assign('message','chenggong');
    		$this->success('新增成功','test','message');
//     		redirect(U('test'),5,'页面跳转中');
    	}
    }
    function  testsql(){
    	$user_info=D('public/UserInfo');
    	$data=$user_info->select();
    	var_dump($data);
    }
    function testsql2(){
//     	$MemEduinfo=M('MemEduinfo','ysx_','DB_CONFIG1');
        $MemEduinfo=M('MemEduinfo','ysx_','DB_CONFIG2');
    	$data=$MemEduinfo->select();
    	$sql=$MemEduinfo->getLastSql();
    	var_dump($sql);
    	var_dump($data);
    }
}