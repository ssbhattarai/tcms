@extends('frontend.layouts.app')
@section('content')


<div class="page-title-area">
    <div class="d-table">
       <div class="d-table-cell">
          <div class="container">
             <h2>Blog Details</h2>
          </div>
       </div>
    </div>
    <div class="shape1"><img src="{{ asset('frontend/images/shape1.png') }}" alt="shape"></div>
    <div class="shape2 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
    <div class="shape3"><img src="{{ asset('frontend/fonts/shape3.svg') }}" alt="shape"></div>
    <div class="shape4"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape5"><img src="{{ asset('frontend/images/shape5.png') }}" alt="shape"></div>
    <div class="shape6 rotateme"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape7"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
 </div>
 <div class="blog-details-area ptb-80">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-12">
             <div class="blog-details-desc">
                <div class="article-image"><img src="{{ URL::asset('storage/') }}/{{ $blog->image }}" alt="image"></div>
                <div class="article-content">
                   <div class="entry-meta">
                      <ul>
                         <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                               <circle cx="12" cy="12" r="10"/>
                               <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                         </li>
                         <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                               <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                               <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <a href="#">{{ $blog->written_by }}</a>
                         </li>
                      </ul>
                   </div>
                   <h2>{{ $blog->title }}</h2>
                   {!! $blog->description !!}



                </div>
                {{-- <div class="article-footer">
                   <div class="article-tags"><a href="#">Fashion</a><a href="#">Smart</a><a href="#">Marketing</a><a href="#">Games</a><a href="#">Travel</a></div>
                </div>
                <div class="startp-post-navigation">
                   <div class="prev-link-wrapper">
                      <div class="info-prev-link-wrapper"><a href="#"><span class="image-prev"><img src="images/blog2.jpg" alt="image"><span class="post-nav-title">Prev</span></span><span class="prev-link-info-wrapper"><span class="prev-title">Don&#x27;t buy a tech gift until you read these rules</span><span class="meta-wrapper"><span class="date-post">January 21, 2021</span></span></span></a></div>
                   </div>
                   <div class="next-link-wrapper">
                      <div class="info-next-link-wrapper"><a href="#"><span class="next-link-info-wrapper"><span class="next-title">The golden rule of buying a phone as a gift</span><span class="meta-wrapper"><span class="date-post">January 21, 2021</span></span></span><span class="image-next"><img src="images/blog3.jpg" alt="image"><span class="post-nav-title">Next</span></span></a></div>
                   </div>
                </div> --}}
                {{-- <div class="comments-area">
                   <h3 class="comments-title">2 Comments:</h3>
                   <ol class="comment-list">
                      <li class="comment">
                         <article class="comment-body">
                            <footer class="comment-meta">
                               <div class="comment-author vcard"><img src="images/client1.jpg" class="avatar" alt="image"><b class="fn">John Jones</b><span class="says">says:</span></div>
                               <div class="comment-metadata">April 24, 2019 at 10:59 am</div>
                            </footer>
                            <div class="comment-content">
                               <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                            </div>
                            <div class="reply"><a href="#" class="comment-reply-link">Reply</a></div>
                         </article>
                         <ol class="children">
                            <li class="comment">
                               <article class="comment-body">
                                  <footer class="comment-meta">
                                     <div class="comment-author vcard"><img src="images/client2.jpg" class="avatar" alt="image"><b class="fn">Steven Smith</b><span class="says">says:</span></div>
                                     <div class="comment-metadata">April 24, 2019 at 10:59 am</div>
                                  </footer>
                                  <div class="comment-content">
                                     <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                  </div>
                                  <div class="reply"><a href="#" class="comment-reply-link">Reply</a></div>
                               </article>
                            </li>
                            <ol class="children">
                               <li class="comment">
                                  <article class="comment-body">
                                     <footer class="comment-meta">
                                        <div class="comment-author vcard"><img src="images/client3.jpg" class="avatar" alt="image"><b class="fn">Sarah Taylor</b><span class="says">says:</span></div>
                                        <div class="comment-metadata">April 24, 2019 at 10:59 am</div>
                                     </footer>
                                     <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                     </div>
                                     <div class="reply"><a href="#" class="comment-reply-link">Reply</a></div>
                                  </article>
                               </li>
                            </ol>
                         </ol>
                      </li>
                      <li class="comment">
                         <article class="comment-body">
                            <footer class="comment-meta">
                               <div class="comment-author vcard"><img src="images/client4.jpg" class="avatar" alt="image"><b class="fn">John Doe</b><span class="says">says:</span></div>
                               <div class="comment-metadata">April 24, 2019 at 10:59 am</div>
                            </footer>
                            <div class="comment-content">
                               <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                            </div>
                            <div class="reply"><a href="#" class="comment-reply-link">Reply</a></div>
                         </article>
                         <ol class="children">
                            <li class="comment">
                               <article class="comment-body">
                                  <footer class="comment-meta">
                                     <div class="comment-author vcard"><img src="images/client5.jpg" class="avatar" alt="image"><b class="fn">James Anderson</b><span class="says">says:</span></div>
                                     <div class="comment-metadata">April 24, 2019 at 10:59 am</div>
                                  </footer>
                                  <div class="comment-content">
                                     <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                  </div>
                                  <div class="reply"><a href="#" class="comment-reply-link">Reply</a></div>
                               </article>
                            </li>
                         </ol>
                      </li>
                   </ol>
                   <div class="comment-respond">
                      <h3 class="comment-reply-title">Leave a Reply</h3>
                      <form class="comment-form">
                         <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>Required fields are marked<span class="required">*</span></p>
                         <p class="comment-form-comment"><label>Comment</label><textarea name="comment" id="comment" cols="45" rows="5" maxLength="65525" required></textarea></p>
                         <p class="comment-form-author"><label>Name <span class="required">*</span></label><input type="text" id="author" name="author" required></p>
                         <p class="comment-form-email"><label>Email <span class="required">*</span></label><input type="email" id="email" name="email" required></p>
                         <p class="comment-form-url"><label>Website</label><input type="url" id="url" name="url"></p>
                         <p class="comment-form-cookies-consent"><input type="checkbox" value="yes" name="comment-cookies-consent" id="comment-cookies-consent"><label for="comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                         <p class="form-submit"><input type="submit" name="submit" id="submit" class="submit" value="Post Comment"></p>
                      </form>
                   </div>
                </div> --}}
             </div>
          </div>
          <div class="col-lg-4 col-md-12">
             <div class="widget-area" id="secondary">
                {{-- <div class="widget widget_search">
                   <form class="search-form">
                      <label><input type="search" class="search-field" placeholder="Search..."></label>
                      <button type="submit">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                         </svg>
                      </button>
                   </form>
                </div> --}}
                <div class="widget widget_startp_posts_thumb">
                   <h3 class="widget-title">Read More</h3>
                   @foreach ($recent as $r)
                    <article class="item">
                        <a class="thumb" href="{{ route('blog.view', $r->slug) }}"><span class="fullimage cover bg1" role="img"></span></a>
                        <div class="info">
                            <time>{{ \Carbon\Carbon::parse($r->created_at)->diffForHumans() }}</time>
                            <h4 class="title usmall"><a href="{{ route('blog.view', $r->slug) }}">{{ $r->title }}</a></h4>
                        </div>
                        <div class="clear"></div>
                    </article>
                   @endforeach

                </div>
                <div class="widget widget_categories">
                   <h3 class="widget-title">Categories</h3>
                   <ul>
                       @foreach ($category as $cat)

                       <li><a href="{{ url('/blogs/') }}/{{ $cat->slug }}">{{ $cat->name }}</a></li>
                       @endforeach
                   </ul>
                </div>
                {{-- <div class="widget widget_tag_cloud">
                   <h3 class="widget-title">Tags</h3>
                   <div class="tagcloud"><a href="#">IT <span class="tag-link-count">(3)</span></a><a href="#">Spacle <span class="tag-link-count">(3)</span></a><a href="#">Games <span class="tag-link-count">(2)</span></a><a href="#">Fashion <span class="tag-link-count">(2)</span></a><a href="#">Travel <span class="tag-link-count">(1)</span></a><a href="#">Smart <span class="tag-link-count">(1)</span></a><a href="#">Marketing <span class="tag-link-count">(1)</span></a><a href="#">Tips <span class="tag-link-count">(2)</span></a></div>
                </div> --}}
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
