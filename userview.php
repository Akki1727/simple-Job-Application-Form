<?php

include "config.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>User Full Details</title>
</head>

<body>
  <!-- basic Details  -->
  <fieldset>
    <legend>Basic Details</legend>
    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $basic_sql = 'SELECT * FROM basic_info WHERE id="' . $id . '"';
      $basic_result = $conn->query($basic_sql);
      while ($basic_rows = $basic_result->fetch_assoc()) {
        
    ?>

        <table class='basictable'>
          <tr>
            <td>
              <label for='firstname'>FirstName:</label><strong><?php echo $basic_rows['fname'] ?></strong>
              <!-- <input type='text' name='fname' id='fname' value=""> -->
            </td>
            <td>
              <label for='lastname'>LastName:</label><strong><?php echo $basic_rows['lname'] ?></strong>
              <!-- <input type='text' name='lname' id='lname'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='designation'>Designation:</label><strong><?php echo $basic_rows['designation'] ?></strong>
              <!-- <input type='text' name='designation' id='designation'> -->

            </td>
            <td>
              <label for='email'>Email:</label><strong> <?php echo $basic_rows['email'] ?></strong>
              <!-- <input type='text' name='email' id='email'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='address1'>Address1:</label><strong><?php echo $basic_rows['address1'] ?></strong>
              <!-- <textarea name='address1' id='address1' cols='30' rows='2'></textarea> -->
            </td>
            <td>
              <label for='address2'>Address2:</label><strong><?php echo $basic_rows['address2'] ?></strong>
              <!-- <textarea name='address2' id='address2' cols='30' rows='2'></textarea> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='number'>Number:</label><strong><?php echo $basic_rows['number'] ?></strong>
              <!-- <input type='text' name='number' id='number'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='city'>City:</label><strong><?php echo $basic_rows['city'] ?></strong>
              <!-- <input type='text' name='city' id='city'> -->
            </td>
            <td>
              <label for='state'>State:</label><strong><?php echo $basic_rows['state'] ?></strong>
              <!-- <select name='state' id='state'>
                <option value='gujarat' name='gujarat'>Gujarat</option>
                <option value='MP' name='MP'>MP</option>
                <option value='UP' name='UP'>UP</option>
                <option value='Rajasthan' name='Rajasthan'>Rajasthan</option>
              </select> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='gender'>Gender:</label><strong><?php echo $basic_rows['gender'] ?></strong>
              <!-- <input type='radio' name='gender' id='male' value='male'>male
              <input type='radio' name='gender' id='female' value='female'>female -->
            </td>
            <td>
              <label for='zipcode'>ZipCode:</label><strong><?php echo $basic_rows['zipcode'] ?></strong>
              <!-- <input type='text' name='zipcode' id='zipcode'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='rstatus'>Relation status:</label><strong><?php echo $basic_rows['rstatus'] ?></strong>
              <!-- <select name='rstatus' id='rstatus'>
                <option value='sinlge'>Single</option>
                <option value='merried'>Merried</option>
              </select> -->
            </td>
            <td>
              <label for='date'>Date of Birth:</label><strong><?php echo $basic_rows['bdate'] ?></strong>
              <!-- <input type='date' name='bdate' id='bdate'> -->
            </td>
          </tr>
        </table>
        <a class="update" href="update.php?id=<?php echo $basic_rows['id']; ?>" class="btn btn-info"><i class='fas fa-edit'>UPDATE</i></a>
    <?php }
    }
    ?>
  </fieldset>

  <!-- Education Details  -->
  <fieldset>
    <legend>Education Details</legend>

    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edu_sql = 'SELECT * FROM basic_info b INNER JOIN (SELECT * FROM edu_details) e on b.id = e.s_id WHERE b.id = "' . $id . '"';
      $edu_result = $conn->query($edu_sql);
      while ($edu_rows = $edu_result->fetch_assoc()) {
    ?>

        <table id='edu_table' class='edu_table'>
          <tr>
            <td>
              <strong>SSC Result</strong>
            </td>
          </tr>
          <tr>
            <td>
              <label for='sscboard'>Name Of Board:</label><strong><?php echo $edu_rows['sscboard'] ?></strong>
              <!-- <input type='text' name='sscboard' id='sscboard'> -->
            </td>
            <td>
              <label for='sscyear'>Passing Year:</label><strong><?php echo $edu_rows['sscyear'] ?></strong>
              <!-- <input type='text' name='sscyear' id='sscyear'> -->
            </td>
            <td>
              <label for='sscpec'>Percentage:</label><strong><?php echo $edu_rows['sscpec'] ?></strong>
              <!-- <input type='text' name='sscpec' id='sscpec'> -->
            </td>
          </tr>
          <tr>
            <td>
              <strong>HSC Result</strong>
            </td>
          </tr>
          <tr>
            <td>
              <label for='hscboard'>HSC/Diploma Result:</label><strong><?php echo $edu_rows['hscboard'] ?></strong>
              <!-- <input type='text' name='hscboard' id='hscboard'> -->
            </td>
            <td>
              <label for='hscyear'>Passing Year:</label><strong><?php echo $edu_rows['hscyear'] ?></strong>
              <!-- <input type='text' name='hscyear' id='hscyear'> -->
            </td>
            <td>
              <label for='hscpec'>Percentage:</label><strong><?php echo $edu_rows['hscpec'] ?></strong>
              <!-- <input type='text' name='hscpec' id='hscpec'> -->
            </td>
          </tr>
          <tr>
            <td>
              <strong>Bachelor Degree</strong>
            </td>
          </tr>
          <tr>
            <td>
              <label for='coursename'>Course Name:</label><strong><?php echo $edu_rows['bachelor_coursename'] ?></strong>
              <!-- <input type='text' name='bachelor_coursename' id='bachelor_coursename'> -->
            </td>
            <td>
              <label for='university'>University:</label><strong><?php echo $edu_rows['bachelor_uni'] ?></strong>
              <!-- <input type='text' name='bachelor_uni' id='bachelor_uni'> -->
            </td>
            <td>
              <label for='year'>Passing Year:</label><strong><?php echo $edu_rows['bachelor_year'] ?></strong>
              <!-- <input type='text' name='bachelor_year' id='bachelor_year'> -->
            </td>
            <td>
              <label for='percentage'>Percentage:</label><strong><?php echo $edu_rows['bachelor_pec'] ?></strong>
              <!-- <input type='text' name='bachelor_pec' id='bachelor_pec'> -->
            </td>
          </tr>
          <tr>
            <td>
              <strong>Master Degree</strong>
            </td>
          </tr>
          <tr>
            <td>
              <label for='coursename'>Course Name:</label><strong><?php echo $edu_rows['master_coursename'] ?></strong>
              <!-- <input type='text' name='master_coursename' id='master_coursename'> -->
            </td>
            <td>
              <label for='university'>University:</label><strong><?php echo $edu_rows['master_uni'] ?></strong>
              <!-- <input type='text' name='master_uni' id='master_uni'> -->
            </td>
            <td>
              <label for='year'>Passing Year:</label><strong><?php echo $edu_rows['master_year'] ?></strong>
              <!-- <input type='text' name='master_year' id='master_year'> -->
            </td>
            <td>
              <label for='percentage'>Percentage:</label><strong><?php echo $edu_rows['master_pec'] ?></strong>
              <!-- <input type='text' name='master_pec' id='master_pec'> -->
            </td>
          </tr>
        </table>
    <?php }
    } ?>
  </fieldset>

  <!-- work experiance details  -->
  <fieldset>
    <legend>Work Experiance</legend>
    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $work_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM work_exp) w ON b.id = w.s_id WHERE b.id ="' . $id . '"';
      $work_result = $conn->query($work_sql);
      while ($work_rows = $work_result->fetch_assoc()) {

    ?>

        <table id='work_table' name='work_table'>
          <tr>
            <td>
              <label for='companyname'>Company Name:</label><strong><?php echo $work_rows['companyname1'] ?></strong>
              <!-- <input type='text' name='companyname1' id='companyname1'> -->
            </td>
            <td>
              <label for='designation'>Designation:</label><strong><?php echo $work_rows['work_designation1'] ?></strong>
              <!-- <input type='text' name='work_designation1' id='work_designation1'> -->
            </td>
            <td>
              <label for='from_date1'>From:</label><strong><?php echo $work_rows['from_date1'] ?></strong>
              <!-- <input type='date' name='from_date1' id='from_date1'> -->
            </td>
            <td>
              <label for='to_date1'>To:</label><strong><?php echo $work_rows['to_date1'] ?></strong>
              <!-- <input type='date' name='to_date1' id='to_date1'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='companyname'>Company Name:</label><strong><?php echo $work_rows['companyname2'] ?></strong>
              <!-- <input type='text' name='companyname2' id='companyname2'> -->
            </td>
            <td>
              <label for='designation'>Designation:</label><strong><?php echo $work_rows['work_designation2'] ?></strong>
              <!-- <input type='text' name='work_designation2' id='work_designation2'> -->
            </td>
            <td>
              <label for='from_date2'>From:</label><strong><?php echo $work_rows['from_date2'] ?></strong>
              <!-- <input type='date' name='from_date2' id='from_date2'> -->
            </td>
            <td>
              <label for='to_date2'>To:</label><strong><?php echo $work_rows['to_date2'] ?></strong>
              <!-- <input type='date' name='to_date2' id='to_date2'> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for='companyname'>Company Name:</label><strong><?php echo $work_rows['companyname3'] ?></strong>
              <!-- <input type='text' name='companyname3' id='companyname3'> -->
            </td>
            <td>
              <label for='designation'>Designation:</label><strong><?php echo $work_rows['work_designation3'] ?></strong>
              <!-- <input type='text' name='work_designation3' id='work_designation3'> -->
            </td>
            <td>
              <label for='from_date3'>From:</label><strong><?php echo $work_rows['from_date3'] ?></strong>
              <!-- <input type='date' name='from_date3' id='from_date3'> -->
            </td>
            <td>
              <label for='to_date3'>To:</label><strong><?php echo $work_rows['to_date3'] ?></strong>
              <!-- <input type='date' name='to_date3' id='to_date3'> -->
            </td>
          </tr>
        </table>
    <?php }
    }
    ?>
  </fieldset>

  <!-- Skill table details  -->
  <table>
    <tr>
      <td>
        <fieldset>
          <legend>language known</legend>
          <?php if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $skill_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM skill_details) s ON b.id = s.s_id WHERE b.id ="' . $id . '"';
            $skill_result = $conn->query($skill_sql);
            while ($skill_rows = $skill_result->fetch_assoc()) {

          ?>

              <table>
                <tr>
                  <td>
                    <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'Hindi'> -->
                    <label for='hindilan'>Hindi:</label><strong><?php echo $skill_rows['hindi'] ?></strong>
                  </td>

                </tr>
                <tr>
                  <td>
                    <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                    <label for='englishlan'>English:</label><strong><?php echo $skill_rows['english'] ?></strong>
                  </td>

                </tr>
                <tr>
                  <td>
                    <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                    <label for='gujaratilan'>Gujarati:</label><strong><?php echo $skill_rows['gujarati'] ?></strong>
                  </td>

                </tr>
              </table>
          <?php }
          }    ?>

        </fieldset>
      </td>
      <td>
        <fieldset>
          <legend>Technology Known</legend>

          <?php if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tech_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM tech_details) t ON b.id = t.s_id WHERE b.id ="' . $id . '"';
            $tech_result = $conn->query($tech_sql);
            while ($tech_rows = $tech_result->fetch_assoc()) {

          ?>
              <table>
                <tr>
                  <td>
                    <label for="php">PHP:</label><strong><?php echo $tech_rows['php'] ?></strong>
                    <!-- <input type="radio" name="php" id="php" value="beginner">Beginner
                <input type="radio" name="php" id="php" value="mideator">Mideator
                <input type="radio" name="php" id="php" value="export">Export -->
                  </td>
                </tr>
                <tr>

                  <td>
                    <label for="mysql">MySql:</label><strong><?php echo $tech_rows['mysql'] ?></strong>
                    <!-- <input type="radio" name="mysql" id="php" value="beginner">Beginner
                <input type="radio" name="mysql" id="php" value="mideator">Mideator
                <input type="radio" name="mysql" id="php" value="export">Export -->
                  </td>
                </tr>
                <tr>

                  <td>
                    <label for="laravel">Laravel:</label><strong><?php echo $tech_rows['laravel'] ?></strong>
                    <!-- <input type="radio" name="laravel" id="laravel" value="beginner">Beginner
                <input type="radio" name="laravel" id="laravel" value="mideator">Mideator
                <input type="radio" name="laravel" id="laravel" value="export">Export -->
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="oracle">oracle:</label><strong><?php echo $tech_rows['oracle'] ?></strong>
                    <!-- <input type="radio" name="oracle" id="oracle" value="beginner">Beginner
                <input type="radio" name="oracle" id="oracle" value="mideator">Mideator
                <input type="radio" name="oracle" id="oracle" value="export">Export -->
                  </td>
                </tr>
              </table>
          <?php }
          }    ?>

        </fieldset>
      </td>
    </tr>

  </table>


  <!-- Referance table Details  -->
  <fieldset>
    <legend>Referance Details</legend>
    <?php if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $ref_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM ref_details) r ON b.id = r.s_id WHERE b.id ="' . $id . '"';
      $ref_result = $conn->query($ref_sql);
      while ($ref_rows = $ref_result->fetch_assoc()) {

    ?>
        <table id="ref_table">
          <tr>
            <td>
              <label for="name1">Name:</label><strong><?php echo $ref_rows['name1'] ?></strong>
              <!-- <input type="text" name="name1" id="name1"> -->
            </td>
            <td>
              <label for="contact">Contact Number:</label><strong><?php echo $ref_rows['contact_number1'] ?></strong>
              <!-- <input type="text" name="contact_number1" id="contact_number1"> -->
            </td>
            <td>
              <label for="relation">Relation</label><strong><?php echo $ref_rows['relation1'] ?></strong>
              <!-- <input type="text" name="relation1" id="relation1"> -->
            </td>
          </tr>
          <tr>
            <td>
              <label for="name2">Name:</label><strong><?php echo $ref_rows['name2'] ?></strong>
              <!-- <input type="text" name="name2" id="name2"> -->
            </td>
            <td>
              <label for="contact">Contact Number:</label><strong><?php echo $ref_rows['contact_number2'] ?></strong>
              <!-- <input type="text" name="contact_number2" id="contact_number2"> -->
            </td>
            <td>
              <label for="relation">Relation</label><strong><?php echo $ref_rows['relation2'] ?></strong>
              <!-- <input type="text" name="relation2" id="relation2"> -->
            </td>
          </tr>
        </table>
    <?php }
    }    ?>
  </fieldset>

  <!-- preferance table details  -->
  <fieldset>
    <legend>Preferance Details</legend>
    <?php if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $pref_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM pref_details) p ON b.id = p.s_id WHERE b.id ="' . $id . '"';
      $pref_result = $conn->query($pref_sql);
      while ($pref_rows = $pref_result->fetch_assoc()) {

    ?>
    <table>

      <tr>
        <td rowspan="4">
          <label for="location">Preferd Location:</label><strong><?php echo $pref_rows['location'] ?></strong>
          <!-- <select name="location[]" id="location" multiple>
            <option value="ahmedabad">Ahmedabad</option>
            <option value="surat">surat</option>
            <option value="gandhinagar">gandhinagar</option>
          </select> -->
        </td>
      </tr>
      <tr>
        <td>
          <label for="notice_period">Notice Period:</label><strong><?php echo $pref_rows['notice_period'] ?></strong>
          <!-- <input type="text" name="notice_period" id="notice_period"> -->
        <td>
          <label for="department">Department:</label><strong><?php echo $pref_rows['department'] ?></strong>
          <!-- <select name="department" id="department">
            <option value="design">Design</option>
            <option value="hr">HR</option>
            <option value="networking">Networking</option>
            <option value="marketing">Marketing</option>
          </select> -->
        </td>
        </td>
      </tr>
      <tr>

        <td>
          <label for="expected_ctc">Expected CTC:</label><strong><?php echo $pref_rows['expected_ctc'] ?></strong>
          <!-- <input type="text" name="expected_ctc" id="expected_ctc">  -->
        </td>
      </tr>
      <tr>
        <td>
          <label for="current_ctc">Current CTC:</label><strong><?php echo $pref_rows['current_ctc'] ?></strong>
          <!-- <input type="text" name="current_ctc" id="current_ctc"> -->
        </td>
      </tr>




    </table>
    <?php }
    }    ?>
  </fieldset>
</body>

</html>