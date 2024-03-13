# # EndUserDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_user_email_address** | **string** | Your end user&#39;s email address. This is purely for identification purposes - setting this value will not cause any emails to be sent. |
**end_user_organization_name** | **string** | Your end user&#39;s organization. |
**end_user_origin_id** | **string** | This unique identifier typically represents the ID for your end user in your product&#39;s database. This value must be distinct from other Linked Accounts&#39; unique identifiers. |
**categories** | [**\MergeHRISClient\Model\CategoriesEnum[]**](CategoriesEnum.md) | The integration categories to show in Merge Link. |
**integration** | **string** | The slug of a specific pre-selected integration for this linking flow token. For examples of slugs, see https://docs.merge.dev/guides/merge-link/single-integration/. | [optional]
**link_expiry_mins** | **int** | An integer number of minutes between [30, 720 or 10080 if for a Magic Link URL] for how long this token is valid. Defaults to 30. | [optional] [default to 30]
**should_create_magic_link_url** | **bool** | Whether to generate a Magic Link URL. Defaults to false. For more information on Magic Link, see https://merge.dev/blog/integrations-fast-say-hello-to-magic-link. | [optional] [default to false]
**common_models** | [**\MergeHRISClient\Model\CommonModelScopesBodyRequest[]**](CommonModelScopesBodyRequest.md) | An array of objects to specify the models and fields that will be disabled for a given Linked Account. Each object uses model_id, enabled_actions, and disabled_fields to specify the model, method, and fields that are scoped for a given Linked Account. | [optional]
**category_common_model_scopes** | [**array<string,\MergeHRISClient\Model\IndividualCommonModelScopeDeserializerRequest[]>**](array.md) | When creating a Link Token, you can set permissions for Common Models that will apply to the account that is going to be linked. Any model or field not specified in link token payload will default to existing settings. | [optional]
**language** | **string** | The language code for the language to localize Merge Link to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
