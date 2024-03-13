<?php
/**
 * PayCurrencyEnum
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
use \MergeHRISClient\ObjectSerializer;

/**
 * PayCurrencyEnum Class Doc Comment
 *
 * @category Class
 * @description * &#x60;XUA&#x60; - ADB Unit of Account * &#x60;AFN&#x60; - Afghan Afghani * &#x60;AFA&#x60; - Afghan Afghani (1927–2002) * &#x60;ALL&#x60; - Albanian Lek * &#x60;ALK&#x60; - Albanian Lek (1946–1965) * &#x60;DZD&#x60; - Algerian Dinar * &#x60;ADP&#x60; - Andorran Peseta * &#x60;AOA&#x60; - Angolan Kwanza * &#x60;AOK&#x60; - Angolan Kwanza (1977–1991) * &#x60;AON&#x60; - Angolan New Kwanza (1990–2000) * &#x60;AOR&#x60; - Angolan Readjusted Kwanza (1995–1999) * &#x60;ARA&#x60; - Argentine Austral * &#x60;ARS&#x60; - Argentine Peso * &#x60;ARM&#x60; - Argentine Peso (1881–1970) * &#x60;ARP&#x60; - Argentine Peso (1983–1985) * &#x60;ARL&#x60; - Argentine Peso Ley (1970–1983) * &#x60;AMD&#x60; - Armenian Dram * &#x60;AWG&#x60; - Aruban Florin * &#x60;AUD&#x60; - Australian Dollar * &#x60;ATS&#x60; - Austrian Schilling * &#x60;AZN&#x60; - Azerbaijani Manat * &#x60;AZM&#x60; - Azerbaijani Manat (1993–2006) * &#x60;BSD&#x60; - Bahamian Dollar * &#x60;BHD&#x60; - Bahraini Dinar * &#x60;BDT&#x60; - Bangladeshi Taka * &#x60;BBD&#x60; - Barbadian Dollar * &#x60;BYN&#x60; - Belarusian Ruble * &#x60;BYB&#x60; - Belarusian Ruble (1994–1999) * &#x60;BYR&#x60; - Belarusian Ruble (2000–2016) * &#x60;BEF&#x60; - Belgian Franc * &#x60;BEC&#x60; - Belgian Franc (convertible) * &#x60;BEL&#x60; - Belgian Franc (financial) * &#x60;BZD&#x60; - Belize Dollar * &#x60;BMD&#x60; - Bermudan Dollar * &#x60;BTN&#x60; - Bhutanese Ngultrum * &#x60;BOB&#x60; - Bolivian Boliviano * &#x60;BOL&#x60; - Bolivian Boliviano (1863–1963) * &#x60;BOV&#x60; - Bolivian Mvdol * &#x60;BOP&#x60; - Bolivian Peso * &#x60;BAM&#x60; - Bosnia-Herzegovina Convertible Mark * &#x60;BAD&#x60; - Bosnia-Herzegovina Dinar (1992–1994) * &#x60;BAN&#x60; - Bosnia-Herzegovina New Dinar (1994–1997) * &#x60;BWP&#x60; - Botswanan Pula * &#x60;BRC&#x60; - Brazilian Cruzado (1986–1989) * &#x60;BRZ&#x60; - Brazilian Cruzeiro (1942–1967) * &#x60;BRE&#x60; - Brazilian Cruzeiro (1990–1993) * &#x60;BRR&#x60; - Brazilian Cruzeiro (1993–1994) * &#x60;BRN&#x60; - Brazilian New Cruzado (1989–1990) * &#x60;BRB&#x60; - Brazilian New Cruzeiro (1967–1986) * &#x60;BRL&#x60; - Brazilian Real * &#x60;GBP&#x60; - British Pound * &#x60;BND&#x60; - Brunei Dollar * &#x60;BGL&#x60; - Bulgarian Hard Lev * &#x60;BGN&#x60; - Bulgarian Lev * &#x60;BGO&#x60; - Bulgarian Lev (1879–1952) * &#x60;BGM&#x60; - Bulgarian Socialist Lev * &#x60;BUK&#x60; - Burmese Kyat * &#x60;BIF&#x60; - Burundian Franc * &#x60;XPF&#x60; - CFP Franc * &#x60;KHR&#x60; - Cambodian Riel * &#x60;CAD&#x60; - Canadian Dollar * &#x60;CVE&#x60; - Cape Verdean Escudo * &#x60;KYD&#x60; - Cayman Islands Dollar * &#x60;XAF&#x60; - Central African CFA Franc * &#x60;CLE&#x60; - Chilean Escudo * &#x60;CLP&#x60; - Chilean Peso * &#x60;CLF&#x60; - Chilean Unit of Account (UF) * &#x60;CNX&#x60; - Chinese People’s Bank Dollar * &#x60;CNY&#x60; - Chinese Yuan * &#x60;CNH&#x60; - Chinese Yuan (offshore) * &#x60;COP&#x60; - Colombian Peso * &#x60;COU&#x60; - Colombian Real Value Unit * &#x60;KMF&#x60; - Comorian Franc * &#x60;CDF&#x60; - Congolese Franc * &#x60;CRC&#x60; - Costa Rican Colón * &#x60;HRD&#x60; - Croatian Dinar * &#x60;HRK&#x60; - Croatian Kuna * &#x60;CUC&#x60; - Cuban Convertible Peso * &#x60;CUP&#x60; - Cuban Peso * &#x60;CYP&#x60; - Cypriot Pound * &#x60;CZK&#x60; - Czech Koruna * &#x60;CSK&#x60; - Czechoslovak Hard Koruna * &#x60;DKK&#x60; - Danish Krone * &#x60;DJF&#x60; - Djiboutian Franc * &#x60;DOP&#x60; - Dominican Peso * &#x60;NLG&#x60; - Dutch Guilder * &#x60;XCD&#x60; - East Caribbean Dollar * &#x60;DDM&#x60; - East German Mark * &#x60;ECS&#x60; - Ecuadorian Sucre * &#x60;ECV&#x60; - Ecuadorian Unit of Constant Value * &#x60;EGP&#x60; - Egyptian Pound * &#x60;GQE&#x60; - Equatorial Guinean Ekwele * &#x60;ERN&#x60; - Eritrean Nakfa * &#x60;EEK&#x60; - Estonian Kroon * &#x60;ETB&#x60; - Ethiopian Birr * &#x60;EUR&#x60; - Euro * &#x60;XBA&#x60; - European Composite Unit * &#x60;XEU&#x60; - European Currency Unit * &#x60;XBB&#x60; - European Monetary Unit * &#x60;XBC&#x60; - European Unit of Account (XBC) * &#x60;XBD&#x60; - European Unit of Account (XBD) * &#x60;FKP&#x60; - Falkland Islands Pound * &#x60;FJD&#x60; - Fijian Dollar * &#x60;FIM&#x60; - Finnish Markka * &#x60;FRF&#x60; - French Franc * &#x60;XFO&#x60; - French Gold Franc * &#x60;XFU&#x60; - French UIC-Franc * &#x60;GMD&#x60; - Gambian Dalasi * &#x60;GEK&#x60; - Georgian Kupon Larit * &#x60;GEL&#x60; - Georgian Lari * &#x60;DEM&#x60; - German Mark * &#x60;GHS&#x60; - Ghanaian Cedi * &#x60;GHC&#x60; - Ghanaian Cedi (1979–2007) * &#x60;GIP&#x60; - Gibraltar Pound * &#x60;XAU&#x60; - Gold * &#x60;GRD&#x60; - Greek Drachma * &#x60;GTQ&#x60; - Guatemalan Quetzal * &#x60;GWP&#x60; - Guinea-Bissau Peso * &#x60;GNF&#x60; - Guinean Franc * &#x60;GNS&#x60; - Guinean Syli * &#x60;GYD&#x60; - Guyanaese Dollar * &#x60;HTG&#x60; - Haitian Gourde * &#x60;HNL&#x60; - Honduran Lempira * &#x60;HKD&#x60; - Hong Kong Dollar * &#x60;HUF&#x60; - Hungarian Forint * &#x60;IMP&#x60; - IMP * &#x60;ISK&#x60; - Icelandic Króna * &#x60;ISJ&#x60; - Icelandic Króna (1918–1981) * &#x60;INR&#x60; - Indian Rupee * &#x60;IDR&#x60; - Indonesian Rupiah * &#x60;IRR&#x60; - Iranian Rial * &#x60;IQD&#x60; - Iraqi Dinar * &#x60;IEP&#x60; - Irish Pound * &#x60;ILS&#x60; - Israeli New Shekel * &#x60;ILP&#x60; - Israeli Pound * &#x60;ILR&#x60; - Israeli Shekel (1980–1985) * &#x60;ITL&#x60; - Italian Lira * &#x60;JMD&#x60; - Jamaican Dollar * &#x60;JPY&#x60; - Japanese Yen * &#x60;JOD&#x60; - Jordanian Dinar * &#x60;KZT&#x60; - Kazakhstani Tenge * &#x60;KES&#x60; - Kenyan Shilling * &#x60;KWD&#x60; - Kuwaiti Dinar * &#x60;KGS&#x60; - Kyrgystani Som * &#x60;LAK&#x60; - Laotian Kip * &#x60;LVL&#x60; - Latvian Lats * &#x60;LVR&#x60; - Latvian Ruble * &#x60;LBP&#x60; - Lebanese Pound * &#x60;LSL&#x60; - Lesotho Loti * &#x60;LRD&#x60; - Liberian Dollar * &#x60;LYD&#x60; - Libyan Dinar * &#x60;LTL&#x60; - Lithuanian Litas * &#x60;LTT&#x60; - Lithuanian Talonas * &#x60;LUL&#x60; - Luxembourg Financial Franc * &#x60;LUC&#x60; - Luxembourgian Convertible Franc * &#x60;LUF&#x60; - Luxembourgian Franc * &#x60;MOP&#x60; - Macanese Pataca * &#x60;MKD&#x60; - Macedonian Denar * &#x60;MKN&#x60; - Macedonian Denar (1992–1993) * &#x60;MGA&#x60; - Malagasy Ariary * &#x60;MGF&#x60; - Malagasy Franc * &#x60;MWK&#x60; - Malawian Kwacha * &#x60;MYR&#x60; - Malaysian Ringgit * &#x60;MVR&#x60; - Maldivian Rufiyaa * &#x60;MVP&#x60; - Maldivian Rupee (1947–1981) * &#x60;MLF&#x60; - Malian Franc * &#x60;MTL&#x60; - Maltese Lira * &#x60;MTP&#x60; - Maltese Pound * &#x60;MRU&#x60; - Mauritanian Ouguiya * &#x60;MRO&#x60; - Mauritanian Ouguiya (1973–2017) * &#x60;MUR&#x60; - Mauritian Rupee * &#x60;MXV&#x60; - Mexican Investment Unit * &#x60;MXN&#x60; - Mexican Peso * &#x60;MXP&#x60; - Mexican Silver Peso (1861–1992) * &#x60;MDC&#x60; - Moldovan Cupon * &#x60;MDL&#x60; - Moldovan Leu * &#x60;MCF&#x60; - Monegasque Franc * &#x60;MNT&#x60; - Mongolian Tugrik * &#x60;MAD&#x60; - Moroccan Dirham * &#x60;MAF&#x60; - Moroccan Franc * &#x60;MZE&#x60; - Mozambican Escudo * &#x60;MZN&#x60; - Mozambican Metical * &#x60;MZM&#x60; - Mozambican Metical (1980–2006) * &#x60;MMK&#x60; - Myanmar Kyat * &#x60;NAD&#x60; - Namibian Dollar * &#x60;NPR&#x60; - Nepalese Rupee * &#x60;ANG&#x60; - Netherlands Antillean Guilder * &#x60;TWD&#x60; - New Taiwan Dollar * &#x60;NZD&#x60; - New Zealand Dollar * &#x60;NIO&#x60; - Nicaraguan Córdoba * &#x60;NIC&#x60; - Nicaraguan Córdoba (1988–1991) * &#x60;NGN&#x60; - Nigerian Naira * &#x60;KPW&#x60; - North Korean Won * &#x60;NOK&#x60; - Norwegian Krone * &#x60;OMR&#x60; - Omani Rial * &#x60;PKR&#x60; - Pakistani Rupee * &#x60;XPD&#x60; - Palladium * &#x60;PAB&#x60; - Panamanian Balboa * &#x60;PGK&#x60; - Papua New Guinean Kina * &#x60;PYG&#x60; - Paraguayan Guarani * &#x60;PEI&#x60; - Peruvian Inti * &#x60;PEN&#x60; - Peruvian Sol * &#x60;PES&#x60; - Peruvian Sol (1863–1965) * &#x60;PHP&#x60; - Philippine Peso * &#x60;XPT&#x60; - Platinum * &#x60;PLN&#x60; - Polish Zloty * &#x60;PLZ&#x60; - Polish Zloty (1950–1995) * &#x60;PTE&#x60; - Portuguese Escudo * &#x60;GWE&#x60; - Portuguese Guinea Escudo * &#x60;QAR&#x60; - Qatari Rial * &#x60;XRE&#x60; - RINET Funds * &#x60;RHD&#x60; - Rhodesian Dollar * &#x60;RON&#x60; - Romanian Leu * &#x60;ROL&#x60; - Romanian Leu (1952–2006) * &#x60;RUB&#x60; - Russian Ruble * &#x60;RUR&#x60; - Russian Ruble (1991–1998) * &#x60;RWF&#x60; - Rwandan Franc * &#x60;SVC&#x60; - Salvadoran Colón * &#x60;WST&#x60; - Samoan Tala * &#x60;SAR&#x60; - Saudi Riyal * &#x60;RSD&#x60; - Serbian Dinar * &#x60;CSD&#x60; - Serbian Dinar (2002–2006) * &#x60;SCR&#x60; - Seychellois Rupee * &#x60;SLL&#x60; - Sierra Leonean Leone * &#x60;XAG&#x60; - Silver * &#x60;SGD&#x60; - Singapore Dollar * &#x60;SKK&#x60; - Slovak Koruna * &#x60;SIT&#x60; - Slovenian Tolar * &#x60;SBD&#x60; - Solomon Islands Dollar * &#x60;SOS&#x60; - Somali Shilling * &#x60;ZAR&#x60; - South African Rand * &#x60;ZAL&#x60; - South African Rand (financial) * &#x60;KRH&#x60; - South Korean Hwan (1953–1962) * &#x60;KRW&#x60; - South Korean Won * &#x60;KRO&#x60; - South Korean Won (1945–1953) * &#x60;SSP&#x60; - South Sudanese Pound * &#x60;SUR&#x60; - Soviet Rouble * &#x60;ESP&#x60; - Spanish Peseta * &#x60;ESA&#x60; - Spanish Peseta (A account) * &#x60;ESB&#x60; - Spanish Peseta (convertible account) * &#x60;XDR&#x60; - Special Drawing Rights * &#x60;LKR&#x60; - Sri Lankan Rupee * &#x60;SHP&#x60; - St. Helena Pound * &#x60;XSU&#x60; - Sucre * &#x60;SDD&#x60; - Sudanese Dinar (1992–2007) * &#x60;SDG&#x60; - Sudanese Pound * &#x60;SDP&#x60; - Sudanese Pound (1957–1998) * &#x60;SRD&#x60; - Surinamese Dollar * &#x60;SRG&#x60; - Surinamese Guilder * &#x60;SZL&#x60; - Swazi Lilangeni * &#x60;SEK&#x60; - Swedish Krona * &#x60;CHF&#x60; - Swiss Franc * &#x60;SYP&#x60; - Syrian Pound * &#x60;STN&#x60; - São Tomé &amp; Príncipe Dobra * &#x60;STD&#x60; - São Tomé &amp; Príncipe Dobra (1977–2017) * &#x60;TVD&#x60; - TVD * &#x60;TJR&#x60; - Tajikistani Ruble * &#x60;TJS&#x60; - Tajikistani Somoni * &#x60;TZS&#x60; - Tanzanian Shilling * &#x60;XTS&#x60; - Testing Currency Code * &#x60;THB&#x60; - Thai Baht * &#x60;XXX&#x60; - The codes assigned for transactions where no currency is involved * &#x60;TPE&#x60; - Timorese Escudo * &#x60;TOP&#x60; - Tongan Paʻanga * &#x60;TTD&#x60; - Trinidad &amp; Tobago Dollar * &#x60;TND&#x60; - Tunisian Dinar * &#x60;TRY&#x60; - Turkish Lira * &#x60;TRL&#x60; - Turkish Lira (1922–2005) * &#x60;TMT&#x60; - Turkmenistani Manat * &#x60;TMM&#x60; - Turkmenistani Manat (1993–2009) * &#x60;USD&#x60; - US Dollar * &#x60;USN&#x60; - US Dollar (Next day) * &#x60;USS&#x60; - US Dollar (Same day) * &#x60;UGX&#x60; - Ugandan Shilling * &#x60;UGS&#x60; - Ugandan Shilling (1966–1987) * &#x60;UAH&#x60; - Ukrainian Hryvnia * &#x60;UAK&#x60; - Ukrainian Karbovanets * &#x60;AED&#x60; - United Arab Emirates Dirham * &#x60;UYW&#x60; - Uruguayan Nominal Wage Index Unit * &#x60;UYU&#x60; - Uruguayan Peso * &#x60;UYP&#x60; - Uruguayan Peso (1975–1993) * &#x60;UYI&#x60; - Uruguayan Peso (Indexed Units) * &#x60;UZS&#x60; - Uzbekistani Som * &#x60;VUV&#x60; - Vanuatu Vatu * &#x60;VES&#x60; - Venezuelan Bolívar * &#x60;VEB&#x60; - Venezuelan Bolívar (1871–2008) * &#x60;VEF&#x60; - Venezuelan Bolívar (2008–2018) * &#x60;VND&#x60; - Vietnamese Dong * &#x60;VNN&#x60; - Vietnamese Dong (1978–1985) * &#x60;CHE&#x60; - WIR Euro * &#x60;CHW&#x60; - WIR Franc * &#x60;XOF&#x60; - West African CFA Franc * &#x60;YDD&#x60; - Yemeni Dinar * &#x60;YER&#x60; - Yemeni Rial * &#x60;YUN&#x60; - Yugoslavian Convertible Dinar (1990–1992) * &#x60;YUD&#x60; - Yugoslavian Hard Dinar (1966–1990) * &#x60;YUM&#x60; - Yugoslavian New Dinar (1994–2002) * &#x60;YUR&#x60; - Yugoslavian Reformed Dinar (1992–1993) * &#x60;ZWN&#x60; - ZWN * &#x60;ZRN&#x60; - Zairean New Zaire (1993–1998) * &#x60;ZRZ&#x60; - Zairean Zaire (1971–1993) * &#x60;ZMW&#x60; - Zambian Kwacha * &#x60;ZMK&#x60; - Zambian Kwacha (1968–2012) * &#x60;ZWD&#x60; - Zimbabwean Dollar (1980–2008) * &#x60;ZWR&#x60; - Zimbabwean Dollar (2008) * &#x60;ZWL&#x60; - Zimbabwean Dollar (2009)
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayCurrencyEnum
{
    /**
     * Possible values of this enum
     */
    const XUA = 'XUA';
    const AFN = 'AFN';
    const AFA = 'AFA';
    const ALL = 'ALL';
    const ALK = 'ALK';
    const DZD = 'DZD';
    const ADP = 'ADP';
    const AOA = 'AOA';
    const AOK = 'AOK';
    const AON = 'AON';
    const AOR = 'AOR';
    const ARA = 'ARA';
    const ARS = 'ARS';
    const ARM = 'ARM';
    const ARP = 'ARP';
    const ARL = 'ARL';
    const AMD = 'AMD';
    const AWG = 'AWG';
    const AUD = 'AUD';
    const ATS = 'ATS';
    const AZN = 'AZN';
    const AZM = 'AZM';
    const BSD = 'BSD';
    const BHD = 'BHD';
    const BDT = 'BDT';
    const BBD = 'BBD';
    const BYN = 'BYN';
    const BYB = 'BYB';
    const BYR = 'BYR';
    const BEF = 'BEF';
    const BEC = 'BEC';
    const BEL = 'BEL';
    const BZD = 'BZD';
    const BMD = 'BMD';
    const BTN = 'BTN';
    const BOB = 'BOB';
    const BOL = 'BOL';
    const BOV = 'BOV';
    const BOP = 'BOP';
    const BAM = 'BAM';
    const BAD = 'BAD';
    const BAN = 'BAN';
    const BWP = 'BWP';
    const BRC = 'BRC';
    const BRZ = 'BRZ';
    const BRE = 'BRE';
    const BRR = 'BRR';
    const BRN = 'BRN';
    const BRB = 'BRB';
    const BRL = 'BRL';
    const GBP = 'GBP';
    const BND = 'BND';
    const BGL = 'BGL';
    const BGN = 'BGN';
    const BGO = 'BGO';
    const BGM = 'BGM';
    const BUK = 'BUK';
    const BIF = 'BIF';
    const XPF = 'XPF';
    const KHR = 'KHR';
    const CAD = 'CAD';
    const CVE = 'CVE';
    const KYD = 'KYD';
    const XAF = 'XAF';
    const CLE = 'CLE';
    const CLP = 'CLP';
    const CLF = 'CLF';
    const CNX = 'CNX';
    const CNY = 'CNY';
    const CNH = 'CNH';
    const COP = 'COP';
    const COU = 'COU';
    const KMF = 'KMF';
    const CDF = 'CDF';
    const CRC = 'CRC';
    const HRD = 'HRD';
    const HRK = 'HRK';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const CYP = 'CYP';
    const CZK = 'CZK';
    const CSK = 'CSK';
    const DKK = 'DKK';
    const DJF = 'DJF';
    const DOP = 'DOP';
    const NLG = 'NLG';
    const XCD = 'XCD';
    const DDM = 'DDM';
    const ECS = 'ECS';
    const ECV = 'ECV';
    const EGP = 'EGP';
    const GQE = 'GQE';
    const ERN = 'ERN';
    const EEK = 'EEK';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const XBA = 'XBA';
    const XEU = 'XEU';
    const XBB = 'XBB';
    const XBC = 'XBC';
    const XBD = 'XBD';
    const FKP = 'FKP';
    const FJD = 'FJD';
    const FIM = 'FIM';
    const FRF = 'FRF';
    const XFO = 'XFO';
    const XFU = 'XFU';
    const GMD = 'GMD';
    const GEK = 'GEK';
    const GEL = 'GEL';
    const DEM = 'DEM';
    const GHS = 'GHS';
    const GHC = 'GHC';
    const GIP = 'GIP';
    const XAU = 'XAU';
    const GRD = 'GRD';
    const GTQ = 'GTQ';
    const GWP = 'GWP';
    const GNF = 'GNF';
    const GNS = 'GNS';
    const GYD = 'GYD';
    const HTG = 'HTG';
    const HNL = 'HNL';
    const HKD = 'HKD';
    const HUF = 'HUF';
    const IMP = 'IMP';
    const ISK = 'ISK';
    const ISJ = 'ISJ';
    const INR = 'INR';
    const IDR = 'IDR';
    const IRR = 'IRR';
    const IQD = 'IQD';
    const IEP = 'IEP';
    const ILS = 'ILS';
    const ILP = 'ILP';
    const ILR = 'ILR';
    const ITL = 'ITL';
    const JMD = 'JMD';
    const JPY = 'JPY';
    const JOD = 'JOD';
    const KZT = 'KZT';
    const KES = 'KES';
    const KWD = 'KWD';
    const KGS = 'KGS';
    const LAK = 'LAK';
    const LVL = 'LVL';
    const LVR = 'LVR';
    const LBP = 'LBP';
    const LSL = 'LSL';
    const LRD = 'LRD';
    const LYD = 'LYD';
    const LTL = 'LTL';
    const LTT = 'LTT';
    const LUL = 'LUL';
    const LUC = 'LUC';
    const LUF = 'LUF';
    const MOP = 'MOP';
    const MKD = 'MKD';
    const MKN = 'MKN';
    const MGA = 'MGA';
    const MGF = 'MGF';
    const MWK = 'MWK';
    const MYR = 'MYR';
    const MVR = 'MVR';
    const MVP = 'MVP';
    const MLF = 'MLF';
    const MTL = 'MTL';
    const MTP = 'MTP';
    const MRU = 'MRU';
    const MRO = 'MRO';
    const MUR = 'MUR';
    const MXV = 'MXV';
    const MXN = 'MXN';
    const MXP = 'MXP';
    const MDC = 'MDC';
    const MDL = 'MDL';
    const MCF = 'MCF';
    const MNT = 'MNT';
    const MAD = 'MAD';
    const MAF = 'MAF';
    const MZE = 'MZE';
    const MZN = 'MZN';
    const MZM = 'MZM';
    const MMK = 'MMK';
    const NAD = 'NAD';
    const NPR = 'NPR';
    const ANG = 'ANG';
    const TWD = 'TWD';
    const NZD = 'NZD';
    const NIO = 'NIO';
    const NIC = 'NIC';
    const NGN = 'NGN';
    const KPW = 'KPW';
    const NOK = 'NOK';
    const OMR = 'OMR';
    const PKR = 'PKR';
    const XPD = 'XPD';
    const PAB = 'PAB';
    const PGK = 'PGK';
    const PYG = 'PYG';
    const PEI = 'PEI';
    const PEN = 'PEN';
    const PES = 'PES';
    const PHP = 'PHP';
    const XPT = 'XPT';
    const PLN = 'PLN';
    const PLZ = 'PLZ';
    const PTE = 'PTE';
    const GWE = 'GWE';
    const QAR = 'QAR';
    const XRE = 'XRE';
    const RHD = 'RHD';
    const RON = 'RON';
    const ROL = 'ROL';
    const RUB = 'RUB';
    const RUR = 'RUR';
    const RWF = 'RWF';
    const SVC = 'SVC';
    const WST = 'WST';
    const SAR = 'SAR';
    const RSD = 'RSD';
    const CSD = 'CSD';
    const SCR = 'SCR';
    const SLL = 'SLL';
    const XAG = 'XAG';
    const SGD = 'SGD';
    const SKK = 'SKK';
    const SIT = 'SIT';
    const SBD = 'SBD';
    const SOS = 'SOS';
    const ZAR = 'ZAR';
    const ZAL = 'ZAL';
    const KRH = 'KRH';
    const KRW = 'KRW';
    const KRO = 'KRO';
    const SSP = 'SSP';
    const SUR = 'SUR';
    const ESP = 'ESP';
    const ESA = 'ESA';
    const ESB = 'ESB';
    const XDR = 'XDR';
    const LKR = 'LKR';
    const SHP = 'SHP';
    const XSU = 'XSU';
    const SDD = 'SDD';
    const SDG = 'SDG';
    const SDP = 'SDP';
    const SRD = 'SRD';
    const SRG = 'SRG';
    const SZL = 'SZL';
    const SEK = 'SEK';
    const CHF = 'CHF';
    const SYP = 'SYP';
    const STN = 'STN';
    const STD = 'STD';
    const TVD = 'TVD';
    const TJR = 'TJR';
    const TJS = 'TJS';
    const TZS = 'TZS';
    const XTS = 'XTS';
    const THB = 'THB';
    const XXX = 'XXX';
    const TPE = 'TPE';
    const TOP = 'TOP';
    const TTD = 'TTD';
    const TND = 'TND';
    const _TRY = 'TRY';
    const TRL = 'TRL';
    const TMT = 'TMT';
    const TMM = 'TMM';
    const USD = 'USD';
    const USN = 'USN';
    const USS = 'USS';
    const UGX = 'UGX';
    const UGS = 'UGS';
    const UAH = 'UAH';
    const UAK = 'UAK';
    const AED = 'AED';
    const UYW = 'UYW';
    const UYU = 'UYU';
    const UYP = 'UYP';
    const UYI = 'UYI';
    const UZS = 'UZS';
    const VUV = 'VUV';
    const VES = 'VES';
    const VEB = 'VEB';
    const VEF = 'VEF';
    const VND = 'VND';
    const VNN = 'VNN';
    const CHE = 'CHE';
    const CHW = 'CHW';
    const XOF = 'XOF';
    const YDD = 'YDD';
    const YER = 'YER';
    const YUN = 'YUN';
    const YUD = 'YUD';
    const YUM = 'YUM';
    const YUR = 'YUR';
    const ZWN = 'ZWN';
    const ZRN = 'ZRN';
    const ZRZ = 'ZRZ';
    const ZMW = 'ZMW';
    const ZMK = 'ZMK';
    const ZWD = 'ZWD';
    const ZWR = 'ZWR';
    const ZWL = 'ZWL';
    

    /**
     * Merge attempts to unify all enum values, but in some cases the original value will be retained. Since we cannot
     * list them all here, this value is present to call attention to this behavior. That being said, PHP 7 does not
     * have real enums so this MERGE_NONSTANDARD_VALUE is unused for now, just a placeholder.
     */
    const MERGE_NONSTANDARD_VALUE = "MERGE_NONSTANDARD_VALUE";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::XUA,
            self::AFN,
            self::AFA,
            self::ALL,
            self::ALK,
            self::DZD,
            self::ADP,
            self::AOA,
            self::AOK,
            self::AON,
            self::AOR,
            self::ARA,
            self::ARS,
            self::ARM,
            self::ARP,
            self::ARL,
            self::AMD,
            self::AWG,
            self::AUD,
            self::ATS,
            self::AZN,
            self::AZM,
            self::BSD,
            self::BHD,
            self::BDT,
            self::BBD,
            self::BYN,
            self::BYB,
            self::BYR,
            self::BEF,
            self::BEC,
            self::BEL,
            self::BZD,
            self::BMD,
            self::BTN,
            self::BOB,
            self::BOL,
            self::BOV,
            self::BOP,
            self::BAM,
            self::BAD,
            self::BAN,
            self::BWP,
            self::BRC,
            self::BRZ,
            self::BRE,
            self::BRR,
            self::BRN,
            self::BRB,
            self::BRL,
            self::GBP,
            self::BND,
            self::BGL,
            self::BGN,
            self::BGO,
            self::BGM,
            self::BUK,
            self::BIF,
            self::XPF,
            self::KHR,
            self::CAD,
            self::CVE,
            self::KYD,
            self::XAF,
            self::CLE,
            self::CLP,
            self::CLF,
            self::CNX,
            self::CNY,
            self::CNH,
            self::COP,
            self::COU,
            self::KMF,
            self::CDF,
            self::CRC,
            self::HRD,
            self::HRK,
            self::CUC,
            self::CUP,
            self::CYP,
            self::CZK,
            self::CSK,
            self::DKK,
            self::DJF,
            self::DOP,
            self::NLG,
            self::XCD,
            self::DDM,
            self::ECS,
            self::ECV,
            self::EGP,
            self::GQE,
            self::ERN,
            self::EEK,
            self::ETB,
            self::EUR,
            self::XBA,
            self::XEU,
            self::XBB,
            self::XBC,
            self::XBD,
            self::FKP,
            self::FJD,
            self::FIM,
            self::FRF,
            self::XFO,
            self::XFU,
            self::GMD,
            self::GEK,
            self::GEL,
            self::DEM,
            self::GHS,
            self::GHC,
            self::GIP,
            self::XAU,
            self::GRD,
            self::GTQ,
            self::GWP,
            self::GNF,
            self::GNS,
            self::GYD,
            self::HTG,
            self::HNL,
            self::HKD,
            self::HUF,
            self::IMP,
            self::ISK,
            self::ISJ,
            self::INR,
            self::IDR,
            self::IRR,
            self::IQD,
            self::IEP,
            self::ILS,
            self::ILP,
            self::ILR,
            self::ITL,
            self::JMD,
            self::JPY,
            self::JOD,
            self::KZT,
            self::KES,
            self::KWD,
            self::KGS,
            self::LAK,
            self::LVL,
            self::LVR,
            self::LBP,
            self::LSL,
            self::LRD,
            self::LYD,
            self::LTL,
            self::LTT,
            self::LUL,
            self::LUC,
            self::LUF,
            self::MOP,
            self::MKD,
            self::MKN,
            self::MGA,
            self::MGF,
            self::MWK,
            self::MYR,
            self::MVR,
            self::MVP,
            self::MLF,
            self::MTL,
            self::MTP,
            self::MRU,
            self::MRO,
            self::MUR,
            self::MXV,
            self::MXN,
            self::MXP,
            self::MDC,
            self::MDL,
            self::MCF,
            self::MNT,
            self::MAD,
            self::MAF,
            self::MZE,
            self::MZN,
            self::MZM,
            self::MMK,
            self::NAD,
            self::NPR,
            self::ANG,
            self::TWD,
            self::NZD,
            self::NIO,
            self::NIC,
            self::NGN,
            self::KPW,
            self::NOK,
            self::OMR,
            self::PKR,
            self::XPD,
            self::PAB,
            self::PGK,
            self::PYG,
            self::PEI,
            self::PEN,
            self::PES,
            self::PHP,
            self::XPT,
            self::PLN,
            self::PLZ,
            self::PTE,
            self::GWE,
            self::QAR,
            self::XRE,
            self::RHD,
            self::RON,
            self::ROL,
            self::RUB,
            self::RUR,
            self::RWF,
            self::SVC,
            self::WST,
            self::SAR,
            self::RSD,
            self::CSD,
            self::SCR,
            self::SLL,
            self::XAG,
            self::SGD,
            self::SKK,
            self::SIT,
            self::SBD,
            self::SOS,
            self::ZAR,
            self::ZAL,
            self::KRH,
            self::KRW,
            self::KRO,
            self::SSP,
            self::SUR,
            self::ESP,
            self::ESA,
            self::ESB,
            self::XDR,
            self::LKR,
            self::SHP,
            self::XSU,
            self::SDD,
            self::SDG,
            self::SDP,
            self::SRD,
            self::SRG,
            self::SZL,
            self::SEK,
            self::CHF,
            self::SYP,
            self::STN,
            self::STD,
            self::TVD,
            self::TJR,
            self::TJS,
            self::TZS,
            self::XTS,
            self::THB,
            self::XXX,
            self::TPE,
            self::TOP,
            self::TTD,
            self::TND,
            self::_TRY,
            self::TRL,
            self::TMT,
            self::TMM,
            self::USD,
            self::USN,
            self::USS,
            self::UGX,
            self::UGS,
            self::UAH,
            self::UAK,
            self::AED,
            self::UYW,
            self::UYU,
            self::UYP,
            self::UYI,
            self::UZS,
            self::VUV,
            self::VES,
            self::VEB,
            self::VEF,
            self::VND,
            self::VNN,
            self::CHE,
            self::CHW,
            self::XOF,
            self::YDD,
            self::YER,
            self::YUN,
            self::YUD,
            self::YUM,
            self::YUR,
            self::ZWN,
            self::ZRN,
            self::ZRZ,
            self::ZMW,
            self::ZMK,
            self::ZWD,
            self::ZWR,
            self::ZWL,
        ];
    }
}


