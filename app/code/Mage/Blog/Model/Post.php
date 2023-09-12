<?php

declare(strict_types=1);

namespace Mage\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Mage\Blog\Model\ResourceModel\Post as PostResource;

Class Post extends AbstractModel
{
    protected function _construct(){
        $this->_init(PostResource::class);
    }
}