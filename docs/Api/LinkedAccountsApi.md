# MergeHRISClient\LinkedAccountsApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkedAccountsList()**](LinkedAccountsApi.md#linkedAccountsList) | **GET** /linked-accounts | 


## `linkedAccountsList()`

```php
linkedAccountsList($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status): \MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList
```



List linked accounts for your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\LinkedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string | Options: `accounting`, `ats`, `crm`, `filestorage`, `hris`, `mktg`, `ticketing`  * `hris` - hris * `ats` - ats * `accounting` - accounting * `ticketing` - ticketing * `crm` - crm * `mktg` - mktg * `filestorage` - filestorage * `datawarehouse` - datawarehouse
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$end_user_email_address = 'end_user_email_address_example'; // string | If provided, will only return linked accounts associated with the given email address.
$end_user_organization_name = 'end_user_organization_name_example'; // string | If provided, will only return linked accounts associated with the given organization name.
$end_user_origin_id = 'end_user_origin_id_example'; // string | If provided, will only return linked accounts associated with the given origin ID.
$end_user_origin_ids = 'end_user_origin_ids_example'; // string | Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once.
$id = 'id_example'; // string
$ids = 'ids_example'; // string | Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once.
$include_duplicates = True; // bool | If `true`, will include complete production duplicates of the account specified by the `id` query parameter in the response. `id` must be for a complete production linked account.
$integration_name = 'integration_name_example'; // string | If provided, will only return linked accounts associated with the given integration name.
$is_test_account = 'is_test_account_example'; // string | If included, will only include test linked accounts. If not included, will only include non-test linked accounts.
$page_size = 56; // int | Number of results to return per page.
$status = 'status_example'; // string | Filter by status. Options: `COMPLETE`, `INCOMPLETE`, `RELINK_NEEDED`

try {
    $result = $apiInstance->linkedAccountsList($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedAccountsApi->linkedAccountsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**| Options: &#x60;accounting&#x60;, &#x60;ats&#x60;, &#x60;crm&#x60;, &#x60;filestorage&#x60;, &#x60;hris&#x60;, &#x60;mktg&#x60;, &#x60;ticketing&#x60;  * &#x60;hris&#x60; - hris * &#x60;ats&#x60; - ats * &#x60;accounting&#x60; - accounting * &#x60;ticketing&#x60; - ticketing * &#x60;crm&#x60; - crm * &#x60;mktg&#x60; - mktg * &#x60;filestorage&#x60; - filestorage * &#x60;datawarehouse&#x60; - datawarehouse | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **end_user_email_address** | **string**| If provided, will only return linked accounts associated with the given email address. | [optional]
 **end_user_organization_name** | **string**| If provided, will only return linked accounts associated with the given organization name. | [optional]
 **end_user_origin_id** | **string**| If provided, will only return linked accounts associated with the given origin ID. | [optional]
 **end_user_origin_ids** | **string**| Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. | [optional]
 **id** | [**string**](../Model/.md)|  | [optional]
 **ids** | **string**| Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. | [optional]
 **include_duplicates** | **bool**| If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. | [optional]
 **integration_name** | **string**| If provided, will only return linked accounts associated with the given integration name. | [optional]
 **is_test_account** | **string**| If included, will only include test linked accounts. If not included, will only include non-test linked accounts. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **status** | **string**| Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList**](../Model/PaginatedAccountDetailsAndActionsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
