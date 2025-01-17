<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the VerifiedTrackingSetting Data Object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/verifiedtrackingsetting?view=bingads-13 VerifiedTrackingSetting Data Object
     * 
     * @uses KeyValuePairOfstringstring
     */
    final class VerifiedTrackingSetting extends Setting
    {
        /**
         * Reserved.
         * @var KeyValuePairOfstringstring[][]
         */
        public $Details;
    }

}
