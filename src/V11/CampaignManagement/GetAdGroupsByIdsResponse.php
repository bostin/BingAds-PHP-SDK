<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad groups within the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadgroupsbyids?view=bingads-11 GetAdGroupsByIds Response Object
     * 
     * @uses AdGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsResponse
    {
        /**
         * The list of ad groups that correspond directly to the ad group identifiers that you specified in the request.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * The list of batch errors that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
