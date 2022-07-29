<template>
  <div>
    <h1>Want to know more about US?</h1>
      <br>
        <p class="p2">HERE YOU CAN FIND DIFFERENT TYPES OF COMPUTER!</p>

    <div class="container2">
        <div class="card1">
              <img src="../../../asset/pic1.png" alt="Avatar" style="width:100%">
            <div class="container1">
              <h4 class="hd4"><b>OFFICE COMPUTERS</b></h4>
            </div>
        </div>
            <div class="card1">
              <img src="../../../asset/pic1.png" alt="Avatar" style="width:100%">
            <div class="container1">
              <h4 class="hd4"><b>GAMING COMPUTERS</b></h4>
            </div>
        </div>
            <div class="card1">
              <img src="../../../asset/pic1.png" alt="Avatar" style="width:100%">
            <div class="container1">
              <h4 class="hd4"><b>STUDY COMPUTERS</b></h4>
            </div>
        </div>
    </div>
    
  </div>
</template>

<script>
export default {
  name: 'app'
  
}
</script>

<style>

h1{
  color: black;
}
.hd4{
  text-align: center;
  color: rgb(20, 19, 19);
}
.p2{
  font-weight: bold;
  padding-left: 0;
  text-align: center;
  color: rgb(211, 203, 203);
}
.card1 {
  background-color: rgba(116, 105, 105, 0.445);
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  height: 50%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container1 {
  background-color: rgba(65, 57, 57, 0.548);
  padding: 2px 16px;
}
.container2{
  width: 100%;
  height: 50%;
  display: flex;
  justify-content: space-evenly;

}
</style>