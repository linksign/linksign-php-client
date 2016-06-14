# Swagger\Client\UserApi

All URIs are relative to *https://api.linksign.cn:443/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPersonAuth**](UserApi.md#createPersonAuth) | **POST** /clients/{clientId}/persons/auth | PostPersonaAuth
[**getClientsClientIdCompanysCompanyIdAuth**](UserApi.md#getClientsClientIdCompanysCompanyIdAuth) | **GET** /clients/{clientId}/companys/{companyId}/auth | getCompanyAuthStatus
[**getPersonAuthStatus**](UserApi.md#getPersonAuthStatus) | **GET** /clients/{clientId}/persons/{personId}/auth | getPersonAuthStatus
[**postClientsClientIdCompanysAuth**](UserApi.md#postClientsClientIdCompanysAuth) | **POST** /clients/{clientId}/companys/auth | PostCompanyAuth
[**postClientsClientIdCompanysCompanyIdAuthBank**](UserApi.md#postClientsClientIdCompanysCompanyIdAuthBank) | **POST** /clients/{clientId}/companys/{companyId}/auth/bank | PostBankInfo


# **createPersonAuth**
> \Swagger\Client\Model\PersonAuthSummary createPersonAuth($client_id, $body)

PostPersonaAuth

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$client_id = "client_id_example"; // string | 
$body = new \Swagger\Client\Model\PersonAuth(); // \Swagger\Client\Model\PersonAuth | 

try { 
    $result = $api_instance->createPersonAuth($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createPersonAuth: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **body** | [**\Swagger\Client\Model\PersonAuth**](\Swagger\Client\Model\PersonAuth.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\PersonAuthSummary**](PersonAuthSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getClientsClientIdCompanysCompanyIdAuth**
> \Swagger\Client\Model\CompanyAuthSummary getClientsClientIdCompanysCompanyIdAuth($client_id, $company_id)

getCompanyAuthStatus

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$client_id = "client_id_example"; // string | ClientId
$company_id = "company_id_example"; // string | Company Id

try { 
    $result = $api_instance->getClientsClientIdCompanysCompanyIdAuth($client_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getClientsClientIdCompanysCompanyIdAuth: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| ClientId | 
 **company_id** | **string**| Company Id | 

### Return type

[**\Swagger\Client\Model\CompanyAuthSummary**](CompanyAuthSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPersonAuthStatus**
> \Swagger\Client\Model\PersonAuthSummary getPersonAuthStatus($client_id, $person_id)

getPersonAuthStatus

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$client_id = "client_id_example"; // string | 
$person_id = "person_id_example"; // string | 

try { 
    $result = $api_instance->getPersonAuthStatus($client_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPersonAuthStatus: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | 
 **person_id** | **string**|  | 

### Return type

[**\Swagger\Client\Model\PersonAuthSummary**](PersonAuthSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postClientsClientIdCompanysAuth**
> \Swagger\Client\Model\CompanyAuthSummary postClientsClientIdCompanysAuth($client_id, $body)

PostCompanyAuth

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$client_id = "client_id_example"; // string | Client Id
$body = new \Swagger\Client\Model\Company(); // \Swagger\Client\Model\Company | 

try { 
    $result = $api_instance->postClientsClientIdCompanysAuth($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postClientsClientIdCompanysAuth: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client Id | 
 **body** | [**\Swagger\Client\Model\Company**](\Swagger\Client\Model\Company.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\CompanyAuthSummary**](CompanyAuthSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postClientsClientIdCompanysCompanyIdAuthBank**
> \Swagger\Client\Model\CompanyAuthSummary postClientsClientIdCompanysCompanyIdAuthBank($client_id, $company_id, $body)

PostBankInfo

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$client_id = "client_id_example"; // string | clientId
$company_id = "company_id_example"; // string | companyId
$body = new \Swagger\Client\Model\Bank(); // \Swagger\Client\Model\Bank | 

try { 
    $result = $api_instance->postClientsClientIdCompanysCompanyIdAuthBank($client_id, $company_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postClientsClientIdCompanysCompanyIdAuthBank: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| clientId | 
 **company_id** | **string**| companyId | 
 **body** | [**\Swagger\Client\Model\Bank**](\Swagger\Client\Model\Bank.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\CompanyAuthSummary**](CompanyAuthSummary.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

