<!DOCTYPE html>
	<html>
				<head>
                    <title>Book Seats</title>
						<script type="text/javascript" src="bookSeats.js"></script>
						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
					    
						<link rel="stylesheet" href ="homestyle.css">

						<link rel="stylesheet" href = "bookSeatStyle.css">
						<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
						
				</head>


				<body>
						<nav class="navbar navbar-custom ">
                        <img src="images/Logo.png" alt="Logo is missing from the current directory" height="200" width="200"/>
                           <a class="navbar-brand" href="home.html">Home</a> 
                           <a class="navbar-brand" href="upcoming.html">Upcoming</a>
                           <a class="navbar-brand" href="nowPlaying.html">Now Playing</a>
                           <a class="navbar-brand" href="bookSeats.html">Book Seats</a>
                           <a class="navbar-brand" href="covid.html">COVID-19</a> 
                           <a class="navbar-brand"></a>     				
        				</nav>


						<h1 style="color: rgb(81, 185, 255); font-family: 'Oswald', sans-serif;">Seat Selection</h1>
						<br>
						<h4>Screen</h4>
						<div class="seatSelection">

							<table class="selectSeat">
								<?php
								$myfile = fopen("seats.txt", "r") or die("Unable to open file!");
								$num_row = 1;
								while(!feof($myfile)) {
									$current_line = fgets($myfile);
									$row_seats = explode(", ", $current_line);
									echo "<tr>";
									for ($i = 0; $i < count($row_seats); $i+=1) {
										// 0 = free, 1 = free
										if ($row_seats[$i] == 0) {
											echo '<td><input type="checkbox" style="display: none;" id="r1c1" name="r1c1" value=""><label for="r1c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>';
										} else {

										}
									}
									$row+=1;
								}
								?>			
	<!--
								<tr>

									<td><input type="checkbox" style="display: none;" id="r1c1" name="r1c1" value=""><label for="r1c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c2" name="r1c2" value=""><label for="r1c2"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c3" name="r1c3" value=""><label for="r1c3"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c4" name="r1c4" value=""><label for="r1c4"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c5" name="r1c5" value=""><label for="r1c5"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c6" name="r1c6" value=""><label for="r1c6"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c7" name="r1c7" value=""><label for="r1c7"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c8" name="r1c8" value=""><label for="r1c8"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r1c9" name="r1c9" value=""><label for="r1c9"><img src="images/freeseat.png" height="20" width="20"/></label></td>

								</tr>

								<tr>

									<td><input type="checkbox" style="display: none;" id="r2c1" name="r2c1" value=""><label for="r2c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c2" name="r2c2" value=""><label for="r2c2"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c3" name="r2c3" value=""><label for="r2c3"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c4" name="r2c4" value=""><label for="r2c4"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c5" name="r2c5" value=""><label for="r2c5"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c6" name="r2c6" value=""><label for="r2c6"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c7" name="r2c7" value=""><label for="r2c7"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c8" name="r2c8" value=""><label for="r2c8"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r2c9" name="r2c9" value=""><label for="r2c9"><img src="images/freeseat.png" height="20" width="20"/></label></td>


								</tr>

								<tr>
								
									<td><input type="checkbox" style="display: none;" id="r3c1" name="r3c1" value=""><label for="r3c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c2" name="r3c2" value=""><label for="r3c2"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c3" name="r3c3" value=""><label for="r3c3"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c4" name="r3c4" value=""><label for="r3c4"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c5" name="r3c5" value=""><label for="r3c5"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c6" name="r3c6" value=""><label for="r3c6"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c7" name="r3c7" value=""><label for="r3c7"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c8" name="r3c8" value=""><label for="r3c8"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r3c9" name="r3c9" value=""><label for="r3c9"><img src="images/freeseat.png" height="20" width="20"/></label></td>
								
								
								</tr>

								<tr>
								
									<td><input type="checkbox" style="display: none;" id="r4c1" name="r4c1" value=""><label for="r4c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c2" name="r4c2" value=""><label for="r4c2"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c3" name="r4c3" value=""><label for="r4c3"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c4" name="r4c4" value=""><label for="r4c4"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c5" name="r4c5" value=""><label for="r4c5"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c6" name="r4c6" value=""><label for="r4c6"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c7" name="r4c7" value=""><label for="r4c7"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c8" name="r4c8" value=""><label for="r4c8"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r4c9" name="r4c9" value=""><label for="r4c9"><img src="images/freeseat.png" height="20" width="20"/></label></td>
								
								
								</tr>


								<tr>
								
									<td><input type="checkbox" style="display: none;" id="r5c1" name="r5c1" value=""><label for="r5c1"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c2" name="r5c2" value=""><label for="r5c2"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c3" name="r5c3" value=""><label for="r5c3"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c4" name="r5c4" value=""><label for="r5c4"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c5" name="r5c5" value=""><label for="r5c5"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c6" name="r5c6" value=""><label for="r5c6"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c7" name="r5c7" value=""><label for="r5c7"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c8" name="r5c8" value=""><label for="r5c8"><img src="images/freeseat.png" height="20" width="20"/></label></td>
									<td><input type="checkbox" style="display: none;" id="r5c9" name="r5c9" value=""><label for="r5c9"><img src="images/freeseat.png" height="20" width="20"/></label></td>
								
								
								</tr>
							-->
							</table>

						</div>
						<br>

						<div class="seatLegend">

							<table>
								<tr>
									<td><img src="images/occupiedseat.png" width="64" height="64"></td>
									<td><img src="images/freeseat.png" width="64" height="64"></td>
									<td><img src="images/covidChair.png" width="64" height="64"></td>
								</tr>

								<tr>
									<td>Occupied Seat</td>
									<td>Free Seat</td>
									<td>Seat Inaccessbile</td>

								</tr>


							</table>


						</div>


						<div class="seatLegend">

							<ul>
								<li>
									<label for="Adults">Adults: $12.99</label>
									<select name="Adults" id="Adults">
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Seniors">Seniors: $8.99</label>
									<select name="Seniors" id="Seniors">
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>
								<li>
									<label for="Children">Children: $0.99</label>
									<select name="Children" id="Children">
									<option value="1">1</option>
									<option value="2">2</option>
									</select>
								</li>

							</ul>
					
						</div>
						<br>
						<div class="seatLegend">

							<table>

								<tr>
									<td><img src="images/popcorn.png" width="64" height="64"></td>
									<td><img src="images/coke.png" width="64" height="64"></td>
									<td><img src="images/candy.png" width="64" height="64"></td>
									<td><img src="images/nachos.png" width="64" height="64"></td>
								</tr>



								<tr>
									
									<td>
										<button type="button"  onclick="addPopcorn()" class="add">+</button>
										<button type="button"  onclick="minusPopcorn()" class="minus">-</button>
										<p>Popcorn: <span id="popcornOut">0</span></p>
									</td>
									
									<td>
										<button type="button"  onclick="addCoke()" class="add">+</button>
										<button type="button"  onclick="minusCoke()" class="minus">-</button>
										<p>Coke: <span id="cokeOut">0</span></p>
									</td>
									<td>
										<button type="button"  onclick="addCandy()" class="add">+</button>
										<button type="button"  onclick="minusCandy()" class="minus">-</button>
										<p>Candy: <span id="candyOut">0</span></p>
									</td>
									<td>
										<button type="button"  onclick="addNachos()" class="add">+</button>
										<button type="button"  onclick="minusNachos()" class="minus">-</button>
										<p>Nachos: <span id="nachosOut">0</span></p>
									</td>
									

								</tr>


							</table>

							<br>

						</div>




                        <div class="navbar-b">
							<p>2020 OT FILMS Canada LP | Privacy Policy | Terms of Use</p>
						</div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   						<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

				</body>

	</html>
