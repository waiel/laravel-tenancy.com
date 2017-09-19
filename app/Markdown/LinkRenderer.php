<?php

namespace App\Markdown;

use Illuminate\Support\Arr;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Renderer\LinkRenderer as BaseRenderer;

class LinkRenderer extends BaseRenderer
{
    /**
     * @param Link $inline
     * @param ElementRendererInterface $htmlRenderer
     * @return \League\CommonMark\HtmlElement
     */
    public function render(AbstractInline $inline, ElementRendererInterface $htmlRenderer)
    {
        if (!($inline instanceof Link)) {
            throw new \InvalidArgumentException('Incompatible inline type: ' . get_class($inline));
        }

        $url = $inline->getUrl();

        if (preg_match('/^https?:\/\//', $url)) {
            Arr::set($inline->data, 'attributes.target', '_blank');
        }

        return parent::render($inline, $htmlRenderer);
    }
}