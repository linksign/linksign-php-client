<?php
/**
 * User: Lam
 * Date: 5/16/16
 * Time: 10:58 AM
 */
require_once dirname(__FILE__). '/../autoload.php';

 

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
	//获取文档
	public function testGetDocument()
    {
		echo "====================== testGetDocument() ================== ";

		$api_instance = new Swagger\Client\Api\DocumentApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | 
		$document_id = "732035058487001088"; // string | 
 		try { 
			$result = $api_instance->getDocument($client_id, $document_id);//保存成文件
			$this->assertNotEmpty($result);
			print_r($result);
		} catch (Exception $e) {
 			if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
			{
				echo "Msg:". $e->getResponseObject()->getErrMsg()."\n";
				echo "Code:". $e->getResponseObject()->getErrCode()."\n";
			}
			echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), "\n";
		}
    }

	//创建签名图片
	public function testCreateSignature()
    {
		echo "====================== testCreateSignature() ================== ";

		$redirectUri = "https://www.baidu.com";
		$api_instance = new Swagger\Client\Api\SignatureApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | \u5BA2\u6237\u7F16\u53F7
		//个人基本信息
		$personal = new Swagger\Client\Model\Personal();
		$personal->setPersonName("张三");
		
		$body = new \Swagger\Client\Model\Signature(); // \Swagger\Client\Model\Signature | 
		$body->setRedirectUri($redirectUri);//应用重定向URI，领签采集后签名后，将用户重定向到此URI
		//$body->setRelateSealId("");

		$body->setPersonal($personal);


		try { 
				$result = $api_instance->createSignature($client_id, $body);
				$this->assertNotEmpty($body);
				print_r($result);
			} catch (Exception $e) {
				if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
				{
					echo "Msg:". $e->getResponseObject()->getErrMsg()."\n";
					echo "Code:". $e->getResponseObject()->getErrCode()."\n";
				}
				echo 'Exception when calling DocumentApi->createSignature: ', $e->getMessage(), "\n";
			}
	}

	//获取签名图片
	public function testGetSignature()
    {
		echo "====================== testGetSignature() ================== ";

		$api_instance = new Swagger\Client\Api\SignatureApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | \u5E94\u7528\u7CFB\u7EDF\u7F16\u53F7
		$signature_id = "732041618911133696"; // string | \u7B7E\u540D\u7F16\u53F7

		try { 
			$result = $api_instance->getSignature($client_id, $signature_id);
				$this->assertNotEmpty($result);
				print_r($result);
			} catch (Exception $e) {
				if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
				{
					echo "\nMsg:". $e->getResponseObject()->getErrMsg()."\n";
					echo "Code:". $e->getResponseObject()->getErrCode()."\n";
				}
				echo 'Exception when calling DocumentApi->getSignature: ', $e->getMessage(), "\n";
			}
	}

	//创建印章图片
	public function testCreateSeal()
    {
		echo "====================== testCreateSeal() ================== ";
		$redirectUri = "https://www.baidu.com";
		$api_instance = new Swagger\Client\Api\SealApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | 
				//公司基本信息
		$company = new Swagger\Client\Model\Company();
		$company->setOrgName("深圳小信科技有限公司");


		$body = new \Swagger\Client\Model\Seal(); // \Swagger\Client\Model\Seal | 
		$body->setRedirectUri($redirectUri);//应用重定向URI，领签采集后签名后，将用户重定向到此URI
		//$body->setRelateSignatureId("");
		$body->setCompany($company);
		try { 
			$result = $api_instance->createSeal($client_id, $body);
				$this->assertNotEmpty($body);
				print_r($result);
			} catch (Exception $e) {
				if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
				{
					echo "Msg:". $e->getResponseObject()->getErrMsg()."\n";
					echo "Code:". $e->getResponseObject()->getErrCode()."\n";
				}
				echo 'Exception when calling DocumentApi->createSeal: ', $e->getMessage(), "\n";
			}
	}

	//获取印章图片
	public function testGetSeal()
    {
		echo "====================== testGetSeal() ================== ";

		$api_instance = new Swagger\Client\Api\SealApi();
		$client_id = "caba06729b6369fdc0ebbce1"; // string | \u7CFB\u7EDF\u7F16\u53F7
		$seal_id = "732044162861367296"; // string | \u5370\u7AE0\u7F16\u53F7

		try { 
			$result = $api_instance->getSeal($client_id, $seal_id);
				$this->assertNotEmpty($result);
				print_r($result);
			} catch (Exception $e) {
				if(get_class($e->getResponseObject()) == 'Swagger\Client\Model\ApiError')
				{
					echo "\nMsg:". $e->getResponseObject()->getErrMsg()."\n";
					echo "Code:". $e->getResponseObject()->getErrCode()."\n";
				}
				echo 'Exception when calling DocumentApi->getSeal: ', $e->getMessage(), "\n";
			}
	}
}
?>