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

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Product_Name</label>
            <input type="text" class="form-control" id="name" name="name"  aria-describedby="emailHelp" placeholder="Enter Your Product_Name">
            @error('name')
            <p style="color: crimson">{{$message}}</p>
            @enderror
        </div><br>


        <div class="form-group">
            <label for="image">Product_Image</label>
            <input type="file" class="form-control" id="image" name="image"  aria-describedby="emailHelp" placeholder="Enter Your Product_Image">
            @error('image')
            <p style="color: crimson">{{$message}}</p>
            @enderror
        </div><br>


        <button type="submit" class="btn btn-primary px-2 px-5">
            Submit
        </button>

    </form>

</div>

</body>
</html>
