<?php
session_start();
if(!isset($_SESSION['u_email'])){
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
    <head> 
       <title>History</title>
	   <style>
           table {
    font-family: arial;
    border-collapse: collapse;
    width: 100%;
}
td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even)
{background-color: #dddddd;
}
h4{color: blue;
}
h2{color: silver;
} 
       </style>
	 </head>
	 <body>
<table>
     <tr>
    <td>Motto</td>
    <td> ঐশী জ্যোতিই আমাদের পথ প্রদর্শক</td>
    </tr>
  <tr>
    <td>Motto in English</td>
    <td>Heaven's Light is Our Guide</td>
    </tr>
  <tr>
    <td>Established</td>
    <td>1964</td>
   </tr>
  <tr>
    <td>Type</td>
    <td>Public</td>
    </tr>
  <tr>
    <td>Chancellor</td>
    <td>President Abdul Hamid</td>
    </tr>
  <tr>
    <td>Vice-Chancellor</td>
    <td>Prof. Dr. Mohd. Rafiqul Alam Beg</td>
    </tr>
  <tr>
    <td>Academic Staff</td>
	<td>254</td>
	</tr>
  <tr>
    <td>Students</td>
	<td>3000</td>
	</tr>
  <tr>
    <td>Medium of Instruction and Assessment</td>
	<td>English</td>
	</tr>
  <tr>
    <td>Location</td>
	<td>Rajshahi</td>
	</tr>
  <tr>
	<td>Campus</td>
	<td>Urban, 152 acres (0.61 km²)</td>
	</table></br>
	
	 </body>
	 </html>