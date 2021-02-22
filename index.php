<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DL LookUP</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
<head>
<title>DL LookUP</title>

</head>
 
<body>
<h3>DL LookUP</h3>

<form method="post" name="dllookup" action="validate.php" enctype="multipart/form-data">   

<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30" required/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30" required/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
 
<option value="1989">1979</option>
<option value="1988">1978</option>
<option value="1987">1977</option>
<option value="1986">1976</option>
<option value="1985">1975</option>
<option value="1984">1974</option>
<option value="1983">1973</option>
<option value="1982">1972</option>
<option value="1981">1971</option>
<option value="1980">1970</option>
 
<option value="1989">1969</option>
<option value="1988">1968</option>
<option value="1987">1967</option>
<option value="1986">1966</option>
<option value="1985">1965</option>
<option value="1984">1964</option>
<option value="1983">1963</option>
<option value="1982">1962</option>
<option value="1981">1961</option>
<option value="1980">1960</option>
 
<option value="1989">1959</option>
<option value="1988">1958</option>
<option value="1987">1957</option>
<option value="1986">1956</option>
<option value="1985">1955</option>
<option value="1984">1954</option>
<option value="1983">1953</option>
<option value="1982">1952</option>
<option value="1981">1951</option>
<option value="1980">1950</option>
 
<option value="1989">1949</option>
<option value="1988">1948</option>
<option value="1987">1947</option>
<option value="1986">1946</option>
<option value="1985">1945</option>
<option value="1984">1944</option>
<option value="1983">1943</option>
<option value="1982">1942</option>
<option value="1981">1941</option>
<option value="1980">1940</option>
 
<option value="1989">1939</option>
<option value="1988">1938</option>
<option value="1987">1937</option>
<option value="1986">1936</option>
<option value="1985">1935</option>
<option value="1984">1934</option>
<option value="1983">1933</option>
<option value="1982">1932</option>
<option value="1981">1931</option>
<option value="1980">1930</option>
 
<option value="1989">1929</option>
<option value="1988">1928</option>
<option value="1987">1927</option>
<option value="1986">1926</option>
<option value="1985">1925</option>
<option value="1984">1924</option>
<option value="1983">1923</option>
<option value="1982">1922</option>
<option value="1981">1921</option>
<option value="1980">1920</option>
 
<option value="1989">1919</option>
<option value="1988">1918</option>
<option value="1987">1917</option>
<option value="1986">1916</option>
<option value="1985">1915</option>
<option value="1984">1914</option>
<option value="1983">1913</option>
<option value="1982">1912</option>
<option value="1981">1911</option>
<option value="1980">1910</option>
 
<option value="1989">1909</option>
<option value="1988">1908</option>
<option value="1987">1907</option>
<option value="1986">1906</option>
<option value="1985">1905</option>
<option value="1984">1904</option>
<option value="1983">1903</option>
<option value="1982">1902</option>
<option value="1981">1901</option>
<option value="1980">1900</option>
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" required />
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" required />
(For Code <br>message "BaddestPrince" on Telegram)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="2" required />
(2 letters)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="USA" readonly="readonly" />
(USA only)
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>

</body>
</html>
<!-- partial -->
</body>
</html>
