<?php 
declare(strict_types=1);

namespace Mage\Blog\Model\ResourseModel\Post;

use Magento\Catalog\Model\ResourceModel\Collection\AbstractCollection;
use Mage\Blog\Model\Post;
use Magento\Catalog\Model\ResourceModel\Post as PostResource;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}