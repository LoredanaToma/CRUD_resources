<html>
<head>
    <title>Ajax Example</title>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script>
        function getMessage(){
            $.ajax({
                type:'POST',
                url:'/gating',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
</head>

<body>
<div id = 'msg'>Click pentru a inlocui mesajul!</div>
<?php
echo Form::button('Replace Message',['onClick'=>'getMessage()']);
?>
</body>

</html>