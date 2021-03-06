<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
    <style>
        html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            margin: 0;
            z-index: 100;
        }
            #main {
                    width: 780px;
                    background-color: #fff;
                    margin: auto;
            }
.banner {
    display: flex;
}
.banner > div {
    height: 125px;
}
.nav {
    height: 25px;
    background-color: rgb(160, 187, 236);
}

.nav-list{
    list-style: none;
    margin: 0;
    padding-left: 0;
    display: flex;
    align-items: center;
}

.nav_list-link {
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    line-height: 25px;
    padding: 0 12px;
}

.nav_list-link:hover {
    color: #ff0;
    text-decoration: underline;
}

#body {
        display: flex;
}
.category {
    flex: 1;
 
}

.category {
    background-color: #8786ac;
    z-index: 9;
}

.category-top {
    margin-top: 25px;
}

.category-top > div {
        height: 28px;
}

.category-top > div:hover{
    background-color: rgba(0, 0, 0, 0.3);

}

.container {
    flex: 4;
    font-family: 'Times New Roman', Times, serif;
    
} 

.container-animate {
    position: relative;
    width: 100%;
    height: 25px;
    background-color: #fff;
    border-bottom: 1px solid #0b3de0;
    overflow: hidden;
}

.animate {
    position: absolute;
    left: 0;
    /* will-change: opacity transform; */
    transition: all linear 1s ;
    line-height: 25px;
    font-size: 14px;
    font-weight: 600;
    overflow: hidden;
}

@keyframes slideIn {
     from {
          right: 0;
          transform: translateX(calc(100%));
     }
     to {
         transform: translateX(calc(-100%)); 
     }
} 

