<h3><strong>Get all Employee List</strong></h3>
<table id="employees" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr  class="danger">
                <th>id</th>
                <th>fullname</th>
                <th>birthDate</th>
                <th>PhoneNumber</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
        if(isset($employees)){

            foreach($employees as $row){?>
        <tbody>
            <tr>
                <td><?php echo $row->emp_id; ?></td>
                <td><?php echo $row->emp_fullname; ?></td>
                <td><?php echo $row->emp_birth_date; ?></td>
                <td><?php echo $row->emp_phonenumber; ?></td>
                <td><?php echo $row->emp_email; ?></td>
            </tr>
        </tbody>
        <?php
      }}
        ?>
  </table>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
          $('#employees').DataTable();
          alert('OK');
       });
</script>
