@extends('layout.template')

@section('content')
<div id="exp_content_wrapper">
    <div id="exp_content">
        <h1 id="exp_heading">MY LATEST WORK</h1><br/>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>
    <div class="p_nav">
        <ul>
            <a href='contact/index'><li>Show All</li></a>
            <a href='create.php?web=1'><li>Websites</li></a>
            <a href='portfolio.php?app=1'><li>Apps</li></a>
            <a href='portfolio.php?des=1'><li>Design</li></a>
            <a href='portfolio.php?ph=1'><li>Photography</li></a>
        </ul>
    </div>
    @if (\Session::has('success'))      
    <div class="alert alert-success">        
        <p>{{ \Session::get('success') }}</p>      
    </div><br />     
    @endif 

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
        $query = "SELECT `project_name`, `description`, `date_completed`, `photos`, `papers_published`, `company_name`,
         `position`, `duration_worked`, `e_id` FROM `experience`";

    //     // Get result back from database
        $present = mysqli_query($conn, $query);
        $tableloop = 0;
    //     echo "<table class='projects'>";
        // If result is present login page is redirected with session variable
        if(isset($_GET['show']) && $_GET['show'] == '1') {
            echo "<table class='projects'>";
            // If result is present login page is redirected with session variable
            if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                if($tableloop%3 == 0 || $tableloop == 0) {
                    echo "<tr>";
                }
                $img = $row['photos'];
                $name = $row['project_name'];
                $desc = $row['description'];
                echo
                "<form method='post' action='delete_portfolio.php'>
                <td><img src=".$row['photos']."><br/>
                <input type='text' name='image_name' value='$img'><br/>
                <input type='text' name='pname' value='$name'><br/>
                <input type='text' name='desc' value='$desc'><br/>
                <input type='checkbox' name='chkbx' value=" . $row['e_id']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </td>";
                $tableloop++;
                if($tableloop/3 == 1) {
                    echo "</tr>";
                }
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        echo "</table>";
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_2_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
    }
    if(isset($_GET['web']) && $_GET['web'] == '1') {
        echo "<table class='projects'>";
            // If result is present login page is redirected with session variable
            if (mysqli_num_rows($present) > 0) {
                $counter = 1;
            while($row = mysqli_fetch_assoc($present)) {
                if($tableloop%3 == 0 || $tableloop == 0) {
                    echo "<tr>";
                }
                $img = $row['photos'];
                $name = $row['project_name'];
                $desc = $row['description'];
                echo
                "<form method='post' action='delete_portfolio.php'>
                <td><img src=".$row['photos']."><br/>
                <input type='text' name='image_name' value='$img'><br/>
                <input type='text' name='pname' value='$name'><br/>
                <input type='text' name='desc' value='$desc'><br/>
                <input type='checkbox' name='chkbx' value=" . $row['e_id']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </td>";
                $tableloop++;
                if($tableloop/3 == 1) {
                    echo "</tr>";
                }

                if($counter >= 3) {
                    break;
                }
                ++$counter;
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        echo "</table>";
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_2_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
    }

    if(isset($_GET['app']) && $_GET['app'] == '1') { 
        echo "<table class='projects'>";
            // If result is present login page is redirected with session variable
            if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                if($tableloop%4 == 0 || $tableloop == 0) {
                    echo "<tr>";
                }
                $img = $row['photos'];
                $name = $row['project_name'];
                $desc = $row['description'];
                echo
                "<form method='post' action='delete_portfolio.php'>
                <td><img src=".$row['photos']."><br/>
                <input type='text' name='image_name' value='$img'><br/>
                <input type='text' name='pname' value='$name'><br/>
                <input type='text' name='desc' value='$desc'><br/>
                <input type='checkbox' name='chkbx' value=" . $row['e_id']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </td>";
                $tableloop++;
                if($tableloop/4 == 1) {
                    echo "</tr>";
                }
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        echo "</table>";
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_2_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
    }

    if(isset($_GET['des']) && $_GET['des'] == '1') { 
        echo "<table class='projects'>";
            // If result is present login page is redirected with session variable
            if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                if($tableloop%3 == 0 || $tableloop == 0) {
                    echo "<tr>";
                }
                $img = $row['photos'];
                $name = $row['project_name'];
                $desc = $row['description'];
                echo
                "<form method='post' action='delete_portfolio.php'>
                <td><img src=".$row['photos']."><br/>
                <input type='text' name='image_name' value='$img'><br/>
                <input type='text' name='pname' value='$name'><br/>
                <input type='text' name='desc' value='$desc'><br/>
                <input type='checkbox' name='chkbx' value=" . $row['e_id']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </td>";
                $tableloop++;
                if($tableloop/3 == 1) {
                    echo "</tr>";
                }
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        echo "</table>";
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_2_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
    }
    
    if(isset($_GET['ph']) && $_GET['ph'] == '1') { 
        echo "<table class='projects'>";
            // If result is present login page is redirected with session variable
            if (mysqli_num_rows($present) > 0) {
            while($row = mysqli_fetch_assoc($present)) {
                if($tableloop%2 == 0 || $tableloop == 0) {
                    echo "<tr>";
                }
                $img = $row['photos'];
                $name = $row['project_name'];
                $desc = $row['description'];
                echo
                "<form method='post' action='delete_portfolio.php'>
                <td><img src=".$row['photos']."><br/>
                <input type='text' name='image_name' value='$img'><br/>
                <input type='text' name='pname' value='$name'><br/>
                <input type='text' name='desc' value='$desc'><br/>
                <input type='checkbox' name='chkbx' value=" . $row['e_id']. " class='skills_checkboxes'>check and click to delete or update</input>
                <input type='submit' name='delete' value='delete'></input>
                <input type='submit' name='update' value='update'></input>
                </form>
                </td>";
                $tableloop++;
                if($tableloop/2 == 1) {
                    echo "</tr>";
                }
            }
        } else {
            echo "
            <div class='error'>
            <h1>Error Occured, Please try again later</h1>
            </div>
            ";
        }
        echo "</table>";
        if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin.com') {
            echo "<div class='edit_buttons'> 
                <a href='port_2_admin.php'><button class='btn_edit'>Add</button></a>
            </div>";
        }
    }

        mysqli_close($conn);
        @endphp

    <br /><br /><br /><br /><br />
</div>
@endsection