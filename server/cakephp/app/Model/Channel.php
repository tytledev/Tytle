<?php
/**
 * Created by IntelliJ IDEA.
 * User: arik-so
 * Date: 10/3/14
 * Time: 6:52 PM
 */

class Channel extends AppModel{

    public $hasMany = ['Message'];

} 