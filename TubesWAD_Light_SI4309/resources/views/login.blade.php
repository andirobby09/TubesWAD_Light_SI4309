<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/login.css">
    <title>Tubes Light</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <h5 class="text-center pt-2">Silahkan Login Terlebih Dahulu</h5>
        </div>
    </div>

    <div class="container-login">
        <div class="row">
            <div class="col">
                <p class="text-center"><img src="foto/logomelon-lpg.png" width= "82px">MELON.LPG<p>
                <p id="login">LOGIN</p>
                <form class="ms-4">
                    <div class="mb-3">
                      <label for="nohp" class="form-label">No Handphone</label>
                      <input type="email" class="form-control" id="nohp" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn">Submit</button>
                    </div>
                  </form>
            </div>
            <div class="col">
                <div class="logo">
                    <div class="lingkaran">
                        <img src="foto/logomelon-lpg.png" width= "428px">
                    </div>
                </div>
                {{-- <p><img src="foto/logomelon-lpg.png" width="82px">MELON.LPG<p> --}}
            </div>
        </div>
    </div>
</body>
</html>