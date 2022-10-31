# MergeHRISClient\IssuesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**issuesList()**](IssuesApi.md#issuesList) | **GET** /issues | 
[**issuesRetrieve()**](IssuesApi.md#issuesRetrieve) | **GET** /issues/{id} | 


## `issuesList()`

```php
issuesList($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status): \MergeHRISClient\Model\PaginatedIssueList
```



Gets issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$end_date = 'end_date_example'; // string | If included, will only include issues whose most recent action occurred before this time
$end_user_organization_name = 'end_user_organization_name_example'; // string
$first_incident_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was after this datetime.
$first_incident_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was before this datetime.
$include_muted = 'include_muted_example'; // string | If True, will include muted issues
$integration_name = 'integration_name_example'; // string
$last_incident_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was after this datetime.
$last_incident_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was before this datetime.
$page_size = 56; // int | Number of results to return per page.
$start_date = 'start_date_example'; // string | If included, will only include issues whose most recent action occurred after this time
$status = 'status_example'; // string

try {
    $result = $apiInstance->issuesList($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->issuesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**|  | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **end_date** | **string**| If included, will only include issues whose most recent action occurred before this time | [optional]
 **end_user_organization_name** | **string**|  | [optional]
 **first_incident_time_after** | **\DateTime**| If provided, will only return issues whose first incident time was after this datetime. | [optional]
 **first_incident_time_before** | **\DateTime**| If provided, will only return issues whose first incident time was before this datetime. | [optional]
 **include_muted** | **string**| If True, will include muted issues | [optional]
 **integration_name** | **string**|  | [optional]
 **last_incident_time_after** | **\DateTime**| If provided, will only return issues whose first incident time was after this datetime. | [optional]
 **last_incident_time_before** | **\DateTime**| If provided, will only return issues whose first incident time was before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **start_date** | **string**| If included, will only include issues whose most recent action occurred after this time | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedIssueList**](../Model/PaginatedIssueList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issuesRetrieve()`

```php
issuesRetrieve($id): \MergeHRISClient\Model\Issue
```



Get a specific issue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->issuesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->issuesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\MergeHRISClient\Model\Issue**](../Model/Issue.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
