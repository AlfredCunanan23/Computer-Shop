<template>
<v-app>

    <section>
        <main>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4" style="top: 7%;">
                <div class="container-fluid">
                    <router-link to="/home" class="navbar-brand">Computer Shop || Crud</router-link>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" exact-active-class="active">
                                <router-link to="/home" class="nav-link">Home</router-link>
                            </li>
                            <li class="nav-item" exact-active-class="active">
                                <router-link to="/about" class=" nav-link">About Us</router-link>
                            </li>
                            <li class="nav-item" exact-active-class="active">
                                <router-link to="/contact" class=" nav-link">Contact Us</router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tables
                                </a>
                                <ul class="dropdown-menu dropdown-menu bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li>
                                            <router-link to="/users" class="dropdown-item text-light">Users</router-link>
                                        </li>
                                        <li>
                                            <router-link to="/ListOfProducts" class=" dropdown-item text-light">Product List</router-link>
                                        </li>
                                        <li>
                                            <router-link to="/orders" class=" dropdown-item text-light">Order List</router-link>
                                        </li>
                                </ul>
                            </li>
    
                        </ul>
                    </div>
                </div>
            </nav>
            <br>
            <br>
            <br>
            <br>
            <!--content-->
            <div class="container">   
                <router-view></router-view>
            </div>
            <!--content end-->
    
        </main>
    
        <footer class="bg-dark text-center text-white p-4">
    
      <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                 <a class="foot" href="/home">Comshop.com/ComputerShop</a>
            </div>
      <!-- Copyright -->
        </footer>
    </section>
</v-app>
    
</template>

<script>
    export default {}
</script>

<style>
main{
  background-image: url("../../../asset/Hand\ Painted\ House.jpeg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  margin-top: -4%;
}
footer{
width:100%; 
bottom: 0;
display: flex; 
position: absolute;
margin-top: -1%;
}
.navbar-brand{
    font-size:x-large;
}
.foot{
    color: white;
    font-size: larger;
}
</style>