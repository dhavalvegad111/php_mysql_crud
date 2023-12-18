<?php
include 'header.php';

if (isset($_GET['id'])) {
  $student_info = $student_obj->view_student_by_student_id($_GET['id']);
} else {
  header('Location: index.php');
}

?>
<div class="container">
  <div class="row content">
    <h3>View Student Info</h3>
    <hr />
    <table class="table table-striped table-bordered table-hover">
      <thead>
      </thead>
      <tbody>
        <tr>
          <th>ID</th>
          <td>
            <?php if (isset($student_info['student_id'])) { echo $student_info['student_id']; } ?>
          </td>
        </tr>
        <tr>
          <th>Name</th>
          <td>
            <?php if (isset($student_info['student_name'])) { echo $student_info['student_name']; } ?>
          </td>
        </tr>
        <tr>
          <th>Email</th>
          <td>
            <?php if (isset($student_info['email_address'])) { echo $student_info['email_address'];} ?>
          </td>
        </tr>
        <tr>
          <th>Contact</th>
          <td>
            <?php if (isset($student_info['contact'])) {echo $student_info['contact']; } ?>
          </td>
        </tr>
        <tr>
          <th>Gender</th>
          <td>
            <?php if (isset($student_info['gender'])) { echo $student_info['gender']; } ?>
          </td>
        </tr>
        <tr>
          <th>Country</th>
          <td>
            <?php if (isset($student_info['country'])) { echo $student_info['country']; } ?>
          </td>
        </tr>
      </tbody>
    </table>
    <a href="index.php" class="button button-purple mt-12 pull-right">View Student List</a>
  </div>
</div>

<?php include 'footer.php'; ?>