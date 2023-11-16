<!DOCTYPE html>
<html lang="en">
<head>
    <title>email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <div class="p-3 mb-2 bg-light text-dark" style="background-image: url('images/bg-01.jpg');">
        <div class="container-md">
            <div class="form-group">
                <div class="exampleFormControlInput1" data-tilt>
                    <img src="https://cdn.pixabay.com/photo/2016/12/15/12/26/contact-us-1908763_1280.png" height="200px" width="1300px" alt="IMG">
                </div>

                <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                    @csrf
                    <span class="text-body-secondary">
                        Contact Form
                    </span>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span><br>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="form-control" type="text" name="email" placeholder="Email">
                        <span class="focus-form-control"></span><br>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Subject is required">
                        <input class="form-control" type="text" name="subject" placeholder="subject">
                        <span class="focus-form-control"></span><br>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea class="form-control" name="content" placeholder="Message"></textarea>
                        <span class="focus-form-control"></span><br>
                        @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="container-contact100-form-btn">
                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>
</html>
