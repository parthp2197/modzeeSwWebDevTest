<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work here</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
</head>


<body>

    <div class="photographer-bg">

        <div class="photographer-profile">
            
            <div class="profile-pic">                
                <img src="{{ URL::asset("images/profile.jpeg") }}" alt="photographer">
            </div>
            <div class="info">
                <h1>photographer name</h1>
                <h4 id="info-label"><b>Bio</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iusto recusandae ullam praesentium quasi nisi inventore quam odit eligendi voluptatem.</p>

            </div>
            <div class="contact-details">
                <h4 ><b>Phone</b><br>number</h4>
                <h4><b>email</b><br>email address</h4>
            </div>


        </div>

        <div class="photo-gallery">
            <div class="pic">
                <img src={{ URL::asset("images/landscape1.jpeg") }} alt="picture">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ad, illum cumque cum non est enim praesentium magni nihil nesciunt?</p>
            </div>
            <div class="pic">
                <img src={{ URL::asset("images/landscape2.jpeg") }} alt="picture">
            </div>
            <div class="pic">
                <img src={{ URL::asset("images/landscape3.jpeg") }} alt="picture">
            </div>
            <div class="pic">
                <img src={{ URL::asset("images/landscape4.jpeg") }} alt="picture">
            </div>
            <div class="pic">
                <img src={{ URL::asset("images/landscape5.jpeg") }} alt="picture">
            </div>
            <div class="pic">
                <img src={{ URL::asset("images/landscape6.jpeg") }} alt="picture">
            </div>
        </div>

        

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready
    </script>

</body>
</html>
