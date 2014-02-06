<?php
/**
 * JustMapIt User
 *
 * @file    JustMapit/Model/User.php
 * @desc    Describes a user of JustMapIt.
 * @author  Scott Sherwood
 * @license BSD/GPLv2
 *
 * (c) copyright Scott Sherwood (Scott Sherwood) and the JustMapIt Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */

namespace JustMapIt\Model;


class User extends JMIRecord
{
    use Traits\Geocodable;

 
    public static function defaultUser()
    {
        $user = R::findOne('user', 'username = ?', array('admin'));
        if (!$user) {
            $admin = R::dispense('user');
            $admin->username = "admin";
            $admin->password = "default";
            $admin->firstName = "Admin";
            $admin->lastName = "User";
            $admin->email = "admin@JustMapIt.co";
            R::store($user);
        }
        return $user;
    }
}
