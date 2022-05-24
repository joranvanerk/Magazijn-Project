<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
   
</head>
<body>
    <!-- Cards info -->
    <div class="card">
        <div class="content">
            <h2>C# met Unity</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aspernatur dolores ea voluptatum corporis sapiente voluptate quibusdam ipsa est ratione neque laboriosam ipsam explicabo.
            <a href="#">Bestellen</a>
            </p>
    </div>
    <!-- Photo -->
    <img src="./includes/Assets/Img/dennis.png">
</body>
</html>

<style>
    /* Lettertype import */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    *
    /* overall settings */
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    /* body settings */
    body
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    /* the card position settings */
    .card
    {
        position: relative;
        width: 600px;
        height: 350px;
        margin: 20px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        border-radius: 20px;
        background: linear-gradient(135deg,#d41e31,#491f8f);
    }
    /* The settings for the img */
    .card img
    {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 400px;
        transition: 0,5s;
    }
    /* hover img settings */
    .card:hover img
    {
        left: 80%;
        height: 500px;
    }
    /* info card settings */
    .card .content
    {
        position: relative;
        width: 50%;
        Left: 20%;
        padding: 20px 20px 20px 40px;
        opacity: 0;
        visibility: hidden;
        transition: 0.5s;
    }
    /* card hover info settings */
    .card:hover .content
    {
        opacity: 1;
        visibility: visible;
        left: 0%;
    }
    /* h2 settings */
    .card .content h2
    {
        color: #fff;
        text-transform: uppercase;
        font-size: 2.5em;
        line-height: 1em;
    }
    /* p tag settings */
    .card .content p 
    {
        color: #fff;
    }
    /* a tag settings */
    .card .content a 
    {
        position: relative;
        display:inline-block;
        color: #111;
        padding: 10px 20px;
        border-radius: 10px;
        background: #fff;
        margin-top: 10px;
        text-decoration: none;
    }
    /* responsive settings for smaller sized screens */
    @media (max-width: 991px)
    {
        /* card settings */
        .card
        {
            position: relative;
            width:auto;
            max-width: 600px;
            transition: 0.5s;
            align-items: flex-start;
        }
        /* card hover settings */
        .card:hover
        {
            height: 600px;
        }
        /* IMG settings for on hover */
        .card:hover img
        {
            left: 50%;
            height: 350px;
        }
        /* content card settings */
        .card .content
        {
            width: 100%;
            left: 0;
            padding: 40px;
        }
    }
    /* settings for even smaller screens */
@media (max-width: 420px)
{
    /* card content sizing */
    .card .content
        {
            padding: 40px;
        }
        .card:hover img 
        {
            height: 300px;
        }
}
</style>