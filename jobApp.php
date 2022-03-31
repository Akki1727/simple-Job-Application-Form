<?php

include 'config.php';

$user = $edu = $work = $skill = $tech = $ref = $pref='';
if (isset($_POST['submit'])) {
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

  if (empty($fname) || empty($lname) || empty($designation) || empty($email) || empty($address1) || empty($address2) || empty($number) || empty($city) || empty($state) || empty($gender) || empty($zipcode) || empty($rstatus) || empty($bdate)) {
    echo 'Some Basic Details are empty';
  } else {
    $sql = 'INSERT INTO basic_info (fname,lname,designation,email,address1,address2,number,city,state,zipcode,bdate,gender,rstatus) VALUES ("' . $fname . '","' . $lname . '","' . $designation . '","' . $email . '","' . $address1 . '","' . $address2 . '","' . $number . '","' . $city . '","' . $state . '","' . $zipcode . '","' . $bdate . '","' . $gender . '","' . $rstatus . '")';
    // echo $sql;
    $result = $conn->query($sql);

    if ($result == true) {
      $user = 'Data Inserted...';
    } else {
      echo 'Error---->' . $sql . '-------->' . $result . '-------->' . $conn->error;
    }
  }

  //education POST
  $s_id = $conn->insert_id;
  // echo $s_id;

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

  if (empty($sscboard) || empty($sscyear) || empty($sscpec) || empty($hscboard) || empty($hscyear) || empty($hscpec) || empty($bachelor_coursename) || empty($bachelor_uni) || empty($bachelor_year) || empty($bachelor_year) || empty($bachelor_pec)) {

    echo 'Some Education Details are empty';
  } else {

    $edu_sql = 'INSERT INTO edu_details (s_id,sscboard,sscyear,sscpec,hscboard,hscyear,hscpec,bachelor_coursename,bachelor_uni,bachelor_year,bachelor_pec,master_coursename,master_uni,master_year,master_pec) VALUES ("' . $s_id . '","' . $sscboard . '","' . $sscyear . '","' . $sscpec . '","' . $hscboard . '","' . $hscyear . '","' . $hscpec . '","' . $bachelor_coursename . '","' . $bachelor_uni . '","' . $bachelor_year . '","' . $bachelor_pec . '","' . $master_coursename . '","' . $master_uni . '","' . $master_year . '","' . $master_pec . '")';

    $edu_result = $conn->query($edu_sql);
    if ($edu_result == true) {
      $edu = 'Education Details Added...';
    } else {
      echo 'Error in Education details' . $edu_sql . '----------------->' . $edu_result . '--------->' . $conn->error;
    }
  }

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

  $work_sql = 'INSERT INTO work_exp (s_id,companyname1,work_designation1,from_date1,to_date1,companyname2,work_designation2,from_date2,to_date2,companyname3,work_designation3,from_date3,to_date3) VALUES ("' . $s_id . '","' . $companyname1 . '","' . $work_designation1 . '","' . $from_date1 . '","' . $to_date1 . '","' . $companyname2 . '","' . $work_designation2 . '","' . $from_date2 . '","' . $to_date2 . '","' . $companyname3 . '","' . $work_designation3 . '","' . $from_date3 . '","' . $to_date3 . '")';

  $work_result = $conn->query($work_sql);
  if ($work_result == true) {
    $work = 'Work Details Added';
  } else {
    echo 'Error---->' . $work_sql . '-------->' . $work_result . '-------->' . $conn->error;
  }

  // $language = $_POST['language'];
  $checkhindi = implode(',',$_POST['hindi']);
  $checkenglish =implode(',',$_POST['english']);
  $checkgujarati =implode(',',$_POST['gujarati']);
  // $chkhindi = '';
  // $chkenglish = '';
  // $chkgujarati = '';

  // foreach ($checkhindi as $chkhindi1) {
  //   $chkhindi .= $chkhindi1 . ',';
  // }
  // foreach ($checkenglish as $chkenglish1) {
  //   $chkenglish .= $chkenglish1 . ',';
  // }
  // foreach ($checkgujarati as $chkgujarati1) {
  //   $chkgujarati .= $chkgujarati1 . ',';
  // }

  $skill_sql = 'INSERT INTO skill_details (s_id,hindi,english,gujarati) VALUES ("' . $s_id . '","' . $checkhindi . '","' . $checkenglish . '","' . $checkgujarati . '")';
  // echo $skill_sql;

  $skill_result = $conn->query($skill_sql);
  // echo $skill_result;
  if ($skill_result == true) {
    $skill = 'Skill Details Added.....';
  } else {
    echo 'Error---->' . $skill_sql . '-------->' . $skill_result . '-------->' . $conn->error;
  }

  $php = $_POST['php'];
  $mysql = $_POST['mysql'];
  $laravel = $_POST['laravel'];
  $oracle = $_POST['oracle'];

  $tech_sql = 'INSERT INTO tech_details (s_id,php,mysql,laravel,oracle) VALUES ("' . $s_id . '","' . $php . '","' . $mysql . '","' . $laravel . '","' . $oracle . '")';

  $tech_result = $conn->query($tech_sql);

  if ($tech_result == true) {
    $tech = "Technology Added.....";
  } else {
    echo 'Error---->' . $tech_sql . '-------->' . $tech_result . '-------->' . $conn->error;
  }

  $name1 = $_POST['name1'];
  $contact_number1 = $_POST['contact_number1'];
  $relation1 = $_POST['relation1'];
  $name2 = $_POST['name2'];
  $contact_number2 = $_POST['contact_number2'];
  $relation2 = $_POST['relation2'];

  $ref_sql = 'INSERT INTO ref_details (s_id,name1,contact_number1,relation1,name2,contact_number2,relation2) VALUES ("' . $s_id . '","' . $name1 . '","' . $contact_number1 . '","' . $relation1 . '","' . $name2 . '","' . $contact_number2 . '","' . $relation2 . '")';

  $ref_result = $conn->query($ref_sql);

  if ($ref_result == true) {
    $ref = "Referance Details Added.....";
  } else {
    echo 'Error---->' . $ref_sql . '-------->' . $ref_result . '-------->' . $conn->error;
  }

  $location = implode(',',$_POST['location']);
  $notice_period = $_POST['notice_period'];
  $expected_ctc = $_POST['expected_ctc'];
  $current_ctc = $_POST['current_ctc'];
  $department = $_POST['department'];

  $pref_sql = 'INSERT INTO pref_details (s_id,location,notice_period,expected_ctc,current_ctc,department) VALUES ("'.$s_id.'","'.$location.'","'.$notice_period.'","'.$expected_ctc.'","'.$current_ctc.'","'.$department.'")';

  $pref_result = $conn->query($pref_sql);
  if($pref_result==true){
    $pref = "Preference Details Added.....";
  }else
  {
    echo 'Error---->' . $pref_sql . '-------->' . $pref_result . '-------->' . $conn->error;
  }



  $conn->close();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>JobApp in PHP</title>
</head>

<body>
  <form action='' method='POST'>

    <!-- basic Details  -->
    <fieldset>
      <legend>Basic Details</legend>
      <?php echo $user; ?>
      <table class='basictable'>
        <tr>
          <td>
            <label for='firstname'>FirstName:</label>
            <input type='text' name='fname' id='fname'>
          </td>
          <td>
            <label for='lastname'>LastName:</label>
            <input type='text' name='lname' id='lname'>
          </td>
        </tr>
        <tr>
          <td>
            <label for='designation'>Designation:</label>
            <input type='text' name='designation' id='designation'>

          </td>
          <td>
            <label for='email'>Email:</label>
            <input type='text' name='email' id='email'>
          </td>
        </tr>
        <tr>
          <td>
            <label for='address1'>Address1:</label>
            <textarea name='address1' id='address1' cols='30' rows='2'></textarea>
          </td>
          <td>
            <label for='address2'>Address2:</label>
            <textarea name='address2' id='address2' cols='30' rows='2'></textarea>
          </td>
        </tr>
        <tr>
          <td>
            <label for='number'>Number:</label>
            <input type='text' name='number' id='number'>
          </td>
        </tr>
        <tr>
          <td>
            <label for='city'>City:</label>
            <input type='text' name='city' id='city'>
          </td>
          <td>
            <label for='state'>State:</label>
            <select name='state' id='state'>
              <option value='gujarat' name='gujarat'>Gujarat</option>
              <option value='MP' name='MP'>MP</option>
              <option value='UP' name='UP'>UP</option>
              <option value='Rajasthan' name='Rajasthan'>Rajasthan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for='gender'>Gender:</label>
            <input type='radio' name='gender' id='male' value='male'>male
            <input type='radio' name='gender' id='female' value='female'>female
          </td>
          <td>
            <label for='zipcode'>ZipCode:</label>
            <input type='text' name='zipcode' id='zipcode'>
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
            <input type='date' name='bdate' id='bdate'>
          </td>
        </tr>
      </table>
    </fieldset>

    <!-- Education Details  -->
    <fieldset>
      <legend>Education Details</legend>
      <?php echo $edu;
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
            <input type='text' name='sscboard' id='sscboard'>
          </td>
          <td>
            <label for='sscyear'>Passing Year:</label>
            <input type='text' name='sscyear' id='sscyear'>
          </td>
          <td>
            <label for='sscpec'>Percentage:</label>
            <input type='text' name='sscpec' id='sscpec'>
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
            <input type='text' name='hscboard' id='hscboard'>
          </td>
          <td>
            <label for='hscyear'>Passing Year:</label>
            <input type='text' name='hscyear' id='hscyear'>
          </td>
          <td>
            <label for='hscpec'>Percentage:</label>
            <input type='text' name='hscpec' id='hscpec'>
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
            <input type='text' name='bachelor_coursename' id='bachelor_coursename'>
          </td>
          <td>
            <label for='university'>University:</label>
            <input type='text' name='bachelor_uni' id='bachelor_uni'>
          </td>
          <td>
            <label for='year'>Passing Year:</label>
            <input type='text' name='bachelor_year' id='bachelor_year'>
          </td>
          <td>
            <label for='percentage'>Percentage:</label>
            <input type='text' name='bachelor_pec' id='bachelor_pec'>
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
            <input type='text' name='master_coursename' id='master_coursename'>
          </td>
          <td>
            <label for='university'>University:</label>
            <input type='text' name='master_uni' id='master_uni'>
          </td>
          <td>
            <label for='year'>Passing Year:</label>
            <input type='text' name='master_year' id='master_year'>
          </td>
          <td>
            <label for='percentage'>Percentage:</label>
            <input type='text' name='master_pec' id='master_pec'>
          </td>
        </tr>
      </table>
    </fieldset>

    <!-- work experiance details  -->
    <fieldset>
      <legend>Work Experiance</legend>
      <?php echo $work;
      ?>
      <table id='work_table' name='work_table'>
        <tr>
          <td>
            <label for='companyname'>Company Name:</label>
            <input type='text' name='companyname1' id='companyname1'>
          </td>
          <td>
            <label for='designation'>Designation:</label>
            <input type='text' name='work_designation1' id='work_designation1'>
          </td>
          <td>
            <label for='from_date1'>From:</label>
            <input type='date' name='from_date1' id='from_date1'>
          </td>
          <td>
            <label for='to_date1'>To:</label>
            <input type='date' name='to_date1' id='to_date1'>
          </td>
        </tr>
        <tr>
          <td>
            <label for='companyname'>Company Name:</label>
            <input type='text' name='companyname2' id='companyname2'>
          </td>
          <td>
            <label for='designation'>Designation:</label>
            <input type='text' name='work_designation2' id='work_designation2'>
          </td>
          <td>
            <label for='from_date2'>From:</label>
            <input type='date' name='from_date2' id='from_date2'>
          </td>
          <td>
            <label for='to_date2'>To:</label>
            <input type='date' name='to_date2' id='to_date2'>
          </td>
        </tr>
        <tr>
          <td>
            <label for='companyname'>Company Name:</label>
            <input type='text' name='companyname3' id='companyname3'>
          </td>
          <td>
            <label for='designation'>Designation:</label>
            <input type='text' name='work_designation3' id='work_designation3'>
          </td>
          <td>
            <label for='from_date3'>From:</label>
            <input type='date' name='from_date3' id='from_date3'>
          </td>
          <td>
            <label for='to_date3'>To:</label>
            <input type='date' name='to_date3' id='to_date3'>
          </td>
        </tr>
      </table>
    </fieldset>

    <!-- Skill table details  -->
    <table>
      <tr>
        <td>
          <fieldset>
            <legend>language known</legend>
            <?php echo $skill; ?>
            <table>
              <tr>
                <td>
                  <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'Hindi'> -->
                  <label for='hindilan'>Hindi</label>
                </td>
                <td>
                  <input type='checkbox' name='hindi[]' id='hindilan' value='read'>
                  <label for='hindilan'>Read</label>
                </td>
                <td>
                  <input type='checkbox' name='hindi[]' id='hindilan' value='write'>
                  <label for='hindilan'>Write</label>
                </td>
                <td>
                  <input type='checkbox' name='hindi[]' id='hindilan' value='speak'>
                  <label for='hindilan'>Speak</label>
                </td>
              </tr>
              <tr>
                <td>
                  <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                  <label for='englishlan'>English</label>
                </td>
                <td>
                  <input type='checkbox' name='english[]' id='englishlan' value='read'>
                  <label for='englishlan'>Read</label>
                </td>
                <td>
                  <input type='checkbox' name='english[]' id='englishlan' value='write'>
                  <label for='englishlan'>Write</label>
                </td>
                <td>
                  <input type='checkbox' name='english[]' id='englishlan' value='speak'>
                  <label for='englishlan'>Speak</label>
                </td>
              </tr>
              <tr>
                <td>
                  <!-- <input type = 'checkbox' name = 'language' id = 'language' value = 'English'> -->
                  <label for='gujaratilan'>Gujarati</label>
                </td>
                <td>
                  <input type='checkbox' name='gujarati[]' id='gujaratilan' value='read'>
                  <label for='gujaratilan'>Read</label>
                </td>
                <td>
                  <input type='checkbox' name='gujarati[]' id='gujaratilan' value='write'>
                  <label for='gujaratilan'>Write</label>
                </td>
                <td>
                  <input type='checkbox' name='gujarati[]' id='gujaratilan' value='speak'>
                  <label for='gujaratilan'>Speak</label>
                </td>
              </tr>
            </table>
          </fieldset>
        </td>
        <td>
          <fieldset>
            <legend>Technology Known</legend>
            <?php echo $tech; ?>

            <table>
              <tr>
                <td>
                  <label for="php">PHP</label>
                  <input type="radio" name="php" id="php" value="beginner">Beginner
                  <input type="radio" name="php" id="php" value="mideator">Mideator
                  <input type="radio" name="php" id="php" value="export">Export
                </td>
              </tr>
              <tr>

                <td>
                  <label for="mysql">MySql</label>
                  <input type="radio" name="mysql" id="php" value="beginner">Beginner
                  <input type="radio" name="mysql" id="php" value="mideator">Mideator
                  <input type="radio" name="mysql" id="php" value="export">Export
                </td>
              </tr>
              <tr>

                <td>
                  <label for="laravel">Laravel</label>
                  <input type="radio" name="laravel" id="laravel" value="beginner">Beginner
                  <input type="radio" name="laravel" id="laravel" value="mideator">Mideator
                  <input type="radio" name="laravel" id="laravel" value="export">Export
                </td>
              </tr>
              <tr>
                <td>
                  <label for="oracle">oracle</label>
                  <input type="radio" name="oracle" id="oracle" value="beginner">Beginner
                  <input type="radio" name="oracle" id="oracle" value="mideator">Mideator
                  <input type="radio" name="oracle" id="oracle" value="export">Export
                </td>
              </tr>
            </table>
          </fieldset>
        </td>
      </tr>

    </table>

    <!-- Referance table Details  -->
    <fieldset>
      <legend>Referance Details</legend>
      <?php echo $ref; ?>
      <table id="ref_table">
        <tr>
          <td>
            <label for="name1">Name:</label>
            <input type="text" name="name1" id="name1">
          </td>
          <td>
            <label for="contact">Contact Number:</label>
            <input type="text" name="contact_number1" id="contact_number1">
          </td>
          <td>
            <label for="relation">Relation</label>
            <input type="text" name="relation1" id="relation1">
          </td>
        </tr>
        <tr>
          <td>
            <label for="name2">Name:</label>
            <input type="text" name="name2" id="name2">
          </td>
          <td>
            <label for="contact">Contact Number:</label>
            <input type="text" name="contact_number2" id="contact_number2">
          </td>
          <td>
            <label for="relation">Relation</label>
            <input type="text" name="relation2" id="relation2">
          </td>
        </tr>
      </table>
    </fieldset>

    <!-- preferance table details  -->
    <fieldset>
      <legend>Preferance Details</legend>
      <table>
        <?php echo $pref;?>
        <tr>
          <td rowspan="4">
            <label for="location">Preferd Location:</label>
            <select name="location[]" id="location" multiple>
              <option value="ahmedabad">Ahmedabad</option>
              <option value="surat">surat</option>
              <option value="gandhinagar">gandhinagar</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for="notice_period">Notice Period:</label>
            <input type="text" name="notice_period" id="notice_period">
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
            <input type="text" name="expected_ctc" id="expected_ctc">
          </td>
        </tr>
        <tr>
          <td>
            <label for="current_ctc">Current CTC:</label>
            <input type="text" name="current_ctc" id="current_ctc">
          </td>
        </tr>


        
       
      </table>
    </fieldset>

    <input type='submit' name='submit' value='Submit'>

  </form>
</body>

</html>