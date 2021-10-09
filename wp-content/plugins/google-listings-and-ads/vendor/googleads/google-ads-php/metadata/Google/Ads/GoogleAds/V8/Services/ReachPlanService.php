<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/reach_plan_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class ReachPlanService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v8/enums/interaction_type.protogoogle.ads.googleads.v8.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
!com.google.ads.googleads.v8.enumsBInteractionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/app_payment_model_type.protogoogle.ads.googleads.v8.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
!com.google.ads.googleads.v8.enumsBAppPaymentModelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/listing_group_type.protogoogle.ads.googleads.v8.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
!com.google.ads.googleads.v8.enumsBListingGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
?google/ads/googleads/v8/enums/product_channel_exclusivity.protogoogle.ads.googleads.v8.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
!com.google.ads.googleads.v8.enumsBProductChannelExclusivityProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
2google/ads/googleads/v8/enums/age_range_type.protogoogle.ads.googleads.v8.enums"�
AgeRangeTypeEnum"�
AgeRangeType
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_25_34��
AGE_RANGE_35_44��
AGE_RANGE_45_54��
AGE_RANGE_55_64��
AGE_RANGE_65_UP��
AGE_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v8.enumsBAgeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/enums/product_condition.protogoogle.ads.googleads.v8.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
!com.google.ads.googleads.v8.enumsBProductConditionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
*google/ads/googleads/v8/enums/device.protogoogle.ads.googleads.v8.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v8.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
/google/ads/googleads/v8/enums/gender_type.protogoogle.ads.googleads.v8.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
!com.google.ads.googleads.v8.enumsBGenderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
/google/ads/googleads/v8/enums/day_of_week.protogoogle.ads.googleads.v8.enums"�
DayOfWeekEnum"�
	DayOfWeek
UNSPECIFIED 
UNKNOWN

MONDAY
TUESDAY
	WEDNESDAY
THURSDAY

FRIDAY
SATURDAY

SUNDAYB�
!com.google.ads.googleads.v8.enumsBDayOfWeekProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
?google/ads/googleads/v8/enums/location_group_radius_units.protogoogle.ads.googleads.v8.enums"�
LocationGroupRadiusUnitsEnum"`
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILES
MILLI_MILESB�
!com.google.ads.googleads.v8.enumsBLocationGroupRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/content_label_type.protogoogle.ads.googleads.v8.enums"�
ContentLabelTypeEnum"�
ContentLabelType
UNSPECIFIED 
UNKNOWN
SEXUALLY_SUGGESTIVE
BELOW_THE_FOLD
PARKED_DOMAIN
JUVENILE
	PROFANITY
TRAGEDY	
VIDEO	
VIDEO_RATING_DV_G

VIDEO_RATING_DV_PG
VIDEO_RATING_DV_T
VIDEO_RATING_DV_MA
VIDEO_NOT_YET_RATED
EMBEDDED_VIDEO
LIVE_STREAMING_VIDEO
SOCIAL_ISSUESB�
!com.google.ads.googleads.v8.enumsBContentLabelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
=google/ads/googleads/v8/enums/hotel_date_selection_type.protogoogle.ads.googleads.v8.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
!com.google.ads.googleads.v8.enumsBHotelDateSelectionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/keyword_match_type.protogoogle.ads.googleads.v8.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v8.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/enums/income_range_type.protogoogle.ads.googleads.v8.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v8.enumsBIncomeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/preferred_content_type.protogoogle.ads.googleads.v8.enums"j
PreferredContentTypeEnum"N
PreferredContentType
UNSPECIFIED 
UNKNOWN
YOUTUBE_TOP_CONTENT�B�
!com.google.ads.googleads.v8.enumsBPreferredContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
2google/ads/googleads/v8/enums/minute_of_hour.protogoogle.ads.googleads.v8.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
!com.google.ads.googleads.v8.enumsBMinuteOfHourProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/parental_status_type.protogoogle.ads.googleads.v8.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
!com.google.ads.googleads.v8.enumsBParentalStatusTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Bgoogle/ads/googleads/v8/enums/product_bidding_category_level.protogoogle.ads.googleads.v8.enums"�
ProductBiddingCategoryLevelEnum"w
ProductBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
!com.google.ads.googleads.v8.enumsB ProductBiddingCategoryLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
3google/ads/googleads/v8/enums/product_channel.protogoogle.ads.googleads.v8.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
!com.google.ads.googleads.v8.enumsBProductChannelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Bgoogle/ads/googleads/v8/enums/product_custom_attribute_index.protogoogle.ads.googleads.v8.enums"�
ProductCustomAttributeIndexEnum"w
ProductCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2	

