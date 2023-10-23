<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</head>
<body>

  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="container">
        <div class="card w-80">
          <div class="card-body fs-3">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
              <img class="object-cover object-center rounded" alt="hero" src="{{ asset('/public/img/pexels-francisco-valerio-trujillo-1824392.jpg') }}">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
              <h1 class="h1 text-success title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Hello {{ $name }}!</h1>
              <p class="mb-8 leading-relaxed">Thank you for registering.</p>
              <div class="flex w-full md:justify-start justify-center items-end">
                <p>To start, please access the website 
                  <div class="text-primary border border-primary rounded hover:bg-primary text-white">
                    <a class="text-lg w-50" href="{{ $app_url }}">here</a>
                  </div> 
                </p><br>
                <p>Thank you!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Why don't you use the app? It makes you more convenient!</p>
        
        <div class="flex lg:flex-row md:flex-col m-auto" style="text-align:center">
            <div class="col-3 border bg-light border-outline-none rounded text-center mr-4">
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-gray-600 mb-1">GET IT ON</span><br>
                <a href="https://play.google.com/store/games?hl=ja&gl=US">
                  <i class="fa-brands fa-google-play fa-2x"></i>
                  <span class="text-decoration-none text-primary">Google Play</span>
                </a>
              </span> 
            </div>
            <div class="col-3 border bg-light border-outline-none rounded text-center">
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">Download on the</span><br>
                <a href="https://www.apple.com/jp/app-store/">
                  <i class="fa-brands fa-app-store fa-2x"></i>
                  <span class="title-font font-medium">App Store</span>
                </a>
              </span>
            </div>
        </div>

        </div>
      </div>
    </div>
  </section>


  {{-- <div class="container align-center bg-secondary"> --}}
    {{-- <div class="card col-5">
      <div class="car-body">
        <h2 class="fw-bold text-success">Hello {{ $name }} <i class="fa-solid fa-user"></i></h2>
        <p>Thank you for registering.</p>
        <p>To start, please access the website <a class="text-primary" href="{{ $app_url }}">here.</a></p>

        <p>Thank you!</p>
      </div>
    </div> --}}
  {{-- </div> --}}
</body>
</html>