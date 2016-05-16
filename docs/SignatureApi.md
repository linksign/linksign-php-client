# Swagger\Client\SignatureApi

All URIs are relative to *https://api.linksign.cn:443/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSignature**](SignatureApi.md#createSignature) | **POST** /clients/{clientId}/signatures | 
[**getSignature**](SignatureApi.md#getSignature) | **GET** /clients/{clientId}/signatures/{signatureId} | 


# **createSignature**
> \Swagger\Client\Model\SignatureSummary createSignature($client_id, $body)



\u65B0\u5EFA\u4E00\u4E2A\u7B7E\u540D\u6536\u96C6\u8BF7\u6C42

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SignatureApi();
$client_id = "client_id_example"; // string | \u5BA2\u6237\u7F16\u53F7
$body = new \Swagger\Client\Model\Signature(); // \Swagger\Client\Model\Signature | 

try { 
    $result = $api_instance->createSignature($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureApi->createSignature: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| \u5BA2\u6237\u7F16\u53F7 | 
 **body** | [**\Swagger\Client\Model\Signature**](\Swagger\Client\Model\Signature.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\SignatureSummary**](SignatureSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSignature**
> \Swagger\Client\Model\SignatureFile getSignature($client_id, $signature_id)



\u83B7\u53D6\u7B7E\u7F72\u56FE\u7247

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SignatureApi();
$client_id = "client_id_example"; // string | \u5E94\u7528\u7CFB\u7EDF\u7F16\u53F7
$signature_id = "signature_id_example"; // string | \u7B7E\u540D\u7F16\u53F7

try { 
    $result = $api_instance->getSignature($client_id, $signature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureApi->getSignature: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| \u5E94\u7528\u7CFB\u7EDF\u7F16\u53F7 | 
 **signature_id** | **string**| \u7B7E\u540D\u7F16\u53F7 | 

### Return type

[**\Swagger\Client\Model\SignatureFile**](SignatureFile.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

