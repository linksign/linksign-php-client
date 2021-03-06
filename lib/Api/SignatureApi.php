<?php
/**
 * SignatureApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * SignatureApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.linksign.cn:443/v1');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return SignatureApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * createSignature
     *
     * \u65B0\u5EFA\u4E00\u4E2A\u7B7E\u540D\u6536\u96C6\u8BF7\u6C42
     *
     * @param string $client_id \u5BA2\u6237\u7F16\u53F7 (required)
     * @param \Swagger\Client\Model\Signature $body  (optional)
     * @return \Swagger\Client\Model\SignatureSummary
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createSignature($client_id, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createSignatureWithHttpInfo ($client_id, $body);
        return $response; 
    }


    /**
     * createSignatureWithHttpInfo
     *
     * \u65B0\u5EFA\u4E00\u4E2A\u7B7E\u540D\u6536\u96C6\u8BF7\u6C42
     *
     * @param string $client_id \u5BA2\u6237\u7F16\u53F7 (required)
     * @param \Swagger\Client\Model\Signature $body  (optional)
     * @return Array of \Swagger\Client\Model\SignatureSummary, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createSignatureWithHttpInfo($client_id, $body = null)
    {
        
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling createSignature');
        }
  
        // parse inputs
        $resourcePath = "/clients/{clientId}/signatures";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "clientId" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\SignatureSummary'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\SignatureSummary', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\SignatureSummary', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ApiError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getSignature
     *
     * \u83B7\u53D6\u7B7E\u7F72\u56FE\u7247
     *
     * @param string $client_id \u5E94\u7528\u7CFB\u7EDF\u7F16\u53F7 (required)
     * @param string $signature_id \u7B7E\u540D\u7F16\u53F7 (required)
     * @return \Swagger\Client\Model\SignatureFile
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSignature($client_id, $signature_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getSignatureWithHttpInfo ($client_id, $signature_id);
        return $response; 
    }


    /**
     * getSignatureWithHttpInfo
     *
     * \u83B7\u53D6\u7B7E\u7F72\u56FE\u7247
     *
     * @param string $client_id \u5E94\u7528\u7CFB\u7EDF\u7F16\u53F7 (required)
     * @param string $signature_id \u7B7E\u540D\u7F16\u53F7 (required)
     * @return Array of \Swagger\Client\Model\SignatureFile, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSignatureWithHttpInfo($client_id, $signature_id)
    {
        
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling getSignature');
        }
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $signature_id when calling getSignature');
        }
  
        // parse inputs
        $resourcePath = "/clients/{clientId}/signatures/{signatureId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "clientId" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
                $resourcePath
            );
        }// path params
        
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                "{" . "signatureId" . "}",
                $this->apiClient->getSerializer()->toPathValue($signature_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\SignatureFile'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\SignatureFile', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\SignatureFile', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ApiError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
