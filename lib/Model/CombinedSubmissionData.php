<?php
/**
 * CombinedSubmissionData
 *
 * PHP version 5
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API V1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FormAPI\Model;

use \ArrayAccess;
use \FormAPI\ObjectSerializer;

/**
 * CombinedSubmissionData Class Doc Comment
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CombinedSubmissionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'combined_submission_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'test' => 'bool',
        'submission_ids' => 'string[]',
        'metadata' => 'object',
        'expires_in' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'test' => null,
        'submission_ids' => null,
        'metadata' => null,
        'expires_in' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'test' => 'test',
        'submission_ids' => 'submission_ids',
        'metadata' => 'metadata',
        'expires_in' => 'expires_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test' => 'setTest',
        'submission_ids' => 'setSubmissionIds',
        'metadata' => 'setMetadata',
        'expires_in' => 'setExpiresIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test' => 'getTest',
        'submission_ids' => 'getSubmissionIds',
        'metadata' => 'getMetadata',
        'expires_in' => 'getExpiresIn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
        $this->container['submission_ids'] = isset($data['submission_ids']) ? $data['submission_ids'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['submission_ids'] === null) {
            $invalidProperties[] = "'submission_ids' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets submission_ids
     *
     * @return string[]
     */
    public function getSubmissionIds()
    {
        return $this->container['submission_ids'];
    }

    /**
     * Sets submission_ids
     *
     * @param string[] $submission_ids submission_ids
     *
     * @return $this
     */
    public function setSubmissionIds($submission_ids)
    {
        $this->container['submission_ids'] = $submission_ids;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return float|null
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param float|null $expires_in expires_in
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


