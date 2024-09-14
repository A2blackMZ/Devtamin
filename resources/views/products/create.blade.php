<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>

<body>
    <h1>Create a new product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="product name" />
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" placeholder="product quantity" />
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" id="price" name="price" placeholder="product price" />
        </div>
        <div>
            <label for="name">Description</label>
            <input type="text" id="description" name="description" placeholder="product description" />
        </div>
        <div>
            <input type="submit" value="Save a new product">
        </div>
    </form>
</body>

</html>
