<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Products</title>
</head>

<body>

    <h1>All Products</h1>

    <a href="/product">Create New Product</a>

    <br><br>

    @if ($products->isEmpty())

        <p>No products found.</p>

    @else

        <table border="1">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($products as $product)

                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    @endif

</body>

</html>
