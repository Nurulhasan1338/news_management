<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css_file/home.css">
    <link rel="stylesheet" href="css_file/basic.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 "style="background-color: black;">
                <div class="menu-section">
                    <div class="menu-content">
                        <img src="image/img.jpg" alt="Profile Image" class="profile-image">
                        <a href="home.php" class="menu-link">Home</a>
                        <a href="profile.php" class="menu-link">Profile</a>
                        <a href="add_report.php" class="menu-link">Add Report</a>
                        <a href="all_report.php" class="menu-link">All Reports</a>
                        <a href="add_emp.php" class="menu-link">Add Employee</a>
                        <button class="logout-button">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col-md-10 magic">
                <!-- ******* Slide Bar ********** -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item  active">
                            <img src="image/news.jpg" class="d-block imgResize" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Breaking News</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="image/news.jpg"" class=" d-block imgResize" alt="Breaking news">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Breaking News</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="image/img.jpg" class="d-block imgResize" alt="breaking News">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Breaking News</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev but" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next but" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    </button>
                </div>

                <!-- ******* Slide Bar ends ********** -->

                <div class="container emplyDetail mt-4 p-4">
                    <h2 class="text-center display-3 p-3 text-light">Employee Details</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>developer</td>
                                <td>+91938242442</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>developer</td>
                                <td>+91938242442</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>developer</td>
                                <td>+91938242442</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>developer</td>
                                <td>+91938242442</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Mark</td>
                                <td>developer</td>
                                <td>+91938242442</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!-- ****** emp list ********* -->
                <div class="container mt-2 p-4">
                    <h2 class="text-center display-3 p-3 text-light">Employee list</h2>
                    <div class="row row-cols-3">
                        <div class="card col m-3 p-0" style="width: 18rem;">
                            <img src="image/image1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-3">Name</h5>
                                <p class="card-text">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>Email : </strong>sfsdf@gmail.com
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Position: </strong>developer
                                    </li>
                                </ul>
                                </p>
                                <a href="#" class="btn btn-success">contact</a>
                            </div>
                        </div>
                        <div class="card col m-3 p-0" style="width: 18rem;">
                            <img src="image/image1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-3">Name</h5>
                                <p class="card-text">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>Email : </strong>sfsdf@gmail.com
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Position: </strong>developer
                                    </li>
                                </ul>
                                </p>
                                <a href="#" class="btn btn-success">contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>