<?php
/**
 * IndividualCommonModelScopeDeserializerRequest
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
 * IndividualCommonModelScopeDeserializerRequest Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IndividualCommonModelScopeDeserializerRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndividualCommonModelScopeDeserializerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model_name' => 'string',
        'model_permissions' => 'array<string,\MergeHRISClient\Model\ModelPermissionDeserializerRequest>',
        'field_permissions' => '\MergeHRISClient\Model\FieldPermissionDeserializerRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model_name' => null,
        'model_permissions' => null,
        'field_permissions' => null
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
        'model_name' => 'model_name',
        'model_permissions' => 'model_permissions',
        'field_permissions' => 'field_permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_name' => 'setModelName',
        'model_permissions' => 'setModelPermissions',
        'field_permissions' => 'setFieldPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_name' => 'getModelName',
        'model_permissions' => 'getModelPermissions',
        'field_permissions' => 'getFieldPermissions'
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
        $this->container['model_name'] = $data['model_name'] ?? null;
        $this->container['model_permissions'] = $data['model_permissions'] ?? null;
        $this->container['field_permissions'] = $data['field_permissions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_name'] === null) {
            $invalidProperties[] = "'model_name' can't be null";
        }
        if ((mb_strlen($this->container['model_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'model_name', the character length must be bigger than or equal to 1.";
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
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name model_name
     *
     * @return self
     */
    public function setModelName($model_name)
    {

        if ((mb_strlen($model_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $model_name when calling IndividualCommonModelScopeDeserializerRequest., must be bigger than or equal to 1.');
        }

        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_permissions
     *
     * @return array<string,\MergeHRISClient\Model\ModelPermissionDeserializerRequest>|null
     */
    public function getModelPermissions()
    {
        return $this->container['model_permissions'];
    }

    /**
     * Sets model_permissions
     *
     * @param array<string,\MergeHRISClient\Model\ModelPermissionDeserializerRequest>|null $model_permissions model_permissions
     *
     * @return self
     */
    public function setModelPermissions($model_permissions)
    {
        $this->container['model_permissions'] = $model_permissions;

        return $this;
    }

    /**
     * Gets field_permissions
     *
     * @return \MergeHRISClient\Model\FieldPermissionDeserializerRequest|null
     */
    public function getFieldPermissions()
    {
        return $this->container['field_permissions'];
    }

    /**
     * Sets field_permissions
     *
     * @param \MergeHRISClient\Model\FieldPermissionDeserializerRequest|null $field_permissions field_permissions
     *
     * @return self
     */
    public function setFieldPermissions($field_permissions)
    {
        $this->container['field_permissions'] = $field_permissions;

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

