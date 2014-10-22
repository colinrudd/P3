@extends('lorem')

@section('result')

<p>Your text is:</p>

<p>
<?php
	$generator = new Badcow\LoremIpsum\Generator();
	$text = $generator->getParagraphs($paragraphs);
	echo implode('</p><p>', $text);
?>
</p>

@stop