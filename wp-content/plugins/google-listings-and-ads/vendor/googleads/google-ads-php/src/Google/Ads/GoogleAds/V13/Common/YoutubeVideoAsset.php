<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/asset_types.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A YouTube asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.YoutubeVideoAsset</code>
 */
class YoutubeVideoAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>optional string youtube_video_id = 2;</code>
     */
    protected $youtube_video_id = null;
    /**
     * YouTube video title.
     *
     * Generated from protobuf field <code>string youtube_video_title = 3;</code>
     */
    protected $youtube_video_title = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $youtube_video_id
     *           YouTube video id. This is the 11 character string value used in the
     *           YouTube video URL.
     *     @type string $youtube_video_title
     *           YouTube video title.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>optional string youtube_video_id = 2;</code>
     * @return string
     */
    public function getYoutubeVideoId()
    {
        return isset($this->youtube_video_id) ? $this->youtube_video_id : '';
    }

    public function hasYoutubeVideoId()
    {
        return isset($this->youtube_video_id);
    }

    public function clearYoutubeVideoId()
    {
        unset($this->youtube_video_id);
    }

    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>optional string youtube_video_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setYoutubeVideoId($var)
    {
        GPBUtil::checkString($var, True);
        $this->youtube_video_id = $var;

        return $this;
    }

    /**
     * YouTube video title.
     *
     * Generated from protobuf field <code>string youtube_video_title = 3;</code>
     * @return string
     */
    public function getYoutubeVideoTitle()
    {
        return $this->youtube_video_title;
    }

    /**
     * YouTube video title.
     *
     * Generated from protobuf field <code>string youtube_video_title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setYoutubeVideoTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->youtube_video_title = $var;

        return $this;
    }

}
