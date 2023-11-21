<!doctype html>
<html lang="en">

<head>
    <title>Email Verification</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="height:100vh">
                <div class="card" style="width:600px">
                    @if ($response_arr['status'] == 1)
                        <div class="card-body p-5 rounded" style="background-color: #32cb4b">
                            <h3 class="text-center text-white">{{ $response_arr['message'] }}</h3>
                            <div class="py-4 text-center">
                                <a href="{{ route('index') }}" class="btn btn-success">Back To Home</a>
                            </div>
                        </div>
                    @else
                        <div class="card-body p-5 rounded" style="background-color: #f04747">
                            <h3 class="text-center text-white">{{ $response_arr['message'] }}</h3>
                            <div class="py-4 text-center">
                                <a href="{{ route('index') }}" class="btn btn-danger">Back To Home</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
