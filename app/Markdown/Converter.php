<?php

namespace App\Markdown;

use League\CommonMark\Block\Element\Heading;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use League\CommonMark\Inline\Element\Link;

class Converter
{
    public static function convert(string $markdown): string
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addBlockRenderer(Heading::class, new HeadingRenderer());
        $environment->addInlineRenderer(Link::class, new LinkRenderer());

        $parser = new DocParser($environment);
        $renderer = new HtmlRenderer($environment);

        $document = $parser->parse($markdown);

        return $renderer->renderBlock($document);
    }
}