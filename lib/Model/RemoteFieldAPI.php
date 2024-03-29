<?php
/**
 * RemoteFieldAPI
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Model;

use \ArrayAccess;
use \MergeHRISClient\ObjectSerializer;

/**
 * RemoteFieldAPI Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RemoteFieldAPI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemoteFieldAPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schema' => 'array<string,mixed>',
        'remote_key_name' => 'string',
        'remote_endpoint_info' => '\MergeHRISClient\Model\RemoteEndpointInfo',
        'example_values' => 'mixed[]',
        'advanced_metadata' => 'AdvancedMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schema' => null,
        'remote_key_name' => null,
        'remote_endpoint_info' => null,
        'example_values' => null,
        'advanced_metadata' => null
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
        'schema' => 'schema',
        'remote_key_name' => 'remote_key_name',
        'remote_endpoint_info' => 'remote_endpoint_info',
        'example_values' => 'example_values',
        'advanced_metadata' => 'advanced_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schema' => 'setSchema',
        'remote_key_name' => 'setRemoteKeyName',
        'remote_endpoint_info' => 'setRemoteEndpointInfo',
        'example_values' => 'setExampleValues',
        'advanced_metadata' => 'setAdvancedMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schema' => 'getSchema',
        'remote_key_name' => 'getRemoteKeyName',
        'remote_endpoint_info' => 'getRemoteEndpointInfo',
        'example_values' => 'getExampleValues',
        'advanced_metadata' => 'getAdvancedMetadata'
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
        $this->container['schema'] = $data['schema'] ?? null;
        $this->container['remote_key_name'] = $data['remote_key_name'] ?? null;
        $this->container['remote_endpoint_info'] = $data['remote_endpoint_info'] ?? null;
        $this->container['example_values'] = $data['example_values'] ?? null;
        $this->container['advanced_metadata'] = $data['advanced_metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['remote_key_name'] === null) {
            $invalidProperties[] = "'remote_key_name' can't be null";
        }
        if ($this->container['remote_endpoint_info'] === null) {
            $invalidProperties[] = "'remote_endpoint_info' can't be null";
        }
        if ($this->container['example_values'] === null) {
            $invalidProperties[] = "'example_values' can't be null";
        }
        if ($this->container['advanced_metadata'] === null) {
            $invalidProperties[] = "'advanced_metadata' can't be null";
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
     * Gets schema
     *
     * @return array<string,mixed>
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param array<string,mixed> $schema schema
     *
     * @return self
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets remote_key_name
     *
     * @return string
     */
    public function getRemoteKeyName()
    {
        return $this->container['remote_key_name'];
    }

    /**
     * Sets remote_key_name
     *
     * @param string $remote_key_name remote_key_name
     *
     * @return self
     */
    public function setRemoteKeyName($remote_key_name)
    {
        $this->container['remote_key_name'] = $remote_key_name;

        return $this;
    }

    /**
     * Gets remote_endpoint_info
     *
     * @return \MergeHRISClient\Model\RemoteEndpointInfo
     */
    public function getRemoteEndpointInfo()
    {
        return $this->container['remote_endpoint_info'];
    }

    /**
     * Sets remote_endpoint_info
     *
     * @param \MergeHRISClient\Model\RemoteEndpointInfo $remote_endpoint_info remote_endpoint_info
     *
     * @return self
     */
    public function setRemoteEndpointInfo($remote_endpoint_info)
    {
        $this->container['remote_endpoint_info'] = $remote_endpoint_info;

        return $this;
    }

    /**
     * Gets example_values
     *
     * @return mixed[]
     */
    public function getExampleValues()
    {
        return $this->container['example_values'];
    }

    /**
     * Sets example_values
     *
     * @param mixed[] $example_values example_values
     *
     * @return self
     */
    public function setExampleValues($example_values)
    {
        $this->container['example_values'] = $example_values;

        return $this;
    }

    /**
     * Gets advanced_metadata
     *
     * @return AdvancedMetadata
     */
    public function getAdvancedMetadata()
    {
        return $this->container['advanced_metadata'];
    }

    /**
     * Sets advanced_metadata
     *
     * @param AdvancedMetadata $advanced_metadata advanced_metadata
     *
     * @return self
     */
    public function setAdvancedMetadata($advanced_metadata)
    {
        $this->container['advanced_metadata'] = $advanced_metadata;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


