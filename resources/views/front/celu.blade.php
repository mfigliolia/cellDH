@include('partials/head')
@include('partials/header_login')
@include('partials/navigation')
​
<body>
	<main class="container">
		<div id="product">
			<div id="img_product" style="">
				<img src="/storage/images/{{$celu->photo}}" style="width: 80%;">
			</div>
				<br>
			<div class="card_product" style="display:flex; flex-direction: column; justify-content: space-between; width: 50%; margin: 25px;"> 
​
			<h3 style="color: rgb(203,31,7);">{{$celu->categorie->name}} - {{$celu->brand->name}}</h3>
            <h1 style="color:black">{{$celu->name}}</h1>
            <p id="description">{{$celu->description}}</p>
				<p id="precio"><strong>$ {{$celu->price}}</strong></p>
				<div >
					<input id="btn-left"type="button" value="Comprar">
                    
					<a href="/cart/add/{{$celu->id}}"><input id="btn-right" type="button" value="Agregar a carrito"></a>

				</div>	
			</div>
        </div>
    </main>    
@include('partials/footer')