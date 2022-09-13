<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css' />
    <title>Data Serving</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row my-5">
          <div class="col-lg-12">
            <div class="card shadow">
              <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                <h3 class="text-light">Show Data</h3>
              </div>
              <div class="card-body">
                <table id="show_all_data" class="table table-striped table-sm text-center align-middle">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      
                </table>
              </div>
            </div>
          </div>
        </div>




    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    

</body>

</html>
