<!DOCTYPE html>
<head>


  <title>Laravel Real Time Notification Tutorial With Example</title>
  <h1>Laravel Real Time Notification Tutorial With Example</h1>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>
    var arr = [];
   var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
      cluster: '{{env("PUSHER_APP_CLUSTER")}}',
      encrypted: true
    });

    var channel = pusher.subscribe('notify-channel');
    channel.bind('App\\Events\\Notify', function(data) {


        arr.push(data.message);
        alert(data.message);

        // toastr.primary(data.message);
    });

    console.log(arr);
  </script>
</head>
