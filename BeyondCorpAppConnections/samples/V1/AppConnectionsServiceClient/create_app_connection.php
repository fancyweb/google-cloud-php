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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START beyondcorp_v1_generated_AppConnectionsService_CreateAppConnection_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection;
use Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\ApplicationEndpoint;
use Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Type;
use Google\Cloud\BeyondCorp\AppConnections\V1\AppConnectionsServiceClient;
use Google\Rpc\Status;

/**
 * Creates a new AppConnection in a given project and location.
 *
 * @param string $formattedParent                      The resource project name of the AppConnection location using the
 *                                                     form: `projects/{project_id}/locations/{location_id}`
 *                                                     Please see {@see AppConnectionsServiceClient::locationName()} for help formatting this field.
 * @param string $appConnectionName                    Unique resource name of the AppConnection.
 *                                                     The name is ignored when creating a AppConnection.
 * @param int    $appConnectionType                    The type of network connectivity used by the AppConnection.
 * @param string $appConnectionApplicationEndpointHost Hostname or IP address of the remote application endpoint.
 * @param int    $appConnectionApplicationEndpointPort Port of the remote application endpoint.
 */
function create_app_connection_sample(
    string $formattedParent,
    string $appConnectionName,
    int $appConnectionType,
    string $appConnectionApplicationEndpointHost,
    int $appConnectionApplicationEndpointPort
): void {
    // Create a client.
    $appConnectionsServiceClient = new AppConnectionsServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $appConnectionApplicationEndpoint = (new ApplicationEndpoint())
        ->setHost($appConnectionApplicationEndpointHost)
        ->setPort($appConnectionApplicationEndpointPort);
    $appConnection = (new AppConnection())
        ->setName($appConnectionName)
        ->setType($appConnectionType)
        ->setApplicationEndpoint($appConnectionApplicationEndpoint);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $appConnectionsServiceClient->createAppConnection($formattedParent, $appConnection);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var AppConnection $response */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = AppConnectionsServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $appConnectionName = '[NAME]';
    $appConnectionType = Type::TYPE_UNSPECIFIED;
    $appConnectionApplicationEndpointHost = '[HOST]';
    $appConnectionApplicationEndpointPort = 0;

    create_app_connection_sample(
        $formattedParent,
        $appConnectionName,
        $appConnectionType,
        $appConnectionApplicationEndpointHost,
        $appConnectionApplicationEndpointPort
    );
}
// [END beyondcorp_v1_generated_AppConnectionsService_CreateAppConnection_sync]
