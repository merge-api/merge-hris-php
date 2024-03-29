<?php
/**
 * ExternalTargetFieldAPIResponse
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
 * ExternalTargetFieldAPIResponse Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalTargetFieldAPIResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalTargetFieldAPIResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'benefit' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'employer_benefit' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'company' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'employee_payroll_run' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'employee' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'employment' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'location' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'payroll_run' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'team' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'time_off' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'time_off_balance' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'bank_info' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'pay_group' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'group' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]',
        'dependent' => '\MergeHRISClient\Model\ExternalTargetFieldAPI[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'benefit' => null,
        'employer_benefit' => null,
        'company' => null,
        'employee_payroll_run' => null,
        'employee' => null,
        'employment' => null,
        'location' => null,
        'payroll_run' => null,
        'team' => null,
        'time_off' => null,
        'time_off_balance' => null,
        'bank_info' => null,
        'pay_group' => null,
        'group' => null,
        'dependent' => null
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
        'benefit' => 'Benefit',
        'employer_benefit' => 'EmployerBenefit',
        'company' => 'Company',
        'employee_payroll_run' => 'EmployeePayrollRun',
        'employee' => 'Employee',
        'employment' => 'Employment',
        'location' => 'Location',
        'payroll_run' => 'PayrollRun',
        'team' => 'Team',
        'time_off' => 'TimeOff',
        'time_off_balance' => 'TimeOffBalance',
        'bank_info' => 'BankInfo',
        'pay_group' => 'PayGroup',
        'group' => 'Group',
        'dependent' => 'Dependent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benefit' => 'setBenefit',
        'employer_benefit' => 'setEmployerBenefit',
        'company' => 'setCompany',
        'employee_payroll_run' => 'setEmployeePayrollRun',
        'employee' => 'setEmployee',
        'employment' => 'setEmployment',
        'location' => 'setLocation',
        'payroll_run' => 'setPayrollRun',
        'team' => 'setTeam',
        'time_off' => 'setTimeOff',
        'time_off_balance' => 'setTimeOffBalance',
        'bank_info' => 'setBankInfo',
        'pay_group' => 'setPayGroup',
        'group' => 'setGroup',
        'dependent' => 'setDependent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benefit' => 'getBenefit',
        'employer_benefit' => 'getEmployerBenefit',
        'company' => 'getCompany',
        'employee_payroll_run' => 'getEmployeePayrollRun',
        'employee' => 'getEmployee',
        'employment' => 'getEmployment',
        'location' => 'getLocation',
        'payroll_run' => 'getPayrollRun',
        'team' => 'getTeam',
        'time_off' => 'getTimeOff',
        'time_off_balance' => 'getTimeOffBalance',
        'bank_info' => 'getBankInfo',
        'pay_group' => 'getPayGroup',
        'group' => 'getGroup',
        'dependent' => 'getDependent'
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
        $this->container['benefit'] = $data['benefit'] ?? null;
        $this->container['employer_benefit'] = $data['employer_benefit'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['employee_payroll_run'] = $data['employee_payroll_run'] ?? null;
        $this->container['employee'] = $data['employee'] ?? null;
        $this->container['employment'] = $data['employment'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['payroll_run'] = $data['payroll_run'] ?? null;
        $this->container['team'] = $data['team'] ?? null;
        $this->container['time_off'] = $data['time_off'] ?? null;
        $this->container['time_off_balance'] = $data['time_off_balance'] ?? null;
        $this->container['bank_info'] = $data['bank_info'] ?? null;
        $this->container['pay_group'] = $data['pay_group'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['dependent'] = $data['dependent'] ?? null;
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
     * Gets benefit
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getBenefit()
    {
        return $this->container['benefit'];
    }

    /**
     * Sets benefit
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $benefit benefit
     *
     * @return self
     */
    public function setBenefit($benefit)
    {
        $this->container['benefit'] = $benefit;

        return $this;
    }

    /**
     * Gets employer_benefit
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getEmployerBenefit()
    {
        return $this->container['employer_benefit'];
    }

    /**
     * Sets employer_benefit
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $employer_benefit employer_benefit
     *
     * @return self
     */
    public function setEmployerBenefit($employer_benefit)
    {
        $this->container['employer_benefit'] = $employer_benefit;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets employee_payroll_run
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getEmployeePayrollRun()
    {
        return $this->container['employee_payroll_run'];
    }

    /**
     * Sets employee_payroll_run
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $employee_payroll_run employee_payroll_run
     *
     * @return self
     */
    public function setEmployeePayrollRun($employee_payroll_run)
    {
        $this->container['employee_payroll_run'] = $employee_payroll_run;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $employee employee
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getEmployment()
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $employment employment
     *
     * @return self
     */
    public function setEmployment($employment)
    {
        $this->container['employment'] = $employment;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets payroll_run
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getPayrollRun()
    {
        return $this->container['payroll_run'];
    }

    /**
     * Sets payroll_run
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $payroll_run payroll_run
     *
     * @return self
     */
    public function setPayrollRun($payroll_run)
    {
        $this->container['payroll_run'] = $payroll_run;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $team team
     *
     * @return self
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets time_off
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getTimeOff()
    {
        return $this->container['time_off'];
    }

    /**
     * Sets time_off
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $time_off time_off
     *
     * @return self
     */
    public function setTimeOff($time_off)
    {
        $this->container['time_off'] = $time_off;

        return $this;
    }

    /**
     * Gets time_off_balance
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getTimeOffBalance()
    {
        return $this->container['time_off_balance'];
    }

    /**
     * Sets time_off_balance
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $time_off_balance time_off_balance
     *
     * @return self
     */
    public function setTimeOffBalance($time_off_balance)
    {
        $this->container['time_off_balance'] = $time_off_balance;

        return $this;
    }

    /**
     * Gets bank_info
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getBankInfo()
    {
        return $this->container['bank_info'];
    }

    /**
     * Sets bank_info
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $bank_info bank_info
     *
     * @return self
     */
    public function setBankInfo($bank_info)
    {
        $this->container['bank_info'] = $bank_info;

        return $this;
    }

    /**
     * Gets pay_group
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getPayGroup()
    {
        return $this->container['pay_group'];
    }

    /**
     * Sets pay_group
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $pay_group pay_group
     *
     * @return self
     */
    public function setPayGroup($pay_group)
    {
        $this->container['pay_group'] = $pay_group;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets dependent
     *
     * @return \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null
     */
    public function getDependent()
    {
        return $this->container['dependent'];
    }

    /**
     * Sets dependent
     *
     * @param \MergeHRISClient\Model\ExternalTargetFieldAPI[]|null $dependent dependent
     *
     * @return self
     */
    public function setDependent($dependent)
    {
        $this->container['dependent'] = $dependent;

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


