@extends('lorem')

@section('result')

<h3>Your text is:</h3>

<p class="output">
<?php
	$generator = new Badcow\LoremIpsum\Generator();
	$text = $generator->getParagraphs($paragraphs);
	echo implode('</p><p class="output">', $text);
?>
</p>

@stop