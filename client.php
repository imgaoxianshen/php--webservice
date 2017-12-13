<?php

ini_set('soap.wsdl_cache_enabled',"0");//关闭wsdl缓存

libxml_disable_entity_loader(false);
// $soap = new SoapClient('http://www.yunruishop.com/api/Service.wsdl');

$soap = new SoapClient('http://eyewear.yunruikj.com/api/Service.wsdl');
try {
$ret=$soap->send_to('<?xml version="1.0" encoding="UTF-8" ?><mo version="1.0.0"><head><businessType>UPDATE_ORDER_CARRIAGE</businessType></head><body><list><businessNo>17120612124442030</businessNo><logisCompanyName>u4e0au6d77u5927u8a89u56fdu9645u7269u6d41u6709u9650u516cu53f8</logisCompanyName><logisCompanyCode>3122480063</logisCompanyCode><carriageNo>120299177334</carriageNo><carriageDate>2017-12-06 18:25:24</carriageDate></list></body></mo>',"+tRiSYFtr+1C54nx76ZmWZw==","v1.0");
print_r($ret);

}catch (SoapFault $ex) {
	// var_dump ( $soap->__getFunctions () );
    print $ex->getMessage();
    print $ex->getTraceAsString();
    echo $soap->__getLastResponse();
    echo $soap->__getLastResponseHeaders();
    die();
}
?>
