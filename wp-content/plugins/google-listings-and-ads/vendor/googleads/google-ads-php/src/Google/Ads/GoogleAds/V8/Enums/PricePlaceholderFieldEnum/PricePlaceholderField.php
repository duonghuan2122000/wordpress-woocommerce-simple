<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/price_placeholder_field.proto

namespace Google\Ads\GoogleAds\V8\Enums\PricePlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Price placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.PricePlaceholderFieldEnum.PricePlaceholderField</code>
 */
class PricePlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. The type of your price feed. Must match one of the
     * predefined price feed type exactly.
     *
     * Generated from protobuf enum <code>TYPE = 2;</code>
     */
    const TYPE = 2;
    /**
     * Data Type: STRING. The qualifier of each price. Must match one of the
     * predefined price qualifiers exactly.
     *
     * Generated from protobuf enum <code>PRICE_QUALIFIER = 3;</code>
     */
    const PRICE_QUALIFIER = 3;
    /**
     * Data Type: URL. Tracking template for the price feed when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>TRACKING_TEMPLATE = 4;</code>
     */
    const TRACKING_TEMPLATE = 4;
    /**
     * Data Type: STRING. Language of the price feed. Must match one of the
     * available available locale codes exactly.
     *
     * Generated from protobuf enum <code>LANGUAGE = 5;</code>
     */
    const LANGUAGE = 5;
    /**
     * Data Type: STRING. Final URL suffix for the price feed when using
     * parallel tracking.
     *
     * Generated from protobuf enum <code>FINAL_URL_SUFFIX = 6;</code>
     */
    const FINAL_URL_SUFFIX = 6;
    /**
     * Data Type: STRING. The header of item 1 of the table.
     *
     * Generated from protobuf enum <code>ITEM_1_HEADER = 100;</code>
     */
    const ITEM_1_HEADER = 100;
    /**
     * Data Type: STRING. The description of item 1 of the table.
     *
     * Generated from protobuf enum <code>ITEM_1_DESCRIPTION = 101;</code>
     */
    const ITEM_1_DESCRIPTION = 101;
    /**
     * Data Type: MONEY. The price (money with currency) of item 1 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_1_PRICE = 102;</code>
     */
    const ITEM_1_PRICE = 102;
    /**
     * Data Type: STRING. The price unit of item 1 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_1_UNIT = 103;</code>
     */
    const ITEM_1_UNIT = 103;
    /**
     * Data Type: URL_LIST. The final URLs of item 1 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_1_FINAL_URLS = 104;</code>
     */
    const ITEM_1_FINAL_URLS = 104;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 1 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_1_FINAL_MOBILE_URLS = 105;</code>
     */
    const ITEM_1_FINAL_MOBILE_URLS = 105;
    /**
     * Data Type: STRING. The header of item 2 of the table.
     *
     * Generated from protobuf enum <code>ITEM_2_HEADER = 200;</code>
     */
    const ITEM_2_HEADER = 200;
    /**
     * Data Type: STRING. The description of item 2 of the table.
     *
     * Generated from protobuf enum <code>ITEM_2_DESCRIPTION = 201;</code>
     */
    const ITEM_2_DESCRIPTION = 201;
    /**
     * Data Type: MONEY. The price (money with currency) of item 2 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_2_PRICE = 202;</code>
     */
    const ITEM_2_PRICE = 202;
    /**
     * Data Type: STRING. The price unit of item 2 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_2_UNIT = 203;</code>
     */
    const ITEM_2_UNIT = 203;
    /**
     * Data Type: URL_LIST. The final URLs of item 2 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_2_FINAL_URLS = 204;</code>
     */
    const ITEM_2_FINAL_URLS = 204;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 2 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_2_FINAL_MOBILE_URLS = 205;</code>
     */
    const ITEM_2_FINAL_MOBILE_URLS = 205;
    /**
     * Data Type: STRING. The header of item 3 of the table.
     *
     * Generated from protobuf enum <code>ITEM_3_HEADER = 300;</code>
     */
    const ITEM_3_HEADER = 300;
    /**
     * Data Type: STRING. The description of item 3 of the table.
     *
     * Generated from protobuf enum <code>ITEM_3_DESCRIPTION = 301;</code>
     */
    const ITEM_3_DESCRIPTION = 301;
    /**
     * Data Type: MONEY. The price (money with currency) of item 3 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_3_PRICE = 302;</code>
     */
    const ITEM_3_PRICE = 302;
    /**
     * Data Type: STRING. The price unit of item 3 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_3_UNIT = 303;</code>
     */
    const ITEM_3_UNIT = 303;
    /**
     * Data Type: URL_LIST. The final URLs of item 3 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_3_FINAL_URLS = 304;</code>
     */
    const ITEM_3_FINAL_URLS = 304;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 3 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_3_FINAL_MOBILE_URLS = 305;</code>
     */
    const ITEM_3_FINAL_MOBILE_URLS = 305;
    /**
     * Data Type: STRING. The header of item 4 of the table.
     *
     * Generated from protobuf enum <code>ITEM_4_HEADER = 400;</code>
     */
    const ITEM_4_HEADER = 400;
    /**
     * Data Type: STRING. The description of item 4 of the table.
     *
     * Generated from protobuf enum <code>ITEM_4_DESCRIPTION = 401;</code>
     */
    const ITEM_4_DESCRIPTION = 401;
    /**
     * Data Type: MONEY. The price (money with currency) of item 4 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_4_PRICE = 402;</code>
     */
    const ITEM_4_PRICE = 402;
    /**
     * Data Type: STRING. The price unit of item 4 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_4_UNIT = 403;</code>
     */
    const ITEM_4_UNIT = 403;
    /**
     * Data Type: URL_LIST. The final URLs of item 4 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_4_FINAL_URLS = 404;</code>
     */
    const ITEM_4_FINAL_URLS = 404;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 4 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_4_FINAL_MOBILE_URLS = 405;</code>
     */
    const ITEM_4_FINAL_MOBILE_URLS = 405;
    /**
     * Data Type: STRING. The header of item 5 of the table.
     *
     * Generated from protobuf enum <code>ITEM_5_HEADER = 500;</code>
     */
    const ITEM_5_HEADER = 500;
    /**
     * Data Type: STRING. The description of item 5 of the table.
     *
     * Generated from protobuf enum <code>ITEM_5_DESCRIPTION = 501;</code>
     */
    const ITEM_5_DESCRIPTION = 501;
    /**
     * Data Type: MONEY. The price (money with currency) of item 5 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_5_PRICE = 502;</code>
     */
    const ITEM_5_PRICE = 502;
    /**
     * Data Type: STRING. The price unit of item 5 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_5_UNIT = 503;</code>
     */
    const ITEM_5_UNIT = 503;
    /**
     * Data Type: URL_LIST. The final URLs of item 5 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_5_FINAL_URLS = 504;</code>
     */
    const ITEM_5_FINAL_URLS = 504;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 5 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_5_FINAL_MOBILE_URLS = 505;</code>
     */
    const ITEM_5_FINAL_MOBILE_URLS = 505;
    /**
     * Data Type: STRING. The header of item 6 of the table.
     *
     * Generated from protobuf enum <code>ITEM_6_HEADER = 600;</code>
     */
    const ITEM_6_HEADER = 600;
    /**
     * Data Type: STRING. The description of item 6 of the table.
     *
     * Generated from protobuf enum <code>ITEM_6_DESCRIPTION = 601;</code>
     */
    const ITEM_6_DESCRIPTION = 601;
    /**
     * Data Type: MONEY. The price (money with currency) of item 6 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_6_PRICE = 602;</code>
     */
    const ITEM_6_PRICE = 602;
    /**
     * Data Type: STRING. The price unit of item 6 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_6_UNIT = 603;</code>
     */
    const ITEM_6_UNIT = 603;
    /**
     * Data Type: URL_LIST. The final URLs of item 6 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_6_FINAL_URLS = 604;</code>
     */
    const ITEM_6_FINAL_URLS = 604;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 6 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_6_FINAL_MOBILE_URLS = 605;</code>
     */
    const ITEM_6_FINAL_MOBILE_URLS = 605;
    /**
     * Data Type: STRING. The header of item 7 of the table.
     *
     * Generated from protobuf enum <code>ITEM_7_HEADER = 700;</code>
     */
    const ITEM_7_HEADER = 700;
    /**
     * Data Type: STRING. The description of item 7 of the table.
     *
     * Generated from protobuf enum <code>ITEM_7_DESCRIPTION = 701;</code>
     */
    const ITEM_7_DESCRIPTION = 701;
    /**
     * Data Type: MONEY. The price (money with currency) of item 7 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_7_PRICE = 702;</code>
     */
    const ITEM_7_PRICE = 702;
    /**
     * Data Type: STRING. The price unit of item 7 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_7_UNIT = 703;</code>
     */
    const ITEM_7_UNIT = 703;
    /**
     * Data Type: URL_LIST. The final URLs of item 7 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_7_FINAL_URLS = 704;</code>
     */
    const ITEM_7_FINAL_URLS = 704;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 7 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_7_FINAL_MOBILE_URLS = 705;</code>
     */
    const ITEM_7_FINAL_MOBILE_URLS = 705;
    /**
     * Data Type: STRING. The header of item 8 of the table.
     *
     * Generated from protobuf enum <code>ITEM_8_HEADER = 800;</code>
     */
    const ITEM_8_HEADER = 800;
    /**
     * Data Type: STRING. The description of item 8 of the table.
     *
     * Generated from protobuf enum <code>ITEM_8_DESCRIPTION = 801;</code>
     */
    const ITEM_8_DESCRIPTION = 801;
    /**
     * Data Type: MONEY. The price (money with currency) of item 8 of the table,
     * e.g., 30 USD. The currency must match one of the available currencies.
     *
     * Generated from protobuf enum <code>ITEM_8_PRICE = 802;</code>
     */
    const ITEM_8_PRICE = 802;
    /**
     * Data Type: STRING. The price unit of item 8 of the table. Must match one
     * of the predefined price units.
     *
     * Generated from protobuf enum <code>ITEM_8_UNIT = 803;</code>
     */
    const ITEM_8_UNIT = 803;
    /**
     * Data Type: URL_LIST. The final URLs of item 8 of the table when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_8_FINAL_URLS = 804;</code>
     */
    const ITEM_8_FINAL_URLS = 804;
    /**
     * Data Type: URL_LIST. The final mobile URLs of item 8 of the table when
     * using Upgraded URLs.
     *
     * Generated from protobuf enum <code>ITEM_8_FINAL_MOBILE_URLS = 805;</code>
     */
    const ITEM_8_FINAL_MOBILE_URLS = 805;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TYPE => 'TYPE',
        self::PRICE_QUALIFIER => 'PRICE_QUALIFIER',
        self::TRACKING_TEMPLATE => 'TRACKING_TEMPLATE',
        self::LANGUAGE => 'LANGUAGE',
        self::FINAL_URL_SUFFIX => 'FINAL_URL_SUFFIX',
        self::ITEM_1_HEADER => 'ITEM_1_HEADER',
        self::ITEM_1_DESCRIPTION => 'ITEM_1_DESCRIPTION',
        self::ITEM_1_PRICE => 'ITEM_1_PRICE',
        self::ITEM_1_UNIT => 'ITEM_1_UNIT',
        self::ITEM_1_FINAL_URLS => 'ITEM_1_FINAL_URLS',
        self::ITEM_1_FINAL_MOBILE_URLS => 'ITEM_1_FINAL_MOBILE_URLS',
        self::ITEM_2_HEADER => 'ITEM_2_HEADER',
        self::ITEM_2_DESCRIPTION => 'ITEM_2_DESCRIPTION',
        self::ITEM_2_PRICE => 'ITEM_2_PRICE',
        self::ITEM_2_UNIT => 'ITEM_2_UNIT',
        self::ITEM_2_FINAL_URLS => 'ITEM_2_FINAL_URLS',
        self::ITEM_2_FINAL_MOBILE_URLS => 'ITEM_2_FINAL_MOBILE_URLS',
        self::ITEM_3_HEADER => 'ITEM_3_HEADER',
        self::ITEM_3_DESCRIPTION => 'ITEM_3_DESCRIPTION',
        self::ITEM_3_PRICE => 'ITEM_3_PRICE',
        self::ITEM_3_UNIT => 'ITEM_3_UNIT',
        self::ITEM_3_FINAL_URLS => 'ITEM_3_FINAL_URLS',
        self::ITEM_3_FINAL_MOBILE_URLS => 'ITEM_3_FINAL_MOBILE_URLS',
        self::ITEM_4_HEADER => 'ITEM_4_HEADER',
        self::ITEM_4_DESCRIPTION => 'ITEM_4_DESCRIPTION',
        self::ITEM_4_PRICE => 'ITEM_4_PRICE',
        self::ITEM_4_UNIT => 'ITEM_4_UNIT',
        self::ITEM_4_FINAL_URLS => 'ITEM_4_FINAL_URLS',
        self::ITEM_4_FINAL_MOBILE_URLS => 'ITEM_4_FINAL_MOBILE_URLS',
        self::ITEM_5_HEADER => 'ITEM_5_HEADER',
        self::ITEM_5_DESCRIPTION => 'ITEM_5_DESCRIPTION',
        self::ITEM_5_PRICE => 'ITEM_5_PRICE',
        self::ITEM_5_UNIT => 'ITEM_5_UNIT',
        self::ITEM_5_FINAL_URLS => 'ITEM_5_FINAL_URLS',
        self::ITEM_5_FINAL_MOBILE_URLS => 'ITEM_5_FINAL_MOBILE_URLS',
        self::ITEM_6_HEADER => 'ITEM_6_HEADER',
        self::ITEM_6_DESCRIPTION => 'ITEM_6_DESCRIPTION',
        self::ITEM_6_PRICE => 'ITEM_6_PRICE',
        self::ITEM_6_UNIT => 'ITEM_6_UNIT',
        self::ITEM_6_FINAL_URLS => 'ITEM_6_FINAL_URLS',
        self::ITEM_6_FINAL_MOBILE_URLS => 'ITEM_6_FINAL_MOBILE_URLS',
        self::ITEM_7_HEADER => 'ITEM_7_HEADER',
        self::ITEM_7_DESCRIPTION => 'ITEM_7_DESCRIPTION',
        self::ITEM_7_PRICE => 'ITEM_7_PRICE',
        self::ITEM_7_UNIT => 'ITEM_7_UNIT',
        self::ITEM_7_FINAL_URLS => 'ITEM_7_FINAL_URLS',
        self::ITEM_7_FINAL_MOBILE_URLS => 'ITEM_7_FINAL_MOBILE_URLS',
        self::ITEM_8_HEADER => 'ITEM_8_HEADER',
        self::ITEM_8_DESCRIPTION => 'ITEM_8_DESCRIPTION',
        self::ITEM_8_PRICE => 'ITEM_8_PRICE',
        self::ITEM_8_UNIT => 'ITEM_8_UNIT',
        self::ITEM_8_FINAL_URLS => 'ITEM_8_FINAL_URLS',
        self::ITEM_8_FINAL_MOBILE_URLS => 'ITEM_8_FINAL_MOBILE_URLS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PricePlaceholderField::class, \Google\Ads\GoogleAds\V8\Enums\PricePlaceholderFieldEnum_PricePlaceholderField::class);

