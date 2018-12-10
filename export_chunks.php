<?php
foreach ($modx->getIterator('modChunk') as $chunk) {
	    file_put_contents('chunks/' . $chunk->get('name') . '.html', $chunk->get('content'));

	    }

echo 'Snippet Fired';
