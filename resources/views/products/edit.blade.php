<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Product name" value="{{$product->name}}"/>
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" placeholder="Product quantity"value="{{$product->quantity}}"/>
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" id="price" name="price" placeholder="Product price" value="{{$product->price}}"/>
        </div>
        <div>
            <label for="name">Description</label>
            <input type="text" id="description" name="description" placeholder="Product description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>

