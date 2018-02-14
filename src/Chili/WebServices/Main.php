<?php

namespace Chili\WebServices;

/**
 * WebService functions for CHILI Publisher
 */
class Main extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'ServerGetSystemInfo' => 'Chili\WebServices\ServerGetSystemInfo',
      'ServerGetSystemInfoResponse' => 'Chili\WebServices\ServerGetSystemInfoResponse',
      'ServerLicenseRequest' => 'Chili\WebServices\ServerLicenseRequest',
      'ServerLicenseRequestResponse' => 'Chili\WebServices\ServerLicenseRequestResponse',
      'ServerLogClear' => 'Chili\WebServices\ServerLogClear',
      'ServerLogClearResponse' => 'Chili\WebServices\ServerLogClearResponse',
      'ServerSaveLoggingSettings' => 'Chili\WebServices\ServerSaveLoggingSettings',
      'ServerSaveLoggingSettingsResponse' => 'Chili\WebServices\ServerSaveLoggingSettingsResponse',
      'ServerSaveSettings' => 'Chili\WebServices\ServerSaveSettings',
      'ServerSaveSettingsResponse' => 'Chili\WebServices\ServerSaveSettingsResponse',
      'ServerSaveSystemInfoXML' => 'Chili\WebServices\ServerSaveSystemInfoXML',
      'ServerSaveSystemInfoXMLResponse' => 'Chili\WebServices\ServerSaveSystemInfoXMLResponse',
      'SetAssetDirectories' => 'Chili\WebServices\SetAssetDirectories',
      'SetAssetDirectoriesResponse' => 'Chili\WebServices\SetAssetDirectoriesResponse',
      'SetAutomaticPreviewGeneration' => 'Chili\WebServices\SetAutomaticPreviewGeneration',
      'SetAutomaticPreviewGenerationResponse' => 'Chili\WebServices\SetAutomaticPreviewGenerationResponse',
      'SetContentAdministration' => 'Chili\WebServices\SetContentAdministration',
      'SetContentAdministrationResponse' => 'Chili\WebServices\SetContentAdministrationResponse',
      'SetNextResourceItemID' => 'Chili\WebServices\SetNextResourceItemID',
      'SetNextResourceItemIDResponse' => 'Chili\WebServices\SetNextResourceItemIDResponse',
      'SetUserLanguage' => 'Chili\WebServices\SetUserLanguage',
      'SetUserLanguageResponse' => 'Chili\WebServices\SetUserLanguageResponse',
      'SetWorkingEnvironment' => 'Chili\WebServices\SetWorkingEnvironment',
      'SetWorkingEnvironmentResponse' => 'Chili\WebServices\SetWorkingEnvironmentResponse',
      'SetWorkspaceAdministration' => 'Chili\WebServices\SetWorkspaceAdministration',
      'SetWorkspaceAdministrationResponse' => 'Chili\WebServices\SetWorkspaceAdministrationResponse',
      'SpellCheckDictionariesGetSystemList' => 'Chili\WebServices\SpellCheckDictionariesGetSystemList',
      'SpellCheckDictionariesGetSystemListResponse' => 'Chili\WebServices\SpellCheckDictionariesGetSystemListResponse',
      'SpellCheckDictionaryAdd' => 'Chili\WebServices\SpellCheckDictionaryAdd',
      'SpellCheckDictionaryAddResponse' => 'Chili\WebServices\SpellCheckDictionaryAddResponse',
      'SpellCheckDictionaryAddFromSystem' => 'Chili\WebServices\SpellCheckDictionaryAddFromSystem',
      'SpellCheckDictionaryAddFromSystemResponse' => 'Chili\WebServices\SpellCheckDictionaryAddFromSystemResponse',
      'SpellCheckDictionaryReplaceFile' => 'Chili\WebServices\SpellCheckDictionaryReplaceFile',
      'SpellCheckDictionaryReplaceFileResponse' => 'Chili\WebServices\SpellCheckDictionaryReplaceFileResponse',
      'SwitchServerFlowGetCheckPoints' => 'Chili\WebServices\SwitchServerFlowGetCheckPoints',
      'SwitchServerFlowGetCheckPointsResponse' => 'Chili\WebServices\SwitchServerFlowGetCheckPointsResponse',
      'SwitchServerFlowGetElementsJobCount' => 'Chili\WebServices\SwitchServerFlowGetElementsJobCount',
      'SwitchServerFlowGetElementsJobCountResponse' => 'Chili\WebServices\SwitchServerFlowGetElementsJobCountResponse',
      'SwitchServerFlowGetFullConfig' => 'Chili\WebServices\SwitchServerFlowGetFullConfig',
      'SwitchServerFlowGetFullConfigResponse' => 'Chili\WebServices\SwitchServerFlowGetFullConfigResponse',
      'SwitchServerFlowGetJobs' => 'Chili\WebServices\SwitchServerFlowGetJobs',
      'SwitchServerFlowGetJobsResponse' => 'Chili\WebServices\SwitchServerFlowGetJobsResponse',
      'SwitchServerFlowGetSubmitPoints' => 'Chili\WebServices\SwitchServerFlowGetSubmitPoints',
      'SwitchServerFlowGetSubmitPointsResponse' => 'Chili\WebServices\SwitchServerFlowGetSubmitPointsResponse',
      'SwitchServerFlowSubmitFileToFolder' => 'Chili\WebServices\SwitchServerFlowSubmitFileToFolder',
      'SwitchServerFlowSubmitFileToFolderResponse' => 'Chili\WebServices\SwitchServerFlowSubmitFileToFolderResponse',
      'SwitchServerFlowSubmitFileToSubmitPoint' => 'Chili\WebServices\SwitchServerFlowSubmitFileToSubmitPoint',
      'SwitchServerFlowSubmitFileToSubmitPointResponse' => 'Chili\WebServices\SwitchServerFlowSubmitFileToSubmitPointResponse',
      'SwitchServerGetFlowList' => 'Chili\WebServices\SwitchServerGetFlowList',
      'SwitchServerGetFlowListResponse' => 'Chili\WebServices\SwitchServerGetFlowListResponse',
      'SwitchServerTestConnection' => 'Chili\WebServices\SwitchServerTestConnection',
      'SwitchServerTestConnectionResponse' => 'Chili\WebServices\SwitchServerTestConnectionResponse',
      'TaskGetEditorCliLog' => 'Chili\WebServices\TaskGetEditorCliLog',
      'TaskGetEditorCliLogResponse' => 'Chili\WebServices\TaskGetEditorCliLogResponse',
      'TaskGetStatus' => 'Chili\WebServices\TaskGetStatus',
      'TaskGetStatusResponse' => 'Chili\WebServices\TaskGetStatusResponse',
      'TaskGetStatusAndRemoveIfCompleted' => 'Chili\WebServices\TaskGetStatusAndRemoveIfCompleted',
      'TaskGetStatusAndRemoveIfCompletedResponse' => 'Chili\WebServices\TaskGetStatusAndRemoveIfCompletedResponse',
      'TaskRemoveFromLog' => 'Chili\WebServices\TaskRemoveFromLog',
      'TaskRemoveFromLogResponse' => 'Chili\WebServices\TaskRemoveFromLogResponse',
      'TasksGetList' => 'Chili\WebServices\TasksGetList',
      'TasksGetListResponse' => 'Chili\WebServices\TasksGetListResponse',
      'TasksGetQueueOverview' => 'Chili\WebServices\TasksGetQueueOverview',
      'TasksGetQueueOverviewResponse' => 'Chili\WebServices\TasksGetQueueOverviewResponse',
      'TasksGetStatusses' => 'Chili\WebServices\TasksGetStatusses',
      'TasksGetStatussesResponse' => 'Chili\WebServices\TasksGetStatussesResponse',
      'ThreeDModelCreatePackage' => 'Chili\WebServices\ThreeDModelCreatePackage',
      'ThreeDModelCreatePackageResponse' => 'Chili\WebServices\ThreeDModelCreatePackageResponse',
      'UploadExternalAsset' => 'Chili\WebServices\UploadExternalAsset',
      'UploadExternalAssetResponse' => 'Chili\WebServices\UploadExternalAssetResponse',
      'XinetExecutePortalDICall' => 'Chili\WebServices\XinetExecutePortalDICall',
      'XinetExecutePortalDICallResponse' => 'Chili\WebServices\XinetExecutePortalDICallResponse',
      'XinetSetCurrentCredentials' => 'Chili\WebServices\XinetSetCurrentCredentials',
      'XinetSetCurrentCredentialsResponse' => 'Chili\WebServices\XinetSetCurrentCredentialsResponse',
      'XinetTestConnection' => 'Chili\WebServices\XinetTestConnection',
      'XinetTestConnectionResponse' => 'Chili\WebServices\XinetTestConnectionResponse',
      'DocumentCreateFromPDF' => 'Chili\WebServices\DocumentCreateFromPDF',
      'DocumentCreateFromPDFResponse' => 'Chili\WebServices\DocumentCreateFromPDFResponse',
      'DocumentCreateHTML' => 'Chili\WebServices\DocumentCreateHTML',
      'DocumentCreateHTMLResponse' => 'Chili\WebServices\DocumentCreateHTMLResponse',
      'DocumentCreateIDML' => 'Chili\WebServices\DocumentCreateIDML',
      'DocumentCreateIDMLResponse' => 'Chili\WebServices\DocumentCreateIDMLResponse',
      'DocumentCreateImages' => 'Chili\WebServices\DocumentCreateImages',
      'DocumentCreateImagesResponse' => 'Chili\WebServices\DocumentCreateImagesResponse',
      'DocumentCreateImagesAndPDF' => 'Chili\WebServices\DocumentCreateImagesAndPDF',
      'DocumentCreateImagesAndPDFResponse' => 'Chili\WebServices\DocumentCreateImagesAndPDFResponse',
      'DocumentCreateODF' => 'Chili\WebServices\DocumentCreateODF',
      'DocumentCreateODFResponse' => 'Chili\WebServices\DocumentCreateODFResponse',
      'DocumentCreatePackage' => 'Chili\WebServices\DocumentCreatePackage',
      'DocumentCreatePackageResponse' => 'Chili\WebServices\DocumentCreatePackageResponse',
      'DocumentCreatePDF' => 'Chili\WebServices\DocumentCreatePDF',
      'DocumentCreatePDFResponse' => 'Chili\WebServices\DocumentCreatePDFResponse',
      'DocumentCreateTempFolding' => 'Chili\WebServices\DocumentCreateTempFolding',
      'DocumentCreateTempFoldingResponse' => 'Chili\WebServices\DocumentCreateTempFoldingResponse',
      'DocumentCreateTempHTML' => 'Chili\WebServices\DocumentCreateTempHTML',
      'DocumentCreateTempHTMLResponse' => 'Chili\WebServices\DocumentCreateTempHTMLResponse',
      'DocumentCreateTempIDML' => 'Chili\WebServices\DocumentCreateTempIDML',
      'DocumentCreateTempIDMLResponse' => 'Chili\WebServices\DocumentCreateTempIDMLResponse',
      'DocumentCreateTempImages' => 'Chili\WebServices\DocumentCreateTempImages',
      'DocumentCreateTempImagesResponse' => 'Chili\WebServices\DocumentCreateTempImagesResponse',
      'DocumentCreateTempImagesAndPDF' => 'Chili\WebServices\DocumentCreateTempImagesAndPDF',
      'DocumentCreateTempImagesAndPDFResponse' => 'Chili\WebServices\DocumentCreateTempImagesAndPDFResponse',
      'DocumentCreateTempODF' => 'Chili\WebServices\DocumentCreateTempODF',
      'DocumentCreateTempODFResponse' => 'Chili\WebServices\DocumentCreateTempODFResponse',
      'DocumentCreateTempPackage' => 'Chili\WebServices\DocumentCreateTempPackage',
      'DocumentCreateTempPackageResponse' => 'Chili\WebServices\DocumentCreateTempPackageResponse',
      'DocumentCreateTempPDF' => 'Chili\WebServices\DocumentCreateTempPDF',
      'DocumentCreateTempPDFResponse' => 'Chili\WebServices\DocumentCreateTempPDFResponse',
      'DocumentGetAnnotations' => 'Chili\WebServices\DocumentGetAnnotations',
      'DocumentGetAnnotationsResponse' => 'Chili\WebServices\DocumentGetAnnotationsResponse',
      'DocumentGetDefaultSettings' => 'Chili\WebServices\DocumentGetDefaultSettings',
      'DocumentGetDefaultSettingsResponse' => 'Chili\WebServices\DocumentGetDefaultSettingsResponse',
      'DocumentGetDocumentEventActions' => 'Chili\WebServices\DocumentGetDocumentEventActions',
      'DocumentGetDocumentEventActionsResponse' => 'Chili\WebServices\DocumentGetDocumentEventActionsResponse',
      'DocumentGetEditorURL' => 'Chili\WebServices\DocumentGetEditorURL',
      'DocumentGetEditorURLResponse' => 'Chili\WebServices\DocumentGetEditorURLResponse',
      'DocumentGetFoldingViewerURL' => 'Chili\WebServices\DocumentGetFoldingViewerURL',
      'DocumentGetFoldingViewerURLResponse' => 'Chili\WebServices\DocumentGetFoldingViewerURLResponse',
      'DocumentGetHTMLEditorURL' => 'Chili\WebServices\DocumentGetHTMLEditorURL',
      'DocumentGetHTMLEditorURLResponse' => 'Chili\WebServices\DocumentGetHTMLEditorURLResponse',
      'DocumentGetHTMLFoldingViewerURL' => 'Chili\WebServices\DocumentGetHTMLFoldingViewerURL',
      'DocumentGetHTMLFoldingViewerURLResponse' => 'Chili\WebServices\DocumentGetHTMLFoldingViewerURLResponse',
      'DocumentGetHTMLThreeDModelViewerURL' => 'Chili\WebServices\DocumentGetHTMLThreeDModelViewerURL',
      'DocumentGetHTMLThreeDModelViewerURLResponse' => 'Chili\WebServices\DocumentGetHTMLThreeDModelViewerURLResponse',
      'DocumentGetInfo' => 'Chili\WebServices\DocumentGetInfo',
      'DocumentGetInfoResponse' => 'Chili\WebServices\DocumentGetInfoResponse',
      'DocumentGetIpadXML' => 'Chili\WebServices\DocumentGetIpadXML',
      'DocumentGetIpadXMLResponse' => 'Chili\WebServices\DocumentGetIpadXMLResponse',
      'DocumentGetPlacedAdsAndEdit' => 'Chili\WebServices\DocumentGetPlacedAdsAndEdit',
      'DocumentGetPlacedAdsAndEditResponse' => 'Chili\WebServices\DocumentGetPlacedAdsAndEditResponse',
      'DocumentGetPreflightResults' => 'Chili\WebServices\DocumentGetPreflightResults',
      'DocumentGetPreflightResultsResponse' => 'Chili\WebServices\DocumentGetPreflightResultsResponse',
      'DocumentGetThreeDModelViewerURL' => 'Chili\WebServices\DocumentGetThreeDModelViewerURL',
      'DocumentGetThreeDModelViewerURLResponse' => 'Chili\WebServices\DocumentGetThreeDModelViewerURLResponse',
      'DocumentGetUsedAssets' => 'Chili\WebServices\DocumentGetUsedAssets',
      'DocumentGetUsedAssetsResponse' => 'Chili\WebServices\DocumentGetUsedAssetsResponse',
      'DocumentGetVariableDefinitions' => 'Chili\WebServices\DocumentGetVariableDefinitions',
      'DocumentGetVariableDefinitionsResponse' => 'Chili\WebServices\DocumentGetVariableDefinitionsResponse',
      'DocumentGetVariableValues' => 'Chili\WebServices\DocumentGetVariableValues',
      'DocumentGetVariableValuesResponse' => 'Chili\WebServices\DocumentGetVariableValuesResponse',
      'DocumentSetAnnotations' => 'Chili\WebServices\DocumentSetAnnotations',
      'DocumentSetAnnotationsResponse' => 'Chili\WebServices\DocumentSetAnnotationsResponse',
      'DocumentSetAssetDirectories' => 'Chili\WebServices\DocumentSetAssetDirectories',
      'DocumentSetAssetDirectoriesResponse' => 'Chili\WebServices\DocumentSetAssetDirectoriesResponse',
      'DocumentSetConstraints' => 'Chili\WebServices\DocumentSetConstraints',
      'DocumentSetConstraintsResponse' => 'Chili\WebServices\DocumentSetConstraintsResponse',
      'DocumentSetDataSource' => 'Chili\WebServices\DocumentSetDataSource',
      'DocumentSetDataSourceResponse' => 'Chili\WebServices\DocumentSetDataSourceResponse',
      'DocumentSetDocumentEventActions' => 'Chili\WebServices\DocumentSetDocumentEventActions',
      'DocumentSetDocumentEventActionsResponse' => 'Chili\WebServices\DocumentSetDocumentEventActionsResponse',
      'DocumentSetVariableDefinitions' => 'Chili\WebServices\DocumentSetVariableDefinitions',
      'DocumentSetVariableDefinitionsResponse' => 'Chili\WebServices\DocumentSetVariableDefinitionsResponse',
      'DocumentSetVariableValues' => 'Chili\WebServices\DocumentSetVariableValues',
      'DocumentSetVariableValuesResponse' => 'Chili\WebServices\DocumentSetVariableValuesResponse',
      'DownloadURL' => 'Chili\WebServices\DownloadURL',
      'DownloadURLResponse' => 'Chili\WebServices\DownloadURLResponse',
      'DynamicAssetProviderGetTempAsset' => 'Chili\WebServices\DynamicAssetProviderGetTempAsset',
      'DynamicAssetProviderGetTempAssetResponse' => 'Chili\WebServices\DynamicAssetProviderGetTempAssetResponse',
      'EditsGetFromURL' => 'Chili\WebServices\EditsGetFromURL',
      'EditsGetFromURLResponse' => 'Chili\WebServices\EditsGetFromURLResponse',
      'EnvironmentAdd' => 'Chili\WebServices\EnvironmentAdd',
      'EnvironmentAddResponse' => 'Chili\WebServices\EnvironmentAddResponse',
      'EnvironmentCopy' => 'Chili\WebServices\EnvironmentCopy',
      'EnvironmentCopyResponse' => 'Chili\WebServices\EnvironmentCopyResponse',
      'EnvironmentDelete' => 'Chili\WebServices\EnvironmentDelete',
      'EnvironmentDeleteResponse' => 'Chili\WebServices\EnvironmentDeleteResponse',
      'EnvironmentGetColorProfiles' => 'Chili\WebServices\EnvironmentGetColorProfiles',
      'EnvironmentGetColorProfilesResponse' => 'Chili\WebServices\EnvironmentGetColorProfilesResponse',
      'EnvironmentGetCurrent' => 'Chili\WebServices\EnvironmentGetCurrent',
      'EnvironmentGetCurrentResponse' => 'Chili\WebServices\EnvironmentGetCurrentResponse',
      'EnvironmentGetDiskUsage' => 'Chili\WebServices\EnvironmentGetDiskUsage',
      'EnvironmentGetDiskUsageResponse' => 'Chili\WebServices\EnvironmentGetDiskUsageResponse',
      'EnvironmentGetLoginSettings' => 'Chili\WebServices\EnvironmentGetLoginSettings',
      'EnvironmentGetLoginSettingsResponse' => 'Chili\WebServices\EnvironmentGetLoginSettingsResponse',
      'EnvironmentGetReflectionMaps' => 'Chili\WebServices\EnvironmentGetReflectionMaps',
      'EnvironmentGetReflectionMapsResponse' => 'Chili\WebServices\EnvironmentGetReflectionMapsResponse',
      'EnvironmentGetSettings' => 'Chili\WebServices\EnvironmentGetSettings',
      'EnvironmentGetSettingsResponse' => 'Chili\WebServices\EnvironmentGetSettingsResponse',
      'EnvironmentList' => 'Chili\WebServices\EnvironmentList',
      'EnvironmentListResponse' => 'Chili\WebServices\EnvironmentListResponse',
      'EnvironmentSaveSettings' => 'Chili\WebServices\EnvironmentSaveSettings',
      'EnvironmentSaveSettingsResponse' => 'Chili\WebServices\EnvironmentSaveSettingsResponse',
      'FoldingSettingCreatePackage' => 'Chili\WebServices\FoldingSettingCreatePackage',
      'FoldingSettingCreatePackageResponse' => 'Chili\WebServices\FoldingSettingCreatePackageResponse',
      'FontGetIncludedGlyphs' => 'Chili\WebServices\FontGetIncludedGlyphs',
      'FontGetIncludedGlyphsResponse' => 'Chili\WebServices\FontGetIncludedGlyphsResponse',
      'GenerateApiKey' => 'Chili\WebServices\GenerateApiKey',
      'GenerateApiKeyResponse' => 'Chili\WebServices\GenerateApiKeyResponse',
      'GenerateApiKeyWithSettings' => 'Chili\WebServices\GenerateApiKeyWithSettings',
      'GenerateApiKeyWithSettingsResponse' => 'Chili\WebServices\GenerateApiKeyWithSettingsResponse',
      'GetServerDate' => 'Chili\WebServices\GetServerDate',
      'GetServerDateResponse' => 'Chili\WebServices\GetServerDateResponse',
      'GoogleCreateAuthorizationUrl' => 'Chili\WebServices\GoogleCreateAuthorizationUrl',
      'GoogleCreateAuthorizationUrlResponse' => 'Chili\WebServices\GoogleCreateAuthorizationUrlResponse',
      'HealthCheckExecute' => 'Chili\WebServices\HealthCheckExecute',
      'HealthCheckExecuteResponse' => 'Chili\WebServices\HealthCheckExecuteResponse',
      'IconSetAddIcon' => 'Chili\WebServices\IconSetAddIcon',
      'IconSetAddIconResponse' => 'Chili\WebServices\IconSetAddIconResponse',
      'IconSetDeleteIcon' => 'Chili\WebServices\IconSetDeleteIcon',
      'IconSetDeleteIconResponse' => 'Chili\WebServices\IconSetDeleteIconResponse',
      'IconSetGetIcons' => 'Chili\WebServices\IconSetGetIcons',
      'IconSetGetIconsResponse' => 'Chili\WebServices\IconSetGetIconsResponse',
      'InterfaceGetInitialSettings' => 'Chili\WebServices\InterfaceGetInitialSettings',
      'InterfaceGetInitialSettingsResponse' => 'Chili\WebServices\InterfaceGetInitialSettingsResponse',
      'LanguageGetCombinedStrings' => 'Chili\WebServices\LanguageGetCombinedStrings',
      'LanguageGetCombinedStringsResponse' => 'Chili\WebServices\LanguageGetCombinedStringsResponse',
      'LanguageGetCsvURL' => 'Chili\WebServices\LanguageGetCsvURL',
      'LanguageGetCsvURLResponse' => 'Chili\WebServices\LanguageGetCsvURLResponse',
      'LanguageGetUnicodeTextURL' => 'Chili\WebServices\LanguageGetUnicodeTextURL',
      'LanguageGetUnicodeTextURLResponse' => 'Chili\WebServices\LanguageGetUnicodeTextURLResponse',
      'LanguageImportCsv' => 'Chili\WebServices\LanguageImportCsv',
      'LanguageImportCsvResponse' => 'Chili\WebServices\LanguageImportCsvResponse',
      'LanguageImportUnicodeText' => 'Chili\WebServices\LanguageImportUnicodeText',
      'LanguageImportUnicodeTextResponse' => 'Chili\WebServices\LanguageImportUnicodeTextResponse',
      'LanguageSaveStrings' => 'Chili\WebServices\LanguageSaveStrings',
      'LanguageSaveStringsResponse' => 'Chili\WebServices\LanguageSaveStringsResponse',
      'LanguagesGetList' => 'Chili\WebServices\LanguagesGetList',
      'LanguagesGetListResponse' => 'Chili\WebServices\LanguagesGetListResponse',
      'LockApiKey' => 'Chili\WebServices\LockApiKey',
      'LockApiKeyResponse' => 'Chili\WebServices\LockApiKeyResponse',
      'MobileFeedGetDocumentList' => 'Chili\WebServices\MobileFeedGetDocumentList',
      'MobileFeedGetDocumentListResponse' => 'Chili\WebServices\MobileFeedGetDocumentListResponse',
      'MobileFeedGetDocumentXML' => 'Chili\WebServices\MobileFeedGetDocumentXML',
      'MobileFeedGetDocumentXMLResponse' => 'Chili\WebServices\MobileFeedGetDocumentXMLResponse',
      'ODTGetStyles' => 'Chili\WebServices\ODTGetStyles',
      'ODTGetStylesResponse' => 'Chili\WebServices\ODTGetStylesResponse',
      'ODTGetTextFlow' => 'Chili\WebServices\ODTGetTextFlow',
      'ODTGetTextFlowResponse' => 'Chili\WebServices\ODTGetTextFlowResponse',
      'ProfilingClearSnapshot' => 'Chili\WebServices\ProfilingClearSnapshot',
      'ProfilingClearSnapshotResponse' => 'Chili\WebServices\ProfilingClearSnapshotResponse',
      'ProfilingSaveSnapshot' => 'Chili\WebServices\ProfilingSaveSnapshot',
      'ProfilingSaveSnapshotResponse' => 'Chili\WebServices\ProfilingSaveSnapshotResponse',
      'ResourceFolderAdd' => 'Chili\WebServices\ResourceFolderAdd',
      'ResourceFolderAddResponse' => 'Chili\WebServices\ResourceFolderAddResponse',
      'ResourceFolderCopy' => 'Chili\WebServices\ResourceFolderCopy',
      'ResourceFolderCopyResponse' => 'Chili\WebServices\ResourceFolderCopyResponse',
      'ResourceFolderDelete' => 'Chili\WebServices\ResourceFolderDelete',
      'ResourceFolderDeleteResponse' => 'Chili\WebServices\ResourceFolderDeleteResponse',
      'ResourceFolderMove' => 'Chili\WebServices\ResourceFolderMove',
      'ResourceFolderMoveResponse' => 'Chili\WebServices\ResourceFolderMoveResponse',
      'ResourceGetHistory' => 'Chili\WebServices\ResourceGetHistory',
      'ResourceGetHistoryResponse' => 'Chili\WebServices\ResourceGetHistoryResponse',
      'ResourceGetTree' => 'Chili\WebServices\ResourceGetTree',
      'ResourceGetTreeResponse' => 'Chili\WebServices\ResourceGetTreeResponse',
      'ResourceGetTreeLevel' => 'Chili\WebServices\ResourceGetTreeLevel',
      'ResourceGetTreeLevelResponse' => 'Chili\WebServices\ResourceGetTreeLevelResponse',
      'ResourceItemAdd' => 'Chili\WebServices\ResourceItemAdd',
      'ResourceItemAddResponse' => 'Chili\WebServices\ResourceItemAddResponse',
      'ResourceItemAddFromURL' => 'Chili\WebServices\ResourceItemAddFromURL',
      'ResourceItemAddFromURLResponse' => 'Chili\WebServices\ResourceItemAddFromURLResponse',
      'ResourceItemAddFromURLWithModificationDate' => 'Chili\WebServices\ResourceItemAddFromURLWithModificationDate',
      'ResourceItemAddFromURLWithModificationDateResponse' => 'Chili\WebServices\ResourceItemAddFromURLWithModificationDateResponse',
      'ResourceItemAddPreviewOverride' => 'Chili\WebServices\ResourceItemAddPreviewOverride',
      'ResourceItemAddPreviewOverrideResponse' => 'Chili\WebServices\ResourceItemAddPreviewOverrideResponse',
      'ResourceItemAddWithPreview' => 'Chili\WebServices\ResourceItemAddWithPreview',
      'ResourceItemAddWithPreviewResponse' => 'Chili\WebServices\ResourceItemAddWithPreviewResponse',
      'ResourceItemCopy' => 'Chili\WebServices\ResourceItemCopy',
      'ResourceItemCopyResponse' => 'Chili\WebServices\ResourceItemCopyResponse',
      'ResourceItemDelete' => 'Chili\WebServices\ResourceItemDelete',
      'ResourceItemDeleteResponse' => 'Chili\WebServices\ResourceItemDeleteResponse',
      'ResourceItemGetByIdOrPath' => 'Chili\WebServices\ResourceItemGetByIdOrPath',
      'ResourceItemGetByIdOrPathResponse' => 'Chili\WebServices\ResourceItemGetByIdOrPathResponse',
      'ResourceItemGetByName' => 'Chili\WebServices\ResourceItemGetByName',
      'ResourceItemGetByNameResponse' => 'Chili\WebServices\ResourceItemGetByNameResponse',
      'ResourceItemGetByPath' => 'Chili\WebServices\ResourceItemGetByPath',
      'ResourceItemGetByPathResponse' => 'Chili\WebServices\ResourceItemGetByPathResponse',
      'ResourceItemGetCacheInfo' => 'Chili\WebServices\ResourceItemGetCacheInfo',
      'ResourceItemGetCacheInfoResponse' => 'Chili\WebServices\ResourceItemGetCacheInfoResponse',
      'ResourceItemGetCustomMetaData' => 'Chili\WebServices\ResourceItemGetCustomMetaData',
      'ResourceItemGetCustomMetaDataResponse' => 'Chili\WebServices\ResourceItemGetCustomMetaDataResponse',
      'ResourceItemGetDefinitionXML' => 'Chili\WebServices\ResourceItemGetDefinitionXML',
      'ResourceItemGetDefinitionXMLResponse' => 'Chili\WebServices\ResourceItemGetDefinitionXMLResponse',
      'ResourceItemGetHistory' => 'Chili\WebServices\ResourceItemGetHistory',
      'ResourceItemGetHistoryResponse' => 'Chili\WebServices\ResourceItemGetHistoryResponse',
      'ResourceItemGetPrivateInfo' => 'Chili\WebServices\ResourceItemGetPrivateInfo',
      'ResourceItemGetPrivateInfoResponse' => 'Chili\WebServices\ResourceItemGetPrivateInfoResponse',
      'ResourceItemGetTransformedURL' => 'Chili\WebServices\ResourceItemGetTransformedURL',
      'ResourceItemGetTransformedURLResponse' => 'Chili\WebServices\ResourceItemGetTransformedURLResponse',
      'ResourceItemGetTransformedURLWithDebugInfo' => 'Chili\WebServices\ResourceItemGetTransformedURLWithDebugInfo',
      'ResourceItemGetTransformedURLWithDebugInfoResponse' => 'Chili\WebServices\ResourceItemGetTransformedURLWithDebugInfoResponse',
      'ResourceItemGetURL' => 'Chili\WebServices\ResourceItemGetURL',
      'ResourceItemGetURLResponse' => 'Chili\WebServices\ResourceItemGetURLResponse',
      'ResourceItemGetURLForAnonymousUser' => 'Chili\WebServices\ResourceItemGetURLForAnonymousUser',
      'ResourceItemGetURLForAnonymousUserResponse' => 'Chili\WebServices\ResourceItemGetURLForAnonymousUserResponse',
      'ResourceItemGetURLWithDebugInfo' => 'Chili\WebServices\ResourceItemGetURLWithDebugInfo',
      'ResourceItemGetURLWithDebugInfoResponse' => 'Chili\WebServices\ResourceItemGetURLWithDebugInfoResponse',
      'ResourceItemGetXML' => 'Chili\WebServices\ResourceItemGetXML',
      'ResourceItemGetXMLResponse' => 'Chili\WebServices\ResourceItemGetXMLResponse',
      'ResourceItemMove' => 'Chili\WebServices\ResourceItemMove',
      'ResourceItemMoveResponse' => 'Chili\WebServices\ResourceItemMoveResponse',
      'ResourceItemRemovePreviewOverride' => 'Chili\WebServices\ResourceItemRemovePreviewOverride',
      'ResourceItemRemovePreviewOverrideResponse' => 'Chili\WebServices\ResourceItemRemovePreviewOverrideResponse',
      'ResourceItemReplaceFile' => 'Chili\WebServices\ResourceItemReplaceFile',
      'ResourceItemReplaceFileResponse' => 'Chili\WebServices\ResourceItemReplaceFileResponse',
      'ResourceItemReplaceFileWithPreviewOverride' => 'Chili\WebServices\ResourceItemReplaceFileWithPreviewOverride',
      'ResourceItemReplaceFileWithPreviewOverrideResponse' => 'Chili\WebServices\ResourceItemReplaceFileWithPreviewOverrideResponse',
      'ResourceItemResetPreviews' => 'Chili\WebServices\ResourceItemResetPreviews',
      'ResourceItemResetPreviewsResponse' => 'Chili\WebServices\ResourceItemResetPreviewsResponse',
      'ResourceItemsAddFromZip' => 'Chili\WebServices\ResourceItemsAddFromZip',
      'ResourceItemsAddFromZipResponse' => 'Chili\WebServices\ResourceItemsAddFromZipResponse',
      'ResourceItemSave' => 'Chili\WebServices\ResourceItemSave',
      'ResourceItemSaveResponse' => 'Chili\WebServices\ResourceItemSaveResponse',
      'ResourceItemSaveCustomMetaData' => 'Chili\WebServices\ResourceItemSaveCustomMetaData',
      'ResourceItemSaveCustomMetaDataResponse' => 'Chili\WebServices\ResourceItemSaveCustomMetaDataResponse',
      'ResourceLibraryGetSettings' => 'Chili\WebServices\ResourceLibraryGetSettings',
      'ResourceLibraryGetSettingsResponse' => 'Chili\WebServices\ResourceLibraryGetSettingsResponse',
      'ResourceLibrarySaveSettings' => 'Chili\WebServices\ResourceLibrarySaveSettings',
      'ResourceLibrarySaveSettingsResponse' => 'Chili\WebServices\ResourceLibrarySaveSettingsResponse',
      'ResourceList' => 'Chili\WebServices\ResourceList',
      'ResourceListResponse' => 'Chili\WebServices\ResourceListResponse',
      'ResourceSearch' => 'Chili\WebServices\ResourceSearch',
      'ResourceSearchResponse' => 'Chili\WebServices\ResourceSearchResponse',
      'ResourceSearchByIDs' => 'Chili\WebServices\ResourceSearchByIDs',
      'ResourceSearchByIDsResponse' => 'Chili\WebServices\ResourceSearchByIDsResponse',
      'ResourceSearchInFolder' => 'Chili\WebServices\ResourceSearchInFolder',
      'ResourceSearchInFolderResponse' => 'Chili\WebServices\ResourceSearchInFolderResponse',
      'ResourceSearchPaged' => 'Chili\WebServices\ResourceSearchPaged',
      'ResourceSearchPagedResponse' => 'Chili\WebServices\ResourceSearchPagedResponse',
      'ServerDeleteAllSaveSystemFileInfos' => 'Chili\WebServices\ServerDeleteAllSaveSystemFileInfos',
      'ServerDeleteAllSaveSystemFileInfosResponse' => 'Chili\WebServices\ServerDeleteAllSaveSystemFileInfosResponse',
      'ServerDeleteSavedSystemInfoXML' => 'Chili\WebServices\ServerDeleteSavedSystemInfoXML',
      'ServerDeleteSavedSystemInfoXMLResponse' => 'Chili\WebServices\ServerDeleteSavedSystemInfoXMLResponse',
      'ServerGetLicenseInfo' => 'Chili\WebServices\ServerGetLicenseInfo',
      'ServerGetLicenseInfoResponse' => 'Chili\WebServices\ServerGetLicenseInfoResponse',
      'ServerGetLoggingSettings' => 'Chili\WebServices\ServerGetLoggingSettings',
      'ServerGetLoggingSettingsResponse' => 'Chili\WebServices\ServerGetLoggingSettingsResponse',
      'ServerGetSavedSystemInfoList' => 'Chili\WebServices\ServerGetSavedSystemInfoList',
      'ServerGetSavedSystemInfoListResponse' => 'Chili\WebServices\ServerGetSavedSystemInfoListResponse',
      'ServerGetSavedSystemInfoXML' => 'Chili\WebServices\ServerGetSavedSystemInfoXML',
      'ServerGetSavedSystemInfoXMLResponse' => 'Chili\WebServices\ServerGetSavedSystemInfoXMLResponse',
      'ServerGetSettings' => 'Chili\WebServices\ServerGetSettings',
      'ServerGetSettingsResponse' => 'Chili\WebServices\ServerGetSettingsResponse',
      'AdsGetFromURL' => 'Chili\WebServices\AdsGetFromURL',
      'AdsGetFromURLResponse' => 'Chili\WebServices\AdsGetFromURLResponse',
      'ApiKeyClearHeaderFieldsForServerDownloads' => 'Chili\WebServices\ApiKeyClearHeaderFieldsForServerDownloads',
      'ApiKeyClearHeaderFieldsForServerDownloadsResponse' => 'Chili\WebServices\ApiKeyClearHeaderFieldsForServerDownloadsResponse',
      'ApiKeyGetCurrentSettings' => 'Chili\WebServices\ApiKeyGetCurrentSettings',
      'ApiKeyGetCurrentSettingsResponse' => 'Chili\WebServices\ApiKeyGetCurrentSettingsResponse',
      'ApiKeyKeepAlive' => 'Chili\WebServices\ApiKeyKeepAlive',
      'ApiKeyKeepAliveResponse' => 'Chili\WebServices\ApiKeyKeepAliveResponse',
      'ApiKeySetHeaderFieldForServerDownloads' => 'Chili\WebServices\ApiKeySetHeaderFieldForServerDownloads',
      'ApiKeySetHeaderFieldForServerDownloadsResponse' => 'Chili\WebServices\ApiKeySetHeaderFieldForServerDownloadsResponse',
      'AssetGetImageInfo' => 'Chili\WebServices\AssetGetImageInfo',
      'AssetGetImageInfoResponse' => 'Chili\WebServices\AssetGetImageInfoResponse',
      'BarcodeCreate' => 'Chili\WebServices\BarcodeCreate',
      'BarcodeCreateResponse' => 'Chili\WebServices\BarcodeCreateResponse',
      'BarcodeCreateColored' => 'Chili\WebServices\BarcodeCreateColored',
      'BarcodeCreateColoredResponse' => 'Chili\WebServices\BarcodeCreateColoredResponse',
      'CsvFileCreate' => 'Chili\WebServices\CsvFileCreate',
      'CsvFileCreateResponse' => 'Chili\WebServices\CsvFileCreateResponse',
      'DataSourceAddSampleFile' => 'Chili\WebServices\DataSourceAddSampleFile',
      'DataSourceAddSampleFileResponse' => 'Chili\WebServices\DataSourceAddSampleFileResponse',
      'DataSourceDeleteSampleFile' => 'Chili\WebServices\DataSourceDeleteSampleFile',
      'DataSourceDeleteSampleFileResponse' => 'Chili\WebServices\DataSourceDeleteSampleFileResponse',
      'DataSourceDownloadSpreadsheets' => 'Chili\WebServices\DataSourceDownloadSpreadsheets',
      'DataSourceDownloadSpreadsheetsResponse' => 'Chili\WebServices\DataSourceDownloadSpreadsheetsResponse',
      'DataSourceDownloadURL' => 'Chili\WebServices\DataSourceDownloadURL',
      'DataSourceDownloadURLResponse' => 'Chili\WebServices\DataSourceDownloadURLResponse',
      'DataSourceFileGetXML' => 'Chili\WebServices\DataSourceFileGetXML',
      'DataSourceFileGetXMLResponse' => 'Chili\WebServices\DataSourceFileGetXMLResponse',
      'DataSourceListSampleFiles' => 'Chili\WebServices\DataSourceListSampleFiles',
      'DataSourceListSampleFilesResponse' => 'Chili\WebServices\DataSourceListSampleFilesResponse',
      'DataSourceSalesForceGetXML' => 'Chili\WebServices\DataSourceSalesForceGetXML',
      'DataSourceSalesForceGetXMLResponse' => 'Chili\WebServices\DataSourceSalesForceGetXMLResponse',
      'DataSourceSpreadsheetGetXML' => 'Chili\WebServices\DataSourceSpreadsheetGetXML',
      'DataSourceSpreadsheetGetXMLResponse' => 'Chili\WebServices\DataSourceSpreadsheetGetXMLResponse',
      'DocumentCopyAnnotations' => 'Chili\WebServices\DocumentCopyAnnotations',
      'DocumentCopyAnnotationsResponse' => 'Chili\WebServices\DocumentCopyAnnotationsResponse',
      'DocumentCopyDocumentEventActions' => 'Chili\WebServices\DocumentCopyDocumentEventActions',
      'DocumentCopyDocumentEventActionsResponse' => 'Chili\WebServices\DocumentCopyDocumentEventActionsResponse',
      'DocumentCopyVariableDefinitions' => 'Chili\WebServices\DocumentCopyVariableDefinitions',
      'DocumentCopyVariableDefinitionsResponse' => 'Chili\WebServices\DocumentCopyVariableDefinitionsResponse',
      'DocumentCreateFromBlankDocTemplate' => 'Chili\WebServices\DocumentCreateFromBlankDocTemplate',
      'DocumentCreateFromBlankDocTemplateResponse' => 'Chili\WebServices\DocumentCreateFromBlankDocTemplateResponse',
      'DocumentCreateFromChiliPackage' => 'Chili\WebServices\DocumentCreateFromChiliPackage',
      'DocumentCreateFromChiliPackageResponse' => 'Chili\WebServices\DocumentCreateFromChiliPackageResponse',
      'DocumentCreateFromODT' => 'Chili\WebServices\DocumentCreateFromODT',
      'DocumentCreateFromODTResponse' => 'Chili\WebServices\DocumentCreateFromODTResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'http://chili-server.test/CHILI/main.asmx?WSDL')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns information on the server CHILI is installed on. If &#39;extended&#39; information is requested, the gathering of the information will take longer, and require more server resources<br/>
     *
     * @param ServerGetSystemInfo $parameters
     * @access public
     * @return ServerGetSystemInfoResponse
     */
    public function ServerGetSystemInfo(ServerGetSystemInfo $parameters)
    {
      return $this->__soapCall('ServerGetSystemInfo', array($parameters));
    }

    /**
     * Handles server licensing requests<br/>
     *
     * @param ServerLicenseRequest $parameters
     * @access public
     * @return ServerLicenseRequestResponse
     */
    public function ServerLicenseRequest(ServerLicenseRequest $parameters)
    {
      return $this->__soapCall('ServerLicenseRequest', array($parameters));
    }

    /**
     * Removes all current log files<br/>
     *
     * @param ServerLogClear $parameters
     * @access public
     * @return ServerLogClearResponse
     */
    public function ServerLogClear(ServerLogClear $parameters)
    {
      return $this->__soapCall('ServerLogClear', array($parameters));
    }

    /**
     * Saves the server logging settings<br/>
     *
     * @param ServerSaveLoggingSettings $parameters
     * @access public
     * @return ServerSaveLoggingSettingsResponse
     */
    public function ServerSaveLoggingSettings(ServerSaveLoggingSettings $parameters)
    {
      return $this->__soapCall('ServerSaveLoggingSettings', array($parameters));
    }

    /**
     * Saves the server settings<br/>
     *
     * @param ServerSaveSettings $parameters
     * @access public
     * @return ServerSaveSettingsResponse
     */
    public function ServerSaveSettings(ServerSaveSettings $parameters)
    {
      return $this->__soapCall('ServerSaveSettings', array($parameters));
    }

    /**
     * Saves the provided xml to the system info repository<br/>
     *
     * @param ServerSaveSystemInfoXML $parameters
     * @access public
     * @return ServerSaveSystemInfoXMLResponse
     */
    public function ServerSaveSystemInfoXML(ServerSaveSystemInfoXML $parameters)
    {
      return $this->__soapCall('ServerSaveSystemInfoXML', array($parameters));
    }

    /**
     * Applies values to the Asset Directories which can be entered also per document in the Document Settings panel. These values are applied to the apiKey, and override any values entered manually inside a document.<br/>To clear an existing value, provide the string &#39;empty&#39;. An empty string (&#39;&#39;) indicates that nothing changes for that argument.<br/>
     *
     * @param SetAssetDirectories $parameters
     * @access public
     * @return SetAssetDirectoriesResponse
     */
    public function SetAssetDirectories(SetAssetDirectories $parameters)
    {
      return $this->__soapCall('SetAssetDirectories', array($parameters));
    }

    /**
     * If set to false, previews for new items are not automatically generated all at once (to prevent file locks while you still plan on working on the new item, for example)<br/>
     *
     * @param SetAutomaticPreviewGeneration $parameters
     * @access public
     * @return SetAutomaticPreviewGenerationResponse
     */
    public function SetAutomaticPreviewGeneration(SetAutomaticPreviewGeneration $parameters)
    {
      return $this->__soapCall('SetAutomaticPreviewGeneration', array($parameters));
    }

    /**
     * Toggles content administration privileges for the current apiKey.<br/>This privilege influences the possibility to manage the content of a document in the CHILI Editor including more advanced settings (eg Constraints). Inside the editor, various items have settings referencing &quot;Administrators&quot;. This means a user which has workspace or content administration privileges, depending on the context.<br/>
     *
     * @param SetContentAdministration $parameters
     * @access public
     * @return SetContentAdministrationResponse
     */
    public function SetContentAdministration(SetContentAdministration $parameters)
    {
      return $this->__soapCall('SetContentAdministration', array($parameters));
    }

    /**
     * Set the ID for the next item in the queue.<br/>It will be used when adding items via &quot;ResourceItemAdd&quot; or equivalents<br/>
     *
     * @param SetNextResourceItemID $parameters
     * @access public
     * @return SetNextResourceItemIDResponse
     */
    public function SetNextResourceItemID(SetNextResourceItemID $parameters)
    {
      return $this->__soapCall('SetNextResourceItemID', array($parameters));
    }

    /**
     * Applies a language for the editor to the current apiKey session<br/>
     *
     * @param SetUserLanguage $parameters
     * @access public
     * @return SetUserLanguageResponse
     */
    public function SetUserLanguage(SetUserLanguage $parameters)
    {
      return $this->__soapCall('SetUserLanguage', array($parameters));
    }

    /**
     * Sets the working environment as a property of the generated apiKey.<br/>All subsequent calls to the WebServices will operate inside that environment.<br/>This function can only be called if the user you have logged in with (using GenerateApiKey) is part of the top-level &quot;Admin&quot; environment.<br/>
     *
     * @param SetWorkingEnvironment $parameters
     * @access public
     * @return SetWorkingEnvironmentResponse
     */
    public function SetWorkingEnvironment(SetWorkingEnvironment $parameters)
    {
      return $this->__soapCall('SetWorkingEnvironment', array($parameters));
    }

    /**
     * Toggles workspace administration privileges for the current apiKey.<br/>This privilege influences the possibility to manage the workspace in the CHILI Editor. Inside the editor, various items have settings referencing &quot;Administrators&quot;. This means a user which has workspace administration privileges.<br/>By toggling the privilege, you can have a single CHILI user (potentially with &quot;Environment Administrator&quot; privileges) to log in the webservices (using GenerateApiKey) for all of your own users.<br/>NOTE: for backward compatibility, setting workspace administration to false also sets content administration to false. This can be switched on again using the SetContentAdministration function if applicable.<br/>
     *
     * @param SetWorkspaceAdministration $parameters
     * @access public
     * @return SetWorkspaceAdministrationResponse
     */
    public function SetWorkspaceAdministration(SetWorkspaceAdministration $parameters)
    {
      return $this->__soapCall('SetWorkspaceAdministration', array($parameters));
    }

    /**
     * Returns a list of the spellling dictionaries available by default<br/>
     *
     * @param SpellCheckDictionariesGetSystemList $parameters
     * @access public
     * @return SpellCheckDictionariesGetSystemListResponse
     */
    public function SpellCheckDictionariesGetSystemList(SpellCheckDictionariesGetSystemList $parameters)
    {
      return $this->__soapCall('SpellCheckDictionariesGetSystemList', array($parameters));
    }

    /**
     * Adds a new SpellCheckDictionary resource item<br/>
     *
     * @param SpellCheckDictionaryAdd $parameters
     * @access public
     * @return SpellCheckDictionaryAddResponse
     */
    public function SpellCheckDictionaryAdd(SpellCheckDictionaryAdd $parameters)
    {
      return $this->__soapCall('SpellCheckDictionaryAdd', array($parameters));
    }

    /**
     * Adds a new SpellCheckDictionary resource item<br/>
     *
     * @param SpellCheckDictionaryAddFromSystem $parameters
     * @access public
     * @return SpellCheckDictionaryAddFromSystemResponse
     */
    public function SpellCheckDictionaryAddFromSystem(SpellCheckDictionaryAddFromSystem $parameters)
    {
      return $this->__soapCall('SpellCheckDictionaryAddFromSystem', array($parameters));
    }

    /**
     * Adds a new SpellCheckDictionary resource item<br/>
     *
     * @param SpellCheckDictionaryReplaceFile $parameters
     * @access public
     * @return SpellCheckDictionaryReplaceFileResponse
     */
    public function SpellCheckDictionaryReplaceFile(SpellCheckDictionaryReplaceFile $parameters)
    {
      return $this->__soapCall('SpellCheckDictionaryReplaceFile', array($parameters));
    }

    /**
     * Returns a list of the submit points of a flow<br/>
     *
     * @param SwitchServerFlowGetCheckPoints $parameters
     * @access public
     * @return SwitchServerFlowGetCheckPointsResponse
     */
    public function SwitchServerFlowGetCheckPoints(SwitchServerFlowGetCheckPoints $parameters)
    {
      return $this->__soapCall('SwitchServerFlowGetCheckPoints', array($parameters));
    }

    /**
     * Returns a list of the jobs existing inside a Switch FLow<br/>
     *
     * @param SwitchServerFlowGetElementsJobCount $parameters
     * @access public
     * @return SwitchServerFlowGetElementsJobCountResponse
     */
    public function SwitchServerFlowGetElementsJobCount(SwitchServerFlowGetElementsJobCount $parameters)
    {
      return $this->__soapCall('SwitchServerFlowGetElementsJobCount', array($parameters));
    }

    /**
     * Returns the full configuration of the Flow<br/>
     *
     * @param SwitchServerFlowGetFullConfig $parameters
     * @access public
     * @return SwitchServerFlowGetFullConfigResponse
     */
    public function SwitchServerFlowGetFullConfig(SwitchServerFlowGetFullConfig $parameters)
    {
      return $this->__soapCall('SwitchServerFlowGetFullConfig', array($parameters));
    }

    /**
     * Returns a list of the submit points of a flow<br/>
     *
     * @param SwitchServerFlowGetJobs $parameters
     * @access public
     * @return SwitchServerFlowGetJobsResponse
     */
    public function SwitchServerFlowGetJobs(SwitchServerFlowGetJobs $parameters)
    {
      return $this->__soapCall('SwitchServerFlowGetJobs', array($parameters));
    }

    /**
     * Returns a list of the submit points of a flow<br/>
     *
     * @param SwitchServerFlowGetSubmitPoints $parameters
     * @access public
     * @return SwitchServerFlowGetSubmitPointsResponse
     */
    public function SwitchServerFlowGetSubmitPoints(SwitchServerFlowGetSubmitPoints $parameters)
    {
      return $this->__soapCall('SwitchServerFlowGetSubmitPoints', array($parameters));
    }

    /**
     * Submit a file to an input folder of a Switch Flow<br/>
     *
     * @param SwitchServerFlowSubmitFileToFolder $parameters
     * @access public
     * @return SwitchServerFlowSubmitFileToFolderResponse
     */
    public function SwitchServerFlowSubmitFileToFolder(SwitchServerFlowSubmitFileToFolder $parameters)
    {
      return $this->__soapCall('SwitchServerFlowSubmitFileToFolder', array($parameters));
    }

    /**
     * Submit a file to a Submit Point in a Switch Flow<br/>
     *
     * @param SwitchServerFlowSubmitFileToSubmitPoint $parameters
     * @access public
     * @return SwitchServerFlowSubmitFileToSubmitPointResponse
     */
    public function SwitchServerFlowSubmitFileToSubmitPoint(SwitchServerFlowSubmitFileToSubmitPoint $parameters)
    {
      return $this->__soapCall('SwitchServerFlowSubmitFileToSubmitPoint', array($parameters));
    }

    /**
     * Returns a list of the Flows available in a Switch Server<br/>
     *
     * @param SwitchServerGetFlowList $parameters
     * @access public
     * @return SwitchServerGetFlowListResponse
     */
    public function SwitchServerGetFlowList(SwitchServerGetFlowList $parameters)
    {
      return $this->__soapCall('SwitchServerGetFlowList', array($parameters));
    }

    /**
     * Tests whether a connection can be made to the Switch application located at &#39;url&#39;<br/>
     *
     * @param SwitchServerTestConnection $parameters
     * @access public
     * @return SwitchServerTestConnectionResponse
     */
    public function SwitchServerTestConnection(SwitchServerTestConnection $parameters)
    {
      return $this->__soapCall('SwitchServerTestConnection', array($parameters));
    }

    /**
     * Returns the current log of Editor_CLI (for tasks of type documentSaveXml)<br/>
     *
     * @param TaskGetEditorCliLog $parameters
     * @access public
     * @return TaskGetEditorCliLogResponse
     */
    public function TaskGetEditorCliLog(TaskGetEditorCliLog $parameters)
    {
      return $this->__soapCall('TaskGetEditorCliLog', array($parameters));
    }

    /**
     * Returns an XML description of the status of a task<br/>
     *
     * @param TaskGetStatus $parameters
     * @access public
     * @return TaskGetStatusResponse
     */
    public function TaskGetStatus(TaskGetStatus $parameters)
    {
      return $this->__soapCall('TaskGetStatus', array($parameters));
    }

    /**
     * Returns an XML description of the status of a task. If the task has completed, it will be removed from the Log directory of the Queue<br/>
     *
     * @param TaskGetStatusAndRemoveIfCompleted $parameters
     * @access public
     * @return TaskGetStatusAndRemoveIfCompletedResponse
     */
    public function TaskGetStatusAndRemoveIfCompleted(TaskGetStatusAndRemoveIfCompleted $parameters)
    {
      return $this->__soapCall('TaskGetStatusAndRemoveIfCompleted', array($parameters));
    }

    /**
     * Removes (deletes) a Task file from the Log directory<br/>
     *
     * @param TaskRemoveFromLog $parameters
     * @access public
     * @return TaskRemoveFromLogResponse
     */
    public function TaskRemoveFromLog(TaskRemoveFromLog $parameters)
    {
      return $this->__soapCall('TaskRemoveFromLog', array($parameters));
    }

    /**
     * Returns a list of tasks<br/>
     *
     * @param TasksGetList $parameters
     * @access public
     * @return TasksGetListResponse
     */
    public function TasksGetList(TasksGetList $parameters)
    {
      return $this->__soapCall('TasksGetList', array($parameters));
    }

    /**
     * Returns an overview of the status of the various Windows Services which are monitoring the Queue<br/>
     *
     * @param TasksGetQueueOverview $parameters
     * @access public
     * @return TasksGetQueueOverviewResponse
     */
    public function TasksGetQueueOverview(TasksGetQueueOverview $parameters)
    {
      return $this->__soapCall('TasksGetQueueOverview', array($parameters));
    }

    /**
     * Returns the status of multiple tasks simultaneously<br/>
     *
     * @param TasksGetStatusses $parameters
     * @access public
     * @return TasksGetStatussesResponse
     */
    public function TasksGetStatusses(TasksGetStatusses $parameters)
    {
      return $this->__soapCall('TasksGetStatusses', array($parameters));
    }

    /**
     * Returns a ZIP with all the needed recources and the settings file with fixed references.<br/>
     *
     * @param ThreeDModelCreatePackage $parameters
     * @access public
     * @return ThreeDModelCreatePackageResponse
     */
    public function ThreeDModelCreatePackage(ThreeDModelCreatePackage $parameters)
    {
      return $this->__soapCall('ThreeDModelCreatePackage', array($parameters));
    }

    /**
     * Adds an asset to an External Asset Library<br/>
     *
     * @param UploadExternalAsset $parameters
     * @access public
     * @return UploadExternalAssetResponse
     */
    public function UploadExternalAsset(UploadExternalAsset $parameters)
    {
      return $this->__soapCall('UploadExternalAsset', array($parameters));
    }

    /**
     * Executes a command by calling the specified Xinet Server&#39;s portalDI application<br/>
     *
     * @param XinetExecutePortalDICall $parameters
     * @access public
     * @return XinetExecutePortalDICallResponse
     */
    public function XinetExecutePortalDICall(XinetExecutePortalDICall $parameters)
    {
      return $this->__soapCall('XinetExecutePortalDICall', array($parameters));
    }

    /**
     * All calls to Xinet WebNative are called from a XinetSetting object, which includes user credentials. If you want to simulate being another user, though, you can call the XinetSetCurrentCredentials function. This applies a new user/pw, and saves it in the apiKey. All subsequent calls to Xinet performed under this apiKey will run under this Xinet User Account. Set the userName to an empty string to re-use the global setting.<br/>
     *
     * @param XinetSetCurrentCredentials $parameters
     * @access public
     * @return XinetSetCurrentCredentialsResponse
     */
    public function XinetSetCurrentCredentials(XinetSetCurrentCredentials $parameters)
    {
      return $this->__soapCall('XinetSetCurrentCredentials', array($parameters));
    }

    /**
     * Tests whether a connection can be made to the portalDI application located at &#39;url&#39;<br/>
     *
     * @param XinetTestConnection $parameters
     * @access public
     * @return XinetTestConnectionResponse
     */
    public function XinetTestConnection(XinetTestConnection $parameters)
    {
      return $this->__soapCall('XinetTestConnection', array($parameters));
    }

    /**
     * Creates a new document based on a PDF file<br/>
     *
     * @param DocumentCreateFromPDF $parameters
     * @access public
     * @return DocumentCreateFromPDFResponse
     */
    public function DocumentCreateFromPDF(DocumentCreateFromPDF $parameters)
    {
      return $this->__soapCall('DocumentCreateFromPDF', array($parameters));
    }

    /**
     * Generates the HTML package of the doucment.<br/>
     *
     * @param DocumentCreateHTML $parameters
     * @access public
     * @return DocumentCreateHTMLResponse
     */
    public function DocumentCreateHTML(DocumentCreateHTML $parameters)
    {
      return $this->__soapCall('DocumentCreateHTML', array($parameters));
    }

    /**
     * Generates the IDML package of the doucment.<br/>
     *
     * @param DocumentCreateIDML $parameters
     * @access public
     * @return DocumentCreateIDMLResponse
     */
    public function DocumentCreateIDML(DocumentCreateIDML $parameters)
    {
      return $this->__soapCall('DocumentCreateIDML', array($parameters));
    }

    /**
     * Generates a zip containing images of all the pages in the document.<br/>
     *
     * @param DocumentCreateImages $parameters
     * @access public
     * @return DocumentCreateImagesResponse
     */
    public function DocumentCreateImages(DocumentCreateImages $parameters)
    {
      return $this->__soapCall('DocumentCreateImages', array($parameters));
    }

    /**
     * Generates a zip containing the PDF and images of all the pages in the document.<br/>
     *
     * @param DocumentCreateImagesAndPDF $parameters
     * @access public
     * @return DocumentCreateImagesAndPDFResponse
     */
    public function DocumentCreateImagesAndPDF(DocumentCreateImagesAndPDF $parameters)
    {
      return $this->__soapCall('DocumentCreateImagesAndPDF', array($parameters));
    }

    /**
     * Generates the ODF package of the doucment.<br/>
     *
     * @param DocumentCreateODF $parameters
     * @access public
     * @return DocumentCreateODFResponse
     */
    public function DocumentCreateODF(DocumentCreateODF $parameters)
    {
      return $this->__soapCall('DocumentCreateODF', array($parameters));
    }

    /**
     * Generates a CHILI Package of the document.<br/>
     *
     * @param DocumentCreatePackage $parameters
     * @access public
     * @return DocumentCreatePackageResponse
     */
    public function DocumentCreatePackage(DocumentCreatePackage $parameters)
    {
      return $this->__soapCall('DocumentCreatePackage', array($parameters));
    }

    /**
     * Generates a PDF of the document.<br/>
     *
     * @param DocumentCreatePDF $parameters
     * @access public
     * @return DocumentCreatePDFResponse
     */
    public function DocumentCreatePDF(DocumentCreatePDF $parameters)
    {
      return $this->__soapCall('DocumentCreatePDF', array($parameters));
    }

    /**
     * Generates Temp Folding output XML<br/>
     *
     * @param DocumentCreateTempFolding $parameters
     * @access public
     * @return DocumentCreateTempFoldingResponse
     */
    public function DocumentCreateTempFolding(DocumentCreateTempFolding $parameters)
    {
      return $this->__soapCall('DocumentCreateTempFolding', array($parameters));
    }

    /**
     * Generates the HTML package of the doucment, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempHTML $parameters
     * @access public
     * @return DocumentCreateTempHTMLResponse
     */
    public function DocumentCreateTempHTML(DocumentCreateTempHTML $parameters)
    {
      return $this->__soapCall('DocumentCreateTempHTML', array($parameters));
    }

    /**
     * Generates the IDML package of the doucment, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempIDML $parameters
     * @access public
     * @return DocumentCreateTempIDMLResponse
     */
    public function DocumentCreateTempIDML(DocumentCreateTempIDML $parameters)
    {
      return $this->__soapCall('DocumentCreateTempIDML', array($parameters));
    }

    /**
     * Generates Images of all the pages in the document, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempImages $parameters
     * @access public
     * @return DocumentCreateTempImagesResponse
     */
    public function DocumentCreateTempImages(DocumentCreateTempImages $parameters)
    {
      return $this->__soapCall('DocumentCreateTempImages', array($parameters));
    }

    /**
     * Generates a zip file with PDF and images of all the pages in the document, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempImagesAndPDF $parameters
     * @access public
     * @return DocumentCreateTempImagesAndPDFResponse
     */
    public function DocumentCreateTempImagesAndPDF(DocumentCreateTempImagesAndPDF $parameters)
    {
      return $this->__soapCall('DocumentCreateTempImagesAndPDF', array($parameters));
    }

    /**
     * Generates the ODF package of the doucment, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempODF $parameters
     * @access public
     * @return DocumentCreateTempODFResponse
     */
    public function DocumentCreateTempODF(DocumentCreateTempODF $parameters)
    {
      return $this->__soapCall('DocumentCreateTempODF', array($parameters));
    }

    /**
     * Generates a CHILI Package of the document, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempPackage $parameters
     * @access public
     * @return DocumentCreateTempPackageResponse
     */
    public function DocumentCreateTempPackage(DocumentCreateTempPackage $parameters)
    {
      return $this->__soapCall('DocumentCreateTempPackage', array($parameters));
    }

    /**
     * Generates a PDF of the document, based on document XML which hasn&#39;t been saved yet (but is being edited in the editor, for example)<br/>
     *
     * @param DocumentCreateTempPDF $parameters
     * @access public
     * @return DocumentCreateTempPDFResponse
     */
    public function DocumentCreateTempPDF(DocumentCreateTempPDF $parameters)
    {
      return $this->__soapCall('DocumentCreateTempPDF', array($parameters));
    }

    /**
     * Returns information on the annotations contained in a document<br/>
     *
     * @param DocumentGetAnnotations $parameters
     * @access public
     * @return DocumentGetAnnotationsResponse
     */
    public function DocumentGetAnnotations(DocumentGetAnnotations $parameters)
    {
      return $this->__soapCall('DocumentGetAnnotations', array($parameters));
    }

    /**
     * Returns default settings for an editor session. This function is used by CHILI Editor to retrieve a series of informations in one call.<br/>
     *
     * @param DocumentGetDefaultSettings $parameters
     * @access public
     * @return DocumentGetDefaultSettingsResponse
     */
    public function DocumentGetDefaultSettings(DocumentGetDefaultSettings $parameters)
    {
      return $this->__soapCall('DocumentGetDefaultSettings', array($parameters));
    }

    /**
     * Returns the definitions of the Document Event Actions contained in a document<br/>
     *
     * @param DocumentGetDocumentEventActions $parameters
     * @access public
     * @return DocumentGetDocumentEventActionsResponse
     */
    public function DocumentGetDocumentEventActions(DocumentGetDocumentEventActions $parameters)
    {
      return $this->__soapCall('DocumentGetDocumentEventActions', array($parameters));
    }

    /**
     * Returns a URL for editing (or viewing) of the specified document, with arguments to determine how the interface will be constructed<br/>
     *
     * @param DocumentGetEditorURL $parameters
     * @access public
     * @return DocumentGetEditorURLResponse
     */
    public function DocumentGetEditorURL(DocumentGetEditorURL $parameters)
    {
      return $this->__soapCall('DocumentGetEditorURL', array($parameters));
    }

    /**
     * Returns a URL for viewing of a document&#39;s Folding representation<br/>
     *
     * @param DocumentGetFoldingViewerURL $parameters
     * @access public
     * @return DocumentGetFoldingViewerURLResponse
     */
    public function DocumentGetFoldingViewerURL(DocumentGetFoldingViewerURL $parameters)
    {
      return $this->__soapCall('DocumentGetFoldingViewerURL', array($parameters));
    }

    /**
     * Returns a URL for editing (or viewing) of the specified document, with arguments to determine how the interface will be constructed<br/>
     *
     * @param DocumentGetHTMLEditorURL $parameters
     * @access public
     * @return DocumentGetHTMLEditorURLResponse
     */
    public function DocumentGetHTMLEditorURL(DocumentGetHTMLEditorURL $parameters)
    {
      return $this->__soapCall('DocumentGetHTMLEditorURL', array($parameters));
    }

    /**
     * Returns a URL for viewing of a document&#39;s Folding representation<br/>
     *
     * @param DocumentGetHTMLFoldingViewerURL $parameters
     * @access public
     * @return DocumentGetHTMLFoldingViewerURLResponse
     */
    public function DocumentGetHTMLFoldingViewerURL(DocumentGetHTMLFoldingViewerURL $parameters)
    {
      return $this->__soapCall('DocumentGetHTMLFoldingViewerURL', array($parameters));
    }

    /**
     * Returns a URL for viewing of a document&#39;s ThreeDModel representation<br/>
     *
     * @param DocumentGetHTMLThreeDModelViewerURL $parameters
     * @access public
     * @return DocumentGetHTMLThreeDModelViewerURLResponse
     */
    public function DocumentGetHTMLThreeDModelViewerURL(DocumentGetHTMLThreeDModelViewerURL $parameters)
    {
      return $this->__soapCall('DocumentGetHTMLThreeDModelViewerURL', array($parameters));
    }

    /**
     * Returns general information on a document in an XML format which is easier to parse than the full document XML.<br/>
     *
     * @param DocumentGetInfo $parameters
     * @access public
     * @return DocumentGetInfoResponse
     */
    public function DocumentGetInfo(DocumentGetInfo $parameters)
    {
      return $this->__soapCall('DocumentGetInfo', array($parameters));
    }

    /**
     * Called by the iPad Reader to get a description of a document<br/>
     *
     * @param DocumentGetIpadXML $parameters
     * @access public
     * @return DocumentGetIpadXMLResponse
     */
    public function DocumentGetIpadXML(DocumentGetIpadXML $parameters)
    {
      return $this->__soapCall('DocumentGetIpadXML', array($parameters));
    }

    /**
     * Returns information on the ads and edit contained in a document<br/>
     *
     * @param DocumentGetPlacedAdsAndEdit $parameters
     * @access public
     * @return DocumentGetPlacedAdsAndEditResponse
     */
    public function DocumentGetPlacedAdsAndEdit(DocumentGetPlacedAdsAndEdit $parameters)
    {
      return $this->__soapCall('DocumentGetPlacedAdsAndEdit', array($parameters));
    }

    /**
     * Returns information on the preflight results which were present in the document on the last save<br/>
     *
     * @param DocumentGetPreflightResults $parameters
     * @access public
     * @return DocumentGetPreflightResultsResponse
     */
    public function DocumentGetPreflightResults(DocumentGetPreflightResults $parameters)
    {
      return $this->__soapCall('DocumentGetPreflightResults', array($parameters));
    }

    /**
     * Returns a URL for viewing of a document&#39;s ThreeDModel representation<br/>
     *
     * @param DocumentGetThreeDModelViewerURL $parameters
     * @access public
     * @return DocumentGetThreeDModelViewerURLResponse
     */
    public function DocumentGetThreeDModelViewerURL(DocumentGetThreeDModelViewerURL $parameters)
    {
      return $this->__soapCall('DocumentGetThreeDModelViewerURL', array($parameters));
    }

    /**
     * Returns information on the assets contained in a document<br/>
     *
     * @param DocumentGetUsedAssets $parameters
     * @access public
     * @return DocumentGetUsedAssetsResponse
     */
    public function DocumentGetUsedAssets(DocumentGetUsedAssets $parameters)
    {
      return $this->__soapCall('DocumentGetUsedAssets', array($parameters));
    }

    /**
     * Returns the definitions of the variables contained in a document<br/>
     *
     * @param DocumentGetVariableDefinitions $parameters
     * @access public
     * @return DocumentGetVariableDefinitionsResponse
     */
    public function DocumentGetVariableDefinitions(DocumentGetVariableDefinitions $parameters)
    {
      return $this->__soapCall('DocumentGetVariableDefinitions', array($parameters));
    }

    /**
     * Returns the values of the variables contained in a document<br/>
     *
     * @param DocumentGetVariableValues $parameters
     * @access public
     * @return DocumentGetVariableValuesResponse
     */
    public function DocumentGetVariableValues(DocumentGetVariableValues $parameters)
    {
      return $this->__soapCall('DocumentGetVariableValues', array($parameters));
    }

    /**
     * Inserts annotations into a document<br/>
     *
     * @param DocumentSetAnnotations $parameters
     * @access public
     * @return DocumentSetAnnotationsResponse
     */
    public function DocumentSetAnnotations(DocumentSetAnnotations $parameters)
    {
      return $this->__soapCall('DocumentSetAnnotations', array($parameters));
    }

    /**
     * Save new Asset Directory locations (doc., user, user group) for the document. Empty strings will be ignored (so the existing value will be retained). To clear an asset directory, provide the string &#39;empty&#39; as the argument<br/>
     *
     * @param DocumentSetAssetDirectories $parameters
     * @access public
     * @return DocumentSetAssetDirectoriesResponse
     */
    public function DocumentSetAssetDirectories(DocumentSetAssetDirectories $parameters)
    {
      return $this->__soapCall('DocumentSetAssetDirectories', array($parameters));
    }

    /**
     * Applies constraints to a document.<br/>The constraints are configured in the &quot;DocumentConstraints&quot; Resource (usually through the backoffice). These contain settings to configure naming conventions (and general settings) for the application of constraints.<br/>The naming conventions are used to update the document (you will see the constraints in the DocumentConstraints, Page Settings, Layer Settings and Frame Constraints panel items in CHILI Editor)<br/>
     *
     * @param DocumentSetConstraints $parameters
     * @access public
     * @return DocumentSetConstraintsResponse
     */
    public function DocumentSetConstraints(DocumentSetConstraints $parameters)
    {
      return $this->__soapCall('DocumentSetConstraints', array($parameters));
    }

    /**
     * Sets a datasource on a document<br/>
     *
     * @param DocumentSetDataSource $parameters
     * @access public
     * @return DocumentSetDataSourceResponse
     */
    public function DocumentSetDataSource(DocumentSetDataSource $parameters)
    {
      return $this->__soapCall('DocumentSetDataSource', array($parameters));
    }

    /**
     * Applies Document Event Action definitions to a document<br/>
     *
     * @param DocumentSetDocumentEventActions $parameters
     * @access public
     * @return DocumentSetDocumentEventActionsResponse
     */
    public function DocumentSetDocumentEventActions(DocumentSetDocumentEventActions $parameters)
    {
      return $this->__soapCall('DocumentSetDocumentEventActions', array($parameters));
    }

    /**
     * Applies variable definitions to a document<br/>
     *
     * @param DocumentSetVariableDefinitions $parameters
     * @access public
     * @return DocumentSetVariableDefinitionsResponse
     */
    public function DocumentSetVariableDefinitions(DocumentSetVariableDefinitions $parameters)
    {
      return $this->__soapCall('DocumentSetVariableDefinitions', array($parameters));
    }

    /**
     * Sets the values of variables in a document<br/>
     *
     * @param DocumentSetVariableValues $parameters
     * @access public
     * @return DocumentSetVariableValuesResponse
     */
    public function DocumentSetVariableValues(DocumentSetVariableValues $parameters)
    {
      return $this->__soapCall('DocumentSetVariableValues', array($parameters));
    }

    /**
     * Download a URL from the server. This function is used by CHILI Editor to prevent security issues (eg: crossdomain.xml files which aren&#39;t present on the target server)<br/>
     *
     * @param DownloadURL $parameters
     * @access public
     * @return DownloadURLResponse
     */
    public function DownloadURL(DownloadURL $parameters)
    {
      return $this->__soapCall('DownloadURL', array($parameters));
    }

    /**
     * @param DynamicAssetProviderGetTempAsset $parameters
     * @access public
     * @return DynamicAssetProviderGetTempAssetResponse
     */
    public function DynamicAssetProviderGetTempAsset(DynamicAssetProviderGetTempAsset $parameters)
    {
      return $this->__soapCall('DynamicAssetProviderGetTempAsset', array($parameters));
    }

    /**
     * Downloads an external XML file containing information on edits, and converts it for use in CHILI Editor<br/>
     *
     * @param EditsGetFromURL $parameters
     * @access public
     * @return EditsGetFromURLResponse
     */
    public function EditsGetFromURL(EditsGetFromURL $parameters)
    {
      return $this->__soapCall('EditsGetFromURL', array($parameters));
    }

    /**
     * Creates a new environment, with the specified name<br/>
     *
     * @param EnvironmentAdd $parameters
     * @access public
     * @return EnvironmentAddResponse
     */
    public function EnvironmentAdd(EnvironmentAdd $parameters)
    {
      return $this->__soapCall('EnvironmentAdd', array($parameters));
    }

    /**
     * Copies an existing environment. A new environment is created and all files are copied<br/>
     *
     * @param EnvironmentCopy $parameters
     * @access public
     * @return EnvironmentCopyResponse
     */
    public function EnvironmentCopy(EnvironmentCopy $parameters)
    {
      return $this->__soapCall('EnvironmentCopy', array($parameters));
    }

    /**
     * Deletes a complete environment, including it&#39;s files on disk<br/>
     *
     * @param EnvironmentDelete $parameters
     * @access public
     * @return EnvironmentDeleteResponse
     */
    public function EnvironmentDelete(EnvironmentDelete $parameters)
    {
      return $this->__soapCall('EnvironmentDelete', array($parameters));
    }

    /**
     * Returns a list of the Color Profiles available for the environment.<br/>
     *
     * @param EnvironmentGetColorProfiles $parameters
     * @access public
     * @return EnvironmentGetColorProfilesResponse
     */
    public function EnvironmentGetColorProfiles(EnvironmentGetColorProfiles $parameters)
    {
      return $this->__soapCall('EnvironmentGetColorProfiles', array($parameters));
    }

    /**
     * Returns a description of the current environment<br/>
     *
     * @param EnvironmentGetCurrent $parameters
     * @access public
     * @return EnvironmentGetCurrentResponse
     */
    public function EnvironmentGetCurrent(EnvironmentGetCurrent $parameters)
    {
      return $this->__soapCall('EnvironmentGetCurrent', array($parameters));
    }

    /**
     * Provide a list of resources/folders, and have the same XML structure returned including the folder sizes<br/>
     *
     * @param EnvironmentGetDiskUsage $parameters
     * @access public
     * @return EnvironmentGetDiskUsageResponse
     */
    public function EnvironmentGetDiskUsage(EnvironmentGetDiskUsage $parameters)
    {
      return $this->__soapCall('EnvironmentGetDiskUsage', array($parameters));
    }

    /**
     * Gets initial settings for the specified environment. This function is called before the user has logged in, so it does not require an API Key (and therefore also only returns the most basic information required for a login screen)<br/>
     *
     * @param EnvironmentGetLoginSettings $parameters
     * @access public
     * @return EnvironmentGetLoginSettingsResponse
     */
    public function EnvironmentGetLoginSettings(EnvironmentGetLoginSettings $parameters)
    {
      return $this->__soapCall('EnvironmentGetLoginSettings', array($parameters));
    }

    /**
     * Returns a list of the Reflection Masks in the enviroment<br/>
     *
     * @param EnvironmentGetReflectionMaps $parameters
     * @access public
     * @return EnvironmentGetReflectionMapsResponse
     */
    public function EnvironmentGetReflectionMaps(EnvironmentGetReflectionMaps $parameters)
    {
      return $this->__soapCall('EnvironmentGetReflectionMaps', array($parameters));
    }

    /**
     * Returns the settings of the specified environment<br/>
     *
     * @param EnvironmentGetSettings $parameters
     * @access public
     * @return EnvironmentGetSettingsResponse
     */
    public function EnvironmentGetSettings(EnvironmentGetSettings $parameters)
    {
      return $this->__soapCall('EnvironmentGetSettings', array($parameters));
    }

    /**
     * Returns a list of available environments for the current user<br/>
     *
     * @param EnvironmentList $parameters
     * @access public
     * @return EnvironmentListResponse
     */
    public function EnvironmentList(EnvironmentList $parameters)
    {
      return $this->__soapCall('EnvironmentList', array($parameters));
    }

    /**
     * Saves the settings of an environment<br/>
     *
     * @param EnvironmentSaveSettings $parameters
     * @access public
     * @return EnvironmentSaveSettingsResponse
     */
    public function EnvironmentSaveSettings(EnvironmentSaveSettings $parameters)
    {
      return $this->__soapCall('EnvironmentSaveSettings', array($parameters));
    }

    /**
     * Returns a ZIP with all the needed recources and the settings file with fixed references.<br/>
     *
     * @param FoldingSettingCreatePackage $parameters
     * @access public
     * @return FoldingSettingCreatePackageResponse
     */
    public function FoldingSettingCreatePackage(FoldingSettingCreatePackage $parameters)
    {
      return $this->__soapCall('FoldingSettingCreatePackage', array($parameters));
    }

    /**
     * Returns an XML document containing ranges of glyphs (and their availibility) in the font<br/>
     *
     * @param FontGetIncludedGlyphs $parameters
     * @access public
     * @return FontGetIncludedGlyphsResponse
     */
    public function FontGetIncludedGlyphs(FontGetIncludedGlyphs $parameters)
    {
      return $this->__soapCall('FontGetIncludedGlyphs', array($parameters));
    }

    /**
     * Generates an apiKey for subsequent calls to the other webservice functions. Use SetWorkingEnvironment to use your user account (if it is an administrator) to access different environments<br/>
     *
     * @param GenerateApiKey $parameters
     * @access public
     * @return GenerateApiKeyResponse
     */
    public function GenerateApiKey(GenerateApiKey $parameters)
    {
      return $this->__soapCall('GenerateApiKey', array($parameters));
    }

    /**
     * Generates an apiKey for subsequent calls to the other webservice functions. Use SetWorkingEnvironment to use your user account (if it is an administrator) to access different environments<br/>
     *
     * @param GenerateApiKeyWithSettings $parameters
     * @access public
     * @return GenerateApiKeyWithSettingsResponse
     */
    public function GenerateApiKeyWithSettings(GenerateApiKeyWithSettings $parameters)
    {
      return $this->__soapCall('GenerateApiKeyWithSettings', array($parameters));
    }

    /**
     * Returns the date of the server<br/>
     *
     * @param GetServerDate $parameters
     * @access public
     * @return GetServerDateResponse
     */
    public function GetServerDate(GetServerDate $parameters)
    {
      return $this->__soapCall('GetServerDate', array($parameters));
    }

    /**
     * Returns an URL so Google OAuth 2.0 can be performed.<br/>
     *
     * @param GoogleCreateAuthorizationUrl $parameters
     * @access public
     * @return GoogleCreateAuthorizationUrlResponse
     */
    public function GoogleCreateAuthorizationUrl(GoogleCreateAuthorizationUrl $parameters)
    {
      return $this->__soapCall('GoogleCreateAuthorizationUrl', array($parameters));
    }

    /**
     * Executes a Health Check, and returns an XML string with the found warnings/errors<br/>
     *
     * @param HealthCheckExecute $parameters
     * @access public
     * @return HealthCheckExecuteResponse
     */
    public function HealthCheckExecute(HealthCheckExecute $parameters)
    {
      return $this->__soapCall('HealthCheckExecute', array($parameters));
    }

    /**
     * Ads an icon (png) to an IconSet Resource Item<br/>
     *
     * @param IconSetAddIcon $parameters
     * @access public
     * @return IconSetAddIconResponse
     */
    public function IconSetAddIcon(IconSetAddIcon $parameters)
    {
      return $this->__soapCall('IconSetAddIcon', array($parameters));
    }

    /**
     * Removes an icon from an IconSet Resurce Item<br/>
     *
     * @param IconSetDeleteIcon $parameters
     * @access public
     * @return IconSetDeleteIconResponse
     */
    public function IconSetDeleteIcon(IconSetDeleteIcon $parameters)
    {
      return $this->__soapCall('IconSetDeleteIcon', array($parameters));
    }

    /**
     * Describes the icons which are present in an Icon Set (and optionally also includes all non-present icon definitions)<br/>
     *
     * @param IconSetGetIcons $parameters
     * @access public
     * @return IconSetGetIconsResponse
     */
    public function IconSetGetIcons(IconSetGetIcons $parameters)
    {
      return $this->__soapCall('IconSetGetIcons', array($parameters));
    }

    /**
     * Function used by CHILI Editor to retrieve a number of settings of the current Environment in one call.<br/>
     *
     * @param InterfaceGetInitialSettings $parameters
     * @access public
     * @return InterfaceGetInitialSettingsResponse
     */
    public function InterfaceGetInitialSettings(InterfaceGetInitialSettings $parameters)
    {
      return $this->__soapCall('InterfaceGetInitialSettings', array($parameters));
    }

    /**
     * Get the (combined) strings for a Language. This includes the values of the parent language for non-translated strings.<br/>
     *
     * @param LanguageGetCombinedStrings $parameters
     * @access public
     * @return LanguageGetCombinedStringsResponse
     */
    public function LanguageGetCombinedStrings(LanguageGetCombinedStrings $parameters)
    {
      return $this->__soapCall('LanguageGetCombinedStrings', array($parameters));
    }

    /**
     * Returns a urlInfo XML for the CSV file of the language (which is created on the fly)<br/>
     *
     * @param LanguageGetCsvURL $parameters
     * @access public
     * @return LanguageGetCsvURLResponse
     */
    public function LanguageGetCsvURL(LanguageGetCsvURL $parameters)
    {
      return $this->__soapCall('LanguageGetCsvURL', array($parameters));
    }

    /**
     * Returns a urlInfo XML for the txt file (tab-delimited) of the language (which is created on the fly)<br/>
     *
     * @param LanguageGetUnicodeTextURL $parameters
     * @access public
     * @return LanguageGetUnicodeTextURLResponse
     */
    public function LanguageGetUnicodeTextURL(LanguageGetUnicodeTextURL $parameters)
    {
      return $this->__soapCall('LanguageGetUnicodeTextURL', array($parameters));
    }

    /**
     * Uploads a CSV file (of the same format as exported using LanguageGetCsvURL) and imports it into a language.<br/>Strings outside of the &#39;Custom&#39; section are not created, only updated.<br/>
     *
     * @param LanguageImportCsv $parameters
     * @access public
     * @return LanguageImportCsvResponse
     */
    public function LanguageImportCsv(LanguageImportCsv $parameters)
    {
      return $this->__soapCall('LanguageImportCsv', array($parameters));
    }

    /**
     * Uploads a txt file (tab-delimited, of the same format as exported using LanguageGetUnicodeTextURL) and imports it into a language.<br/>Strings outside of the &#39;Custom&#39; section are not created, only updated.<br/>
     *
     * @param LanguageImportUnicodeText $parameters
     * @access public
     * @return LanguageImportUnicodeTextResponse
     */
    public function LanguageImportUnicodeText(LanguageImportUnicodeText $parameters)
    {
      return $this->__soapCall('LanguageImportUnicodeText', array($parameters));
    }

    /**
     * Saves the string library for a language<br/>
     *
     * @param LanguageSaveStrings $parameters
     * @access public
     * @return LanguageSaveStringsResponse
     */
    public function LanguageSaveStrings(LanguageSaveStrings $parameters)
    {
      return $this->__soapCall('LanguageSaveStrings', array($parameters));
    }

    /**
     * Returns a list of the available languages in the environment (optionally including system languages, on which environment languages can be based)<br/>
     *
     * @param LanguagesGetList $parameters
     * @access public
     * @return LanguagesGetListResponse
     */
    public function LanguagesGetList(LanguagesGetList $parameters)
    {
      return $this->__soapCall('LanguagesGetList', array($parameters));
    }

    /**
     * Locks an API key <br/>(this can be checked by other web service functions)<br/>
     *
     * @param LockApiKey $parameters
     * @access public
     * @return LockApiKeyResponse
     */
    public function LockApiKey(LockApiKey $parameters)
    {
      return $this->__soapCall('LockApiKey', array($parameters));
    }

    /**
     * Returns an XML description of the documents available in a Mobile Feed<br/>
     *
     * @param MobileFeedGetDocumentList $parameters
     * @access public
     * @return MobileFeedGetDocumentListResponse
     */
    public function MobileFeedGetDocumentList(MobileFeedGetDocumentList $parameters)
    {
      return $this->__soapCall('MobileFeedGetDocumentList', array($parameters));
    }

    /**
     * Returns an XML description of the documents available in a Mobile Feed<br/>
     *
     * @param MobileFeedGetDocumentXML $parameters
     * @access public
     * @return MobileFeedGetDocumentXMLResponse
     */
    public function MobileFeedGetDocumentXML(MobileFeedGetDocumentXML $parameters)
    {
      return $this->__soapCall('MobileFeedGetDocumentXML', array($parameters));
    }

    /**
     * Returns an XML description of the styles contained in the ODT. Used for parsing an ODT document and create the style conversion table.<br/>
     *
     * @param ODTGetStyles $parameters
     * @access public
     * @return ODTGetStylesResponse
     */
    public function ODTGetStyles(ODTGetStyles $parameters)
    {
      return $this->__soapCall('ODTGetStyles', array($parameters));
    }

    /**
     * Returns an XML description of the styles contained in the ODT. Used for parsing an ODT document and create the style conversion table.<br/>
     *
     * @param ODTGetTextFlow $parameters
     * @access public
     * @return ODTGetTextFlowResponse
     */
    public function ODTGetTextFlow(ODTGetTextFlow $parameters)
    {
      return $this->__soapCall('ODTGetTextFlow', array($parameters));
    }

    /**
     * Clears the current profiling snapshot<br/>
     *
     * @param ProfilingClearSnapshot $parameters
     * @access public
     * @return ProfilingClearSnapshotResponse
     */
    public function ProfilingClearSnapshot(ProfilingClearSnapshot $parameters)
    {
      return $this->__soapCall('ProfilingClearSnapshot', array($parameters));
    }

    /**
     * Saves a profiling SnapShot<br/>
     *
     * @param ProfilingSaveSnapshot $parameters
     * @access public
     * @return ProfilingSaveSnapshotResponse
     */
    public function ProfilingSaveSnapshot(ProfilingSaveSnapshot $parameters)
    {
      return $this->__soapCall('ProfilingSaveSnapshot', array($parameters));
    }

    /**
     * Adds a folder to a Resource (if it is of type directory_object or directory_file<br/>
     *
     * @param ResourceFolderAdd $parameters
     * @access public
     * @return ResourceFolderAddResponse
     */
    public function ResourceFolderAdd(ResourceFolderAdd $parameters)
    {
      return $this->__soapCall('ResourceFolderAdd', array($parameters));
    }

    /**
     * Copies a Resource folder to a new location in the Resource&#39;s tree<br/>
     *
     * @param ResourceFolderCopy $parameters
     * @access public
     * @return ResourceFolderCopyResponse
     */
    public function ResourceFolderCopy(ResourceFolderCopy $parameters)
    {
      return $this->__soapCall('ResourceFolderCopy', array($parameters));
    }

    /**
     * Removes a folder from a Resource tree (if it is of type directory_object or directory_file<br/>
     *
     * @param ResourceFolderDelete $parameters
     * @access public
     * @return ResourceFolderDeleteResponse
     */
    public function ResourceFolderDelete(ResourceFolderDelete $parameters)
    {
      return $this->__soapCall('ResourceFolderDelete', array($parameters));
    }

    /**
     * Moves a Resource folder to a new location in the Resource&#39;s tree<br/>
     *
     * @param ResourceFolderMove $parameters
     * @access public
     * @return ResourceFolderMoveResponse
     */
    public function ResourceFolderMove(ResourceFolderMove $parameters)
    {
      return $this->__soapCall('ResourceFolderMove', array($parameters));
    }

    /**
     * Returns the history of a Resource<br/>
     *
     * @param ResourceGetHistory $parameters
     * @access public
     * @return ResourceGetHistoryResponse
     */
    public function ResourceGetHistory(ResourceGetHistory $parameters)
    {
      return $this->__soapCall('ResourceGetHistory', array($parameters));
    }

    /**
     * Returns the tree structure of the Resource (if the type of the resource is &quot;directory_file&quot; or &quot;directory_object&quot;)<br/>
     *
     * @param ResourceGetTree $parameters
     * @access public
     * @return ResourceGetTreeResponse
     */
    public function ResourceGetTree(ResourceGetTree $parameters)
    {
      return $this->__soapCall('ResourceGetTree', array($parameters));
    }

    /**
     * Returns the tree structure of the Resource (if the type of the resource is &quot;directory_file&quot; or &quot;directory_object&quot;), with a maximum number of sub-folders included. Use &#39;1&#39; to get the files and folders without any files inside the folders<br/>
     *
     * @param ResourceGetTreeLevel $parameters
     * @access public
     * @return ResourceGetTreeLevelResponse
     */
    public function ResourceGetTreeLevel(ResourceGetTreeLevel $parameters)
    {
      return $this->__soapCall('ResourceGetTreeLevel', array($parameters));
    }

    /**
     * Adds a ResourceItem to the specified Resource, and returns its definition XML<br/>
     *
     * @param ResourceItemAdd $parameters
     * @access public
     * @return ResourceItemAddResponse
     */
    public function ResourceItemAdd(ResourceItemAdd $parameters)
    {
      return $this->__soapCall('ResourceItemAdd', array($parameters));
    }

    /**
     * Adds a ResourceItem by downloading the underlying file from an external URL<br/>
     *
     * @param ResourceItemAddFromURL $parameters
     * @access public
     * @return ResourceItemAddFromURLResponse
     */
    public function ResourceItemAddFromURL(ResourceItemAddFromURL $parameters)
    {
      return $this->__soapCall('ResourceItemAddFromURL', array($parameters));
    }

    /**
     * Adds a ResourceItem by downloading the underlying file from an external URL<br/>
     *
     * @param ResourceItemAddFromURLWithModificationDate $parameters
     * @access public
     * @return ResourceItemAddFromURLWithModificationDateResponse
     */
    public function ResourceItemAddFromURLWithModificationDate(ResourceItemAddFromURLWithModificationDate $parameters)
    {
      return $this->__soapCall('ResourceItemAddFromURLWithModificationDate', array($parameters));
    }

    /**
     * Adds an override file to the ResourceItem, which is used to generate previews<br/>
     *
     * @param ResourceItemAddPreviewOverride $parameters
     * @access public
     * @return ResourceItemAddPreviewOverrideResponse
     */
    public function ResourceItemAddPreviewOverride(ResourceItemAddPreviewOverride $parameters)
    {
      return $this->__soapCall('ResourceItemAddPreviewOverride', array($parameters));
    }

    /**
     * Adds a ResourceItem to a Resource, and returns its definition XML.<br/>To prevent previews from being generated automatically while you intend to supply an override file, this function allows you to pass both at the same time.<br/>
     *
     * @param ResourceItemAddWithPreview $parameters
     * @access public
     * @return ResourceItemAddWithPreviewResponse
     */
    public function ResourceItemAddWithPreview(ResourceItemAddWithPreview $parameters)
    {
      return $this->__soapCall('ResourceItemAddWithPreview', array($parameters));
    }

    /**
     * Copies a ResourceItem, and returns the definition XML of the new item.<br/>
     *
     * @param ResourceItemCopy $parameters
     * @access public
     * @return ResourceItemCopyResponse
     */
    public function ResourceItemCopy(ResourceItemCopy $parameters)
    {
      return $this->__soapCall('ResourceItemCopy', array($parameters));
    }

    /**
     * Deletes a ResourceItem<br/>
     *
     * @param ResourceItemDelete $parameters
     * @access public
     * @return ResourceItemDeleteResponse
     */
    public function ResourceItemDelete(ResourceItemDelete $parameters)
    {
      return $this->__soapCall('ResourceItemDelete', array($parameters));
    }

    /**
     * Returns a ResourceItem based on its ID (checked first) or path in the Resource&#39;s tree (or, if the resource is of type list, its name)<br/>
     *
     * @param ResourceItemGetByIdOrPath $parameters
     * @access public
     * @return ResourceItemGetByIdOrPathResponse
     */
    public function ResourceItemGetByIdOrPath(ResourceItemGetByIdOrPath $parameters)
    {
      return $this->__soapCall('ResourceItemGetByIdOrPath', array($parameters));
    }

    /**
     * Gets the definition XML of a ResourceItem based on its name. For Resources of type directory_object or directory_list, the first found item (being the oldest) is returned<br/>
     *
     * @param ResourceItemGetByName $parameters
     * @access public
     * @return ResourceItemGetByNameResponse
     */
    public function ResourceItemGetByName(ResourceItemGetByName $parameters)
    {
      return $this->__soapCall('ResourceItemGetByName', array($parameters));
    }

    /**
     * Returns a ResourceItem based on its path in the Resource&#39;s tree<br/>
     *
     * @param ResourceItemGetByPath $parameters
     * @access public
     * @return ResourceItemGetByPathResponse
     */
    public function ResourceItemGetByPath(ResourceItemGetByPath $parameters)
    {
      return $this->__soapCall('ResourceItemGetByPath', array($parameters));
    }

    /**
     * Returns XML describing the state of the cache (previews, ...) of the ResourceItem<br/>
     *
     * @param ResourceItemGetCacheInfo $parameters
     * @access public
     * @return ResourceItemGetCacheInfoResponse
     */
    public function ResourceItemGetCacheInfo(ResourceItemGetCacheInfo $parameters)
    {
      return $this->__soapCall('ResourceItemGetCacheInfo', array($parameters));
    }

    /**
     * Returns metadata of the object<br/>
     *
     * @param ResourceItemGetCustomMetaData $parameters
     * @access public
     * @return ResourceItemGetCustomMetaDataResponse
     */
    public function ResourceItemGetCustomMetaData(ResourceItemGetCustomMetaData $parameters)
    {
      return $this->__soapCall('ResourceItemGetCustomMetaData', array($parameters));
    }

    /**
     * Returns the definition XML of a ResourceItem<br/>
     *
     * @param ResourceItemGetDefinitionXML $parameters
     * @access public
     * @return ResourceItemGetDefinitionXMLResponse
     */
    public function ResourceItemGetDefinitionXML(ResourceItemGetDefinitionXML $parameters)
    {
      return $this->__soapCall('ResourceItemGetDefinitionXML', array($parameters));
    }

    /**
     * Returns the history of a ResourceItem<br/>
     *
     * @param ResourceItemGetHistory $parameters
     * @access public
     * @return ResourceItemGetHistoryResponse
     */
    public function ResourceItemGetHistory(ResourceItemGetHistory $parameters)
    {
      return $this->__soapCall('ResourceItemGetHistory', array($parameters));
    }

    /**
     * Returns XML describing the state of the private data (previewErrors, fileinfo, ...) of the ResourceItem<br/>
     *
     * @param ResourceItemGetPrivateInfo $parameters
     * @access public
     * @return ResourceItemGetPrivateInfoResponse
     */
    public function ResourceItemGetPrivateInfo(ResourceItemGetPrivateInfo $parameters)
    {
      return $this->__soapCall('ResourceItemGetPrivateInfo', array($parameters));
    }

    /**
     * Returns a url pointing to the preview (in the specified type and for the specified page, and with the provided Transformation effects) of the ResourceItem<br/>
     *
     * @param ResourceItemGetTransformedURL $parameters
     * @access public
     * @return ResourceItemGetTransformedURLResponse
     */
    public function ResourceItemGetTransformedURL(ResourceItemGetTransformedURL $parameters)
    {
      return $this->__soapCall('ResourceItemGetTransformedURL', array($parameters));
    }

    /**
     * Returns a url pointing to the preview (in the specified type and for the specified page, and with the provided Transformation effects) of the ResourceItem, similar to ResourceItemGetTransformedURL. But the current function also includes information which can be used to debug the generated preview (file size, dimensions, ...)<br/>
     *
     * @param ResourceItemGetTransformedURLWithDebugInfo $parameters
     * @access public
     * @return ResourceItemGetTransformedURLWithDebugInfoResponse
     */
    public function ResourceItemGetTransformedURLWithDebugInfo(ResourceItemGetTransformedURLWithDebugInfo $parameters)
    {
      return $this->__soapCall('ResourceItemGetTransformedURLWithDebugInfo', array($parameters));
    }

    /**
     * Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem<br/>
     *
     * @param ResourceItemGetURL $parameters
     * @access public
     * @return ResourceItemGetURLResponse
     */
    public function ResourceItemGetURL(ResourceItemGetURL $parameters)
    {
      return $this->__soapCall('ResourceItemGetURL', array($parameters));
    }

    /**
     * Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem.<br/>The URL contains an apiKey for the Anonymous user (which does not expire, and has highly limited privileges).<br/>
     *
     * @param ResourceItemGetURLForAnonymousUser $parameters
     * @access public
     * @return ResourceItemGetURLForAnonymousUserResponse
     */
    public function ResourceItemGetURLForAnonymousUser(ResourceItemGetURLForAnonymousUser $parameters)
    {
      return $this->__soapCall('ResourceItemGetURLForAnonymousUser', array($parameters));
    }

    /**
     * Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem, similar to ResourceItemGetURL. But the current function also includes information which can be used to debug the generated preview (file size, dimensions, ...)<br/>
     *
     * @param ResourceItemGetURLWithDebugInfo $parameters
     * @access public
     * @return ResourceItemGetURLWithDebugInfoResponse
     */
    public function ResourceItemGetURLWithDebugInfo(ResourceItemGetURLWithDebugInfo $parameters)
    {
      return $this->__soapCall('ResourceItemGetURLWithDebugInfo', array($parameters));
    }

    /**
     * Returns the underlying XML of the object (for a Resource of type directory_object), or the definition XML for other types<br/>
     *
     * @param ResourceItemGetXML $parameters
     * @access public
     * @return ResourceItemGetXMLResponse
     */
    public function ResourceItemGetXML(ResourceItemGetXML $parameters)
    {
      return $this->__soapCall('ResourceItemGetXML', array($parameters));
    }

    /**
     * Moves a Resource Item to a new location in the Resource&#39;s tree<br/>
     *
     * @param ResourceItemMove $parameters
     * @access public
     * @return ResourceItemMoveResponse
     */
    public function ResourceItemMove(ResourceItemMove $parameters)
    {
      return $this->__soapCall('ResourceItemMove', array($parameters));
    }

    /**
     * Deletes the preview override files for a ResourceItem<br/>
     *
     * @param ResourceItemRemovePreviewOverride $parameters
     * @access public
     * @return ResourceItemRemovePreviewOverrideResponse
     */
    public function ResourceItemRemovePreviewOverride(ResourceItemRemovePreviewOverride $parameters)
    {
      return $this->__soapCall('ResourceItemRemovePreviewOverride', array($parameters));
    }

    /**
     * Replaces the underlying file of a Resource Item of type directory_file, and returns its definition XML.<br/>
     *
     * @param ResourceItemReplaceFile $parameters
     * @access public
     * @return ResourceItemReplaceFileResponse
     */
    public function ResourceItemReplaceFile(ResourceItemReplaceFile $parameters)
    {
      return $this->__soapCall('ResourceItemReplaceFile', array($parameters));
    }

    /**
     * Replaces the underlying file of a Resource Item of type directory_file, and returns its definition XML.<br/>To prevent previews from being generated automatically while you intend to supply an override file, this function allows you to pass both at the same time.<br/>
     *
     * @param ResourceItemReplaceFileWithPreviewOverride $parameters
     * @access public
     * @return ResourceItemReplaceFileWithPreviewOverrideResponse
     */
    public function ResourceItemReplaceFileWithPreviewOverride(ResourceItemReplaceFileWithPreviewOverride $parameters)
    {
      return $this->__soapCall('ResourceItemReplaceFileWithPreviewOverride', array($parameters));
    }

    /**
     * Deletes all generated previews of the ResourceItem, and resets any &quot;error&quot; switches<br/>
     *
     * @param ResourceItemResetPreviews $parameters
     * @access public
     * @return ResourceItemResetPreviewsResponse
     */
    public function ResourceItemResetPreviews(ResourceItemResetPreviews $parameters)
    {
      return $this->__soapCall('ResourceItemResetPreviews', array($parameters));
    }

    /**
     * Adds ResourceItems to the specified Resource, based on a ZIP file<br/>
     *
     * @param ResourceItemsAddFromZip $parameters
     * @access public
     * @return ResourceItemsAddFromZipResponse
     */
    public function ResourceItemsAddFromZip(ResourceItemsAddFromZip $parameters)
    {
      return $this->__soapCall('ResourceItemsAddFromZip', array($parameters));
    }

    /**
     * Saves the definition XML or the underlying object XML of a Resource Item (depending on the Resource&#39;s type)<br/>
     *
     * @param ResourceItemSave $parameters
     * @access public
     * @return ResourceItemSaveResponse
     */
    public function ResourceItemSave(ResourceItemSave $parameters)
    {
      return $this->__soapCall('ResourceItemSave', array($parameters));
    }

    /**
     * Saves metadata of specified resource item<br/>
     *
     * @param ResourceItemSaveCustomMetaData $parameters
     * @access public
     * @return ResourceItemSaveCustomMetaDataResponse
     */
    public function ResourceItemSaveCustomMetaData(ResourceItemSaveCustomMetaData $parameters)
    {
      return $this->__soapCall('ResourceItemSaveCustomMetaData', array($parameters));
    }

    /**
     * Returns the settings of the specified Library (a top-level directory in the Resource&#39;s tree)<br/>
     *
     * @param ResourceLibraryGetSettings $parameters
     * @access public
     * @return ResourceLibraryGetSettingsResponse
     */
    public function ResourceLibraryGetSettings(ResourceLibraryGetSettings $parameters)
    {
      return $this->__soapCall('ResourceLibraryGetSettings', array($parameters));
    }

    /**
     * Saves the settings of the specified Library (a top-level directory in the Resource&#39;s tree)<br/>
     *
     * @param ResourceLibrarySaveSettings $parameters
     * @access public
     * @return ResourceLibrarySaveSettingsResponse
     */
    public function ResourceLibrarySaveSettings(ResourceLibrarySaveSettings $parameters)
    {
      return $this->__soapCall('ResourceLibrarySaveSettings', array($parameters));
    }

    /**
     * Returns a list of the available Resources.<br/>
     *
     * @param ResourceList $parameters
     * @access public
     * @return ResourceListResponse
     */
    public function ResourceList(ResourceList $parameters)
    {
      return $this->__soapCall('ResourceList', array($parameters));
    }

    /**
     * Search for items in the resource<br/>
     *
     * @param ResourceSearch $parameters
     * @access public
     * @return ResourceSearchResponse
     */
    public function ResourceSearch(ResourceSearch $parameters)
    {
      return $this->__soapCall('ResourceSearch', array($parameters));
    }

    /**
     * Search for items in the resource, based on a list of IDs<br/>
     *
     * @param ResourceSearchByIDs $parameters
     * @access public
     * @return ResourceSearchByIDsResponse
     */
    public function ResourceSearchByIDs(ResourceSearchByIDs $parameters)
    {
      return $this->__soapCall('ResourceSearchByIDs', array($parameters));
    }

    /**
     * Search for items in the resource<br/>
     *
     * @param ResourceSearchInFolder $parameters
     * @access public
     * @return ResourceSearchInFolderResponse
     */
    public function ResourceSearchInFolder(ResourceSearchInFolder $parameters)
    {
      return $this->__soapCall('ResourceSearchInFolder', array($parameters));
    }

    /**
     * Search for items in the resource, and returns a paged result list<br/>
     *
     * @param ResourceSearchPaged $parameters
     * @access public
     * @return ResourceSearchPagedResponse
     */
    public function ResourceSearchPaged(ResourceSearchPaged $parameters)
    {
      return $this->__soapCall('ResourceSearchPaged', array($parameters));
    }

    /**
     * Removes all previously saved server info sets<br/>
     *
     * @param ServerDeleteAllSaveSystemFileInfos $parameters
     * @access public
     * @return ServerDeleteAllSaveSystemFileInfosResponse
     */
    public function ServerDeleteAllSaveSystemFileInfos(ServerDeleteAllSaveSystemFileInfos $parameters)
    {
      return $this->__soapCall('ServerDeleteAllSaveSystemFileInfos', array($parameters));
    }

    /**
     * Deletes a previously saved server information set<br/>
     *
     * @param ServerDeleteSavedSystemInfoXML $parameters
     * @access public
     * @return ServerDeleteSavedSystemInfoXMLResponse
     */
    public function ServerDeleteSavedSystemInfoXML(ServerDeleteSavedSystemInfoXML $parameters)
    {
      return $this->__soapCall('ServerDeleteSavedSystemInfoXML', array($parameters));
    }

    /**
     * @param ServerGetLicenseInfo $parameters
     * @access public
     * @return ServerGetLicenseInfoResponse
     */
    public function ServerGetLicenseInfo(ServerGetLicenseInfo $parameters)
    {
      return $this->__soapCall('ServerGetLicenseInfo', array($parameters));
    }

    /**
     * Returns the server logging settings<br/>
     *
     * @param ServerGetLoggingSettings $parameters
     * @access public
     * @return ServerGetLoggingSettingsResponse
     */
    public function ServerGetLoggingSettings(ServerGetLoggingSettings $parameters)
    {
      return $this->__soapCall('ServerGetLoggingSettings', array($parameters));
    }

    /**
     * Returns a list of previously saved system info XML files<br/>
     *
     * @param ServerGetSavedSystemInfoList $parameters
     * @access public
     * @return ServerGetSavedSystemInfoListResponse
     */
    public function ServerGetSavedSystemInfoList(ServerGetSavedSystemInfoList $parameters)
    {
      return $this->__soapCall('ServerGetSavedSystemInfoList', array($parameters));
    }

    /**
     * Returns XML which was previously generated using ServerGetSystemInfo and saved using ServerSaveSystemInfoXML<br/>
     *
     * @param ServerGetSavedSystemInfoXML $parameters
     * @access public
     * @return ServerGetSavedSystemInfoXMLResponse
     */
    public function ServerGetSavedSystemInfoXML(ServerGetSavedSystemInfoXML $parameters)
    {
      return $this->__soapCall('ServerGetSavedSystemInfoXML', array($parameters));
    }

    /**
     * Returns the server settings<br/>
     *
     * @param ServerGetSettings $parameters
     * @access public
     * @return ServerGetSettingsResponse
     */
    public function ServerGetSettings(ServerGetSettings $parameters)
    {
      return $this->__soapCall('ServerGetSettings', array($parameters));
    }

    /**
     * Downloads an external XML file containing information on ads, and converts it for use in CHILI Editor<br/>
     *
     * @param AdsGetFromURL $parameters
     * @access public
     * @return AdsGetFromURLResponse
     */
    public function AdsGetFromURL(AdsGetFromURL $parameters)
    {
      return $this->__soapCall('AdsGetFromURL', array($parameters));
    }

    /**
     * Clear HTTP header key/value pairs for apiKey.<br/>
     *
     * @param ApiKeyClearHeaderFieldsForServerDownloads $parameters
     * @access public
     * @return ApiKeyClearHeaderFieldsForServerDownloadsResponse
     */
    public function ApiKeyClearHeaderFieldsForServerDownloads(ApiKeyClearHeaderFieldsForServerDownloads $parameters)
    {
      return $this->__soapCall('ApiKeyClearHeaderFieldsForServerDownloads', array($parameters));
    }

    /**
     * Return the current XML representation of the apiKey<br/>
     *
     * @param ApiKeyGetCurrentSettings $parameters
     * @access public
     * @return ApiKeyGetCurrentSettingsResponse
     */
    public function ApiKeyGetCurrentSettings(ApiKeyGetCurrentSettings $parameters)
    {
      return $this->__soapCall('ApiKeyGetCurrentSettings', array($parameters));
    }

    /**
     * Call to keep the current apiKey alive (slide expiration back)<br/>
     *
     * @param ApiKeyKeepAlive $parameters
     * @access public
     * @return ApiKeyKeepAliveResponse
     */
    public function ApiKeyKeepAlive(ApiKeyKeepAlive $parameters)
    {
      return $this->__soapCall('ApiKeyKeepAlive', array($parameters));
    }

    /**
     * Add HTTP header key/value pairs for apiKey. When that API key is used to generate a PDF of a document that contains external assets, those key/value pairs are sent along in the header of the http request to download the high res assets.<br/>
     *
     * @param ApiKeySetHeaderFieldForServerDownloads $parameters
     * @access public
     * @return ApiKeySetHeaderFieldForServerDownloadsResponse
     */
    public function ApiKeySetHeaderFieldForServerDownloads(ApiKeySetHeaderFieldForServerDownloads $parameters)
    {
      return $this->__soapCall('ApiKeySetHeaderFieldForServerDownloads', array($parameters));
    }

    /**
     * Returns information about the underlying image<br/>
     *
     * @param AssetGetImageInfo $parameters
     * @access public
     * @return AssetGetImageInfoResponse
     */
    public function AssetGetImageInfo(AssetGetImageInfo $parameters)
    {
      return $this->__soapCall('AssetGetImageInfo', array($parameters));
    }

    /**
     * Creates a barcode, or returns information on it if it already existed in the cache<br/>
     *
     * @param BarcodeCreate $parameters
     * @access public
     * @return BarcodeCreateResponse
     */
    public function BarcodeCreate(BarcodeCreate $parameters)
    {
      return $this->__soapCall('BarcodeCreate', array($parameters));
    }

    /**
     * Creates a barcode, or returns information on it if it already existed in the cache. <br/>
     *
     * @param BarcodeCreateColored $parameters
     * @access public
     * @return BarcodeCreateColoredResponse
     */
    public function BarcodeCreateColored(BarcodeCreateColored $parameters)
    {
      return $this->__soapCall('BarcodeCreateColored', array($parameters));
    }

    /**
     * Converts an XML to CSV format, and returns a download link<br/>
     *
     * @param CsvFileCreate $parameters
     * @access public
     * @return CsvFileCreateResponse
     */
    public function CsvFileCreate(CsvFileCreate $parameters)
    {
      return $this->__soapCall('CsvFileCreate', array($parameters));
    }

    /**
     * Adds a new sample file to a DataSource<br/>
     *
     * @param DataSourceAddSampleFile $parameters
     * @access public
     * @return DataSourceAddSampleFileResponse
     */
    public function DataSourceAddSampleFile(DataSourceAddSampleFile $parameters)
    {
      return $this->__soapCall('DataSourceAddSampleFile', array($parameters));
    }

    /**
     * Deletes a sample files assigned to a DataSource<br/>
     *
     * @param DataSourceDeleteSampleFile $parameters
     * @access public
     * @return DataSourceDeleteSampleFileResponse
     */
    public function DataSourceDeleteSampleFile(DataSourceDeleteSampleFile $parameters)
    {
      return $this->__soapCall('DataSourceDeleteSampleFile', array($parameters));
    }

    /**
     * Downloads a list of spreadsheets for a datasource (if its type = &#39;google&#39;)<br/>
     *
     * @param DataSourceDownloadSpreadsheets $parameters
     * @access public
     * @return DataSourceDownloadSpreadsheetsResponse
     */
    public function DataSourceDownloadSpreadsheets(DataSourceDownloadSpreadsheets $parameters)
    {
      return $this->__soapCall('DataSourceDownloadSpreadsheets', array($parameters));
    }

    /**
     * Returns the result of one of the external URLs for a DataSource<br/>
     *
     * @param DataSourceDownloadURL $parameters
     * @access public
     * @return DataSourceDownloadURLResponse
     */
    public function DataSourceDownloadURL(DataSourceDownloadURL $parameters)
    {
      return $this->__soapCall('DataSourceDownloadURL', array($parameters));
    }

    /**
     * Converts an uploaded file to generic XML using the settings of a DataSource<br/>
     *
     * @param DataSourceFileGetXML $parameters
     * @access public
     * @return DataSourceFileGetXMLResponse
     */
    public function DataSourceFileGetXML(DataSourceFileGetXML $parameters)
    {
      return $this->__soapCall('DataSourceFileGetXML', array($parameters));
    }

    /**
     * Get a list of the sample files assigned to a DataSource<br/>
     *
     * @param DataSourceListSampleFiles $parameters
     * @access public
     * @return DataSourceListSampleFilesResponse
     */
    public function DataSourceListSampleFiles(DataSourceListSampleFiles $parameters)
    {
      return $this->__soapCall('DataSourceListSampleFiles', array($parameters));
    }

    /**
     * Downloads an XML representation of the selected salesforce Query<br/>
     *
     * @param DataSourceSalesForceGetXML $parameters
     * @access public
     * @return DataSourceSalesForceGetXMLResponse
     */
    public function DataSourceSalesForceGetXML(DataSourceSalesForceGetXML $parameters)
    {
      return $this->__soapCall('DataSourceSalesForceGetXML', array($parameters));
    }

    /**
     * Downloads an XML representation of the selected spreadsheet<br/>
     *
     * @param DataSourceSpreadsheetGetXML $parameters
     * @access public
     * @return DataSourceSpreadsheetGetXMLResponse
     */
    public function DataSourceSpreadsheetGetXML(DataSourceSpreadsheetGetXML $parameters)
    {
      return $this->__soapCall('DataSourceSpreadsheetGetXML', array($parameters));
    }

    /**
     * Duplicates annotations from one document to another<br/>
     *
     * @param DocumentCopyAnnotations $parameters
     * @access public
     * @return DocumentCopyAnnotationsResponse
     */
    public function DocumentCopyAnnotations(DocumentCopyAnnotations $parameters)
    {
      return $this->__soapCall('DocumentCopyAnnotations', array($parameters));
    }

    /**
     * Duplicates Document Event Actions from one document to another<br/>
     *
     * @param DocumentCopyDocumentEventActions $parameters
     * @access public
     * @return DocumentCopyDocumentEventActionsResponse
     */
    public function DocumentCopyDocumentEventActions(DocumentCopyDocumentEventActions $parameters)
    {
      return $this->__soapCall('DocumentCopyDocumentEventActions', array($parameters));
    }

    /**
     * Duplicates variable definitions from one document to another<br/>
     *
     * @param DocumentCopyVariableDefinitions $parameters
     * @access public
     * @return DocumentCopyVariableDefinitionsResponse
     */
    public function DocumentCopyVariableDefinitions(DocumentCopyVariableDefinitions $parameters)
    {
      return $this->__soapCall('DocumentCopyVariableDefinitions', array($parameters));
    }

    /**
     * Creates a new document based on the settings in the &quot;DocumentTemplates&quot; resource. This resource contains such settings as number of pages, dimensions, etc.<br/>
     *
     * @param DocumentCreateFromBlankDocTemplate $parameters
     * @access public
     * @return DocumentCreateFromBlankDocTemplateResponse
     */
    public function DocumentCreateFromBlankDocTemplate(DocumentCreateFromBlankDocTemplate $parameters)
    {
      return $this->__soapCall('DocumentCreateFromBlankDocTemplate', array($parameters));
    }

    /**
     * Creates a new document based on a zip file containing a CHILI package (usually generated by the InDesign Extension).<br/>
     *
     * @param DocumentCreateFromChiliPackage $parameters
     * @access public
     * @return DocumentCreateFromChiliPackageResponse
     */
    public function DocumentCreateFromChiliPackage(DocumentCreateFromChiliPackage $parameters)
    {
      return $this->__soapCall('DocumentCreateFromChiliPackage', array($parameters));
    }

    /**
     * Creates a new document based on a Open Document Text file.<br/>
     *
     * @param DocumentCreateFromODT $parameters
     * @access public
     * @return DocumentCreateFromODTResponse
     */
    public function DocumentCreateFromODT(DocumentCreateFromODT $parameters)
    {
      return $this->__soapCall('DocumentCreateFromODT', array($parameters));
    }

}
