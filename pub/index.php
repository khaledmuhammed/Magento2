<?php
/**
 * Public alias for the application entry point
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Framework\App\Bootstrap;

try {
    require __DIR__ . '/../app/bootstrap.php';
} catch (\Exception $e) {
    echo <<<HTML
<div style="font:12px/1.35em arial, helvetica, sans-serif;">
    <div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
        <h3 style="margin:0;font-size:1.7em;font-weight:normal;text-transform:none;text-align:left;color:#2f2f2f;">
        Autoload error</h3>
    </div>
    <p>{$e->getMessage()}</p>
</div>
HTML;
    http_response_code(500);
    exit(1);
}

$bootstrap = Bootstrap::create(BP, $_SERVER);
/** @var \Magento\Framework\App\Http $app */
$app = $bootstrap->createApplication(\Magento\Framework\App\Http::class);
$bootstrap->run($app);


// Use of Post Module New Created

// $om = $bootstrap->getObjectManager();

// $postResource = $om->get(\Mage\Blog\Model\ResourceModel\Post::class);

// $post = $om->create(\Mage\Blog\Model\Post::class);

// $post->setData([
// 'title' => 'Test Title',
// 'meta_title' => 'Meta Test Post',
// 'content' => '<p>Some Content is Here!</p>',
// 'meta_keywords' => 'Meta Keywords', 
// 'meta_description' => 'Meta Description',
// ]);

// $postResource->save($post); // hint: You have to use ResourceModel inorder to create Model instance

// var_dump($post->getData());

// Use of Post Module New Created
