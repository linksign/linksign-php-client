# Swagger\Client\DocumentApi

All URIs are relative to *https://api.linksign.cn:443/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](DocumentApi.md#createDocument) | **POST** /clients/{clientId}/documents | \u7B7E\u7F72\u6587\u4EF6
[**getDocument**](DocumentApi.md#getDocument) | **GET** /clients/{clientId}/documents/{documentId} | \u83B7\u53D6\u6587\u4EF6
[**getDocumentStatus**](DocumentApi.md#getDocumentStatus) | **GET** /clients/{clientId}/documents/{documentId}/status | \u83B7\u53D6\u6587\u4EF6\u7B7E\u7F72\u72B6\u6001\u3001URI


# **createDocument**
> \Swagger\Client\Model\DocumentSummary createDocument($client_id, $body)

\u7B7E\u7F72\u6587\u4EF6

\u7B7E\u7F72\u6587\u4EF6

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DocumentApi();
$client_id = "client_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentDefinition(); // \Swagger\Client\Model\DocumentDefinition | 

try { 
    $result = $api_instance->createDocument($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **body** | [**\Swagger\Client\Model\DocumentDefinition**](\Swagger\Client\Model\DocumentDefinition.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\DocumentSummary**](DocumentSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDocument**
> \SplFileObject getDocument($client_id, $document_id)

\u83B7\u53D6\u6587\u4EF6

\u83B7\u53D6\u6587\u4EF6

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DocumentApi();
$client_id = "client_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try { 
    $result = $api_instance->getDocument($client_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **document_id** | **string**|  | 

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDocumentStatus**
> \Swagger\Client\Model\DocumentStatus getDocumentStatus($client_id, $document_id)

\u83B7\u53D6\u6587\u4EF6\u7B7E\u7F72\u72B6\u6001\u3001URI

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DocumentApi();
$client_id = "client_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try { 
    $result = $api_instance->getDocumentStatus($client_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentStatus: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **document_id** | **string**|  | 

### Return type

[**\Swagger\Client\Model\DocumentStatus**](DocumentStatus.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

