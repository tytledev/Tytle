<?php
/**
 * Created by IntelliJ IDEA.
 * User: arik-so
 * Date: 10/3/14
 * Time: 6:45 PM
 */

class Message extends AppModel{

    public $belongsTo = [
        'User' => ['foreignKey' => 'sender_id'],
        'Channel'
    ];

}