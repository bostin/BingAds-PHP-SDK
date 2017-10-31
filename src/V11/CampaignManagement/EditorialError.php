<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/editorialerror?view=bingads-11 EditorialError Data Object
     * 
     * @used-by EditorialApiFaultDetail
     */
    final class EditorialError extends BatchError
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $Appealable;

        /**
         * The text that caused the entity to be disapproved.
         * @var string
         */
        public $DisapprovedText;

        /**
         * The element or property of the entity that caused the entity to be disapproved.
         * @var string
         */
        public $Location;

        /**
         * The corresponding country or region for the flagged editorial issue.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A numeric code that identifies the error.
         * @var integer
         */
        public $ReasonCode;
    }

}
