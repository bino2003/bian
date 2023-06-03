@extends('layout.layout')

@section('Content')
@foreach($latestBooks as $latestBook)
<div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3 ">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                        <img src="{{ asset('storage/'.$latestBook->book_image) }}" alt="{{ $latestBook->book_image }}">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>{{$latestBook->name}}</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> {{$latestBook->author}} <a href="news.html"></a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">
                                 {{$latestBook->purchase_number}}</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">{{$latestBook->description}}</a></h4>
                     </div>
                  </div>
               </div>
               @endforeach
               @foreach($mostBoughtBooks as $mostBoughtBook)
<div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3 ">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                        <img src="{{ asset('storage/'.$mostBoughtBook->book_image) }}" alt="{{ $mostBoughtBook->book_image }}">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>{{$mostBoughtBook->name}}</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> {{$mostBoughtBook->author}} <a href="news.html"></a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">
                                 {{$mostBoughtBook->purchase_number}}</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">{{$mostBoughtBook->description}}</a></h4>
                     </div>
                  </div>
               </div>
               @endforeach
               <div class="container">
    <div class="section-title">
      <h2> ABOUT US</h2>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="faq-content">
          <ul class="accordion">
              
            <li>
              <a class="">about us </a>
              <p style="text-align: justify;">  The Kindedo application allows you to download all the e-books you like in Arabic or English and the ability to purchase them. You can also search for a specific book in the library to buy it easily and smoothly. You can also watch books uploaded by members </p>
            </li>
              
            <li>
              <a class="">message</a>
              <p style="text-align: justify;" >Contribute to educating people about the importance of reading and books and facilitating access to their favorite books</p>
            </li>
              
            <li>
              <a>Vision</a>
              <p style="text-align: justify;"> Seeking to expand the horizons of reading among young people </p>
            </li>
              
            <li>
              <a>Goals</a>
              <p style="text-align: justify;">- Helping develop the hobby of reading and community growth.<br>
-     
Books and references can be obtained at any time..<br>
-    
Efficient and up-to-date with technology..<br>
-        The possibility of obtaining the desired books easily.</p>
            </li>
             
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="faq-img">
          <img src="https://socialworkers.org.sa/bibliography/site-assets/img/home-three/23.png" alt="FAQ">
        </div>
      </div>
    </div>
  </div>
       <!-- contact info area start here -->
       <section class="bd-contact-info-area pt-120 pb-95">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-1">
                              <a href="tel:9072003462"><i class="flaticon-phone-call"></i></a>
                           </div>
                           <h6><a href="tel:9072003462">{{Auth::user()->phone}}</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-2">
                              <a href="#"><i class="flaticon-location-pin"></i></a>
                           </div>
                           <h6><a href="#">{{Auth::user()->name}}</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-3">
                              <a href="mailto:support@kindedo.com"><i class="flaticon-email"></i></a>
                           </div>
                           <h6><a href="mailto:support@kindedo.com">{{Auth::user()->email}}</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact info area end here-->

      <!-- contact area start here  -->
      <section class="bd-contact-area pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h3 class="bd-contact-form-title mb-25">Contact Us Right Here</h3>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="name">Name <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="name" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="email">Email <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="email" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="phone">Phone <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="phone" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="subject">Subject <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <select name="subject" id="subject" class="bd-nice-select">
                                    <option>Select Subject</option>
                                    <option>Junior KG</option>
                                    <option>Senior KG</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-input mb-20">
                                 <label for="textarea">Comments <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <textarea name="textarea" id="textarea"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12 mb-30">
                              <div class="bd-contact-agree d-flex align-items-center">
                                 <input class="" type="checkbox" id="check-agree">
                                 <label class="check-label" for="check-agree">Save Data for Next Comment</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-agree-btn">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal">Send
                                          now</span>
                                       <span class="bd-btn-hover">Send
                                          now</span>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-map wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14596.899807208923!2d90.3654215!3d23.8461445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1673765392297!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact area end here  -->

     
   </main>
   <!-- main area end here  -->
               @endsection   