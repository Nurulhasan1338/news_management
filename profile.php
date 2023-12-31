<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css_file/basic.css">
    <link rel="stylesheet" href="css_file/profile.css">
</head>

<body class="magic">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0">
                <div class="menu-section">
                    <div class="menu-content">
                        <img src="image/img.jpg" alt="Profile Image" class="profile-image">
                        <a href="home.php" class="menu-link ">Home</a>
                        <a href="profile.php" class="menu-link ">Profile</a>
                        <a href="add_report.php" class="menu-link ">Add Report</a>
                        <a href="all_report.php" class="menu-link ">All Reports</a>
                        <a href="add_emp.php" class="menu-link ">Add Employee</a>
                        <button class="logout-button">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col-md-10 d-flex justify-content-center align-items-center mt-4">
                <div class="row shadow rounded detl">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="image/img.jpg" class="img-fluid"" alt="Employee Profile">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-details">
                          <div class="fs-3 block">
                            <label for="" class="fw-bolder me-3">Name: </label><span  id="name">John</span>
                          </div>  
                          <div class="fs-3 block">  
                            <label for="" class="fw-bolder me-3">Email:</label><span id="email">john.doe@example.com</span>
                          </div>
                          <div class="fs-3 block"> 
                            <label for="" class="fw-bolder me-3">Phone </label><span id="phone">1234567890</span>
                          </div>
                          <div class="fs-3 block">
                            <label for="" class="fw-bolder me-3">Position:</label><span id="position">Manager</span>
                          </div>
                          <div class="fs-3 block">
                          <label for="" class="fw-bolder me-3">Address: </label><span id="addrerss">123 Main St, City, State</span>
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