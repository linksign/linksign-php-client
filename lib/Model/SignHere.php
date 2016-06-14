<?php
/**
 * SignHere
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
 * SignHere Class Doc Comment
 *
 * @category    Class
 * @description \u7B7E\u7F72\u4F4D\u7F6E\u4FE1\u606F
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignHere implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'document_index' => 'string',
        'height' => 'int',
        'page_number' => 'int',
        'recipient_index' => 'string',
        'seal_height' => 'int',
        'seal_id' => 'string',
        'seal_page_number' => 'int',
        'seal_width' => 'int',
        'seal_x_position' => 'int',
        'seal_y_position' => 'int',
        'signature_id' => 'string',
        'template_seal_field_id' => 'string',
        'template_signature_field_id' => 'string',
        'width' => 'int',
        'x_position' => 'int',
        'y_position' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'document_index' => 'documentIndex',
        'height' => 'height',
        'page_number' => 'pageNumber',
        'recipient_index' => 'recipientIndex',
        'seal_height' => 'sealHeight',
        'seal_id' => 'sealId',
        'seal_page_number' => 'sealPageNumber',
        'seal_width' => 'sealWidth',
        'seal_x_position' => 'sealXPosition',
        'seal_y_position' => 'sealYPosition',
        'signature_id' => 'signatureId',
        'template_seal_field_id' => 'templateSealFieldId',
        'template_signature_field_id' => 'templateSignatureFieldId',
        'width' => 'width',
        'x_position' => 'xPosition',
        'y_position' => 'yPosition'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'document_index' => 'setDocumentIndex',
        'height' => 'setHeight',
        'page_number' => 'setPageNumber',
        'recipient_index' => 'setRecipientIndex',
        'seal_height' => 'setSealHeight',
        'seal_id' => 'setSealId',
        'seal_page_number' => 'setSealPageNumber',
        'seal_width' => 'setSealWidth',
        'seal_x_position' => 'setSealXPosition',
        'seal_y_position' => 'setSealYPosition',
        'signature_id' => 'setSignatureId',
        'template_seal_field_id' => 'setTemplateSealFieldId',
        'template_signature_field_id' => 'setTemplateSignatureFieldId',
        'width' => 'setWidth',
        'x_position' => 'setXPosition',
        'y_position' => 'setYPosition'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'document_index' => 'getDocumentIndex',
        'height' => 'getHeight',
        'page_number' => 'getPageNumber',
        'recipient_index' => 'getRecipientIndex',
        'seal_height' => 'getSealHeight',
        'seal_id' => 'getSealId',
        'seal_page_number' => 'getSealPageNumber',
        'seal_width' => 'getSealWidth',
        'seal_x_position' => 'getSealXPosition',
        'seal_y_position' => 'getSealYPosition',
        'signature_id' => 'getSignatureId',
        'template_seal_field_id' => 'getTemplateSealFieldId',
        'template_signature_field_id' => 'getTemplateSignatureFieldId',
        'width' => 'getWidth',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $document_index \u7B7E\u540D\u6587\u4EF6\u7D22\u5F15\uFF0C \u4E0EDocument\u5BF9\u5E94
      * @var string
      */
    protected $document_index;
    
    /**
      * $height \u7B7E\u7F72\u533A\u57DF\u9AD8\u5EA6
      * @var int
      */
    protected $height;
    
    /**
      * $page_number 
      * @var int
      */
    protected $page_number;
    
    /**
      * $recipient_index \u7B7E\u7F72\u4EBA(Company)\u7D22\u5F15
      * @var string
      */
    protected $recipient_index;
    
    /**
      * $seal_height \u5370\u7AE0\u9AD8\u5EA6
      * @var int
      */
    protected $seal_height;
    
    /**
      * $seal_id \u5370\u7AE0\u7F16\u53F7
      * @var string
      */
    protected $seal_id;
    
    /**
      * $seal_page_number \u5370\u7AE0\u9875\u7801
      * @var int
      */
    protected $seal_page_number;
    
    /**
      * $seal_width \u5370\u7AE0\u5BBD\u5EA6
      * @var int
      */
    protected $seal_width;
    
    /**
      * $seal_x_position \u5370\u7AE0X\u5750\u6807
      * @var int
      */
    protected $seal_x_position;
    
    /**
      * $seal_y_position \u5370\u7AE0Y\u5750\u6807
      * @var int
      */
    protected $seal_y_position;
    
    /**
      * $signature_id \u7B7E\u540D\u7F16\u53F7
      * @var string
      */
    protected $signature_id;
    
    /**
      * $template_seal_field_id \u6A21\u677F\u516C\u7AE0\u5B57\u6BB5\u540D
      * @var string
      */
    protected $template_seal_field_id;
    
    /**
      * $template_signature_field_id \u6A21\u677F\u7B7E\u540D\u5B57\u6BB5\u540D
      * @var string
      */
    protected $template_signature_field_id;
    
    /**
      * $width \u7B7E\u540D\u57DF\u5BBD\u5EA6
      * @var int
      */
    protected $width;
    
    /**
      * $x_position x\u5750\u6807
      * @var int
      */
    protected $x_position;
    
    /**
      * $y_position y\u5750\u6807
      * @var int
      */
    protected $y_position;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->document_index = $data["document_index"];
            $this->height = $data["height"];
            $this->page_number = $data["page_number"];
            $this->recipient_index = $data["recipient_index"];
            $this->seal_height = $data["seal_height"];
            $this->seal_id = $data["seal_id"];
            $this->seal_page_number = $data["seal_page_number"];
            $this->seal_width = $data["seal_width"];
            $this->seal_x_position = $data["seal_x_position"];
            $this->seal_y_position = $data["seal_y_position"];
            $this->signature_id = $data["signature_id"];
            $this->template_seal_field_id = $data["template_seal_field_id"];
            $this->template_signature_field_id = $data["template_signature_field_id"];
            $this->width = $data["width"];
            $this->x_position = $data["x_position"];
            $this->y_position = $data["y_position"];
        }
    }
    
    /**
     * Gets document_index
     * @return string
     */
    public function getDocumentIndex()
    {
        return $this->document_index;
    }
  
    /**
     * Sets document_index
     * @param string $document_index \u7B7E\u540D\u6587\u4EF6\u7D22\u5F15\uFF0C \u4E0EDocument\u5BF9\u5E94
     * @return $this
     */
    public function setDocumentIndex($document_index)
    {
        
        $this->document_index = $document_index;
        return $this;
    }
    
    /**
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
  
    /**
     * Sets height
     * @param int $height \u7B7E\u7F72\u533A\u57DF\u9AD8\u5EA6
     * @return $this
     */
    public function setHeight($height)
    {
        
        $this->height = $height;
        return $this;
    }
    
    /**
     * Gets page_number
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }
  
    /**
     * Sets page_number
     * @param int $page_number 
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        
        $this->page_number = $page_number;
        return $this;
    }
    
    /**
     * Gets recipient_index
     * @return string
     */
    public function getRecipientIndex()
    {
        return $this->recipient_index;
    }
  
    /**
     * Sets recipient_index
     * @param string $recipient_index \u7B7E\u7F72\u4EBA(Company)\u7D22\u5F15
     * @return $this
     */
    public function setRecipientIndex($recipient_index)
    {
        
        $this->recipient_index = $recipient_index;
        return $this;
    }
    
    /**
     * Gets seal_height
     * @return int
     */
    public function getSealHeight()
    {
        return $this->seal_height;
    }
  
    /**
     * Sets seal_height
     * @param int $seal_height \u5370\u7AE0\u9AD8\u5EA6
     * @return $this
     */
    public function setSealHeight($seal_height)
    {
        
        $this->seal_height = $seal_height;
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
     * Gets seal_page_number
     * @return int
     */
    public function getSealPageNumber()
    {
        return $this->seal_page_number;
    }
  
    /**
     * Sets seal_page_number
     * @param int $seal_page_number \u5370\u7AE0\u9875\u7801
     * @return $this
     */
    public function setSealPageNumber($seal_page_number)
    {
        
        $this->seal_page_number = $seal_page_number;
        return $this;
    }
    
    /**
     * Gets seal_width
     * @return int
     */
    public function getSealWidth()
    {
        return $this->seal_width;
    }
  
    /**
     * Sets seal_width
     * @param int $seal_width \u5370\u7AE0\u5BBD\u5EA6
     * @return $this
     */
    public function setSealWidth($seal_width)
    {
        
        $this->seal_width = $seal_width;
        return $this;
    }
    
    /**
     * Gets seal_x_position
     * @return int
     */
    public function getSealXPosition()
    {
        return $this->seal_x_position;
    }
  
    /**
     * Sets seal_x_position
     * @param int $seal_x_position \u5370\u7AE0X\u5750\u6807
     * @return $this
     */
    public function setSealXPosition($seal_x_position)
    {
        
        $this->seal_x_position = $seal_x_position;
        return $this;
    }
    
    /**
     * Gets seal_y_position
     * @return int
     */
    public function getSealYPosition()
    {
        return $this->seal_y_position;
    }
  
    /**
     * Sets seal_y_position
     * @param int $seal_y_position \u5370\u7AE0Y\u5750\u6807
     * @return $this
     */
    public function setSealYPosition($seal_y_position)
    {
        
        $this->seal_y_position = $seal_y_position;
        return $this;
    }
    
    /**
     * Gets signature_id
     * @return string
     */
    public function getSignatureId()
    {
        return $this->signature_id;
    }
  
    /**
     * Sets signature_id
     * @param string $signature_id \u7B7E\u540D\u7F16\u53F7
     * @return $this
     */
    public function setSignatureId($signature_id)
    {
        
        $this->signature_id = $signature_id;
        return $this;
    }
    
    /**
     * Gets template_seal_field_id
     * @return string
     */
    public function getTemplateSealFieldId()
    {
        return $this->template_seal_field_id;
    }
  
    /**
     * Sets template_seal_field_id
     * @param string $template_seal_field_id \u6A21\u677F\u516C\u7AE0\u5B57\u6BB5\u540D
     * @return $this
     */
    public function setTemplateSealFieldId($template_seal_field_id)
    {
        
        $this->template_seal_field_id = $template_seal_field_id;
        return $this;
    }
    
    /**
     * Gets template_signature_field_id
     * @return string
     */
    public function getTemplateSignatureFieldId()
    {
        return $this->template_signature_field_id;
    }
  
    /**
     * Sets template_signature_field_id
     * @param string $template_signature_field_id \u6A21\u677F\u7B7E\u540D\u5B57\u6BB5\u540D
     * @return $this
     */
    public function setTemplateSignatureFieldId($template_signature_field_id)
    {
        
        $this->template_signature_field_id = $template_signature_field_id;
        return $this;
    }
    
    /**
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
  
    /**
     * Sets width
     * @param int $width \u7B7E\u540D\u57DF\u5BBD\u5EA6
     * @return $this
     */
    public function setWidth($width)
    {
        
        $this->width = $width;
        return $this;
    }
    
    /**
     * Gets x_position
     * @return int
     */
    public function getXPosition()
    {
        return $this->x_position;
    }
  
    /**
     * Sets x_position
     * @param int $x_position x\u5750\u6807
     * @return $this
     */
    public function setXPosition($x_position)
    {
        
        $this->x_position = $x_position;
        return $this;
    }
    
    /**
     * Gets y_position
     * @return int
     */
    public function getYPosition()
    {
        return $this->y_position;
    }
  
    /**
     * Sets y_position
     * @param int $y_position y\u5750\u6807
     * @return $this
     */
    public function setYPosition($y_position)
    {
        
        $this->y_position = $y_position;
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
