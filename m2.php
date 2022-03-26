<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: arial;
}
* a {
  text-decoration: none;
}
* li {
  list-style: none;
}
.container {
  min-height: 120vh;
  padding-bottom: 50px;
  margin: 0 auto;
  position: relative;
}
.bg {
  position: relative;
  width: 100%;
  height: 100%;
}
.bg::after {
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: -1;
  filter: brightness(45%);
  background-image: url("https://mir-s3-cdn-cf.behance.net/project_modules/1400/9bc27292880429.5e569ff84e4d0.gif");
  background-size: cover;
  background-position: center;
}
.navBar {
  display: flex;
  width: 85%;
  justify-content: space-between;
  margin: 0 auto;
  align-items: center;
  height: 15vh;
}
.navBar ul {
  display: flex;
  align-items: center;
}
.navBar ul li {
  padding: 0 25px;
}
.navBar ul li a {
  font-size: 1rem;
  color: #fff;
  font-weight: 400;
  letter-spacing: 1.5px;
}
.navBar .logo a {
  font-size: 2.3rem;
  color: #fff;
}
.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 85%;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  align-items: center;
}
.phuket {
  color: #fff;
  padding: 25px;
}
.card {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px;
}
.card h2 {
  color: #fff;
  position: absolute;
  bottom: 15px;
  left: 20px;
  font-size: 1.6rem;
  letter-spacing: 1px;
}
.card .box1,
.box2,
.box3,
.box4 {
  width: 100%;
  height: 800px;
  background-position: center;
  background-size: cover;
  position: relative;
  border-radius: 50px;
  cursor: pointer;
}
.box1 {
  background-image: url("https://images.unsplash.com/photo-1579683670728-96c9abc7a088?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80");
}
.box2 {
  background-image: url("https://scontent.fbkk10-1.fna.fbcdn.net/v/t39.30808-6/251651626_103614445461584_7134841878420350880_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHQI3rDX2GQ43oQ4Znc-u7-RwDJNdq6N5RHAMk12ro3lDmVm_nKtZanU0QuRg6xOkgfgvYfEuT6YD0F0cdtPwWq&_nc_ohc=g6nArvrGPm8AX8Z8S-a&tn=3gqXYdir2DSPVyac&_nc_ht=scontent.fbkk10-1.fna&oh=00_AT-67u1wFeeXy60T27nANFgUb7MZ9SY-I7ID3x1II9veFw&oe=6212D5CE");
}
.box3 {
  background-image: url("https://images.unsplash.com/photo-1556609894-0ae309cb8354?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80");
}
.box4 {
  background-image: url("https://images.unsplash.com/photo-1601225612316-b4733315a717?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80");
}
.phuket h2 {
  font-size: 2rem;
  letter-spacing: 2.8px;
}
.text {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.txt h1 {
  font-size: 7rem;
}
.phuket p {
  opacity: 0.4;
}
.tnx h2 i {
  color: #fd7e13;
}
.card div {
  transition: 0.5s;
}
.card div:hover {
  transition: 0.3s;
  transform: translateY(-10px);
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container bg">
  <div class="navBar">
    <div class="logo">
    </div>
  <div class="content">
    <div class="phuket" style="width:50%;">
      <div class="tnx">
        <h2><i class="fas fa-map-marker-alt"></i> ประวัติส่วนตัว</h2>
      </div>
      <div class="txt">
        <h1>Name : Tongswiss Khansamrit</h1>
        <h1>Nickname : Kla</h1>
        <h1>Age : 18</h1>
        <h1>Birthday : 03 Nov 2002</h1>
        <h1>Favorite Color : Blue</h1>
      </div>
      <p>หิววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววววว</p>
    </div>
    <div class="card" style="width:100%;">
      <a href="https://www.google.com/" target="_blank">
        <div class="box2">
          <h2>โคกเท่อะคราฟฟ</h2>
        </a>
      <!--       <div class="box2">
    </div>
        <h2>Island</h2>
      </div> -->
    </div>
  </div>

</div>