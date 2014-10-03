<?php
/**
 * Created by IntelliJ IDEA.
 * User: arik-so
 * Date: 10/3/14
 * Time: 6:53 PM
 */

class User extends AppModel{

    public $hasMany = [
        'Message',
        'Invitation' => ['foreignKey' => 'sender_id']
    ];

    public $belongsTo = ['Invitation'];

}