<footer>
    <section id="footer-menu">
        <div class="container-fluid ms-2 py-4">
            <div class="row justify-content-starter ms-3">
            <div class="col-2 ms-5">
                <ul>
                    <li>
                        <h2>
                            dc comics
                        </h2>
                    </li>
                    <li>
                        <a href="#">characters</a>
                    </li>
                    <li>
                        <a href="#">comics</a>
                    </li>
                    <li>
                        <a href="#">movies</a>
                    </li>
                    <li>
                        <a href="#">tv</a>
                    </li>
                    <li>
                        <a href="#">games</a>
                    </li>
                    <li>
                        <a href="#">videos</a>
                    </li>
                    <li>
                        <a href="#">news</a>
                    </li>
                </ul>
    
                <ul>
                    <li>
                        <h2>
                            shop
                        </h2>
                    </li>
                    <li>
                        <a href="#">Shop DC</a>
                    </li>
                    <li>
                        <a href="#">Shop DC Collectibles</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
            <ul>
                    <li>
                        <h2>
                            DC
                        </h2>
                    </li>
                    <li>
                        <a href="#">Term Of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy policy(New)</a>
                    </li>
                    <li>
                        <a href="#">Ad Choices</a>
                    </li>
                    <li>
                        <a href="#">Advertising</a>
                    </li>
                    <li>
                        <a href="#">jobs</a>
                    </li>
                    <li>
                        <a href="#">Subscriptions</a>
                    </li>
                    <li>
                        <a href="#">talent workshop</a>
                    </li>
                  
                    <li>
                        <a href="#">CPSC certificates</a>
                    </li>
                    <li>
                        <a href="#">rating</a>
                    </li>
                    <li>
                        <a href="#">shop help</a>
                    </li>
                    <li>
                        <a href="#">contact US</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
            <ul>
                <li>
                    <h2>
                        Sites
                    </h2>
                </li>
                <li>
                    <a href="#">dc</a>
                </li>
                <li>
                    <a href="#">MAd magazine</a>
                </li>
                <li>
                    <a href="#">DC Kids</a>
                </li>
                <li>
                    <a href="#">Universe</a>
                </li>
                <li>
                    <a href="#">DC Power Visa</a>
                </li>
            </div>
            </div>
        </div>
    </section> 
    <section id="social" class="py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="sign-in-col col-2 ms-4">
                    <a href="#">
                        <h5 class="title">SIGN-UP NOW!</h5>
                    </a>
                </div>
    
                <div class="icons-col col-9">
                    <h5>FOLLOW US</h5>
                    <div class="icons">
                        <a href="#">
                            <img src="{{ Vite::asset('public/imgs/footer-facebook.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('public/imgs/footer-facebook.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('public/imgs/footer-facebook.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('public/imgs/footer-facebook.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('public/imgs/footer-facebook.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</footer>

<style>
    #footer-menu{
        background-image: url('{{asset('imgs/footer-bg.jpg')}}');
        
        .container-fluid{
            background-image: url('{{asset('imgs/dc-logo-bg.png')}}');
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: 90%;
            background-position-y: 45%;
            width: 99%;
        
            
       ul{
        list-style: none;
        padding: 0;
        li{
            h2{
                font-size: 18px;
                color: #fff;
                text-transform: uppercase;
            }
            a{
                text-decoration: none;
                text-transform: capitalize;
                color: #6e6e65;
                &:hover{
                    color: #fff;
                }
            }
        }
       }
    }
    }
    #social{
        background-color: #333;
        a{
            text-decoration: none;
        }
        h5{
            font-size: 15px;
            
        }

        .title{
            h5{

         
                 color: white
                border: 1px solid #0089ff;
            }
        }
    
    .icons-col{
        display: flex;
        justify-content: center;
        align-items: center;
        
        h5{
            color: #0089ff;
            margin-right: 10px; 
   
        }
    
        img{
            width: 20px;
            margin-left: 15px;
            padding-bottom: 10px;
        }
    }
}
</style>
