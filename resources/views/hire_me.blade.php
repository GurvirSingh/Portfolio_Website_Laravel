@extends('layout.template')

@section('content')
<div class="hire_me_1">
    <div id="exp_content">
        <h1 id="exp_heading">HIRE ME</h1><br/>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir
            Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>


    <!-- Php code -->
    <?php
    // Define database connection variables
    $host = "localhost";
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
        $query = "SELECT `hire_me_key`,`price`, `services`, `contact_links` FROM `hire_me`";

        // Get result back from database
        $present = mysqli_query($conn, $query);
        $color = array('green', 'purple', 'pink','green', 'purple', 'pink','green', 'purple', 'pink');
        $i = 0;
        // If result is present login page is redirected with session variable
        if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                $price = $row['price'];
                $services = $row['services'];
                echo "<form action='delete_hire.php' method='post'>
                <div class='exp_date_main'>
                <div class='exp_date_main_content'>
                    <i class='fas fa-shopping-cart fa-4x " ."$color[$i]". " '></i>
                </div>
                <div class='edmc_desc' id='hire_blue'>
                <input type='text' name='price'  style='height:50px;width:100%;' value='$price'></input>
                <input type='text' name='serv'  style='height:50px;width:100%;' value='$services'></input>
                <a href='contact.html'>".$row['contact_links']. "</a>
                <input type='checkbox' name='chkbx' value=" . $row['hire_me_key']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </div>
            </div>";
            $i++;
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
                <a href='hire_me_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }

        mysqli_close($conn);
    ?>
</div>

<div class="skills_bars">
    <div id="exp_content">
        <h1 id="exp_heading">SKILLS AND KNOWLEDGE.</h1><br/>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br />
            I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>
    <div id="software1">
        <h3>SOFTWARE</h3>
        <p>HTML</p>
        <span class="numbers">80 %</span>
        <span class="progress"></span>
        <span class="progress1"></span>
        <p>CSS</p>
        <span class="numbers1">75 %</span>
        <span class="progress"></span>
        <span class="progress2"></span>
        <p>JAVASCRIPT</p>
        <span class="numbers2">60 %</span>
        <span class="progress"></span>
        <span class="progress3"></span>
        <p>PHP</p>
        <span class="numbers3">65 %</span>
        <span class="progress"></span>
        <span class="progress4"></span>
        <p>SQL</p>
        <span class="numbers4">50 %</span>
        <span class="progress"></span>
        <span class="progress5"></span>
        <p>PHOTOSHOP</p>
        <span class="numbers5">40 %</span>
        <span class="progress"></span>
        <span class="progress6"></span>
    </div>

    <div id="softwarex">
        <h3>RECOGNITIONS</h3>
        <i class="far fa-images fa-4x rec"></i> <br/><span class="reco_text">International Design Award 15th
            April,NewYork Place Magazine</span><br/>
        <i class="fas fa-pencil-alt fa-4x rec"></i> <br/><span class="reco_text">Logo Design Award Awwwards
            Website</span><br/>
        <i class="fas fa-briefcase fa-4x rec"></i> <br/><span class="reco_text">Web Design Award June 12th, Time
            Magazine</span>
    </div>

    <div id="softwarez" style="margin-top: 10px;">
        <h3>LANGUAGE SKILLS</h3>
        <div class="round">
            <div class="round_per"></div>
            <div class="round_cover1"></div>
            <span class="round_text">SPANISH<br />Advanced</span>
        </div>

        <div class="round">
            <div class="round_per1"></div>
            <div class="round_cover2"></div>
            <span class="round_text1">HINDI<br />Experienced</span>
        </div>

        <div class="round">
            <div class="round_per2"></div>
            <div class="round_cover"></div>
            <span class="round_text2">ITALIAN<br />Beginner</span>
        </div>
    </div>

    <div id="software" style="margin-top: 50px;">
        <h3>KNOWLEDGE</h3>
        <table>
            <tr>
                <td><i class="fas fa-check"></i> Google Analytics</td>
                <td><i class="fas fa-check"></i> Photo Manipulation</td>
            </tr>
            <tr>
                <td><i class="fas fa-check"></i> Install And Configure </td>
                <td><i class="fas fa-check"></i> Photo Manipulation</td>
            </tr>
            <tr>
                <td><i class="fas fa-check"></i> Digital Painting </td>
                <td><i class="fas fa-check"></i> 3d Modeling</td>
            </tr>
            <tr>
                <td><i class="fas fa-check"></i> Photo Composition</td>
                <td><i class="fas fa-check"></i> Photo Manipulation</td>
            </tr>
            <tr>
                <td><i class="fas fa-check"></i> Web Usability</td>
                <td><i class="fas fa-check"></i> Video Editing</td>
            </tr>
        </table>
    </div>

    <div id="software_bottom">
        <h2>Hobbies and Interest</h2>
        <table>
            <tr>
                <td><i class="fas fa-dumbbell fa-3x"></i> <br /> Sports</td>
                <td><i class="fas fa-photo-video fa-3x"></i> <br /> Photography</td>
                <td><i class="fas fa-star fa-3x"></i></i> <br /> Modelling</td>
                <td><i class="fas fa-film fa-3x"></i> <br /> Movies</td>
                <td><i class="fas fa-tshirt fa-3x"></i> <br /> Fashion</td>
                <td><i class="fab fa-sketch fa-3x"></i></i> <br /> Technology</td>
                <td><i class="fas fa-plane fa-3x"></i> <br /> Travel</td>
                <td><i class="fab fa-old-republic fa-3x"></i> <br /> Polo</td>
            </tr>
        </table>
    </div>

    <div class="stats">
        <div class="stats_img">
            <div class="round"><i class="fas fasstat fa-trophy fa-5x"></i></div>
            <p id="p1">1800 <br />Won</p>
            <div class="round"><i class="fas fasstat fa-thumbs-up fa-5x"></i></div>
            <p id="p2">900 <br />Happy Customers</p>
            <div class="round"><i class="fas fasstat fa-rocket fa-5x"></i></div>
            <p id="p3">220 <br />Projects Done</p>
            <div class="round"><i class="fas fasstat fa-camera-retro fa-5x"></i></div>
            <p id="p4">990 <br />Photos Made</p>
        </div>
    </div>
@endsection