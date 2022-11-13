<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css    ">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');

:root
{
    --yellow: #f9ca24;
}
*{
    font-family: 'Nunito',sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all 0.2s linear;

}

*::selection{
    background: var(--yellow);
    color: #333;

}

html{
    font-size: 62.5%;
    overflow-x:hidden;

}
html::-webkit-scrollbar{
width: 1.4rem;


}
html::-webkit-scrollbar-track{
    background-color: #222;
    
    
    }
html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}
body{
    background:#111;
    overflow-x:hidden ;
    padding-left: 35rem;
}
section{
    min-height: 100vh;
    padding: 1rem;
}
.btn
{
    padding: .7rem 3rem;
    background: #333;
    color: #fff;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 2rem;
    border-radius: 5rem;
    text-align: left;
    /* margin-left: 700px; */
}
.btn i{
    padding: 0 .5rem;
    font-size: 1.8rem;
    

}
.btn:hover{
    background: var(--yellow);
}
.heading{
    text-align: center;
    margin: 0 6rem;
    font-size: 4rem;
    padding: 1rem;
    border-bottom: .1rem solid #fff4;
    color: #fff;

} 
.heading span{
    color: var(--yellow);
}


header{
    position: fixed;
    top:0;
    left: 0;
    z-index:1000;
    height: 100%;
    width: 35rem;
    background:#1a1a1a;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow:column;
    text-align: center;
}

header .user img
{
    height:19rem;
    width: 19rem;
    border-radius: 50%;
    object-fit:cover;
    margin-bottom: 1rem;
    border: .7rem solid var(--yellow)  ;

}
header .user .name{

 font-size: 3.5rem;
 color: #fff;
}
header .user .post{

    font-size: 2rem;
    color: #eee;

}
header  .navbar{
    width: 100%;

}
header .navbar ul{
    list-style: none;
    padding: 1rem 3rem;

}

header .navbar ul li  a
{
 display:block;
 padding: 1rem;
 margin: 1.5rem 0;
 background: #333;
 color: #ffff;
 font-size: 2rem;
 border-radius: 5rem;
}

header .navbar ul li a:hover {
    background: var(--yellow);
    
}

#menu
{
    position: fixed;
    top: 2rem; right: 2rem;
    background: #333;
    color: #fff;
    font-size: 2.5rem;
    padding: 1rem 1.5rem;
    z-index: 1000;
    

}


.home
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: column;
    padding:0 15rem ;
    /* background-image: url(./portfolio2.jpg);
    background-repeat: no-repeat; */

}
.home h3{
    font-size: 2.5rem;
    color: #fff;

}
.home h1{
    font-size: 5rem;
    color: #fff;
}
.home h1 span{
    color: var(--yellow);

}
.home p{
    font-size: 2rem;
    color: #eee;
    padding: 1rem 0;

}
.about .row
{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 1rem 0;
}

.about .row .info{
    flex: 1 1 48rem;
    padding: 2rem 1rem;
    padding-left: 6rem;
}
.about .row .info h3 {
    font-size: 2rem;
    color: var(--yellow);
    padding: 1rem 0;
    font-weight: normal;
}
.about .row .info h3 span{
    color: #eee;
    padding:0 .5rem;
}

