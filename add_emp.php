<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="./css_file/basic.css" />
    <style>
      .right-section {
        width: 65%;
        background: #2c3c7863;
        color: white;
        border-radius: 2%;
        height: auto;
        overflow-y: scroll;
      }
      .right-section::-webkit-scrollbar {
        width: 10px;
      }
      .L-lable{
        font-family: 'Fira Sans', sans-serif;
      }
      .right-section::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(255, 0, 0, 0.3);
        border-radius: 10px;
      }

      .right-section::-webkit-scrollbar-thumb {
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 6px rgba(22, 61, 178, 0.731);
      }
      .submit {
        margin-top: 14px;
      }

      .form-control {
        background-color: #110e3c;
        color: rgb(255, 255, 255);
      }

      @media (max-width: 1000px) {
        .right-section {
          width: 65%;
          background: #2c3c7863;
          color: white;
          border-radius: 2%;
          height: auto;
          overflow-y: hidden;
          margin-bottom: 2rem;
          padding-right: 3rem;
        }
        .submit {
          /* padding-left: 31px;
          padding-right: 31px;
          margin-top: 24px; */
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
              <img
                src="image/img.jpg"
                alt="Profile Image"
                class="profile-image"
              />
              <a href="home.php" class="menu-link">Home</a>
              <a href="profile.php" class="menu-link">Profile</a>
              <a href="add_report.php" class="menu-link">Add Report</a>
              <a href="all_report.php" class="menu-link">All Reports</a>
              <a href="add_emp.php" class="menu-link">Add Employee</a>
              <button class="logout-button">Logout</button>
            </div>
          </div>
        </div>
        <div class="col-lg-10 d-flex flex-column justify-content-center align-items-center pt-3">
          <h2 class="display-2 section-title text-light">Add Employee</h2>
          <div class="right-section">
            <form class="item-form slide-in">
                <div class="row">
                <div class="col-md-10 col-sm-10 col-lg-5 form-group m-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="col-md-10 col-sm-10 col-lg-5 form-group m-2">
                    <label for="location">Email Address</label>
                    <input type="email" class="form-control" id="location" name="location" required>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-10 col-sm-10 col-lg-5 form-group m-2">
                    <label for="location">Phone no.</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                  </div>
                  <div class="col-md-10 col-sm-10 col-lg-5 form-group m-2">
                    <label for="category">Position</label>
                    <select class="form-control" id="category" name="category" required>
                      <option value="">Select Position</option>
                      <option value="category1">Category 1</option>
                      <option value="category2">Category 2</option>
                      <option value="category3">Category 3</option>
                    </select>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-10 col-sm-10 col-lg-5 form-group m-2">
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
                  <div class="col-md-10 col-sm-10 col-lg-5 d-flex align-items-center m-2 mt-lg-4">
                        <button type="submit" class="col btn btn-primary submit">Submit</button>
                    </div>
                </div> 
                </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


  </body>
</html>
