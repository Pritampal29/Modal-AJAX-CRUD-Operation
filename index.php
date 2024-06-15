<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>CRUD Operation with JQuery-Ajax</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col mt-3 text-center">
                <h1 class="text-light">CRUD Operation with JQuery-Ajax (Modal)</h1>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="container tbl pb-5">
        <div class="row pb-2">
            <div class="col-3 text-start" id="searchField">
                <input type="search" name="search" id="srch_fld" class="form-control" placeholder="Search Data...">
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-warning addbtn" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    Click to Register
                </button>
            </div>
        </div>

        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover bg-light" id="main-table">
                <thead class="thead-dark">
                    <tr>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tab-data">

                </tbody>
            </table>
        </div>
    </div>
    </div>


    <!--Main Modal  -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Registration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="regform">
                        <div class="form-group py-2">
                            <label for="uname">Name</label>
                            <input name="uname" type="text" class="form-control" id="uname" placeholder="Enter name">
                        </div>
                        <div class="form-group py-2">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="text-center py-3">
                            <input type="button" class="btn btn-primary" value="Submit" name="submit" id="subBtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>


</html>