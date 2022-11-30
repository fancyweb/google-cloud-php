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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/optimization/v1/fleet_routing.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Optimization\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Optimization\V1\BatchOptimizeToursRequest;
use Google\Cloud\Optimization\V1\BatchOptimizeToursRequest\AsyncModelConfig;
use Google\Cloud\Optimization\V1\InjectedSolutionConstraint;
use Google\Cloud\Optimization\V1\OptimizeToursRequest;
use Google\Cloud\Optimization\V1\OptimizeToursResponse;
use Google\Cloud\Optimization\V1\ShipmentModel;
use Google\Cloud\Optimization\V1\ShipmentRoute;
use Google\LongRunning\Operation;
use Google\Protobuf\Duration;

/**
 * Service Description: A service for optimizing vehicle tours.
 *
 * Validity of certain types of fields:
 *
 * * `google.protobuf.Timestamp`
 * * Times are in Unix time: seconds since 1970-01-01T00:00:00+00:00.
 * * seconds must be in [0, 253402300799],
 * i.e. in [1970-01-01T00:00:00+00:00, 9999-12-31T23:59:59+00:00].
 * * nanos must be unset or set to 0.
 * * `google.protobuf.Duration`
 * * seconds must be in [0, 253402300799],
 * i.e. in [1970-01-01T00:00:00+00:00, 9999-12-31T23:59:59+00:00].
 * * nanos must be unset or set to 0.
 * * `google.type.LatLng`
 * * latitude must be in [-90.0, 90.0].
 * * longitude must be in [-180.0, 180.0].
 * * at least one of latitude and longitude must be non-zero.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $fleetRoutingClient = new FleetRoutingClient();
 * try {
 *     $parent = 'parent';
 *     $modelConfigs = [];
 *     $operationResponse = $fleetRoutingClient->batchOptimizeTours($parent, $modelConfigs);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $fleetRoutingClient->batchOptimizeTours($parent, $modelConfigs);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $fleetRoutingClient->resumeOperation($operationName, 'batchOptimizeTours');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $fleetRoutingClient->close();
 * }
 * ```
 */
class FleetRoutingGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.optimization.v1.FleetRouting';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'cloudoptimization.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/fleet_routing_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/fleet_routing_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/fleet_routing_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/fleet_routing_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudoptimization.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Optimizes vehicle tours for one or more `OptimizeToursRequest`
     * messages as a batch.
     *
     * This method is a Long Running Operation (LRO). The inputs for optimization
     * (`OptimizeToursRequest` messages) and outputs (`OptimizeToursResponse`
     * messages) are read/written from/to Cloud Storage in user-specified
     * format. Like the `OptimizeTours` method, each `OptimizeToursRequest`
     * contains a `ShipmentModel` and returns an `OptimizeToursResponse`
     * containing `ShipmentRoute`s, which are a set of routes to be performed by
     * vehicles minimizing the overall cost.
     *
     * Sample code:
     * ```
     * $fleetRoutingClient = new FleetRoutingClient();
     * try {
     *     $parent = 'parent';
     *     $modelConfigs = [];
     *     $operationResponse = $fleetRoutingClient->batchOptimizeTours($parent, $modelConfigs);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $fleetRoutingClient->batchOptimizeTours($parent, $modelConfigs);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $fleetRoutingClient->resumeOperation($operationName, 'batchOptimizeTours');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $fleetRoutingClient->close();
     * }
     * ```
     *
     * @param string             $parent       Required. Target project and location to make a call.
     *
     *                                         Format: `projects/{project-id}/locations/{location-id}`.
     *
     *                                         If no location is specified, a region will be chosen automatically.
     * @param AsyncModelConfig[] $modelConfigs Required. Input/Output information each purchase model, such as file paths
     *                                         and data formats.
     * @param array              $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function batchOptimizeTours($parent, $modelConfigs, array $optionalArgs = [])
    {
        $request = new BatchOptimizeToursRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setModelConfigs($modelConfigs);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('BatchOptimizeTours', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Sends an `OptimizeToursRequest` containing a `ShipmentModel` and returns an
     * `OptimizeToursResponse` containing `ShipmentRoute`s, which are a set of
     * routes to be performed by vehicles minimizing the overall cost.
     *
     * A `ShipmentModel` model consists mainly of `Shipment`s that need to be
     * carried out and `Vehicle`s that can be used to transport the `Shipment`s.
     * The `ShipmentRoute`s assign `Shipment`s to `Vehicle`s. More specifically,
     * they assign a series of `Visit`s to each vehicle, where a `Visit`
     * corresponds to a `VisitRequest`, which is a pickup or delivery for a
     * `Shipment`.
     *
     * The goal is to provide an assignment of `ShipmentRoute`s to `Vehicle`s that
     * minimizes the total cost where cost has many components defined in the
     * `ShipmentModel`.
     *
     * Sample code:
     * ```
     * $fleetRoutingClient = new FleetRoutingClient();
     * try {
     *     $parent = 'parent';
     *     $response = $fleetRoutingClient->optimizeTours($parent);
     * } finally {
     *     $fleetRoutingClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Target project and location to make a call.
     *
     *                             Format: `projects/{project-id}/locations/{location-id}`.
     *
     *                             If no location is specified, a region will be chosen automatically.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type Duration $timeout
     *           If this timeout is set, the server returns a response before the timeout
     *           period has elapsed or the server deadline for synchronous requests is
     *           reached, whichever is sooner.
     *
     *           For asynchronous requests, the server will generate a solution (if
     *           possible) before the timeout has elapsed.
     *     @type ShipmentModel $model
     *           Shipment model to solve.
     *     @type int $solvingMode
     *           By default, the solving mode is `DEFAULT_SOLVE` (0).
     *           For allowed values, use constants defined on {@see \Google\Cloud\Optimization\V1\OptimizeToursRequest\SolvingMode}
     *     @type int $maxValidationErrors
     *           Truncates the number of validation errors returned. Those errors are
     *           typically attached to an INVALID_ARGUMENT error payload as a BadRequest
     *           error detail (https://cloud.google.com/apis/design/errors#error_details),
     *           unless solving_mode=VALIDATE_ONLY: see the
     *           [OptimizeToursResponse.validation_errors][google.cloud.optimization.v1.OptimizeToursResponse.validation_errors]
     *           field.
     *           This defaults to 100 and is capped at 10,000.
     *     @type int $searchMode
     *           Search mode used to solve the request.
     *           For allowed values, use constants defined on {@see \Google\Cloud\Optimization\V1\OptimizeToursRequest\SearchMode}
     *     @type ShipmentRoute[] $injectedFirstSolutionRoutes
     *           Guide the optimization algorithm in finding a first solution that is
     *           similar to a previous solution.
     *
     *           The model is constrained when the first solution is built.
     *           Any shipments not performed on a route are implicitly skipped in the first
     *           solution, but they may be performed in successive solutions.
     *
     *           The solution must satisfy some basic validity assumptions:
     *
     *           * for all routes, `vehicle_index` must be in range and not be duplicated.
     *           * for all visits, `shipment_index` and `visit_request_index` must be
     *           in range.
     *           * a shipment may only be referenced on one route.
     *           * the pickup of a pickup-delivery shipment must be performed before
     *           the delivery.
     *           * no more than one pickup alternative or delivery alternative of
     *           a shipment may be performed.
     *           * for all routes, times are increasing (i.e., `vehicle_start_time
     *           <= visits[0].start_time <= visits[1].start_time ...
     *           <= vehicle_end_time`).
     *           * a shipment may only be performed on a vehicle that is allowed. A
     *           vehicle is allowed if
     *           [Shipment.allowed_vehicle_indices][google.cloud.optimization.v1.Shipment.allowed_vehicle_indices]
     *           is empty or its `vehicle_index` is included in
     *           [Shipment.allowed_vehicle_indices][google.cloud.optimization.v1.Shipment.allowed_vehicle_indices].
     *
     *           If the injected solution is not feasible, a validation error is not
     *           necessarily returned and an error indicating infeasibility may be returned
     *           instead.
     *     @type InjectedSolutionConstraint $injectedSolutionConstraint
     *           Constrain the optimization algorithm to find a final solution that is
     *           similar to a previous solution. For example, this may be used to freeze
     *           portions of routes which have already been completed or which are to be
     *           completed but must not be modified.
     *
     *           If the injected solution is not feasible, a validation error is not
     *           necessarily returned and an error indicating infeasibility may be returned
     *           instead.
     *     @type ShipmentRoute[] $refreshDetailsRoutes
     *           If non-empty, the given routes will be refreshed, without modifying their
     *           underlying sequence of visits or travel times: only other details will be
     *           updated. This does not solve the model.
     *
     *           As of 2020/11, this only populates the polylines of non-empty routes and
     *           requires that `populate_polylines` is true.
     *
     *           The `route_polyline` fields of the passed-in routes may be inconsistent
     *           with route `transitions`.
     *
     *           This field must not be used together with `injected_first_solution_routes`
     *           or `injected_solution_constraint`.
     *
     *           `Shipment.ignore` and `Vehicle.ignore` have no effect on the behavior.
     *           Polylines are still populated between all visits in all non-empty routes
     *           regardless of whether the related shipments or vehicles are ignored.
     *     @type bool $interpretInjectedSolutionsUsingLabels
     *           If true:
     *
     *           * uses
     *           [ShipmentRoute.vehicle_label][google.cloud.optimization.v1.ShipmentRoute.vehicle_label]
     *           instead of `vehicle_index` to
     *           match routes in an injected solution with vehicles in the request;
     *           reuses the mapping of original
     *           [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index]
     *           to new
     *           [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index]
     *           to update
     *           [ConstraintRelaxation.vehicle_indices][google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.vehicle_indices]
     *           if non-empty, but the mapping must be unambiguous (i.e., multiple
     *           `ShipmentRoute`s must not share the same original `vehicle_index`).
     *           * uses
     *           [ShipmentRoute.Visit.shipment_label][google.cloud.optimization.v1.ShipmentRoute.Visit.shipment_label]
     *           instead of `shipment_index`
     *           to match visits in an injected solution with shipments in the request;
     *           * uses
     *           [SkippedShipment.label][google.cloud.optimization.v1.SkippedShipment.label]
     *           instead of
     *           [SkippedShipment.index][google.cloud.optimization.v1.SkippedShipment.index]
     *           to
     *           match skipped shipments in the injected solution with request
     *           shipments.
     *
     *           This interpretation applies to the `injected_first_solution_routes`,
     *           `injected_solution_constraint`, and `refresh_details_routes` fields.
     *           It can be used when shipment or vehicle indices in the request have
     *           changed since the solution was created, perhaps because shipments or
     *           vehicles have been removed from or added to the request.
     *
     *           If true, labels in the following categories must appear at most once in
     *           their category:
     *
     *           * [Vehicle.label][google.cloud.optimization.v1.Vehicle.label] in the
     *           request;
     *           * [Shipment.label][google.cloud.optimization.v1.Shipment.label] in the
     *           request;
     *           * [ShipmentRoute.vehicle_label][google.cloud.optimization.v1.ShipmentRoute.vehicle_label] in the injected solution;
     *           * [SkippedShipment.label][google.cloud.optimization.v1.SkippedShipment.label] and [ShipmentRoute.Visit.shipment_label][google.cloud.optimization.v1.ShipmentRoute.Visit.shipment_label] in
     *           the injected solution (except pickup/delivery visit pairs, whose
     *           `shipment_label` must appear twice).
     *
     *           If a `vehicle_label` in the injected solution does not correspond to a
     *           request vehicle, the corresponding route is removed from the solution
     *           along with its visits. If a `shipment_label` in the injected solution does
     *           not correspond to a request shipment, the corresponding visit is removed
     *           from the solution. If a
     *           [SkippedShipment.label][google.cloud.optimization.v1.SkippedShipment.label]
     *           in the injected solution does not correspond to a request shipment, the
     *           `SkippedShipment` is removed from the solution.
     *
     *           Removing route visits or entire routes from an injected solution may
     *           have an effect on the implied constraints, which may lead to change in
     *           solution, validation errors, or infeasibility.
     *
     *           NOTE: The caller must ensure that each
     *           [Vehicle.label][google.cloud.optimization.v1.Vehicle.label] (resp.
     *           [Shipment.label][google.cloud.optimization.v1.Shipment.label]) uniquely
     *           identifies a vehicle (resp. shipment) entity used across the two relevant
     *           requests: the past request that produced the `OptimizeToursResponse` used
     *           in the injected solution and the current request that includes the injected
     *           solution. The uniqueness checks described above are not enough to guarantee
     *           this requirement.
     *     @type bool $considerRoadTraffic
     *           Consider traffic estimation in calculating `ShipmentRoute` fields
     *           [Transition.travel_duration][google.cloud.optimization.v1.ShipmentRoute.Transition.travel_duration],
     *           [Visit.start_time][google.cloud.optimization.v1.ShipmentRoute.Visit.start_time],
     *           and `vehicle_end_time`; in setting the
     *           [ShipmentRoute.has_traffic_infeasibilities][google.cloud.optimization.v1.ShipmentRoute.has_traffic_infeasibilities]
     *           field, and in calculating the
     *           [OptimizeToursResponse.total_cost][google.cloud.optimization.v1.OptimizeToursResponse.total_cost]
     *           field.
     *     @type bool $populatePolylines
     *           If true, polylines will be populated in response `ShipmentRoute`s.
     *     @type bool $populateTransitionPolylines
     *           If true, polylines will be populated in response
     *           [ShipmentRoute.transitions][google.cloud.optimization.v1.ShipmentRoute.transitions].
     *           Note that in this case, the polylines will also be populated in the
     *           deprecated `travel_steps`.
     *     @type bool $allowLargeDeadlineDespiteInterruptionRisk
     *           If this is set, then the request can have a deadline
     *           (see https://grpc.io/blog/deadlines) of up to 60 minutes.
     *           Otherwise, the maximum deadline is only 30 minutes.
     *           Note that long-lived requests have a significantly larger (but still small)
     *           risk of interruption.
     *     @type bool $useGeodesicDistances
     *           If true, travel distances will be computed using geodesic distances instead
     *           of Google Maps distances, and travel times will be computed using geodesic
     *           distances with a speed defined by `geodesic_meters_per_second`.
     *     @type float $geodesicMetersPerSecond
     *           When `use_geodesic_distances` is true, this field must be set and defines
     *           the speed applied to compute travel times. Its value must be at least 1.0
     *           meters/seconds.
     *     @type string $label
     *           Label that may be used to identify this request, reported back in the
     *           [OptimizeToursResponse.request_label][google.cloud.optimization.v1.OptimizeToursResponse.request_label].
     *     @type bool $populateTravelStepPolylines
     *           Deprecated: Use [OptimizeToursRequest.populate_transition_polylines][]
     *           instead. If true, polylines will be populated in response
     *           [ShipmentRoute.transitions][google.cloud.optimization.v1.ShipmentRoute.transitions].
     *           Note that in this case, the polylines will also be populated in the
     *           deprecated `travel_steps`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Optimization\V1\OptimizeToursResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function optimizeTours($parent, array $optionalArgs = [])
    {
        $request = new OptimizeToursRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['timeout'])) {
            $request->setTimeout($optionalArgs['timeout']);
        }

        if (isset($optionalArgs['model'])) {
            $request->setModel($optionalArgs['model']);
        }

        if (isset($optionalArgs['solvingMode'])) {
            $request->setSolvingMode($optionalArgs['solvingMode']);
        }

        if (isset($optionalArgs['maxValidationErrors'])) {
            $request->setMaxValidationErrors($optionalArgs['maxValidationErrors']);
        }

        if (isset($optionalArgs['searchMode'])) {
            $request->setSearchMode($optionalArgs['searchMode']);
        }

        if (isset($optionalArgs['injectedFirstSolutionRoutes'])) {
            $request->setInjectedFirstSolutionRoutes($optionalArgs['injectedFirstSolutionRoutes']);
        }

        if (isset($optionalArgs['injectedSolutionConstraint'])) {
            $request->setInjectedSolutionConstraint($optionalArgs['injectedSolutionConstraint']);
        }

        if (isset($optionalArgs['refreshDetailsRoutes'])) {
            $request->setRefreshDetailsRoutes($optionalArgs['refreshDetailsRoutes']);
        }

        if (isset($optionalArgs['interpretInjectedSolutionsUsingLabels'])) {
            $request->setInterpretInjectedSolutionsUsingLabels($optionalArgs['interpretInjectedSolutionsUsingLabels']);
        }

        if (isset($optionalArgs['considerRoadTraffic'])) {
            $request->setConsiderRoadTraffic($optionalArgs['considerRoadTraffic']);
        }

        if (isset($optionalArgs['populatePolylines'])) {
            $request->setPopulatePolylines($optionalArgs['populatePolylines']);
        }

        if (isset($optionalArgs['populateTransitionPolylines'])) {
            $request->setPopulateTransitionPolylines($optionalArgs['populateTransitionPolylines']);
        }

        if (isset($optionalArgs['allowLargeDeadlineDespiteInterruptionRisk'])) {
            $request->setAllowLargeDeadlineDespiteInterruptionRisk($optionalArgs['allowLargeDeadlineDespiteInterruptionRisk']);
        }

        if (isset($optionalArgs['useGeodesicDistances'])) {
            $request->setUseGeodesicDistances($optionalArgs['useGeodesicDistances']);
        }

        if (isset($optionalArgs['geodesicMetersPerSecond'])) {
            $request->setGeodesicMetersPerSecond($optionalArgs['geodesicMetersPerSecond']);
        }

        if (isset($optionalArgs['label'])) {
            $request->setLabel($optionalArgs['label']);
        }

        if (isset($optionalArgs['populateTravelStepPolylines'])) {
            $request->setPopulateTravelStepPolylines($optionalArgs['populateTravelStepPolylines']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('OptimizeTours', OptimizeToursResponse::class, $optionalArgs, $request)->wait();
    }
}
