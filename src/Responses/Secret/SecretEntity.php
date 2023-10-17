<?php


namespace AzKeyVault\Responses\Secret;

use AzKeyVault\Contracts\EntityInterface;
use AzKeyVault\Contracts\AttributeInterface;

class SecretEntity implements EntityInterface {
    /** @var string */
    public $name;

    /** @var string */
    public $version;

    /** @var string */
    public $content;

    /** @var string */
    public $secret;

    /** @var string */
    public $url;
    
    /** @var SecretAttributeEntity */
    public $attributes;
    
    /** @var array */
    public $tags;

    public function __construct(string $name, string $version, string $secret, string $url, SecretAttributeEntity $attributes, array $tags = [], string $content = null) {
        $this->name = $name;
        $this->version = $version;
        $this->secret = $secret;
        $this->url = $url;
        $this->attributes = $attributes;
        $this->tags = $tags;
        $this->content = $content;
    }

    public function __toString() {
        return $this->secret;
    }

    public function getAttributes(): AttributeInterface {
        return $this->attributes;
    }
}
