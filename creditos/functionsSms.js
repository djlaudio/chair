
<script type="text/javascript">
  $( "#btnEnviarMasivo" ).click(function() {
    
    $.ajax({
     type: 'post',
     url: 'functionEnviarMSN.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

<script type="text/javascript">
  $( "#btnEnviarMasivo2" ).click(function() {
    
    $.ajax({
     type: 'post',
     url: 'functionEnviarMSN2.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

<script type="text/javascript">
  $( "#btnEnviarMasivo3" ).click(function() {
    
    $.ajax({
     type: 'post',
     url: 'functionEnviarMSN3.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

<script type="text/javascript">
  $( "#btnEnviarMasivoLimpios" ).click(function() {
    
    $.ajax({
     type: 'post',
     url: 'functionEnviarMSN.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

