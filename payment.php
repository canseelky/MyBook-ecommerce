<?php
include_once("inc/config.php");
include_once("header.php");
session_start();
$userid= $_SESSION['userid'];
$query = "Select * from Users where idUsers = '$userid' ";
$result = mysqli_query($db,$query);


while ($row = mysqli_fetch_assoc($result)){
    $name = $row['name'];
    $surname = $row['surname'];
}

?>



<head>
<script   src="https://code.jquery.com/jquery-3.6.0.js"   integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="   crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<style>


#red-star{
    color:red;

}
.row{

    display:flex;
    flex-direction:row;


}

.s{
    margin-left:40px;
    padding-top:50px;
   

}

img{
    width:50px;
    height:50px;


}


</style>

<form id= "payment-form">
    
        <h4 style="margin-left:20px; margin-top:20px;">Hello, <i> <?php echo ucwords($name)," ", ucwords($surname); ?> </i></h4>
        <p style="margin-left:20px;">Please fill out the form to complete the order. </p>
        <h5 style="margin-left:20px; margin-top:20px;">Total cost <?php echo $_COOKIE['total'];  ?> &#8378;</h5>

    <fieldset class="uk-fieldset">



    <div class="uk-margin s">
        <label class="uk-form-label"   for="form-stacked-text">Address line 1<label id="red-star">*</label></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="address1" type="text" required>
        </div>
    </div>
    <div class="uk-margin s ">
        <label class="uk-form-label"  for="form-stacked-text">Address line 2</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="address2" type="text">
        </div>
   




    <div class="row">
    <div class="uk-margin s" style=" padding-top:30px">
        <label>City <label id="red-star">*</label> </label>
        <br>
        <select name="city" class="select" id="scity">
    <option value="">Choose...</option>
    <option value="34">İstanbul</option>
    <option value="6">Ankara</option>
    <option value="35">İzmir</option>
    <option value="1">Adana</option>
    <option value="2">Adıyaman</option>
    <option value="3">Afyonkarahisar</option>
    <option value="4">Ağrı</option>
    <option value="68">Aksaray</option>
    <option value="5">Amasya</option>
    <option value="7">Antalya</option>
    <option value="75">Ardahan</option>
    <option value="8">Artvin</option>
    <option value="9">Aydın</option>
    <option value="10">Balıkesir</option>
    <option value="74">Bartın</option>
    <option value="72">Batman</option>
    <option value="69">Bayburt</option>
    <option value="11">Bilecik</option>
    <option value="12">Bingöl</option>
    <option value="13">Bitlis</option>
    <option value="14">Bolu</option>
    <option value="15">Burdur</option>
    <option value="16">Bursa</option>
    <option value="17">Çanakkale</option>
    <option value="18">Çankırı</option>
    <option value="19">Çorum</option>
    <option value="20">Denizli</option>
    <option value="21">Diyarbakır</option>
    <option value="81">Düzce</option>
    <option value="22">Edirne</option>
    <option value="23">Elazığ</option>
    <option value="24">Erzincan</option>
    <option value="25">Erzurum</option>
    <option value="26">Eskişehir</option>
    <option value="27">Gaziantep</option>
    <option value="28">Giresun</option>
    <option value="29">Gümüşhane</option>
    <option value="30">Hakkâri</option>
    <option value="31">Hatay</option>
    <option value="76">Iğdır</option>
    <option value="32">Isparta</option>
    <option value="46">Kahramanmaraş</option>
    <option value="78">Karabük</option>
    <option value="70">Karaman</option>
    <option value="36">Kars</option>
    <option value="37">Kastamonu</option>
    <option value="38">Kayseri</option>
    <option value="71">Kırıkkale</option>
    <option value="39">Kırklareli</option>
    <option value="40">Kırşehir</option>
    <option value="79">Kilis</option>
    <option value="41">Kocaeli</option>
    <option value="42">Konya</option>
    <option value="43">Kütahya</option>
    <option value="44">Malatya</option>
    <option value="45">Manisa</option>
    <option value="47">Mardin</option>
    <option value="33">Mersin</option>
    <option value="48">Muğla</option>
    <option value="49">Muş</option>
    <option value="50">Nevşehir</option>
    <option value="51">Niğde</option>
    <option value="52">Ordu</option>
    <option value="80">Osmaniye</option>
    <option value="53">Rize</option>
    <option value="54">Sakarya</option>
    <option value="55">Samsun</option>
    <option value="56">Siirt</option>
    <option value="57">Sinop</option>
    <option value="58">Sivas</option>
    <option value="73">Şırnak</option>
    <option value="59">Tekirdağ</option>
    <option value="60">Tokat</option>
    <option value="61">Trabzon</option>
    <option value="62">Tunceli</option>
    <option value="63">Şanlıurfa</option>
    <option value="64">Uşak</option>
    <option value="65">Van</option>
    <option value="77">Yalova</option>
    <option value="66">Yozgat</option>
    <option value="67">Zonguldak</option>
