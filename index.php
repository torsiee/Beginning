<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character Encoding -->
    <meta charset="UTF-8">
    
    <!-- Meta tags using 'name' and 'content' -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Form</title>

    <!-- Link tags using 'rel' -->
    <link rel="stylesheet" href="css/style.css">
</head

<body>
    <main> 
        <form actions=""includes/formhandle.php" method="get">
        <label for= "firstname">First Name</label>
        <input id="firstname" type="text" name="firstname" placeholder="firstname"><br>
        <label for= "lastname"> Last Name</label>
        <input id="lastname" type="text" name= "firstname" placeholder="lastname"><br>
        <label for= "coursename" >Course Name</label>
        <select id="coursename" name="coursename">
            <option value="none">None</option>
            <option value="Engineering">Engineering</option>
            <option value="Medicine">Medicine</option>
            <option value="Pharmacy"> Medicine</option>
            <option value="BBA">BBA</option>
            <option value="Physics">Physics</option><br>
        </select>
        <br>
        <button type="submit">Submit</button>

    </form>
    </main>
</body>