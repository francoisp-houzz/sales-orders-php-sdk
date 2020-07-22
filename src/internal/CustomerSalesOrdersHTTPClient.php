<?php 
# Code generated by sdkgen
# Generated on 2020-07-21 21:11:20.314667273 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\SalesOrders\V1\internal;

use Vendasta\Vax\HTTPClient;

class CustomerSalesOrdersHTTPClient extends HTTPClient implements CustomerSalesOrdersClientInterface
{
    /**
     * CustomerSalesOrdersHTTPClient constructor.
     * @param string $host
     * @param string $scope
     * @param bool $secure
     * @param float $default_timeout
     */
    public function __construct(string $host, string $scope, bool $secure = true, float $default_timeout = 10000)
    {
        parent::__construct($host, $scope, $secure, $default_timeout);
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::CreateSalesOrder
     * @param \Salesorders\V1\CustomerCreateSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerCreateSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateSalesOrder(\Salesorders\V1\CustomerCreateSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerCreateSalesOrderResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/CreateSalesOrder",
            $req,
            "\Salesorders\V1\CustomerCreateSalesOrderResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::ApproveSalesOrder
     * @param \Salesorders\V1\CustomerApproveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerApproveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ApproveSalesOrder(\Salesorders\V1\CustomerApproveSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerApproveSalesOrderResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/ApproveSalesOrder",
            $req,
            "\Salesorders\V1\CustomerApproveSalesOrderResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::UpdateAnswers
     * @param \Salesorders\V1\UpdateAnswersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\UpdateAnswersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateAnswers(\Salesorders\V1\UpdateAnswersRequest $req, array $options = []): \Salesorders\V1\UpdateAnswersResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/UpdateAnswers",
            $req,
            "\Salesorders\V1\UpdateAnswersResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::GetSalesOrder
     * @param \Salesorders\V1\GetSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetSalesOrder(\Salesorders\V1\GetSalesOrderRequest $req, array $options = []): \Salesorders\V1\GetSalesOrderResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/GetSalesOrder",
            $req,
            "\Salesorders\V1\GetSalesOrderResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::ListSalesOrder
     * @param \Salesorders\V1\ListCustomerSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ListSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListSalesOrder(\Salesorders\V1\ListCustomerSalesOrderRequest $req, array $options = []): \Salesorders\V1\ListSalesOrderResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/ListSalesOrder",
            $req,
            "\Salesorders\V1\ListSalesOrderResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::GetUsers
     * @param \Salesorders\V1\GetUsersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetUsersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetUsers(\Salesorders\V1\GetUsersRequest $req, array $options = []): \Salesorders\V1\GetUsersResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/GetUsers",
            $req,
            "\Salesorders\V1\GetUsersResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::InitiateOrderExport
     * @param \Salesorders\V1\InitiateOrderExportRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\InitiateOrderExportResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function InitiateOrderExport(\Salesorders\V1\InitiateOrderExportRequest $req, array $options = []): \Salesorders\V1\InitiateOrderExportResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/InitiateOrderExport",
            $req,
            "\Salesorders\V1\InitiateOrderExportResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \SalesOrders\V1\CustomerSalesOrdersClient::CreateForPartnerApproval
     * @param \Salesorders\V1\CreateForPartnerApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateForPartnerApprovalResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateForPartnerApproval(\Salesorders\V1\CreateForPartnerApprovalRequest $req, array $options = []): \Salesorders\V1\CreateForPartnerApprovalResponse
    {
        return $this->doRequest(
            "/salesorders.v1.CustomerSalesOrders/CreateForPartnerApproval",
            $req,
            "\Salesorders\V1\CreateForPartnerApprovalResponse",
            $options
        );
    }
    
}
