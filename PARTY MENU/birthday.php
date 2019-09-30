<!DOCTYPE html>
<head>
<title> Birthday/Anniversary </title>
</head>
<body background="birth1.jpg">
<form method="POST" name="birthday" action="birthday_action.php">
<table cellpadding=1 cellspacing=3>
<h2> Enter Your Contact Details:</h2> 
<tr>
<th align="left">
<font size=4>Full Name: 
</th>
<th>
<input type=text  name="t1">
</th>
</tr>
<tr>
<th align="left">
<font size=4>Address:
</th>
<th>
<input type=text  name="t2">
</th>
</tr>
<tr>
<th align="left">
<font size=4>Contact Number: 
</th>
<th>
<input type=number size="10" name="t3">
</th>
</tr>
</table>
<br>
<table cellpadding=1 cellspacing=3>
<h2> Enter Details for the Party</h2>
<tr>
<th align="left">
<font size=4>Date of booking:
</th>
<th align="left">
<input type="date" name="t4">
</th>
</tr>
<tr>
<th align="left">
<font size=4>Time
</th>
<th align="left">
<input type="time" name="t5"> to <input type="time" name="t6">
</th>
</tr>
<tr>
<th align="left">
<font size=4> Number of people:
</th>
<th align="left">
<input type="number" name="t7">
</th>
</tr>
<tr>
<th align="left">
<font size=4>(approx)
</th>
<th align="left">
</th>
</tr>
</table>
<br>
<table cellpadding=1 cellspacing=3>
<h2>Menu:</h2>
<tr>
<th align="left"><font size=4>
Cakes:
</th>
<th align="left">
<select name="cake"> 
<option> 
<option>Chocolate
<option>Chip-Chocolate
<option>Butterscotch
<option>Strawberry
</select>
</th>
</tr>
<tr>
<th align="left">
<font size=4>Size:</th><th align="left" size=10> 
<input type="radio" name="size" value="1kg">1kg
<input type="radio" name="size" value="2kg">2kg
<input type="radio" name="size" value="3kg">3kg  
</th>
</tr>
<tr>
<th align="left">
<font size=4>Message on Cake:
</th>
<th align="left">
<input type=text name="t8">
</th>
</tr>
</table>
<p><b><font size=4>Cost of Cake Per kg=Rs. 500/-</p>
<p><font size=4> Catering Service for Food Items Cost Rs.550/- per Plate and depends upon number of Invited Guests! </p></b>

<table cellpadding=2 cellspacing=4> <tr>
<th align="left"><font size=4>Snacks:</th>

<th align="left"><font size=4>Chinese:</th>
<th align="left"><font size=4>Main Course:</th>
<th align="left"><font size=4>Sweets:</th>
</tr>
<tr>
<th align="left">
<input type=checkbox name="c[]" value="Paneer Tikka"><font size=4> Paneer Tikka<br>
<input type=checkbox name="c[]" value="Malai Chaap"><font size=4> Malai Chaap<br>
<input type=checkbox name="c[]" value="Dahi Kebab "><font size=4> Dahi Kebab <br>
<input type=checkbox name="c[]" value="Spring Rolls"> <font size=4>Spring Rolls<br>
<input type=checkbox name="c[]" value="Chicken Nudgets"> <font size=4>Chicken Nudgets<br>
<input type=checkbox name="c[]" value="Chicken Lolipop"><font size=4>Chicken Lolipop<br> 
<input type=checkbox name="c[]" value="Chicken Kebab"><font size=4>Chicken Kebab
</th>


<th align="left">
<input type=checkbox name="c[]" value="Veg. Chowmein"><font size=4> Veg. Chowmein <br>
<input type=checkbox name="c[]" value="Veg. Fried Rice"> <font size=4>Veg. Fried Rice <br>
<input type=checkbox name="c[]" value="Chilli-Paneer "><font size=4> Chilli-Paneer <br>
<input type=checkbox name="c[]" value=" Veg. Manchurian"> <font size=4>Veg. Manchurian<br>
<input type=checkbox name="c[]" value="Egg Noodles"><font size=4>Egg Noodles<br>
<input type=checkbox name="c[]" value="Chicken Noodles"><font size=4>Chicken Noodles<br>
<input type=checkbox name="c[]" value="Chicken Manchurian"><font size=4>Chicken Manchurian
</th>

<th align="left">
<input type=checkbox name="c[]" value="Dal Tadka "><font size=4> Dal Tadka <br>
<input type=checkbox name="c[]" value="Dal Makhani "><font size=4> Dal Makhani <br>
<input type=checkbox name="c[]" value="Paneer Butter Masala "> <font size=4>Paneer Butter Masala <br>
<input type=checkbox name="c[]" value="Shahi Paneer"><font size=4> Shahi Paneer <br>
<input type=checkbox name="c[]" value="Kadhai Paneer"> <font size=4> Kadhai Paneer <br>
<input type=checkbox name="c[]" value="Malai Kofta "><font size=4> Malai Kofta <br>
<input type=checkbox name="c[]" value="Butter Chicken"> <font size=4>Butter Chicken
</th>
<th align="left">
<input type=checkbox name="c[]" value="Ice-Creams"><font size=4> Ice-Creams<br>
<input type=checkbox name="c[]" value="Gulab Jamun"> <font size=4>Gulab Jamun<br>
<input type=checkbox name="c[]" value="Ras-Malai"><font size=4> Ras-Malai<br>
<input type=checkbox name="c[]" value="Gajar-Halwa"> <font size=4>Gajar-Halwa<br>
<input type=checkbox name="c[]" value="Pasteries"><font size=4> Pasteries<br>
<input type=checkbox name="c[]" value="Kulfi"><font size=4> Kulfi<br>
<input type=checkbox name="c[]" value="Ras-gulla"> <font size=4>Ras-gulla
</th>
</tr>
</table>
<center><input type=submit value="Generate Bill">&nbsp &nbsp <input type=reset><br>
 <a href="homepage.php"><h3> Back to Homepage </h3></a></center>

</form>
</body>
</html>
