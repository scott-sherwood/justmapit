<?php
/**
 * JustMapIt Geocodable
 *
 * @file    JustMapit/Model/Geocodable.php
 * @desc    Describes a line on the earth.
 * @author  Scott Sherwood
 * @license BSD/GPLv2
 *
 * (c) copyright Scott Sherwood (Scott Sherwood) and the JustMapIt Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */

namespace JustMapIt\Model\Traits;

trait Geocodable
{

    public $latitude;
    public $longitude;
    public $altitude;
    public $speed;
    public $course;
    public $horizontalAccuracy;
    public $verticalAccuracy;
    public $locationTime;
}
