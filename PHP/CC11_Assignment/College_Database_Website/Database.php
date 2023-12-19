<?php
    $dbName="assignment-2";
    $userName="root";
    $password="";
    $serverName="localhost";
    $operation=$_POST["submit"];

    $conn=mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }


    switch($operation){
        case "Create":
            $col=$_POST["col"];
            $primaryKey=$_POST["primaryKey"];
            $primaryKeyType=$_POST["primaryKeyType"];
            $tableName=$_POST["table1"];
            $col1Name=$_POST["colName1"];
            $col1Type=$_POST["colType1"];
            $col2Name=$_POST["colName2"];
            $col2Type=$_POST["colType2"];
            $col3Name=$_POST["colName3"];
            $col3Type=$_POST["colType3"];
            $col4Name=$_POST["colName4"];
            $col4Type=$_POST["colType4"];
            $sql="";


            if($col==1){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type)";
            }
            else if($col==2){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type,$col2Name $col2Type)";
            }
            else if($col==3){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type,$col2Name $col2Type,$col3Name $col3Type)";
            }
            else if($col==4){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type,$col2Name $col2Type,$col3Name $col3Type,$col4Name $col4Type)";
            }
            else if($col==5){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type,$col2Name $col2Type,$col3Name $col3Type,$col4Name $col4Type,$col5Name $col5Type)";
            }
            else if($col== 6){
                $sql="CREATE TABLE $tableName($primaryKey $primaryKeyType PRIMARY KEY,$col1Name $col1Type,$col2Name $col2Type,$col3Name $col3Type,$col4Name $col4Type,$col5Name $col5Type,$col6Name $col6Type)";
            }
            else{
                echo "Invalid number of columns";
            }
            echo $sql;
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "Table created successfully<br>";
            }
            else{
                echo "Error creating table: ".mysqli_error($conn)."<br>";
            }
            break;
        case "Delete":
            $tableName=$_POST["table2"];
            $sql="DROP TABLE $tableName";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "Table deleted successfully<br>";
            }
            else{
                echo "Error deleting table: ".mysqli_error($conn)."<br>";
            }
            break;
        case "Insert":
            $tableName=$_POST["table3"];
            $values=$_POST["Values"];
            $result = mysqli_query($conn,"SHOW TABLES LIKE '$tableName'");
            if($result->num_rows==0){
                echo "Table does not exist,Create it first<br>";
            }
            else{
                $sql="INSERT INTO $tableName VALUES$values";
                // echo $sql;
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "Values inserted successfully<br>";
                    $sql="SELECT * FROM $tableName";
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        print_r($row);
                        echo "<br>";
                    }
                }
                else{
                    echo "Error inserting values: ".mysqli_error($conn)."<br>";
                }
            }    
            break;
        case "DeleteRec":
            $tableName=$_POST["table4"];
            $primaryKey=$_POST["key2"];
            $primaryKeyName=$_POST["key2Name"];

            $result = mysqli_query($conn,"SHOW TABLES LIKE '$tableName'");
            if($result->num_rows==0){
                echo "Table does not exist,Create it first<br>";
            }
            else{
                $sql="DELETE FROM $tableName WHERE $primaryKeyName=$primaryKey";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "Record deleted successfully<br>";
                    $sql="SELECT * FROM $tableName";
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        print_r($row);
                        echo "<br>";
                    }
                }
                else{
                    echo "Error updating record: ".mysqli_error($conn)."<br>";
                }
            }
            break;
        case "UpdateRec":
            $tableName=$_POST["table5"];
            $primaryKeyName=$_POST["key3Name"];
            $primaryKey=$_POST["Value3"];
            $colName=$_POST["colName"];
            $colValue=$_POST["colValue"];
            $result = mysqli_query($conn,"SHOW TABLES LIKE '$tableName'");
            // echo gettype($colValue);
            if($result->num_rows==0){
                echo "Table does not exist,Create it first<br>";
            }
            else{
                if(gettype($colValue)=="string"){
                    $sql="UPDATE $tableName SET $colName='$colValue' WHERE $primaryKeyName=$primaryKey";
                }
                else{
                    $sql="UPDATE $tableName SET $colName=$colValue WHERE $primaryKeyName=$primaryKey";
                }
                
                // echo $sql;
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "Record updated successfully<br>";
                    $sql="SELECT * FROM $tableName";
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        print_r($row);
                        echo "<br>";
                    }
                }
                else{
                    echo "Error updating record: ".mysqli_error($conn)."<br>";
                }
            }
            break;
        case "Show":
            $tableName=$_POST["table6"];
            $result = mysqli_query($conn,"SHOW TABLES LIKE '$tableName'");  
            if($result->num_rows==0){
                echo "Table does not exist,Create it first<br>";
            }
            else{
                $sql="SELECT * FROM $tableName";
                $result = mysqli_query($conn,$sql);
                while($row = $result->fetch_assoc()) {
                    print_r($row);
                    echo "<br>";
                }
            }
            break;
        default:
            echo "Invalid operation";
            break;
    }                
?>