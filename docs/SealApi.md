# Swagger\Client\SealApi

All URIs are relative to *https://api.linksign.cn:443/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSeal**](SealApi.md#createSeal) | **POST** /clients/{clientId}/seals | 
[**getSeal**](SealApi.md#getSeal) | **GET** /clients/{clientId}/seals/{sealId} | 


# **createSeal**
> \Swagger\Client\Model\SealSummary createSeal($client_id, $body)



\u521B\u5EFA\u4E00\u4E2A\u5370\u7AE0

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SealApi();
$client_id = "client_id_example"; // string | 
$body = new \Swagger\Client\Model\Seal(); // \Swagger\Client\Model\Seal | 

try { 
    $result = $api_instance->createSeal($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SealApi->createSeal: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **body** | [**\Swagger\Client\Model\Seal**](\Swagger\Client\Model\Seal.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\SealSummary**](SealSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSeal**
> \Swagger\Client\Model\SealFile getSeal($client_id, $seal_id)



\u83B7\u53D6\u4E00\u4E2A\u5370\u7AE0

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SealApi();
$client_id = "client_id_example"; // string | \u7CFB\u7EDF\u7F16\u53F7
$seal_id = "seal_id_example"; // string | \u5370\u7AE0\u7F16\u53F7

try { 
    $result = $api_instance->getSeal($client_id, $seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SealApi->getSeal: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| \u7CFB\u7EDF\u7F16\u53F7 | 
 **seal_id** | **string**| \u5370\u7AE0\u7F16\u53F7 | 

### Return type

[**\Swagger\Client\Model\SealFile**](SealFile.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

