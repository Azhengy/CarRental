  <html>
  
    <head>
        <title>CPSC 304 PHP/Oracle Demonstration</title>
        <link rel="stylesheet" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    


    </head>

    <body>
        <div class="tab">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'Customer')">Customer</button>
            <button class="tablinks" onclick="openCity(event, 'Clerk')">Clerk</button>
            <button class="tablinks" onclick="openCity(event, 'Database')">Database</button>
        </div>
        
        <div id='Database' class="tabcontent">
        <h2>Reset</h2>
        <p>If you wish to reset the table press on the reset button. If this is the first time you're running this page, you MUST use reset</p>
     
        <form method="POST" action="test.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset" name="reset"></p>
        </form>

    
        <hr />
        <h2>Show Table</h2>
        

     
        <form method="GET" action="test.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="showTable" name="showTable">
            <p><input type="submit" name="tableshow"></p>
        </form>

        <hr />
        <h2>Insert into Customer</h2>
        <form method="POST" action="test.php">
            <input type="hidden" id="customerInsert" name="customerInsert">
            <ul>
			  <li><b>Cellphone</b> <input type="text" name="cellphone"></li>
			  <li><b>Name</b><input type="text" name="name"></li>
			  <li><b>Address </b><input type="text" name="address"></li>
			  <li><b>DLicense </b><input type="text" name="dlicense"></li>
              <p><input type="submit" name='insertCustomer'></p>
			</ul>
        </form>
        <hr/>

        <h2>Update Customer</h2>
        <form method="POST" action="test.php">
            <input type="hidden" id="customerUpdate" name="customerUpdate">
            <ul>
			  <li><b>Old Cellphone</b> <input type="text" name="oldcellphone"></li>
              <li><b>New Cellphone</b> <input type="text" name="newcellphone"></li>
              <p><input type="submit" name='updateCustomer'></p>
			</ul>
        </form>
        <hr/>

        <h2>Delete Customer Table</h2>
        <form method="POST" action="test.php">
            <input type="hidden" id="customerDelete" name="customerDelete">
            <p><input type="submit" value='Delete' name='deleteCustomer'></p>
        </form>
        <hr/>




        </div>
        
        <!-- CUSTOMER UI GOES HERE -->
        <div id="Customer" class="tabcontent">
            <h2>Available Vehicles</h2>
		<form method="GET" action="test.php">
        <input type="hidden" id="availableVehiclesRequest" name="availableVehiclesRequest">
			<ul>
			  <li><b>Make</b> <input type="text" name="make"></li>
			  <li><b>Model </b><input type="text" name="model"></li>
			  <li><b>Year </b><input type="text" name="year"></li>
			  <li><b>Location </b><input type="text" name="location"></li>
			  <li><b>City </b> <input type="text" name="city"></li>
              <li><b>From Time </b> <input type="text" name="toTime"></li>
			  <li><b>To Time</b> <input type="text" name="fromTime"></li>
              <p><input type="submit" name='getVehicles'></p>
			</ul>
            

		</form>

            <hr />

            <h2>Make Reservation</h2>
		<button type="button" id="newCustomer">New Customer</button>
		<form method="POST" action="test.php" id="formNewCustomer">
            <input type="hidden" id="newCustomerReserveRequest" name="newCustomerReserveRequest">
			<ul> 
			  <li><b>Name</b> <input type="text" name="name"></li>
			  <li><b>Cellphone </b><input type="text" name="cellphone"></li>
			  <li><b>Address </b><input type="text" name="address"></li>
			  <li><b>Driver License No. </b><input type="text" name="dlicense"></li>
			  <li><b>Vehicle Name</b> <input type="text" name="vtname"></li>
			  <li><b>From Time</b><input type="text" name="fromTime"></li>
			  <li><b>To Time</b><input type="text" name="toTime"></li>
              <p><input type="submit" name='makeReservationNewCustomer'></p>
			</ul>
		</form>
		<button type="button" id="existingCustomer">Existing Customer</button>
		<form method="POST" action="test.php" id="formExistingCustomer">
            <input type="hidden" id="existingCustomerReserveRequest" name="existingCustomerReserveRequest">
			<ul>
			  <li><b>Cellphone </b><input type="text" name="cellphone"></li>
			  <li><b>Vehicle Name</b> <input type="text" name="vtname"></li>
			  <li><b>From Time</b><input type="text" name="fromTime"></li>
			  <li><b>To Time</b><input type="text" name="toTime"></li>
              <p><input type="submit" name='makeReservationExistingCustomer'></p>
			</ul>
		</form>

            <hr />
        </div>

        <!-- CLERK UI GOES HERE -->

        <div id="Clerk" class="tabcontent">
            <h2>Rent Vehicle</h2>
		<button type="button" id="rentWithReservation"> With Reservation </button>		
		<form method="POST" action="test.php" id="formWithReservation">
		    <input type="hidden" id="rentWithReservationRequest" name="rentWithReservationRequest">
			<ul>
			  <li><b>Confirmation No. </b><input type="text" name="confNo"></li>
              <li><b>Card Name</b> <input type="text" name="cardName"></li>
              <li><b>Card No.</b> <input type="text" name="cardNo"></li>
              <li><b>Exp Date.</b> <input type="text" name="expDate"></li>
			  <p><input type="submit" name='rentWithReservation'></p>
			</ul>
		</form>
		<button type="button" id="rent"> Without Reservation </button>		
		<form method="POST" action="test.php" id="formWithoutReservation">
            <input type="hidden" id="rentRequest" name="rentRequest">
			<ul>
			  <li><b>Cellphone </b><input type="text" name="cellphone"></li>
			  <li><b>Vehicle Name</b> <input type="text" name="vtname"></li>
			  <li><b>From Time</b><input type="text" name="fromTime"></li>
			  <li><b>To Time</b><input type="text" name="toTime"></li>
              <li><b>Card Name</b> <input type="text" name="cardName"></li>
              <li><b>Card No.</b> <input type="text" name="cardNo"></li>
              <li><b>Exp Date.</b> <input type="text" name="expDate"></li>
              <p><input type="submit" name='rent'></p>
			</ul>
		</form>
        <hr />

            <h2>Return Vehicle</h2>
		<form method="POST"  action="test.php" id="returnVehicle">
		    <input type="hidden" id="returnRequest" name="returnRequest">
			<ul>
			  <li><b>Rent ID</b> <input type="text" name="rid"></li>
			  <li><b>Today Date and Time </b><input type="text" name="date"></li>
			  <li><b>Odometer </b><input type="text" name="odometer"></li>
			  <li><b>Full Tank </b> <input type="text" name="fulltank"></li>
			  <p><input type="submit" name='return'></p>
			</ul>
		</form>
    
        <hr />
        <h2>Daily Rentals</h2>
        <form method="GET" action="test.php">
            <input type="hidden" id="dailyRentalRequest" name="dailyRentalRequest">
            <p><input type="submit" value = "Get Report" name='dailyrental'></p>
        </form>
        <hr />
        <h2>Daily Rentals by Branch</h2>
        <form method="GET" action="test.php">
            <input type="hidden" id="dailyRentalBranchRequest" name="dailyRentalBranchRequest">
            <li><b>Location </b> <input type="text" name="location"></li>
            <p><input type="submit" value = "Get Report" name='dailyrentalbranch'></p>
        </form>
        <hr />
        <h2>Daily Returns </h2>
        <form method="GET" action="test.php">
            <input type="hidden" id="dailyReturnRequest" name="dailyReturnRequest">
            <p><input type="submit" value = "Get Report" name='dailyreturn'></p>
        </form>
        <hr />
        <h2>Daily Returns by Branch</h2>
        <form method="GET" action="test.php">
            <input type="hidden" id="dailyReturnBranchRequest" name="dailyReturnBranchRequest">
            <li><b>Location </b> <input type="text" name="location"></li>
            <p><input type="submit" value = "Get Report" name='dailyreturnbranch'></p>
        </form>	

        <hr />

        </div>

        <?php


        
		//this tells the system that it's no longer just parsing html; it's now parsing PHP
       
        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr); 
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection. 
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table :<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[""] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]" 
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example, 
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_jaychong", "a18097155", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequest() {
            global $db_conn;

            $old_name = $_POST['oldName'];
            $new_name = $_POST['newName'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE demoTable SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
            OCICommit($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table

            executePlainSQL("DROP TABLE Customer CASCADE CONSTRAINTS");
            executePlainSQL("DROP TABLE VehicleType CASCADE CONSTRAINTS");
            executePlainSQL("DROP TABLE Reservation CASCADE CONSTRAINTS");
            executePlainSQL("DROP TABLE Rent CASCADE CONSTRAINTS");
            executePlainSQL("DROP TABLE Vehicle CASCADE CONSTRAINTS");
            executePlainSQL("DROP TABLE Return CASCADE CONSTRAINTS");



            // Create new table
            echo "<br> creating new table <br>";

            executePlainSQL("CREATE TABLE Customer (
                cellphone	INTEGER,
                Name		CHAR(20),
                address	CHAR(30),
                dlicense	INTEGER,
                PRIMARY KEY (cellphone))
            ");

            executePlainSQL("CREATE TABLE VehicleType (
                vtname	CHAR(20),
                features	CHAR(100),
                wrate		REAL,
                drate		REAL,
                hrate		REAL,
                wirate		REAL,
                dirate		REAL,
                hirate		REAL,
                krate		REAL,
                PRIMARY KEY (vtname))
            ");

            executePlainSQL("CREATE TABLE Reservation (
                confNo		INTEGER,
                vtname	CHAR(20),
                cellphone	INTEGER,
                fromTime	TIMESTAMP,
                toTime		TIMESTAMP,
                PRIMARY KEY (confNo),
                FOREIGN KEY (vtname) REFERENCES VehicleType,
                FOREIGN KEY (cellphone) REFERENCES Customer)
            ");
            executePlainSQL("CREATE TABLE Rent (
                rid		INTEGER,
                vid		INTEGER,
                cellphone	INTEGER,
                fromTime	TIMESTAMP,
                toTime		TIMESTAMP,
                odometer	INTEGER,
                cardName	CHAR(20),
                cardNo		INTEGER,
                ExpDate	DATE,
                confNo	INTEGER,
                PRIMARY KEY (rid),
                FOREIGN KEY (cellphone) REFERENCES Customer,
                FOREIGN KEY (confNo) REFERENCES Reservation)
            ");
            executePlainSQL("CREATE TABLE Vehicle (
                vid		INTEGER,
                vlicense	CHAR(6),
                make		CHAR(20),
                model		CHAR(20),
                year		CHAR(4),
                color		CHAR(12),
                odometer	INTEGER,
                status		CHAR(10),
                vtname	CHAR(20),
                location 	CHAR(20),
                city		CHAR(20),
                PRIMARY KEY (vid),
                FOREIGN KEY (vtname) REFERENCES VehicleType)
            ");
            
            executePlainSQL("CREATE TABLE Return (
                rid		    INTEGER,
                rtime		TIMESTAMP,
                odometer	INTEGER,
                fullTank 	INTEGER,
                rvalue		REAL,
                PRIMARY KEY (rid),
                FOREIGN KEY (rid) REFERENCES Rent)
            
            ");

            executePlainSQL("INSERT INTO Customer 
            VALUES (6041234567, 'Joe Mama', '1234 Easy Street', 123456789)
            ");
            executePlainSQL("INSERT INTO VehicleType
            VALUES ('Toyota 1', 'Steering, Wheels, Windows,', 25.00, 2.55, 0.58, 30.0, 3.00, 0.30, 15.00) 
            ");
            executePlainSQL("INSERT INTO Reservation
            VALUES (123456, 'Toyota 1', 6041234567, TO_TIMESTAMP('2019-11-22 09:00:00', 'YYYY-MM-DD HH24:MI:SS'), TO_TIMESTAMP('2019-11-23 09:00:00', 'YYYY-MM-DD HH24:MI:SS'))
            ");
             executePlainSQL("INSERT INTO Reservation
             VALUES (123457, 'Toyota 1', 6041234567, TO_TIMESTAMP('2019-11-22 09:00:00', 'YYYY-MM-DD HH24:MI:SS'), TO_TIMESTAMP('2019-11-23 09:00:00', 'YYYY-MM-DD HH24:MI:SS'))
             ");
            executePlainSQL("INSERT INTO Rent
            VALUES (123456, 123456, 6041234567, TO_TIMESTAMP('2019-11-22 09:00:00', 'YYYY-MM-DD HH24:MI:SS'), TO_TIMESTAMP('2019-11-23 09:00:00', 'YYYY-MM-DD HH24:MI:SS'), 50000, 'Joe Mama', 1234567891011, TO_DATE('2022-09-02', 'YYYY-MM-DD'), 123456)
            ");
            executePlainSQL("INSERT INTO Vehicle
            VALUES (123456, '1A2B3C', 'Toyota', 'Camry', '2010', 'Red', 50000, 'for_rent', 'Toyota 1', 'Kingsway', 'Vancouver')   
            ");
            
            executePlainSQL("INSERT INTO Return
            VALUES (123456, TO_TIMESTAMP('2019-11-24 09:00:00', 'YYYY-MM-DD HH24:MI:SS'), 60000, 1, 675.55)
            ");
            OCICommit($db_conn);
        }

        function handleInsertRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['insNo'],
                ":bind2" => $_POST['insName']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into demoTable values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM demoTable");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in demoTable: " . $row[0] . "<br>";
            }
        }

        function handleVehicleRequest() {
            global $db_conn;

            $make = $_GET['make'];
            $model = $_GET['model'];
            $year = $_GET['year'];
            $location = $_GET['location'];
            $city = $_GET['city'];
            $toTime = $_GET['toTime'];
            $fromTime = $_GET['fromTime'];


            // you need the wrap the old name and new name values with single quotations
            $result = executePlainSQL("SELECT make, model, year, location, city 
            FROM Vehicle 
            WHERE (make ='" . $make . "' OR model = '". $model . "' OR
            year = '". $year . "' OR location = '". $location . "' OR
            city = '". $city . "') AND status ='for_rent'
            MINUS
            SELECT v.make, v.model, v.year, v.location, v.city
            FROM Vehicle v, Reservation r
            WHERE (r.fromTime < '". $toTime ."' AND r.toTime > '". $fromTime ."') AND r.vtname = v.vtname
            ORDER BY location
            ");

            
            $count = 0;
            echo "<h2 id='title'>This Users Feedback</h2>";
            echo "<table border='2'>";
            echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Location</th><th>City</th></tr>";
            while ($row=oci_fetch_row($result))
            {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                $count++;
            }
            echo "</table></br>"; 
            echo "The number of available vehicles is $count";
            OCICommit($db_conn);
        }

        function handleReservationRequestNew() {
            global $db_conn;

            $cellphone = $_POST['cellphone'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $dlicense = $_POST['dlicense'];

            $fromTime = $_POST['fromTime'];
            $toTime = $_POST['toTime'];
            $vtname = $_POST['vtname'];
            $confNo = rand(0, 999999);
            
            $tuple = array(
                ":bind1" => $_POST['cellphone'],
                ":bind2" => $_POST['name'],
                ":bind3" => $_POST['address'],
                ":bind4" => $_POST['dlicense'],
                ":bind5" => $_POST['fromTime'],
                ":bind6" => $_POST['toTime'],
                ":bind7" => $_POST['vtname'],
                ":bind8" => $confNo
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("INSERT INTO Customer 
            VALUES (:bind1, :bind2, :bind3, :bind4)", $alltuples);

            executeBoundSQL("INSERT INTO Reservation 
            VALUES (:bind8, :bind7, :bind1, TO_TIMESTAMP(:bind5, 'YYYY-MM-DD HH24:MI:SS'), TO_TIMESTAMP(:bind6, 'YYYY-MM-DD HH24:MI:SS'))", $alltuples);

            $res = executePlainSQL("SELECT v.make, v.model, v.year, v.location
            FROM Reservation r, Vehicle v
            WHERE r.confNo = '". $confNo ."' AND v.vtname = '". $vtname ."'
            ");

            while ($row=oci_fetch_row($res)) {
                $make = $row[0];
                $model = $row[1];
                $year = $row[2];
                $location = $row[3];
            }

            echo "Reservation made! Your confirmation number is $confNo. You are renting the $year $make $model from $fromTime to $toTime Your vehicle will be ready for pick up at $location on $fromTime.";

            OCICommit($db_conn);
            
        }

        function handleReservationRequestExisting() {
            global $db_conn;
            $result = executePlainSQL("SELECT MAX(confNo) 
            FROM Reservation");
            $confNo = rand(0, 999999);
            $fromTime = $_POST['fromTime'];
            $toTime = $_POST['toTime'];
            $vtname = $_POST['vtname'];
            
            $tuple = array(
                ":bind3" => $_POST['cellphone'],
                ":bind4" => $_POST['fromTime'],
                ":bind5" => $_POST['toTime'],
                ":bind2" => $_POST['vtname'],
                ":bind1" => $confNo
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("INSERT INTO Reservation 
            VALUES (:bind1, :bind2, :bind3, TO_TIMESTAMP(:bind4, 'YYYY-MM-DD HH24:MI:SS'), TO_TIMESTAMP(:bind5, 'YYYY-MM-DD HH24:MI:SS'))", $alltuples);

            $res = executePlainSQL("SELECT v.make, v.model, v.year, v.location
            FROM Reservation r, Vehicle v
            WHERE r.confNo = '". $confNo ."' AND v.vtname = '". $vtname ."'
            ");

            while ($row=oci_fetch_row($res)) {
                $make = $row[0];
                $model = $row[1];
                $year = $row[2];
                $location = $row[3];
            }

            echo "Reservation made! Your confirmation number is $confNo. You are renting the $year $make $model from $fromTime to $toTime Your vehicle will be ready for pick up at $location on $fromTime.";
            OCICommit($db_conn);
            return $confNo;

        }

    function showTable() {
        global $db_conn;
        $test = executePlainSQL("SELECT *
                FROM Reservation");
                echo "<h2 id='title'>Reservation</h2>";
                echo "<table border='2'>";
                echo "<tr><th>confNo</th><th>vtName</th><th>cellphone</th><th>fromTime</th><th>toTime</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                }
                echo "</table></br>"; 
        $test = executePlainSQL("SELECT *
                FROM Customer");
                echo "<h2 id='title'>Customer</h2>";
                echo "<table border='2'>";
                echo "<tr><th>Cellphone</th><th>Name</th><th>Address</th><th>dLicense</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                }
                echo "</table></br>"; 

        $test = executePlainSQL("SELECT *
                FROM VehicleType");
                echo "<h2 id='title'>VehicleType</h2>";
                echo "<table border='2'>";
                echo "<tr><th>vtName</th><th>Features</th><th>wrate</th><th>drate</th>
                <th>hrate</th><th>wirate</th><th>dirate</th><th>hirate</th><th>krate</th></tr>";

                while ($row=oci_fetch_row($test))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
                    <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>";
                }
                echo "</table></br>"; 

        $test = executePlainSQL("SELECT *
                FROM Rent");
                echo "<h2 id='title'>Rent</h2>";
                echo "<table border='2'>";
                echo "<tr><th>rid</th><th>vid</th><th>cellphone</th><th>fromTime</th>
                <th>toTime</th><th>odometer</th><th>cardName</th><th>cardNo</th><th>expDate</th><th>confNo</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
                    <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td></tr>";
                }
                echo "</table></br>"; 

        $test = executePlainSQL("SELECT *
                FROM Vehicle");
                echo "<h2 id='title'>Vehicle</h2>";
                echo "<table border='2'>";
                echo "<tr><th>vid</th><th>vlicense</th><th>make</th><th>model</th>
                <th>year</th><th>color</th><th>odometer</th><th>status</th><th>vtname</th><th>location</th><th>city</th></tr>";
                while ($row=oci_fetch_row($test))
                {

                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
                    <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td></tr>";
                }
                echo "</table></br>"; 

        $test = executePlainSQL("SELECT *
                FROM Return");
                echo "<h2 id='title'>Return</h2>";
                echo "<table border='2'>";
                echo "<tr><th>rid</th><th>rtime</th><th>odometer</th><th>fulltank</th>
                <th>rvalue</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                }
                echo "</table></br>"; 

        OCICommit($db_conn);

    }

    function handleRentReservationRequest($confNo = null) {
            global $db_conn;
            echo "$confNo";
            $rid = rand(0, 999999);
            if ($confNo === null) {
                $confNo = $_POST['confNo'];
            }
            echo "$confNo";
            $tuple = array(
                ":bind1" => $confNo,
                ":bind2" => $_POST['cardName'],
                ":bind3" => $_POST['cardNo'],
                ":bind4" => $_POST['expDate'],
                ":bind5" => $rid
            );

            $alltuples = array (
                $tuple
            );

            $res = executePlainSQL("SELECT *
                FROM Reservation r, Vehicle v
                WHERE r.confNo = '". $confNo ."' AND r.vtname = v.vtname");

            while ($row=oci_fetch_row($res))
            {
                $vid = $row[5];
            }

            
            $vid_tup = array(
                ":bind1" => $vid
            );

            $tuples = array (
                $vid_tup
            );


            executeBoundSQL("INSERT INTO Rent 
                SELECT :bind5, v.vid, r.cellphone, r.fromTime, r.toTime, v.odometer, :bind2, :bind3, TO_DATE(:bind4, 'YYYY-MM-DD'), :bind1 
                FROM Reservation r, Vehicle v
                WHERE r.confNo = :bind1 AND r.vtname = v.vtname", $alltuples);


            executeBoundSQL("UPDATE Vehicle
            SET status = 'renting'
            WHERE vid = :bind1", $tuples);

            $res = executePlainSQL("SELECT r.fromTime, v.year, v.make, v.model, v.location, r.toTime - r.fromTime AS period
            FROM Rent r, Vehicle v
            WHERE r.confNo = '". $confNo ."' AND r.vid = v.vid 
            ");

            while ($row=oci_fetch_row($res))
            {
                $fromTime = $row[0];
                $year = $row[1];
                $make = $row[2];
                $model = $row[3];
                $location = $row[4];
                $difference = $row[5];
            }

            echo "Client is now renting the $year $make $model starting from $fromTime. The rental is scheduled to last for $difference. The confirmation number is $confNo.";

            OCICommit($db_conn);
	
}

    function handleRentRequest() {
        // Make Reservation
            $confNo = handleReservationRequestExisting();
        // make rent request with conf no
            handleRentReservationRequest($confNo);

}
    function handleReturnRequest() {
        global $db_conn;
        
            $rid = $_POST['rid'];
            $returntime = $_POST['date'];
            // GENERATE VALUE NUMBER HERE
            $v = executePlainSQL("SELECT vt.wrate, vt.wirate, vt.drate, vt.dirate, vt.hrate, vt.hirate FROM Rent r, Vehicle v, VehicleType vt
            WHERE r.rid = '". $rid ."' AND r.vid = v.vid AND v.vtname = vt.vtname
            ");

            while ($row = oci_fetch_row($v)) {
                $wrate = $row[0];
                $wirate = $row[1];
                $drate = $row[2];
                $dirate = $row[3];
                $hrate = $row[4];
                $hirate = $row[5];
            }

            $x = executePlainSQL("SELECT confNo 
            FROM Rent
            WHERE rid = '". $rid ."'
            ");

            while ($row = oci_fetch_row($x)) {
                $confNo = $row[0];
            }

            $m = executePlainSQL("SELECT (extract(day from period)) / 7 weeks, mod(extract(day from period),7) days, extract( hour from period) hours
            FROM (SELECT r.toTime - r.FromTime period FROM Rent r WHERE r.confNo = '". $confNo ."')
            ");

            while ($row = oci_fetch_row($m)) {
                $weeks = $row[0];
                $days = $row[1];
                $hours = $row[2];
            }
            
          
            $rentalrate = ($wrate * $weeks) + ($drate * $days) + ($hrate * $hours);
            $insurancerate = ($wirate * $weeks) + ($dirate * $days) + ($hrate * $hours);
            $value = $rentalrate + $insurancerate;

            $tuple = array(
                ":bind1" => $_POST['rid'],
                ":bind2" => $_POST['date'],
                ":bind3" => $_POST['odometer'],
                ":bind4" => $_POST['fulltank'],
                ":bind5" => $value            
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("INSERT INTO Return
            VALUES (:bind1, TO_TIMESTAMP(:bind2, 'YYYY-MM-DD HH24:MI:SS'),  :bind3, :bind4, :bind5)", $alltuples);

            echo "Rental Rate = $rentalrate (wrate:$wrate * weeks:$weeks + drate:$drate * days:$days + hrate:$hrate * hours:$hours)<br>";
            echo "Insurance Rate = $insurancerate (wirate:$wirate * weeks:$weeks + dirate:$dirate * days:$days + hrate:$hrate * hours:$hours)<br>";
            echo "Value = $value (rental rate:$rentalrate + insurance rate:$insurancerate)<br>" ;
            echo "You returned your vehicle! Confirmation number is $confNo and the return time is $returntime";

        OCICommit($db_conn);    
}

    function handleDailyReturnRequest() {
        global $db_conn;
        $test = executePlainSQL("SELECT v.location, v.make as Type, count(ret.rid) as Returns, ret.rvalue as Revenue
        FROM Return ret, Vehicle v, Rent r
        WHERE ret.rid = r.rid AND r.vid = v.vid
        GROUP BY v.location, v.make, ret.rvalue
        UNION ALL
        Select v.location, 'Total', count(ret.rid), sum(ret.rvalue)
        From Return ret, Vehicle v, Rent r
        Where ret.rid = r.rid AND r.vid = v.vid 
        GROUP BY v.location
        UNION ALL
        Select 'All Locations', 'Total', count(rid), sum(rvalue)
        FROM Return 
        ");
        echo "<h2 id='title'>Daily Return Report</h2>";
        echo "<table border='2'>";
        echo "<tr><th>Location</th><th>Type</th><th>Returns</th><th>Revenue</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                }
                echo "</table></br>"; 

        OCICommit($db_conn); 

    }

    function handleDailyReturnBranchRequest() {
        global $db_conn;
        $location = $_GET['location'];
        $test = executePlainSQL("SELECT v.make as Type, count(ret.rid) as Returns, ret.rvalue as Revenue
        FROM Return ret, Rent r, Vehicle v
        WHERE ret.rid = r.rid AND r.vid = v.vid AND v.location = '". $location ."'
        GROUP BY v.make, ret.rvalue
        UNION ALL
        SELECT 'Total', count(ret.rid), sum(ret.rvalue)
        FROM Return ret, Rent r, Vehicle v
        WHERE ret.rid = r.rid AND r.vid = v.vid AND v.location = '". $location ."'
        
        ");
        echo "<h2 id='title'>Daily Return $location </h2>";
        echo "<table border='2'>";
        echo "<tr><th>Type</th><th>Returns</th><th>Revenue</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                }
                echo "</table></br>"; 

        OCICommit($db_conn); 
    }


    function handleDailyRentalRequest() {
        global $db_conn;
        $test = executePlainSQL("SELECT v.location, v.make AS type, count(*) AS rentals
        FROM Rent r, Vehicle v
        WHERE r.vid = v.vid
        GROUP BY v.location, v.make
        UNION ALL
        SELECT v.location,'Total', count(*)
        FROM Rent r, Vehicle v
        WHERE r.vid = v.vid 
        GROUP BY v.location
        UNION ALL
        SELECT 'All Locations', 'Total', count(rid)
        FROM Rent
        ");
        echo "<h2 id='title'>Daily Rentals </h2>";
        echo "<table border='2'>";
        echo "<tr><th>Location</th><th>Type</th><th>Rentals</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                }
                echo "</table></br>"; 

        OCICommit($db_conn); 
    }


    function handleDailyRentalBranchRequest() {
        global $db_conn;
        $location = $_GET['location'];
        $test = executePlainSQL("SELECT v.make as Type, count(*) as Rentals
        FROM Rent r, Vehicle v
        WHERE v.location = '". $location ."' AND r.vid = v.vid 	
        GROUP BY v.make
        UNION ALL
        SELECT 'Total', count(r.rid)
        FROM Rent r, Vehicle v
        WHERE v.location = '". $location ."' AND r.vid = v.vid
        ");
        echo "<h2 id='title'>Daily Rentals in $location </h2>";
        echo "<table border='2'>";
        echo "<tr><th>Type</<th><th>Rentals</th></tr>";
                while ($row=oci_fetch_row($test))
                {
                    
                    echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
                }
                echo "</table></br>"; 

        OCICommit($db_conn);  
    }


    function handleDeleteCustomer() {
        global $db_conn;
        executePlainSQL("DROP TABLE Customer CASCADE CONSTRAINTS");
        echo "Customer table deleted...";
        OCICommit($db_conn);  
    }

    function handleInsertCustomer() {
        global $db_conn;
        $cellphone = $_POST['cellphone'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dlicense = $_POST['dlicense'];
        executePlainSQL("INSERT INTO Customer 
        VALUES ('". $cellphone ."', '". $name ."', '". $address ."', '". $dlicense ."')
        ");
        OCICommit($db_conn);  

    }

    function handleUpdateCustomer() {
        global $db_conn;
        $oldcellphone = $_POST['oldcellphone'];
        $oldcellphone = $_POST['newcellphone'];
        executePlainSQL("UPDATE Customer SET name='" . $newcellphone . "' WHERE name='" . $oldcellphone . "'");
        OCICommit($db_conn);  
    }



        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('newCustomerReserveRequest', $_POST)) {
                    handleReservationRequestNew();
                } else if (array_key_exists('existingCustomerReserveRequest', $_POST)) {
                    handleReservationRequestExisting();
                } else if (array_key_exists('rentWithReservationRequest', $_POST)) {
                    handleRentReservationRequest();
                } else if (array_key_exists('rentRequest', $_POST)) {
                    handleRentRequest();
                } else if (array_key_exists('returnRequest', $_POST)) {
                    handleReturnRequest();
                }  
                 else if (array_key_exists('rentWithoutReservationRequest', $_POST)) {
                    handleRentRequest();
                }  else if (array_key_exists('customerDelete', $_POST)) {
                    handleDeleteCustomer();
                }  else if (array_key_exists('customerInsert', $_POST)) {
                    handleInsertCustomer();
                }  else if (array_key_exists('customerUpdate', $_POST)) {
                    handleUpdateCustomer();
                }  
                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                } else if (array_key_exists('getVehicles', $_GET)) {
                    handleVehicleRequest();
                } else if (array_key_exists('tableshow', $_GET)) {
                    showTable();
                } else if (array_key_exists('dailyrental', $_GET)) {
                    handleDailyRentalRequest();

                } else if (array_key_exists('dailyrentalbranch', $_GET)) {
                    handleDailyRentalBranchRequest();

                } else if (array_key_exists('dailyreturn', $_GET)) {
                    handleDailyReturnRequest();

                } else if (array_key_exists('dailyreturnbranch', $_GET)) {
                    handleDailyReturnBranchRequest();

                }

                disconnectFromDB();
            }
        }

	if (isset($_POST['reset']) || isset($_POST['makeReservationNewCustomer']) || isset($_POST['makeReservationExistingCustomer']) || 
        isset($_POST['return']) || isset($_POST['rentWithReservation']) || isset($_POST['insertCustomer'])
        || isset($_POST['deleteCustomer']) || isset($_POST['updateCustomer'])) {
            handlePOSTRequest();
        } else if (isset($_GET['availableVehiclesRequest']) || isset($_GET['showTable']) || isset($_GET['dailyrental']) || isset($_GET['dailyrentalbranch']) || isset($_GET['dailyreturn']) || isset($_GET['dailyreturnbranch'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>
