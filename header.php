


<a href="index.php">
<img src="images/rent.jpg" alt="Rental logo"></a>
<h1>Nancy's Apartment Services</h1>
<p id="time"><!--this is where time will appear--></p>
<script type="text/javascript">
   function updateClock() {
document.getElementById('time').innerHTML = [date, time].join(' / '); /*creates time */
}
setInterval(updateClock, 1000); /* updates time every second */
</script>