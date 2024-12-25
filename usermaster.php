<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usermaster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assetes/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>



    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All User</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add User</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="usermaster">
                <div class="row filter-div">
                    <div class="col-2">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" id="id">
                    </div>
                    <div class="col-2">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-2">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="col-2">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn mt-3">Reset</button>
                    </div>
                </div>

                <div class="getlist">
                    <table class="table  table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                        <tbody id="tbody"></tbody>
                    </table>
                    <!-- <table class="table"> -->
                        <!-- <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="row filter-div ">

                <div class="col-2">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="20" oninput="namevalidate()">
                    <span id="log_er2"></span>
                </div>
                <div class="col-2 ">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control numeric" id="phone" name="phone" maxlength="12">
                    <span id="log_er3"></span>
                </div>
                <div class="col-2">
                    <label for="inputemail">Email:</label>
                    <input type="text" class="form-control" id="inputemail" name="email" maxlength="20" oninput="validEmail()">
                    <span id="log_er1"></span>
                </div>
                <div class="col-2">
                    <label for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" oninput="validPassword()">
                    <span id="log_er"></span>
                </div>
                <div class="col-2">
                    <button type="button" class="btn mt-3" id="insert-btn">Add</button>
                </div>

            </div>

        </div>

    </div>
    <script src="assetes/js/bootstrap.min.js"></script>
    <script src="assetes/jquery/jquery-3.7.1.min.js"></script>
    <script src="index.js"></script>
</body>

</html>