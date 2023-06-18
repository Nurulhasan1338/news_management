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
    <link rel="stylesheet" href="./CSS FILE/addd_emp.css">
    <script src="../ckeditor/ckeditor.js"></script>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 blk">
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

            <div class="col-md-10">
                <div class="right-section d-flex justify-content-center align-items-center w-100">
                  <div class="shadow rounded p-3 w-75">

                    <h2 class="section-title text-center">Add New Empolyee</h2>
                    <form class="item-form slide-in">
                      <div class="row">
                      <div class="form-group col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      <div class="form-group col">
                        <label for="location">Email Address</label>
                        <input type="email" class="form-control" id="location" name="location" required>
                      </div>
                    </div>      
                      <div class="form-group">
                        <label for="location">Phone no.</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                      </div>
                        <div class="form-group">
                            <label for="category">Position</label>
                            <select class="form-control" id="category" name="category" required>
                              <option value="">Select Position</option>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <option value="category3">Category 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Location</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">Select Districts</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="Alwar">Alwar</option>
                                <option value="Banswara">Banswara</option>
                                <option value="Baran">Baran</option>
                                <option value="Barmer">Barmer</option>
                                <option value="Bharatpur">Bharatpur</option>
                                <option value="Bhilwara">Bhilwara</option>
                                <option value="Bikaner">Bikaner</option>
                                <option value="Bundi">Bundi</option>
                                <option value="Chittorgarh">Chittorgarh</option>
                                <option value="Churu">Churu</option>
                                <option value="Dausa">Dausa</option>
                                <option value="Dholpur">Dholpur</option>
                                <option value="Dungarpur">Dungarpur</option>
                                <option value="Hanumangarh">Hanumangarh</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Jaisalmer">Jaisalmer</option>
                                <option value="Jalore">Jalore</option>
                                <option value="Jhalawar">Jhalawar</option>
                                <option value="Jhunjhunu">Jhunjhunu</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Karauli">Karauli</option>
                                <option value="Kota">Kota</option>
                                <option value="Nagaur">Nagaur</option>
                                <option value="Pali">Pali</option>
                                <option value="Pratapgarh">Pratapgarh</option>
                                <option value="Rajsamand">Rajsamand</option>
                                <option value="Sawai Madhopur">Sawai Madhopur</option>
                                <option value="Sikar">Sikar</option>
                                <option value="Sirohi">Sirohi</option>
                                <option value="Sri Ganganagar">Sri Ganganagar</option>
                                <option value="Tonk">Tonk</option>
                                <option value="Udaipur">Udaipur</option>
                              </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/2i4jpygrsbv7w146kk7uwe9dn6t4tdkc9d7xsjj30e1g1c3a/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
    // ClassicEditor 
    // .create(document.querySelector('#editor'))
    // .catch(error=>{
    //     console.error(error);
    // });
    // // CKEDITOR.replace('editor');

    tinymce.init({
        selector: '#pageGraph',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
        menubar: false,
        statusbar: false,
        width: '100%',
        height: 200
    });
    </script>
</body>

</html>