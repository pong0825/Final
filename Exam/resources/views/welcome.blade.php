<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exam App</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
  <div class="container bg-opacity-dark p-5">
    <div class="content border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-sm-6"><label for="value1">City</label></div>
          </div>
          <div class="row m-2">
            <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input City" autocomplete="off"></div>
          </div>
    
          <button type="submit" class="mt-3 btn btn-success">Submit</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Search Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($weather)
          <div class="col-3"><h4>Weather</h4></div>
          <div class="col-9">
          {{print_r($weather["Headline"]["Text"])}}
          {{print_r($weather["Headline"]["Category"])}}
          {{print_r($weather["Headline"]["EndDate"] )}}
          </div>
          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>