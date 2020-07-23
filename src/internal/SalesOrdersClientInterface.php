<?php 
# Code generated by sdkgen
# Generated on 2020-07-23 21:31:53.688983585 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\SalesOrders\V1\internal;

interface SalesOrdersClientInterface
{ 
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CreateSalesOrder
     * @param \Salesorders\V1\CreateSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateSalesOrder(\Salesorders\V1\CreateSalesOrderRequest $req, array $options = []): \Salesorders\V1\CreateSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CustomerCreateSalesOrder
     * @param \Salesorders\V1\CustomerCreateSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerCreateSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CustomerCreateSalesOrder(\Salesorders\V1\CustomerCreateSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerCreateSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::GetSalesOrder
     * @param \Salesorders\V1\GetSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetSalesOrder(\Salesorders\V1\GetSalesOrderRequest $req, array $options = []): \Salesorders\V1\GetSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ListSalesOrder
     * @param \Salesorders\V1\ListSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ListSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListSalesOrder(\Salesorders\V1\ListSalesOrderRequest $req, array $options = []): \Salesorders\V1\ListSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ApproveSalesOrder
     * @param \Salesorders\V1\ApproveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ApproveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ApproveSalesOrder(\Salesorders\V1\ApproveSalesOrderRequest $req, array $options = []): \Salesorders\V1\ApproveSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CustomerApproveSalesOrder
     * @param \Salesorders\V1\CustomerApproveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerApproveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CustomerApproveSalesOrder(\Salesorders\V1\CustomerApproveSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerApproveSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::DeclineSalesOrder
     * @param \Salesorders\V1\DeclineSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\DeclineSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeclineSalesOrder(\Salesorders\V1\DeclineSalesOrderRequest $req, array $options = []): \Salesorders\V1\DeclineSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ActivateProducts
     * @param \Salesorders\V1\ActivateProductsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ActivateProductsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ActivateProducts(\Salesorders\V1\ActivateProductsRequest $req, array $options = []): \Salesorders\V1\ActivateProductsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ScheduleActivation
     * @param \Salesorders\V1\ScheduleActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ScheduleActivation(\Salesorders\V1\ScheduleActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ArchiveSalesOrder
     * @param \Salesorders\V1\ArchiveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ArchiveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ArchiveSalesOrder(\Salesorders\V1\ArchiveSalesOrderRequest $req, array $options = []): \Salesorders\V1\ArchiveSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CheckSalesOrderExists
     * @param \Salesorders\V1\CheckSalesOrderExistsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CheckSalesOrderExistsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CheckSalesOrderExists(\Salesorders\V1\CheckSalesOrderExistsRequest $req, array $options = []): \Salesorders\V1\CheckSalesOrderExistsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::SendForCustomerApproval
     * @param \Salesorders\V1\SendForCustomerApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SendForCustomerApprovalResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SendForCustomerApproval(\Salesorders\V1\SendForCustomerApprovalRequest $req, array $options = []): \Salesorders\V1\SendForCustomerApprovalResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::SendExistingOrderToCustomerForApproval
     * @param \Salesorders\V1\SendExistingOrderToCustomerForApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SendExistingOrderToCustomerForApproval(\Salesorders\V1\SendExistingOrderToCustomerForApprovalRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::GetUsers
     * @param \Salesorders\V1\GetUsersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetUsersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetUsers(\Salesorders\V1\GetUsersRequest $req, array $options = []): \Salesorders\V1\GetUsersResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::GetConfig
     * @param \Salesorders\V1\GetConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetConfigResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetConfig(\Salesorders\V1\GetConfigRequest $req, array $options = []): \Salesorders\V1\GetConfigResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateConfig
     * @param \Salesorders\V1\UpdateConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateConfig(\Salesorders\V1\UpdateConfigRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::DeleteConfig
     * @param \Salesorders\V1\DeleteConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeleteConfig(\Salesorders\V1\DeleteConfigRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateAnswers
     * @param \Salesorders\V1\UpdateAnswersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\UpdateAnswersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateAnswers(\Salesorders\V1\UpdateAnswersRequest $req, array $options = []): \Salesorders\V1\UpdateAnswersResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateTags
     * @param \Salesorders\V1\UpdateTagsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\UpdateTagsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateTags(\Salesorders\V1\UpdateTagsRequest $req, array $options = []): \Salesorders\V1\UpdateTagsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateNotes
     * @param \Salesorders\V1\UpdateNotesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateNotes(\Salesorders\V1\UpdateNotesRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateRequestedActivation
     * @param \Salesorders\V1\UpdateRequestedActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateRequestedActivation(\Salesorders\V1\UpdateRequestedActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateContractDuration
     * @param \Salesorders\V1\UpdateContractDurationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateContractDuration(\Salesorders\V1\UpdateContractDurationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateCurrentRevenue
     * @param \Salesorders\V1\UpdateCurrentRevenueRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateCurrentRevenue(\Salesorders\V1\UpdateCurrentRevenueRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateLineItems
     * @param \Salesorders\V1\UpdateLineItemsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateLineItems(\Salesorders\V1\UpdateLineItemsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ListTags
     * @param \Salesorders\V1\ListTagsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ListTagsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListTags(\Salesorders\V1\ListTagsRequest $req, array $options = []): \Salesorders\V1\ListTagsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CreateDraftSalesOrder
     * @param \Salesorders\V1\CreateDraftSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateDraftSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateDraftSalesOrder(\Salesorders\V1\CreateDraftSalesOrderRequest $req, array $options = []): \Salesorders\V1\CreateDraftSalesOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::SubmitDraftSalesOrder
     * @param \Salesorders\V1\SubmitDraftRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SubmitDraftResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SubmitDraftSalesOrder(\Salesorders\V1\SubmitDraftRequest $req, array $options = []): \Salesorders\V1\SubmitDraftResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::SubmitDraftForCustomerApproval
     * @param \Salesorders\V1\SubmitDraftForApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SubmitDraftForApprovalResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SubmitDraftForCustomerApproval(\Salesorders\V1\SubmitDraftForApprovalRequest $req, array $options = []): \Salesorders\V1\SubmitDraftForApprovalResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::IgnoreProductActivationError
     * @param \Salesorders\V1\IgnoreProductActivationErrorRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function IgnoreProductActivationError(\Salesorders\V1\IgnoreProductActivationErrorRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::IgnoreAllProductActivationErrors
     * @param \Salesorders\V1\IgnoreAllProductActivationErrorsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function IgnoreAllProductActivationErrors(\Salesorders\V1\IgnoreAllProductActivationErrorsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::RequestCancellation
     * @param \Salesorders\V1\RequestCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function RequestCancellation(\Salesorders\V1\RequestCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::DeclineCancellation
     * @param \Salesorders\V1\DeclineCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeclineCancellation(\Salesorders\V1\DeclineCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::PreviewOrderActivations
     * @param \Salesorders\V1\PreviewOrderActivationsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\PreviewOrderActivationsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function PreviewOrderActivations(\Salesorders\V1\PreviewOrderActivationsRequest $req, array $options = []): \Salesorders\V1\PreviewOrderActivationsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ApproveCancellation
     * @param \Salesorders\V1\ApproveCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ApproveCancellation(\Salesorders\V1\ApproveCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::ConvertToDraft
     * @param \Salesorders\V1\ConvertToDraftRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ConvertToDraft(\Salesorders\V1\ConvertToDraftRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::GetStatusCounts
     * @param \Salesorders\V1\GetStatusCountsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetStatusCountsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetStatusCounts(\Salesorders\V1\GetStatusCountsRequest $req, array $options = []): \Salesorders\V1\GetStatusCountsResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CreateInvoice
     * @param \Salesorders\V1\CreateInvoiceRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateInvoiceResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateInvoice(\Salesorders\V1\CreateInvoiceRequest $req, array $options = []): \Salesorders\V1\CreateInvoiceResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::CreateAndActivateOrder
     * @param \Salesorders\V1\CreateAndActivateOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateAndActivateOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateAndActivateOrder(\Salesorders\V1\CreateAndActivateOrderRequest $req, array $options = []): \Salesorders\V1\CreateAndActivateOrderResponse;
    
    /**
     * Auth wrapper for \SalesOrders\V1\SalesOrdersClient::UpdateCustomerNotes
     * @param \Salesorders\V1\UpdateCustomerNotesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateCustomerNotes(\Salesorders\V1\UpdateCustomerNotesRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
}
