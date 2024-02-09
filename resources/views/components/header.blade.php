<header>
<nav>
   <div class="container" id="nav">
    <div class="row" style="height: 100px;">
      <div class="col-12 d-flex align-items-center justify-content-center">
      <img src="{{ Vite::asset('public/imgs/dc-logo.png') }}" width="80px">
      <ul >
        <li>
          <a href="#" class="active">CHARACTERS</a>
        </li>
        <li>
          <a href="#">COMICS</a>
        </li>
        <li>
          <a href="#">MOVIES</a>
        </li>
        <li>
          <a href="#">TV</a>
        </li>
        <li>
          <a href="#">GAMES</a>
        </li>
        <li>
          <a href="#">COLLECTIBLES</a>
        </li>
        <li>
          <a href="#">VIDEOS</a>
        </li>
        <li>
          <a href="#">FANS</a>
        </li>
        <li>
          <a href="#">NEWS</a>
        </li>
        <li>
          <a href="#">SHOP</a>
        </li>
      </ul>
          <div class="input" style="margin-bottom: 15px;">
            <input type="text" style="width: 100px;">
          </div>
      </div>
    </div>
   </div>
  </nav>
  <div class="jumbotron">
      <img src="{{ Vite::asset('public/imgs/jumbotron.jpg') }}" style="width: 100%; height: 350px;">
  </div>


<style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

#nav{
    .container{
      width: 100%;
    }
    ul{
      list-style-type: none;
      display: flex;

      li{
        margin: 0 20px;
        a{
          text-decoration: none;
          color: #436787;
          font-size: 12px;
          
          &:hover {
            color: #2a7ff8;
          }
        }
      }
      .active{
        color: #2a7ff8 !important;
        border-bottom: 5px solid #2a7ff8;
        padding-bottom: 45px;
      }       
  }
 

 
}

</style>