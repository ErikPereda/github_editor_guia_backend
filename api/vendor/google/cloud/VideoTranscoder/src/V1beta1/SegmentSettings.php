<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Segment settings for `"ts"`, `"fmp4"` and `"vtt"`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.SegmentSettings</code>
 */
class SegmentSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration of the segments in seconds. The default is `"6.0s"`. Note that
     * `segmentDuration` must be greater than or equal to
     * [`gopDuration`](#videostream), and `segmentDuration` must be divisible by
     * [`gopDuration`](#videostream).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_duration = 1;</code>
     */
    private $segment_duration = null;
    /**
     * Required. Create an individual segment file. The default is `false`.
     *
     * Generated from protobuf field <code>bool individual_segments = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $individual_segments = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $segment_duration
     *           Duration of the segments in seconds. The default is `"6.0s"`. Note that
     *           `segmentDuration` must be greater than or equal to
     *           [`gopDuration`](#videostream), and `segmentDuration` must be divisible by
     *           [`gopDuration`](#videostream).
     *     @type bool $individual_segments
     *           Required. Create an individual segment file. The default is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration of the segments in seconds. The default is `"6.0s"`. Note that
     * `segmentDuration` must be greater than or equal to
     * [`gopDuration`](#videostream), and `segmentDuration` must be divisible by
     * [`gopDuration`](#videostream).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSegmentDuration()
    {
        return isset($this->segment_duration) ? $this->segment_duration : null;
    }

    public function hasSegmentDuration()
    {
        return isset($this->segment_duration);
    }

    public function clearSegmentDuration()
    {
        unset($this->segment_duration);
    }

    /**
     * Duration of the segments in seconds. The default is `"6.0s"`. Note that
     * `segmentDuration` must be greater than or equal to
     * [`gopDuration`](#videostream), and `segmentDuration` must be divisible by
     * [`gopDuration`](#videostream).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSegmentDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->segment_duration = $var;

        return $this;
    }

    /**
     * Required. Create an individual segment file. The default is `false`.
     *
     * Generated from protobuf field <code>bool individual_segments = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getIndividualSegments()
    {
        return $this->individual_segments;
    }

    /**
     * Required. Create an individual segment file. The default is `false`.
     *
     * Generated from protobuf field <code>bool individual_segments = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setIndividualSegments($var)
    {
        GPBUtil::checkBool($var);
        $this->individual_segments = $var;

        return $this;
    }

}