.about .row .counter{
    flex: 1 1 48rem;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.about .row .counter .box{
    width: 20rem;
    background: #222;
    text-align: center;
    padding: 2rem;
    margin: 2rem;
}
.about .row .counter .box span{
    font-size: 4rem;
    color: var(--yellow);
}
.about .row .counter .box h3{
    font-size: 2rem;
    color: #fff;

}
.education .box-container{
    display:flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap:  wrap;
    padding: 1rem 0;
    padding-left:3rem;
    
}
.education .box-container .box{
    width: 27rem;
    margin: 4rem 1rem;
    padding-left: 4rem;
    border-left: .2rem solid #fff;
    position: relative;
    
    
}
.education .box-container .box span{
    font-size: 1.3rem;
    background: #222;
    color: #fff;
    border-radius: 5rem;
    padding: 1rem 2.5rem;
    


}
.education .box-container .box h3{
    font-size: 2rem;
    color: #fff;
    padding-top: 4rem;
}
.education .box-container .box p{
    font-size: 1.4rem;
    color: #fff;
    padding-top: 1rem 0;
}
.education .box-container .box i{
    position: absolute;
    top: -1.5rem; left: -2.5rem;
    height: 5rem;
    width: 5rem;
    border-radius: 50%;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    color: #fff;
    background: var(--yellow);

}
.contact
.row{
    display: flex;
    align-items: center;
    justify-content:center;
    flex-wrap: wrap;
    background-image: url(./portfolio2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 80%;
    border:1px solid black;
    border-radius: 20px 1px 20px 1px;
    border-bottom: 4px solid var(--yellow);
    border-right:4px solid var(--yellow) ;
}
.contact .row .content
{
    flex: 1 1 30rem;
    padding-bottom: 0;
    padding: 4rem;
}
.contact .row form{
    flex: 1 1 45rem;
    padding: 2rem;
    margin: 2rem;
    margin-bottom: 4rem;
}
.contact .row form .box{
    padding: 1rem;
    margin: 1rem 0;
    background: #3333;
    text-transform: none;
    font-size: 1.7rem;
    width: 100%;
    border-radius:1px 20px 2px 20px ;
    border-bottom: 1px solid rgb(17, 15, 15);
    border-right: 1px solid rgb(24, 23, 23);

}
.contact .row form .box::placeholder {
    text-transform: capitalize;


}

.contact .row form .message{
    height: 15rem;
    resize: none;

}

.contact .row .content h3{
    /* text-transform: lowercase;
    color: rgb(11, 3, 3);
    font-size: 10px;
    padding-bottom:2rem; */
    font-size: 25px;


}
.contact .row .content .info h3
{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color: rgb(1, 1, 1);
    padding: 1rem 0;
    font-weight: normal;


}
.contact .row .content .info h3 i{
    padding-left: 1rem;
    color: var(--yellow);

}
.icon {
    padding: 20px;
    margin-left: 20px;
    font-style: 2px solid bold;

}
.icon .abc{

 padding: 6px;
}



/* media queries */
 @media(max-width:1200px){ 
    html {
        font-size: 55%;
    }
    .home{
        padding: 1rem 4rem;
    }
}

@media(max-width:991px){
    header{
        left:-120%;
    }


    #menu
    {
        display: block;
    }
    header.toggle
    {
        left: 0%;

    }
    body {
        padding: 0;

    }



}
@media(max-width:768px){
    html
    {
        font-size: 50%;
    }
    
}

@media(max-width:400px){
    header
    {
        width: 100vw;
    }
    .heading{
        margin: 0 3rem;
    }
    .about .row .counter .box{
        width: 100%;
    }
}


</style>



    <!-- <link rel="stylesheet" href="./portfolio.css"> -->
    <title>portfolio</title>
</head>
<body> 
    <script>
    $(document).ready(function(){
        $('#menu').click(function()
        {
            $(this).toggleClass('fa-times');
            $('header').togglecClass('toggle');
        });
        $(window).on('scroll load', function()
        {
            $('#menu').removeClass('fa-times');
            $('header').removecClass('toggle');
            if($(window).scrollTop()>0){
                $('.top').show();
    
            }else{
                $('.top').hide();
            }
        });
    
    // smooth scrolling
    
    $('a[href*="#"]').on('click',function(e){
        e.preventDefault();
        $('htm,body').animate({
            scrollTop : $($(this).attr('href')).offset().top,
        },
        500,
        'linear');
    });
    });
</script>


    <header>
        <div class="user">
            <img src="/WhatsApp Image 2022-09-17 at 12.17.18 AM.jpeg" alt="">
            <h3 class="name">Rajan</h3>
            <p class="post">front end developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#eduaction">EDUCATION</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        </header>
    <div id="menu" class="fas fa-bars"></div>

    
       
    <section  class="home" id="home"  >
        
        <h3>HI THERE !</h3>
        <h1>I'M <span class="auto-type">Rajan</span></h1>
        <p>lorem ipsum dolor sit amet consceter adipsing jelit .Distinctio desernut asperature fugiat minus enuim ullam sint sed magsum teneture!
            lorem ipsum dolor sit amet consceter adipsing jelit .Distinctio desernut asperature fugiat m


        </p>
        <a href="#about"><button class="btn" target="_blank">About me <i class="fas fa-user"></i></button></a>
        
    </section>

    <section class="about" id="about">
        <h1 class="heading">
            <span >About</span>Me</h1>
        
            <div class="row">
                <div class="info">
                    <h3><span> name : </span> Rajan</h3>
                    <h3><span> age : </span> 19</h3>
                    <h3><span> qualification : </span>html & CSS</h3>
                    <h3><span> post : </span> front-end developer</h3>
                    <h3><span> language : </span> hindi/punjabi</h3>
                    <a href="./portfolio3.jpg" download target="_blank"><button class="btn"> Download CV <i class="fas fa-download"></i></button></a>
                </div>
                <div class="counter">
                    <div class="box">
                        <span>2+</span>
                        <h3>month of exdperience</h3>
                    </div>
                    <div class="box">
                        <span>10+</span>
                    <h3>project completed</h3>
                    </div>
                    <div class="box">
                        <span>2+</span>
                    <h3>Happy clients</h3>
                    </div>
                    <div class="box">
                        <span>1+</span>
                        <h3>certificate</h3>
                    </div>


                </div>
            </div>
    </section>
    
<section class="education" id="education">
    <h1 class="heading">my <span>education</span></h1>
<div class="box-container">
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2019</span>
        <h3>school: Govt sen sec school(multipurpose)</h3>
        <p>District:<i class="fas fa-map-marker-alt"></i>Ludhiana</p>
        <p>Completed: 10th</p>
        <p>Marks: 91%</p>


    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021 </span>
        <h3>school:Govt sen. sec school(Multipurpose)</h3>
        
        <p>class: +2(non-medical)</p>
        <p>Marks: 89%
        </p>
        
        

    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022</span>
        <h3>continue study..</h3>
        <p>collage: Baba farid collage of engineering and technology

        </p>
       <p>District:Bathinda</p>
        <p>stream:Computer science engineering</p>
        

    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2023</span>
        <h3>front-end developer</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>

    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2024</span>
        <h3>front-end developer</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>

    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2024</span>
        <h3>front-end developer</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>

    </div>
</div>
</section>


<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span>me
    </h1>

    <div class="row">
        <div class="content">
            <h3 class="title">conatct info :-</h3>
            <div class="info">
                <h3>
                    <a href="mailto:rajanrajan7287@gmail.com" target="_blank" style="color: rgb(10, 9, 9);"><i class="fas fa-envelope" style="margin: 6px;"></i></a>rajanrajan7287@gmail.com</h3>
                <h3> <i class="fa fa-phone" style="margin: 6px;">
                </i>+91 8427469447</h3>
                <h3> <i class="fas fa-phone" style="margin: 6px;"></i>+91 7717432497</h3>
                
                    <h3><a href="https://www.google.co.in/maps/place/Ludhiana,+Punjab/@30.9003262,75.7864613,12z/data=!3m1!4b1!4m5!3m4!1s0x391a837462345a7d:0x681102348ec60610!8m2!3d30.900965!4d75.8572758" target="_blank"> <i class="fas fa-map-marker-alt" style="margin: 6px;"></i></a>ludhiana, india-141008.</h3>
                    <div class="icon">
                        <a href="#" target="_blank" class="abc" style="color: rgb(31, 16, 79);"><i class="fa-3x fa-brands fa-linkedin"></i></a>
                        <a href="#" target="_blank " class="abc"><i class="fa-3x fa-brands fa-instagram" style="color: rgb(13, 12, 12);"></i></a>
                        <a href="https://wa.me/8427469447"class="abc" target="_blank"><i class="fa-3x fa-brands fa-whatsapp" style="color:rgb(14, 149, 97)"></i></a>
                        <a href="#" target="_blank" class="abc"><i class="fa-3x fa-brands fa-github" style="color: rgb(11, 10, 10);"></i></a>
                    </div>

            </div>
        </div>
    
    <form action="rajanform.php" method="post">
        <input type="text" placeholder="name" class="box"  style="color: rgb(12, 11, 11);"
        name="name">
        <input type="e-mail" placeholder="e-mail" class="box"  style="color: rgb(5, 5, 5);" name="email">
        <input type="text" placeholder="project" class="box"  style="color: rgb(13, 11, 11);" name="password">
      
        <textarea name="" id="" cols="30" rows="10" class="box message" name="" placeholder="message"  style="color: rgb(12, 11, 11);"></textarea>
        <!-- <button type="submit" class="btn" target="_blank">  <i class="fas fa-paper-plane"></i>send</button></a> -->
 <button type="submit"class="btn" value="submit" name="submit">submit</button>
 <!-- <input type="submit" class="btn btn-primary" name="submit" value="submit"> -->

    </form>
    </div>
  

</section>
1   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".auto-type", {
        strings:["Rajan..     ","front    -end developer.."],
        typeSpeed:150 ,
        backSpeed:150,
        loop:true
    })
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./portfolio.js"></script>
    

    <?php

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $project=$_POST['message'];
        // echo "dcdjhiuwahwoi";
        //         if($username && $password)
        //         {
                    
                
        // echo $username;
        // echo $password;
        // }
        // else{
        //    echo "this field cannot be blank";
    
        // }
    // data bae connection 
        $connection = mysqli_connect('localhost','root','','rajanform');
        if ($connection){
            echo "we are connected";
    
        }
        else{
            die("databse connection failed!!!");
    
        }
    
    
        // $query = "INSERT INTO users(username,password,email,message)";
        // $query .= "VALUES ('$name','$password')";
        $query='SELSET * FROM users';
    
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query failed!' . mysqli_error());
        }
    
    
        // $query = "INSERT INTO users(username,password)";
        // $query .="VALUES ('$username',"$password")";
        // $result= mysqli_query($connection,$query);
        // if(!$result){
        //     die('query failed!!!' . mysqli_error());
    
        // }
    
    
    }
    
    
    
    
    ?>

</body>
</html>