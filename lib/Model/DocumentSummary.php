<?php
/**
 * DocumentSummary
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * DocumentSummary Class Doc Comment
 *
 * @category    Class
 * @description \u6587\u6863\u7B7E\u7F72\u7ED3\u679C
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentSummary implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'document_id' => 'string',
        'document_status' => '\Swagger\Client\Model\DocumentStatus',
        'uri' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'document_id' => 'documentId',
        'document_status' => 'documentStatus',
        'uri' => 'uri'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'document_id' => 'setDocumentId',
        'document_status' => 'setDocumentStatus',
        'uri' => 'setUri'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'document_id' => 'getDocumentId',
        'document_status' => 'getDocumentStatus',
        'uri' => 'getUri'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $document_id \u7B7E\u7F72\u540E\u7684\u6587\u6863\u7F16\u53F7
      * @var string
      */
    protected $document_id;
    
    /**
      * $document_status 
      * @var \Swagger\Client\Model\DocumentStatus
      */
    protected $document_status;
    
    /**
      * $uri \u7B7E\u7F72\u540E\u7684\u6587\u6863\u4E0B\u8F7D\u94FE\u63A5
      * @var string
      */
    protected $uri;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->document_id = $data["document_id"];
            $this->document_status = $data["document_status"];
            $this->uri = $data["uri"];
        }
    }
    
    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }
  
    /**
     * Sets document_id
     * @param string $document_id \u7B7E\u7F72\u540E\u7684\u6587\u6863\u7F16\u53F7
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        
        $this->document_id = $document_id;
        return $this;
    }
    
    /**
     * Gets document_status
     * @return \Swagger\Client\Model\DocumentStatus
     */
    public function getDocumentStatus()
    {
        return $this->document_status;
    }
  
    /**
     * Sets document_status
     * @param \Swagger\Client\Model\DocumentStatus $document_status 
     * @return $this
     */
    public function setDocumentStatus($document_status)
    {
        
        $this->document_status = $document_status;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri \u7B7E\u7F72\u540E\u7684\u6587\u6863\u4E0B\u8F7D\u94FE\u63A5
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
