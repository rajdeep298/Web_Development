<?php
session_start();
if (!isset($_SESSION["loggedIn"])!=true) {
    header("Location: Login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>College Database Access Portal</header>
<div class="container">
    <div class="left">
        <button><a href="#create">Create New Table</a></button>
        <button><a href="#delete">Delete Table</a></button>
        <button><a href="#insert">Insert New Record</a></button>
        <button><a href="#deleteRec">Delete Record</a></button>
        <button><a href="#updateRec">Update Record</a></button>
        <button><a href="#show">Show Table Record</a></button>
    </div>
    <div class="right">
        <form action="Database.php" method="post">
            <section id="create">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table1" id="table">
                    <label for="col">Number of Columns</label>
                    <input type="number" name="col" id="col" min="1" max="6">
                    <label for="primaryKey">Primary Key</label>
                    <input type="text" name="primaryKey" id="primaryKey">
                    <label for="primaryKeyType">Primary Key Type</label>
                    <input type="text" name="primaryKeyType" id="primaryKey">
                    <label for="colName">Column1 Names</label>
                    <input type="text" name="colName1" id="colName">
                    <label for="colType">Column1 Types</label>
                    <input type="text" name="colType1" id="colType">
                    <label for="colName">Column2 Names</label>
                    <input type="text" name="colName2" id="colName">
                    <label for="colType">Column2 Types</label>
                    <input type="text" name="colType2" id="colType">
                    <label for="colName">Column3 Names</label>
                    <input type="text" name="colName3" id="colName">
                    <label for="colType">Column3 Types</label>
                    <input type="text" name="colType3" id="colType">
                    <label for="colName">Column4 Names</label>
                    <input type="text" name="colName4" id="colName">
                    <label for="colType">Column4 Types</label>
                    <input type="text" name="colType4" id="colType">
                    <label for="colName">Column5 Names</label>
                    <input type="text" name="colName5" id="colName">
                    <label for="colType">Column5 Types</label>
                    <input type="text" name="colType5" id="colType">
                    <label for="colName">Column6 Names</label>
                    <input type="text" name="colName6" id="colName">
                    <label for="colType">Column6 Types</label>
                    <input type="text" name="colType6" id="colType">
                    <input type="submit" value="Create" name="submit">
                </div>
            </section>
            <section id="delete">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table2" id="table">
                    <input type="submit" value="Delete" name="submit">
                </div>
            </section>
            <section id="insert">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table3" id="table">
                    <label for="colValue">Column Values[Write it as (value1,value2,value3,value4)]</label>
                    <input type="text" name="Values" id="colValue">
                    <input type="submit" value="Insert" name="submit">
                </div>
            </section>
            <section id="deleteRec">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table4" id="table">
                    <label for="colName">Primary Key Names</label>
                    <input type="text" name="key2Name" id="colName">
                    <label for="colValue">Primary Key Values</label>
                    <input type="text" name="key2" id="colValue">
                    <input type="submit" value="DeleteRec" name="submit">
                </div>
            </section>
            <section id="updateRec">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table5" id="table">
                    <label for="colName">Primary Key Names</label>
                    <input type="text" name="key3Name" id="colName">
                    <label for="colValue">Primary Key Values</label>
                    <input type="text" name="Value3" id="colValue">
                    <label for="colName">Column Names</label>
                    <input type="text" name="colName" id="colName">
                    <label for="colValue">Updated Value</label>
                    <input type="text" name="colValue" id="colValue">
                    <input type="submit" value="UpdateRec" name="submit" name="submit">
                </div>
            </section>
            <section id="show">
                <div class="create">
                    <label for="table">Table Name</label>
                    <input type="text" name="table6" id="table">
                    <input type="submit" value="Show" name="submit">
                </div>
            </section>
            <section id="logout">
                <div class="create">
                    <input type="submit" value="Logout" name="submit">
                </div>
            </section>
        </form>
    </div>
</div>
</body>
</html>