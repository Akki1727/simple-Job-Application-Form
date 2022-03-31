<?php

include "config.php";

if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $designation = $_POST['designation'];
  $email = $_POST['email'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $number = $_POST['number'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $gender = $_POST['gender'];
  $zipcode = $_POST['zipcode'];
  $rstatus = $_POST['rstatus'];
  $bdate = $_POST['bdate'];

  $basic_update_sql = 'UPDATE basic_info SET fname="' . $fname . '",lname="' . $lname . '",designation="' . $designation . '",address1="' . $address1 . '",address2="' . $address2 . '",city="' . $city . '",state="' . $state . '",zipcode="' . $zipcode . '",email="' . $email . '",number="' . $number . '",bdate="' . $bdate . '",gender="' . $gender . '",rstatus="' . $rstatus . '" WHERE id = ' . $id . '';

  $basic_update_result = $conn->query($basic_update_sql);

  if ($basic_update_result == true) {
    echo " Basic Record Updated.....";
    // header('Location:view.php');
  } else {
    echo "Error---------->" . $basic_update_sql . "---------->" . $basic_update_result . "---------->" . $conn->error;
  }

  // Education Details Update 

  $sscboard = $_POST['sscboard'];
  $sscyear = $_POST['sscyear'];
  $sscpec = $_POST['sscpec'];
  $hscboard = $_POST['hscboard'];
  $hscyear = $_POST['hscyear'];
  $hscpec = $_POST['hscpec'];
  $bachelor_coursename = $_POST['bachelor_coursename'];
  $bachelor_uni = $_POST['bachelor_uni'];
  $bachelor_year = $_POST['bachelor_year'];
  $bachelor_pec = $_POST['bachelor_pec'];
  $master_coursename = $_POST['master_coursename'];
  $master_uni = $_POST['master_uni'];
  $master_year = $_POST['master_year'];
  $master_pec = $_POST['master_pec'];


  // $edu_s_id = 'SELECT s_id FROM edu_details e INNER JOIN basic_info b on b.id = e.s_id WHERE e.s_id='.$id.'';
  // echo $edu_s_id;
  $edu_update_sql = 'UPDATE edu_details SET sscboard="' . $sscboard . '", sscyear="' . $sscyear . '",sscpec="' . $sscpec . '",hscboard="' . $hscboard . '",hscyear="' . $hscyear . '",bachelor_coursename="' . $bachelor_coursename . '",bachelor_uni="' . $bachelor_uni . '",bachelor_year="' . $bachelor_year . '",bachelor_pec="' . $bachelor_pec . '",master_coursename="' . $master_coursename . '",master_uni="' . $master_uni . '",master_year="' . $master_year . '",master_pec="' . $master_pec . '" WHERE s_id = ' . $id . '';
  // echo $edu_update_sql;

  $edu_update_result = $conn->query($edu_update_sql);
  if ($edu_update_result == true) {
    echo " edu Record Updated......";
    // header('Location:view.php');
  } else {
    echo "Error---------->" . $edu_update_sql . "---------->" . $edu_update_result . "---------->" . $conn->error;
  }

  // Work Details table Update 
  $companyname1 = $_POST['companyname1'];
  $work_designation1 = $_POST['work_designation1'];
  $from_date1 = $_POST['from_date1'];
  $to_date1 = $_POST['to_date1'];
  $companyname2 = $_POST['companyname2'];
  $work_designation2 = $_POST['work_designation2'];
  $from_date2 = $_POST['from_date2'];
  $to_date2 = $_POST['to_date2'];
  $companyname3 = $_POST['companyname3'];
  $work_designation3 = $_POST['work_designation3'];
  $from_date3 = $_POST['from_date3'];
  $to_date3 = $_POST['to_date3'];

  $work_update_sql = 'UPDATE work_exp SET companyname1="' . $companyname1 . '",work_designation1="' . $work_designation1 . '",from_date1="' . $from_date1 . '",to_date1="' . $to_date1 . '",companyname2="' . $companyname2 . '",work_designation2="' . $work_designation2 . '",from_date2="' . $from_date2 . '",to_date2="' . $to_date2 . '",companyname3="' . $companyname3 . '",work_designation3="' . $work_designation3 . '",from_date3="' . $from_date3 . '",to_date3="' . $to_date3 . '" WHERE s_id = ' . $id . '';

  $work_update_result = $conn->query($work_update_sql);
  if ($work_update_result == true) {
    echo "Work Details Updated.....";
  } else {
    echo "Error---------->" . $work_update_sql . "---------->" . $work_update_result . "---------->" . $conn->error;
  }



  // Skill Data Update 
  $checkhindi = implode(',', $_POST['hindi']);
  $checkenglish = implode(',', $_POST['english']);
  $checkgujarati = implode(',', $_POST['gujarati']);
 
  $skill_update_sql = 'UPDATE skill_details SET hindi="' . $checkhindi . '", english="' . $checkenglish . '",gujarati="' . $checkgujarati . '" WHERE s_id = ' . $id . ' ';
  $skill_update_result = $conn->query($skill_update_sql);
  if ($skill_update_result == true) {
    echo "Skill Record Updated...";
  } else {
    echo "Error---------->" . $skill_update_sql . "---------->" . $skill_update_result . "---------->" . $conn->error;
  }

  //tech Details Update

  $php = $_POST['php'];
  $mysql = $_POST['mysql'];
  $laravel = $_POST['laravel'];
  $oracle = $_POST['oracle'];

  $tech_update_sql = 'UPDATE tech_details SET php="'.$php.'",mysql="'.$mysql.'",laravel="'.$laravel.'",oracle = "'.$oracle.'" WHERE s_id = '.$id.'';
  $tech_update_result = $conn->query($tech_update_sql);
  if($tech_update_result==true){
    echo  "Tech Record Updated....";
  }else{
    echo "Error---------->" . $tech_update_sql . "---------->" . $tech_update_result . "---------->" . $conn->error;
  }


  //Referance Table Update
  $name1 = $_POST['name1'];
  $contact_number1 = $_POST['contact_number1'];
  $relation1 = $_POST['relation1'];
  $name2 = $_POST['name2'];
  $contact_number2 = $_POST['contact_number2'];
  $relation2 = $_POST['relation2'];

  $ref_update_sql = 'UPDATE ref_details SET name1="'.$name1.'",contact_number1="'.$contact_number1.'",relation1="'.$relation1.'",name2="'.$name2.'",contact_number2="'.$contact_number2.'",relation2="'.$relation2.'" WHERE s_id='.$id.'';

  $ref_update_result = $conn->query($ref_update_sql);
  if($ref_update_result==true){
    echo "Referance Table Updated.....";
  }else{
    echo "Error---------->" . $ref_update_sql . "---------->" . $ref_update_result . "---------->" . $conn->error;
  }

  //pref table Update
  $location = implode(',',$_POST['location']);
  $notice_period = $_POST['notice_period'];
  $expected_ctc = $_POST['expected_ctc'];
  $current_ctc = $_POST['current_ctc'];
  $department = $_POST['department'];

  $pref_update_sql = 'UPDATE pref_details SET location="'.$location.'",notice_period="'.$notice_period.'",expected_ctc="'.$expected_ctc.'",current_ctc="'.$current_ctc.'",department="'.$department.'" WHERE s_id='.$id.'';

  $pref_update_result = $conn->query($pref_update_sql);
  if($pref_update_result==true){
    echo "Preferance table Updated...";
  }else{
    echo "Error---------->" . $pref_update_sql . "---------->" . $pref_update_result . "---------->" . $conn->error;
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student List in PHP</title>
</head>

<body>

  <form method="POST">
    <fieldset>
      <legend>Basic Details</legend>
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $basic_sql = 'SELECT * FROM basic_info WHERE id="' . $id . '"';
        $basic_result = $conn->query($basic_sql);
        while ($basic_rows = $basic_result->fetch_assoc()) {
          $fname = $basic_rows['fname'];
          $lname = $basic_rows['lname'];
          $designation = $basic_rows['designation'];
          $email = $basic_rows['email'];
          $address1 = $basic_rows['address1'];
          $address2 = $basic_rows['address2'];
          $number = $basic_rows['number'];
          $city = $basic_rows['city'];
          $state = $basic_rows['state'];
          $gender = $basic_rows['gender'];
          $zipcode = $basic_rows['zipcode'];
          $rstatus = $basic_rows['rstatus'];
          $bdate = $basic_rows['bdate'];
      ?>

          <table class='basictable'>
            <tr>
              <td>
                <label for='firstname'>FirstName:</label>
                <input type='text' name='fname' id='fname' value="<?php echo $fname ?>">
              </td>
              <td>
                <label for='lastname'>LastName:</label>
                <input type='text' name='lname' id='lname' value="<?php echo $lname ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='designation'>Designation:</label>
                <input type='text' name='designation' id='designation' value="<?php echo $designation ?>">

              </td>
              <td>
                <label for='email'>Email:</label>
                <input type='text' name='email' id='email' value="<?php echo $email ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='address1'>Address1:</label>
                <textarea name='address1' id='address1' cols='30' rows='2' value="<?php echo $address1 ?>"><?php echo $address1 ?></textarea>
              </td>
              <td>
                <label for='address2'>Address2:</label>
                <textarea name='address2' id='address2' cols='30' rows='2' value="<?php echo $address2 ?>"><?php echo $address2 ?></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <label for='number'>Number:</label>
                <input type='text' name='number' id='number' value="<?php echo $number ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='city'>City:</label>
                <input type='text' name='city' id='city' value="<?php echo $city ?>">
              </td>
              <td>
                <label for='state'>State:</label>
                <select name='state' id='state'>
                  <option value='<?php echo $state ?>' name='gujarat'>Gujarat</option>
                  <option value='<?php echo $state ?>' name='MP'>MP</option>
                  <option value='<?php echo $state ?>' name='UP'>UP</option>
                  <option value='<?php echo $state ?>' name='Rajasthan'>Rajasthan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for='gender'>Gender:</label>
                <input type='radio' name='gender' id='male' value='male' <?php if ($gender == 'male') {
                                                                            echo "checked";
                                                                          } ?>>male
                <input type='radio' name='gender' id='female' value='female' <?php if ($gender == 'female') {
                                                                                echo "checked";
                                                                              } ?>>female
              </td>
              <td>
                <label for='zipcode'>ZipCode:</label>
                <input type='text' name='zipcode' id='zipcode' value="<?php echo $zipcode ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='rstatus'>Relation status</label>
                <select name='rstatus' id='rstatus'>
                  <option value='sinlge'>Single</option>
                  <option value='merried'>Merried</option>
                </select>
              </td>
              <td>
                <label for='date'>Date of Birth:</label>
                <input type='date' name='bdate' id='bdate' value="<?php echo $bdate ?>">
              </td>
            </tr>
          </table>
      <?php
        }
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
          $sscboard = $edu_rows['sscboard'];
          $sscyear = $edu_rows['sscyear'];
          $sscpec = $edu_rows['sscpec'];
          $hscboard = $edu_rows['hscboard'];
          $hscyear = $edu_rows['hscyear'];
          $hscpec = $edu_rows['hscpec'];
          $bachelor_coursename = $edu_rows['bachelor_coursename'];
          $bachelor_uni = $edu_rows['bachelor_uni'];
          $bachelor_year = $edu_rows['bachelor_year'];
          $bachelor_pec = $edu_rows['bachelor_pec'];
          $master_coursename = $edu_rows['master_coursename'];
          $master_uni = $edu_rows['master_uni'];
          $master_year = $edu_rows['master_year'];
          $master_pec = $edu_rows['master_pec'];
      ?>

          <table id='edu_table' class='edu_table'>
            <tr>
              <td>
                <strong>SSC Result</strong>
              </td>
            </tr>
            <tr>
              <td>
                <label for='sscboard'>Name Of Board:</label>
                <input type='text' name='sscboard' id='sscboard' value="<?php echo $sscboard ?>">
              </td>
              <td>
                <label for='sscyear'>Passing Year:</label>
                <input type='text' name='sscyear' id='sscyear' value="<?php echo $sscyear ?>">
              </td>
              <td>
                <label for='sscpec'>Percentage:</label>
                <input type='text' name='sscpec' id='sscpec' value="<?php echo $sscpec ?>">
              </td>
            </tr>
            <tr>
              <td>
                <strong>HSC Result</strong>
              </td>
            </tr>
            <tr>
              <td>
                <label for='hscboard'>HSC/Diploma Result:</label>
                <input type='text' name='hscboard' id='hscboard' value="<?php echo $hscboard ?>">
              </td>
              <td>
                <label for='hscyear'>Passing Year:</label>
                <input type='text' name='hscyear' id='hscyear' value="<?php echo $hscyear ?>">
              </td>
              <td>
                <label for='hscpec'>Percentage:</label>
                <input type='text' name='hscpec' id='hscpec' value="<?php echo $hscpec ?>">
              </td>
            </tr>
            <tr>
              <td>
                <strong>Bachelor Degree</strong>
              </td>
            </tr>
            <tr>
              <td>
                <label for='coursename'>Course Name:</label>
                <input type='text' name='bachelor_coursename' id='bachelor_coursename' value="<?php echo $bachelor_coursename ?>">
              </td>
              <td>
                <label for='university'>University:</label>
                <input type='text' name='bachelor_uni' id='bachelor_uni' value="<?php echo $bachelor_uni ?>">
              </td>
              <td>
                <label for='year'>Passing Year:</label>
                <input type='text' name='bachelor_year' id='bachelor_year' value="<?php echo $bachelor_year ?>">
              </td>
              <td>
                <label for='percentage'>Percentage:</label>
                <input type='text' name='bachelor_pec' id='bachelor_pec' value="<?php echo $bachelor_pec ?>">
              </td>
            </tr>
            <tr>
              <td>
                <strong>Master Degree</strong>
              </td>
            </tr>
            <tr>
              <td>
                <label for='coursename'>Course Name:</label>
                <input type='text' name='master_coursename' id='master_coursename' value="<?php echo $master_coursename ?>">
              </td>
              <td>
                <label for='university'>University:</label>
                <input type='text' name='master_uni' id='master_uni' value="<?php echo $master_uni ?>">
              </td>
              <td>
                <label for='year'>Passing Year:</label>
                <input type='text' name='master_year' id='master_year' value="<?php echo $master_year ?>">
              </td>
              <td>
                <label for='percentage'>Percentage:</label>
                <input type='text' name='master_pec' id='master_pec' value="<?php echo $master_pec ?>">
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
          $companyname1 = $work_rows['companyname1'];
          $work_designation1 = $work_rows['work_designation1'];
          $from_date1 = $work_rows['from_date1'];
          $to_date1 = $work_rows['to_date1'];
          $companyname2 = $work_rows['companyname2'];
          $work_designation2 = $work_rows['work_designation2'];
          $from_date2 = $work_rows['from_date2'];
          $to_date2 = $work_rows['to_date2'];
          $companyname3 = $work_rows['companyname3'];
          $work_designation3 = $work_rows['work_designation3'];
          $from_date3 = $work_rows['from_date3'];
          $to_date3 = $work_rows['to_date3'];

      ?>
          <table id='work_table' name='work_table'>
            <tr>
              <td>
                <label for='companyname'>Company Name:</label>
                <input type='text' name='companyname1' id='companyname1' value="<?php echo $companyname1 ?>">
              </td>
              <td>
                <label for='designation'>Designation:</label>
                <input type='text' name='work_designation1' id='work_designation1' value="<?php echo $work_designation1 ?>">
              </td>
              <td>
                <label for='from_date1'>From:</label>
                <input type='date' name='from_date1' id='from_date1' value="<?php echo $from_date1 ?>">
              </td>
              <td>
                <label for='to_date1'>To:</label>
                <input type='date' name='to_date1' id='to_date1' value="<?php echo $to_date1 ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='companyname'>Company Name:</label>
                <input type='text' name='companyname2' id='companyname2' value="<?php echo $companyname2 ?>">
              </td>
              <td>
                <label for='designation'>Designation:</label>
                <input type='text' name='work_designation2' id='work_designation2' value="<?php echo $work_designation2 ?>">
              </td>
              <td>
                <label for='from_date2'>From:</label>
                <input type='date' name='from_date2' id='from_date2' value="<?php echo $from_date2 ?>">
              </td>
              <td>
                <label for='to_date2'>To:</label>
                <input type='date' name='to_date2' id='to_date2' value="<?php echo $to_date2 ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label for='companyname'>Company Name:</label>
                <input type='text' name='companyname3' id='companyname3' value="<?php echo $companyname3 ?>">
              </td>
              <td>
                <label for='designation'>Designation:</label>
                <input type='text' name='work_designation3' id='work_designation3' value="<?php echo $work_designation3 ?>">
              </td>
              <td>
                <label for='from_date3'>From:</label>
                <input type='date' name='from_date3' id='from_date3' value="<?php echo $from_date3 ?>">
              </td>
              <td>
                <label for='to_date3'>To:</label>
                <input type='date' name='to_date3' id='to_date3' value="<?php echo $to_date3 ?>">
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
            <?php
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $skill_sql = 'SELECT * FROM skill_details WHERE s_id ="' . $id . '"';
              $skill_result = $conn->query($skill_sql);
              while ($skill_rows = $skill_result->fetch_assoc()) {
                $checkhindi = explode(',', $skill_rows['hindi']);
                $checkenglish = explode(',', $skill_rows['english']);
                $checkgujarati = explode(',', $skill_rows['gujarati']);
            ?>
                <table>
                  <tr>
                    <td>
                      <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'Hindi'> -->
                      <label for='hindilan'>Hindi</label>
                    </td>
                    <td>
                      <input type='checkbox' name='hindi[]' id='hindilan' <?php echo (in_array("read", $checkhindi)?'checked':'') ?> value='read' >
                      <label for='hindilan'>Read</label>
                    </td>
                    <td>
                      <input type='checkbox' name='hindi[]' id='hindilan'  <?php echo (in_array("write", $checkhindi)?'checked':'') ?> value='write'>
                      <label for='hindilan'>Write</label>
                    </td>
                    <td>
                      <input type='checkbox' name='hindi[]' id='hindilan'  <?php echo (in_array("speak", $checkhindi)?'checked':'') ?> value='speak'>
                      <label for='hindilan'>Speak</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                      <label for='englishlan'>English</label>
                    </td>
                    <td>
                      <input type='checkbox' name='english[]' id='englishlan'  <?php echo (in_array("read", $checkenglish)?'checked':'') ?> value='read'>
                      <label for='englishlan'>Read</label>
                    </td>
                    <td>
                      <input type='checkbox' name='english[]' id='englishlan'  <?php echo (in_array("write", $checkenglish)?'checked':'') ?> value='write'>
                      <label for='englishlan'>Write</label>
                    </td>
                    <td>
                      <input type='checkbox' name='english[]' id='englishlan'  <?php echo (in_array("speak", $checkenglish)?'checked':'') ?> value='speak'>
                      <label for='englishlan'>Speak</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                      <label for='gujaratilan'>Gujarati</label>
                    </td>
                    <td>
                      <input type='checkbox' name='gujarati[]' id='gujaratilan' <?php echo (in_array("read", $checkgujarati)?'checked':'') ?>  value='read'>
                      <label for='gujaratilan'>Read</label>
                    </td>
                    <td>
                      <input type='checkbox' name='gujarati[]' id='gujaratilan'  <?php echo (in_array("write", $checkgujarati)?'checked':'') ?> value='write'>
                      <label for='gujaratilan'>Write</label>
                    </td>
                    <td>
                      <input type='checkbox' name='gujarati[]' id='gujaratilan'  <?php echo (in_array("speak", $checkgujarati)?'checked':'') ?> value='speak'>
                      <label for='gujaratilan'>Speak</label>
                    </td>
                  </tr>
                </table>
            <?php }
            }

            ?>
          </fieldset>
        </td>
        <td>
          <fieldset>
            <legend>Technology Known</legend>
            <?php if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $tech_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM tech_details) s ON b.id = s.s_id WHERE b.id ="' . $id . '"';
              $tech_result = $conn->query($tech_sql);
              while ($tech_rows = $tech_result->fetch_assoc()) {
                $php = $tech_rows['php'];
                $mysql = $tech_rows['mysql'];
                $laravel = $tech_rows['laravel'];
                $oracle = $tech_rows['oracle'];

            ?>

                <table>
                  <tr>
                    <td>
                      <label for="php">PHP</label>
                      <input type="radio" name="php" id="php" value="beginner" <?php if ($php == 'beginner') {
                                                                                  echo "checked";
                                                                                } ?>>Beginner
                      <input type="radio" name="php" id="php" value="mideator" <?php if ($php == 'mideator') {
                                                                                  echo "checked";
                                                                                } ?>>Mideator
                      <input type="radio" name="php" id="php" value="export" <?php if ($php == 'export') {
                                                                                echo "checked";
                                                                              } ?>>Export
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <label for="mysql">MySql</label>
                      <input type="radio" name="mysql" id="mysql" value="beginner" <?php if ($mysql == 'beginner') {
                                                                                      echo "checked";
                                                                                    } ?>>Beginner
                      <input type="radio" name="mysql" id="mysql" value="mideator" <?php if ($mysql == 'mideator') {
                                                                                      echo "checked";
                                                                                    } ?>>Mideator
                      <input type="radio" name="mysql" id="mysql" value="export" <?php if ($mysql == 'export') {
                                                                                    echo "checked";
                                                                                  } ?>>Export
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <label for="laravel">Laravel</label>
                      <input type="radio" name="laravel" id="laravel" value="beginner" <?php if ($laravel == 'beginner') {
                                                                                          echo "checked";
                                                                                        } ?>>Beginner
                      <input type="radio" name="laravel" id="laravel" value="mideator" <?php if ($laravel == 'mideator') {
                                                                                          echo "checked";
                                                                                        } ?>>Mideator
                      <input type="radio" name="laravel" id="laravel" value="export " <?php if ($laravel == 'export') {
                                                                                        echo "checked";
                                                                                      } ?>>Export
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="oracle">oracle</label>
                      <input type="radio" name="oracle" id="oracle" value="beginner" <?php if ($oracle == 'beginner') {
                                                                                        echo "checked";
                                                                                      } ?>>Beginner
                      <input type="radio" name="oracle" id="oracle" value="mideator" <?php if ($oracle == 'mideator') {
                                                                                        echo "checked";
                                                                                      } ?>>Mideator
                      <input type="radio" name="oracle" id="oracle" value="export " <?php if ($oracle == 'export') {
                                                                                      echo "checked";
                                                                                    } ?>>Export
                    </td>
                  </tr>
                </table>
          </fieldset>
        </td>
      </tr>
    </table>
<?php }
            }
