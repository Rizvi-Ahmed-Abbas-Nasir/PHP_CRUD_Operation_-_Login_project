<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CRUD_APP.css">
    <title>Student Registartion</title>
</head>
<body>
    <div class="heading">
        <h2>Student Registartion Application</h2>
        </div>
    <div class="Form_Page">
        <div class="container">
            <div class="alerts">
                <div class="alert alert-success">gg</div>
                <div class="alert alert-danger">ee</div>
            </div>
        </div>
        <div class="modal" id="update-student">
            <div class="modal-body">
                <h3>Update Student</h3>
                <div class="form-group">
                    <label for=""><b>Enter your Name</b></label>
                    <input type="text" placeholder="Enter your name" id="edit_name" class="form-control">
                    <input type="hidden" placeholder="Id" id="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""><b>Enter your Age</b></label>
                    <input type="number" placeholder="Enter your age" id="edit_age" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""><b>Enter your Country</b></label>
                    <input type="text" placeholder="Enter your country" id="edit_country" class="form-control">
                </div>
                <div class="form-group buttons">
                    <button class="btn btn-success" id="update" type="submit">Update</button>
                    <button class="btn btn-danger" type="submit" id="update_close">Close</button>
                </div>
            </div>
        </div>


        <div class="Input_Register">
            <div class="HeadingForm">
            <h2>Registartion Form</h2>
            </div>
            <div class="Input_Boxs">
                <label>Student Name</label>
                <input type="text"  class="Intput_Styling" id="name">
            </div>
           
            <div class="Input_Boxs">
                <label>Student EnrollNo</label>
                <input type="text"  class="Intput_Styling" id="enroll">
            </div>
            <div class="Input_Boxs">
                <label>Student Class</label>
                <input type="text"  class="Intput_Styling" id="stclass">
            </div>
            <div class="Input_Boxs button_ST">
                <input type="submit" value="Create" id="create" class="btn">
            </div>
        </div>
        <div class="Table">
            <div class="container">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Enroll No</th>
                                <th>Class</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="Tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="CRUD_Function.js"></script>
</body>
</html>