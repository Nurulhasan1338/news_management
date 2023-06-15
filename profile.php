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

    .profile-section {
  padding: 20px;
  background-color: #ffffff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.profile-section .profile-photo {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 20px;
}

.profile-section .profile-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.profile-section .profile-heading {
  font-weight: bold;
}

.profile-section .profile-answer {
  color: rgba(0, 0, 0, 0.7);
}

/* Animation */
@keyframes slideIn {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.slide-in {
  animation: slideIn 0.5s ease-in-out;
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
        <div class="profile-section slide-in">
          <div class="profile-photo">
            <img src="image/img.jpg" alt="Employee Profile">
          </div>
          <div class="profile-details">
            <div class="profile-heading">Name:</div>
            <div class="profile-answer">john</div>
            <div class="profile-heading">Email:</div>
            <div class="profile-answer">john.doe@example.com</div>
            <div class="profile-heading">Phone no.:</div>
            <div class="profile-answer">1234567890</div>
            <div class="profile-heading">Position:</div>
            <div class="profile-answer">Manager</div>
            <div class="profile-heading">Address:</div>
            <div class="profile-answer">123 Main St, City, State</div>
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
