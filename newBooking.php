<?php
include("dbcon.php");
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="createNewBooking.php">

        <!-- using a dropdown ensures the user selects an existing member rather than
         typing invalid member ID's. This helps prevent db errors caused by referencing
         a member that does not exist. -->
        Member:
        <select name="memberID" required>
            <?php include("createMemberDropdown.php"); ?>
        </select>
        <br/>

        Court ID:
        <input type="number" name="courtID" required />
        <br/>

        Booking Date:
        <input type="date" name="bookingDate" required />
        <br/>

        Start Time:
        <input type="time" name="startTime" required />
        <br/>

        End Time:
        <input type="time" name="endTime" required />
        <br/>

        <input type="submit" value="Create Booking" />
    </form>
</body>
</html>