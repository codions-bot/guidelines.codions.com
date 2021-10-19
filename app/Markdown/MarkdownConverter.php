<?php

namespace App\Markdown;

use Illuminate\Support\HtmlString;
use League\CommonMark\CommonMarkConverter;

class MarkdownConverter
{
    public static function convert($markdown)
    {
        $converter = new CommonMarkConverter([
            'html_input' => 'escape',
            'allow_unsafe_links' => false
        ]);

        return new HtmlString(
            $converter->convertToHtml($markdown)
        );
    }
}
