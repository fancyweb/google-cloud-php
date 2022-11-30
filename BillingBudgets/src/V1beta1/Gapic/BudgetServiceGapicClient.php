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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/billing/budgets/v1beta1/budget_service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Billing\Budgets\V1beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Billing\Budgets\V1beta1\Budget;
use Google\Cloud\Billing\Budgets\V1beta1\CreateBudgetRequest;
use Google\Cloud\Billing\Budgets\V1beta1\DeleteBudgetRequest;
use Google\Cloud\Billing\Budgets\V1beta1\GetBudgetRequest;
use Google\Cloud\Billing\Budgets\V1beta1\ListBudgetsRequest;
use Google\Cloud\Billing\Budgets\V1beta1\ListBudgetsResponse;
use Google\Cloud\Billing\Budgets\V1beta1\UpdateBudgetRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: BudgetService stores Cloud Billing budgets, which define a
 * budget plan and rules to execute as we track spend against that plan.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $budgetServiceClient = new BudgetServiceClient();
 * try {
 *     $formattedParent = $budgetServiceClient->billingAccountName('[BILLING_ACCOUNT]');
 *     $budget = new Budget();
 *     $response = $budgetServiceClient->createBudget($formattedParent, $budget);
 * } finally {
 *     $budgetServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 */
class BudgetServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.billing.budgets.v1beta1.BudgetService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'billingbudgets.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-billing',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $billingAccountNameTemplate;

    private static $budgetNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/budget_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/budget_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/budget_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/budget_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBillingAccountNameTemplate()
    {
        if (self::$billingAccountNameTemplate == null) {
            self::$billingAccountNameTemplate = new PathTemplate('billingAccounts/{billing_account}');
        }

        return self::$billingAccountNameTemplate;
    }

    private static function getBudgetNameTemplate()
    {
        if (self::$budgetNameTemplate == null) {
            self::$budgetNameTemplate = new PathTemplate('billingAccounts/{billing_account}/budgets/{budget}');
        }

        return self::$budgetNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'billingAccount' => self::getBillingAccountNameTemplate(),
                'budget' => self::getBudgetNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * billing_account resource.
     *
     * @param string $billingAccount
     *
     * @return string The formatted billing_account resource.
     *
     * @experimental
     */
    public static function billingAccountName($billingAccount)
    {
        return self::getBillingAccountNameTemplate()->render([
            'billing_account' => $billingAccount,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a budget
     * resource.
     *
     * @param string $billingAccount
     * @param string $budget
     *
     * @return string The formatted budget resource.
     *
     * @experimental
     */
    public static function budgetName($billingAccount, $budget)
    {
        return self::getBudgetNameTemplate()->render([
            'billing_account' => $billingAccount,
            'budget' => $budget,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - billingAccount: billingAccounts/{billing_account}
     * - budget: billingAccounts/{billing_account}/budgets/{budget}
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
     *
     * @experimental
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
     *           as "<uri>:<port>". Default 'billingbudgets.googleapis.com:443'.
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
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new budget. See
     * [Quotas and limits](https://cloud.google.com/billing/quotas)
     * for more information on the limits of the number of budgets you can create.
     *
     * Sample code:
     * ```
     * $budgetServiceClient = new BudgetServiceClient();
     * try {
     *     $formattedParent = $budgetServiceClient->billingAccountName('[BILLING_ACCOUNT]');
     *     $budget = new Budget();
     *     $response = $budgetServiceClient->createBudget($formattedParent, $budget);
     * } finally {
     *     $budgetServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The name of the billing account to create the budget in. Values
     *                             are of the form `billingAccounts/{billingAccountId}`.
     * @param Budget $budget       Required. Budget to create.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\Budgets\V1beta1\Budget
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function createBudget($parent, $budget, array $optionalArgs = [])
    {
        $request = new CreateBudgetRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setBudget($budget);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateBudget', Budget::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes a budget. Returns successfully if already deleted.
     *
     * Sample code:
     * ```
     * $budgetServiceClient = new BudgetServiceClient();
     * try {
     *     $formattedName = $budgetServiceClient->budgetName('[BILLING_ACCOUNT]', '[BUDGET]');
     *     $budgetServiceClient->deleteBudget($formattedName);
     * } finally {
     *     $budgetServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the budget to delete. Values are of the form
     *                             `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function deleteBudget($name, array $optionalArgs = [])
    {
        $request = new DeleteBudgetRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteBudget', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns a budget.
     *
     * WARNING: There are some fields exposed on the Google Cloud Console that
     * aren't available on this API. When reading from the API, you will not
     * see these fields in the return value, though they may have been set
     * in the Cloud Console.
     *
     * Sample code:
     * ```
     * $budgetServiceClient = new BudgetServiceClient();
     * try {
     *     $formattedName = $budgetServiceClient->budgetName('[BILLING_ACCOUNT]', '[BUDGET]');
     *     $response = $budgetServiceClient->getBudget($formattedName);
     * } finally {
     *     $budgetServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of budget to get. Values are of the form
     *                             `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\Budgets\V1beta1\Budget
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getBudget($name, array $optionalArgs = [])
    {
        $request = new GetBudgetRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetBudget', Budget::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns a list of budgets for a billing account.
     *
     * WARNING: There are some fields exposed on the Google Cloud Console that
     * aren't available on this API. When reading from the API, you will not
     * see these fields in the return value, though they may have been set
     * in the Cloud Console.
     *
     * Sample code:
     * ```
     * $budgetServiceClient = new BudgetServiceClient();
     * try {
     *     $formattedParent = $budgetServiceClient->billingAccountName('[BILLING_ACCOUNT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $budgetServiceClient->listBudgets($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $budgetServiceClient->listBudgets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $budgetServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Name of billing account to list budgets under. Values
     *                             are of the form `billingAccounts/{billingAccountId}`.
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
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listBudgets($parent, array $optionalArgs = [])
    {
        $request = new ListBudgetsRequest();
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
        return $this->getPagedListResponse('ListBudgets', $optionalArgs, ListBudgetsResponse::class, $request);
    }

    /**
     * Updates a budget and returns the updated budget.
     *
     * WARNING: There are some fields exposed on the Google Cloud Console that
     * aren't available on this API. Budget fields that are not exposed in
     * this API will not be changed by this method.
     *
     * Sample code:
     * ```
     * $budgetServiceClient = new BudgetServiceClient();
     * try {
     *     $budget = new Budget();
     *     $response = $budgetServiceClient->updateBudget($budget);
     * } finally {
     *     $budgetServiceClient->close();
     * }
     * ```
     *
     * @param Budget $budget       Required. The updated budget object.
     *                             The budget to update is specified by the budget name in the budget.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Optional. Indicates which fields in the provided budget to update.
     *           Read-only fields (such as `name`) cannot be changed. If this is not
     *           provided, then only fields with non-default values from the request are
     *           updated. See
     *           https://developers.google.com/protocol-buffers/docs/proto3#default for more
     *           details about default values.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\Budgets\V1beta1\Budget
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateBudget($budget, array $optionalArgs = [])
    {
        $request = new UpdateBudgetRequest();
        $requestParamHeaders = [];
        $request->setBudget($budget);
        $requestParamHeaders['budget.name'] = $budget->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateBudget', Budget::class, $optionalArgs, $request)->wait();
    }
}
