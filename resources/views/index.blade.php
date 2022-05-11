<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- external CSS -->
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />
    <title>Yo Print</title>
  </head>
  <body>
      <!--Input file-->
      <div class="container mt-3 border border-5 border-dark">
          <form class="row g-2">
              <div class="container mt-3" id="wrapper">
                  <span>
                      <input class="form-control" type="file" id="formFile">
                  </span>
                  <span>
                      <button type="submit" class="btn btn-primary mb-3 mt-3">Upload File</button>
                  </span>
              </div>
          </form>
      </div>


    <!--Table Header-->
        <div class="table-responsive container mt-3">
            <table class="table table-bordered border border-5 border-dark">
                <thead class="table-dark">
                    <tr>
                        <th rowspan="2" class="tbHeader">Time</th>
                        <th rowspan="2" class="tbHeader">File Name</th>
                        <th rowspan="2" class="tbHeader">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12-3-2022 9.30am (12 minute ago)</td>
                        <td>File Name</td>
                        <td>pending/processing/failed/complete</td>
                    </tr>
                </tbody>
            </table>
        </div>



  </body>
</html>
