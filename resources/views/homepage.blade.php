@extends('layouts.app')

@section('content')
	<h2 class="text-danger" id="test">HOME PAGE</h2>
	<script>
		$(document).ready(function () {
			$("#test").on('click', function (){
				console.log('it works');
			})
		});
	</script>
@endsection