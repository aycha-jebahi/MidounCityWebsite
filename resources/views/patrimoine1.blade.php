
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patrimoine de la Ville1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


          <style>
        body{
          background-color: #FCE2AD;
        }
        .article{
              margin:0px 10%;
              padding:10px 200px;
                position:relative;
                top:-50px;

        }


        div.inner-article p{
            font-family: Century Schoolbook;
            font-size:30px;
            font-weight:;
            text-indent:30px;
        }

        h1{  font-family: Century Schoolbook;
            font-size:px;
            font-weight:bolder;
            color:#F87450;
        }


        .row{
          margin: 0px -10px 0px ;
        }

        .col-12{
          margin: : 0px -50px 0px ;

        }

        .img_couverture{
          margin: 0px -20px  0px ;

        }

        ul{
            line-height:50px;
            list-style-type:;
        }

        .card{
        border-width: 2px;  border-style: ;
        }

        .card-title{
          font-weight: bold;  font-style: italic;  text-align: center;  color: #458AFD; text-decoration: underline;
        }

        .card-title:hover{
        color: #FEE7B3;
        }

        .card-img-top:hover{
        opacity: 0.7; transform:;
        }
        /*.img_patrimoine{
          height: 250px;
          width: 350px;
        }*/
        </style>

    </head>

<body>

    <div class="container-fluid">

      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
             <div class="img_couverture">
             <img src="assets/j1.jpg" alt="" width="102.7%" height="300px" />
             </div>
        </div>
      </div>

    <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
        <div class="article" style="background-color:white" >
        <div class="inner-article ">
                  <br/> <br/> <br/> <br/>
          <h1> Patrimoine De La Ville </h1> <br/> <br/>
          <div class=row>
          <div class="col-md-4 col-lg-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#phare">
             <img class="card-img-top" src="assets/phare2.jpg" alt="phare" height="250px">
             <div class="card-body">
             <h3 class="card-title"> {{__('patrimoine2.phare')}} </h3>
             </div>
             </a>
             </div>
          </div>
          <div class="col-md-4 col-lg-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#meninx">
             <img class="card-img-top " src="assets/meninx2.jpg" alt="meninx" height="250px">
             <div class="card-body">
             <h3 class="card-title">Meninx</h3>
             </div>
             </a>
             </div>
          </div>
          </div>
          <br/> <br/>
          <div class=row>
          <div class="col-md-4 col-lg-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#bourgou">
             <img class="card-img-top " src="assets/bourgou.jpg" alt="bourgou" height="250px">
             <div class="card-body">
             <h3 class="card-title">Bourgou</h3>
             </div>
             </a>
             </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#borj_aghir">
             <img class="card-img-top " src="assets/borj_aghir.jpg" alt="borj aghir" height="250px">
             <div class="card-body">
             <h3 class="card-title">Borj Aghir</h3>
             </div>
             </a>
             </div>
          </div>
          </div>
          <br/> <br/>
          <div class=row>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#kantara">
             <img class="card-img-top" src="assets/kantara.jpg" alt="el kantara" height="250px" >
             <div class="card-body">
             <h3 class="card-title"> El Kantara </h3>
             </div>
             </a>
             </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
             <div class="card" style="width: 22rem;">
             <a href="patrimoine2.html#medina">
             <img class="card-img-top" src="assets/menzel.jpg" alt="menzel" height="250px" >
             <div class="card-body">
             <h3 class="card-title">{{__('patrimoine2.medina')}}</h3>
             </div>
             </a>
             </div>
          </div>
          </div>

        </div>
        </div>

    </div>
    </div>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </body>

</html>