.coin {
    flex: 1;
    background-color: #8786ac;
}
.coin-item {
    display: flex;
    margin-top: 25px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container-banner {
    display: flex;
    justify-content: center;
    background-color: rgb(6, 194, 6);
    height: 113px;
}
.container-banner > div {
    font-size: 0;
}
td {
    padding: 8px 4px;
}

    </style>
<body>

    
            <div id="main">
                    <div id="top">
                            <div class="banner">
                                <div>
                                    <img src="./Images/banner_01.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./Images/banner_02.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./Images/banner_03.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./Images/banner_04.jpg" alt="">
                                </div>
                                <div>
                                    <img src="./Images/banner_05.jpg" alt="">
                                </div>
                            </div>
                            <div class="nav">
                                    <ul class="nav-list">
                                        <li class="nav_list-item"><a href="" class="nav_list-link">Trang ch???</a></li>
                                        <li class="nav_list-item"><a href="" class="nav_list-link">Gi???i thi???u</a></li>
                                        <li class="nav_list-item"><a href="" class="nav_list-link">Tin t???c</a></li>
                                        <li class="nav_list-item"><a href="" class="nav_list-link">D???ch v???</a></li>
                                        <li class="nav_list-item"><a href="" class="nav_list-link">Kh??ch h??ng</a></li>
                                        <li class="nav_list-item"><a href="" class="nav_list-link">Li??n h???</a></li>
                                    </ul>
                            </div>
                    </div>
                    <div id="body">
                            <div class="category">
                                    <div class="category-top">
                                            <div>
                                                <a href="#">  <img src="./Images/tygia.gif" alt=""></a>                                          
                                            </div>
                                            <div>
                                                <a href="#"><img src="./Images/ngan_hang_lienket.gif" alt=""></a>
                                                
                                            </div>
                                            <div>
                                                <a href="#"> <img src="./Images/ngan_hang_dien_tu.gif" alt=""></a>
                                               
                                            </div>
                                            <div>
                                                <a href="#"><img src="./Images/lai_xuat.gif" alt=""></a>
                                                
                                            </div>
                                            <div>
                                                <a href="#"> <img src="./Images/Mang_luoi.gif" alt=""></a>
                                               
                                            </div>
                                            <div>
                                                <a href="#"><img src="./Images/Dich_vu.gif" alt=""></a>
                                             
                                            </div>
                                            <div>
                                                <a href="#">  <img src="./Images/gop_y.gif" alt=""></a>                                     
                                            </div>
                                    </div>
                                    <div>
                                         <img src="./Images/Dong_a.jpg" alt="">
                                             
                                    </div>
                                    <div>
                                        <img src="./Images/cam_on.jpg" alt="">
                                     
                                  </div>
                            </div>
                            <div class="container">
                                        <div class="container-animate">

                                        </div>
                                        <div class="container-banner">
                                                <div>
                                                    <img src="./Images/tich_luy_01.jpg" alt="">
                                                </div>
                                                <div>
                                                    <img src="./Images/tich_luy_02.jpg" alt="">
                                                </div>
                                                <div>
                                                    <img src="./Images/tich_luy_03.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="container-content">
                                                    <h3 style="margin: 0; padding-top: 4px;">B???n tin trong ng??y </h3>
                                                    <div class="container-nd">
                                                           <table >
                                                               <tr>
                                                                   <td rowspan="2">
                                                                       <img src="./Images/dang_ky.gif" alt="">
                                                                   </td>
                                                                   <td valign="top">
                                                                            <span>Ng??y 27/8/2007, C??ng ty Ch???ng kho??n S??i G??n Th????ng T??n (Sacombank Securities- SBS) ch??nh th???c ???tr??nh l??ng??? c???ng giao d???ch tr???c ti???p, ????y c??ng ch??nh l?? website m???i c???a SBS... 
                                                                                </span>
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td>Homebank c???p nh???t: 27-08-2007</td>
                                                               </tr>
                                                               <tr>
                                                                   <td rowspan="2">
                                                                       <img src="./Images/giao_dich.gif" alt="">
                                                                   </td>
                                                                    <td>
                                                                       
                                                                                    CH???NG KHO??N NG??Y 24/8: L???I V?????T 900 ??I???M    
                                                                                    C??? phi???u ?????ng lo???t t??ng gi??, ????a VN-Index c?? m???t phi??n ?????o chi???u m???nh m???, v?????t m???c 900 ??i???m... 
                                                                   </td>
                                                               </tr>
                                                               <tr>
                                                                   <td>Homebank c???p nh???t: 24-08-2007   </td>
                                                               </tr>

                                                               <tr>
                                                                <td rowspan="2">
                                                                    <img src="./Images/nhan_vien.gif" alt="">
                                                                </td>
                                                                 <td>
                                                                    
                                                                    CH???NG KHO??N NG??Y 21/8: T??NG ????? TH??M D??  
                                                                    Th??? tr?????ng c?? phi??n th??? hai li??n ti???p t??ng ??i???m, nh??ng ??? m???c nh???, th??m d?? kh??? n??ng t??i l???p m???c 900 ??i???m...  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Homebank c???p nh???t: 22-08-2007 </td>
                                                            </tr>

                                                            
                                                            <tr>
                                                                <td rowspan="2">
                                                                    <img src="./Images/peace.JPG" alt="">
                                                                </td>
                                                                 <td>
                                                                    
                                                                    7 TH??NG ?????U N??M 2007: SACOMBANK ?????T G???N 715 T??? ?????NG L???I NHU???N   
                                                                        Ng??n h??ng Th????ng m???i c??? ph???n th????ng t??n (STB) v???a ch??nh th???c c??ng b??? k???t qu??? kinh doanh 7 th??ng ?????u n??m 2007...
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Homebank c???p nh???t: 21-08-2007 </td>
                                                            </tr>


                                                           </table>
                                                    </div>
                                        </div>
                            </div>
                            <div class="coin">
                                <div class="coin-item">
                                    <div>
                                        <img src="./Images/phat_hanh_ATM.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="./Images/ATM.jpg" alt="">
                                    </div>
    
                                    <div>
                                        <img src="./Images/cophieu.jpg" alt="">
                                    </div>
                                    <div>
                                        <img src="./Images/cophieu.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>

        <script>
                  function animation() {            
                   const toat =  document.querySelector('.container-animate');                  
                   if(toat) {
                       const animate = document.createElement('span');
                        animate.innerText = 'C??NG TY CH???NG KHO??N S??I G??N TH????NG T??N (SBS)- RA M???T WEBSITE M???I ';
                        animate.classList.add('animate');
                            toat.appendChild(animate);
                            animate.style.animation =  'slideIn linear 15s';

                            setTimeout( function () {
                                toat.removeChild(animate);
                            }, 15000)                  
                    }

                }
                
                //g???i h??m
                animation()
                setInterval(function () {
                    animation()
                }, 14000)
            
        </script>  

</body>
</html>
