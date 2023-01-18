<?php
/**
 * Deduction
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
 * Deduction Class Doc Comment
 *
 * @category Class
 * @description # The Deduction Object ### Description The &#x60;Deduction&#x60; object is used to represent an array of the wages withheld from total earnings for the purpose of paying taxes.  ### Usage Example Fetch from the &#x60;LIST Deductions&#x60; endpoint and filter by &#x60;ID&#x60; to show all deductions.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Deduction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Deduction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'employee_payroll_run' => 'string',
        'name' => 'string',
        'employee_deduction' => 'float',
        'company_deduction' => 'float',
        'remote_was_deleted' => 'bool',
        'field_mappings' => 'array<string,mixed>'
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
        'employee_payroll_run' => 'uuid',
        'name' => null,
        'employee_deduction' => 'float',
        'company_deduction' => 'float',
        'remote_was_deleted' => null,
        'field_mappings' => null
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
        'employee_payroll_run' => 'employee_payroll_run',
        'name' => 'name',
        'employee_deduction' => 'employee_deduction',
        'company_deduction' => 'company_deduction',
        'remote_was_deleted' => 'remote_was_deleted',
        'field_mappings' => 'field_mappings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_payroll_run' => 'setEmployeePayrollRun',
        'name' => 'setName',
        'employee_deduction' => 'setEmployeeDeduction',
        'company_deduction' => 'setCompanyDeduction',
        'remote_was_deleted' => 'setRemoteWasDeleted',
        'field_mappings' => 'setFieldMappings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_payroll_run' => 'getEmployeePayrollRun',
        'name' => 'getName',
        'employee_deduction' => 'getEmployeeDeduction',
        'company_deduction' => 'getCompanyDeduction',
        'remote_was_deleted' => 'getRemoteWasDeleted',
        'field_mappings' => 'getFieldMappings'
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
        $this->container['employee_payroll_run'] = $data['employee_payroll_run'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['employee_deduction'] = $data['employee_deduction'] ?? null;
        $this->container['company_deduction'] = $data['company_deduction'] ?? null;
        $this->container['remote_was_deleted'] = $data['remote_was_deleted'] ?? null;
        $this->container['field_mappings'] = $data['field_mappings'] ?? null;
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
     * @param string|null $name The deduction's name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets employee_deduction
     *
     * @return float|null
     */
    public function getEmployeeDeduction()
    {
        return $this->container['employee_deduction'];
    }

    /**
     * Sets employee_deduction
     *
     * @param float|null $employee_deduction The amount of money that is withheld from an employee's gross pay by the employee.
     *
     * @return self
     */
    public function setEmployeeDeduction($employee_deduction)
    {
        $this->container['employee_deduction'] = $employee_deduction;

        return $this;
    }

    /**
     * Gets company_deduction
     *
     * @return float|null
     */
    public function getCompanyDeduction()
    {
        return $this->container['company_deduction'];
    }

    /**
     * Sets company_deduction
     *
     * @param float|null $company_deduction The amount of money that is withheld on behalf of an employee by the company.
     *
     * @return self
     */
    public function setCompanyDeduction($company_deduction)
    {
        $this->container['company_deduction'] = $company_deduction;

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
     * @param bool|null $remote_was_deleted Indicates whether or not this object has been deleted by third party webhooks.
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


