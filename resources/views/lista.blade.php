<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		@foreach ($productos as $producto)
		<li> {{ $producto->getNombre() }} | {{ $producto->getDescripcion() }} | {{ $producto->getPrecio() }} | {{ $producto->getStock() }} </li>
		@endforeach
	</ul>

</body>
</html>