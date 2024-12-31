<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../assetes/css/bootstrap.min.css">


</head>

<body>

    <div class="main-container-wrapper">

        <div class="main-nav-bar">
            <?php include_once("../navbar.php") ?>
        </div>

        <div class="detail-container">
            <div class="sidebar">
                <?php include_once("../sidebar.php") ?>
            </div>
            <div class="content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Client</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add client</button>
                    </li>
                    
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="client-master">

                            <div class="row input-div ">
                                <div class="col-2 ">
                                    <label for="id">Id:</label>
                                    <input type="text" class="form-control numeric search">
                                </div>
                                <div class="col-2">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control search">
                                </div>
                                <div class="col-2">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control numeric search">
                                </div>
                                <div class="col-2">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control search">
                                </div>

                                <div class="col-2">
                                    <button type="button" class=" mt-3" id="reset">Reset</button>
                                </div>
                            </div>


                            <div class="getlist">
                                <input type="hidden" id="page_no" value="1">
                                <div class="selectrow">
                                    <select id='row'>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        
                                        <option value='10'>10</option>
                                    </select>
                                </div>

                                

                                <div class="list">

                                </div>


                                <!-- <div class="pagination"> -->

                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="add-client">
                        <form class="row g-3" id="formdata" name="form">
                            <div class="col-3">
                                <label for="inputAddress2" class="form-label">Client Name:</label>
                                <input type="text" class="form-control" name="client_name" id="inputAddress2" >
                                <span></span>
                            </div>
                            <div class="col-md-3">
                                <label for="inputEmail4" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" >
                                <span></span>
                            </div>
                            <div class="col-md-3">
                                <label for="inputPassword4" class="form-label ">Phone:</label>
                                <input type="text" class="form-control numeric" name="phone" id="inputPassword4" maxlength="12">
                                <span></span>
                            </div>
                            <div class="col-3">
                                <label for="inputAddress" class="form-label">Address</label>
                                
                                <input type="text" class="form-control" name="address" id="inputAddress" maxlength="50" >
                                <span></span>

                            </div>


                            <div class="col-md-3">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose</option>
                                    <option>hi</option>
                                </select>
                                <span></span>
                            </div>
                            <div class="col-md-3">
                                <label for="inputCity" class="form-label">city</label>
                                <select id="inputCity" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>helo</option>
                                </select>
                                <span></span>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label ">Pin Code</label>
                                <input type="text" class="form-control numeric" name="pincode" id="inputZip" maxlength="6">
                                <span></span>
                            </div>

                            <div class="col-12">
                                <button type="button"  id="submit">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>

            </div>

            <script src="../assetes/js/bootstrap.min.js"></script>
            <script src="../assetes/jquery/jquery-3.7.1.min.js"></script>
            <script src="../validation.js"></script>
            <script src="ajaxcall.js"></script>

</body>

</html>