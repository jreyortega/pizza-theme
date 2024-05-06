(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){
    try{
        let date_countdown = document.getElementById('date-countdown').innerText;
        let d = date_countdown.split('-');
        var countDownDate = new Date(d[0], d[1], d[2], d[3], d[4], d[5]).getTime();
        var x = setInterval(downcounter, 1000);
      }
      catch(e) {
        console.error('Error parsing date:', e);
      }
  
      function downcounter(){
        // Get today's date and time
        var now = new Date().getTime();
  
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
  
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
        // Display the result in the element with id="demo"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
  
        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
        }
      }
  
    });


})();
