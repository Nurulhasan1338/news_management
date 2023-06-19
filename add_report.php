<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="./css_file/basic.css" />
    <style>
        .right-section {
            width: 80%;
            background: #2c3c7863;
            color: white;
            border-radius: 2%;
            height: 75vh;
            overflow-y: hidden;
        }

        .form-control {
            background-color: rgb(153, 153, 153);
            color: rgb(255, 255, 255);
        }

        @media (max-width: 1000px) {
            .right-section {
                width: 95%;
                background: #2c3c7863;
                color: white;
                border-radius: 2%;
                height: auto;
                overflow-y: hidden;
                margin-bottom: 2rem;
                padding-right: 3rem;
            }
        }
    </style>
</head>

<body class="magic">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0">
                <div class="menu-section">
                    <div class="menu-content">
                        <img src="image/img.jpg" alt="Profile Image" class="profile-image" />
                        <a href="home.php" class="menu-link">Home</a>
                        <a href="profile.php" class="menu-link">Profile</a>
                        <a href="add_report.php" class="menu-link">Add Report</a>
                        <a href="all_report.php" class="menu-link">All Reports</a>
                        <a href="add_emp.php" class="menu-link">Add Employee</a>
                        <button class="logout-button">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 d-flex flex-column align-items-center pt-3">
                <h2 class="display-2 section-title text-light">Add News</h2>
                <div class="right-section">
                    <form class="item-form slide-in">
                        <div class="row gy-3 gx-3 p-lg-3">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6 col-xl form-group">
                                        <label for="exampleFormControlInput1" class="form-label">News title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="name"
                                            required />
                                    </div>
                                </div>
                                <div class="row  gx-0 gy-3">

                                    <div class="col-lg-8 col-xl form-group">
                                        <select class="form-control" id="category" aria-placeholder="location"
                                            name="category" required>
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
                                    <div class="col-lg-8 col-xl form-group">
                                        <select class="form-control" id="category" aria-placeholder="category"
                                            name="category" required>
                                            <option value="">Select Category</option>
                                            <option value="category1">Crime</option>
                                            <option value="category2">Lifestyle</option>
                                            <option value="category3">
                                                Education And Employment
                                            </option>
                                            <option value="category1">Health</option>
                                            <option value="category2">Political</option>
                                            <option value="category3">Technology</option>
                                            <option value="category1">Religion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row gx-0 gy-3">
                                    <div class="col form-group">
                                        <input type="date" class="form-control" id="date" placeholder="date" />
                                    </div>
                                    <div class="col form-group">
                                        <input type="text" class="form-control" placeholder="Key word" id="name"
                                            name="name" required />

                                    </div>
                                </div>


                                <div class="row gy-3">
                                    <div class="col-lg-11 form-group my-1">
                                        <label for="formFileMultiple" class="form-label">Images</label>
                                        <input class="form-control" type="file" id="formFileMultiple" accept="image/*"
                                            multiple />
                                    </div>
                                    <div class="col-lg-11 form-group my-1">
                                        <label for="formFileMultiple" class="form-label">Vedios</label>
                                        <input class="form-control" type="file" id="formFileMultiple" accept="vedio/*"
                                            multiple />
                                    </div>
                                </div>
                                <div class="row gy-5 p-4">
                                    <button type="submit" class="col btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>

                            <div class="col form-group">
                                <textarea class="form-control" id="pageGraph" placeholder="write the report here"
                                    rows="8"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
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
            selector: "#pageGraph",
            plugins:
                "advlist autolink lists link image charmap print preview hr anchor",
            toolbar:
                "undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image",
            menubar: false,
            statusbar: false,
            width: "100%",
            height: 370,
        });
    </script>
</body>

</html>