?>

<!-- Referance table Details  -->
<fieldset>
  <legend>Referance Details</legend>
  <?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ref_sql = 'SELECT * FROM basic_info b INNER JOIN(SELECT * FROM ref_details) r ON b.id = r.s_id WHERE b.id ="' . $id . '"';
    $ref_result = $conn->query($ref_sql);
    while ($ref_rows = $ref_result->fetch_assoc()) {
      $name1 = $ref_rows['name1'];
      $contact_number1 = $ref_rows['contact_number1'];
      $relation1 = $ref_rows['relation1'];
      $name2 = $ref_rows['name2'];
      $contact_number2 = $ref_rows['contact_number2'];
      $relation2 = $ref_rows['relation2'];

  ?>
      <table id="ref_table">
        <tr>
          <td>
            <label for="name1">Name:</label>
            <input type="text" name="name1" id="name1" value="<?php echo $name1 ?>">
          </td>
          <td>
            <label for="contact">Contact Number:</label>
            <input type="text" name="contact_number1" id="contact_number1" value="<?php echo $contact_number1 ?>">
          </td>
          <td>
            <label for="relation">Relation</label>
            <input type="text" name="relation1" id="relation1" value="<?php echo $relation1 ?>">
          </td>
        </tr>
        <tr>
          <td>
            <label for="name2">Name:</label>
            <input type="text" name="name2" id="name2" value="<?php echo $name2 ?>">
          </td>
          <td>
            <label for="contact">Contact Number:</label>
            <input type="text" name="contact_number2" id="contact_number2" value="<?php echo $contact_number2 ?>">
          </td>
          <td>
            <label for="relation">Relation</label>
            <input type="text" name="relation2" id="relation2" value="<?php echo $relation2 ?>">
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
      $location =  explode(',',$pref_rows['location']);
      $notice_period = $pref_rows['notice_period'];
      $expected_ctc = $pref_rows['expected_ctc'];
      $current_ctc = $pref_rows['current_ctc'];
      $department = $pref_rows['department'];

  ?>
      <table>
        <tr>
          <td rowspan="4">
            <label for="location">Preferd Location:</label>
            <select name="location[]" id="location" multiple>
              <option  <?php echo (in_array("ahmedabad", $location)?'selected':'') ?> value="ahmedabad">Ahmedabad</option>
              <option <?php echo (in_array("surat", $location)?'selected':'') ?> value="surat" >surat</option>
              <option <?php echo (in_array("gandhinagar", $location)?'selected':'') ?> >gandhinagar</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for="notice_period">Notice Period:</label>
            <input type="text" name="notice_period" id="notice_period" value="<?php echo $notice_period ?>">
          <td>
            <label for="department">Department:</label>
            <select name="department" id="department">
              <option value="design">Design</option>
              <option value="hr">HR</option>
              <option value="networking">Networking</option>
              <option value="marketing">Marketing</option>
            </select>
          </td>
          </td>
        </tr>
        <tr>

          <td>
            <label for="expected_ctc">Expected CTC:</label>
            <input type="text" name="expected_ctc" id="expected_ctc" value="<?php echo $expected_ctc ?>">
          </td>
        </tr>
        <tr>
          <td>
            <label for="current_ctc">Current CTC:</label>
            <input type="text" name="current_ctc" id="current_ctc" value="<?php echo $current_ctc ?>">
          </td>
        </tr>
      </table>
  <?php }
  }    ?>
</fieldset>

<input type="submit" value="submit" name="submit">

  </form>

</body>

</html>