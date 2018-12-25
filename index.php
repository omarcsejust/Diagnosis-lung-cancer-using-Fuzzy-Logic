<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>User Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/user_form.js"  type="text/javascript"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">   
            </div>
            <div class="col-md-6">
                   
                <h2 class="panel">Input symptoms and their severity</h2>
                <form action="fuzzy_input.php" method="post">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <td>Symptoms</td>
                                <td>Severity</td>
                            </tr>
                        </thead>
                        <tr>
                            <td> Cough : </td>
                            <td>
                                <select name="s1">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Chest Pain : </td>
                            <td>
                                <select name="s2">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Shortness of Breath : </td>
                            <td>
                                <select name="s3">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Coughing up Blood : </td>
                            <td>
                                <select name="s4">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Hoarseness : </td>
                            <td>
                                <select name="s5">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Feeling Weak or Tired : </td>
                            <td>
                                <select name="s6">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Pneumonia : </td>
                            <td>
                                <select name="s7">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Yellow Skin or Eyes : </td>
                            <td>
                                <select name="s8">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Headache : </td>
                            <td>
                                <select name="s9">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>  Balance Problems : </td>
                            <td>
                                <select name="s10">
                                    <option value="VL">Very Low</option>
                                    <option value="L">Low</option>
                                    <option value="M">Medium</option>
                                    <option value="H">High</option>
                                    <option value="VH">Very High</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><input class="btn btn-primary" type="submit" name="submit" value="Diagnoise"></td>
                        </tr>
                    </table>
                </form>  
                
            </div>
            <div class="col-md-3">   
            </div>
        </div>
    </div>
</body>
?>