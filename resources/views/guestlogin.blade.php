<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <div class="container" style="padding-top: 50px">
        <form method="POST" action="{{ route('guestlogin.store') }}" enctype="multipart/form-data">
            @csrf


            <h1> add details of Guest User</h1>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" id="" rows="8" name="email" />
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Name</label>
                <input class="form-control" type="text" id="" name="name">
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Password</label>
                <input class="form-control" type="password" id="" name="password">
                @error('password')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>

</html>