<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified keywords.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyids?view=bingads-11 GetKeywordsByIds Response Object
     * 
     * @uses Keyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsResponse
    {
        /**
         * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request.
         * @var Keyword[]
         */
        public $Keywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
