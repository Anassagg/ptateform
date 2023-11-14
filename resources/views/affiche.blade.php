<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body >
<style>
.navb{
    text-decoration: none;
    margin: 29px 14px; 
    color: white;
    
}
.navb:hover{
    color: #07d5c8;
}
.back {
  background-image: url('142911-graphisme-zone-ligne-lart_abstrait-bleu_de_cobalt-3840x2160.jpg');
  background-repeat:no-repeat;
  background-size: 100%;
  display: flex;
  flex-direction: column;
  height: calc(100% - 58px);
  position: absolute;
  place-content: center;
  width: 100%;
  background-attachment: scroll;
  overflow: hidden;
    position: fixed;
}


.but {
    
  background-color: rgb(3 204 189 / 72%); /* Green */
  cursor:pointer;
  border: none;
  border-radius: 3px;
  color: white;
  padding: 9px 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin-left: 1215px;
  width: 91px;
  
}
h4{
    text-align: center;
    color: rgb(51 80 155 / 95%) ;
    background-color:#07d5c894;
    color:white;height:38px;
    padding-top:4px;
    margin-top:10px;
    border: 0;
    border-radius: 24px;
    

}

</style>



<nav  class=" navbar navbar-expand-lg navbar-light " style="background-color: rgba(40,57,101,.9);">
  <div class="container-fluid container">


    <div class="d-flex align-items-center">
      
    <form action="{{route('logout')}}" method="post">
    @csrf
    @method('POST')        
    <button type="submit" name='but' class="but"><img style="width: 24px;" src="logout.png" alt=""></button>
        </form>
      </div>
    </div>
  </div>
</nav>
<section class="back">
    </div>


        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($userSocietes as $userSoc)
                
                    <div class="iimg col mb-5">
                        <div >
                        <a href="{{$userSoc->societe->lien_soc}}"><img class="card-img-top" style="border: none; border-style: none; border-radius: 100px; width: 126px; height: 120px; margin-left: 73px;" src="/images/{{ $userSoc->societe->img_soc }}" alt="Société Image" /></a>
                            <h4 >{{$userSoc->societe->name_soc}}</h4>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
        </div>
        
</section>

</body>
</html>
