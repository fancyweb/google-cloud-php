<?php
/*
 * Copyright 2021 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\GetInterconnectLocationRequest;
use Google\Cloud\Compute\V1\InterconnectLocation;
use Google\Cloud\Compute\V1\InterconnectLocationList;
use Google\Cloud\Compute\V1\ListInterconnectLocationsRequest;

/**
 * Service Description: The InterconnectLocations API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $interconnectLocationsClient = new InterconnectLocationsClient();
 * try {
 *     $interconnectLocation = 'interconnect_location';
 *     $project = 'project';
 *     $response = $interconnectLocationsClient->get($interconnectLocation, $project);
 * } finally {
 *     $interconnectLocationsClient->close();
 * }
 * ```
 */
class InterconnectLocationsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.compute.v1.InterconnectLocations';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute.readonly',
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/interconnect_locations_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/interconnect_locations_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/interconnect_locations_rest_client_config.php',
                ],
            ],
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements GapicClientTrait::getSupportedTransports. */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
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
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
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
     * Returns the details for the specified interconnect location. Gets a list of available interconnect locations by making a list() request.
     *
     * Sample code:
     * ```
     * $interconnectLocationsClient = new InterconnectLocationsClient();
     * try {
     *     $interconnectLocation = 'interconnect_location';
     *     $project = 'project';
     *     $response = $interconnectLocationsClient->get($interconnectLocation, $project);
     * } finally {
     *     $interconnectLocationsClient->close();
     * }
     * ```
     *
     * @param string $interconnectLocation Name of the interconnect location to return.
     * @param string $project              Project ID for this request.
     * @param array  $optionalArgs         {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\InterconnectLocation
     *
     * @throws ApiException if the remote call fails
     */
    public function get($interconnectLocation, $project, array $optionalArgs = [])
    {
        $request = new GetInterconnectLocationRequest();
        $requestParamHeaders = [];
        $request->setInterconnectLocation($interconnectLocation);
        $request->setProject($project);
        $requestParamHeaders['interconnect_location'] = $interconnectLocation;
        $requestParamHeaders['project'] = $project;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Get', InterconnectLocation::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the list of interconnect locations available to the specified project.
     *
     * Sample code:
     * ```
     * $interconnectLocationsClient = new InterconnectLocationsClient();
     * try {
     *     $project = 'project';
     *     // Iterate over pages of elements
     *     $pagedResponse = $interconnectLocationsClient->list($project);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $interconnectLocationsClient->list($project);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $interconnectLocationsClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           A filter expression that filters resources listed in the response. Most Compute resources support two types of filter expressions: expressions that support regular expressions and expressions that follow API improvement proposal AIP-160. If you want to use AIP-160, your expression must specify the field name, an operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`, `>=` or `:`. For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`. The `:` operator can be used with string fields to match substrings. For non-string fields it is equivalent to the `=` operator. The `:*` comparison can be used to test whether a key has been defined. For example, to find all objects with `owner` label use: ``` labels.owner:* ``` You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels. To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ``` If you want to use a regular expression, use the `eq` (equal) or `ne` (not equal) operator against a single un-parenthesized expression with or without quotes or against multiple parenthesized expressions. Examples: `fieldname eq unquoted literal` `fieldname eq 'single quoted literal'` `fieldname eq "double quoted literal"` `(fieldname1 eq literal) (fieldname2 ne "literal")` The literal value is interpreted as a regular expression using Google RE2 library syntax. The literal value must match the entire field. For example, to filter for instances that do not end with name "instance", you would use `name ne .*instance`.
     *     @type int $maxResults
     *           The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $orderBy
     *           Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name. You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first. Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type bool $returnPartialSuccess
     *           Opt-in for partial success behavior which provides partial results in case of failure. The default value is false.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function list($project, array $optionalArgs = [])
    {
        $request = new ListInterconnectLocationsRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $requestParamHeaders['project'] = $project;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['maxResults'])) {
            $request->setMaxResults($optionalArgs['maxResults']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['returnPartialSuccess'])) {
            $request->setReturnPartialSuccess($optionalArgs['returnPartialSuccess']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('List', $optionalArgs, InterconnectLocationList::class, $request);
    }
}
