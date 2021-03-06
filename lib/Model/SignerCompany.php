<?php
/**
 * SignerCompany
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
 * SignerCompany Class Doc Comment
 *
 * @category    Class
 * @description \u7B7E\u540D\u7684\u5355\u4F4D\u4FE1\u606F
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignerCompany implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'company' => '\Swagger\Client\Model\Company',
        'tabs' => '\Swagger\Client\Model\Tabs',
        'user_id' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'company' => 'company',
        'tabs' => 'tabs',
        'user_id' => 'userId'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'company' => 'setCompany',
        'tabs' => 'setTabs',
        'user_id' => 'setUserId'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'company' => 'getCompany',
        'tabs' => 'getTabs',
        'user_id' => 'getUserId'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $company \u5355\u4F4D\u4FE1\u606F
      * @var \Swagger\Client\Model\Company
      */
    protected $company;
    
    /**
      * $tabs 
      * @var \Swagger\Client\Model\Tabs
      */
    protected $tabs;
    
    /**
      * $user_id \u9886\u7B7E\u7684\u7528\u6237\u7F16\u53F7
      * @var string
      */
    protected $user_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->company = $data["company"];
            $this->tabs = $data["tabs"];
            $this->user_id = $data["user_id"];
        }
    }
    
    /**
     * Gets company
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->company;
    }
  
    /**
     * Sets company
     * @param \Swagger\Client\Model\Company $company \u5355\u4F4D\u4FE1\u606F
     * @return $this
     */
    public function setCompany($company)
    {
        
        $this->company = $company;
        return $this;
    }
    
    /**
     * Gets tabs
     * @return \Swagger\Client\Model\Tabs
     */
    public function getTabs()
    {
        return $this->tabs;
    }
  
    /**
     * Sets tabs
     * @param \Swagger\Client\Model\Tabs $tabs 
     * @return $this
     */
    public function setTabs($tabs)
    {
        
        $this->tabs = $tabs;
        return $this;
    }
    
    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }
  
    /**
     * Sets user_id
     * @param string $user_id \u9886\u7B7E\u7684\u7528\u6237\u7F16\u53F7
     * @return $this
     */
    public function setUserId($user_id)
    {
        
        $this->user_id = $user_id;
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
