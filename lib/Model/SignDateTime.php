<?php
/**
 * SignDateTime
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
 * SignDateTime Class Doc Comment
 *
 * @category    Class
 * @description \u7B7E\u7F72\u65F6\u95F4\u4FE1\u606F
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignDateTime implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'date_time_pattern' => 'string',
        'document_index' => 'string',
        'font_name' => 'string',
        'font_size' => 'float',
        'page_number' => 'int',
        'recipient_index' => 'string',
        'template_date_field_id' => 'string',
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
        'date_time_pattern' => 'dateTimePattern',
        'document_index' => 'documentIndex',
        'font_name' => 'fontName',
        'font_size' => 'fontSize',
        'page_number' => 'pageNumber',
        'recipient_index' => 'recipientIndex',
        'template_date_field_id' => 'templateDateFieldId',
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
        'date_time_pattern' => 'setDateTimePattern',
        'document_index' => 'setDocumentIndex',
        'font_name' => 'setFontName',
        'font_size' => 'setFontSize',
        'page_number' => 'setPageNumber',
        'recipient_index' => 'setRecipientIndex',
        'template_date_field_id' => 'setTemplateDateFieldId',
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
        'date_time_pattern' => 'getDateTimePattern',
        'document_index' => 'getDocumentIndex',
        'font_name' => 'getFontName',
        'font_size' => 'getFontSize',
        'page_number' => 'getPageNumber',
        'recipient_index' => 'getRecipientIndex',
        'template_date_field_id' => 'getTemplateDateFieldId',
        'width' => 'getWidth',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $date_time_pattern \u65F6\u95F4\u663E\u793A\u683C\u5F0F
      * @var string
      */
    protected $date_time_pattern;
    
    /**
      * $document_index \u6587\u6863\u7D22\u5F15
      * @var string
      */
    protected $document_index;
    
    /**
      * $font_name \u5B57\u4F53\u540D\u79F0
      * @var string
      */
    protected $font_name;
    
    /**
      * $font_size \u5B57\u4F53\u5927\u5C0F
      * @var float
      */
    protected $font_size;
    
    /**
      * $page_number \u9875\u7801
      * @var int
      */
    protected $page_number;
    
    /**
      * $recipient_index \u7B7E\u7F72\u4EBA\u7D22\u5F15\u53F7
      * @var string
      */
    protected $recipient_index;
    
    /**
      * $template_date_field_id \u6A21\u677F\u65F6\u95F4\u5B57\u6BB5\u540D
      * @var string
      */
    protected $template_date_field_id;
    
    /**
      * $width \u5BBD\u5EA6
      * @var int
      */
    protected $width;
    
    /**
      * $x_position X\u5750\u6807
      * @var int
      */
    protected $x_position;
    
    /**
      * $y_position Y\u5750\u6807
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
            $this->date_time_pattern = $data["date_time_pattern"];
            $this->document_index = $data["document_index"];
            $this->font_name = $data["font_name"];
            $this->font_size = $data["font_size"];
            $this->page_number = $data["page_number"];
            $this->recipient_index = $data["recipient_index"];
            $this->template_date_field_id = $data["template_date_field_id"];
            $this->width = $data["width"];
            $this->x_position = $data["x_position"];
            $this->y_position = $data["y_position"];
        }
    }
    
    /**
     * Gets date_time_pattern
     * @return string
     */
    public function getDateTimePattern()
    {
        return $this->date_time_pattern;
    }
  
    /**
     * Sets date_time_pattern
     * @param string $date_time_pattern \u65F6\u95F4\u663E\u793A\u683C\u5F0F
     * @return $this
     */
    public function setDateTimePattern($date_time_pattern)
    {
        
        $this->date_time_pattern = $date_time_pattern;
        return $this;
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
     * @param string $document_index \u6587\u6863\u7D22\u5F15
     * @return $this
     */
    public function setDocumentIndex($document_index)
    {
        
        $this->document_index = $document_index;
        return $this;
    }
    
    /**
     * Gets font_name
     * @return string
     */
    public function getFontName()
    {
        return $this->font_name;
    }
  
    /**
     * Sets font_name
     * @param string $font_name \u5B57\u4F53\u540D\u79F0
     * @return $this
     */
    public function setFontName($font_name)
    {
        
        $this->font_name = $font_name;
        return $this;
    }
    
    /**
     * Gets font_size
     * @return float
     */
    public function getFontSize()
    {
        return $this->font_size;
    }
  
    /**
     * Sets font_size
     * @param float $font_size \u5B57\u4F53\u5927\u5C0F
     * @return $this
     */
    public function setFontSize($font_size)
    {
        
        $this->font_size = $font_size;
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
     * @param int $page_number \u9875\u7801
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
     * @param string $recipient_index \u7B7E\u7F72\u4EBA\u7D22\u5F15\u53F7
     * @return $this
     */
    public function setRecipientIndex($recipient_index)
    {
        
        $this->recipient_index = $recipient_index;
        return $this;
    }
    
    /**
     * Gets template_date_field_id
     * @return string
     */
    public function getTemplateDateFieldId()
    {
        return $this->template_date_field_id;
    }
  
    /**
     * Sets template_date_field_id
     * @param string $template_date_field_id \u6A21\u677F\u65F6\u95F4\u5B57\u6BB5\u540D
     * @return $this
     */
    public function setTemplateDateFieldId($template_date_field_id)
    {
        
        $this->template_date_field_id = $template_date_field_id;
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
     * @param int $width \u5BBD\u5EA6
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
     * @param int $x_position X\u5750\u6807
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
     * @param int $y_position Y\u5750\u6807
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