<?php
class Model_Message extends ORM {
    protected $_has_one = array(
        'user' => array('model' => 'User')
    );
}
?>