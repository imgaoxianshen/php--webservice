<?php

class Service{
	// private $dbname="mysql";
	// private $host = "10.66.122.196";
	// private $dbName="yrshop_eyewear";
	// private $user = "db_vickyz";
	// private $pass="ad123123";
	
	// private $host = "localhost";
	// private $dbName="yunrui_shop";
	// private $user = "root";
	// private $pass="";

	// public function send_to($xml,$sign,$version){
	public function send_to(){
		// header("Content-type: text/html;charset=utf-8");	
		// if($version!='v1.0'){
		// 	return '<mo bersion="1.0.0"><head><body><response><responseItems><response><success>false</success><orderID></orderID><reson>版本错误</reson><resonDesc></resonDesc></response></responseItems></response></body></head>';
		// }

		// $sign_ecm = base64_encode( md5($xml."ml4321",true) );//自己生成的sign，之后还要和获得的sign进行比较
		// if($sign!=$sign_ecm){
		// 	return '<mo bersion="1.0.0"><head><body><response><responseItems><response><success>false</success><orderID></orderID><reson>标签错误</reson><resonDesc></resonDesc></response></responseItems></response></body></head>';
		// }
		// $postObj = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
		// $jsonStr = json_encode($postObj);
		// $jsonArray = json_decode($jsonStr,true);
		// $data = $jsonArray['body']['list'];

		// $responsexml = '<mo version="1.0.0"><head><body><responses><responseItems>';

		// $dsn=$this->dbname.":host=".$this->host.";dbname=".$this->dbName;
		// $pdo = new PDO($dsn,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
		
		// foreach($data as $d){
		// 	//获取快递数据，之后就是修改数据库
		// 	// var_dump($d);
		// 	// exit;
		// try{

		// 	//先查订单表
		// 	// $orderObj = new IModel("order");
		// 	$order = $pdo->query("select * from yrshop_order where order_no = '".trim($d['businessNo'])."'")->fetchAll(PDO::FETCH_ASSOC);
			
		// 	// var_dump($order);
		// 	// exit;
		// 	// print_r($d);

		// 	if(empty($order)||count($order)>1){
		// 		$err =  '订单不存在或者有重复订单';
		// 		$responsexml .='<response><success>false</success><orderID>'.$d['businessNo'].'</orderID><reson>'.$err.'</reson><resonDesc></resonDesc></response>';
		// 		continue;
		// 	}

		// 	$paramArray=array(
		// 		'order_id'=>$order[0]['id'],
		// 		'user_id'=>0,
		// 		'name'=>$order[0]['accept_name'],
		// 		'postcode'=>$order[0]['postcode'],
		// 		'telphone'=>$order[0]['telphone'],
		// 		'mobile'=>$order[0]['mobile'],
		// 		'freight'=>0,
		// 		'delivery_code'=>$d['carriageNo'],
		// 		'delivery_type'=>1,
		// 		'note'=>"快递公司编码：".$d['logisCompanyCode'],
		// 		'time'=>$d['carriageDate'],
		// 		'real_freight'=>0,
		// 		'freight_name'=>$d['logisCompanyName'],
		// 		'admin_id'=>0,
		// 		'seller_id'=>0,
		// 	);
		// 	// var_dump($paramArray);
			
		// 	foreach($paramArray as &$p){
		// 		$p="'".$p."'";
		// 	}
		// 	// echo implode(',',$paramArray);
		// 	// var_dump($paramArray);
		// 	// exit;

		// 	// $delivery_docObj = new IModel('delivery_doc');
		// 	$delivery_docObj =$pdo->query("select * from yrshop_delivery_doc where delivery_code = ".$d['carriageNo']." or order_id = ".$order[0]['id'])->fetchAll(PDO::FETCH_ASSOC);
			


		// 	if(!empty($delivery_docObj)){
		// 		$err = '已经完成发货操作过';
		// 		$responsexml .='<response><success>false</success><orderID>'.$d['businessNo'].'</orderID><reson>'.$err.'</reson><resonDesc></resonDesc></response>';
		// 		continue;
		// 	}

		// 	// echo 123;
		// 	// exit;

		// 	// $delivery_docObj ->setData($paramArray);
		// 	// $deliveryId = $delivery_docObj ->add();//获取发货单id

		// 	$res = $pdo->exec("insert into yrshop_delivery_doc(order_id,user_id,name,postcode,telphone,mobile,freight,delivery_code,delivery_type,note,time,real_freight,freight_name,admin_id,seller_id) values(".implode(',',$paramArray).")");
		// 	// echo $res;
		// 	$deliveryId =  $pdo->lastInsertId();//获取发货单id
		// 	// exit;
		// 	if(empty($deliveryId)||empty($res)){
		// 		$err = '生成发货单失败';
		// 		$responsexml .='<response><success>false</success><orderID>'.$d['businessNo'].'</orderID><reson>'.$err.'</reson><resonDesc></resonDesc></response>';
		// 		continue;
		// 	}

		// 	//更新发货状态
		// 	// $orderGoodsObj = new IModel("order_goods");
		// 	// $orderGoodsObj ->setData(array("is_send"=>1,"delivery_id"=>$deliveryId));
		// 	// $ordergoodsId = $orderGoodsObj ->update('order_id = '.$order[0]['id']);
		// 	$res = $pdo->exec("update yrshop_order_goods set is_send=1,delivery_id=".$deliveryId);


		// 	if(empty($res)){
		// 		$err = '更新发货状态失败';
		// 		$responsexml .='<response><success>false</success><orderID>'.$d['businessNo'].'</orderID><reson>'.$err.'</reson><resonDesc></resonDesc></response>';
		// 		continue;
		// 	}

		// 	//生成订单日志
		// 	// $tb_order_log = new IModel("order_log");
		// 	// $tb_order_log ->setData(array("order_id"=>$order[0]['id'],'user'=>'系统自动','action'=>'发货','addtime'=>date('Y-m-d H:i:s'),'result'=>'成功','note'=>'订单【'.$d['businessNo'].'】由ECM发货'));

		// 	// $tb_order_log ->add();

		// 	$res = $pdo->exec("insert into yrshop_order_log set order_id = ".$order[0]['id']." ,user='系统自动',action='发货',addtime=".date('Y-m-d H:i:s')." ,result='成功',note = '订单【".$d['businessNo']."】由ECM发货'");
			

		// 	//返回成功
		// 	$responsexml .='<response><success>true</success><orderID>'.$d['businessNo'].'</orderID><reson></reson><resonDesc></resonDesc></response>';
		// 		continue;

		// 	//循环内部捕捉异常
		// 	}catch(Exception $e){
		// 		$responsexml .='<response><success>false</success><orderID>'.$d['businessNo'].'</orderID><reson>'.$e->getMessage().'</reson><resonDesc></resonDesc></response>';
		// 	}
			
		// }
		// $responsexml .='</responseItems></responses></body></head>';


		// return $responsexml;
		// return $sign_ecm;
		return 123123;
	}


}

$service = new Service();
echo $service->send_to();


// $server = new SoapServer('service.wsdl',array());
// $server ->setClass("Service");//注册service类的所有方法
// $server->handle();//处理请求

