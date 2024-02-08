<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image processing</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <div class="container-fluid">
    <div class="container mt-3">
      <div class="row mtn-30 mb-5">
        @foreach ($WaterPurifiers as $puri)
        <div class="col-sm-6 col-lg-3">
          <div class="card" style="width: 18rem;">
           <img src="{{ asset('storage/'.$puri->image) }}" class=" card-img-top img-thumbnail " height="100px" width="100px">
            <div class="card-body">
              <h5 class="card-title"><strong>WaterPurifiers</strong></h5>
              <p class="card-text">Purifier Name::{{ $puri->name }}
              </p>
              <p class="card-text">Purifier Types:{{ $puri->discription}}
            </div>
          </div>
        </div>
        @endforeach
        <div class="row mtn-30 mb-5">
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>