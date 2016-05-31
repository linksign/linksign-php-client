# 运行环境要求
PHP 5.3.3 or higher [http://www.php.net/].

# 安装
##编译
You can install the bindings via Composer. Run the following command:
```
composer require linksign/linksign-php-client
```
To use the bindings, use Composer's autoload:
```
require_once(__DIR__ . '/vendor/autoload.php');
```
###手动安装

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the init.php file.
```
require_once('/path/to/linksign-php-client/autoload.php');
```
###依赖
This client has the following external dependencies:

* PHP Curl extension [http://www.php.net/manual/en/intro.curl.php]
* PHP JSON extension [http://php.net/manual/en/book.json.php]
* PHP ext-mbstring extension

###客户端数字证书配置
linksign-php-client/lib/Configuration.php指定PEM文件的路径：
```
	//私钥文件(PEM格式)路径
	protected $privateKeyFile = '';
	//证书文件(PEM格式)路径
	protected $certFile = '';
```
#使用
```
<?php
 
require_once dirname('linksign-php-client/autoload.php';

 

class SdkUnitTests extends \PHPUnit_Framework_TestCase
{
	 

	//签署文档
	public function testSignatureDocument()
    {
		echo "====================== testSignatureDocument() ================== ";

		$documentFileName = "/Docs/SignTest1.html";
		$documentName = "SignTest1";
		$fileExtension = "html";

		$api_instance = new Swagger\Client\Api\DocumentApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | 
		$document = new Swagger\Client\Model\Document();
		$document->setDocumentBase64(base64_encode(file_get_contents(__DIR__ . $documentFileName)));
		$document->setName($documentName);
		$document->setDocumentIndex("1");
		$document->setFileExtension($fileExtension);

		$body = new \Swagger\Client\Model\DocumentDefinition(); // \Swagger\Client\Model\DocumentDefinition | 
		$body->setDocuments(array($document));
 		try { 
			$result = $api_instance->createDocument($client_id, $body);
			$this->assertNotEmpty($body);
			print_r($result);
		} catch (Exception $e) {

 			if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
			{
				echo "Msg:" . $e->getResponseObject()->getErrMsg()."\n";
				echo "Code:" . $e->getResponseObject()->getErrCode()."\n";
			}
			echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), "\n";
		}
    }
    }
    
    ?>
```
#Demo
```
linksign-php-client/test/SdkUnitTests.php
```
#调试工具
注意：调试前，浏览器需要先导入客户端数字证书
* https://api.linksign.cn/v1/debug

# 详细的接口文档和技术支持,请联系我们
* https://www.linksign.cn
