<?php
/**
 * JustMapIt Record
 *
 * @file    JustMapit/Model/Record.php
 * @desc    Describes a line on the earth.
 * @author  Scott Sherwood
 * @license BSD/GPLv2
 *
 * (c) copyright Scott Sherwood (Scott Sherwood) and the JustMapIt Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */

namespace JustMapIt\Model;


use RedBean_Facade as R;
use RedBean_SimpleModel;

class JMIRecord extends RedBean_SimpleModel
{
    public function open()
    {
    }
    public function dispense()
    {
        // $this->identifier = "Some Unique ID";
        $this->createdAt = R::isoDateTime();
    }
    public function update()
    {
        if (!$this->createdAt) {
            $this->createdAt = R::isoDateTime();
        }
        if ($this->bean->getMeta("tainted")) {
            $this->updatedAt = R::isoDateTime();
        }
    }

    public function after_update()
    {
    }

    public function delete()
    {
    }

    public function after_delete()
    {
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
