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

// [START compute_v1_generated_InstanceGroupManagers_ListErrors_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Compute\V1\InstanceGroupManagersClient;
use Google\Cloud\Compute\V1\InstanceManagedByIgmError;

/**
 * Lists all errors thrown by actions on instances for a given managed instance group. The filter and orderBy query parameters are not supported.
 *
 * @param string $instanceGroupManager The name of the managed instance group. It must be a string that meets the requirements in RFC1035, or an unsigned long integer: must match regexp pattern: (?:[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?)|1-9{0,19}.
 * @param string $project              Project ID for this request.
 * @param string $zone                 The name of the zone where the managed instance group is located. It should conform to RFC1035.
 */
function list_errors_sample(string $instanceGroupManager, string $project, string $zone): void
{
    // Create a client.
    $instanceGroupManagersClient = new InstanceGroupManagersClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $instanceGroupManagersClient->listErrors($instanceGroupManager, $project, $zone);

        /** @var InstanceManagedByIgmError $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $instanceGroupManager = '[INSTANCE_GROUP_MANAGER]';
    $project = '[PROJECT]';
    $zone = '[ZONE]';

    list_errors_sample($instanceGroupManager, $project, $zone);
}
// [END compute_v1_generated_InstanceGroupManagers_ListErrors_sync]
