<html lang="en">

        <head>

            <meta charset="UTF-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <title>Products</title>

            <style>

                body {
                    height:90vh;
                    background:#475d62 url(https://epicbootstrap.com/freebies/snippets/login-form-dark/assets/img/star-sky.jpg);
                    background-size:cover;
                    position:relative;
                }

            </style>

        </head>

        <body>

            <div class="container my-5">

                <table class="table table-hover table-striped">
                    <thead style="background: #213b59; color: #6d8498">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $product )
                            <tr style="background: #3c587d">
                                <th scope="row" style="color: #6d8498">{{ $key + 1 }}</th>
                                <td style="color: #c6c9d8">{{ $product->name }}</td>
                                <td style="color: #c6c9d8">{{ $product->product_id }}</td>
                                <td style="color: #c6c9d8">{{ $product->description }}</td>
                                <td>
                                    <a href="edit/{{ $product->id }}" target="blank_">
                                        <i class="fas fa-pencil text-warning me-2 ms-1 mb-2 fa-fw" role="button"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="remove/{{ $product->id }}">
                                        <i class="fas fa-xmark text-danger fa-lg ms-3 mt-1 fa-fw" role="button"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </body>

</html>
