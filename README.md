# MergeHRISClient

The unified API for building rich integrations with multiple HR Information System platforms.

For more information, please visit [https://www.merge.dev/](https://www.merge.dev/).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MergeHRISClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountDetailsRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDetailsApi->accountDetailsRetrieve: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.merge.dev/api/hris/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountDetailsApi* | [**accountDetailsRetrieve**](docs/Api/AccountDetailsApi.md#accountdetailsretrieve) | **GET** /account-details | 
*AccountTokenApi* | [**accountTokenRetrieve**](docs/Api/AccountTokenApi.md#accounttokenretrieve) | **GET** /account-token/{public_token} | 
*AvailableActionsApi* | [**availableActionsRetrieve**](docs/Api/AvailableActionsApi.md#availableactionsretrieve) | **GET** /available-actions | 
*BenefitsApi* | [**benefitsCreate**](docs/Api/BenefitsApi.md#benefitscreate) | **POST** /benefits | 
*BenefitsApi* | [**benefitsList**](docs/Api/BenefitsApi.md#benefitslist) | **GET** /benefits | 
*BenefitsApi* | [**benefitsRetrieve**](docs/Api/BenefitsApi.md#benefitsretrieve) | **GET** /benefits/{id} | 
*CompaniesApi* | [**companiesList**](docs/Api/CompaniesApi.md#companieslist) | **GET** /companies | 
*CompaniesApi* | [**companiesRetrieve**](docs/Api/CompaniesApi.md#companiesretrieve) | **GET** /companies/{id} | 
*DeductionsApi* | [**deductionsCreate**](docs/Api/DeductionsApi.md#deductionscreate) | **POST** /deductions | 
*DeductionsApi* | [**deductionsList**](docs/Api/DeductionsApi.md#deductionslist) | **GET** /deductions | 
*DeductionsApi* | [**deductionsRetrieve**](docs/Api/DeductionsApi.md#deductionsretrieve) | **GET** /deductions/{id} | 
*DeleteAccountApi* | [**deleteAccountCreate**](docs/Api/DeleteAccountApi.md#deleteaccountcreate) | **POST** /delete-account | 
*EmployeePayrollRunsApi* | [**employeePayrollRunsList**](docs/Api/EmployeePayrollRunsApi.md#employeepayrollrunslist) | **GET** /employee-payroll-runs | 
*EmployeePayrollRunsApi* | [**employeePayrollRunsRetrieve**](docs/Api/EmployeePayrollRunsApi.md#employeepayrollrunsretrieve) | **GET** /employee-payroll-runs/{id} | 
*EmployeesApi* | [**employeesCreate**](docs/Api/EmployeesApi.md#employeescreate) | **POST** /employees | 
*EmployeesApi* | [**employeesList**](docs/Api/EmployeesApi.md#employeeslist) | **GET** /employees | 
*EmployeesApi* | [**employeesRetrieve**](docs/Api/EmployeesApi.md#employeesretrieve) | **GET** /employees/{id} | 
*EmploymentsApi* | [**employmentsList**](docs/Api/EmploymentsApi.md#employmentslist) | **GET** /employments | 
*EmploymentsApi* | [**employmentsRetrieve**](docs/Api/EmploymentsApi.md#employmentsretrieve) | **GET** /employments/{id} | 
*GenerateKeyApi* | [**generateKeyCreate**](docs/Api/GenerateKeyApi.md#generatekeycreate) | **POST** /generate-key | 
*IssuesApi* | [**issuesList**](docs/Api/IssuesApi.md#issueslist) | **GET** /issues | 
*IssuesApi* | [**issuesRetrieve**](docs/Api/IssuesApi.md#issuesretrieve) | **GET** /issues/{id} | 
*LinkTokenApi* | [**linkTokenCreate**](docs/Api/LinkTokenApi.md#linktokencreate) | **POST** /link-token | 
*LinkedAccountsApi* | [**linkedAccountsList**](docs/Api/LinkedAccountsApi.md#linkedaccountslist) | **GET** /linked-accounts | 
*LocationsApi* | [**locationsList**](docs/Api/LocationsApi.md#locationslist) | **GET** /locations | 
*LocationsApi* | [**locationsRetrieve**](docs/Api/LocationsApi.md#locationsretrieve) | **GET** /locations/{id} | 
*PassthroughApi* | [**passthroughCreate**](docs/Api/PassthroughApi.md#passthroughcreate) | **POST** /passthrough | 
*PayrollRunsApi* | [**payrollRunsList**](docs/Api/PayrollRunsApi.md#payrollrunslist) | **GET** /payroll-runs | 
*PayrollRunsApi* | [**payrollRunsRetrieve**](docs/Api/PayrollRunsApi.md#payrollrunsretrieve) | **GET** /payroll-runs/{id} | 
*RegenerateKeyApi* | [**regenerateKeyCreate**](docs/Api/RegenerateKeyApi.md#regeneratekeycreate) | **POST** /regenerate-key | 
*SyncStatusApi* | [**syncStatusList**](docs/Api/SyncStatusApi.md#syncstatuslist) | **GET** /sync-status | 
*SyncStatusApi* | [**syncStatusResyncCreate**](docs/Api/SyncStatusApi.md#syncstatusresynccreate) | **POST** /sync-status/resync | 
*TeamsApi* | [**teamsList**](docs/Api/TeamsApi.md#teamslist) | **GET** /teams | 
*TeamsApi* | [**teamsRetrieve**](docs/Api/TeamsApi.md#teamsretrieve) | **GET** /teams/{id} | 
*TimeOffApi* | [**timeOffCreate**](docs/Api/TimeOffApi.md#timeoffcreate) | **POST** /time-off | 
*TimeOffApi* | [**timeOffList**](docs/Api/TimeOffApi.md#timeofflist) | **GET** /time-off | 
*TimeOffApi* | [**timeOffRetrieve**](docs/Api/TimeOffApi.md#timeoffretrieve) | **GET** /time-off/{id} | 
*TimeOffBalanceApi* | [**timeOffBalanceList**](docs/Api/TimeOffBalanceApi.md#timeoffbalancelist) | **GET** /time-off-balance | 
*TimeOffBalanceApi* | [**timeOffBalanceRetrieve**](docs/Api/TimeOffBalanceApi.md#timeoffbalanceretrieve) | **GET** /time-off-balance/{id} | 

## Models

- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountDetailsAndActions](docs/Model/AccountDetailsAndActions.md)
- [AccountDetailsAndActionsIntegration](docs/Model/AccountDetailsAndActionsIntegration.md)
- [AccountDetailsAndActionsStatusEnum](docs/Model/AccountDetailsAndActionsStatusEnum.md)
- [AccountIntegration](docs/Model/AccountIntegration.md)
- [AccountToken](docs/Model/AccountToken.md)
- [AvailableActions](docs/Model/AvailableActions.md)
- [Benefit](docs/Model/Benefit.md)
- [BenefitPlanTypeEnum](docs/Model/BenefitPlanTypeEnum.md)
- [BenefitRequest](docs/Model/BenefitRequest.md)
- [CategoriesEnum](docs/Model/CategoriesEnum.md)
- [CategoryEnum](docs/Model/CategoryEnum.md)
- [Company](docs/Model/Company.md)
- [CountryEnum](docs/Model/CountryEnum.md)
- [DataPassthroughRequest](docs/Model/DataPassthroughRequest.md)
- [Deduction](docs/Model/Deduction.md)
- [DeductionRequest](docs/Model/DeductionRequest.md)
- [Earning](docs/Model/Earning.md)
- [Employee](docs/Model/Employee.md)
- [EmployeePayrollRun](docs/Model/EmployeePayrollRun.md)
- [EmployeeRequest](docs/Model/EmployeeRequest.md)
- [Employment](docs/Model/Employment.md)
- [EmploymentStatusEnum](docs/Model/EmploymentStatusEnum.md)
- [EmploymentTypeEnum](docs/Model/EmploymentTypeEnum.md)
- [EndUserDetailsRequest](docs/Model/EndUserDetailsRequest.md)
- [EthnicityEnum](docs/Model/EthnicityEnum.md)
- [FlsaStatusEnum](docs/Model/FlsaStatusEnum.md)
- [GenderEnum](docs/Model/GenderEnum.md)
- [GenerateRemoteKeyRequest](docs/Model/GenerateRemoteKeyRequest.md)
- [Issue](docs/Model/Issue.md)
- [IssueStatusEnum](docs/Model/IssueStatusEnum.md)
- [LinkToken](docs/Model/LinkToken.md)
- [Location](docs/Model/Location.md)
- [MaritalStatusEnum](docs/Model/MaritalStatusEnum.md)
- [MethodEnum](docs/Model/MethodEnum.md)
- [ModelOperation](docs/Model/ModelOperation.md)
- [PaginatedAccountDetailsAndActionsList](docs/Model/PaginatedAccountDetailsAndActionsList.md)
- [PaginatedBenefitList](docs/Model/PaginatedBenefitList.md)
- [PaginatedCompanyList](docs/Model/PaginatedCompanyList.md)
- [PaginatedDeductionList](docs/Model/PaginatedDeductionList.md)
- [PaginatedEmployeeList](docs/Model/PaginatedEmployeeList.md)
- [PaginatedEmployeePayrollRunList](docs/Model/PaginatedEmployeePayrollRunList.md)
- [PaginatedEmploymentList](docs/Model/PaginatedEmploymentList.md)
- [PaginatedIssueList](docs/Model/PaginatedIssueList.md)
- [PaginatedLocationList](docs/Model/PaginatedLocationList.md)
- [PaginatedPayrollRunList](docs/Model/PaginatedPayrollRunList.md)
- [PaginatedSyncStatusList](docs/Model/PaginatedSyncStatusList.md)
- [PaginatedTeamList](docs/Model/PaginatedTeamList.md)
- [PaginatedTimeOffBalanceList](docs/Model/PaginatedTimeOffBalanceList.md)
- [PaginatedTimeOffList](docs/Model/PaginatedTimeOffList.md)
- [PayCurrencyEnum](docs/Model/PayCurrencyEnum.md)
- [PayFrequencyEnum](docs/Model/PayFrequencyEnum.md)
- [PayPeriodEnum](docs/Model/PayPeriodEnum.md)
- [PayrollRun](docs/Model/PayrollRun.md)
- [PolicyTypeEnum](docs/Model/PolicyTypeEnum.md)
- [RemoteData](docs/Model/RemoteData.md)
- [RemoteDataRequest](docs/Model/RemoteDataRequest.md)
- [RemoteKey](docs/Model/RemoteKey.md)
- [RemoteKeyForRegenerationRequest](docs/Model/RemoteKeyForRegenerationRequest.md)
- [RemoteResponse](docs/Model/RemoteResponse.md)
- [RequestFormatEnum](docs/Model/RequestFormatEnum.md)
- [RequestTypeEnum](docs/Model/RequestTypeEnum.md)
- [RunStateEnum](docs/Model/RunStateEnum.md)
- [RunTypeEnum](docs/Model/RunTypeEnum.md)
- [SyncStatus](docs/Model/SyncStatus.md)
- [SyncStatusStatusEnum](docs/Model/SyncStatusStatusEnum.md)
- [Tax](docs/Model/Tax.md)
- [Team](docs/Model/Team.md)
- [TimeOff](docs/Model/TimeOff.md)
- [TimeOffBalance](docs/Model/TimeOffBalance.md)
- [TimeOffRequest](docs/Model/TimeOffRequest.md)
- [TimeOffStatusEnum](docs/Model/TimeOffStatusEnum.md)
- [TypeEnum](docs/Model/TypeEnum.md)
- [UnitsEnum](docs/Model/UnitsEnum.md)

## Authorization

### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@merge.dev

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
