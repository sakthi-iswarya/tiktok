@extends('web.layout.web')
@section('content')

@include('web.include.header')

   
   <section class="followers">
         <div class="container">
           <div class="row">
             <div class="col-lg-6">
              <h1 class="max-300 text-white " style="padding-top:200px;">Buy TikTok Likes and Followers starting at $1.00</h1><br>
              <p class="max-300 text-white">Are you jealous of other Tik Tokers? Our services will strengthen your content and give it the push it needs to go viral.</p>
              <div class="trustpilot d-table mt-3">
                  <img src="./assets/img/gr.jpg" style="width:50%;">
                  <p class="text-white">4.8 | Rated Excellent on Trustpilot</p>
                </div><br>
                <div>
                <button type="button" class="btn btn-outline-success text-white"><i class="fa-solid fa-heart" style="padding-right:10px;"></i>Buy TikTok Likes</button>
                <button type="button" class="kite btn btn-outline-success text-white"><i class="fa-solid fa-user-group" style="padding-right:10px;"></i>Buy TikTok Followers</button>
              </div>
             </div>

             <div class="b1 col-md-5" style="padding-top:230px;">
                <div class="assets-profile">
                  <div class="assets-card">
                    <img src="./assets/img/tik1.jpeg">
                    <span class="profile-name">@TikRoyal</span>
                    <div class="profile-details">
                      <div class="section"><p>105</p><span>Following</span></div>
                      <div class="section"><p class="animation-followers">162.1k</p><span>Followers</span></div>
                      <div class="section"><p class="animation-likes">5.2M</p><span>Likes</span></div>
                    </div>
                  </div>
                  <div class="assets-popular asset-floating">
                    <div class="badge-style text-center"><i class="fa-solid fa-circle-check" style="color: #fafafa;"></i></div><span>Popular creator</span></div>
                    <div class="assets-comment-1 asset-floating"><span>Perfect 🥰</span></div>
                    <div class="assets-comment-2 asset-floating"><span>So cool! 😎</span></div>
                    <div class="assets-comment-3 asset-floating"><span>Best content! 👌</span></div>
                    
                </div>
              </div>
             </div>
           </div>
       </section>


           <section class="growth pt-15 pb-15">
         <div class="container">
           <div class="row">
            <div class="col-lg-4">
             <h1>Own Tik Tok With TikRoyal</h1>
             <p>We promise to provide the BEST products on the market, Your page and videos are in safe hands, Prepare to see them soar.</p>
           </div>
           </div>
           <div class="row pt-15">
             <div class="col-lg-6">
               <img class="g1" src="./assets/img/g1.svg" style="width:100px;">
               <h3>Growth</h3>
               <p class="max-400">The secret to worldwide success and recognition is showing how big you already are, Come grow with us.</p>
             </div>
             <div class="col-lg-6">
               <img class="g2" src="./assets/img/g2.svg" style="width:100px;">
               <h3>Trust</h3>
               <p class="max-400">Our years of experience in the field = your guarantee that we provide top-notch quality products and services.</p>
             </div>
           </div>
           <div class="row pt-15">
             <div class="col-lg-6">
               <img class="g3" src="./assets/img/g3.svg" style="width:100px;">
               <h3>Packages</h3>
               <p class="max-400">Get access to highly valuable services any page owner needs, including performance insights for even further improvement.</p>
             </div>
             <div class="col-lg-6">
               <img class="g4" src="./assets/img/g4.svg" style="width:100px;">
               <h3>Quick Shipping</h3>
               <p class="max-400">You want your services, and you want them NOW, We think the same and dispatch orders as soon as we can.</p>
             </div>
           </div>
         </div>
       </section>

    


        @include('web.include.footer')

     @endsection
