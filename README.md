"#php-webservice"

1.先使用SoapDiscovery.class.php的第三方类库生成wsdl文件（没有wsdl也可以使用webservice但是无法跨域）；   

-----运行create_wsdl.php就可以生成wsdl文件  

2.要将Service.php后面加上处理webservice服务的代码  

3.用client.php链接webservice  



----------注意：放到服务器上的时候注意大小写和空格，因为windows大小写不敏感，linux大小写敏感---------  

两种方式访问webserice ----------  

1.通过生成的wsdl文件----exp ：http://www.xxxxx.com/test/Service.wsdl  

2.通过wsdl文件最后的location地址访问-------exp http://www.xxxxx.com/test/Service.php?wsdl  

