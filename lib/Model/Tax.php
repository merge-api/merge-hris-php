<?php
/**
 * Tax
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
 * Tax Class Doc Comment
 *
 * @category Class
 * @description # The Tax Object ### Description The &#x60;Tax&#x60; object is used to represent an array of the tax deductions for a given employee&#39;s payroll run.  ### Usage Example Fetch from the &#x60;LIST Taxes&#x60; endpoint and filter by &#x60;ID&#x60; to show all taxes.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Tax implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'created_at' => '\DateTime',
        'modified_at' => '\DateTime',
        'employee_payroll_run' => 'string',
        'name' => 'string',
        'amount' => 'double',
        'employer_tax' => 'bool',
        'remote_was_deleted' => 'bool',
        'field_mappings' => 'array<string,mixed>',
        'remote_data' => '\MergeHRISClient\Model\RemoteData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'remote_id' => null,
        'created_at' => 'date-time',
        'modified_at' => 'date-time',
        'employee_payroll_run' => 'uuid',
        'name' => null,
        'amount' => 'double',
        'employer_tax' => null,
        'remote_was_deleted' => null,
        'field_mappings' => null,
        'remote_data' => null
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
        'id' => 'id',
        'remote_id' => 'remote_id',
        'created_at' => 'created_at',
        'modified_at' => 'modified_at',
        'employee_payroll_run' => 'employee_payroll_run',
        'name' => 'name',
        'amount' => 'amount',
        'employer_tax' => 'employer_tax',
        'remote_was_deleted' => 'remote_was_deleted',
        'field_mappings' => 'field_mappings',
        'remote_data' => 'remote_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'remote_id' => 'setRemoteId',
        'created_at' => 'setCreatedAt',
        'modified_at' => 'setModifiedAt',
        'employee_payroll_run' => 'setEmployeePayrollRun',
        'name' => 'setName',
        'amount' => 'setAmount',
        'employer_tax' => 'setEmployerTax',
        'remote_was_deleted' => 'setRemoteWasDeleted',
        'field_mappings' => 'setFieldMappings',
        'remote_data' => 'setRemoteData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'remote_id' => 'getRemoteId',
        'created_at' => 'getCreatedAt',
        'modified_at' => 'getModifiedAt',
        'employee_payroll_run' => 'getEmployeePayrollRun',
        'name' => 'getName',
        'amount' => 'getAmount',
        'employer_tax' => 'getEmployerTax',
        'remote_was_deleted' => 'getRemoteWasDeleted',
        'field_mappings' => 'getFieldMappings',
        'remote_data' => 'getRemoteData'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['remote_id'] = $data['remote_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['modified_at'] = $data['modified_at'] ?? null;
        $this->container['employee_payroll_run'] = $data['employee_payroll_run'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['employer_tax'] = $data['employer_tax'] ?? null;
        $this->container['remote_was_deleted'] = $data['remote_was_deleted'] ?? null;
        $this->container['field_mappings'] = $data['field_mappings'] ?? null;
        $this->container['remote_data'] = $data['remote_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets remote_id
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->container['remote_id'];
    }

    /**
     * Sets remote_id
     *
     * @param string|null $remote_id The third-party API ID of the matching object.
     *
     * @return self
     */
    public function setRemoteId($remote_id)
    {
        $this->container['remote_id'] = $remote_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime|null $modified_at This is the datetime that this object was last updated by Merge
     *
     * @return self
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets employee_payroll_run
     *
     * @return string|null
     */
    public function getEmployeePayrollRun()
    {
        return $this->container['employee_payroll_run'];
    }

    /**
     * Sets employee_payroll_run
     *
     * @param string|null $employee_payroll_run employee_payroll_run
     *
     * @return self
     */
    public function setEmployeePayrollRun($employee_payroll_run)
    {
        $this->container['employee_payroll_run'] = $employee_payroll_run;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The tax's name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The tax amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets employer_tax
     *
     * @return bool|null
     */
    public function getEmployerTax()
    {
        return $this->container['employer_tax'];
    }

    /**
     * Sets employer_tax
     *
     * @param bool|null $employer_tax Whether or not the employer is responsible for paying the tax.
     *
     * @return self
     */
    public function setEmployerTax($employer_tax)
    {
        $this->container['employer_tax'] = $employer_tax;

        return $this;
    }

    /**
     * Gets remote_was_deleted
     *
     * @return bool|null
     */
    public function getRemoteWasDeleted()
    {
        return $this->container['remote_was_deleted'];
    }

    /**
     * Sets remote_was_deleted
     *
     * @param bool|null $remote_was_deleted Indicates whether or not this object has been deleted in the third party platform.
     *
     * @return self
     */
    public function setRemoteWasDeleted($remote_was_deleted)
    {
        $this->container['remote_was_deleted'] = $remote_was_deleted;

        return $this;
    }

    /**
     * Gets field_mappings
     *
     * @return array<string,mixed>|null
     */
    public function getFieldMappings()
    {
        return $this->container['field_mappings'];
    }

    /**
     * Sets field_mappings
     *
     * @param array<string,mixed>|null $field_mappings field_mappings
     *
     * @return self
     */
    public function setFieldMappings($field_mappings)
    {
        $this->container['field_mappings'] = $field_mappings;

        return $this;
    }

    /**
     * Gets remote_data
     *
     * @return \MergeHRISClient\Model\RemoteData[]|null
     */
    public function getRemoteData()
    {
        return $this->container['remote_data'];
    }

    /**
     * Sets remote_data
     *
     * @param \MergeHRISClient\Model\RemoteData[]|null $remote_data remote_data
     *
     * @return self
     */
    public function setRemoteData($remote_data)
    {
        $this->container['remote_data'] = $remote_data;

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


