<?php
/**
 * JustMapIt Layer
 *
 * @file    JustMapit/Model/Layer.php
 * @desc    A layer of geocodable data.
 * @author  Scott Sherwood
 * @license BSD/GPLv2
 *
 * (c) copyright Scott Sherwood (Scott Sherwood) and the JustMapIt Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */

namespace JustMapIt\Model;

use RedBean_Facade as R;

class Layer extends JMIRecord
{
    public static function defaultLayer()
    {
        $layer = R::findOne('layer', 'identifier = ?', array('justmapit'));
        if (!$layer) {
            $layer = R::dispense('user');
            $layer->identifier = 'justmapit';
            $layer->creator = "admin";
            $layer->title = "testing";
            $layer->description = 'This is the base layer for Just Map It add any points of interest';
            $layer->security = JMIAuthenticationType::ANONYMOUS;
            
            R::store($layer);
        }
        return $layer;
    }

    public function dispense()
    {
        $this->readKey = Layer::guid();
        $this->writeKey = Layer::guid();
        $this->query_count = 0;
        $this->user_count = 0;
    }

    public function update()
    {
        parent::update();
        //throw new \Exception("Layer YEah");
    }

    public static function guid()
    {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid, 12, 4).$hyphen
                .substr($charid, 16, 4).$hyphen
                .substr($charid, 20, 12);
        return $uuid; // e.g. 0B2956B4-0850-7BD2-ECFE-1182EDE76A55
    }
}
