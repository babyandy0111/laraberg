<?php

namespace Babyandy0111\Laraberg\Traits;

use Babyandy0111\Laraberg\Blocks\ContentRenderer;

use function app;

trait RendersContent
{
    protected $contentColumn = 'content';

    public function render(string $column = null): string
    {
        $column = $column ?: $this->contentColumn;
        $renderer = app(ContentRenderer::class);
        $content = $this->$column;
        return $renderer->render(is_string($content) ? $content : '');
    }
}
