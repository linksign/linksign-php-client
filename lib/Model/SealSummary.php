<?php
/**
 * SealSummary
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
 * SealSummary Class Doc Comment
 *
 * @category    Class
 * @description \u5370\u7AE0\u7ED3\u679C
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SealSummary implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'image_png_base64' => 'string',
        'seal_file_uri' => 'string',
        'seal_id' => 'string',
        'sealer_redirect_uri' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'image_png_base64' => 'imagePngBase64',
        'seal_file_uri' => 'sealFileUri',
        'seal_id' => 'sealId',
        'sealer_redirect_uri' => 'sealerRedirectUri'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'image_png_base64' => 'setImagePngBase64',
        'seal_file_uri' => 'setSealFileUri',
        'seal_id' => 'setSealId',
        'sealer_redirect_uri' => 'setSealerRedirectUri'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'image_png_base64' => 'getImagePngBase64',
        'seal_file_uri' => 'getSealFileUri',
        'seal_id' => 'getSealId',
        'sealer_redirect_uri' => 'getSealerRedirectUri'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $image_png_base64 
      * @var string
      */
    protected $image_png_base64;
    
    /**
      * $seal_file_uri \u5370\u7AE0\u56FE\u7247\u4E0B\u8F7D\u5730\u5740
      * @var string
      */
    protected $seal_file_uri;
    
    /**
      * $seal_id \u5370\u7AE0\u7F16\u53F7
      * @var string
      */
    protected $seal_id;
    
    /**
      * $sealer_redirect_uri \u5370\u7AE0\u6536\u96C6\u91CD\u5B9A\u5411\u94FE\u63A5
      * @var string
      */
    protected $sealer_redirect_uri;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->image_png_base64 = $data["image_png_base64"];
            $this->seal_file_uri = $data["seal_file_uri"];
            $this->seal_id = $data["seal_id"];
            $this->sealer_redirect_uri = $data["sealer_redirect_uri"];
        }
    }
    
    /**
     * Gets image_png_base64
     * @return string
     */
    public function getImagePngBase64()
    {
        return $this->image_png_base64;
    }
  
    /**
     * Sets image_png_base64
     * @param string $image_png_base64 
     * @return $this
     */
    public function setImagePngBase64($image_png_base64)
    {
        
        $this->image_png_base64 = $image_png_base64;
        return $this;
    }
    
    /**
     * Gets seal_file_uri
     * @return string
     */
    public function getSealFileUri()
    {
        return $this->seal_file_uri;
    }
  
    /**
     * Sets seal_file_uri
     * @param string $seal_file_uri \u5370\u7AE0\u56FE\u7247\u4E0B\u8F7D\u5730\u5740
     * @return $this
     */
    public function setSealFileUri($seal_file_uri)
    {
        
        $this->seal_file_uri = $seal_file_uri;
        return $this;
    }
    
    /**
     * Gets seal_id
     * @return string
     */
    public function getSealId()
    {
        return $this->seal_id;
    }
  
    /**
     * Sets seal_id
     * @param string $seal_id \u5370\u7AE0\u7F16\u53F7
     * @return $this
     */
    public function setSealId($seal_id)
    {
        
        $this->seal_id = $seal_id;
        return $this;
    }
    
    /**
     * Gets sealer_redirect_uri
     * @return string
     */
    public function getSealerRedirectUri()
    {
        return $this->sealer_redirect_uri;
    }
  
    /**
     * Sets sealer_redirect_uri
     * @param string $sealer_redirect_uri \u5370\u7AE0\u6536\u96C6\u91CD\u5B9A\u5411\u94FE\u63A5
     * @return $this
     */
    public function setSealerRedirectUri($sealer_redirect_uri)
    {
        
        $this->sealer_redirect_uri = $sealer_redirect_uri;
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
