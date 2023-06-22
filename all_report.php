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
    <script src="https://kit.fontawesome.com/7b463d0039.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css_file/basic.css" />
    <style>
      .right-section {
        width: 95%;
        background: #00000000;
        color: rgb(0, 0, 0);
        border-radius: 2%;
        height: auto;
        overflow-x: hidden;
        overflow-y: visible;
      
      }

      
      .submit {
        padding-left: 44px;
        padding-right: 108px;
        margin-top: -17px;
      }

      .block{
            background-color: #02042891;
        }

      .form-control {
        background-color: rgb(153, 153, 153);
        color: rgb(0, 0, 0);
      }

      @media (max-width: 1000px) {
        .right-section {
          width: 98%;
      
          color: rgb(0, 0, 0);
          border-radius: 6px;
          height: auto;
          margin-bottom: 2rem;
          overflow-x: hidden;
        }
        .submit {
          padding-left: 31px;
          padding-right: 31px;
          margin-top: 24px;
        }
        
      }
    </style>
  </head>

  <body class="magic">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 p-0 left-section">
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
        <div class="col-lg-10 d-flex flex-column align-items-center pt-3">
          <h2 class="display-4 mb-lg-4  mb-md-3 section-title">ALL NEWS</h2>
          <div class="right-section">
            <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-8 d-flex justify-content-around align-items-center filter-section">
              <label for="location-filter"  class="px-lg-4 py-lg-3 L-lable">Select Location:</label>
              <select  class="form-select w-50"id="location-filter">
                <option value="">All</option>
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
            <div class="col d-flex justify-content-lg-end justify-content-md-end align-items-center"> 
                <button type="button" class="btn btn-success my-sm-3 mx-sm-3"><i class="fa-solid fa-user-plus"></i></button> 
            </div>
            </div>

            <div class="block">

                <table class="table" id="employee-table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Position</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>Jaipur</td>
                        <td>Manager</td>
                        <td><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></td>
                      </tr>
                      
                    </tbody>
                  </table>
                
          </div>
        </div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
      // Filter employees based on location selection
      document
        .getElementById("location-filter")
        .addEventListener("change", function () {
          var selectedLocation = this.value;
          var table = document.getElementById("employee-table");
          var rows = table.getElementsByTagName("tr");

          for (var i = 1; i < rows.length; i++) {
            var locationCell = rows[i].getElementsByTagName("td")[1];
            if (
              selectedLocation === "" ||
              locationCell.textContent === selectedLocation
            ) {
              rows[i].style.display = "";
            } else {
              rows[i].style.display = "none";
            }
          }
        });
    </script>
  </body>
</html>
