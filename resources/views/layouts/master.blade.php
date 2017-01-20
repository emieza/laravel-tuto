<!-- index -->

<html>
<head>
	<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" />
	<script rel="javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
</head>

<body>
	@include('partials.navbar')

	<div class="contingut">
	@yield('contingut')
	</div>
</body>

</html>
