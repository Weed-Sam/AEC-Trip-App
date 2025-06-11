<?php
    session_start(); 
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
   ?>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Amazing Thailand 4N 5D- Holidays -Ms Tourpedia India LLP</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">


 <!--<link rel="shortcut icon" href="favicon.png" type="image/x-icon" >-->
 <!-- <link rel="shortcut icon" href="https://awsbizz.sgp1.cdn.digitaloceanspaces.com/wtl/J8UnptNLBzV4fNhutGAheAtTU2wR3vzemNxYi1nc.jpg" type="image/x-icon"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
  <link rel="stylesheet" href="./pickadate.js-3.6.2/lib/themes/default.css">
    <link rel="stylesheet" href="./pickadate.js-3.6.2/lib/themes/default.date.css">

 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> 
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>

  <link href="css/mainstyle.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/mobileFlightSearch.css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- For toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
:root {
    --main-color: #8e44ad;
    --black: #222;
    --white: #fff;
    --light-black: #777;
    --light-white: #fff9;
    --dark-bg: rgba(0,0,0,.7);
    --light-bg: #eee;
    --border: .1rem solid var(--black);
    --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    --text-shadow: 0 .5rem 3rem rgba(0,0,0,.3);
}
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
}
@keyframes fadeIn {
    0% {
        transform: scale(0);
        opacity: 0;
    }
}
html {
    font-size: 61.5%;
    overflow-x: hidden;
}
html::-webkit-scrollbar {
    width: 1rem;
}
html::-webkit-scrollbar-track {
    background-color: var(--white);
}
html::-webkit-scrollbar-thumb {
    background-color: var(--main-color);
}
section {
    padding: 5rem 10%;
}
.heading-title {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color: var(--black);
}
.heading {
    background-size: cover !important;
    background-position: center !important;
    padding-top: 10rem;
    padding-bottom: 15rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.heading h1 {
    font-size: 10rem;
    text-transform: uppercase;
    color: var(--white);
    text-shadow: var(--text-shadow);

}
.btn {
    display: inline-block;
    background: var(--black);
    margin-top: 1rem;
    color: var(--white);
    font-size: 1.7rem;
    padding: 1rem 3rem;
    cursor: pointer;
}
.btn:hover {
    background-color: var(--main-color);
}
</style>

<style>
body{font-family: "Poppins", sans-serif !important;}
img{width:100%;height:100%;object-fit:cover;}
.modal-body{overflow:auto !important;}
.viewMore_custom_btn{
    background: #0e2c82;padding: 7px 20px;font-size: 17px;font-weight: 600;border-radius: 50px;color: #fff;margin: 0 auto;
}
.viewMore_custom_btn:hover{color: #fff !important;}
.flight_search_dates>div{display: flex;gap: 10px;flex-direction: column;}
.flight_search_dates p{font-weight: 600;}
.flight_search_dates span{font-weight: bold;color: black;}
.flight_search_dates .slick-arrow{
    position: relative;padding: 10px;height: auto;background: gray;color: white;box-shadow: none;top: 0;display: flex;align-items: center;
}
.flight_search_dates .fa-chevron-left{left: 0;border-radius: 5px 0px 0px 5px;}
.flight_search_dates .fa-chevron-right{right: 0;border-radius: 0px 5px 5px 0px;}
.flight_search_dates .slick-arrow.slick-disabled{opacity:0.3;cursor: auto;pointer-events: none;}
.morefrebtnouter{width: 100%; overflow: hidden; text-align: left; padding-left: 10px; margin-top: 5px;}
.morefrebt { font-size: 12px; font-weight: 500; margin-bottom: 4px; color: #2196f3 !Important; border: 1px solid #2196f3; border-radius: 20px; padding: 3px 10px; text-decoration: none; margin-top: 5px; float: left; cursor: pointer;   }
.flightFilterMoblieApplyBtn{background: #0e2c82;color: #fff;font-size: 15px;font-weight: 500;padding: 8px;border-radius: 8px;width: 100%;border: none;margin-top: 5px;}
.btn-danger { background-color:#1 !Important;}

.btn-check:active+.btn, .btn-check:checked+.btn, .btn.active, .btn.show, .btn:active { color: var(--bs-btn-active-color); background-color: #e52b30; border-color: var(--bs-btn-active-border-color); }
.offernavigation a { overflow: hidden; float: left; padding: 10px 20px; border-bottom: 1px solid #ddd; display: block; color: #000000; font-weight: 700; font-size: 14px; text-transform: uppercase; }
.offernavigation .active { overflow: hidden; float: left; padding: 10px 20px; border-bottom: 1px solid #e52b30; display: block; color: #e52b30; }
.offernavigation { overflow: hidden; }
.slick-next { right: 23px; top: -36px;}
.slick-prev:before, .slick-next:before{color: #141414;}
.multiple { padding-bottom: 10px !Important;  }
.container, .container-lg, .container-md, .container-sm, .container-xl { max-width: 1260px !important; }
 .contactfooter { background-color: #333333; text-align: center; color: #fff; }
 .footernav a { font-size: 12px; display: block; padding: 5px 0px; color: #fff; }
 .footericonsouter a { width: 36px; height: 36px; border: 1px solid #ffffff38; text-align: center; font-size: 18px; line-height: 24px; margin-right: 8px; border-radius: 84px; float: left; }
 .footericonsouter a:hover { background-color: #fff; color:#000000; }
 .footer { background-color: #333333; color: #fff; padding: 4px 0px 0px; width: 100%; border-top: 0px solid #e52b30; text-align: center; font-size: 13px; }

 .search22 
  {
    padding:0px 240px;
  }
 
 @media (max-width: 1300px){
     .container, .container-lg, .container-md, .container-sm, .container-xl { max-width: 1400px !important; }
 }  
 @media (max-width: 1000px){  
 .hometable tr td{width:100% !Important;  display:block !Important; padding:0px !important; }
 .dealandofferhome{font-size:20px !Important;}
 .hometable{padding:10px !important;}
 .offernavigation a{padding: 10px 7px !important;font-size: 12px !important;}
 /*.slick-arrow{display:none !important;}*/
 .footernav .col-lg-3{padding-bottom:10px; margin-bottom:10px; border-bottom:1px solid #ffffff24;}
 .footernav .col-lg-8{padding-bottom:10px; margin-bottom:10px; border-bottom:1px solid #ffffff24;}
 .footernav .col-lg-4{padding-bottom:10px; margin-bottom:10px; border-bottom:1px solid #ffffff24;}
 .topnavimb a { padding: 5px 10px; }
 .mbheaderlogo img{width:auto;}
 .searchboxouter .textfield{padding: 27px 20px !important;}
 .pcheader {display: revert;height:11.5em;}
 #navmenutop {position: absolute !important;top: 110%;margin: 0 !important;width: 100%;display: flex;align-items: center;justify-content: center;flex-wrap: wrap;left: 0;}
 }
 
/*@media (min-width: 1200px){ .container, .container-lg, .container-md, .container-sm, .container-xl { max-width: 1300px !important; } */
 
@media (min-width: 1300px){ .container, .container-lg, .container-md, .container-sm, .container-xl { max-width: 1350px !important; } 

.top_bg_ofr_sb2other { width: 100%; background-color: #333; padding: 10px 0px 10px; color: #fff; height: 340px; background-color: transparent;  background-image:url(https://awsbizz.sgp1.cdn.digitaloceanspaces.com/wtl/) !important;  background-repeat:no-repeat; background-size:100% auto;padding-top:20px;}
.toprightloginmenu{border: 1px solid #0e2c82; padding: 2px 14px 2px 8px; cursor:pointer; border-radius: 8px; background-color: #ff990000;}
.toprightloginmenu .fa{ color: #0e2c82 !important;  }

}

.top_bg_ofr_sb2other .searchtabs { margin-bottom: 15px; width: 100%; overflow: hidden; }
.top_bg_ofr_sb2other .searchtabs .active {border: 1.5px solid #0e2c82 !important; color: #0e2c82 !important; }
.top_bg_ofr_sb2other .searchtabs a {border: 1.5px solid #777777 !important; color: #777777 !important; padding: 5px 20px; margin-right: 10px; float: left; border-radius: 20px; font-weight: 600; font-size: 16px; }
.flightsearchwihite { background-color: #fff; padding: 25px; border-radius: 20px; box-shadow: 2px 2px 14px #00000040; padding-bottom:25px; position:relative;}
/*.flightsearchwihite .flightsearchbtn{width:100%; text-align:center; position:absolute; left:0px; bottom:-30px;}*/
.flightsearchwihite .searchboxouter .redbuttonsearch { font-size: 20px; color: #fff; font-weight: 600; background-color: #0e2c82; width: 100%; padding: 15px 20px; outline: 0px; border: 0px; border-top-right-radius: 6px; border-bottom-right-radius: 6px;}
.flightsearchwihite .searchboxouter {  box-shadow: 2px 2px 10px #00000000; }
.flightsearchwihite .textfield{border:0px solid #e1e7ee;background-color: #f4f5f5;  font-size: 15px; color: #5d5d5d; font-weight: 600; width: 100%; padding: 27px 20px ;  outline: 0px;   font-size: 17px !important; padding-bottom: 8px !important;}
.firstInput_main_depart{border-top-left-radius: 10px !important;border-bottom-left-radius: 10px !important;}
.return_main_input{padding-left: 30px !important;}
.flightsearchwihite  .searchboxouter table tr td { border-right: 0px solid #ddd; position: relative; padding:0px 5px;} 
.flightsearchwihite .searchboxouter table tr td .fa-calendar { font-size: 22px; color: #cfcfcf; position: absolute; right: 20px; top: 24px; }
.flightsearchwihite .lable { font-weight: 600; margin-left: 15px; padding: 2px 6px; line-height: 1; width: auto; font-size: 14px; color: #777777; position: absolute; top: 14px; }
.flightsearchwihite .lable.ywqyyfqehhghh{padding: 2px 13px;}
.flightsearchwihite .lable.yueyueyu787723{top: 25px;}
h1{font-size:22px;}

.flightsearchwihite .searchboxouter table tr td { border-right: 0px solid #ddd !important; padding: 0px 2px !important; padding-top: 10px !important; }
.flightsearchwihite .fa-arrow-right { font-size: 13px; color: #FFFFFF; margin: 0px 0px; color: #000; }
 body{background-color:#f7f7f7;}
.lastsearchbox{padding-top:20px;}
#navmenutop a { float: left; padding: 14px 20px 14px; border-right: 0px solid #ddd; color: #000000; display: block; border: 1px solid #ddd; margin: 0px 5px; border-radius: 70px; padding: 10px 20px; font-size: 13px; font-weight: 800; }
#navmenutop a:hover { color: #0e2c82; border: 1px solid #0e2c82; background-color: #0e2c82; }
#navmenutop .active { color: #0e2c82; border: 1px solid #0e2c82; background-color: #0e2c82; }
#navmenutop a:last-child { border-right: 1px solid #ddd; }
.flightsearchcalouter { text-align: center; background-color: #FFFFFF; overflow: hidden; margin-bottom: 10px; border-radius: 5px; box-shadow: 1px 1px 3px #0003; }
.flightsearchcalouter .datesbox { padding: 10px 30px; color: #000; display: inline-block; font-weight: 600; font-size: 14px; border-right: 1px solid #ddd; cursor: pointer; }
.flightreviewbox .iconfa {  padding-top: 9px; }
.swapbtn { position: absolute; right: -19px; width: 38px; height: 38px; background-color: #fff; text-align: center; border-radius: 100px; border: 0px solid #ddd; z-index: 9; margin-top: 0px; cursor: pointer; top: 17px; line-height: 33px; font-size: 16px;box-shadow: 0 0 4px rgba(0,0,0,0.1);display:grid;place-items:center; }
.flightsearchwihite .searchboxouter table tr td .fa-calendar { font-size: 22px; color: #cfcfcf; position: absolute; right: 20px; top: 34px; }
.offerboxes a{width:100%;}
.multiple { padding: 0px 10px; }
#navmenutop {  text-transform: none;  }
#navmenutop a { float: left; padding: 14px 20px 14px; border-right: 0px solid #ddd;  border-radius: 70px; padding: 5px 15px; font-size: 17px; font-weight: 800; }
#navmenutop a .fa { margin-right: 0px; }
#navmenutop .fa { color: #0e2c82;   }
#navmenutop a:hover .fa { color: #fff;   }
#navmenutop .active .fa { color: #fff;   }
#navmenutopright {  text-transform:none; }
#navmenutop a{border: 1px solid #ddd !important;}

.happy-lsPop { width: 250px; position: absolute; top: 50px; right: 0px; padding: 15px 10px; border-radius: 10px; box-shadow: 0 1px 4px 0 rgb(0 0 0 / 25%); background-color: #fff; z-index: 11; animation: bounce 2s 2; }
.randbtn{padding: 8px 0px; width: 100%; border-radius: 10px; border: 0px; color: #fff; font-weight: 800; font-size: 14px;}
.lsPop__offer { padding: 11px 10px; border-radius: 8px; background-color: rgba(80,227,194,.1); display: flex; align-items: center; margin: 7px 0 0; }
.lsPop__offer--title { color: #268570; font-size: 14px; font-weight:600; }

 

.hithere {
  animation: hithere 1s ease infinite;
}
@keyframes hithere {
  30% { transform: scale(1.1); }

  100% { transform: scale(1); }
}


#navmenutopright .dropdown-menu.show { font-size: 13px; padding: 10px; box-shadow: 0px 0px 8px #0000004d; width: 220px; top: 12px !important; left: -65px !important;}
#navmenutopright a { float: left; padding: 10px 1px 10px; color: #000000; display: block; font-weight: 500; background-color: #fff !important; }
.dropdown-item table tr td{font-weight: 700; font-size: 14px; line-height: 14px;}
.dropdown-item table tr td div{font-size:11px; font-weight:400;}
.dropdown-item table tr td .fa{font-size: 22px; color: #0e2c82; margin-left: 5px;}

#outerloginbox{background-color:#000000b8; position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999; display:none;}
#outerloginbox .innterboxlogin { background-color: #FFFFFF; max-width: 800px; margin: auto; margin-top: 10%; border-radius: 15px; overflow: hidden; }
 .btn-danger { font-weight: 600; }
 .flightsearchwihite .textfield{color:#000;}
 h1 {  font-weight: 800; }
 .searchdestinationboxclass { padding: 5px; background-color: #fff; width: 430px; border: 1px solid #e4e4e4; position: absolute; left: 0px; top: 54px; font-size: 12px; z-index: 99999; box-shadow: 2px 2px 4px #00000057; border-radius: 5px; }
 .searchdestinationboxclass{padding:0px;}
 .searchdestinationboxclass .list { padding: 12px 8px !important; border-bottom: 0px solid #ddd; color: #141823; cursor: pointer; background-color: #fff; border-radius: 0px; border-left: 0px solid #fff; font-size: 17px; font-weight: 700;position:relative; padding-left:15px !important;}
.searchdestinationboxclass .list:hover { padding: 8px 8px; border-bottom: 0px solid #ddd; color: #333333; cursor: pointer; background-color: #eef2f8; border-radius: 0px; border-left: 0px solid #eef2f8; }
.searchdestinationboxclass .list .fa { font-size: 22px; color: #7f92aa; position: absolute; left: 16px; top: 20px; }
#fromflightdestination .searchdestinationboxclass .list { padding-left:46px !important; }
#toflightdestination .searchdestinationboxclass .list { padding-left:46px !important; }
.reviewpop { position: fixed; left: 0px; top: 0px; height: 100%; width: 100%; background-color: #000000a3; overflow: auto; }
.reviewpop .col-3{display:none !important;}
.reviewpop .col-9 { min-height: 500px; margin: auto; background-color: #fff; padding: 20px 40px; max-width: 900px; margin-top: 70px; margin-bottom: 20px; border-radius: 10px; }
.reviewpop .form-control { font-weight: 800 !important; outline: 0px; border: 0px !important; pointer-events: none; padding: 5px !important; line-height: 17px !important; font-size: 18px !important;}
.reviewpop .col-9 .col-9{min-height: auto !important;width: 100% !important;    margin-top: 0px !important;}
.reviewpop .col-9 .col-3{display:block !important;}


.flightsearchhomebox .searchdestinationboxclass .list .fa{display:block !important;}
#mobilehomemenu{display:none;}
.offertexthead{font-size: 34px; font-weight: 800;}
.top_bg_ofr_sb2other { width: 100%; background-color: #333; padding: 10px 0px 10px; color: #fff; height: 440px; background-color: transparent; background:url('./images/new/bgMain.svg'); background-repeat: no-repeat !important; background-size: cover !important; padding-top: 20px; margin-bottom: 40px; background-position: center !important;}
 .flighttopmenuwithback{display:none;}
/*.top_bg_ofr_sb{background-image:none;}*/

.searchinner .swapbtn { position: absolute; right: -13px; width: 28px; height: 28px; background-color: #fff; text-align: center; border-radius: 100px; border: 2px solid #ddd; z-index: 9; margin-top: 0px; cursor: pointer; top: 19px; line-height: 24px; font-size: 12px; }
.pricesize{    font-size: 18px;
    font-weight: 800;}
.randbtn{background-color: #0e2c82 !important;}
.top_bg_ofr_sb{background-color: #0e2c82 ;}
.searchboxouter .redbuttonsearch{background-color: #0e2c82 !important; }
#ui-datepicker-div .ui-state-active { background-color: #0e2c82 !important;  }
.boxselectpax .active { background-color: #0e2c82 !important; color: #fff !important; margin: 0;}
.ui-slider-handle {  background-color: #0e2c82 !important; }
.btn-danger {  background-color: #0e2c82 !important; border:1px solid #0e2c82 !important; }
 .offernavigation .active {  border-bottom: 1px solid #0e2c82; display: block; color: #0e2c82; }
a:hover{ color:#0e2c82;}
.btn-primary{ background-color:#0e2c82; border:0px;}
#dropdownMenuButton .fa{ color:#0e2c82 !important; }
.hIhJYl button{background-color: #0e2c82 !important;}
.slick-next { right: 25px !important;}
.slick-prev:before, .slick-next:before {color: #0e2c82 !important;}
.btn-outline-primary{background-color: #0e2c82 !important; border:1px solid #0e2c82 !important; color:#fff !important}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{background-color: #0e2c82 !important; border:1px solid #0e2c82 !important; color:#fff !important}

.faretypeboxcolor{padding: 5px 10px; text-align: center; color: #ffffff; font-weight: 800; font-size: 14px;}
.faretypecheckdetailcolor{overflow:hidden;}
.faretypecheckdetailcolor ul{list-style:none; padding: 0px 10px;}
.faretypecheckdetailcolor ul li{display:block; margin-bottom:2px; font-size:12px; color:#333333;}
.faretypecheckdetailcolor ul li .fa{color:#58ca99;}

@media (max-width: 576px){
    /*#mobilehomemenu{margin-top: 5em !important;}*/
    .searchdestinationboxclass .list{font-size:14px;font-weight:600;}
    .flightsearchwihite .lable.yueyueyu787723{top:15px !important;}
.holdmobz{padding-top: 50px !important; margin-top: -46px;}
.showagent3{ display: unset !important;}
.asp-btm{ overflow: auto; white-space:nowrap;}
.asp-btm table{ margin:0px 36px !important; position: relative; left: -40px;}
#agentloginbtn{display: none;}
.flightsearchwihite{padding: 7px;} 
.swapbtn{right: 157px; top: 51px; color:#000;}
.top_bg_ofr_sb2other .searchtabs{margin-bottom: 3px;}
.flightsearchwihite .textfield{padding: 8px 20px !important;}
.flightsearchwihite .lable{font-weight: 700; margin-left: 15px; padding: 2px 10px; background-color: #FFFFFF; width: auto; font-size: 14px; color: #777777; position: absolute; 
top: -5px !important; }
.mobdme2{display: none;}
.flightsearchwihite .searchboxouter table tr td .fa-calendar {font-size: 22px; color: #cfcfcf; position: absolute; right: 20px; top: 22px !important;}
.top_bg_ofr_sb{padding: 14px 0px; }
.flightsearchwihite .flightsearchbtn{position: static !important; padding: 15px 0 0 0px;} 
.lastsearchbox{padding: 0 !important;}
.col-3 .card {margin-bottom: 5px !important;}
::-webkit-scrollbar{height: 2px !important; color:#0e2c82 !important;}
.lastsearchbox .card-body{padding: 7px;}
.lastsearchbox .card-body td div{font-size: 14px;}
.col-3 .card{margin-bottom: 20px !important;}
.sections .container{padding: 15px !important;}
.topnavimb{margin-top: 55px; margin-bottom:6px;}
.searchboxouter .textfield {padding: 10px !important;} 
.innpagebanner{height: auto !important;}
.multiflightbox{margin-bottom: 40px;}
.flightsearchcalouter{margin-top: 10px; display: inline-flex; white-space: nowrap; overflow: auto; text-overflow: ellipsis; width: 100%;}
.listouter {margin-top: 12px;}
.homeflightsearchouterbox{display:none;}
.topnavimb{display:none;}
.mbheaderlogo{display:none;}
.logotop img { height: 30px;}
.main-header{height:46px;}
.pcheader { display: block; }
#navmenutopright .dropdown-menu.show { left: inherit !IMPORTANT; right: -6.8em; }
#mobilehomemenu{ position:relative; z-index:1; display:block; width:100%; background-color: transparent !important;height: 80px; margin-bottom:40px; text-align:center;}
#mobilehomemenu a { display: inline-block; background-color: #fff; color: #333333; padding: 15px 0px; font-size: 12px; font-weight: 800; text-align: center; width: 68px !important; margin: 2px 5px; border-radius: 10px; box-shadow: 0px 0px 10px #0003; margin-top: 30px; }
#mobilehomemenu a span{display:block; text-align:center;width:100%;}
#mobilehomemenu a span .fa{font-size: 20px; color:#0e2c82;}
.happy-lsPop{display:none;}
.lastsearchbox table tr td{display:block; width:100%; text-align:center;padding: 0px 0px 0px 0px;}
.lastsearchbox table tr td div{font-size:12px !important;}
.lastsearchbox table{width:100%;}
.lastsearchbox .col-3 { max-width: 170px; min-width: 170px;padding-left: 5px; padding-right: 5px; }
.lastsearchbox .row {  width: max-content;  padding-left: 15px;}
.alertadv-v2 { color: #148730; background-color: #e9f6ea; border-color: #148730; padding: 5px 5px; border-radius: 4px px ; width: 100%; position: relative; display: table; font-size: 13px; text-align: center; font-weight: 800; }
body{background-color:#FFFFFF !important;zoom:100%}
#homeoffers table{width:100% !important;}
#homeoffers table tr td{width:100% !important; display:block; text-align:left; padding-left:0px !important;}
#homeoffers .card-body{padding:10px !important;} 
.offertexthead{font-size:18px; font-weight: 800; margin-bottom:10px;}
#homeoffers .multiple .card-body { padding: 5px !important; font-size:12px;  }
.offertitle{  white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width:120px;}
.offerphotobox{height:112px;}
#homeoffers  .offerboxes .d-flex{margin-bottom:0px;}
.sections .container { padding: 10px !important; }
.destinationlistbox .d-flex {  width: 50%; }
.destinationlistbox .card-body{font-size:12px; font-weight:800;}
.bloglistmain .col-lg-3{ width:100% !important; }
.top_bg_ofr_sb2other{background-color: #e5e4e3;    height: auto;}
.flightsearchwihite { background-color: #fff; padding: 25px; border-radius: 10px; box-shadow: 2px 2px 5px #00000026;  position: relative; }
/* .flightsearchwihite {padding:10px;} */
.top_bg_ofr_sb2other .searchtabs {  text-align: center; }
.top_bg_ofr_sb2other .searchtabs a { float: none; display: inline-block; }
/*.top_bg_ofr_sb2other .searchtabs .active { background-color: #0e2c82; color: #ffffff !important; }*/
.flightsearchhomebox table tr td{display:block; float:left !important; width: 100% !important; }
.searchboxouter { padding: 0px; }
.flightsearchwihite .textfield { border: 0px solid #e1e7ee; background-color: #fff; border-bottom: 1px solid #ddd; border-radius: 0px !important; font-size: 15px !important; font-weight: 500; padding: 0px 0px 8px !important; }
.top_bg_ofr_sb2other .searchtabs{margin-bottom:20px;}
.flightsearchwihite .lable { font-weight: 700; margin-left: 0px; padding: 0px 0px; background-color: #FFFFFF; width: auto; font-size: 14px; color: #777777; position: inherit; top: 0px !important; }
.top_bg_ofr_sb2other .fa-calendar{display:none;}

.top_bg_ofr_sb2other input:nth-child(4) { text-align:right !important; }
.top_bg_ofr_sb2other td:nth-child(2) { text-align:right !important; }
.top_bg_ofr_sb2other td:nth-child(4) { text-align:right !important;}
.top_bg_ofr_sb2other input:nth-child(2) { text-align:left !important; }
 #mobileflightsearchpax{position: relative !important;
    width: 100% !important;
    right: 0px !important;
    top: -360px;
    z-index: 999;
    font-size: 14px !important;}
.traveller-box2 
{
  margin-bottom: 0px !important;
}
.top_bg_ofr_sb2other td:nth-child(5) {  width:100% !important;}
.flightsearchwihite .lable { font-size: 14px !important;font-weight:500;padding:2px 0 !important;}
.swapbtn{transform: rotate(90deg);right: 8%;top: 44px; color: #000; background-color: #fff; border: 0px; height: 25px; width: 25px; font-size: 12px; line-height: 25px;border: 1px solid #e1e7ee !important;}
.searchboxouter .redbuttonsearch {margin: 0 !important; border-radius: 5px !important; height: auto !important; width: 100% !important;padding:8px 0 !important; font-size: 15px !important; font-weight: 600 !important;justify-content:center;}
.flightsearchwihite .flightsearchbtn { position: relative !important; }
.top_bg_ofr_sb2other { position: fixed; z-index: 1; height: 100%;display:none !important; }
.searchdestinationboxclass { padding: 5px !important; width: 310px !important; position: absolute !important; left: -9% !important; top: 39px !important; max-height: 335px; overflow: auto; }
.top_bg_ofr_sb2other { padding-top: 30px !important; margin-top: 60px !important; }
.flighttopmenuwithback{ display:block; position:fixed; left:0px; top:0px; width:100%; background-color:#0e2c82; color:#fff; font-size:14px; font-weight:600;padding: 10px; z-index:99999; display: none;} 
.flighttopmenuwithback table tr td { display: initial !important;   }
.flighttopmenuwithback .fa-arrow-left { font-size: 20px; padding: 15px 10px; background-color:transparent !important; color:#fff !important;}
.flighttopmenuwithback .fa{ padding: 10px 0px; background-color: #fff; color: #0e2c82; font-size: 20px; border-radius: 40px; width: 40px; height: 40px; text-align: center; }
.flighttopmenuwithback  table tr td{font-size:16px; font-weight:800;}
.newtopboxother .container .searchboxouter{padding:15px !important; }
.newtopboxother .searchboxouter .redbuttonsearch { height: auto !important; padding: 8px 20px !important; width: auto !important; font-size: 15px !important; font-weight: 800 !important; position: revert; border-radius: 5px !important;  }
.offerboxes .d-flex { display: block !important; margin-bottom: 20px px ; width: 50%; }
.offerboxes .multiple .d-flex { width: 100%; }
.sections { width: 100%; padding: 0px 0px; }
.homesearchbox{padding:0px !important;}
.homesearchbox {padding-bottom: 50px !important; }
.innterboxlogin table tr td:first-child { display:none;}
#outerloginbox .innterboxlogin { background-color: #FFFFFF;   margin-top: 40%; border-radius: 15px;   margin-left: 10px; margin-right: 10px; }
.rounflightsearchclass .itemlist .col-8{ width: 100% !important;}
.rounflightsearchclass .itemlist2 .col-8{ width: 100% !important;}
.rounflightsearchclass .itemlist2 .row .col-4{ width:100% !important;}
.c-timeline {width: 88px !important;; margin: auto !important;;}
.mobileright1{ text-align: right !important;}
.rounflightsearchclass .itemlist .row .col-4:first-child { width: 50% !important; }
.mobileright1{ text-align: right !important; position: relative; top: -16px; right: 5px;}
.viewdetailrow{ margin-bottom: 0px !important; margin-top: 10px !important;}
#ui-datepicker-div{ width:322px !important;}
#ui-datepicker-div{ left: 0px !important;}
.ui-datepicker{left: 0px !important;}
 }
.searchdestinationboxclass .list .fa{display: none;}
.hotelsearchlist .imgboxhotel { width: 232px; height: 200px;  }

        /*img{*/
        /*    width: 100%;height: 100%;object-fit: cover;*/
        /*}*/
        .oiugfcvb{
            display: flex;align-items: center;width: 100%;margin: 15px 0;flex-direction: column;justify-content: center;
        }
        .brkbrk{
            font-size: 30px;font-weight: 700;width: auto;display: flex;align-items: center;justify-content: center;position: relative;
        }
        .brkbrk::before{
            content: '';background: url(./images/triwings-left.svg);  background-size: auto;width: 37px;position: absolute;left: -44px;height: 12px;background-size: 100%;
        }
        .brkbrk::after{
            content: '';background: url(./images/triwings-right.svg);  background-size: auto;width: 37px;position: absolute;right: -44px;height: 12px;background-size: 100%;
        }
        .diphhkmjhj{
            display: grid;grid-template-columns: repeat(4,1fr);gap: 30px;margin-top: 30px;
        }
        .diphhkmjhj>div{
            border: 1px solid lightblue;border-radius: 20px;padding: 20px;display: flex;flex-direction: column;gap: 15px;align-items: center;
        }
        .diphhkmjhj>div h2{
            font-size: 18px;font-weight: 600;margin: 0px;text-align: center;
        }
        .diphhkmjhj>div p{
            font-size: 14px;font-weight: 400;color: #4d4d4d;margin: 0;text-align: center;
        }
        .diphhkmjhj .diphhkmjhj_img{
            width: 50px;overflow: hidden;
        }
        @media (max-width: 576px){
            .oiugfcvb{padding:0 50px ;text-align:center;}
            .brkbrk{font-size:24px;}
            #navmenutop{display:none;}
        }
</style>

<script>
function reviewpop(){
$('#bookingdatainfo').addClass('reviewpop');
$('.flightreview').hide();
$('.contactfooter').hide();
$('.footer').hide();
}
</script>

<!--<script>-->
<!--$(document).bind("contextmenu",function(e) {-->
<!-- e.preventDefault();-->
<!--});-->

<!--$(document).keydown(function(e){-->
<!--    if(e.which === 123){-->
<!--      return false;-->
<!--    }-->
<!--});-->
<!--</script>-->

<script src="https://tourpedia.in/dist/jquery.light-carousel.js"></script>
<link href="https://tourpedia.in/css/light-carousel.css" rel="stylesheet" type="text/css">
<style>
.hotelsearchicon{ font-size: 18px !important; right: inherit !important; top: inherit !important; position: inherit !important; color: #b3b3b3 !important; margin-right: 5px !important; }
 
 
.roomguestblockdiv { float: left; width: auto; padding-left: 0px; padding-right: 2px; font-size: 12px; }
.roomguestblockdiv .form-control{font-size: 13px !important;     -webkit-appearance: listbox !important;}
.roomguestblockdiv label {   font-size: 10px; margin-left: 0px; margin-top: 0px; margin-bottom: 2px; text-transform: uppercase; }
.roomguestblockdiv .addroombtn{margin-top: 20px; cursor: pointer; background-color: #e52b30; padding: 10px 11px; color: #fff; border-radius: 2px; font-size: 12px; margin-left: 2px; border-radius: 40px;}

#basicDropdownClick{box-shadow: 2px 2px 10px #00000045 !important;}
#basicDropdownClickstar{box-shadow: 2px 2px 10px #00000045 !important;max-width: 190px; width: 460px; padding: 10px; left: 0px; display: none;}
#basicDropdownClickstar label { width: 100%; display: block; padding-bottom: 3px; font-size: 13px; padding-top: 5px; padding-left: 4px; }
#basicDropdownClickstar label:hover{background-color:#ececec;}
.offerphotobox { height: 142px; overflow: hidden; }
.packtitile { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 174px; margin-bottom: 5px; border-bottom: 1px solid #ededed; padding-bottom: 5px; }
.form-control{font-size: 13px; padding: 10px;}
.filedlable{margin-bottom:4px; font-size:13px;}
.hascontact { width: 100%; float: left; background: #f9f9f9; margin-top: 25px; padding: 10px 0; border: 1px solid #eeeeec; }
.landonly { width: auto; padding: 3px 10px; border: 1px solid #ffe185; border-radius: 50pc; font-size: 11px; font-weight: 600; color: #917a34; background: #fff6a4; display: inline-block; margin-left: 10px; }

.main-ul-tex li { margin: 0 17px 0 0; text-transform:uppercase; }
.incbox { float: left; text-align: center; height: 90px; padding: 10px; border: 1px solid #ddd; border-radius: 4px; margin-right: 10px; width: 90px; background-color: #f8f8f8; .itinerary-mobile{display:none;}}
.package-night-days{margin-bottom: 10px;}
.popup-container{display: none;}
</style>
<style>
    .maincont{margin-top:20px;border:1px solid #ddd}.mainhead{border-bottom:1px solid #ddd;padding:4px;display:flex;align-items:center;cursor:pointer}.arrow{font-size:20px;margin-left:10px;transition:transform .3s ease-in-out}.arrow.rotate{transform:rotate(180deg)}.descont{padding:20px;display:none}.open .descont{display:block}.itinerary-mobile{display:none;}
    .top-fixed-mob-1{position:sticky;top:0;z-index:+60;}.top-fixed-mob-2{margin-top: 0px;margin-bottom: 0px;position: sticky;top: 40px;z-index: 60;background: #f7f7f7;}.popup-container{display:none;}
    @media(max-width:768px){.itinerary-mobile{display:block;}.itinerary-pc{display:none;}.popup-container{position:fixed;bottom:0;left:0;background-color:#f9f9f9;border:1px solid #ccc;padding:20px;z-index:9999}.popup-close{position:absolute;top:10px;right:20px;cursor:pointer;font-size:15px;font-weight:700}}

  </style>
<style>
.modal{display:none;position:fixed;z-index:9999;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgba(0,0,0,.5)}.modal-content{background-color:#fefefe;margin:10% auto;padding:20px;border:1px solid #888;width:80%;max-width:400px;position:relative}.close{position:absolute;top:10px;right:10px;font-size:20px;font-weight:700;cursor:pointer}
  </style>
<style>
.chat-expert-section{position:fixed;top:50%;right:0;transform:translateY(-50%);background-color:#5dbcd2;color:#fff;padding:3px 10px;box-sizing:border-box;animation:1s infinite alternate blink;border-radius:5px;border:2px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,.3);cursor:pointer}@keyframes blink{0%{opacity:0}100%{opacity:1}}.chat-expert-content{font-size:10px;font-weight:700} .chat-expert-section a {color:#fff;text-decoration:none;}
</style>
<style>
      @media only screen and (max-width:567px){
          .package-night-days{margin-bottom: 0px !important;}
      }
  </style>
</head>
<body id="packagedetails">
  <?php
      $pname=$_GET['pname'];
  ?>
  <input type="hidden" id="placename" value="<?php echo $pname;?>">
<!--page loader starts here-->
<style>
/*.loader-container{*/
/*    display: none;width: 100%;height: 100%;background: rgba(255,255,255,0.8); -webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px);position: fixed;inset: 0;z-index: 99999999999999999999999999999999999999999;*/
/*}*/
/*.whiteBg{*/
/*    width: 620px;*/
/*  display: flex;*/
/*  justify-content: center;*/
/*  align-items: center;*/
/*  height: 100px;*/
/*  background: white;*/
/*  border-radius: 100px;*/
/*}*/
/*:root {*/
/*  --colour1: #0e2c82;*/
/*  --colour2: #0e2c82;*/
/*  --speed: 1s;*/
/*}*/
/*    @keyframes slide {*/
/*  from {*/
/*    background-position-x: 0;*/
/*  }*/
/*  to {*/
/*    background-position-x: 113px;*/
/*  }*/
/*}*/

/*.loader-container {*/
/*  height: 100%;*/
/*  display: flex;*/
/*  justify-content: center;*/
/*  align-items: center;*/
/*  overflow: hidden;*/
/*  .loader-bar {*/
/*    min-height: 30px;*/
/*    border-radius: 50px;*/
/*    width: calc(113px * 4);*/
/*    @media only screen and (max-width: 450px) {*/
/*      width: calc(113px * 3);*/
/*    }*/
/*    @media only screen and (max-width: 350px) {*/
/*      width: calc(113px * 2);*/
/*    }*/

/*    background-color: var(--colour2);*/
/*  background-image: repeating-linear-gradient(*/
/*    45deg,*/
/*    transparent,*/
/*    transparent 10px,*/
/*    var(--colour1) 10px,*/
/*    var(--colour1) 20px*/
/*);*/

/*    animation: slide var(--speed) linear infinite;*/
/*    will-change: background-position;*/
/*  }*/
/*}*/

</style>
<!--<div class='loader-container'>-->
<!--    <div class="whiteBg">-->
<!--         <div class='loader-bar'>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--page loader ends here-->

<style>
    .oewfinlpefwneoiwf{
        background:#fff;box-shadow: 0 0 10px #00000012;
    }
    .logo_new{
        width:auto;height:45px;
    }
    .links_new{
        font-size:18px;padding:14px 0;border-bottom:3px solid #fff;transition:all ease-in-out 0.2s;
    }
    .login_pop_btn{position:relative;}
    .dropdown-menu{width: 16rem;top: 10px !important;left:15% !important;}
    .links_new i{font-size:24px;}
    .links_new a,.links_new>div{color:#868686;transition:all ease-in-out 0.2s;}
    .links_new a:hover{color:#0e2c82;}
    .links_new:hover{border-bottom:3px solid #0e2c82;}
    .links_new.active{border-bottom:3px solid #0e2c82;}
    .links_new.active a{color:#0e2c82;}
    .links_new.active i{color:#0e2c82;}
    .gap_custom{gap:50px}
    .danger-clr,.dropdown-toggle{background:#0e2c82 !important;color:#fff !important;font-size:16px !important;font-weight:500;padding: 10px 17px;}
    .fwrwefewewf{display:none;top:3.7em;z-index: 999;background: white;color: #000;padding: 7px;border-radius: 5px;right:0;}
    .ewfrwerwewe:hover .fwrwefewewf{display:block;}
    .fwefwwfwef{white-space:nowrap;}
    .fwefwedsvewwef{padding:8px 10px;border-radius:5px;}
    .fwefwedsvewwef.active{background:#0e2c82;color:#fff !important;}
    .fwefwedsvewwef.active i{color:#fff !important;}
    .h8omohm8wffweo{display:flex;align-items:center;gap:5px;padding: 10px 17px;;border-radius:4px;background:#f2f8f8;}
    
    @media (max-width: 1000px){
        .oewfinlpefwneoiwf{padding:15px 0;box-shadow:0 0 10px #dfd5d5;}
        .ewfvwewee{display:none !important;}
    }
    @media (max-width: 768px){
        .oewfinlpefwneoiwf{padding:10px 0;box-shadow:0 0 10px #dfd5d5;}
        .logo_new{height:30px;padding: 0;}
        .ewfvwewee{display:none !important;}
        .dropdown-toggle{font-size:12px !important;}
        .h8omohm8wffweo{display:none;}
        .dropdown-menu{width: 15rem;left:0% !important;}
    }
    a{
      text-decoration: none;
    }
</style>

<div class="oewfinlpefwneoiwf">
<section class="header">
        <a href="index.php" class="logo"><span>Destination<span style="color: #FF9900; font-weight: bold;">HUB</span></span></a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="check.php">Check Booking</a>
            <?php
                 if(isset($_SESSION['password']) && isset($_SESSION['email']))
                 {
             ?>
             <a href="logout.php"><i class="bi bi-door-open-fill style1"></i></a>
            <?php
                 }
                else{
            ?>
            <a href="login_form.php"><i class="fa fa-user-circle-o"></i></a>
           <?php
                }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<div class="container top-fixed-mob-2" style="margin-top:20px; padding-bottom:5px;">
  <div class="row" style="margin-bottom:10px;">
    <div class="col-9">
      <div class="card-body">
        <h4 style="font-weight:700;"><span id="title"></span>          <div class="landonly">Family Vacations</div>
        </h4>
        <div class="package-night-days" style="font-size:15px; font-weight:500; "><span id="time"></span></div>
      </div>
    </div>
    <div class="col-3">
      <div class="card-body paddingzero">
        <div class="htdtl_sgstprice">
          <table border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td colspan="2" align="right" style=" padding-right:10px;"><div style="line-height: 18px; padding-top: 4px;"><small>Start From</small></div>
                  <div style="line-height: 12px; padding-bottom: 10px;">Per Person </div></td>
                <td><strong>
                  <h4 class="text-success" style="color:#e52b30 !important;"><strong id="toppriceht"><span id="cost"></span></strong></h4>
                  </strong></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-3 card-body itinerary-mobile"> <a id="openModalBtn" style="cursor:pointer;" class="dropdown-item">
      <button type="submit" class="btn btn-danger" style="width: 100%; padding:10px 0px; text-align:center;  ">Download Itinerary</button>
      </a> </div>
    <!-- Modal box -->
    <div id="myModal" class="modal">
      <div class="modal-content"> <span class="close">×</span>
        <!--<form method="POST" action="actionpage.php" target="_blank">-->
        <form method="POST" action="actionpage.php">
          <div class="form-group">
            <label for="exampleInputPassword1">Enter Your Mobile No.</label>
            <input name="mobileno" type="tel" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1">Enter Your Email id.</label>
            <input name="emailid" type="email" class="form-control" id="exampleInputPassword1">
            <br>
          </div>
          <button name="infoItrinary" type="submit" class="btn btn-primary">Submit</button>
          <input name="toemailid" type="hidden" class="form-control" value="officialtourpedia@gmail.com" id="exampleInputPassword1">
          <input name="iternarylink" type="hidden" value="/detailedpackageview.php?id=202565914" class="form-control" id="exampleInputPassword1">
          <input name="iternaryemail" type="hidden" value="officialtourpedia@gmail.com" class="form-control" id="exampleInputPassword1" required="">
                    <input name="pakagedetail" type="hidden" value="http://tourpedia.in/packagedetails.php" class="form-control" id="exampleInputPassword1" required="">
        </form>
      </div>
    </div>
    <div class="main-ul-tex" style="padding-top: 10px; border-top: 1px solid #ddd;">
      <ul style="width: 100%; padding-left: 11px; font-size: 14px; margin-bottom: 0px;">
        <li class="ove active" style="display: inline-block;"><a href="#wayp-1" style="cursor: pointer; display: block; text-decoration: none;">OVERVIEW</a></li>
        <li id="wayp-23" class="flit  ng-hide" ng-show="packDetails.flights!=undefined &amp;&amp; packDetails.flights!=null &amp;&amp; packDetails.flights.length>0" style="display: inline-block;"><a href="#wayp-2" style="cursor: pointer; display: block; text-decoration: none;">Itinerary</a></li>
        <li class="ht-det" id="pdhlv" style="display: inline-block;"><a href="#wayp-24" style="cursor: pointer; display: block; text-decoration: none;">Terms</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container" style="margin-top:20px; margin-bottom:20px;">
  <div class="row">
    <div class="col-8">
      <div class="row" style="margin-bottom:20px;">
        <div class="card" style="padding:0px;">
          <div class="card-body">
            <div class="col-12">
              <div class="sample1" style="">
                <div class="carousel" style="height: 449px;" id="carousel">
                  
                  <div class="controls"> 
                    <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                    <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                  </div>
                </div>
                <div class="thumbnails" id="thumbnails">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card" style=" margin-bottom:20px;" id="wayp-1">
          <div class="card-body" style=" padding:20px;">
            <h4 style="font-weight:700; font-size:18px; margin-bottom:10px;">Amazing Thailand 4N 5D <span style="color:#e52b30;">Overview</span></h4>
                        <div style="font-size: 14px; margin-bottom: 10px;" id="lessDiv"> Ultimate Thailand... </div>
            <div style="font-size: 14px; margin-bottom: 10px; display: none;" id="moreDiv"> Ultimate Thailand <a href="#" class="btn btn-outline-danger btn-sm less">Less</a> </div>
                        <script>
    $(document).on("click", ".more", function(e){
       e.preventDefault();
       $("#lessDiv").hide();
       $("#moreDiv").show();
    });
    
    $(document).on("click", ".less", function(e){
       e.preventDefault();
       $("#lessDiv").show();
       $("#moreDiv").hide();
    });
</script>
            <div style="margin-top:20px; overflow:hidden;">
                                          <div class="incbox"> <img src="data:image/png;base64,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" width="42">
                <div style=" text-align:center; font-weight:500;">Hotel</div>
              </div>
                                          <div class="incbox"> <img src="data:image/png;base64,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" width="42">
                <div style=" text-align:center; font-weight:500;">Sightseeing</div>
              </div>
                                          <div class="incbox"> <img src="data:image/png;base64,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" width="42">
                <div style=" text-align:center; font-weight:500;">Transfer</div>
              </div>
                                          <div class="incbox"> <img src="data:image/png;base64,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" width="42">
                <div style=" text-align:center; font-weight:500;">Activity</div>
              </div>
                                          <div class="incbox"> <img src="data:image/png;base64,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" width="42">
                <div style=" text-align:center; font-weight:500;">Cruise</div>
              </div>
                          </div>
          </div>
        </div>
        <div class="card" style=" margin-bottom:20px;" id="wayp-2">
          <div class="card-body htdtl_roomtable" style=" padding:20px;">
            <h4 style="font-weight:700; font-size:18px; margin-bottom:20px;">Amazing Thailand 4N 5D <span style="color:#e52b30;">Itinerary</span></h4>
                        <div class="maincont open" style="margin-top:20px; border:1px solid #ddd;">
              <div class="mainhead" style="border-bottom:1px solid #ddd; padding:4px;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td colspan="2" align="center" bgcolor="#e52b30" style="padding:10px; font-weight:500; font-size:15px; color:#fff;">Day 1</td>
                    <td width="90%" style="padding:10px; font-weight:500; font-size:15px; background-color:#f5f5f5;"><strong>Pattaya</strong></td>
                    <td style="font-weight:500; font-size:15px; " class="arrow rotate">▼</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="descont" style="padding:20px;font-size:14px;">Arrival After transffer bangkok airport move to pattaya hotel and check-in to the hotel and<br>
relax.</div>
            </div>
                        <div class="maincont" style="margin-top:20px; border:1px solid #ddd;">
              <div class="mainhead" style="border-bottom:1px solid #ddd; padding:4px;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td colspan="2" align="center" bgcolor="#e52b30" style="padding:10px; font-weight:500; font-size:15px; color:#fff;">Day 2</td>
                    <td width="90%" style="padding:10px; font-weight:500; font-size:15px; background-color:#f5f5f5;"><strong>Pattaya</strong></td>
                    <td style="font-weight:500; font-size:15px; " class="arrow">▼</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="descont" style="padding:20px;font-size:14px;">Pattaya - Coral Island with Lunch After breakfast, you will be transferred to the sparkling blue<br>
waters of the Gulf of Thailand by a speedboat, and arrive at the idyllic Coral Island (Koh Lan),<br>
where you will spend the day luxuriating under the welcoming tropical sun. You can lounge,<br>
swim, snorkel or simply enjoy the sun at the islandâ€™s immaculate golden beaches. You all<br>
have the option of viewing the beautiful coral formations around the island either through a<br>
glass-bottom boat or by diving in. Upon your return from the island, you will enjoy a<br>
scrumptious Indian lunch at Pattaya. Coral Island tour on join/shared speed boat will stop for<br>
Parasailing for those who are interested. Those who are not interested in Parasailing will wait<br>
for the rest to finish the activity. Travel tip : Donâ€™t forget to carry your swimsuit, sunscreen<br>
and towel.<br>
</div>
            </div>
                        <div class="maincont" style="margin-top:20px; border:1px solid #ddd;">
              <div class="mainhead" style="border-bottom:1px solid #ddd; padding:4px;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td colspan="2" align="center" bgcolor="#e52b30" style="padding:10px; font-weight:500; font-size:15px; color:#fff;">Day 3</td>
                    <td width="90%" style="padding:10px; font-weight:500; font-size:15px; background-color:#f5f5f5;"><strong>Pattaya</strong></td>
                    <td style="font-weight:500; font-size:15px; " class="arrow">▼</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="descont" style="padding:20px;font-size:14px;">Day liesure After breakfast at the hotel ur free to roam around the Pattaya<br>
</div>
            </div>
                        <div class="maincont" style="margin-top:20px; border:1px solid #ddd;">
              <div class="mainhead" style="border-bottom:1px solid #ddd; padding:4px;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td colspan="2" align="center" bgcolor="#e52b30" style="padding:10px; font-weight:500; font-size:15px; color:#fff;">Day 4</td>
                    <td width="90%" style="padding:10px; font-weight:500; font-size:15px; background-color:#f5f5f5;"><strong>Bangkok</strong></td>
                    <td style="font-weight:500; font-size:15px; " class="arrow">▼</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="descont" style="padding:20px;font-size:14px;">Breakfast - check out from Pattaya hotel - 10:00 pm transfer to Bangkok Bangkok City Temple<br>
Tour En - Route Pattaya to Bangkok (Marble &amp; Golden Buddha with Gems Gallery) Overnight<br>
stay at hotel.</div>
            </div>
                        <div class="maincont" style="margin-top:20px; border:1px solid #ddd;">
              <div class="mainhead" style="border-bottom:1px solid #ddd; padding:4px;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td colspan="2" align="center" bgcolor="#e52b30" style="padding:10px; font-weight:500; font-size:15px; color:#fff;">Day 5</td>
                    <td width="90%" style="padding:10px; font-weight:500; font-size:15px; background-color:#f5f5f5;"><strong>Departure</strong></td>
                    <td style="font-weight:500; font-size:15px; " class="arrow">▼</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="descont" style="padding:20px;font-size:14px;">Bangkok: Departure After breakfast checkout from the hotel. Now, you will be transferred to<br>
the Bangkok International airport. From here, your flight back home.<br>
</div>
            </div>
                      </div>
        </div>
        <a id="wayp-24"></a>
                <div class="card" style="margin-bottom:20px;">
          <div class="card-body">
            <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-1"> Inclusions </h5>
            <div style="font-size:14px;margin-top:1rem"><ul><br>
	<li>3 Nights stay in Pattaya</li><br>
	<li>1 Night stay in Bangkok&nbsp;</li><br>
	<li>4 Breakfast&nbsp;</li><br>
	<li>Coral Island Tour with lunch&nbsp;</li><br>
	<li>Bangkok city tour (temple tickets not included)</li><br>
	<li>Return Airport transfers from BKK Airport on a private basis Accommodation On Twin Sharing Basis&nbsp;</li><br>
</ul><br>
</div> </div>
        </div>
                <div class="card" style="margin-bottom:20px;">
          <div class="card-body">
            <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-1"> Exclusions </h5>
            <div style="font-size:14px;margin-top:1rem"><ul><br>
	<li>Temple tickets not included&nbsp;</li><br>
	<li>Visa&nbsp;</li><br>
	<li>GST And TCS</li><br>
	<li>All personal expenses like tips, laundry, telephone calls/fax, alcoholic beverages, camera/video camera fees at monuments, medical expenses, airport departure tax etc.</li><br>
	<li>Anything not mentioned under Package Inclusions</li><br>
	<li>Cost incidental to any change in the itinerary/stay on account of flight cancellation due to bad weather, ill health, and roadblocks and/or any factors beyond control.&nbsp;</li><br>
	<li>Travel Insurance&nbsp;</li><br>
</ul><br>
</div> </div>
        </div>
                <div class="card" style="margin-bottom:20px;">
          <div class="card-body">
            <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-1"> Payment Policy </h5>
            <div style="font-size:14px;margin-top:1rem"><p>Advance Booking Fee</p><br>
<br>
<ul><br>
	<li style="text-align:justify">30 days or more before date of departure : 25% of total cost</li><br>
	<li style="text-align:justify">29 - 20 days before date of departure : 50% of total cost</li><br>
	<li style="text-align:justify">19 days or less before date of departure : 100% of total cost</li><br>
</ul><br>
</div> </div>
        </div>
                <div class="card" style="margin-bottom:20px;">
          <div class="card-body">
            <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-1"> Cancellation Policy </h5>
            <div style="font-size:14px;margin-top:1rem">You or any member of your party may cancel their travel arrangements at any time. Written notification or an e-mail to that effect from the person who made the booking must be received at our office. The cancellation charges applicable are as per the published cancellation policy below:</div> </div>
        </div>
                <div class="card" style="margin-bottom:20px;">
          <div class="card-body">
            <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-1"> Terms &amp; Conditions </h5>
            <div style="font-size:14px;margin-top:1rem">If we change or cancel your holiday We do plan the arrangements in advance. It is unlikely that we will have to make any changes to your travel arrangements. Occasionally, we may have to make changes and we reserve the right to do so at any time. If there are any changes, we will advise you of them at the earliest possible date. We also reserve the right under any circumstances to cancel your travel arrangements by assigning reasons to you.</div> </div>
        </div>
              </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body itinerary-pc"> <a id="openModalBtn1" style="cursor:pointer;" class="dropdown-item">
          <button type="submit" class="btn btn-danger" style="width: 100%; padding:10px 0px; text-align:center;  ">Download Itinerary</button>
          </a> </div>
        <div class="card-header" style="text-align:center; padding:15px;">
          <div style="font-size:16px;">Want to Go For A Memorable Holiday?</div>
          <div style="font-size:11px; color:#666666;">Provide Your Details to Know Best Holiday Deals</div>
        </div>
        <div class="card-body" style="padding:20px;" id="showflightbookingcancelaltion">
          <form action="frmaction.html" method="post" target="actoinfrm">
            <div class="row">
              <!--<div class="col-sm-12 mb-3">-->
              <!--  <div class="filedlable">Destination</div>-->
              <!--  <div style="height:0px; font-size:0px; position:relative; width: 100%; text-align: left;" id="searchcitylistsfromCityMB"></div>-->
              <!--  <input style="width:100%;height:40px;" type="text" spellcheck="false" autocomplete="off" spellcheck="false"  placeholder="Select Destination" onClick="$('#pickupCitySearchfromCityMB').select();" class="search-depart-from-input" onKeyUp="getSearchCityPack('pickupCitySearchfromCityMB','fromDestinationFlightMB','searchcitylistsfromCityMB');" onFocus="getflightSearchCItyselect('pickupCitySearchfromCityMB','fromDestinationFlightMB','searchcitylistsfromCityMB');$('#searchcitylistsfromCityMB').show();" id="pickupCitySearchfromCityMB" name="citydestination">-->
              <!--  <input  name="citydestination" id="fromDestinationFlightMB" type="hidden" value="DEL-India" autocomplete="nope">-->
              <!--  <input name="citydestination" type="hidden" value="1" autocomplete="nope">-->
                
              <!--</div>-->
              <div class="col-sm-12 mb-3">
                <div class="filedlable">Destination</div>
                <div style="height:0px; font-size:0px; position:relative; width: 100%; text-align: left;" id="searchcitylistsfromCity2"></div>
                <input style="width:100%;height:40px;" type="text" spellcheck="false" onclick="$('#pickupCitySearchfromCity2').select();" class="search-depart-from-input form-control" requered="" onkeyup="getSearchCityPack('pickupCitySearchfromCity2','fromDestinationFlight2','searchcitylistsfromCity2');" onfocus="getflightSearchCItyselect('pickupCitySearchfromCity2','fromDestinationFlight2','searchcitylistsfromCity2');" id="pickupCitySearchfromCity2" name="citydestination" placeholder="Select Destination" autocomplete="off">
                <input name="departureCity" id="fromDestinationFlight2" type="hidden" autocomplete="nope">
              
              </div>
              
              <div class="col-sm-12 mb-3">
                <div class="filedlable">City of Departure</div>
                <div style="height:0px; font-size:0px; position:relative; width: 100%; text-align: left;" id="searchcitylistsfromCityMB2"></div>
                <input style="width:100%;height:40px;" type="text" spellcheck="false" onclick="$('#pickupCitySearchfromCityMB2').select();" class="search-depart-from-input form-control" requered="" onkeyup="getSearchCityHotel('pickupCitySearchfromCityMB2','fromDestinationFlightMB2','searchcitylistsfromCityMB2');" onfocus="getflightSearchCItyselect('pickupCitySearchfromCityMB2','fromDestinationFlightMB2','searchcitylistsfromCityMB2');" id="pickupCitySearchfromCityMB2" name="departureCity" placeholder="Select Departure" autocomplete="off">
                <input name="departureCity" id="fromDestinationFlightMB2" type="hidden" autocomplete="nope">
              
              </div>
              <div class="col-sm-12 mb-3">
                <div class="filedlable">Date of Departure</div>
                <input type="text" name="departuredate" class="form-control hasDatepicker" readonly="readonly" id="departuredate" value="05-10-2024" autocomplete="nope" style="font-size:13px;" placeholder="Destination Name">
              </div>
              <div style=" font-size:16px; margin-bottom:10px; margin-top:0px;  "><strong>Contact Details</strong></div>
              <div class="col-sm-6 mb-3">
                <input name="name" type="text" class="form-control" id="name" placeholder="Type your full name" required="required">
              </div>
              <div class="col-sm-6 mb-3">
                <input class="form-control" type="text" name="email" placeholder="Type your email" required="required">
              </div>
              <div class="col-sm-3 mb-3">
                <input type="text" name="countrycode" class="form-control" value="+91">
              </div>
              <div class="col-sm-9 mb-3">
                <input class="form-control" type="text" name="mobile" placeholder="Type your mobile number" required="required">
                <input type="hidden" name="action" value="submitpackageenquiry">
                <input type="hidden" name="packageName" value="Amazing Thailand 4N 5D">
              </div>
              <div class="col-sm-12 mb-0">
                <button type="submit" class="btn btn-danger" style="width: 100%; padding:10px 0px; text-align:center;">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div id="showflightbookingcancelaltionthanks" style="display:none;">
          <div style="padding:30px; text-align:center;">
            <div style="text-align:center; font-size:24px; color:#CC3300; margin-bottom:10px;">Thank You!</div>
            <div style="text-align:center; font-size:14px; margin-bottom:10px;">One of our team will be in contact with you shortly.</div>
          </div>
        </div>
      </div>
      <div class="hascontact hascontact-mob" style="margin-bottom:20px;">
        <div class="card-body" style="padding:10px 20px;">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <td colspan="2" align="left" valign="top"><img src="data:image/png;base64,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"></td>
              <td width="90%" align="left" valign="top" style="padding-left:20px;"><h6>Hassle Free. 24X7 on-trip assistance</h6>
                <div style="margin-bottom:2px; margin-top:10px;"><i class="fa fa-phone" aria-hidden="true"></i> 7739430347</div>
                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:destinationhun009@gmail.com">destinationhub009@gmail.com</a> </td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  <div col-sm-6 class="popup-container" id="popupContainer" style="padding:10px 20px;">-->
<!--      <span class="popup-close">X</span>-->
<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0">-->
<!--  <tr>-->
<!--    <td colspan="2" align="left" valign="top"><img src="data:image/png;base64,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"></td>-->
<!--    <td width="90%" align="left" valign="top" style="padding-left:20px;">-->
<!--	<h6>Hassle Free. 24X7 on-trip assistance</h6>-->
<!--	<div style="margin-bottom:2px; margin-top:10px;"><i class="fa fa-phone" aria-hidden="true"></i> 7739430347</div>-->
<!--	<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:officialtourpedia@gmail.com">officialtourpedia@gmail.com</a>	</td>-->
<!--  </tr>-->
<!--</table>-->
<!--</div>-->
<iframe style="display:none;" src=""></iframe>
<!--<div class="chat-expert-section">-->
<!--    <a  href="https://wa.me/7739430347?text=Hi!" target="_blank">-->
<!--      <div class="chat-expert-content">-->
<!-- Chat expert content goes here -->
<!--        E<br/> -->
<!--        X<br/> -->
<!--        P<br/> -->
<!--        E<br/> -->
<!--        R<br/> -->
<!--        T<br/> -->
<!--        <br/> -->
<!--        H<br/>-->
<!--        E<br/>-->
<!--        L<br/>-->
<!--        P<br/>-->
<!--      </div>-->
<!--    </a>-->
<!--</div>-->
<style>
.footernav a { font-size: 12px; display: block; padding: 5px 0px; color: #fff; }
#outerloginbox{background-color:#000000b8; position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999; display:none;}
#outerloginbox .innterboxlogin { background-color: #FFFFFF; max-width: 800px; margin: auto; margin-top: 10%; border-radius: 15px; overflow: hidden; }
.ccccccccc {width: 100%;padding: 0px 15px;}
/*#outerloginbox .innterboxlogin { background-color: #FFFFFF;   margin-top: 40%; border-radius: 15px;   margin-left: 10px; margin-right: 10px; }*/
    @media screen and (max-width: 576px) {
      .sjbksdajajgedfht {display: none !important;}
      .joifojnwfuiowef{padding:25px !important;}
    }
</style>
<div id="outerloginbox">
	<div class="innterboxlogin">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
				<td class="sjbksdajajgedfht" colspan="2" style="background: rgb(255,255,255);background: linear-gradient(68deg, rgba(255,255,255,1) 46%, rgba(255,153,0,0.7401085434173669) 100%); padding:40px;">
					<div style="margin-bottom:30px;">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td colspan="2">
								    <img style="width: 60px;" alt="Loading..." src="data:image/png;base64,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"></td>
								<td width="95%" style="padding-left:10px;">
									<div style="font-size:18px; font-weight:800">Exclusive Offers</div>
									<div style="font-size:13px; font-weight:700;">Daily Steal Deals &amp; Special Discounts</div>
								</td>
							</tr>
						</tbody></table>
					</div>
					<div style="margin-bottom:30px;">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td colspan="2"><img style="width: 60px;" alt="Loading..." src="data:image/png;base64,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"></td>
								<td width="95%" style="padding-left:10px;">
									<div style="font-size:18px; font-weight:800">Free Cancellation</div>
									<div style="font-size:13px; font-weight:700;">Free cancellation on flight bookings</div>
								</td>
							</tr>
						</tbody></table>
					</div>
					<div style="margin-bottom:30px;">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td colspan="2"><img style="width: 60px;" alt="Loading..." src="data:image/png;base64,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" width="64"></td>
								<td width="95%" style="padding-left:10px;">
									<div style="font-size:18px; font-weight:800">24 * 7 Support</div>
									<div style="font-size:13px; font-weight:700;">We are 24 * 7 here for you</div>
								</td>
							</tr>
						</tbody></table>
					</div>
				</td>
				<td width="50%" class="joifojnwfuiowef" style="padding:50px; position:relative;">
					<img alt="Loading..." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABBUlEQVR4nO3ZTQqDMBAF4HeKPOkV2+MWbE9jKXUhRcQk8xeZt3Il8xFNZgiQyWQyV8odwORdBH41fGtpygPAAmB2xkxrDctaU3UKgOf6gjeAG+zDTQ2vnho8MZRCeGIojfDAUAthiaE2wgJjhtDEmCM0MG4ISYw7QgITBtGDCYdowYRF1GDCI85ghkEcYYZD7M0Q899zhEGteWWGW4lttp+T53DWlUt8Wtz5sSOMzVU52p2GwfDEFhsew4pzIiyGDYddOAw7TuwwGAq0He4YCvZObhgqNIDmGCp2sWYYi1a8aGMs54mihfEYioo0xnOyK1KYCONpkcBc5urtMpehmUwmg3D5AAklyc9YEtl/AAAAAElFTkSuQmCC" style="position:absolute; right:20px; top:20px; width:25px; cursor:pointer;height:auto;" onclick="$('#outerloginbox').hide();">
					<div class="rightlogin"></div>
				</td>
			</tr>
		</tbody></table>
	</div>
</div>
<script>
	function loginboxopen(){
	$('#outerloginbox').show();
	$('#outerloginbox .innterboxlogin .rightlogin').load('websiteloadpopup.php?action=clientlogin&bookingyes=');
	}
</script>
<style>
	.call-us-box a{color: #fff;font-size: 18px;font-weight: 800;padding: 0;}
	.call-us-box a.mailme{font-size: 16px;}
	.footer-end-box{padding-left: 3rem;}
	@media only screen and (min-width: 300px) and (max-width: 567px){
	.footer-end-box{padding-left: 0rem;}
	.footer-items-boxes{display: flex !important;align-items: center !important;flex-direction: column !important;padding: 30px 0 !important;max-width: 100% !important;}
	}
</style>
<!--footer-main-box main styling starts-->
<section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="terms.php"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="mailto:destinationhub009@gmail.com?subject=Contact%20from%20Website&body=Hello%20from%20Destination%20Hub!""><i class="fas fa-envelope"></i>destinationhub009@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Asansol, India</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-youtube"></i>youtube</a>
            </div>
        </div>
    </section>
		
<script>
	function loadpop(pagetitle,obj,width){
	$('#popcontent').html('<div style="padding:10px; text-align:center;"><img alt="Loading..." src="https://tourpedia.in/images/loading.gif" width="32" ></div>');
	var popaction = encodeURI($(obj).attr('popaction')); 
	$('#poptitle').html(pagetitle);
	$('.modal-dialog').css('max-width',width);
	$('.modal-dialog').css('width',width);
	$('#popcontent').load('https://tourpedia.in/websiteloadpopup.php?'+popaction);
	}
	
	
	
	
	function redirectpage(pages){
	window.location.href = pages;
	$('#loadingwhite').hide();
	}
</script>
<iframe id="actoinfrm" name="actoinfrm" style="display:none;"></iframe>
<div style="position:fixed; left:0px; top:0px; position:fixed; width:100%; height:100%; z-index:999999; background-color:#2f2f2fb8; display:none; " id="paymentframebox">
	<div style="max-width: 900px;   background-color: #FFFFFF; padding: 10px; margin: auto; margin-top: 3%; border-radius: 10px;">
		<div style="text-align: right; width: 100%; margin-top: 0px; margin-right: 10px; margin-bottom: 10px; position:relative;">
			<div style="position: absolute; left: 8px; font-size: 20px; font-weight: 800;">Payment</div>
			<button type="button" onclick="$('#paymentframebox').hide();" class="btn btn-danger">Close</button>
		</div>
		<iframe width="100%" height="610" frameborder="0" id="paymentframe" name="paymentframe"></iframe>
	</div>
</div>
<style>
	.adminActions {
	position: fixed;
	bottom: 18px;
	left: 15px;
	z-index: 999999999;
	}
	.adminButton {
	height: 60px;
	width: 60px;
	/*background-color: green;*/
	border-radius: 50%; 
	display: block;
	color: #fff;
	text-align: center;
	position: relative;
	z-index: -1;
	}
	.adminButton i {
	font-size: 22px;
	}
	.adminButtons {
	position: absolute;
	width: 100%;
	bottom: 120%;
	text-align: center;
	}
	.adminButtons a {
	display: block;
	width: 45px;
	height: 45px;
	border-radius: 50%;
	text-decoration: none;
	margin: 10px auto 0;
	line-height: 1.15;
	color: #fff;
	opacity: 0;
	visibility: hidden;
	position: relative;
	box-shadow: 0 0 5px 1px rgba(51, 51, 51, .3);
	}
	.adminButtons a:hover {
	transform: scale(1.05);
	}
	.adminButtons a:nth-child(1) {background-color: #25D366; transition: opacity .2s ease-in-out .3s, transform .15s ease-in-out;}
	.adminButtons a:nth-child(2) {background-color: #03a9f4; transition: opacity .2s ease-in-out .25s, transform .15s ease-in-out;}
	.adminButtons a:nth-child(3) {background-color: red; transition: opacity .2s ease-in-out .2s, transform .15s ease-in-out;}
	.adminActions a i {
	position: absolute;
	top: 50%; left: 50%;
	transform: translate(-50%, -50%);
	}
	
	@keyframes blink {
	0% {
	box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.6);
	}
	50% {
	box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
	}
	100% {
	box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.6);
	}
	}
	.adminButton {
	height: 60px;
	width: 60px;
	background-color: green;
	border-radius: 50%;
	display: block;
	color: #fff;
	text-align: center;
	position: relative;
	z-index: -1;
	animation: blink 1.5s ease-in-out infinite;
	}
	.whatappicons{display:none;}
</style>
<div class="adminActions d-none d-md-block" style="">
	
</div>

<!--bottom to top direct btn starts-->
<style>
	.direct-top-main{visibility: hidden;opacity: 0;pointer-events: none;transition: all 300ms ease; overflow: hidden; position: fixed;bottom: 1rem;right:1rem;border-radius: 100px; cursor: pointer;width: 60px;height: 60px;box-shadow: 0 0 10px rgba(0,0,0,0.2);display: grid;place-items: center;z-index: 99999999999999 !important;}
	.direct-top-main.show-scroll-button{visibility: visible;opacity: 1;pointer-events: auto;transition: all 300ms ease;}
	.direct-top-box{background: #fff;width: calc(100% - 12px);height:calc(100% - 12px);display: flex;align-items: center;justify-content: center;border-radius: 100px;}
	.direct-top-box span{font-size: 23px;margin-left: 2px;}
	@media only screen and (min-width: 567px) and (max-width: 1000px){
	.direct-top-main{z-index: 99999999 !important;} 
	}
</style>
<!--<div class="direct-top-main " id="directTopBtn">-->
<!--	<div class="direct-top-box">-->
<!--		<span><i class="fa-solid fa-arrow-up"></i></span>-->
<!--	</div>-->
<!--</div>-->
<script>

	
	function getSearchCityActivity(fromlocation,listsearch){
	var citysearchfieldval = encodeURI($('#'+fromlocation).val());  
	var citysearchfield = citysearchfield;
	
	if(citysearchfieldval!=''){  
	    $('#'+listsearch).show();
	    $('#'+listsearch).load('searchcitylistsactivity.php?keyword='+citysearchfieldval);
	}
	}
</script>
<!--bottom to top direct btn ends-->
 
<a class="whatappicons" href="https://wa.me/7739430347?text=Hi!" target="_blank"><img alt="Loading..." src="images/whatsappicon.png" style="position:fixed; left:20px; bottom:20px; width:56px; z-index:999999;"></a>

<script>
    const checkAnc = document.querySelectorAll('.checkAnchor')
    const moreBtnHeader = document.querySelector('#moreBtnHeader')
    const moreHeaderDiv = $('.moreHeaderDiv');
    const anchorLength = checkAnc.length
    if(anchorLength <= 4){
        moreBtnHeader.style.display = 'none'
    }else{
        moreBtnHeader.style.display = ''
    }
    
    $("#moreBtnHeader").hover(function(){
        moreHeaderDiv.addClass('flex');
    });
    
    $(document).click(function(event) {
        if (moreHeaderDiv.hasClass('flex') && !$(event.target).closest('#moreBtnHeader').length && !$(event.target).closest('.moreHeaderDiv').length) {
            moreHeaderDiv.removeClass('flex');
        }
    });
    
    const anchor = document.querySelectorAll('.checkAnchor');
    anchor.forEach(anc =>{
        if (anc.classList.contains('active')) {
            console.log('The anchor tag has the active class.' + anc.target);
        }
    })
    
</script>

    <script src="./pickadate.js-3.6.2/lib/picker.js"></script>
    <script src="./pickadate.js-3.6.2/lib/legacy.js"></script>
    <script src="./pickadate.js-3.6.2/lib/picker.date.js"></script>


<script>
    $(".testi_Slider").slick({
            prevArrow: '<i class="fa fa-arrow-left"></i>',
            nextArrow: '<i class="fa fa-arrow-right"></i>',
            dots:true,
            autoplay:true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {breakpoint: 600,settings: {arrows:false,}},
                {breakpoint: 375,settings: {arrows:false,}},
            ]
        })

        function dealOfferOpen(imgPath, heading, para){
            $("#dealOfferModal").modal("show");
            $(".dealOfferImg").attr("src",imgPath)
            $(".dealOfferHeading").text(heading.trim())
            $(".dealOfferParagraph").text(para.trim())
        }
        
        
        $(".home_banner_slider").slick({
            arrows:false,
            dots:true,
            autoplay:true,
            slidesToShow: 1,
            slidesToScroll: 1,
        })
</script>        
    <!--        <script src="./pickadate.js-3.6.2/lib/picker.js"></script>-->
    <!--<script src="./pickadate.js-3.6.2/lib/legacy.js"></script>-->
    <!--<script src="./pickadate.js-3.6.2/lib/picker.date.js"></script>-->
        
    
<script>
$('.sample1').lightCarousel();
</script>
<style>
.current .caption, .current .caption span { 
    display: none !important;
}


.prev .fa{font-size: 22px; color: #fff; background-color: #000; padding: 6px; border-radius: 3px;}
.next .fa{font-size: 22px; color: #fff; background-color: #000; padding: 6px; border-radius: 3px;}
.prev:before { display:none;}
.next:before { display:none;}

.thumbnails li {
    width: 18%; 
}
.carousel img{ 
    max-height: 370px !important; min-height: 370px !important;
}
.carousel li { 
    max-height: 370px !important; min-height: 370px !important;
}
.thumbnails li { 
    max-height: 90px !important;min-height: 90px !important;
}
.thumbnails li img{    max-height:80px !important;min-height:80px !important;} 



.carousel img {
    max-height: 450px !important;
    min-height: 450px !important;
}

.carousel li {
    max-height: 450px !important;
    min-height: 450px !important;
}


.thumbnails .selected div:before { border-color: #e52b30; background: #e52b30; }
</style>
<script>

$( function() {
    $( "#departuredate" ).datepicker(
	{
	 minDate: 0,
     changeMonth: true,
     changeYear: true,
     yearRange: '-100:+0',
	 dateFormat: 'dd-mm-yy',
// 	 maxDate: new Date()
	},
	);
  } );
  
function getSearchCityHotel(citysearchfield,cityresultfield,listsearch){
var citysearchfieldval = encodeURI($('#'+citysearchfield).val());  
var citysearchfield = citysearchfield;

if(citysearchfieldval!=''){  
$('#'+listsearch).show();
$('#'+listsearch).load('searchcitylistpack.php?keyword='+citysearchfieldval+'&searchcitylists='+listsearch+'&cityresultfield='+cityresultfield+'&citysearchfield='+citysearchfield);
}
}
</script>
<script>
$(document).ready(function() {
    $('.mainhead').click(function() {
        var maincont = $(this).closest('.maincont');

        var isOpen = maincont.hasClass('open');

        $('.maincont').removeClass('open');
        $('.maincont .arrow').removeClass('rotate');
        $('.maincont .descont').slideUp();

        if (!isOpen) {
            maincont.addClass('open');
            maincont.find('.arrow').addClass('rotate');
            maincont.find('.descont').slideDown();
        }
    });
});
document.querySelector('.maincont').classList.add('open')
document.querySelector('.maincont .arrow').classList.add('rotate')
  </script>
<script>
    // Function to hide the pop-up
    function hidePopup() {
      $("#popupContainer").hide();
    }

    $(function() {

      // Hide the pop-up when the close button is clicked
      $(".popup-close").click(function() {
        hidePopup();
      });

      // Show the pop-up when the page loads
      $("#popupContainer").show();
    });
  </script>
<script>
    $(function() {
      // Open the modal box when the button is clicked
      $("#openModalBtn").click(function() {
        $("#myModal").css("display", "block");
      });
            $("#openModalBtn1").click(function() {
        $("#myModal").css("display", "block");
      });

      // Close the modal box when the close button is clicked
      $(".close").click(function() {
        $("#myModal").css("display", "none");
      });

      // Close the modal box when clicking outside the modal content
      $(window).click(function(event) {
        if (event.target.id === "myModal") {
          $("#myModal").css("display", "none");
        }
      });
    });
  </script>
<script>

    $( function() {
    $( "#departuredate" ).datepicker(
	{
	    minDate: 0,
changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0',
			dateFormat: 'dd-mm-yy',
// 			maxDate: new Date()
	
	},
	);
  } );
  
function getSearchCityPack(citysearchfield,cityresultfield,listsearch){
var citysearchfieldval = encodeURI($('#'+citysearchfield).val());  
var citysearchfield = citysearchfield;

if(citysearchfieldval!=''){  
$('#'+listsearch).show();
$('#'+listsearch).load('searchcitylists.php?keyword='+citysearchfieldval+'&searchcitylists='+listsearch+'&cityresultfield='+cityresultfield+'&citysearchfield='+citysearchfield);
}
}
 
</script>
<script src="trip.json"></script>

<script>
  var placename=document.getElementById("placename").value;
  
for(var i=0;i<places.length;i++){
            var pname=Object.keys(places[i])[0]
            if(pname==placename)
            {
              var obj=places[i][pname]
              var s="<ul>";
              var images=obj.images;
              console.log(images)
              images.forEach((e)=>{
                s+=`<li class="">
                    <img src="${e}">
                    <div class="caption"><span>undefined</span></div>
                    </li>`
              })
              s+="</ul>";
              document.getElementById("carousel").innerHTML=s;
              document.getElementById("thumbnails").innerHTML=s;
              document.getElementById("title").innerHTML=pname;
              document.getElementById("time").innerHTML=obj.duration;
              document.getElementById("cost").innerHTML=obj.price;
            }
        }
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>s