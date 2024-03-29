<?php
/**
 * Employment
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
 * Employment Class Doc Comment
 *
 * @category Class
 * @description # The Employment Object ### Description The &#x60;Employment&#x60; object is used to represent a job position at a company.  Please note: When there is a change in pay or title, integrations with historical data will create new Employment objects while integrations without historical data will update existing ones.  ### Usage Example Fetch from the &#x60;LIST Employments&#x60; endpoint and filter by &#x60;ID&#x60; to show all employees.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Employment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employment';

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
        'employee' => 'string',
        'job_title' => 'string',
        'pay_rate' => 'double',
        'pay_period' => '\MergeHRISClient\Model\PayPeriodEnum',
        'pay_frequency' => '\MergeHRISClient\Model\PayFrequencyEnum',
        'pay_currency' => '\MergeHRISClient\Model\PayCurrencyEnum',
        'pay_group' => 'string',
        'flsa_status' => '\MergeHRISClient\Model\FlsaStatusEnum',
        'effective_date' => '\DateTime',
        'employment_type' => '\MergeHRISClient\Model\EmploymentTypeEnum',
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
        'employee' => 'uuid',
        'job_title' => null,
        'pay_rate' => 'double',
        'pay_period' => null,
        'pay_frequency' => null,
        'pay_currency' => null,
        'pay_group' => 'uuid',
        'flsa_status' => null,
        'effective_date' => 'date-time',
        'employment_type' => null,
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
        'employee' => 'employee',
        'job_title' => 'job_title',
        'pay_rate' => 'pay_rate',
        'pay_period' => 'pay_period',
        'pay_frequency' => 'pay_frequency',
        'pay_currency' => 'pay_currency',
        'pay_group' => 'pay_group',
        'flsa_status' => 'flsa_status',
        'effective_date' => 'effective_date',
        'employment_type' => 'employment_type',
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
        'employee' => 'setEmployee',
        'job_title' => 'setJobTitle',
        'pay_rate' => 'setPayRate',
        'pay_period' => 'setPayPeriod',
        'pay_frequency' => 'setPayFrequency',
        'pay_currency' => 'setPayCurrency',
        'pay_group' => 'setPayGroup',
        'flsa_status' => 'setFlsaStatus',
        'effective_date' => 'setEffectiveDate',
        'employment_type' => 'setEmploymentType',
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
        'employee' => 'getEmployee',
        'job_title' => 'getJobTitle',
        'pay_rate' => 'getPayRate',
        'pay_period' => 'getPayPeriod',
        'pay_frequency' => 'getPayFrequency',
        'pay_currency' => 'getPayCurrency',
        'pay_group' => 'getPayGroup',
        'flsa_status' => 'getFlsaStatus',
        'effective_date' => 'getEffectiveDate',
        'employment_type' => 'getEmploymentType',
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
        $this->container['employee'] = $data['employee'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['pay_rate'] = $data['pay_rate'] ?? null;
        $this->container['pay_period'] = $data['pay_period'] ?? null;
        $this->container['pay_frequency'] = $data['pay_frequency'] ?? null;
        $this->container['pay_currency'] = $data['pay_currency'] ?? null;
        $this->container['pay_group'] = $data['pay_group'] ?? null;
        $this->container['flsa_status'] = $data['flsa_status'] ?? null;
        $this->container['effective_date'] = $data['effective_date'] ?? null;
        $this->container['employment_type'] = $data['employment_type'] ?? null;
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
     * @param string|null $employee The employee holding this position.
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title The position's title.
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets pay_rate
     *
     * @return double|null
     */
    public function getPayRate()
    {
        return $this->container['pay_rate'];
    }

    /**
     * Sets pay_rate
     *
     * @param double|null $pay_rate The position's pay rate in dollars.
     *
     * @return self
     */
    public function setPayRate($pay_rate)
    {
        $this->container['pay_rate'] = $pay_rate;

        return $this;
    }

    /**
     * Gets pay_period
     *
     * @return PayPeriodEnum|null
     */
    public function getPayPeriod()
    {
        return $this->container['pay_period'];
    }

    /**
     * Sets pay_period
     *
     * @param PayPeriodEnum|null $pay_period The time period this pay rate encompasses.  * `HOUR` - HOUR * `DAY` - DAY * `WEEK` - WEEK * `EVERY_TWO_WEEKS` - EVERY_TWO_WEEKS * `SEMIMONTHLY` - SEMIMONTHLY * `MONTH` - MONTH * `QUARTER` - QUARTER * `EVERY_SIX_MONTHS` - EVERY_SIX_MONTHS * `YEAR` - YEAR
     *
     * @return self
     */
    public function setPayPeriod($pay_period)
    {
        $this->container['pay_period'] = $pay_period;

        return $this;
    }

    /**
     * Gets pay_frequency
     *
     * @return PayFrequencyEnum|null
     */
    public function getPayFrequency()
    {
        return $this->container['pay_frequency'];
    }

    /**
     * Sets pay_frequency
     *
     * @param PayFrequencyEnum|null $pay_frequency The position's pay frequency.  * `WEEKLY` - WEEKLY * `BIWEEKLY` - BIWEEKLY * `MONTHLY` - MONTHLY * `QUARTERLY` - QUARTERLY * `SEMIANNUALLY` - SEMIANNUALLY * `ANNUALLY` - ANNUALLY * `THIRTEEN-MONTHLY` - THIRTEEN-MONTHLY * `PRO_RATA` - PRO_RATA * `SEMIMONTHLY` - SEMIMONTHLY
     *
     * @return self
     */
    public function setPayFrequency($pay_frequency)
    {
        $this->container['pay_frequency'] = $pay_frequency;

        return $this;
    }

    /**
     * Gets pay_currency
     *
     * @return PayCurrencyEnum|null
     */
    public function getPayCurrency()
    {
        return $this->container['pay_currency'];
    }

    /**
     * Sets pay_currency
     *
     * @param PayCurrencyEnum|null $pay_currency The position's currency code.  * `XUA` - ADB Unit of Account * `AFN` - Afghan Afghani * `AFA` - Afghan Afghani (1927–2002) * `ALL` - Albanian Lek * `ALK` - Albanian Lek (1946–1965) * `DZD` - Algerian Dinar * `ADP` - Andorran Peseta * `AOA` - Angolan Kwanza * `AOK` - Angolan Kwanza (1977–1991) * `AON` - Angolan New Kwanza (1990–2000) * `AOR` - Angolan Readjusted Kwanza (1995–1999) * `ARA` - Argentine Austral * `ARS` - Argentine Peso * `ARM` - Argentine Peso (1881–1970) * `ARP` - Argentine Peso (1983–1985) * `ARL` - Argentine Peso Ley (1970–1983) * `AMD` - Armenian Dram * `AWG` - Aruban Florin * `AUD` - Australian Dollar * `ATS` - Austrian Schilling * `AZN` - Azerbaijani Manat * `AZM` - Azerbaijani Manat (1993–2006) * `BSD` - Bahamian Dollar * `BHD` - Bahraini Dinar * `BDT` - Bangladeshi Taka * `BBD` - Barbadian Dollar * `BYN` - Belarusian Ruble * `BYB` - Belarusian Ruble (1994–1999) * `BYR` - Belarusian Ruble (2000–2016) * `BEF` - Belgian Franc * `BEC` - Belgian Franc (convertible) * `BEL` - Belgian Franc (financial) * `BZD` - Belize Dollar * `BMD` - Bermudan Dollar * `BTN` - Bhutanese Ngultrum * `BOB` - Bolivian Boliviano * `BOL` - Bolivian Boliviano (1863–1963) * `BOV` - Bolivian Mvdol * `BOP` - Bolivian Peso * `BAM` - Bosnia-Herzegovina Convertible Mark * `BAD` - Bosnia-Herzegovina Dinar (1992–1994) * `BAN` - Bosnia-Herzegovina New Dinar (1994–1997) * `BWP` - Botswanan Pula * `BRC` - Brazilian Cruzado (1986–1989) * `BRZ` - Brazilian Cruzeiro (1942–1967) * `BRE` - Brazilian Cruzeiro (1990–1993) * `BRR` - Brazilian Cruzeiro (1993–1994) * `BRN` - Brazilian New Cruzado (1989–1990) * `BRB` - Brazilian New Cruzeiro (1967–1986) * `BRL` - Brazilian Real * `GBP` - British Pound * `BND` - Brunei Dollar * `BGL` - Bulgarian Hard Lev * `BGN` - Bulgarian Lev * `BGO` - Bulgarian Lev (1879–1952) * `BGM` - Bulgarian Socialist Lev * `BUK` - Burmese Kyat * `BIF` - Burundian Franc * `XPF` - CFP Franc * `KHR` - Cambodian Riel * `CAD` - Canadian Dollar * `CVE` - Cape Verdean Escudo * `KYD` - Cayman Islands Dollar * `XAF` - Central African CFA Franc * `CLE` - Chilean Escudo * `CLP` - Chilean Peso * `CLF` - Chilean Unit of Account (UF) * `CNX` - Chinese People’s Bank Dollar * `CNY` - Chinese Yuan * `CNH` - Chinese Yuan (offshore) * `COP` - Colombian Peso * `COU` - Colombian Real Value Unit * `KMF` - Comorian Franc * `CDF` - Congolese Franc * `CRC` - Costa Rican Colón * `HRD` - Croatian Dinar * `HRK` - Croatian Kuna * `CUC` - Cuban Convertible Peso * `CUP` - Cuban Peso * `CYP` - Cypriot Pound * `CZK` - Czech Koruna * `CSK` - Czechoslovak Hard Koruna * `DKK` - Danish Krone * `DJF` - Djiboutian Franc * `DOP` - Dominican Peso * `NLG` - Dutch Guilder * `XCD` - East Caribbean Dollar * `DDM` - East German Mark * `ECS` - Ecuadorian Sucre * `ECV` - Ecuadorian Unit of Constant Value * `EGP` - Egyptian Pound * `GQE` - Equatorial Guinean Ekwele * `ERN` - Eritrean Nakfa * `EEK` - Estonian Kroon * `ETB` - Ethiopian Birr * `EUR` - Euro * `XBA` - European Composite Unit * `XEU` - European Currency Unit * `XBB` - European Monetary Unit * `XBC` - European Unit of Account (XBC) * `XBD` - European Unit of Account (XBD) * `FKP` - Falkland Islands Pound * `FJD` - Fijian Dollar * `FIM` - Finnish Markka * `FRF` - French Franc * `XFO` - French Gold Franc * `XFU` - French UIC-Franc * `GMD` - Gambian Dalasi * `GEK` - Georgian Kupon Larit * `GEL` - Georgian Lari * `DEM` - German Mark * `GHS` - Ghanaian Cedi * `GHC` - Ghanaian Cedi (1979–2007) * `GIP` - Gibraltar Pound * `XAU` - Gold * `GRD` - Greek Drachma * `GTQ` - Guatemalan Quetzal * `GWP` - Guinea-Bissau Peso * `GNF` - Guinean Franc * `GNS` - Guinean Syli * `GYD` - Guyanaese Dollar * `HTG` - Haitian Gourde * `HNL` - Honduran Lempira * `HKD` - Hong Kong Dollar * `HUF` - Hungarian Forint * `IMP` - IMP * `ISK` - Icelandic Króna * `ISJ` - Icelandic Króna (1918–1981) * `INR` - Indian Rupee * `IDR` - Indonesian Rupiah * `IRR` - Iranian Rial * `IQD` - Iraqi Dinar * `IEP` - Irish Pound * `ILS` - Israeli New Shekel * `ILP` - Israeli Pound * `ILR` - Israeli Shekel (1980–1985) * `ITL` - Italian Lira * `JMD` - Jamaican Dollar * `JPY` - Japanese Yen * `JOD` - Jordanian Dinar * `KZT` - Kazakhstani Tenge * `KES` - Kenyan Shilling * `KWD` - Kuwaiti Dinar * `KGS` - Kyrgystani Som * `LAK` - Laotian Kip * `LVL` - Latvian Lats * `LVR` - Latvian Ruble * `LBP` - Lebanese Pound * `LSL` - Lesotho Loti * `LRD` - Liberian Dollar * `LYD` - Libyan Dinar * `LTL` - Lithuanian Litas * `LTT` - Lithuanian Talonas * `LUL` - Luxembourg Financial Franc * `LUC` - Luxembourgian Convertible Franc * `LUF` - Luxembourgian Franc * `MOP` - Macanese Pataca * `MKD` - Macedonian Denar * `MKN` - Macedonian Denar (1992–1993) * `MGA` - Malagasy Ariary * `MGF` - Malagasy Franc * `MWK` - Malawian Kwacha * `MYR` - Malaysian Ringgit * `MVR` - Maldivian Rufiyaa * `MVP` - Maldivian Rupee (1947–1981) * `MLF` - Malian Franc * `MTL` - Maltese Lira * `MTP` - Maltese Pound * `MRU` - Mauritanian Ouguiya * `MRO` - Mauritanian Ouguiya (1973–2017) * `MUR` - Mauritian Rupee * `MXV` - Mexican Investment Unit * `MXN` - Mexican Peso * `MXP` - Mexican Silver Peso (1861–1992) * `MDC` - Moldovan Cupon * `MDL` - Moldovan Leu * `MCF` - Monegasque Franc * `MNT` - Mongolian Tugrik * `MAD` - Moroccan Dirham * `MAF` - Moroccan Franc * `MZE` - Mozambican Escudo * `MZN` - Mozambican Metical * `MZM` - Mozambican Metical (1980–2006) * `MMK` - Myanmar Kyat * `NAD` - Namibian Dollar * `NPR` - Nepalese Rupee * `ANG` - Netherlands Antillean Guilder * `TWD` - New Taiwan Dollar * `NZD` - New Zealand Dollar * `NIO` - Nicaraguan Córdoba * `NIC` - Nicaraguan Córdoba (1988–1991) * `NGN` - Nigerian Naira * `KPW` - North Korean Won * `NOK` - Norwegian Krone * `OMR` - Omani Rial * `PKR` - Pakistani Rupee * `XPD` - Palladium * `PAB` - Panamanian Balboa * `PGK` - Papua New Guinean Kina * `PYG` - Paraguayan Guarani * `PEI` - Peruvian Inti * `PEN` - Peruvian Sol * `PES` - Peruvian Sol (1863–1965) * `PHP` - Philippine Peso * `XPT` - Platinum * `PLN` - Polish Zloty * `PLZ` - Polish Zloty (1950–1995) * `PTE` - Portuguese Escudo * `GWE` - Portuguese Guinea Escudo * `QAR` - Qatari Rial * `XRE` - RINET Funds * `RHD` - Rhodesian Dollar * `RON` - Romanian Leu * `ROL` - Romanian Leu (1952–2006) * `RUB` - Russian Ruble * `RUR` - Russian Ruble (1991–1998) * `RWF` - Rwandan Franc * `SVC` - Salvadoran Colón * `WST` - Samoan Tala * `SAR` - Saudi Riyal * `RSD` - Serbian Dinar * `CSD` - Serbian Dinar (2002–2006) * `SCR` - Seychellois Rupee * `SLL` - Sierra Leonean Leone * `XAG` - Silver * `SGD` - Singapore Dollar * `SKK` - Slovak Koruna * `SIT` - Slovenian Tolar * `SBD` - Solomon Islands Dollar * `SOS` - Somali Shilling * `ZAR` - South African Rand * `ZAL` - South African Rand (financial) * `KRH` - South Korean Hwan (1953–1962) * `KRW` - South Korean Won * `KRO` - South Korean Won (1945–1953) * `SSP` - South Sudanese Pound * `SUR` - Soviet Rouble * `ESP` - Spanish Peseta * `ESA` - Spanish Peseta (A account) * `ESB` - Spanish Peseta (convertible account) * `XDR` - Special Drawing Rights * `LKR` - Sri Lankan Rupee * `SHP` - St. Helena Pound * `XSU` - Sucre * `SDD` - Sudanese Dinar (1992–2007) * `SDG` - Sudanese Pound * `SDP` - Sudanese Pound (1957–1998) * `SRD` - Surinamese Dollar * `SRG` - Surinamese Guilder * `SZL` - Swazi Lilangeni * `SEK` - Swedish Krona * `CHF` - Swiss Franc * `SYP` - Syrian Pound * `STN` - São Tomé & Príncipe Dobra * `STD` - São Tomé & Príncipe Dobra (1977–2017) * `TVD` - TVD * `TJR` - Tajikistani Ruble * `TJS` - Tajikistani Somoni * `TZS` - Tanzanian Shilling * `XTS` - Testing Currency Code * `THB` - Thai Baht * `XXX` - The codes assigned for transactions where no currency is involved * `TPE` - Timorese Escudo * `TOP` - Tongan Paʻanga * `TTD` - Trinidad & Tobago Dollar * `TND` - Tunisian Dinar * `TRY` - Turkish Lira * `TRL` - Turkish Lira (1922–2005) * `TMT` - Turkmenistani Manat * `TMM` - Turkmenistani Manat (1993–2009) * `USD` - US Dollar * `USN` - US Dollar (Next day) * `USS` - US Dollar (Same day) * `UGX` - Ugandan Shilling * `UGS` - Ugandan Shilling (1966–1987) * `UAH` - Ukrainian Hryvnia * `UAK` - Ukrainian Karbovanets * `AED` - United Arab Emirates Dirham * `UYW` - Uruguayan Nominal Wage Index Unit * `UYU` - Uruguayan Peso * `UYP` - Uruguayan Peso (1975–1993) * `UYI` - Uruguayan Peso (Indexed Units) * `UZS` - Uzbekistani Som * `VUV` - Vanuatu Vatu * `VES` - Venezuelan Bolívar * `VEB` - Venezuelan Bolívar (1871–2008) * `VEF` - Venezuelan Bolívar (2008–2018) * `VND` - Vietnamese Dong * `VNN` - Vietnamese Dong (1978–1985) * `CHE` - WIR Euro * `CHW` - WIR Franc * `XOF` - West African CFA Franc * `YDD` - Yemeni Dinar * `YER` - Yemeni Rial * `YUN` - Yugoslavian Convertible Dinar (1990–1992) * `YUD` - Yugoslavian Hard Dinar (1966–1990) * `YUM` - Yugoslavian New Dinar (1994–2002) * `YUR` - Yugoslavian Reformed Dinar (1992–1993) * `ZWN` - ZWN * `ZRN` - Zairean New Zaire (1993–1998) * `ZRZ` - Zairean Zaire (1971–1993) * `ZMW` - Zambian Kwacha * `ZMK` - Zambian Kwacha (1968–2012) * `ZWD` - Zimbabwean Dollar (1980–2008) * `ZWR` - Zimbabwean Dollar (2008) * `ZWL` - Zimbabwean Dollar (2009)
     *
     * @return self
     */
    public function setPayCurrency($pay_currency)
    {
        $this->container['pay_currency'] = $pay_currency;

        return $this;
    }

    /**
     * Gets pay_group
     *
     * @return string|null
     */
    public function getPayGroup()
    {
        return $this->container['pay_group'];
    }

    /**
     * Sets pay_group
     *
     * @param string|null $pay_group The employment's pay group
     *
     * @return self
     */
    public function setPayGroup($pay_group)
    {
        $this->container['pay_group'] = $pay_group;

        return $this;
    }

    /**
     * Gets flsa_status
     *
     * @return FlsaStatusEnum|null
     */
    public function getFlsaStatus()
    {
        return $this->container['flsa_status'];
    }

    /**
     * Sets flsa_status
     *
     * @param FlsaStatusEnum|null $flsa_status The position's FLSA status.  * `EXEMPT` - EXEMPT * `SALARIED_NONEXEMPT` - SALARIED_NONEXEMPT * `NONEXEMPT` - NONEXEMPT * `OWNER` - OWNER
     *
     * @return self
     */
    public function setFlsaStatus($flsa_status)
    {
        $this->container['flsa_status'] = $flsa_status;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime|null $effective_date The position's effective date.
     *
     * @return self
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets employment_type
     *
     * @return EmploymentTypeEnum|null
     */
    public function getEmploymentType()
    {
        return $this->container['employment_type'];
    }

    /**
     * Sets employment_type
     *
     * @param EmploymentTypeEnum|null $employment_type The position's type of employment.  * `FULL_TIME` - FULL_TIME * `PART_TIME` - PART_TIME * `INTERN` - INTERN * `CONTRACTOR` - CONTRACTOR * `FREELANCE` - FREELANCE
     *
     * @return self
     */
    public function setEmploymentType($employment_type)
    {
        $this->container['employment_type'] = $employment_type;

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


