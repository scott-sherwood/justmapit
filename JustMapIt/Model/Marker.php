<?php
/**
 * JustMapIt Marker
 *
 * @file    JustMapit/Model/Marker.php
 * @desc    Describes a point on the earth.
 * @author  Scott Sherwood
 * @license BSD/GPLv2
 *
 * (c) copyright Scott Sherwood (Scott Sherwood) and the JustMapIt Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */

namespace JustMapIt\Model;


class Marker extends JMIRecord
{
   use Traits\Geocodable;

}
