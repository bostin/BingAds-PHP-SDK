<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more campaign criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatecampaigncriterions?view=bingads-11 UpdateCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsResponse
    {
        /**
         * Indicates whether or not the campaign where you updated target criterions previously shared target criterions with another campaign or ad group.
         * @var boolean
         */
        public $IsMigrated;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
