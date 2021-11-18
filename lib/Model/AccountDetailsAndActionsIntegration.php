<?php
/**
 * AccountDetailsAndActionsIntegration
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
 * AccountDetailsAndActionsIntegration Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountDetailsAndActionsIntegration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountDetailsAndActionsIntegration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'categories' => '\MergeHRISClient\Model\CategoriesEnum',
        'image' => 'string',
        'square_image' => 'string',
        'color' => 'string',
        'slug' => 'string',
        'passthrough_available' => 'bool',
        'available_model_operations' => '\MergeHRISClient\Model\ModelOperation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'categories' => null,
        'image' => null,
        'square_image' => null,
        'color' => null,
        'slug' => null,
        'passthrough_available' => null,
        'available_model_operations' => null
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
        'name' => 'name',
        'categories' => 'categories',
        'image' => 'image',
        'square_image' => 'square_image',
        'color' => 'color',
        'slug' => 'slug',
        'passthrough_available' => 'passthrough_available',
        'available_model_operations' => 'available_model_operations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'categories' => 'setCategories',
        'image' => 'setImage',
        'square_image' => 'setSquareImage',
        'color' => 'setColor',
        'slug' => 'setSlug',
        'passthrough_available' => 'setPassthroughAvailable',
        'available_model_operations' => 'setAvailableModelOperations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'categories' => 'getCategories',
        'image' => 'getImage',
        'square_image' => 'getSquareImage',
        'color' => 'getColor',
        'slug' => 'getSlug',
        'passthrough_available' => 'getPassthroughAvailable',
        'available_model_operations' => 'getAvailableModelOperations'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['square_image'] = $data['square_image'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
        $this->container['passthrough_available'] = $data['passthrough_available'] ?? null;
        $this->container['available_model_operations'] = $data['available_model_operations'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ($this->container['passthrough_available'] === null) {
            $invalidProperties[] = "'passthrough_available' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \MergeHRISClient\Model\CategoriesEnum
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \MergeHRISClient\Model\CategoriesEnum $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets square_image
     *
     * @return string|null
     */
    public function getSquareImage()
    {
        return $this->container['square_image'];
    }

    /**
     * Sets square_image
     *
     * @param string|null $square_image square_image
     *
     * @return self
     */
    public function setSquareImage($square_image)
    {
        $this->container['square_image'] = $square_image;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets passthrough_available
     *
     * @return bool
     */
    public function getPassthroughAvailable()
    {
        return $this->container['passthrough_available'];
    }

    /**
     * Sets passthrough_available
     *
     * @param bool $passthrough_available passthrough_available
     *
     * @return self
     */
    public function setPassthroughAvailable($passthrough_available)
    {
        $this->container['passthrough_available'] = $passthrough_available;

        return $this;
    }

    /**
     * Gets available_model_operations
     *
     * @return \MergeHRISClient\Model\ModelOperation[]|null
     */
    public function getAvailableModelOperations()
    {
        return $this->container['available_model_operations'];
    }

    /**
     * Sets available_model_operations
     *
     * @param \MergeHRISClient\Model\ModelOperation[]|null $available_model_operations available_model_operations
     *
     * @return self
     */
    public function setAvailableModelOperations($available_model_operations)
    {
        $this->container['available_model_operations'] = $available_model_operations;

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


