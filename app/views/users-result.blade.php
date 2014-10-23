@extends('users')

@section('result')

<p>Your users:</p>

<p>
<?php

	$faker = Faker\Factory::create();
	for ($i=0; $i < $user; $i++) {
		echo $faker->name . '<br />';

		if ($address) {
			echo $faker->address . '<br />';
		}

		if ($birthday) {
			echo Faker\Provider\DateTime::date($format = 'm-d-Y', $max = 'now') . '<br />';
		}

		if ($blurb) {
			echo $faker->text . '<br />';
		}

		if ($address || $birthday || $blurb) {
			echo '<br />';
		}
	}

	?>
</p>

	@stop