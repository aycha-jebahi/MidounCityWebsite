<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patrimoine de la Ville2</title>
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
            text-align: justify;
        }

        h1{  font-family: Century Schoolbook;
            font-size:px;
            font-weight:bolder;
            color:#F87450 ;
        }

        h2{
            font-family: Century Schoolbook;
            color:#458AFD;
            font-weight:bolder;
        }
        .row{
          margin: 0px -10px 0px ;
        }

        .col-12{
          margin: : 0px -50px 0px ;

        }

        img{
          margin: 0px -20px  0px ;

        }

        ul{
            line-height:50px;
            list-style-type:;
        }
        </style>

    </head>

    <body>
        @extends('layouts.app')
        <div class="container-fluid">

          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                 <div class="img">
                 <img src="images/assets/1.png" alt="" width="102.7%" height="300px" />
                 </div>
            </div>
          </div>

          <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
            <div class="article" style="background-color:white" >
              <div class="inner-article ">
              <br/> <br/> <br/> <br/>
              <div id="phare">
              <h2>{{__('patrimoine2.phare')}} </h2> <br/>
               <p>
                {{__('patrimoine2.defphare')}}              </p>
              </div> <br/><br/>

              <div id="meninx">
              <h2>Meninx </h2> <br/>
               <p>
                {{__('patrimoine2.defmeninx')}}
              </p>
              </div> <br/><br/>

              <div id="bourgou">
              <h2>Bourgou </h2> <br/>
               <p>
                {{__('patrimoine2.defbourgou')}}              </p>
              </div> <br/><br/>

              <div id="borj_aghir">
              <h2> Borj Aghir</h2> <br/>
               <p>
                {{__('patrimoine2.defborjaghir')}}             </p>
              </div> <br/><br/>

              <div id="kantara">
              <h2>El Kantara </h2> <br/>
               <p>
                {{__('patrimoine2.defkantara')}}              </p>
              </div> <br/><br/>

              <div id="medina">
              <h2>{{__('patrimoine2.medina')}}</h2> <br/>
               <p>
                {{__('patrimoine2.defmenzel')}}               </p>
              </div> <br/><br/>





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

