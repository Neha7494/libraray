<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <style>
    .innerright,
    label {
      color: rgb(16, 170, 16);
      font-weight: bold;
    }

    .container,
    .row,
    .imglogo {
      margin: auto;
    }

    .innerdiv {
      text-align: center;
      margin: 100px;
    }

    input {
      margin-left: 20px;
    }

    .leftinnerdiv {
      float: left;
      width: 25%;
    }

    .rightinnerdiv {
      float: right;
      width: 75%;
    }

    .innerright {
      background-color: #f3bd7e;
    }

    .greenbtn {
      background-color: #ffe3e3;
      color: black;
      width: 95%;
      height: 40px;
      margin-top: 8px;
    }

    .greenbtn,
    a {
      text-decoration: none;
      color: black;
      font-size: large;
    }
  </style>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script>
    function openpart(part) {
      var i;
      var x = document.getElementsByClassName("innerright");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      document.getElementById(part).style.display = "block";
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img class="imglogo" src="images/logo.png" />
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 leftinnerdiv">
        <div class="innerdiv">
          <button class="greenbtn">ADMIN</button>
          <button class="greenbtn" onclick="openpart('addbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px" />ADD BOOK</button>
          <button class="greenbtn" onclick="openpart('bookreport')"><img class="icons" src="images/icon/open-book.png" width="30px" height="30px" />BOOK REPORT</button>
          <button class="greenbtn" onclick="openpart('bookrequestapprove')"><img class="icons" src="images/icon/interview.png" width="30px" height="30px" />BOOK REQUESTS</button>
          <button class="greenbtn" onclick="openpart('addperson')"><img class="icons" src="images/icon/add-user.png" width="30px" height="30px" />ADD STUDENT</button>
          <button class="greenbtn" onclick="openpart('studentrecord')"><img class="icons" src="images/icon/monitoring.png" width="30px" height="30px" />STUDENT REPORT</button>
          <button class="greenbtn" onclick="openpart('issuebook')"><img class="icons" src="images/icon/book-issued.png" width="30px" height="30px" />ISSUE BOOK</button>
          <button class="greenbtn" onclick="openpart('bookreturn')"><img class="icons" src="images/icon/return-book.png" width="30px" height="30px" />RETURN BOOK</button>
        </div>
      </div>
      <div class="col-md-9 rightinnerdiv">
        <div id="addbook" class="innerright">
          <h2>Add Book</h2>
          <form>
            <div class="form-group">
              <label for="bookname">Book Name:</label>
              <input type="text" class="form-control" id="bookname">
            </div>
            <div class="form-group">
              <label for="authorname">Author Name:</label>
              <input type="text" class="form-control" id="authorname">
            </div>
            <div class="form-group">
              <label for="publication">Publication:</label>
              <input type="text" class="form-control" id="publication">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
        <div id="bookreport" class="innerright" style="display: none;">
          <h2>Book Report</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Publication</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Book 1</td>
                <td>Author 1</td>
                <td>Publication 1</td>
              </tr>
              <tr>
                <td>Book 2</td>
                <td>Author 2</td>
                <td>Publication 2</td>
              </tr>
              <tr>
                <td>Book 3</td>
                <td>Author 3</td>
                <td>Publication 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="bookrequestapprove" class="innerright" style="display: none;">
          <h2>Book Requests</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Book Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Student 1</td>
                <td>Book 1</td>
              </tr>
              <tr>
                <td>Student 2</td>
                <td>Book 2</td>
              </tr>
              <tr>
                <td>Student 3</td>
                <td>Book 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="addperson" class="innerright" style="display: none;">
          <h2>Add Student</h2>
          <form>
            <div class="form-group">
              <label for="studentname">Student Name:</label>
              <input type="text" class="form-control" id="studentname">
            </div>
            <div class="form-group">
              <label for="studentid">Student ID:</label>
              <input type="text" class="form-control" id="studentid">
            </div>
            <div class="form-group">
              <label for="department">Department:</label>
              <input type="text" class="form-control" id="department">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
        <div id="studentrecord" class="innerright" style="display: none;">
          <h2>Student Report</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Department</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Student 1</td>
                <td>1001</td>
                <td>Department 1</td>
              </tr>
              <tr>
                <td>Student 2</td>
                <td>1002</td>
                <td>Department 2</td>
              </tr>
              <tr>
                <td>Student 3</td>
                <td>1003</td>
                <td>Department 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="issuebook" class="innerright" style="display: none;">
          <h2>Issue Book</h2>
          <form>
            <div class="form-group">
              <label for="studentname">Student Name:</label>
              <input type="text" class="form-control" id="studentname">
            </div>
            <div class="form-group">
              <label for="bookname">Book Name:</label>
              <input type="text" class="form-control" id="bookname">
            </div>
            <button type="submit" class="btn btn-primary">Issue</button>
          </form>
        </div>
        <div id="bookreturn" class="innerright" style="display: none;">
          <h2>Return Book</h2>
          <form>
            <div class="form-group">
              <label for="studentname">Student Name:</label>
              <input type="text" class="form-control" id="studentname">
            </div>
            <div class="form-group">
              <label for="bookname">Book Name:</label>
              <input type="text" class="form-control" id="bookname">
            </div>
            <button type="submit" class="btn btn-primary">Return</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
