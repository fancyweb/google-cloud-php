<?php
/*
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/monitoring/v3/uptime_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Monitoring\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Monitoring\V3\CreateUptimeCheckConfigRequest;
use Google\Cloud\Monitoring\V3\DeleteUptimeCheckConfigRequest;
use Google\Cloud\Monitoring\V3\GetUptimeCheckConfigRequest;
use Google\Cloud\Monitoring\V3\ListUptimeCheckConfigsRequest;
use Google\Cloud\Monitoring\V3\ListUptimeCheckConfigsResponse;
use Google\Cloud\Monitoring\V3\ListUptimeCheckIpsRequest;
use Google\Cloud\Monitoring\V3\ListUptimeCheckIpsResponse;
use Google\Cloud\Monitoring\V3\UpdateUptimeCheckConfigRequest;
use Google\Cloud\Monitoring\V3\UptimeCheckConfig;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: The UptimeCheckService API is used to manage (list, create, delete, edit)
 * Uptime check configurations in the Stackdriver Monitoring product. An Uptime
 * check is a piece of configuration that determines which resources and
 * services to monitor for availability. These configurations can also be
 * configured interactively by navigating to the [Cloud Console]
 * (http://console.cloud.google.com), selecting the appropriate project,
 * clicking on "Monitoring" on the left-hand side to navigate to Stackdriver,
 * and then clicking on "Uptime".
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
 * try {
 *     $parent = 'parent';
 *     $uptimeCheckConfig = new Google\Cloud\Monitoring\V3\UptimeCheckConfig();
 *     $response = $uptimeCheckServiceClient->createUptimeCheckConfig($parent, $uptimeCheckConfig);
 * } finally {
 *     $uptimeCheckServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class UptimeCheckServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.monitoring.v3.UptimeCheckService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'monitoring.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/monitoring',
        'https://www.googleapis.com/auth/monitoring.read',
    ];

    private static $folderUptimeCheckConfigNameTemplate;

    private static $organizationUptimeCheckConfigNameTemplate;

    private static $projectUptimeCheckConfigNameTemplate;

    private static $uptimeCheckConfigNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/uptime_check_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/uptime_check_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/uptime_check_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/uptime_check_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFolderUptimeCheckConfigNameTemplate()
    {
        if (self::$folderUptimeCheckConfigNameTemplate == null) {
            self::$folderUptimeCheckConfigNameTemplate = new PathTemplate('folders/{folder}/uptimeCheckConfigs/{uptime_check_config}');
        }

        return self::$folderUptimeCheckConfigNameTemplate;
    }

    private static function getOrganizationUptimeCheckConfigNameTemplate()
    {
        if (self::$organizationUptimeCheckConfigNameTemplate == null) {
            self::$organizationUptimeCheckConfigNameTemplate = new PathTemplate('organizations/{organization}/uptimeCheckConfigs/{uptime_check_config}');
        }

        return self::$organizationUptimeCheckConfigNameTemplate;
    }

    private static function getProjectUptimeCheckConfigNameTemplate()
    {
        if (self::$projectUptimeCheckConfigNameTemplate == null) {
            self::$projectUptimeCheckConfigNameTemplate = new PathTemplate('projects/{project}/uptimeCheckConfigs/{uptime_check_config}');
        }

        return self::$projectUptimeCheckConfigNameTemplate;
    }

    private static function getUptimeCheckConfigNameTemplate()
    {
        if (self::$uptimeCheckConfigNameTemplate == null) {
            self::$uptimeCheckConfigNameTemplate = new PathTemplate('projects/{project}/uptimeCheckConfigs/{uptime_check_config}');
        }

        return self::$uptimeCheckConfigNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'folderUptimeCheckConfig' => self::getFolderUptimeCheckConfigNameTemplate(),
                'organizationUptimeCheckConfig' => self::getOrganizationUptimeCheckConfigNameTemplate(),
                'projectUptimeCheckConfig' => self::getProjectUptimeCheckConfigNameTemplate(),
                'uptimeCheckConfig' => self::getUptimeCheckConfigNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_uptime_check_config resource.
     *
     * @param string $folder
     * @param string $uptimeCheckConfig
     *
     * @return string The formatted folder_uptime_check_config resource.
     */
    public static function folderUptimeCheckConfigName($folder, $uptimeCheckConfig)
    {
        return self::getFolderUptimeCheckConfigNameTemplate()->render([
            'folder' => $folder,
            'uptime_check_config' => $uptimeCheckConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_uptime_check_config resource.
     *
     * @param string $organization
     * @param string $uptimeCheckConfig
     *
     * @return string The formatted organization_uptime_check_config resource.
     */
    public static function organizationUptimeCheckConfigName($organization, $uptimeCheckConfig)
    {
        return self::getOrganizationUptimeCheckConfigNameTemplate()->render([
            'organization' => $organization,
            'uptime_check_config' => $uptimeCheckConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_uptime_check_config resource.
     *
     * @param string $project
     * @param string $uptimeCheckConfig
     *
     * @return string The formatted project_uptime_check_config resource.
     */
    public static function projectUptimeCheckConfigName($project, $uptimeCheckConfig)
    {
        return self::getProjectUptimeCheckConfigNameTemplate()->render([
            'project' => $project,
            'uptime_check_config' => $uptimeCheckConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * uptime_check_config resource.
     *
     * @param string $project
     * @param string $uptimeCheckConfig
     *
     * @return string The formatted uptime_check_config resource.
     */
    public static function uptimeCheckConfigName($project, $uptimeCheckConfig)
    {
        return self::getUptimeCheckConfigNameTemplate()->render([
            'project' => $project,
            'uptime_check_config' => $uptimeCheckConfig,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderUptimeCheckConfig: folders/{folder}/uptimeCheckConfigs/{uptime_check_config}
     * - organizationUptimeCheckConfig: organizations/{organization}/uptimeCheckConfigs/{uptime_check_config}
     * - projectUptimeCheckConfig: projects/{project}/uptimeCheckConfigs/{uptime_check_config}
     * - uptimeCheckConfig: projects/{project}/uptimeCheckConfigs/{uptime_check_config}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'monitoring.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new Uptime check configuration.
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     $parent = 'parent';
     *     $uptimeCheckConfig = new Google\Cloud\Monitoring\V3\UptimeCheckConfig();
     *     $response = $uptimeCheckServiceClient->createUptimeCheckConfig($parent, $uptimeCheckConfig);
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param string            $parent            Required. The
     *                                             [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     *                                             to create the Uptime check. The format is:
     *
     *                                             projects/[PROJECT_ID_OR_NUMBER]
     * @param UptimeCheckConfig $uptimeCheckConfig Required. The new Uptime check configuration.
     * @param array             $optionalArgs      {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function createUptimeCheckConfig($parent, $uptimeCheckConfig, array $optionalArgs = [])
    {
        $request = new CreateUptimeCheckConfigRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setUptimeCheckConfig($uptimeCheckConfig);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateUptimeCheckConfig', UptimeCheckConfig::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes an Uptime check configuration. Note that this method will fail
     * if the Uptime check configuration is referenced by an alert policy or
     * other dependent configs that would be rendered invalid by the deletion.
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     $formattedName = $uptimeCheckServiceClient->uptimeCheckConfigName('[PROJECT]', '[UPTIME_CHECK_CONFIG]');
     *     $uptimeCheckServiceClient->deleteUptimeCheckConfig($formattedName);
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Uptime check configuration to delete. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]/uptimeCheckConfigs/[UPTIME_CHECK_ID]
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteUptimeCheckConfig($name, array $optionalArgs = [])
    {
        $request = new DeleteUptimeCheckConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteUptimeCheckConfig', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a single Uptime check configuration.
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     $formattedName = $uptimeCheckServiceClient->uptimeCheckConfigName('[PROJECT]', '[UPTIME_CHECK_CONFIG]');
     *     $response = $uptimeCheckServiceClient->getUptimeCheckConfig($formattedName);
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The Uptime check configuration to retrieve. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]/uptimeCheckConfigs/[UPTIME_CHECK_ID]
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function getUptimeCheckConfig($name, array $optionalArgs = [])
    {
        $request = new GetUptimeCheckConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetUptimeCheckConfig', UptimeCheckConfig::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists the existing valid Uptime check configurations for the project
     * (leaving out any invalid configurations).
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $uptimeCheckServiceClient->listUptimeCheckConfigs($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $uptimeCheckServiceClient->listUptimeCheckConfigs($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The
     *                             [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     *                             Uptime check configurations are listed. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listUptimeCheckConfigs($parent, array $optionalArgs = [])
    {
        $request = new ListUptimeCheckConfigsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListUptimeCheckConfigs', $optionalArgs, ListUptimeCheckConfigsResponse::class, $request);
    }

    /**
     * Returns the list of IP addresses that checkers run from
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $uptimeCheckServiceClient->listUptimeCheckIps();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $uptimeCheckServiceClient->listUptimeCheckIps();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listUptimeCheckIps(array $optionalArgs = [])
    {
        $request = new ListUptimeCheckIpsRequest();
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        return $this->getPagedListResponse('ListUptimeCheckIps', $optionalArgs, ListUptimeCheckIpsResponse::class, $request);
    }

    /**
     * Updates an Uptime check configuration. You can either replace the entire
     * configuration with a new one or replace only certain fields in the current
     * configuration by specifying the fields to be updated via `updateMask`.
     * Returns the updated configuration.
     *
     * Sample code:
     * ```
     * $uptimeCheckServiceClient = new Google\Cloud\Monitoring\V3\UptimeCheckServiceClient();
     * try {
     *     $uptimeCheckConfig = new Google\Cloud\Monitoring\V3\UptimeCheckConfig();
     *     $response = $uptimeCheckServiceClient->updateUptimeCheckConfig($uptimeCheckConfig);
     * } finally {
     *     $uptimeCheckServiceClient->close();
     * }
     * ```
     *
     * @param UptimeCheckConfig $uptimeCheckConfig Required. If an `updateMask` has been specified, this field gives
     *                                             the values for the set of fields mentioned in the `updateMask`. If an
     *                                             `updateMask` has not been given, this Uptime check configuration replaces
     *                                             the current configuration. If a field is mentioned in `updateMask` but
     *                                             the corresonding field is omitted in this partial Uptime check
     *                                             configuration, it has the effect of deleting/clearing the field from the
     *                                             configuration on the server.
     *
     *                                             The following fields can be updated: `display_name`,
     *                                             `http_check`, `tcp_check`, `timeout`, `content_matchers`, and
     *                                             `selected_regions`.
     * @param array             $optionalArgs      {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Optional. If present, only the listed fields in the current Uptime check
     *           configuration are updated with values from the new configuration. If this
     *           field is empty, then the current configuration is completely replaced with
     *           the new configuration.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function updateUptimeCheckConfig($uptimeCheckConfig, array $optionalArgs = [])
    {
        $request = new UpdateUptimeCheckConfigRequest();
        $requestParamHeaders = [];
        $request->setUptimeCheckConfig($uptimeCheckConfig);
        $requestParamHeaders['uptime_check_config.name'] = $uptimeCheckConfig->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateUptimeCheckConfig', UptimeCheckConfig::class, $optionalArgs, $request)->wait();
    }
}
