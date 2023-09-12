<?php

declare(strict_types=1);

//Resource Model used to connect the original model with the database by inhireting the  AbstractDb class
//using tableName and Primary_key  

namespace Mage\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    private const TABLE_NAME = 'mage_blog_post';
    private const PRIMARY_KEY = 'post_id';

    protected function _construct(){
        $this->_init(self::TABLE_NAME,self::PRIMARY_KEY);
    }
}