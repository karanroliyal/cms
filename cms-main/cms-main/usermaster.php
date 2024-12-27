<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout</title>
    <link rel="stylesheet" href="./assetes/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="main-container-wrapper">

        <div class="main-nav-bar">
            <?php include_once("navbar.php") ?>
        </div>

        <div class="detail-container">
            <div class="sidebar">
                <?php include_once("sidebar.php") ?>
            </div>
            <div class="content">
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
                                    <button type="button" class="btn btn-outline-primary mt-3">Reset</button>
                                </div>
                            </div>


                            <div class="getlist">
                                <div class="pagination">
                                    <div>
                                        Row
                                        <select name="" id="row">
                                            <option value="3">3</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                     <div class="page"> 
                                     <!-- <a>Preview</a>  -->
                                             <a id="1">1</a>
                                            <a id="2">2</a>
                                            <a id="3">3</a> 
                                             <!-- <a>Next>></a>  -->
                                     </div> 
                                </div>
                                <table class="table  table-hover">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody"></tbody>
                                </table>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="row filter-div ">

                                <div class="col-2">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="Name" name="name" maxlength="20" oninput="namevalidate()">
                                    <span id="log_er2"></span>
                                </div>
                                <div class="col-2">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control numeric" id="Phone" name="phone" maxlength="12">
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
                                    <button type="button" class="btn btn-outline-primary mt-3" id="insert-btn">Add</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>





        <script src="assetes/js/bootstrap.min.js"></script>
        <script src="assetes/jquery/jquery-3.7.1.min.js"></script>
        <script src="validation.js"></script>
        <script src="ajaxcall.js"></script>

</body>

</html>