INDEX3


INDEX4B�
!com.google.ads.googleads.v8.enumsB ProductCustomAttributeIndexProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/product_type_level.protogoogle.ads.googleads.v8.enums"�
ProductTypeLevelEnum"l
ProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3	

LEVEL4


LEVEL5B�
!com.google.ads.googleads.v8.enumsBProductTypeLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/proximity_radius_units.protogoogle.ads.googleads.v8.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
!com.google.ads.googleads.v8.enumsBProximityRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
>google/ads/googleads/v8/enums/webpage_condition_operator.protogoogle.ads.googleads.v8.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
!com.google.ads.googleads.v8.enumsBWebpageConditionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
=google/ads/googleads/v8/enums/webpage_condition_operand.protogoogle.ads.googleads.v8.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
!com.google.ads.googleads.v8.enumsBWebpageConditionOperandProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�H
-google/ads/googleads/v8/common/criteria.protogoogle.ads.googleads.v8.common:google/ads/googleads/v8/enums/app_payment_model_type.proto6google/ads/googleads/v8/enums/content_label_type.proto/google/ads/googleads/v8/enums/day_of_week.proto*google/ads/googleads/v8/enums/device.proto/google/ads/googleads/v8/enums/gender_type.proto=google/ads/googleads/v8/enums/hotel_date_selection_type.proto5google/ads/googleads/v8/enums/income_range_type.proto4google/ads/googleads/v8/enums/interaction_type.proto6google/ads/googleads/v8/enums/keyword_match_type.proto6google/ads/googleads/v8/enums/listing_group_type.proto?google/ads/googleads/v8/enums/location_group_radius_units.proto2google/ads/googleads/v8/enums/minute_of_hour.proto8google/ads/googleads/v8/enums/parental_status_type.proto:google/ads/googleads/v8/enums/preferred_content_type.protoBgoogle/ads/googleads/v8/enums/product_bidding_category_level.proto3google/ads/googleads/v8/enums/product_channel.proto?google/ads/googleads/v8/enums/product_channel_exclusivity.proto5google/ads/googleads/v8/enums/product_condition.protoBgoogle/ads/googleads/v8/enums/product_custom_attribute_index.proto6google/ads/googleads/v8/enums/product_type_level.proto:google/ads/googleads/v8/enums/proximity_radius_units.proto=google/ads/googleads/v8/enums/webpage_condition_operand.proto>google/ads/googleads/v8/enums/webpage_condition_operator.protogoogle/api/annotations.proto"�
KeywordInfo
text (	H �X

match_type (2D.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchTypeB
_text")
PlacementInfo
url (	H �B
_url"c
MobileAppCategoryInfo)
mobile_app_category_constant (	H �B
_mobile_app_category_constant"S
MobileApplicationInfo
app_id (	H �
name (	H�B	
_app_idB
_name"H
LocationInfo 
geo_target_constant (	H �B
_geo_target_constant"L

DeviceInfo>
type (20.google.ads.googleads.v8.enums.DeviceEnum.Device"r
PreferredContentInfoZ
type (2L.google.ads.googleads.v8.enums.PreferredContentTypeEnum.PreferredContentType"�
ListingGroupInfoR
type (2D.google.ads.googleads.v8.enums.ListingGroupTypeEnum.ListingGroupTypeH

case_value (24.google.ads.googleads.v8.common.ListingDimensionInfo&
parent_ad_group_criterion (	H �B
_parent_ad_group_criterion"\\
ListingScopeInfoH

dimensions (24.google.ads.googleads.v8.common.ListingDimensionInfo"�	
ListingDimensionInfo?
hotel_id (2+.google.ads.googleads.v8.common.HotelIdInfoH E
hotel_class (2..google.ads.googleads.v8.common.HotelClassInfoH V
hotel_country_region (26.google.ads.googleads.v8.common.HotelCountryRegionInfoH E
hotel_state (2..google.ads.googleads.v8.common.HotelStateInfoH C

hotel_city (2-.google.ads.googleads.v8.common.HotelCityInfoH ^
product_bidding_category (2:.google.ads.googleads.v8.common.ProductBiddingCategoryInfoH I
product_brand (20.google.ads.googleads.v8.common.ProductBrandInfoH M
product_channel (22.google.ads.googleads.v8.common.ProductChannelInfoH d
product_channel_exclusivity	 (2=.google.ads.googleads.v8.common.ProductChannelExclusivityInfoH Q
product_condition
 (24.google.ads.googleads.v8.common.ProductConditionInfoH ^
product_custom_attribute (2:.google.ads.googleads.v8.common.ProductCustomAttributeInfoH L
product_item_id (21.google.ads.googleads.v8.common.ProductItemIdInfoH G
product_type (2/.google.ads.googleads.v8.common.ProductTypeInfoH `
unknown_listing_dimension (2;.google.ads.googleads.v8.common.UnknownListingDimensionInfoH B
	dimension"+
HotelIdInfo
value (	H �B
_value".
HotelClassInfo
value (H �B
_value"\\
HotelCountryRegionInfo%
country_region_criterion (	H �B
_country_region_criterion"B
HotelStateInfo
state_criterion (	H �B
_state_criterion"?
HotelCityInfo
city_criterion (	H �B
_city_criterion"�
ProductBiddingCategoryInfo
id (H �
country_code (	H�i
level (2Z.google.ads.googleads.v8.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevelB
_idB
_country_code"0
ProductBrandInfo
value (	H �B
_value"g
ProductChannelInfoQ
channel (2@.google.ads.googleads.v8.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfos
channel_exclusivity (2V.google.ads.googleads.v8.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"o
ProductConditionInfoW
	condition (2D.google.ads.googleads.v8.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo
value (	H �i
index (2Z.google.ads.googleads.v8.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndexB
_value"1
ProductItemIdInfo
value (	H �B
_value"�
ProductTypeInfo
value (	H �S
level (2D.google.ads.googleads.v8.enums.ProductTypeLevelEnum.ProductTypeLevelB
_value"
UnknownListingDimensionInfo"|
HotelDateSelectionTypeInfo^
type (2P.google.ads.googleads.v8.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"g
HotelAdvanceBookingWindowInfo
min_days (H �
max_days (H�B
	_min_daysB
	_max_days"g
HotelLengthOfStayInfo

min_nights (H �

max_nights (H�B
_min_nightsB
_max_nights"A
HotelCheckInDateRangeInfo

start_date (	
end_date (	"b
HotelCheckInDayInfoK
day_of_week (26.google.ads.googleads.v8.enums.DayOfWeekEnum.DayOfWeek"g
InteractionTypeInfoP
type (2B.google.ads.googleads.v8.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoR
start_minute (2<.google.ads.googleads.v8.enums.MinuteOfHourEnum.MinuteOfHourP

end_minute (2<.google.ads.googleads.v8.enums.MinuteOfHourEnum.MinuteOfHour

start_hour (H �
end_hour (H�K
day_of_week (26.google.ads.googleads.v8.enums.DayOfWeekEnum.DayOfWeekB
_start_hourB
	_end_hour"Z
AgeRangeInfoJ
type (2<.google.ads.googleads.v8.enums.AgeRangeTypeEnum.AgeRangeType"T

GenderInfoF
type (28.google.ads.googleads.v8.enums.GenderTypeEnum.GenderType"c
IncomeRangeInfoP
type (2B.google.ads.googleads.v8.enums.IncomeRangeTypeEnum.IncomeRangeType"l
ParentalStatusInfoV
type (2H.google.ads.googleads.v8.enums.ParentalStatusTypeEnum.ParentalStatusType"6
YouTubeVideoInfo
video_id (	H �B
	_video_id"<
YouTubeChannelInfo

channel_id (	H �B
_channel_id"4
UserListInfo
	user_list (	H �B

_user_list"�
ProximityInfo?
	geo_point (2,.google.ads.googleads.v8.common.GeoPointInfo
radius (H �b
radius_units (2L.google.ads.googleads.v8.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits<
address (2+.google.ads.googleads.v8.common.AddressInfoB	
_radius"�
GeoPointInfo\'
longitude_in_micro_degrees (H �&
latitude_in_micro_degrees (H�B
_longitude_in_micro_degreesB
_latitude_in_micro_degrees"�
AddressInfo
postal_code (	H �
province_code	 (	H�
country_code
 (	H�
province_name (	H�
street_address (	H�
street_address2 (	H�
	city_name (	H�B
_postal_codeB
_province_codeB
_country_codeB
_province_nameB
_street_addressB
_street_address2B

_city_name"I
	TopicInfo
topic_constant (	H �
path (	B
_topic_constant"D
LanguageInfo
language_constant (	H �B
_language_constant"5
IpBlockInfo

ip_address (	H �B
_ip_address"f
ContentLabelInfoR
type (2D.google.ads.googleads.v8.enums.ContentLabelTypeEnum.ContentLabelType"A
CarrierInfo
carrier_constant (	H �B
_carrier_constant"R
UserInterestInfo#
user_interest_category (	H �B
_user_interest_category"�
WebpageInfo
criterion_name (	H �H

conditions (24.google.ads.googleads.v8.common.WebpageConditionInfo
coverage_percentage (A
sample (21.google.ads.googleads.v8.common.WebpageSampleInfoB
_criterion_name"�
WebpageConditionInfoc
operand (2R.google.ads.googleads.v8.enums.WebpageConditionOperandEnum.WebpageConditionOperandf
operator (2T.google.ads.googleads.v8.enums.WebpageConditionOperatorEnum.WebpageConditionOperator
argument (	H �B
	_argument"(
WebpageSampleInfo
sample_urls (	"r
OperatingSystemVersionInfo.
!operating_system_version_constant (	H �B$
"_operating_system_version_constant"o
AppPaymentModelInfoX
type (2J.google.ads.googleads.v8.enums.AppPaymentModelTypeEnum.AppPaymentModelType"R
MobileDeviceInfo#
mobile_device_constant (	H �B
_mobile_device_constant"F
CustomAffinityInfo
custom_affinity (	H �B
_custom_affinity"@
CustomIntentInfo
custom_intent (	H �B
_custom_intent"�
LocationGroupInfo
feed (	H �
geo_target_constants (	
radius (H�j
radius_units (2T.google.ads.googleads.v8.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits
feed_item_sets (	B
_feedB	
_radius"-
CustomAudienceInfo
custom_audience (	"1
CombinedAudienceInfo
combined_audience (	"h
KeywordThemeInfo 
keyword_theme_constant (	H !
free_form_keyword_theme (	H B
keyword_themeB�
"com.google.ads.googleads.v8.commonBCriteriaProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
;google/ads/googleads/v8/enums/frequency_cap_time_unit.protogoogle.ads.googleads.v8.enums"n
FrequencyCapTimeUnitEnum"R
FrequencyCapTimeUnit
UNSPECIFIED 
UNKNOWN
DAY
WEEK	
MONTHB�
!com.google.ads.googleads.v8.enumsBFrequencyCapTimeUnitProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/reach_plan_ad_length.protogoogle.ads.googleads.v8.enums"�
ReachPlanAdLengthEnum"}
ReachPlanAdLength
UNSPECIFIED 
UNKNOWN
SIX_SECONDS
FIFTEEN_OR_TWENTY_SECONDS
TWENTY_SECONDS_OR_MOREB�
!com.google.ads.googleads.v8.enumsBReachPlanAdLengthProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/reach_plan_network.protogoogle.ads.googleads.v8.enums"�
ReachPlanNetworkEnum"
ReachPlanNetwork
UNSPECIFIED 
UNKNOWN
YOUTUBE
GOOGLE_VIDEO_PARTNERS%
!YOUTUBE_AND_GOOGLE_VIDEO_PARTNERSB�
!com.google.ads.googleads.v8.enumsBReachPlanNetworkProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/reach_plan_age_range.protogoogle.ads.googleads.v8.enums"�
ReachPlanAgeRangeEnum"�
ReachPlanAgeRange
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_18_34
AGE_RANGE_18_44
AGE_RANGE_18_49
AGE_RANGE_18_54
AGE_RANGE_18_64
AGE_RANGE_18_65_UP
AGE_RANGE_21_34
AGE_RANGE_25_34��
AGE_RANGE_25_44	
AGE_RANGE_25_49

AGE_RANGE_25_54
AGE_RANGE_25_64
AGE_RANGE_25_65_UP
AGE_RANGE_35_44��
AGE_RANGE_35_49
AGE_RANGE_35_54
AGE_RANGE_35_64
AGE_RANGE_35_65_UP
AGE_RANGE_45_54��
AGE_RANGE_45_64
AGE_RANGE_45_65_UP
AGE_RANGE_50_65_UP
AGE_RANGE_55_64��
AGE_RANGE_55_65_UP
AGE_RANGE_65_UP��B�
!com.google.ads.googleads.v8.enumsBReachPlanAgeRangeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�/
9google/ads/googleads/v8/services/reach_plan_service.proto google.ads.googleads.v8.services;google/ads/googleads/v8/enums/frequency_cap_time_unit.proto8google/ads/googleads/v8/enums/reach_plan_ad_length.proto8google/ads/googleads/v8/enums/reach_plan_age_range.proto6google/ads/googleads/v8/enums/reach_plan_network.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto"
ListPlannableLocationsRequest"r
ListPlannableLocationsResponseP
plannable_locations (23.google.ads.googleads.v8.services.PlannableLocation"}
PlannableLocation
id (	H �
name (	H�
parent_country_id (H�B
_idB
_nameB
_parent_country_id"B
ListPlannableProductsRequest"
plannable_location_id (	B�A"l
ListPlannableProductsResponseK
product_metadata (21.google.ads.googleads.v8.services.ProductMetadata"�
ProductMetadata#
plannable_product_code (	H �
plannable_product_name (	Q
plannable_targeting (24.google.ads.googleads.v8.services.PlannableTargetingB
_plannable_product_code"�
PlannableTargetingZ

age_ranges (2F.google.ads.googleads.v8.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange;
genders (2*.google.ads.googleads.v8.common.GenderInfo;
devices (2*.google.ads.googleads.v8.common.DeviceInfoV
networks (2D.google.ads.googleads.v8.enums.ReachPlanNetworkEnum.ReachPlanNetwork"�
GenerateProductMixIdeasRequest
customer_id (	B�A"
plannable_location_id (	B�A
currency_code (	B�A
budget_micros (B�AB
preferences (2-.google.ads.googleads.v8.services.Preferences"�
Preferences
is_skippable (H �
starts_with_sound (H�Y
	ad_length (2F.google.ads.googleads.v8.enums.ReachPlanAdLengthEnum.ReachPlanAdLength
top_content_only (H�!
has_guaranteed_price	 (H�B
_is_skippableB
_starts_with_soundB
_top_content_onlyB
_has_guaranteed_price"r
GenerateProductMixIdeasResponseO
product_allocation (23.google.ads.googleads.v8.services.ProductAllocation"�
ProductAllocation#
plannable_product_code (	H �
budget_micros (H�B
_plannable_product_codeB
_budget_micros"�
GenerateReachForecastRequest
customer_id (	B�A
currency_code	 (	H �R
campaign_duration (22.google.ads.googleads.v8.services.CampaignDurationB�A!
cookie_frequency_cap
 (H�T
cookie_frequency_cap_setting (2..google.ads.googleads.v8.services.FrequencyCap$
min_effective_frequency (H�>
	targeting (2+.google.ads.googleads.v8.services.TargetingO
planned_products (20.google.ads.googleads.v8.services.PlannedProductB�AB
_currency_codeB
_cookie_frequency_capB
_min_effective_frequency"�
FrequencyCap
impressions (B�Ad
	time_unit (2L.google.ads.googleads.v8.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnitB�A"�
	Targeting"
plannable_location_id (	H �Y
	age_range (2F.google.ads.googleads.v8.enums.ReachPlanAgeRangeEnum.ReachPlanAgeRange;
genders (2*.google.ads.googleads.v8.common.GenderInfo;
devices (2*.google.ads.googleads.v8.common.DeviceInfoU
network (2D.google.ads.googleads.v8.enums.ReachPlanNetworkEnum.ReachPlanNetworkB
_plannable_location_id"F
CampaignDuration
duration_in_days (H �B
_duration_in_days"~
PlannedProduct#
plannable_product_code (	H �
budget_micros (H�B
_plannable_product_codeB
_budget_micros"�
GenerateReachForecastResponse]
on_target_audience_metrics (29.google.ads.googleads.v8.services.OnTargetAudienceMetricsA
reach_curve (2,.google.ads.googleads.v8.services.ReachCurve"V

ReachCurveH
reach_forecasts (2/.google.ads.googleads.v8.services.ReachForecast"�
ReachForecast
cost_micros (<
forecast (2*.google.ads.googleads.v8.services.Forecastf
planned_product_reach_forecasts (2=.google.ads.googleads.v8.services.PlannedProductReachForecast"�
Forecast
on_target_reach (H �
total_reach (H�"
on_target_impressions (H�
total_impressions (H�!
viewable_impressions	 (H�B
_on_target_reachB
_total_reachB
_on_target_impressionsB
_total_impressionsB
_viewable_impressions"�
PlannedProductReachForecast
plannable_product_code (	
cost_micros (Z
planned_product_forecast (28.google.ads.googleads.v8.services.PlannedProductForecast"�
PlannedProductForecast
on_target_reach (
total_reach (
on_target_impressions (
total_impressions (!
viewable_impressions (H �B
_viewable_impressions"�
OnTargetAudienceMetrics"
youtube_audience_size (H �!
census_audience_size (H�B
_youtube_audience_sizeB
_census_audience_size2�
ReachPlanService�
ListPlannableLocations?.google.ads.googleads.v8.services.ListPlannableLocationsRequest@.google.ads.googleads.v8.services.ListPlannableLocationsResponse"%���"/v8:listPlannableLocations:*�
ListPlannableProducts>.google.ads.googleads.v8.services.ListPlannableProductsRequest?.google.ads.googleads.v8.services.ListPlannableProductsResponse"<���"/v8:listPlannableProducts:*�Aplannable_location_id�
GenerateProductMixIdeas@.google.ads.googleads.v8.services.GenerateProductMixIdeasRequestA.google.ads.googleads.v8.services.GenerateProductMixIdeasResponse"����:"5/v8/customers/{customer_id=*}:generateProductMixIdeas:*�A=customer_id,plannable_location_id,currency_code,budget_micros�
GenerateReachForecast>.google.ads.googleads.v8.services.GenerateReachForecastRequest?.google.ads.googleads.v8.services.GenerateReachForecastResponse"o���8"3/v8/customers/{customer_id=*}:generateReachForecast:*�A.customer_id,campaign_duration,planned_productsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBReachPlanServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

