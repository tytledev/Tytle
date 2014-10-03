<?php
/**
 * Created by IntelliJ IDEA.
 * User: arik-so
 * Date: 10/3/14
 * Time: 6:52 PM
 */

class Invitation extends AppModel{

    public $hasMany = ['User'];

    public $belongsTo = ['User' => ['foreignKey' => 'sender_id']];

} 