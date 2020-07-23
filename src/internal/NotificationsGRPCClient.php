<?php 
# Code generated by sdkgen
# Generated on 2020-07-21 21:11:20.314667273 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\SalesOrders\V1\internal;

use Vendasta\Vax\GRPCClient;

class NotificationsGRPCClient extends GRPCClient implements NotificationsClientInterface
{
    private $client;

    /**
     * Constructor for NotificationsGRPCClient
     * @param string $hostname hostname of the service to hit
     * @param string $scope
     * @param bool $secure
     * @param float $default_timeout time in milliseconds
     */
    public function __construct(string $hostname, string $scope, bool $secure = true, float $default_timeout = 10000)
    {
        parent::__construct($hostname, $scope, $secure, $default_timeout);
        $this->client = new \SalesOrders\V1\NotificationsClient($hostname, $this->getClientOptions());
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\NotificationsClient::Subscribe
     * @param \Salesorders\V1\SubscribeRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Subscribe(\Salesorders\V1\SubscribeRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            array($this->client, 'Subscribe'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\NotificationsClient::Unsubscribe
     * @param \Salesorders\V1\UnsubscribeRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Unsubscribe(\Salesorders\V1\UnsubscribeRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            array($this->client, 'Unsubscribe'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\NotificationsClient::GetSubscribedLocations
     * @param \Salesorders\V1\GetSubscribedLocationsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetSubscribedLocationsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetSubscribedLocations(\Salesorders\V1\GetSubscribedLocationsRequest $req, array $options = []): \Salesorders\V1\GetSubscribedLocationsResponse
    {
        return $this->doRequest(
            array($this->client, 'GetSubscribedLocations'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\NotificationsClient::GetSubscribers
     * @param \Salesorders\V1\GetSubscribersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetSubscribersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetSubscribers(\Salesorders\V1\GetSubscribersRequest $req, array $options = []): \Salesorders\V1\GetSubscribersResponse
    {
        return $this->doRequest(
            array($this->client, 'GetSubscribers'),
            $req,
            $options
        );
    }
    
}