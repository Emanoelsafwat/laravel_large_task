<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>


<body>

<h1 class="text-center">Add New Product</h1> <br>


<div class="container">

        @if(session()->has('success'))
            <div class="alert alert-danger" role="alert">
                {{session()->get('success')}}
            </div>
        @endif



    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product_Name</th>
            <th scope="col">Image</th>
            <th>
                <a href="{{route('products.create')}}" class="btn btn-success">
                    Add product
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach( $products as $product )
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>
                <img src="{{asset('/storage/' . $product->image)}}" width="150px" height="70px">
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>


</div>

</body>
</html>