</select>

    </div>

    <div class="uk-margin s"  style="padding-top:10px;">
        <label>Zip code <label id="red-star">*</label> </label>
        <br>
        <input class="uk-input uk-form-width-medium" type="text" required >
    </div>

       
    </div>
   
    </fieldset>
  
    <div class="uk-margin s" style=" padding-top:30px">
        <label>Card Number <label id="red-star">*</label> </label>
        <br>
        <input class="uk-input uk-form-width-medium" type="text" required>
    </div>
    <div class="row" style="margin-left:40px;">

    <img src="./static/master.png"  style="margin-right:20px"/>
    <img src="./static/visa.png" style="margin-right:20px"/>
    <img src="./static/paypal.png" style="margin-right:20px" />
    </div>
    <div class="uk-margin s" style=" padding-top:30px">
        <label>Expiration date <label id="red-star">*</label> </label>
        <br>
        <input class="uk-input uk-form-width-medium" type="date" required>
    </div>
    <div class="uk-margin s" style=" padding-top:30px">
        <label>CVV <label id="red-star">*</label> </label>
        <br>
        <input required class="uk-input uk-form-width-medium"  type="text" >
    </div>

   
</form>

<button class="uk-button uk-button-primary uk-button-large" style="margin-left:60px" id = "buybtn" >Buy Now</button>
<br><br><br><br>


<script>

const buyItems = () =>{
    
    var requestObject =  new XMLHttpRequest();
    if(window.XMLHTTPRequest){
  xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject){
        addressInfo();
        requestObject.open("POST", "payment_ajax.php");
        requestObject.setRequestHeader("conntent-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                    let returnedData = requestObject.responseText;
                    $(document).ready(function(){

                                swal({
                                    position: "top-end",
                                    type: "success",
                                    title: "Your order has been received successfully",
                                    showConfirmButton: false,
                                    timer: 2000
})
}); 
setTimeout(function(){  window.location.href = "http://192.168.64.3/web/dashboard.php"; }, 2500);
           

            }   
        }


    }
    var data="emty";
    requestObject.send("data=",data);





}




const buyBtn = document.getElementById("buybtn");
console.log(buyBtn)
buyBtn.addEventListener("click",buyItems);




document.getElementById("payment-form").addEventListener("click", function(event){
  event.preventDefault()
});







const addressInfo = () => {

    const address1 = document.getElementById("address1").value;
    const address2 = document.getElementById("address2").value;
    var e = document.getElementById("scity");
    const city = e.value;

    var requestObject =  new XMLHttpRequest();
let bookArray;

if(window.XMLHTTPRequest){
    xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject){
        requestObject.open("POST","payment_ajax.php");
        requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                    let returnedData = requestObject.responseText;
                  
                    

            }   
        }


    }

    requestObject.send("address1="+address1+"&address2="+address2+"&city="+city);


}


</script>



<?php include 'footer.php'; ?>