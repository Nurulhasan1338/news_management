<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="../ckeditor/ckeditor.js"></script>
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


    .right-section {
  background-color: #ffffff;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  height: 75vh;
  overflow-y: auto;
}

.section-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}


.ck-editor .ck-editor__main .ck-editor__editable{
	    height: 400px;
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
        <h2 class="section-title">Add News</h2>
    <form class="item-form slide-in">
      <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Catchy word</label>
        <input type="text" class="form-control" id="name" name="name" required>
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
      <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category" required>
          <option value="">Select Category</option>
          <option value="category1">Crime</option>
          <option value="category2">Lifestyle</option>
          <option value="category3">Education And Employment</option>
          <option value="category1">Health</option>
          <option value="category2">Political</option>
          <option value="category3">Technology</option>
          <option value="category1">Religion</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="pageGraph">Page Graph Input</label>
        <textarea class="form-control" id="pageGraph" name="pageGraph" rows="6"></textarea>
      </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image" accept="image/*">
      </div>
      <div class="form-group">
        <label for="video">Video</label>
        <input type="file" id="video" name="video" accept="video/*">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/2i4jpygrsbv7w146kk7uwe9dn6t4tdkc9d7xsjj30e1g1c3a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
