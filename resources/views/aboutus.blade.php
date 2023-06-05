@extends("main")

@section("master")

<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 50px;
  padding: 0 10px;
}


.card {
  box-shadow: 0 4px 8px 0 orange;
  margin: 8px;
  text-align: center;


}

.aboutus-head {
  padding: 4px;
  text-align: center;
  /* background-color: #474e5d; */
  color: white;
  box-sizing: border-box;
  

}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

/* .title {
  color: black;
  text-align: center;
  box-sizing: border-box;


} */

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
<section id="about-us" class="about-us section">
    <div class="container">
        <div class="aboutus-head">
            
                  <div class="about-section">
                   <img src="assets/images/logo.png" alt="" srcset="">
                    <h5 style="color:black;padding:5px;">The Real Smell Of Cosmetics & Jewellery</h5>
                   <p style="padding: 5px;"> Eshop is a vital component of the overall user experience. We provides an opportunity for the users to connect with us.</p>
                  </div>
            
        </div>
            <div class="container">
                <div class="row">
                     <div class="column">
                        <div class="card">
                          <!-- <img src="/w3images/team2.jpg" alt="Mike" style="width:100%"> -->
                             <h2>Our History</h2>
                               <p style="color:black; text-align:center;font-size:15px;padding: 15px;">We are an ecommerce website that offers a wide range of products to customers around the world. Our goal is to provide a seamless shopping experience, from browsing to checkout, so that customers can easily find what they are looking for and make a purchase with ease</p>
                         </div>
                    </div>
                    <div class="column">
                        <div class="card">
                                <!-- <img src="/w3images/team2.jpg" alt="Mike" style="width:100%"> -->
                                 <h2>Mission Statement</h2>
                               <p style="color:black; text-align:center;font-size:18px;padding: 15px;">our mission is to make online shopping easy, convenient, and enjoyable for everyone. We are passionate about what we do and are dedicated to providing the highest level of service to our customers..</p>
                         </div>
                     </div>
                     <div class="column">
                          <div class="card">
                              <!-- <img src="/w3images/team2.jpg" alt="Mike" style="width:100%"> -->
                              <h2>Customer Service</h2>
                               <p style="color:black; text-align:center;font-size:18px;padding: 15px;">We understand that shopping online can sometimes be confusing or frustrating, which is why we have a dedicated customer service team that is available to help with any questions or concerns that our customers may have</p>
                         </div>  
                    </div>
                    <div class="column">
                        <div class="card">
                          <!-- <img src="/w3images/team2.jpg" alt="Mike" style="width:100%"> -->
                             <h2>Shipping Policy</h2>
                               <p style="color:black; text-align:center;font-size:16px;padding: 15px;">We also offer fast and reliable shipping options to ensure that customers receive their orders as quickly as possible. We are constantly working to improve our website and offerings to provide the best possible shopping experience for our customers.</p>
                         </div>
                    </div>
                </div>
                    
                </div>
                
            </div>        
    </div>
</section>




@endsection("master")