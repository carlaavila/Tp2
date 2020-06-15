<html>
<head>
	<title>Control de Stock</title>
</head>
<body>
	<form action="/productos" method="POST">
	@csrf
	
	@if ($errors->any())
		<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error}}</li>
			@endforeach
		</ul>
	@endif

	<div>
		<label>Nombre del Producto:</label>
		<input type="string" name="nombre">
	</div>
	<div>
		<label>Descripción:</label>
		<input type="text" name="descripcion">
	</div>
	<div>
		<label>Precio:</label>
		<input type="numeric" name="precio">
	</div>
	<div>
		<label>Stock Disponible:</label>
		<input type="interger" name="stock">
	</div>
	    <input type="submit" value="Crear">
	
    </form>
</body>
</html>