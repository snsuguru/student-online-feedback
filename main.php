<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Student Feedback Portal | CMRIT</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="nav">
            <div class="lick"><a href="https://www.cmrit.ac.in/">CMRIT</a></div>
            <div class="new_user">
                <label>Student Feedback Portal</label>
                <a href="#">Form</a>
            </div>
        </div>
        <div class="main">
            <div class="form">
                <form action="mainconn.php" method="POST">
                <div class="stud">
                    <p>Give your Valuable feedback...</p>
                </div>
                <div class="desc">
                    <p>Please fill the below form</p>
                </div>
                <div class="name">
                    <div class="text">
                        <p>Teacher / Instructor</p>
                    </div>
                    <div class="name_area">
                        <input type="text" placeholder="First" name="first" required>
                        <input type="text" placeholder="Last" name="last" required>
                    </div>
                </div>
                <div class="list">
                    <div class="head"><p>Branch</p></div>
                    <div class="lit">
                        <select name="branch" placeholder="Choose a branch" required>
                            <option selected disabled value="">Choose a branch</option>
                            <option value="cse">CSE</option>
                            <option value="ise">ISE</option>
                            <option value="ece">ECE</option>
                            <option value="eee">EEE</option>
                            <option value="mech">MECH</option>
                            <option value="civil">CIVIL</option>
                        </select>
                    </div>
                </div>
                <div class="sub_name">
                    <p>Subject name</p>
                    <div class="sub">
                        <input type="text" placeholder="Enter the subject" name="subname" required>
                    </div>
                </div>
                <div class="sub_name">
                    <p>Subject code</p>
                    <div class="sub">
                        <input type="text" placeholder="Enter the code" name="subcode" required>
                    </div>
                </div>  
                <hr>
                <div class="rate">
                    <p>Please rate the following statements:</p>
                </div>
                <div class="tab">
                    <table style="width: 100%;">
                        <tr>
                            <th>&nbsp;</th>
                            <th>Very Good</th>
                            <th>Good</th>
                            <th>Fair</th>
                            <th>Poor</th>   
                            <th>Very Poor</th>
                        </tr>
                        <tr>
                            <td id="he">Level of effort invested <br>in course</td>
                            <td style="text-align: center;"><input type="radio" name="1" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="1" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="1" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="1" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="1" value="1" required></td>
                        </tr>
                        <tr>
                            <td id="he">Level of knowledge<br> on start of course</td>
                            <td style="text-align: center;"><input type="radio" name="2" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="2" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="2" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="2" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="2" value="1" required></td>
                        </tr>
                        <tr>
                            <td id="he">Level of knowledge<br>at the end of the<br>course</td>
                            <td style="text-align: center;"><input type="radio" name="3" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="3" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="3" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="3" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="3" value="1" required></td>
                        </tr>
                        <tr>
                            <td id="he">Level of<br>communication</td>  
                            <td style="text-align: center;"><input type="radio" name="4" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="4" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="4" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="4" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="4" value="1" required></td>
                        </tr>
                        <tr>
                            <td id="he">Availability</td>  
                            <td style="text-align: center;"><input type="radio" name="5" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="5" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="5" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="5" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="5" value="1" required></td>
                        </tr>
                        <tr>
                            <td id="he">Interativity</td>  
                            <td style="text-align: center;"><input type="radio" name="6" value="5" required></td>
                            <td style="text-align: center;"><input type="radio" name="6" value="4" required></td>
                            <td style="text-align: center;"><input type="radio" name="6" value="3" required></td>
                            <td style="text-align: center;"><input type="radio" name="6" value="2" required></td>
                            <td style="text-align: center;"><input type="radio" name="6" value="1" required></td>
                        </tr>
                    </table>
                </div>
                <div class="sub1">
                    <button type="submit">Confirm</button>
                </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>