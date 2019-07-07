<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a customer, providing access to it's
 * attributes
 *
 * @property-read $address_line1
 * @property-read $address_line2
 * @property-read $address_line3
 * @property-read $city
 * @property-read $company_name
 * @property-read $country_code
 * @property-read $created_at
 * @property-read $email
 * @property-read $family_name
 * @property-read $given_name
 * @property-read $id
 * @property-read $language
 * @property-read $metadata
 * @property-read $postal_code
 * @property-read $region
 * @property-read $swedish_identity_number
 */
class Customer extends BaseResource
{
    protected $model_name = "Customer";

    /**
     * The first line of the customer's address.
     */
    protected $address_line1;

    /**
     * The second line of the customer's address.
     */
    protected $address_line2;

    /**
     * The third line of the customer's address.
     */
    protected $address_line3;

    /**
     * The city of the customer's address.
     */
    protected $city;

    /**
     * Customer's company name. Required unless a `given_name` and `family_name`
     * are provided.
     */
    protected $company_name;

    /**
     * [ISO
     * 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     * alpha-2 code.
     */
    protected $country_code;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * Customer's email address.
     */
    protected $email;

    /**
     * Customer's surname. Required unless a `company_name` is provided.
     */
    protected $family_name;

    /**
     * Customer's first name. Required unless a `company_name` is provided.
     */
    protected $given_name;

    /**
     * Unique identifier, beginning with "CU".
     */
    protected $id;

    /**
     * [ISO 639-1](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code.
     * Used as the language for notification emails sent by GoCardless if your
     * organisation does not send its own (see [compliance
     * requirements](#appendix-compliance-requirements)). Currently only "en",
     * "fr", "de", "pt", "es", "it", "nl", "sv" are supported. If this is not
     * provided, the language will be chosen based on the `country_code` (if
     * supplied) or default to "en".
     */
    protected $language;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * The customer's postal code.
     */
    protected $postal_code;

    /**
     * The customer's address region, county or department.
     */
    protected $region;

    /**
     * For Swedish customers only. The civic/company number (personnummer,
     * samordningsnummer, or organisationsnummer) of the customer. Must be
     * supplied if the customer's bank account is denominated in Swedish krona
     * (SEK). This field cannot be changed once it has been set. <p
     * class="beta-notice"><strong>Beta</strong>: this field is only used for
     * Autogiro, which is currently in beta.</p>
     */
    protected $swedish_identity_number;

}
