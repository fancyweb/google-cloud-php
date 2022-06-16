<?php
/*
 * Copyright 2022 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/essentialcontacts/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\EssentialContacts\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\EssentialContacts\V1\ComputeContactsRequest;
use Google\Cloud\EssentialContacts\V1\ComputeContactsResponse;
use Google\Cloud\EssentialContacts\V1\Contact;
use Google\Cloud\EssentialContacts\V1\CreateContactRequest;
use Google\Cloud\EssentialContacts\V1\DeleteContactRequest;
use Google\Cloud\EssentialContacts\V1\GetContactRequest;
use Google\Cloud\EssentialContacts\V1\ListContactsRequest;
use Google\Cloud\EssentialContacts\V1\ListContactsResponse;
use Google\Cloud\EssentialContacts\V1\NotificationCategory;
use Google\Cloud\EssentialContacts\V1\SendTestMessageRequest;
use Google\Cloud\EssentialContacts\V1\UpdateContactRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Manages contacts for important Google Cloud notifications.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $essentialContactsServiceClient = new EssentialContactsServiceClient();
 * try {
 *     $formattedParent = $essentialContactsServiceClient->projectName('[PROJECT]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $essentialContactsServiceClient->computeContacts($formattedParent);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *     // Alternatively:
 *     // Iterate through all elements
 *     $pagedResponse = $essentialContactsServiceClient->computeContacts($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $essentialContactsServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class EssentialContactsServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.essentialcontacts.v1.EssentialContactsService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'essentialcontacts.googleapis.com';

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
    ];

    private static $contactNameTemplate;

    private static $folderNameTemplate;

    private static $folderContactNameTemplate;

    private static $organizationNameTemplate;

    private static $organizationContactNameTemplate;

    private static $projectNameTemplate;

    private static $projectContactNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/essential_contacts_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/essential_contacts_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/essential_contacts_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/essential_contacts_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getContactNameTemplate()
    {
        if (self::$contactNameTemplate == null) {
            self::$contactNameTemplate = new PathTemplate('projects/{project}/contacts/{contact}');
        }

        return self::$contactNameTemplate;
    }

    private static function getFolderNameTemplate()
    {
        if (self::$folderNameTemplate == null) {
            self::$folderNameTemplate = new PathTemplate('folders/{folder}');
        }

        return self::$folderNameTemplate;
    }

    private static function getFolderContactNameTemplate()
    {
        if (self::$folderContactNameTemplate == null) {
            self::$folderContactNameTemplate = new PathTemplate('folders/{folder}/contacts/{contact}');
        }

        return self::$folderContactNameTemplate;
    }

    private static function getOrganizationNameTemplate()
    {
        if (self::$organizationNameTemplate == null) {
            self::$organizationNameTemplate = new PathTemplate('organizations/{organization}');
        }

        return self::$organizationNameTemplate;
    }

    private static function getOrganizationContactNameTemplate()
    {
        if (self::$organizationContactNameTemplate == null) {
            self::$organizationContactNameTemplate = new PathTemplate('organizations/{organization}/contacts/{contact}');
        }

        return self::$organizationContactNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectContactNameTemplate()
    {
        if (self::$projectContactNameTemplate == null) {
            self::$projectContactNameTemplate = new PathTemplate('projects/{project}/contacts/{contact}');
        }

        return self::$projectContactNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'contact' => self::getContactNameTemplate(),
                'folder' => self::getFolderNameTemplate(),
                'folderContact' => self::getFolderContactNameTemplate(),
                'organization' => self::getOrganizationNameTemplate(),
                'organizationContact' => self::getOrganizationContactNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectContact' => self::getProjectContactNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a contact
     * resource.
     *
     * @param string $project
     * @param string $contact
     *
     * @return string The formatted contact resource.
     */
    public static function contactName($project, $contact)
    {
        return self::getContactNameTemplate()->render([
            'project' => $project,
            'contact' => $contact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a folder
     * resource.
     *
     * @param string $folder
     *
     * @return string The formatted folder resource.
     */
    public static function folderName($folder)
    {
        return self::getFolderNameTemplate()->render([
            'folder' => $folder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_contact resource.
     *
     * @param string $folder
     * @param string $contact
     *
     * @return string The formatted folder_contact resource.
     */
    public static function folderContactName($folder, $contact)
    {
        return self::getFolderContactNameTemplate()->render([
            'folder' => $folder,
            'contact' => $contact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a organization
     * resource.
     *
     * @param string $organization
     *
     * @return string The formatted organization resource.
     */
    public static function organizationName($organization)
    {
        return self::getOrganizationNameTemplate()->render([
            'organization' => $organization,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_contact resource.
     *
     * @param string $organization
     * @param string $contact
     *
     * @return string The formatted organization_contact resource.
     */
    public static function organizationContactName($organization, $contact)
    {
        return self::getOrganizationContactNameTemplate()->render([
            'organization' => $organization,
            'contact' => $contact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_contact resource.
     *
     * @param string $project
     * @param string $contact
     *
     * @return string The formatted project_contact resource.
     */
    public static function projectContactName($project, $contact)
    {
        return self::getProjectContactNameTemplate()->render([
            'project' => $project,
            'contact' => $contact,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - contact: projects/{project}/contacts/{contact}
     * - folder: folders/{folder}
     * - folderContact: folders/{folder}/contacts/{contact}
     * - organization: organizations/{organization}
     * - organizationContact: organizations/{organization}/contacts/{contact}
     * - project: projects/{project}
     * - projectContact: projects/{project}/contacts/{contact}
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
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'essentialcontacts.googleapis.com:443'.
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
     * Lists all contacts for the resource that are subscribed to the
     * specified notification categories, including contacts inherited from
     * any parent resources.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedParent = $essentialContactsServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $essentialContactsServiceClient->computeContacts($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $essentialContactsServiceClient->computeContacts($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The name of the resource to compute contacts for.
     *                             Format: organizations/{organization_id},
     *                             folders/{folder_id} or projects/{project_id}
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int[] $notificationCategories
     *           The categories of notifications to compute contacts for. If ALL is included
     *           in this list, contacts subscribed to any notification category will be
     *           returned.
     *           For allowed values, use constants defined on {@see \Google\Cloud\EssentialContacts\V1\NotificationCategory}
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
    public function computeContacts($parent, array $optionalArgs = [])
    {
        $request = new ComputeContactsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['notificationCategories'])) {
            $request->setNotificationCategories($optionalArgs['notificationCategories']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ComputeContacts', $optionalArgs, ComputeContactsResponse::class, $request);
    }

    /**
     * Adds a new contact for a resource.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedParent = $essentialContactsServiceClient->projectName('[PROJECT]');
     *     $contact = new Contact();
     *     $response = $essentialContactsServiceClient->createContact($formattedParent, $contact);
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. The resource to save this contact for.
     *                              Format: organizations/{organization_id}, folders/{folder_id} or
     *                              projects/{project_id}
     * @param Contact $contact      Required. The contact to create. Must specify an email address and language
     *                              tag.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\EssentialContacts\V1\Contact
     *
     * @throws ApiException if the remote call fails
     */
    public function createContact($parent, $contact, array $optionalArgs = [])
    {
        $request = new CreateContactRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setContact($contact);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateContact', Contact::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes a contact.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedName = $essentialContactsServiceClient->contactName('[PROJECT]', '[CONTACT]');
     *     $essentialContactsServiceClient->deleteContact($formattedName);
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the contact to delete.
     *                             Format: organizations/{organization_id}/contacts/{contact_id},
     *                             folders/{folder_id}/contacts/{contact_id} or
     *                             projects/{project_id}/contacts/{contact_id}
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
    public function deleteContact($name, array $optionalArgs = [])
    {
        $request = new DeleteContactRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteContact', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a single contact.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedName = $essentialContactsServiceClient->contactName('[PROJECT]', '[CONTACT]');
     *     $response = $essentialContactsServiceClient->getContact($formattedName);
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the contact to retrieve.
     *                             Format: organizations/{organization_id}/contacts/{contact_id},
     *                             folders/{folder_id}/contacts/{contact_id} or
     *                             projects/{project_id}/contacts/{contact_id}
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
     * @return \Google\Cloud\EssentialContacts\V1\Contact
     *
     * @throws ApiException if the remote call fails
     */
    public function getContact($name, array $optionalArgs = [])
    {
        $request = new GetContactRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetContact', Contact::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists the contacts that have been set on a resource.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedParent = $essentialContactsServiceClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $essentialContactsServiceClient->listContacts($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $essentialContactsServiceClient->listContacts($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name.
     *                             Format: organizations/{organization_id}, folders/{folder_id} or
     *                             projects/{project_id}
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
    public function listContacts($parent, array $optionalArgs = [])
    {
        $request = new ListContactsRequest();
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
        return $this->getPagedListResponse('ListContacts', $optionalArgs, ListContactsResponse::class, $request);
    }

    /**
     * Allows a contact admin to send a test message to contact to verify that it
     * has been configured correctly.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $formattedContacts = [
     *         $essentialContactsServiceClient->contactName('[PROJECT]', '[CONTACT]'),
     *     ];
     *     $formattedResource = $essentialContactsServiceClient->projectName('[PROJECT]');
     *     $notificationCategory = NotificationCategory::NOTIFICATION_CATEGORY_UNSPECIFIED;
     *     $essentialContactsServiceClient->sendTestMessage($formattedContacts, $formattedResource, $notificationCategory);
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param string[] $contacts             Required. The list of names of the contacts to send a test message to.
     *                                       Format: organizations/{organization_id}/contacts/{contact_id},
     *                                       folders/{folder_id}/contacts/{contact_id} or
     *                                       projects/{project_id}/contacts/{contact_id}
     * @param string   $resource             Required. The name of the resource to send the test message for. All
     *                                       contacts must either be set directly on this resource or inherited from
     *                                       another resource that is an ancestor of this one. Format:
     *                                       organizations/{organization_id}, folders/{folder_id} or
     *                                       projects/{project_id}
     * @param int      $notificationCategory Required. The notification category to send the test message for. All
     *                                       contacts must be subscribed to this category.
     *                                       For allowed values, use constants defined on {@see \Google\Cloud\EssentialContacts\V1\NotificationCategory}
     * @param array    $optionalArgs         {
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
    public function sendTestMessage($contacts, $resource, $notificationCategory, array $optionalArgs = [])
    {
        $request = new SendTestMessageRequest();
        $requestParamHeaders = [];
        $request->setContacts($contacts);
        $request->setResource($resource);
        $request->setNotificationCategory($notificationCategory);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SendTestMessage', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Updates a contact.
     * Note: A contact's email address cannot be changed.
     *
     * Sample code:
     * ```
     * $essentialContactsServiceClient = new EssentialContactsServiceClient();
     * try {
     *     $contact = new Contact();
     *     $response = $essentialContactsServiceClient->updateContact($contact);
     * } finally {
     *     $essentialContactsServiceClient->close();
     * }
     * ```
     *
     * @param Contact $contact      Required. The contact resource to replace the existing saved contact. Note:
     *                              the email address of the contact cannot be modified.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Optional. The update mask applied to the resource. For the `FieldMask`
     *           definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\EssentialContacts\V1\Contact
     *
     * @throws ApiException if the remote call fails
     */
    public function updateContact($contact, array $optionalArgs = [])
    {
        $request = new UpdateContactRequest();
        $requestParamHeaders = [];
        $request->setContact($contact);
        $requestParamHeaders['contact.name'] = $contact->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateContact', Contact::class, $optionalArgs, $request)->wait();
    }
}
