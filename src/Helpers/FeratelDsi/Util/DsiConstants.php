<?php

namespace App\Helpers\FeratelDsi\Util;

class DsiConstants
{
    // address types for infrastructure (doc p116)
    // - alas, DSI spec says "ExternalAddress" but their responses and examples state otherwhise
    const ADDRESS_INFRASTRUCTURE_EXTERNAL = "InfrastructureExternal";
    const ADDRESS_INFRASTRUCTURE_INTERNAL = "InfrastructureInternal";

    // address types for service providers (doc p46)
    const ADDRESS_OBJECT = "Object";
    const ADDRESS_LANDLORD = "Landlord";
    const ADDRESS_OWNER = "Owner";
    const ADDRESS_KEYHOLDER = "Keyholder";
    const ADDRESS_INSURANCE = "Insurance";

    // address types for events (doc p301)
    const ADDRESS_ORGANIZER = "Organizer";
    const ADDRESS_BOOKING = "Booking";
    const ADDRESS_INFO = "Info";
    const ADDRESS_VENUE = "Venue";

    // connected entry types for events (doc p105)
    const CONNECTED_ETNRIES_EVENT_SERVICEPROVIDER = 'EventServiceProvider';
    const CONNECTED_ENTRIES_EVENT_ADDITIONAL_SERVICE = 'EventAdditionalService';

    // connected entry types shared between events and infrastructures
    const CONNECTED_ENTRIES_EVENT_INFRASTRUCTURE = 'EventInfrastructure';

    // connected entry types for infrastructures (doc p116)
    const CONNECTED_ENTRIES_INFRASTRUCTURE_SERVICEPROVIDER = 'InfrastructureServiceProvider';
    const CONNECTED_ENTRIES_INFRASTRUCTURE_INFRASTRUCTURE = 'InfrastructureInfrastructure';

    // document types for documents
    const DOCUMENT_TYPE_SERVICE_PROVIDER = "ServiceProvider";
    const DOCUMENT_TYPE_SERVICE_PROVIDER_SERVICE = "Service";
    const DOCUMENT_TYPE_SERVICE_PROVIDER_LOGO = "ServiceProviderLogo";
    const DOCUMENT_TYPE_SERVICE_PROVIDER_SERVICE_PRODUCT = 'Product';
    const DOCUMENT_TYPE_EVENT_EVENTHEADER = "EventHeader";
    const DOCUMENT_TYPE_EVENT_EVENTGROUP = "EventGroup";
    const DOCUMENT_TYPE_INFRASTRUCTURE = "Infrastructure";
    const DOCUMENT_TYPE_SHOPITEM = "ShopItem";
    const DOCUMENT_TYPE_SHOPITEM_VARIATION = "ShopItemVariation";

    // document classes for documents
    const DOCUMENT_CLASS_IMAGE = "Image";
    const DOCUMENT_CLASS_DOCUMENT = "Document";

    // filter types for service provider search
    const SERVICE_PROVIDER_FILTER_TYPE_ACCOMMODATION = 'Accommodation';
}
