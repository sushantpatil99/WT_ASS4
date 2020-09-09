<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Restaurant Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.5.1.min.js"></script>
        <script src="JS.js"></script>
        <link rel ="stylesheet" type ="text/css" href ="style.css">
    </head>
    <body>
        <header>
            <center>
            <h1>Menu of the Restaurant</h1>
            </center>
        </header>
        <main>
            <section class="center">
            <h2>! Welcome !</h2>
            </section>
            <section class="center">
                <h2>
                    Select any one of the following menu item to know it's details.
                </h2>
                <select class="drop_down" id="res_menu">
                    <option value="">Select Menu</option>
                </select>
                <center>
                    <div>
                <table id="details">
                <tr>
              <th>Name:</th>
              <td id="menuname"></td>
            </tr>
            <tr>
              <th>ID:</th>
              <td id="id"></td>
            </tr>
            <tr>
              <th>Short Name:</th>
              <td id="sname"></td>
            </tr>
            <tr>
              <th>Description:</th>
              <td id="des"></td>
            </tr>
            <tr>
              <th>Small Price:</th>
              <td id="sprice"></td>
            </tr>
            <tr>
              <th>Large Price:</th>
              <td id="lprice"></td>
            </tr>
            <tr>
              <th>Small Portion Name:</th>
              <td id="spname"></td>
            </tr>
            <tr>
              <th>Large Portion Name:</th>
              <td id="lpname"></td>
            </tr>
            </table>
                    </div>
                </center>
                
            </section>
        </main>
        
        <footer
            <center>
                <h1>Sushant Patil, 0120180327, 077</h1>
            </center>
            
        </footer>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
