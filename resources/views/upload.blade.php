<html>
<head>
	<title>Upload file</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- external CSS -->
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
    <!--this-->
    <div class="container mt-3 border border-5 border-dark">
        @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
		@endif
        <form class="row g-2" action="/upload/process" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="container mt-3" id="wrapper">
                <span>
                    <input class="form-control" type="file" id="formFile" name="file">
                </span>
                <span>

                    <input type="submit" value="Upload File" class="btn btn-primary mb-3 mt-3">
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
              @foreach ($yoPrintCSV as $data)
                <tbody>
                    <tr>
                        <td>{{ date('d-m-Y H:i:s', strtotime($data->updated_at)) }}</td>
                        <td>{{ $data->file }}</td>
                        <td>{{ $data->status }}</td>
                    </tr>
                </tbody>
              @endforeach
          </table>
      </div>
</body>
</html>
