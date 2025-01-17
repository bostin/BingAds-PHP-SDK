<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the product partition  performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productpartitionunitperformancereportfilter?view=bingads-13 ProductPartitionUnitPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeviceTypeReportFilter
     * @uses LanguageReportFilter
     * @used-by ProductPartitionUnitPerformanceReportRequest
     */
    final class ProductPartitionUnitPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the ad status.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
