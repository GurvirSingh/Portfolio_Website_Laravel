@extends('layout.template')

@section('content')
 <!-- the first div -->
 <div class="skills_div_1">
    <div id="class_div_left">
        <h1>SKILLS & <br />EXPERTISE</h1>
        <p id="move_up">Full Stack Developer, Programmer, UI Designer</p>
        <img src="mypic.jpeg" alt="Gurvir's Image" height="400" width="300">
    </div>
    <!-- the second div -->
    <div id="class_div_right">
        <table>
            <tr>
                <td><i class="fas fa-paper-plane fa-3x"></i> <br /><br /> BRANDING <br /><br /> Creating Logos and Posters for your Company.</td>
                <td><i class="fas fa-ad fa-3x"></i> <br /><br /> MARKETING <br /><br /> Trending designs for a better Layout and Design.</td>
            </tr>
            <tr>
                <td><i class="fas fa-pencil-alt fa-3x"></i> <br /><br /> DESIGN <br /><br /> Maintaining the quality and productivity to please my clients.</td>
                <td><i class="fas fa-laptop-code fa-3x"></i> <br /><br /> PROGRAMMING <br /><br /> Developing applications and systems that <br /> meets the needs and streamline the work and <br />experience of the user.</td>
            </tr>
        </table>
        <h2>SMART DIGITAL SOLUTIONS - A FULL STACK DEVELOPER</h2>
        <img src="resp.png" alt="responsive devices" height="250" width="580">
    </div>
</div>

<section id="skills_section">
<div id="exp_content">
    <h1 id="exp_heading">WORK EXPERIENCE</h1>
    <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
</div>

@php
    // Define database connection variables
    $host = "127.0.0.1";
    $uname = "root";
    $pass = "";
    $db = "portfolio";

    // Connect to the database
    $conn = mysqli_connect($host, $uname, $pass, $db);

    //Check errors in connection
    if (!$conn) {
        die("Connection Error, Please try again later: " . mysqli_connect_error());
    }

        // Select email and password from database query
        $query = "SELECT `skill_key`, `skill_name`, `description`, `date_acquired` FROM `skills`";

        // Get result back from database
        $present = mysqli_query($conn, $query);
        $checkbox = 1;
        // If result is present login page is redirected with session variable
        if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                $date = $row['date_acquired'];
                $name = $row["skill_name"];
                $desc = $row["description"];
                echo
                "<form action='delete_skills.php' method='post'>
                <div class='exp_date_main'>
                <div class='exp_date_main_content'>
                
                    <input type='text' name='date'  style='height:50px;width:100%;' value='$date'></input>
                    <input type='text' name='name'  style='height:50px;width:100%;' value='$name'></input>
                </div>
                <div class='edmc_desc'>
                <input type='text' name='desc' style='height:100px;width:100%;' value='$desc'>
                <br/>
                <input type='checkbox' name='chkbx' value=" . $row['skill_key']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </div>
            </div>
            </form>";
            $checkbox++;
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='skills_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
        mysqli_close($conn);
@endphp
<!-- one block -->

<div class="skills_div_2">
<div id="exp_content">
        <h1 id="exp_heading">Education</h1>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>

@php
    // Define database connection variables
    $host = "127.0.0.1";
    $uname = "root";
    $pass = "";
    $db = "portfolio";

    // Connect to the database
    $conn = mysqli_connect($host, $uname, $pass, $db);

    //Check errors in connection
    if (!$conn) {
        die("Connection Error, Please try again later: " . mysqli_connect_error());
    }

        // Select email and password from database query
        $query = "SELECT `port_key`, `degree`, `date_acquired`, `certificates_awards` FROM `portfolio`";

        // Get result back from database
        $present = mysqli_query($conn, $query);

        // If result is present login page is redirected with session variable
        if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                $date = $row['date_acquired'];
                $name = $row["degree"];
                $desc = $row["certificates_awards"];
                echo
                "<form action='delete_port.php' method='post'>
                <div class='exp_date_main'>
                <div class='exp_date_main_content'>
                
                    <input type='text' name='date'  style='height:50px;width:100%;' value='$date'></input>
                    <input type='text' name='name'  style='height:50px;width:100%;' value='$name'></input>
                </div>
                <div class='edmc_desc'>
                <input type='text' name='desc' style='height:100px;width:100%;' value='$desc'>
                <br/>
                <input type='checkbox' name='chkbx' value=" . $row['port_key']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </div>
            </div>
            </form>";
            $checkbox++;
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }

        mysqli_close($conn);
@endphp
</div>
</section>
@endsection