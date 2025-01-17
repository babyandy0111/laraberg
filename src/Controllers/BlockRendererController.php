<?php

namespace Babyandy0111\Laraberg\Controllers;

use Illuminate\Http\Request;
use Babyandy0111\Laraberg\Blocks\Block;

class BlockRendererController
{
    public function show(Request $request) {
        $request->validate([
            'blockName' => ['required', 'string'],
            'attributes' => ['array']
        ]);

        $block = new Block(
            $request->get('blockName'),
            $request->get('attributes', [])
        );

        return ['rendered' => $block->render()];
    }
}
