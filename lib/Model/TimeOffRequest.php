<?php
/**
 * TimeOffRequest
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
 * TimeOffRequest Class Doc Comment
 *
 * @category Class
 * @description # The TimeOff Object ### Description The &#x60;TimeOff&#x60; object is used to represent all employees&#39; Time Off entries.  ### Usage Example Fetch from the &#x60;LIST TimeOffs&#x60; endpoint and filter by &#x60;ID&#x60; to show all time off requests.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TimeOffRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeOffRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remote_id' => 'string',
        'employee' => 'string',
        'approver' => 'string',
        'status' => '\MergeHRISClient\Model\TimeOffStatusEnum',
        'employee_note' => 'string',
        'units' => '\MergeHRISClient\Model\UnitsEnum',
        'amount' => 'float',
        'request_type' => '\MergeHRISClient\Model\RequestTypeEnum',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'integration_params' => 'array<string,mixed>',
        'linked_account_params' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'remote_id' => null,
        'employee' => 'uuid',
        'approver' => 'uuid',
        'status' => null,
        'employee_note' => null,
        'units' => null,
        'amount' => 'float',
        'request_type' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'integration_params' => null,
        'linked_account_params' => null
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
        'remote_id' => 'remote_id',
        'employee' => 'employee',
        'approver' => 'approver',
        'status' => 'status',
        'employee_note' => 'employee_note',
        'units' => 'units',
        'amount' => 'amount',
        'request_type' => 'request_type',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'integration_params' => 'integration_params',
        'linked_account_params' => 'linked_account_params'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remote_id' => 'setRemoteId',
        'employee' => 'setEmployee',
        'approver' => 'setApprover',
        'status' => 'setStatus',
        'employee_note' => 'setEmployeeNote',
        'units' => 'setUnits',
        'amount' => 'setAmount',
        'request_type' => 'setRequestType',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'integration_params' => 'setIntegrationParams',
        'linked_account_params' => 'setLinkedAccountParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remote_id' => 'getRemoteId',
        'employee' => 'getEmployee',
        'approver' => 'getApprover',
        'status' => 'getStatus',
        'employee_note' => 'getEmployeeNote',
        'units' => 'getUnits',
        'amount' => 'getAmount',
        'request_type' => 'getRequestType',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'integration_params' => 'getIntegrationParams',
        'linked_account_params' => 'getLinkedAccountParams'
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
        $this->container['remote_id'] = $data['remote_id'] ?? null;
        $this->container['employee'] = $data['employee'] ?? null;
        $this->container['approver'] = $data['approver'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['employee_note'] = $data['employee_note'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['request_type'] = $data['request_type'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['integration_params'] = $data['integration_params'] ?? null;
        $this->container['linked_account_params'] = $data['linked_account_params'] ?? null;
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
     * Gets employee
     *
     * @return string|null
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param string|null $employee The employee requesting time off.
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets approver
     *
     * @return string|null
     */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
     * Sets approver
     *
     * @param string|null $approver The Merge ID of the employee with the ability to approve the time off request.
     *
     * @return self
     */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;

        return $this;
    }

    /**
     * Gets status
     *
     * @return TimeOffStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param TimeOffStatusEnum|null $status The status of this time off request.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets employee_note
     *
     * @return string|null
     */
    public function getEmployeeNote()
    {
        return $this->container['employee_note'];
    }

    /**
     * Sets employee_note
     *
     * @param string|null $employee_note The employee note for this time off request.
     *
     * @return self
     */
    public function setEmployeeNote($employee_note)
    {
        $this->container['employee_note'] = $employee_note;

        return $this;
    }

    /**
     * Gets units
     *
     * @return UnitsEnum|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param UnitsEnum|null $units The measurement that the third-party integration uses to count time requested.
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The time off quantity measured by the prescribed “units”.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return RequestTypeEnum|null
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param RequestTypeEnum|null $request_type The type of time off request.
     *
     * @return self
     */
    public function setRequestType($request_type)
    {
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time The day and time of the start of the time requested off.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time The day and time of the end of the time requested off.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets integration_params
     *
     * @return array<string,mixed>|null
     */
    public function getIntegrationParams()
    {
        return $this->container['integration_params'];
    }

    /**
     * Sets integration_params
     *
     * @param array<string,mixed>|null $integration_params integration_params
     *
     * @return self
     */
    public function setIntegrationParams($integration_params)
    {
        $this->container['integration_params'] = $integration_params;

        return $this;
    }

    /**
     * Gets linked_account_params
     *
     * @return array<string,mixed>|null
     */
    public function getLinkedAccountParams()
    {
        return $this->container['linked_account_params'];
    }

    /**
     * Sets linked_account_params
     *
     * @param array<string,mixed>|null $linked_account_params linked_account_params
     *
     * @return self
     */
    public function setLinkedAccountParams($linked_account_params)
    {
        $this->container['linked_account_params'] = $linked_account_params;

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


