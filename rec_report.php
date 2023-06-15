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
            
          <h2>Employee Details</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>Manager</td>
                <td>john.doe@example.com</td>
                <td>1234567890</td>
              </tr>
              <tr>
                <td>Jane Smith</td>
                <td>Developer</td>
                <td>jane.smith@example.com</td>
                <td>9876543210</td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>
