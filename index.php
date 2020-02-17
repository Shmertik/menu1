<link href="https://fonts.googleapis.com/css?family=Muli:400,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
    margin: 0;
    font-family: "Roboto";
}
body{
    background: white;
}
#menu{
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 90%;
    background: white;
    z-index: 100;
    display: flex;
    flex-direction: row;
    position: absolute;
    left: -100%;
    transition: left .4s, transform .6s;
}
#menu.open {
    width: 100%;
    left: 0;
}
#menu_logo{
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: rgba(110, 110, 110, 1);
}
#menu_logo p:nth-child(1){
    font-family: "Roboto";
    font-weight: 800;
    font-size: 3em;
}
#menu_logo p:nth-child(2){
    font-family: "Roboto";
    font-size: 1em;
}
#menu_elements{
    width: 50%;
    display: inline-block;
    display: flex;
    flex-direction: column;
    z-index: 101;
    font-weight: 700;
    font-size: 20px;
    color: rgba(110, 110, 110, 1);
    justify-content: center;
    align-items: center;
}
.menu_element{
    display: inline-block;
    margin: 10px;
    width: 250px;
    height: 50px;
    display: flex;
    flex-direction: row;
    background: white;
    box-shadow: 0 9px 30px 3px rgba(0,0,0,.46);
    border-radius: 25px;
    transition: all 0.3s ease;
}
.menu_element:hover{
    -webkit-transform: scale(1.05);
  	-ms-transform: scale(1.05);
 	transform: scale(1.05);
	transition: all 0.3s ease;
	box-shadow: 0 18px 30px 3px rgba(0,0,0,.46);
	cursor: pointer;
}
#menu_elements div svg{
    display: inline-block;
    width: 100px;
    height: 40px;
    margin: 5px;
}
#menu_elements div div p{
    white-space: nowrap;
}
#menu_elements div div{
    width: 140px;
    height: 100%;
    white-space: nowrap;
    display: flex;
    //justify-content: center;
    align-items: center;
}
#menu_button{
    width: 50px;
    transition: all 0.3s ease;
    z-index: 102;
}
#menu_button:hover{
    filter: drop-shadow(0 0 10px rgba(110, 110, 110, 1));
    -webkit-transform: scale(1.05);
  	-ms-transform: scale(1.05);
 	transform: scale(1.05);
	transition: all 0.3s ease;
	cursor: pointer;
}
#nav_div{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 50px;
    background: white;
    display: flex;
    flex-direction: row;
    justify-content: center;
    font-weight: 700;
    color: rgba(110, 110, 110, 1);
    box-shadow: 0 3px 10px 1px rgba(0,0,0,.48);
}
#nav_div div{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
#nav_logo{
    padding-left: 20px;
    width: calc(100% - 250px);
    font-size: 25px;
}
#menu_close_button.active{
    position: fixed;
    top: 50px;
    right: 50px;
    transition: top .4s, transform .6s;
}
#menu_close_button{
    position: fixed;
    top: -50px;
    right: 50px;
    width: 50px;
    z-index: 102;
    transition: top .4s, transform .6s;
}
#menu_close_button:hover{
    filter: drop-shadow(0 0 10px rgba(110, 110, 110, 1));
    -webkit-transform: scale(1.05);
  	-ms-transform: scale(1.05);
 	transform: scale(1.05);
	transition: all 0.3s ease;
	cursor: pointer;
}
#profile_link{
    width: 500px;
    font-size: 15px;
}
@media screen and (max-width: 1000px){
	#menu{
        flex-direction: column;
    }
    #menu_logo{
        width: 100%;
        height: 25%;
    }
    #menu_elements{
        width: 100%;
        height: 75%;
    }
    #menu_close_button.active{
        top: 20px;
        right: 20px;
    }
    #nav_logo{
        width: calc(100% - 50px);
    }
    #profile_link{
        display: none!important;
    }
}
</style>
<div id="menu">
    <div id="menu_logo">
        <p>School Informer</p>
        <p>Created by S-World</p>
    </div>
    <div id="menu_elements">
        <div class="menu_element">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="rgba(110, 110, 110, 1)"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            <div><a href="/dashboard"><p>Главная</p></a></div>
        </div>
        <div class="menu_element">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" fill="rgba(110, 110, 110, 1)"/></svg>
            <div><a href="/courses"><p>Курсы</p></a></div>
        </div>
        <div class="menu_element">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 10H7v2h10v-2zm2-7h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zm-5-5H7v2h7v-2z" fill="rgba(110, 110, 110, 1)"/></svg>
            <div><a href="/marks"><p>Оценки</p></a></div>
        </div>
        <div class="menu_element">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="rgba(110, 110, 110, 1)"/><path d="M0 0h24v24H0z" fill="none"/></svg>
            <div><a href="/profile"><p>Профиль</p></a></div>
        </div>
        <div class="menu_element">
            <svg xmlns="http://www.w3.org/2000/svg" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16 17v-3H9v-4h7V7l5 5l-5 5M14 2a2 2 0 0 1 2 2v2h-2V4H5v16h9v-2h2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9z" fill="rgba(110, 110, 110, 1)"/></svg>
            <div><a href="/dashboard/logout.php"><p>Выход</p></a></div>
        </div>
    </div>
</div>
<div id="menu_close_button" onclick="closeMenu()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="rgba(110, 110, 110, 1)"/><path d="M0 0h24v24H0z" fill="none"/></svg>
</div>
<div id="nav_div">
    <div id="nav_logo"><p>School Informer</p></div>
    <div id="profile_link"><p>Пользователь: </p></div>
    <div id="menu_button" onclick="openMenu()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" fill="rgba(110, 110, 110, 1)"/></svg></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    function closeMenu(){
        menu.className = menu_button.className = menu_close_button.className = "";
        menu_close_button.className = "";
    }
    function openMenu(){
        menu.className = menu_button.className = menu_close_button.className = "open";
        menu_close_button.className = "active";
    }
</script>