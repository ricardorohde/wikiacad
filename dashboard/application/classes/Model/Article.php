<?php
class Model_Article extends ORM {
    //protected $_table_name = 'news';

    protected $_belongs_to = array(
        'user' => array('model' => 'User')
    );

    function search( $q){
        if(!empty($q)){
            $this->where('title', 'LIKE', '%'.$q.'%')
            ->or_where('content', 'LIKE', '%'.$q.'%');
        }

        return $this;
    }
}
?>