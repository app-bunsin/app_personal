
<div class="panel panel-default">
    <div class="panel-heading">
       <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Get All Employees</h3>
    </div>
    <div class="panel-body">
      <table id="employees" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <button type="submit" class="btn btn-default btn-sm" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal_iconified">Add new Employee <i class="icon-play3 position-right"></i></button><br/><br/>
            <thead>
                <tr  class="danger">
                    <th>Id</th>
                     <th>Fullname</th>
                    <th>BirthDate</th>
                    <th>PhoneNumber</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Province</th>
                    <th>Export</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
            if(isset($employees)){
                foreach($employees as $row){?>
            <tbody>
                <tr>
                    <td><?php echo $row->emp_id; ?></td>
                    <td><?php echo $row->emp_firstname; ?><?php echo $row->emp_lastname; ?></td>
                    <td><?php echo $row->emp_birth_date; ?></td>
                    <td><?php echo $row->emp_phonenumber; ?></td>
                    <td><?php echo $row->emp_email; ?></td>
                    <td><?php echo $row->sub_name ?></td>
                    <td><?php echo $row->pro_name; ?></td>
                    <td class="text-center">
                      <ul class="icons-list">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                            <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                            <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                          </ul>
                        </li>
                      </ul>
                    </td>
                    <td>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
                        <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                </tr>
            </tbody>
            <?php
          }}
            ?>
      </table>
    </div>
</div>
<!-- Add new Employees  modal -->
<div id="modal_iconified" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Add new Employees</h5>
        </div>
      <div class="modal-body">
        <form class="form-horizontal" action="insert_employees" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">FirstName:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter FirstName ..." name="FirstName">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">LastName:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter LastName ..." name="LastName">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Gender:</label>
                  <div class="col-sm-10">
                      <input type="radio" name='gender1' checked>
                      <i class="fa fa-circle-o fa-2x"></i>
                      <i class="fa fa-dot-circle-o"></i> <span>Male</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name='gender1' checked>
                      <i class="fa fa-circle-o fa-2x"></i>
                      <i class="fa fa-dot-circle-o"></i> <span>Female</span>
                  </div>
                </div>
                <div class="form-group"> <!-- Date input -->
                    <label class="control-label col-sm-2" for="date">DateOfBirth:</label>
                      <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker1'>
                          <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                             <input class="form-control" id="date" name="DateOfBirth" placeholder="MM/DD/YYY" type="text"/>
                       </div>
                     </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">PhoneNumber:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter PhoneNumber ..." name="PhoneNumber">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="pwd" placeholder="Enter Email ..." name="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Subject:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="sel1" name="Subject">
                      <option > ----- Select Subject -----</option>
                      <?php
                     foreach ($employees as  $row) {
                         echo "<option value='".$row->sub_id."'>".$row->sub_name."</option>";
                     }
                   ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Province:</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="Province">
                        <option >----- Select Province -----</option>
                          <?php
                         foreach ($employees as  $row) {
                             echo "<option value='".$row->id."'>".$row->pro_name;"</option>";
                         }
                       ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2 ">Profile :</label>
                  <div class="col-lg-10">
                      <div class="uploader">
                          <input type="file" class="file-styled-primary" name="Profile">
                          <span class="filename" style="user-select: none;">No file selected</span>
                          <span class="action btn bg-blue" style="user-select: none;">Choose File</span>
                      </div>
                  </div>
                </div>
                <div style="padding:0px;" id="modal-footer" class="modal-footer">
                    <button class="pull-left btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                    <button id="submit" class="btn btn-primary"><i class="icon-check"></i>Save</button>
                </div>

                  </div>
    </form>
      </div>
      </div>
  </div>
<!-- /iconified modal -->

  <script type="text/javascript">
    $('#employees').DataTable();
    $('#date').datepicker({ format: 'mm/dd/yyyy'});
    $('#submit').click(function(){
      
    });


</script>
