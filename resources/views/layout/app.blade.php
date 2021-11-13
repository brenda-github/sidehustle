<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>sideHustleApp</title>
    <style>
        body{

            background-color: #fff;
        }
        header{
            margin: 0px auto;
            width: 50%;

        }
       li:hover{
           background: rgb(73, 7, 196);
           color: #fff
           
       }
       ul{

        padding: 0px;
        margin: 0px;
        display: flex;
        justify-content: space-between;
        background: #cecece;
       }

       a{
        color: inherit;
        text-decoration: none;
       }
       li{

        display: inline;
        padding: 20px 30px;
        color: #4f4f4f;
        font-size: 20px;
        cursor: pointer;
    
       }
footer{
    margin: 0px auto;
    width: 50%;
}
section{
    display: flex;
    margin: 50px 0px;
    justify-content: center;

}

    </style>
</head>
<body>
    <header>
<nav>
<ul>
<li><a href="/home">home</a> </li>
<li><a href="{{ route ('contacts') }}">contacts</a> </li>
<li><a href="/about">about</a> </li>

</ul>


</nav>


    </header>

    <section>
    @yield('content')
    </section>

    <footer>

        This is footer
    </footer>
</body>
</html>