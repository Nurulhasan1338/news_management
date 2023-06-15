<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: white;
    }
    .blk{
      background-color: #000000;
    }

    .menu-section {
      background-color: #000000;
      color: #ffffff;
      min-height: 100vh;
      /* position: fixed; */
      top: 0;
      left: 0;
      overflow-y: auto;
    }

    .menu-content {
      padding: 20px;
      text-align: center;
    }

    .profile-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 20px auto;
      background-color: #ffffff;
    }

    .right-section {
  background-color: #ffffff;
  padding: 20px;
  
}


    .menu-link {
      color: #ffffff;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .section-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.filter-section {
  margin-bottom: 20px;
}

.table {
  width: 100%;
}

.table th,
.table td {
  padding: 8px;
  border-bottom: 1px solid #ccc;
}

    .logout-button {
      background-color: transparent;
      border: none;
      color: #ffffff;
      text-decoration: underline;
      cursor: pointer;
      display: block;
      margin: 20px auto;
      font-weight: bold;
    }

    /* Media queries for tablet and smaller devices */
    @media (min-width: 991.98px) {
      
      .right-section {
        height: 100vh;
  overflow-y: auto;
      }
    }

    @media (max-width: 991.98px) {
      .menu-section {
        width: 100%;
        max-width: 100%;

      }

      .right-section {
        margin-left: 0;
        overflow: visible;
      }
    }
  </style>
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
        <div class="right-section">
          <h2 class="section-title">All News</h2>
          <div class="filter-section">
            <label for="location-filter">Select Location:</label>
            <select id="location-filter">
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
          <table id="employee-table" class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Position</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>Jaipur</td>
                <td>Manager</td>
              </tr>
              <tr>
                <td>Jane Smith</td>
                <td>Udaipur</td>
                <td>Supervisor</td>
              </tr>
              <!-- Add more employee rows here -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    // Filter employees based on location selection
    document.getElementById('location-filter').addEventListener('change', function() {
      var selectedLocation = this.value;
      var table = document.getElementById('employee-table');
      var rows = table.getElementsByTagName('tr');

      for (var i = 1; i < rows.length; i++) {
        var locationCell = rows[i].getElementsByTagName('td')[1];
        if (selectedLocation === '' || locationCell.textContent === selectedLocation) {
          rows[i].style.display = '';
        } else {
          rows[i].style.display = 'none';
        }
      }
    });

  </script>
</body>
</html>
