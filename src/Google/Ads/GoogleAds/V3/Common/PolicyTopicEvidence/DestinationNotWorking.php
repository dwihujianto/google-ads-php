<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/policy.proto

namespace Google\Ads\GoogleAds\V3\Common\PolicyTopicEvidence;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evidence details when the destination is returning an HTTP error
 * code or isn't functional in all locations for commonly used devices.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.PolicyTopicEvidence.DestinationNotWorking</code>
 */
class DestinationNotWorking extends \Google\Protobuf\Internal\Message
{
    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_url = 3;</code>
     */
    protected $expanded_url = null;
    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     */
    protected $device = 0;
    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_checked_date_time = 5;</code>
     */
    protected $last_checked_date_time = null;
    protected $reason;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $expanded_url
     *           The full URL that didn't work.
     *     @type int $device
     *           The type of device that failed to load the URL.
     *     @type \Google\Protobuf\StringValue $last_checked_date_time
     *           The time the URL was last checked.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type int $dns_error_type
     *           The type of DNS error.
     *     @type \Google\Protobuf\Int64Value $http_error_code
     *           The HTTP error code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_url = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExpandedUrl()
    {
        return $this->expanded_url;
    }

    /**
     * Returns the unboxed value from <code>getExpandedUrl()</code>

     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_url = 3;</code>
     * @return string|null
     */
    public function getExpandedUrlUnwrapped()
    {
        return $this->readWrapperValue("expanded_url");
    }

    /**
     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_url = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExpandedUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->expanded_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The full URL that didn't work.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_url = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setExpandedUrlUnwrapped($var)
    {
        $this->writeWrapperValue("expanded_url", $var);
        return $this;}

    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The type of device that failed to load the URL.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice device = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\PolicyTopicEvidenceDestinationNotWorkingDeviceEnum_PolicyTopicEvidenceDestinationNotWorkingDevice::class);
        $this->device = $var;

        return $this;
    }

    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_checked_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastCheckedDateTime()
    {
        return $this->last_checked_date_time;
    }

    /**
     * Returns the unboxed value from <code>getLastCheckedDateTime()</code>

     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_checked_date_time = 5;</code>
     * @return string|null
     */
    public function getLastCheckedDateTimeUnwrapped()
    {
        return $this->readWrapperValue("last_checked_date_time");
    }

    /**
     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_checked_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastCheckedDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->last_checked_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The time the URL was last checked.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_checked_date_time = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLastCheckedDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("last_checked_date_time", $var);
        return $this;}

    /**
     * The type of DNS error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorType dns_error_type = 1;</code>
     * @return int
     */
    public function getDnsErrorType()
    {
        return $this->readOneof(1);
    }

    /**
     * The type of DNS error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorType dns_error_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDnsErrorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum_PolicyTopicEvidenceDestinationNotWorkingDnsErrorType::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The HTTP error code.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value http_error_code = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getHttpErrorCode()
    {
        return $this->readOneof(2);
    }

    /**
     * Returns the unboxed value from <code>getHttpErrorCode()</code>

     * The HTTP error code.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value http_error_code = 2;</code>
     * @return int|string|null
     */
    public function getHttpErrorCodeUnwrapped()
    {
        return $this->readWrapperValue("http_error_code");
    }

    /**
     * The HTTP error code.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value http_error_code = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setHttpErrorCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The HTTP error code.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value http_error_code = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setHttpErrorCodeUnwrapped($var)
    {
        $this->writeWrapperValue("http_error_code", $var);
        return $this;}

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->whichOneof("reason");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DestinationNotWorking::class, \Google\Ads\GoogleAds\V3\Common\PolicyTopicEvidence_DestinationNotWorking::class);

