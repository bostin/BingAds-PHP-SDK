<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionidtoentityidassociation?view=bingads-11 AdExtensionIdToEntityIdAssociation Data Object
     * 
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AdExtensionIdToEntityIdAssociation
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

}
