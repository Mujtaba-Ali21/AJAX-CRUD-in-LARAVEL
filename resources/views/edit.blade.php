<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .login-dark {
            height:100vh;
            background:#475d62 url(https://epicbootstrap.com/freebies/snippets/login-form-dark/assets/img/star-sky.jpg);
            background-size:cover;
            position:relative;
        }

        .login-dark form {
        max-width:320px;
        width:90%;
        background-color:#1e2833;
        padding:40px;
        border-radius:4px;
        transform:translate(-50%, -50%);
        position:absolute;
        top:50%;
        left:50%;
        color:#fff;
        box-shadow:3px 3px 4px rgba(0,0,0,0.2);
        }

        .login-dark .illustration {
        text-align:center;
        padding:15px 0 20px;
        font-size:100px;
        color:#2980ef;
        }

        .login-dark form .form-control {
        background:none;
        border:none;
        border-bottom:1px solid #434a52;
        border-radius:0;
        box-shadow:none;
        outline:none;
        color:inherit;
        }

        .login-dark form .btn-primary {
        background:#214a80;
        border:none;
        border-radius:4px;
        padding:11px;
        box-shadow:none;
        margin-top:26px;
        text-shadow:none;
        outline:none;
        }

        .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
        background:#214a80;
        outline:none;
        }

        .login-dark form .forgot {
        display:block;
        text-align:center;
        font-size:12px;
        color:#6f7a85;
        opacity:0.9;
        text-decoration:none;
        }

        .login-dark form .forgot:hover, .login-dark form .forgot:active {
        opacity:1;
        text-decoration:none;
        }

        .login-dark form .btn-primary:active {
        transform:translateY(1px);
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
    
    <div class="login-dark">

        <div class="alert alert-success" style="display: none" id="created" role="alert">
            Product Updated Successfully!
        </div>

        <form class="shadow-lg p-3 mb-5 rounded" id="myForm">

            <div class="alert alert-danger" style="display: none" id="error" role="alert">
                Please Fill in all the Fields
            </div>

            @csrf()

            <input type="hidden" value="{{ $data[0]->id }}">

            <h2 class="sr-only">Create Product</h2>

            <div class="illustration">
                 <i class="icon ion-ios-locked-outline"></i>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Product Name" id="name"  value="{{ $data[0]->name }}">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="productId" placeholder="Product Id" value="{{ $data[0]->product_id }}">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="description" placeholder="Product Description" value="{{ $data[0]->description }}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" id="submitBtn" type="submit">Update Product</button>
            </div>

        </form>

    </div>

</body>

<script>
        $('#submitBtn').click(function (e) {

            e.preventDefault()

            $.ajax({

                url: '{{ url("/update/".$data[0]->id) }}',
                data: $('#myForm').serialize(),
                type: 'POST',
                success: function() {
                    $('#created').fadeIn(2000).fadeOut(5000)
                },
                error: function() {
                    $('#error').fadeIn(1000).fadeOut(5000)
                }

            })

        })
</script>

</html>
