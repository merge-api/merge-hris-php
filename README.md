# MergeHRISClient

The unified API for building rich integrations with multiple HR Information System platforms.

For more information, please visit [https://www.merge.dev/](https://www.merge.dev/).

## Installation & Usage

### Requirements

- PHP 7.2 and later.
- guzzlehttp/guzzle 6.X OR 7.X.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/merge-api/merge-hris-php.git"
    }
  ],
  "require": {
    "merge-api/merge-hris-php": "*@dev"
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
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\AccountDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->accountDetailsRetrieve($x_account_token);
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
*AsyncPassthroughApi* | [**asyncPassthroughCreate**](docs/Api/AsyncPassthroughApi.md#asyncpassthroughcreate) | **POST** /async-passthrough | 
*AsyncPassthroughApi* | [**asyncPassthroughRetrieve**](docs/Api/AsyncPassthroughApi.md#asyncpassthroughretrieve) | **GET** /async-passthrough/{async_passthrough_receipt_id} | 
*AuditTrailApi* | [**auditTrailList**](docs/Api/AuditTrailApi.md#audittraillist) | **GET** /audit-trail | 
*AvailableActionsApi* | [**availableActionsRetrieve**](docs/Api/AvailableActionsApi.md#availableactionsretrieve) | **GET** /available-actions | 
*BankInfoApi* | [**bankInfoList**](docs/Api/BankInfoApi.md#bankinfolist) | **GET** /bank-info | 
*BankInfoApi* | [**bankInfoRetrieve**](docs/Api/BankInfoApi.md#bankinforetrieve) | **GET** /bank-info/{id} | 
*BenefitsApi* | [**benefitsList**](docs/Api/BenefitsApi.md#benefitslist) | **GET** /benefits | 
*BenefitsApi* | [**benefitsRetrieve**](docs/Api/BenefitsApi.md#benefitsretrieve) | **GET** /benefits/{id} | 
*CompaniesApi* | [**companiesList**](docs/Api/CompaniesApi.md#companieslist) | **GET** /companies | 
*CompaniesApi* | [**companiesRetrieve**](docs/Api/CompaniesApi.md#companiesretrieve) | **GET** /companies/{id} | 
*DeleteAccountApi* | [**deleteAccountDelete**](docs/Api/DeleteAccountApi.md#deleteaccountdelete) | **POST** /delete-account | 
*DependentsApi* | [**dependentsList**](docs/Api/DependentsApi.md#dependentslist) | **GET** /dependents | 
*DependentsApi* | [**dependentsRetrieve**](docs/Api/DependentsApi.md#dependentsretrieve) | **GET** /dependents/{id} | 
*EmployeePayrollRunsApi* | [**employeePayrollRunsList**](docs/Api/EmployeePayrollRunsApi.md#employeepayrollrunslist) | **GET** /employee-payroll-runs | 
*EmployeePayrollRunsApi* | [**employeePayrollRunsRetrieve**](docs/Api/EmployeePayrollRunsApi.md#employeepayrollrunsretrieve) | **GET** /employee-payroll-runs/{id} | 
*EmployeesApi* | [**employeesCreate**](docs/Api/EmployeesApi.md#employeescreate) | **POST** /employees | 
*EmployeesApi* | [**employeesIgnoreCreate**](docs/Api/EmployeesApi.md#employeesignorecreate) | **POST** /employees/ignore/{model_id} | 
*EmployeesApi* | [**employeesList**](docs/Api/EmployeesApi.md#employeeslist) | **GET** /employees | 
*EmployeesApi* | [**employeesMetaPostRetrieve**](docs/Api/EmployeesApi.md#employeesmetapostretrieve) | **GET** /employees/meta/post | 
*EmployeesApi* | [**employeesRetrieve**](docs/Api/EmployeesApi.md#employeesretrieve) | **GET** /employees/{id} | 
*EmployerBenefitsApi* | [**employerBenefitsList**](docs/Api/EmployerBenefitsApi.md#employerbenefitslist) | **GET** /employer-benefits | 
*EmployerBenefitsApi* | [**employerBenefitsRetrieve**](docs/Api/EmployerBenefitsApi.md#employerbenefitsretrieve) | **GET** /employer-benefits/{id} | 
*EmploymentsApi* | [**employmentsList**](docs/Api/EmploymentsApi.md#employmentslist) | **GET** /employments | 
*EmploymentsApi* | [**employmentsRetrieve**](docs/Api/EmploymentsApi.md#employmentsretrieve) | **GET** /employments/{id} | 
*FieldMappingApi* | [**fieldMappingsCreate**](docs/Api/FieldMappingApi.md#fieldmappingscreate) | **POST** /field-mappings | 
*FieldMappingApi* | [**fieldMappingsDestroy**](docs/Api/FieldMappingApi.md#fieldmappingsdestroy) | **DELETE** /field-mappings/{field_mapping_id} | 
*FieldMappingApi* | [**fieldMappingsPartialUpdate**](docs/Api/FieldMappingApi.md#fieldmappingspartialupdate) | **PATCH** /field-mappings/{field_mapping_id} | 
*FieldMappingApi* | [**fieldMappingsRetrieve**](docs/Api/FieldMappingApi.md#fieldmappingsretrieve) | **GET** /field-mappings | 
*FieldMappingApi* | [**remoteFieldsRetrieve**](docs/Api/FieldMappingApi.md#remotefieldsretrieve) | **GET** /remote-fields | 
*FieldMappingApi* | [**targetFieldsRetrieve**](docs/Api/FieldMappingApi.md#targetfieldsretrieve) | **GET** /target-fields | 
*ForceResyncApi* | [**syncStatusResyncCreate**](docs/Api/ForceResyncApi.md#syncstatusresynccreate) | **POST** /sync-status/resync | 
*GenerateKeyApi* | [**generateKeyCreate**](docs/Api/GenerateKeyApi.md#generatekeycreate) | **POST** /generate-key | 
*GroupsApi* | [**groupsList**](docs/Api/GroupsApi.md#groupslist) | **GET** /groups | 
*GroupsApi* | [**groupsRetrieve**](docs/Api/GroupsApi.md#groupsretrieve) | **GET** /groups/{id} | 
*IssuesApi* | [**issuesList**](docs/Api/IssuesApi.md#issueslist) | **GET** /issues | 
*IssuesApi* | [**issuesRetrieve**](docs/Api/IssuesApi.md#issuesretrieve) | **GET** /issues/{id} | 
*LinkTokenApi* | [**linkTokenCreate**](docs/Api/LinkTokenApi.md#linktokencreate) | **POST** /link-token | 
*LinkedAccountsApi* | [**linkedAccountsList**](docs/Api/LinkedAccountsApi.md#linkedaccountslist) | **GET** /linked-accounts | 
*LocationsApi* | [**locationsList**](docs/Api/LocationsApi.md#locationslist) | **GET** /locations | 
*LocationsApi* | [**locationsRetrieve**](docs/Api/LocationsApi.md#locationsretrieve) | **GET** /locations/{id} | 
*PassthroughApi* | [**passthroughCreate**](docs/Api/PassthroughApi.md#passthroughcreate) | **POST** /passthrough | 
*PayGroupsApi* | [**payGroupsList**](docs/Api/PayGroupsApi.md#paygroupslist) | **GET** /pay-groups | 
*PayGroupsApi* | [**payGroupsRetrieve**](docs/Api/PayGroupsApi.md#paygroupsretrieve) | **GET** /pay-groups/{id} | 
*PayrollRunsApi* | [**payrollRunsList**](docs/Api/PayrollRunsApi.md#payrollrunslist) | **GET** /payroll-runs | 
*PayrollRunsApi* | [**payrollRunsRetrieve**](docs/Api/PayrollRunsApi.md#payrollrunsretrieve) | **GET** /payroll-runs/{id} | 
*RegenerateKeyApi* | [**regenerateKeyCreate**](docs/Api/RegenerateKeyApi.md#regeneratekeycreate) | **POST** /regenerate-key | 
*ScopesApi* | [**defaultScopesRetrieve**](docs/Api/ScopesApi.md#defaultscopesretrieve) | **GET** /default-scopes | 
*ScopesApi* | [**linkedAccountScopesCreate**](docs/Api/ScopesApi.md#linkedaccountscopescreate) | **POST** /linked-account-scopes | 
*ScopesApi* | [**linkedAccountScopesRetrieve**](docs/Api/ScopesApi.md#linkedaccountscopesretrieve) | **GET** /linked-account-scopes | 
*SelectiveSyncApi* | [**selectiveSyncConfigurationsList**](docs/Api/SelectiveSyncApi.md#selectivesyncconfigurationslist) | **GET** /selective-sync/configurations | 
*SelectiveSyncApi* | [**selectiveSyncConfigurationsUpdate**](docs/Api/SelectiveSyncApi.md#selectivesyncconfigurationsupdate) | **PUT** /selective-sync/configurations | 
*SelectiveSyncApi* | [**selectiveSyncMetaList**](docs/Api/SelectiveSyncApi.md#selectivesyncmetalist) | **GET** /selective-sync/meta | 
*SyncStatusApi* | [**syncStatusList**](docs/Api/SyncStatusApi.md#syncstatuslist) | **GET** /sync-status | 
*TeamsApi* | [**teamsList**](docs/Api/TeamsApi.md#teamslist) | **GET** /teams | 
*TeamsApi* | [**teamsRetrieve**](docs/Api/TeamsApi.md#teamsretrieve) | **GET** /teams/{id} | 
*TimeOffApi* | [**timeOffCreate**](docs/Api/TimeOffApi.md#timeoffcreate) | **POST** /time-off | 
*TimeOffApi* | [**timeOffList**](docs/Api/TimeOffApi.md#timeofflist) | **GET** /time-off | 
*TimeOffApi* | [**timeOffMetaPostRetrieve**](docs/Api/TimeOffApi.md#timeoffmetapostretrieve) | **GET** /time-off/meta/post | 
*TimeOffApi* | [**timeOffRetrieve**](docs/Api/TimeOffApi.md#timeoffretrieve) | **GET** /time-off/{id} | 
*TimeOffBalancesApi* | [**timeOffBalancesList**](docs/Api/TimeOffBalancesApi.md#timeoffbalanceslist) | **GET** /time-off-balances | 
*TimeOffBalancesApi* | [**timeOffBalancesRetrieve**](docs/Api/TimeOffBalancesApi.md#timeoffbalancesretrieve) | **GET** /time-off-balances/{id} | 
*TimesheetEntriesApi* | [**timesheetEntriesCreate**](docs/Api/TimesheetEntriesApi.md#timesheetentriescreate) | **POST** /timesheet-entries | 
*TimesheetEntriesApi* | [**timesheetEntriesList**](docs/Api/TimesheetEntriesApi.md#timesheetentrieslist) | **GET** /timesheet-entries | 
*TimesheetEntriesApi* | [**timesheetEntriesMetaPostRetrieve**](docs/Api/TimesheetEntriesApi.md#timesheetentriesmetapostretrieve) | **GET** /timesheet-entries/meta/post | 
*TimesheetEntriesApi* | [**timesheetEntriesRetrieve**](docs/Api/TimesheetEntriesApi.md#timesheetentriesretrieve) | **GET** /timesheet-entries/{id} | 
*WebhookReceiversApi* | [**webhookReceiversCreate**](docs/Api/WebhookReceiversApi.md#webhookreceiverscreate) | **POST** /webhook-receivers | 
*WebhookReceiversApi* | [**webhookReceiversList**](docs/Api/WebhookReceiversApi.md#webhookreceiverslist) | **GET** /webhook-receivers | 

## Models

- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountDetailsAndActions](docs/Model/AccountDetailsAndActions.md)
- [AccountDetailsAndActionsIntegration](docs/Model/AccountDetailsAndActionsIntegration.md)
- [AccountDetailsAndActionsStatusEnum](docs/Model/AccountDetailsAndActionsStatusEnum.md)
- [AccountIntegration](docs/Model/AccountIntegration.md)
- [AccountToken](docs/Model/AccountToken.md)
- [AccountTypeEnum](docs/Model/AccountTypeEnum.md)
- [AdvancedMetadata](docs/Model/AdvancedMetadata.md)
- [AsyncPassthroughReciept](docs/Model/AsyncPassthroughReciept.md)
- [AuditLogEvent](docs/Model/AuditLogEvent.md)
- [AvailableActions](docs/Model/AvailableActions.md)
- [BankInfo](docs/Model/BankInfo.md)
- [Benefit](docs/Model/Benefit.md)
- [BenefitPlanTypeEnum](docs/Model/BenefitPlanTypeEnum.md)
- [CategoriesEnum](docs/Model/CategoriesEnum.md)
- [CategoryEnum](docs/Model/CategoryEnum.md)
- [CommonModelScopeAPI](docs/Model/CommonModelScopeAPI.md)
- [CommonModelScopesBodyRequest](docs/Model/CommonModelScopesBodyRequest.md)
- [Company](docs/Model/Company.md)
- [ConditionSchema](docs/Model/ConditionSchema.md)
- [ConditionTypeEnum](docs/Model/ConditionTypeEnum.md)
- [CountryEnum](docs/Model/CountryEnum.md)
- [CreateFieldMappingRequest](docs/Model/CreateFieldMappingRequest.md)
- [DataPassthroughRequest](docs/Model/DataPassthroughRequest.md)
- [DebugModeLog](docs/Model/DebugModeLog.md)
- [DebugModelLogSummary](docs/Model/DebugModelLogSummary.md)
- [Deduction](docs/Model/Deduction.md)
- [Dependent](docs/Model/Dependent.md)
- [Earning](docs/Model/Earning.md)
- [EarningTypeEnum](docs/Model/EarningTypeEnum.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeEndpointRequest](docs/Model/EmployeeEndpointRequest.md)
- [EmployeePayrollRun](docs/Model/EmployeePayrollRun.md)
- [EmployeeRequest](docs/Model/EmployeeRequest.md)
- [EmployeeResponse](docs/Model/EmployeeResponse.md)
- [EmployerBenefit](docs/Model/EmployerBenefit.md)
- [Employment](docs/Model/Employment.md)
- [EmploymentStatusEnum](docs/Model/EmploymentStatusEnum.md)
- [EmploymentTypeEnum](docs/Model/EmploymentTypeEnum.md)
- [EnabledActionsEnum](docs/Model/EnabledActionsEnum.md)
- [EncodingEnum](docs/Model/EncodingEnum.md)
- [EndUserDetailsRequest](docs/Model/EndUserDetailsRequest.md)
- [ErrorValidationProblem](docs/Model/ErrorValidationProblem.md)
- [EthnicityEnum](docs/Model/EthnicityEnum.md)
- [EventTypeEnum](docs/Model/EventTypeEnum.md)
- [ExternalTargetFieldAPI](docs/Model/ExternalTargetFieldAPI.md)
- [ExternalTargetFieldAPIResponse](docs/Model/ExternalTargetFieldAPIResponse.md)
- [FieldMappingApiInstance](docs/Model/FieldMappingApiInstance.md)
- [FieldMappingApiInstanceRemoteField](docs/Model/FieldMappingApiInstanceRemoteField.md)
- [FieldMappingApiInstanceRemoteFieldRemoteEndpointInfo](docs/Model/FieldMappingApiInstanceRemoteFieldRemoteEndpointInfo.md)
- [FieldMappingApiInstanceResponse](docs/Model/FieldMappingApiInstanceResponse.md)
- [FieldMappingApiInstanceTargetField](docs/Model/FieldMappingApiInstanceTargetField.md)
- [FieldMappingInstanceResponse](docs/Model/FieldMappingInstanceResponse.md)
- [FieldPermissionDeserializer](docs/Model/FieldPermissionDeserializer.md)
- [FieldPermissionDeserializerRequest](docs/Model/FieldPermissionDeserializerRequest.md)
- [FlsaStatusEnum](docs/Model/FlsaStatusEnum.md)
- [GenderEnum](docs/Model/GenderEnum.md)
- [GenerateRemoteKeyRequest](docs/Model/GenerateRemoteKeyRequest.md)
- [Group](docs/Model/Group.md)
- [GroupTypeEnum](docs/Model/GroupTypeEnum.md)
- [IgnoreCommonModelRequest](docs/Model/IgnoreCommonModelRequest.md)
- [IndividualCommonModelScopeDeserializer](docs/Model/IndividualCommonModelScopeDeserializer.md)
- [IndividualCommonModelScopeDeserializerRequest](docs/Model/IndividualCommonModelScopeDeserializerRequest.md)
- [Issue](docs/Model/Issue.md)
- [IssueStatusEnum](docs/Model/IssueStatusEnum.md)
- [LinkToken](docs/Model/LinkToken.md)
- [LinkedAccountCommonModelScopeDeserializerRequest](docs/Model/LinkedAccountCommonModelScopeDeserializerRequest.md)
- [LinkedAccountCondition](docs/Model/LinkedAccountCondition.md)
- [LinkedAccountConditionRequest](docs/Model/LinkedAccountConditionRequest.md)
- [LinkedAccountSelectiveSyncConfiguration](docs/Model/LinkedAccountSelectiveSyncConfiguration.md)
- [LinkedAccountSelectiveSyncConfigurationListRequest](docs/Model/LinkedAccountSelectiveSyncConfigurationListRequest.md)
- [LinkedAccountSelectiveSyncConfigurationRequest](docs/Model/LinkedAccountSelectiveSyncConfigurationRequest.md)
- [LinkedAccountStatus](docs/Model/LinkedAccountStatus.md)
- [Location](docs/Model/Location.md)
- [LocationTypeEnum](docs/Model/LocationTypeEnum.md)
- [MaritalStatusEnum](docs/Model/MaritalStatusEnum.md)
- [MetaResponse](docs/Model/MetaResponse.md)
- [MethodEnum](docs/Model/MethodEnum.md)
- [ModelOperation](docs/Model/ModelOperation.md)
- [ModelPermissionDeserializer](docs/Model/ModelPermissionDeserializer.md)
- [ModelPermissionDeserializerRequest](docs/Model/ModelPermissionDeserializerRequest.md)
- [MultipartFormFieldRequest](docs/Model/MultipartFormFieldRequest.md)
- [OperatorSchema](docs/Model/OperatorSchema.md)
- [PaginatedAccountDetailsAndActionsList](docs/Model/PaginatedAccountDetailsAndActionsList.md)
- [PaginatedAuditLogEventList](docs/Model/PaginatedAuditLogEventList.md)
- [PaginatedBankInfoList](docs/Model/PaginatedBankInfoList.md)
- [PaginatedBenefitList](docs/Model/PaginatedBenefitList.md)
- [PaginatedCompanyList](docs/Model/PaginatedCompanyList.md)
- [PaginatedConditionSchemaList](docs/Model/PaginatedConditionSchemaList.md)
- [PaginatedDependentList](docs/Model/PaginatedDependentList.md)
- [PaginatedEmployeeList](docs/Model/PaginatedEmployeeList.md)
- [PaginatedEmployeePayrollRunList](docs/Model/PaginatedEmployeePayrollRunList.md)
- [PaginatedEmployerBenefitList](docs/Model/PaginatedEmployerBenefitList.md)
- [PaginatedEmploymentList](docs/Model/PaginatedEmploymentList.md)
- [PaginatedGroupList](docs/Model/PaginatedGroupList.md)
- [PaginatedIssueList](docs/Model/PaginatedIssueList.md)
- [PaginatedLocationList](docs/Model/PaginatedLocationList.md)
- [PaginatedPayGroupList](docs/Model/PaginatedPayGroupList.md)
- [PaginatedPayrollRunList](docs/Model/PaginatedPayrollRunList.md)
- [PaginatedSyncStatusList](docs/Model/PaginatedSyncStatusList.md)
- [PaginatedTeamList](docs/Model/PaginatedTeamList.md)
- [PaginatedTimeOffBalanceList](docs/Model/PaginatedTimeOffBalanceList.md)
- [PaginatedTimeOffList](docs/Model/PaginatedTimeOffList.md)
- [PaginatedTimesheetEntryList](docs/Model/PaginatedTimesheetEntryList.md)
- [PatchedEditFieldMappingRequest](docs/Model/PatchedEditFieldMappingRequest.md)
- [PayCurrencyEnum](docs/Model/PayCurrencyEnum.md)
- [PayFrequencyEnum](docs/Model/PayFrequencyEnum.md)
- [PayGroup](docs/Model/PayGroup.md)
- [PayPeriodEnum](docs/Model/PayPeriodEnum.md)
- [PayrollRun](docs/Model/PayrollRun.md)
- [PolicyTypeEnum](docs/Model/PolicyTypeEnum.md)
- [ReasonEnum](docs/Model/ReasonEnum.md)
- [RelationshipEnum](docs/Model/RelationshipEnum.md)
- [RemoteData](docs/Model/RemoteData.md)
- [RemoteEndpointInfo](docs/Model/RemoteEndpointInfo.md)
- [RemoteFieldAPI](docs/Model/RemoteFieldAPI.md)
- [RemoteFieldAPIResponse](docs/Model/RemoteFieldAPIResponse.md)
- [RemoteKey](docs/Model/RemoteKey.md)
- [RemoteKeyForRegenerationRequest](docs/Model/RemoteKeyForRegenerationRequest.md)
- [RemoteResponse](docs/Model/RemoteResponse.md)
- [RequestFormatEnum](docs/Model/RequestFormatEnum.md)
- [RequestTypeEnum](docs/Model/RequestTypeEnum.md)
- [ResponseTypeEnum](docs/Model/ResponseTypeEnum.md)
- [RoleEnum](docs/Model/RoleEnum.md)
- [RunStateEnum](docs/Model/RunStateEnum.md)
- [RunTypeEnum](docs/Model/RunTypeEnum.md)
- [SelectiveSyncConfigurationsUsageEnum](docs/Model/SelectiveSyncConfigurationsUsageEnum.md)
- [SyncStatus](docs/Model/SyncStatus.md)
- [SyncStatusStatusEnum](docs/Model/SyncStatusStatusEnum.md)
- [Tax](docs/Model/Tax.md)
- [Team](docs/Model/Team.md)
- [TimeOff](docs/Model/TimeOff.md)
- [TimeOffBalance](docs/Model/TimeOffBalance.md)
- [TimeOffEndpointRequest](docs/Model/TimeOffEndpointRequest.md)
- [TimeOffRequest](docs/Model/TimeOffRequest.md)
- [TimeOffResponse](docs/Model/TimeOffResponse.md)
- [TimeOffStatusEnum](docs/Model/TimeOffStatusEnum.md)
- [TimesheetEntry](docs/Model/TimesheetEntry.md)
- [TimesheetEntryEndpointRequest](docs/Model/TimesheetEntryEndpointRequest.md)
- [TimesheetEntryRequest](docs/Model/TimesheetEntryRequest.md)
- [TimesheetEntryResponse](docs/Model/TimesheetEntryResponse.md)
- [UnitsEnum](docs/Model/UnitsEnum.md)
- [ValidationProblemSource](docs/Model/ValidationProblemSource.md)
- [WarningValidationProblem](docs/Model/WarningValidationProblem.md)
- [WebhookReceiver](docs/Model/WebhookReceiver.md)
- [WebhookReceiverRequest](docs/Model/WebhookReceiverRequest.md)

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
    - Package version: `2.0.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
