@extends('layouts.index')
@section('title', 'KatanyaJati')

@section('content')
  <main>
    @include('layouts.loading')
    @include('layouts.menu')

    <section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background={{ asset("/images/bg-welcome.jpg") }}>
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
          <div class="font-alt mb-40 titan-title-size-4">KatanyaJati.me</div><a class="section-scroll btn btn-border-w btn-round" href="#">Learn More</a>
        </div>
      </div>
    </section>
    <div class="main">
      <section class="module pb-0" id="services">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="module-title font-alt">Hi, Namaku Jati.</h2>
              <div class="module-subtitle font-serif">
                Sejak memulai karir sebagai Software Developer lebih dari 3 tahun yang lalu, setidaknya saya telah mempunyai pengalaman bekerja sebagai karyawan kantoran maupun sebagai seorang freelancer, dan tak jarang juga berkolaborasi dengan orang-orang yang sangat berbakat untuk membuat sebuah produk digital untuk keperluan bisnis dan konsumen.
              </div>
            </div>
          </div>
          <div class="row multi-columns-row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="icon-desktop"></span></div>
                <h3 class="features-title font-alt">Website</h3>
                <p>
                  Website? I enjoy bringing ideas to life in the browser.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="icon-phone"></span></div>
                <h3 class="features-title font-alt">Mobile Application</h3>
                <p>
                  Salah satu yang paling menyenangkan yaitu membangun aplikasi mobile, baik untuk platform Android & iOS.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="icon-mobile"></span></div>
                <h3 class="features-title font-alt">Responsive design</h3>
                <p>
                  Dengan desain yang responsive membuat pengalaman berselancar lebih optimal.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="icon-tools"></span></div>
                <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
                <p>
                  ...
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="module pb-0" id="works">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">PROJECTS</h2>
              <div class="module-subtitle font-serif"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="filter font-alt" id="filters">
                <li><a class="current wow fadeInUp" href="#" data-filter="*">Semua</a></li>
                <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Mobile Apps</a></li>
                <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Website</a></li>
                <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
          <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-1.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Corporate Identity</h3>
                <div class="work-descr">Illustration</div>
              </div></a></li>
          <li class="work-item marketing photography"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-2.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Bag MockUp</h3>
                <div class="work-descr">Marketing</div>
              </div></a></li>
          <li class="work-item illustration photography"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-3.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Disk Cover</h3>
                <div class="work-descr">Illustration</div>
              </div></a></li>
          <li class="work-item marketing photography"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-4.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Business Card</h3>
                <div class="work-descr">Photography</div>
              </div></a></li>
          <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-5.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Business Card</h3>
                <div class="work-descr">Webdesign</div>
              </div></a></li>
          <li class="work-item marketing webdesign"><a href="portfolio-single-1.html">
              <div class="work-image"><img src={{ asset("/images/work-6.jpg") }} alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Business Cards in paper clip</h3>
                <div class="work-descr">Marketing</div>
              </div></a></li>
        </ul>
      </section>
      <section class="module-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
              <div class="callout-text font-alt">
                <h3 class="callout-title">Ingin lihat project lainnya?</h3>
                <p>Klik aja tombol di kanan</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
              <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Lihat Portfolio</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="module" id="alt-features">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Keahlian</h2>
              <div class="module-subtitle font-serif">
                Berikut adalah beberapa keahlian yang saya kuasai
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-lg-2 hidden-xs hidden-sm"></div>

            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="45" height="45"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f05340"><path d="M41.0986,27.52c-0.14643,0.00636 -0.2923,0.02207 -0.43672,0.04703l-37.84,6.88672c-1.0759,0.19601 -1.99453,0.89187 -2.47457,1.8745c-0.48004,0.98262 -0.46431,2.13495 0.04238,3.1041l41.28,79.12c0.75219,1.43818 2.40717,2.15506 3.97078,1.72l37.14797,-10.32l20.86844,36.24094c0.83703,1.45672 2.60379,2.09582 4.17906,1.51172l58.50016,-21.62094c0.99229,-0.36687 1.7606,-1.16988 2.08332,-2.1774c0.32272,-1.00751 0.16395,-2.10748 -0.43051,-2.9826l-19.75984,-29.14594l21.2514,-5.90578c1.07243,-0.29698 1.93499,-1.09434 2.31517,-2.14018c0.38018,-1.04584 0.23103,-2.21097 -0.40033,-3.12732l-18.91328,-27.43266c-0.82404,-1.19259 -2.3072,-1.74072 -3.70875,-1.37062l-25.80672,6.79265c-1.07868,0.28362 -1.95294,1.07256 -2.34544,2.11656c-0.3925,1.044 -0.25454,2.21349 0.37012,3.1375l16.17875,23.865l-51.07594,14.18328l-41.83766,-72.65656c-0.64537,-1.12158 -1.8655,-1.78616 -3.15781,-1.72zM39.50625,34.76953l39.7414,69.02844l-32.76734,9.1039l-37.82656,-72.51547zM148.18875,59.06453l14.79469,21.47312l-18.81922,5.23391l-14.75437,-21.76203zM141.23485,93.71985l18.5975,27.43265l-51.66047,19.09469l-18.53703,-32.19625z"></path></g></g></svg>
                </div>
                <h3 class="alt-features-title font-alt">Laravel</h3>Salah satu bahasa yang saya pakai untuk membangun sebuah website.
              </div>
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" 
                    width="45" height="45"
                    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 304"><path d="M13.104 287.306c-5.204 0-6.717-3.03-6.717-7.57c0-1.513.19-3.22.424-5.018c1.14-7.851 3.923-12.343 10.64-12.343c4.543 0 6.758 2.032 6.758 5.722v1.799h4.507c.05 0 .05-1.656.05-2.033c0-5.392-3.265-10.506-11.308-10.506c-10.929 0-15.423 5.937-17.079 17.576c-.237 1.562-.379 3.02-.379 4.576c0 6.86 2.699 13.1 12.349 13.1c7.332 0 11.687-3.575 14.24-7.975l-4.306-2.9c-2.79 4.401-5.82 5.572-9.179 5.572zm29.57-21.668c-8.754 0-12.536 4.492-13.813 13.432a23.325 23.325 0 0 0-.24 3.124c0 5.77 2.697 10.362 10.17 10.362c8.754 0 12.587-4.685 13.864-13.486c.142-1.134.237-2.175.237-3.215c.002-5.865-2.788-10.217-10.218-10.217zm3.643 13.435c-.947 6.483-2.979 8.47-6.814 8.47c-3.073 0-4.586-1.278-4.586-5.11c0-.947.096-2.081.284-3.36c.947-6.433 2.839-8.42 6.718-8.42c3.123 0 4.682 1.277 4.682 5.156c0 .946-.096 2.035-.284 3.264zm28.58-21.246l-1.465 8.685c-.094.755-.046.504.24 1.214c-1.372-1.04-3.834-1.728-5.49-1.728c-7.854 0-12.252 3.555-13.67 13.49a19.414 19.414 0 0 0-.237 3.171c0 7.241 4.257 9.94 9.98 9.94c2.416 0 4.78.05 6.623-1.509l.471 2.943h4.543l5.298-36.206h-6.293zm-4.494 28.342c-2.127 1.274-4.207 1.562-5.484 1.562c-3.454 0-4.4-1.799-4.4-4.683c0-1.089.142-2.363.333-3.739c1.086-7.521 3.5-8.848 6.623-8.848c2.032 0 3.592.333 5.062 1.139l-2.134 14.569zm24.603-20.531c-8.66 0-12.725 4.113-14.099 13.432c-.144 1.137-.239 2.226-.239 3.266c0 6.387 3.266 10.22 10.454 10.22c5.583 0 9.75-2.32 11.972-6.578l-4.779-1.94c-1.37 2.08-3.215 3.5-6.48 3.5c-3.5 0-4.92-.942-4.92-4.065c0-.616.048-1.511.143-1.511h17.076c.24-2.414.52-4.12.52-5.535c0-4.728-1.796-10.79-9.648-10.79zm3.263 11.499H87.861c1.043-2.414 2.79-6.15 6.387-6.15c2.79 0 4.164 1.631 4.164 4.422c-.003.473-.046 1.728-.143 1.728zm24.591-12.069l.567-4.827h-13.343l-.565 4.827h3.5l-3.782 24.137h-3.505l-.564 4.828h13.34l.57-4.828h-3.503l3.783-24.137h3.502zm27.11 7.241l1.705-4.827h-4.589l-3.309.683c-1.846-1.18-4.354-2.066-6.717-2.066c-6.768 0-12.537 3.268-12.537 10.697c0 2.084.756 3.766 1.653 4.903c-1.416.755-2.647 2.02-2.647 3.726c0 .756.282 1.53.852 2.238c-2.841 1.706-4.586 4.533-4.586 7.842c0 6.39 6.669 7.753 11.778 7.753c6.433 0 14.099-1.47 14.099-9.655c0-2.79-1.75-4.97-6.812-5.916l-9.13-1.706c-1.04-.191-1.277-.522-1.277-.995c0-.71.43-1.086 1.136-1.086l.616.094c1.23.283 2.65.427 4.115.427c6.578 0 12.443-2.84 12.443-10.22c0-1.042-.188-1.747-.661-2.884c.803.38 1.846.995 2.268.995h1.6v-.003zm-13.007 19.583c1.796.333 2.41.994 2.41 2.177c0 3.833-4.116 4.306-7.095 4.306c-4.542 0-6.244-1.086-6.244-3.502c0-2.13.613-3.121 2.035-4.637l8.894 1.656zM135.02 279.5c-2.744 0-4.258-.992-4.258-3.36c0-3.5 2.035-5.535 5.583-5.535c2.839 0 4.212 1.183 4.212 3.498c0 3.502-1.989 5.397-5.537 5.397zm31.757-13.862c-2.65 0-5.013 1.3-7.948 3.616l-.425-1.772h-5.206l-3.642 26.55h6.292l2.745-20.134c1.846-1.135 4.115-2.783 6.055-2.783c2.364 0 3.218 1.141 3.218 3.316c0 .521-.05 2.064-.145 2.631l-2.315 16.97h6.293l2.315-17.108c.096-.8.19-2.119.19-2.874c.003-4.5-2.129-8.412-7.427-8.412zm19.38 21.743l.048-.65l2.742-19.249h-10.456l-.659 4.827h4.586c-.379 0-.615.423-.661.804l-1.893 12.82c-.094.617-.14 1.901-.14 2.418c0 3.311 1.796 5.682 5.484 5.682h3.218l.71-4.828h-2.033c-.712 0-.946-1.257-.946-1.824zm4.067-29.554h-6.15c-.379 0-.379-1.393-.425-.92l-.854 6.802c-.049.428-.049 1.36.33 1.36h6.153c.379 0 .379-1.654.425-2.084l.854-5.25c.048-.473.048.092-.333.092zm12.831 29.715c-1.559 0-2.317-.663-2.317-2.08l.048-.097l1.987-13.056h7.19l2.175-4.827h-8.704l1.465-10.623l-6.62 2.117l-1.185 8.506h-3.831l-.661 4.827h4.446c-.425 2.414-.852.848-.898 1.323l-1.704 11.448c-.094.522-.094.9-.094 1.371c0 4.495 3.311 6.177 7.289 6.177c3.688 0 6.669-1.077 8.989-3.02l-2.935-3.61c-1.47.897-2.462 1.544-4.64 1.544zm23.087-21.904c-8.657 0-12.725 4.113-14.098 13.432c-.142 1.137-.237 2.226-.237 3.266c0 6.387 3.264 10.22 10.454 10.22c5.583 0 9.75-2.32 11.97-6.578l-4.777-1.94c-1.37 2.08-3.217 3.5-6.483 3.5c-3.498 0-4.92-.942-4.92-4.065c0-.616.051-1.511.146-1.511h17.077c.236-2.414.52-4.12.52-5.535c0-4.728-1.797-10.79-9.652-10.79zm3.266 11.499H219c1.04-2.414 2.788-6.15 6.387-6.15c2.79 0 4.164 1.631 4.164 4.422c-.003.473-.049 1.728-.143 1.728zm23.797-11.5c-2.271 0-4.4 1.302-6.53 3.332l-.378-1.487h-5.202l-3.644 26.55h6.34l2.79-20.56c1.657-.991 3.549-1.838 5.347-1.838c1.137 0 2.223-.181 3.263-.04l.809-5.485c-.951-.189-1.897-.471-2.795-.471zM92.54 238.81c-14.32-6.19-27.72-21.922-27.752-38.019c-.039-17.55 11.083-32.45 24.916-42.242c-1.663 6.283-2.57 12.03 1.55 17.65c3.83 5.225 10.538 7.764 16.872 6.386c14.8-3.24 15.479-19.51 6.705-28.989c-8.675-9.387-17.067-19.99-13.765-33.603c1.653-6.824 5.843-13.216 11.151-17.785c-4.08 10.722 7.514 21.296 15.153 26.563c13.251 9.138 27.79 16.044 39.974 26.756c12.816 11.258 22.28 26.48 20.369 44.135c-2.071 19.136-17.277 32.445-34.333 39.164c36.042-7.955 73.283-35.928 74.046-75.9c.632-32.885-21.927-58.193-49.872-72.682l-1.46-.797c.767 1.861 1.018 3.444.989 4.861c.25-1.045.42-2.119.468-3.227a15.728 15.728 0 0 1-.512 3.9l.044-.673a16.383 16.383 0 0 1-2.069 4.931l.41-.441c-5.575 9.247-20.668 11.255-28.124 1.68c-11.986-15.402.251-32.008 1.963-48.318c2.143-20.441-10.676-40.285-26.57-52.16c8.754 14.161-2.779 32.896-12.006 43.37C101.74 53.523 90.859 62 80.982 71.225c-10.61 9.908-20.81 20.345-29.531 31.974c-17.442 23.276-28.12 52.55-20.273 81.588c7.842 29.018 32.978 47.49 61.363 54.022z" fill="#EE4323"/></svg>
                </div>
                <h3 class="alt-features-title font-alt">CodeIgniter</h3>Salah satu bahasa yang saya pakai untuk membangun sebuah website.
              </div>
            </div>

            <div class="col-md-2 col-lg-2 hidden-xs hidden-sm">
              {{-- <div class="alt-services-image align-center"><img src="https://i.picsum.photos/id/1/517/400.jpg" alt="Feature Image"></div> --}}
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="45" height="45"
                    viewBox="0 0 48 48"
                    style=" fill:#000000;"><path fill="#80deea" d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z"></path><path fill="#80deea" d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z"></path><path fill="#80deea" d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z"></path><circle cx="24" cy="24" r="4" fill="#80deea"></circle></svg>
                </div>
                <h3 class="alt-features-title font-alt">React Native</h3>Adalah salah satu keahlian utama saya di dunia programming.
              </div>
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="48" height="48"
                  viewBox="0 0 48 48"
                  style=" fill:#000000;"><path fill="#388e3c" d="M17.204 19.122l-4.907 2.715C12.113 21.938 12 22.126 12 22.329v5.433c0 .203.113.39.297.492l4.908 2.717c.183.101.41.101.593 0l4.907-2.717C22.887 28.152 23 27.965 23 27.762v-5.433c0-.203-.113-.39-.297-.492l-4.906-2.715c-.092-.051-.195-.076-.297-.076-.103 0-.205.025-.297.076M42.451 24.013l-.818.452c-.031.017-.049.048-.049.082v.906c0 .034.019.065.049.082l.818.453c.031.017.068.017.099 0l.818-.453c.03-.017.049-.048.049-.082v-.906c0-.034-.019-.065-.05-.082l-.818-.452C42.534 24.004 42.517 24 42.5 24S42.466 24.004 42.451 24.013"></path><path fill="#37474f" d="M35.751,13.364l-2.389-1.333c-0.075-0.042-0.167-0.041-0.241,0.003 c-0.074,0.044-0.12,0.123-0.12,0.209L33,20.295l-2.203-1.219C30.705,19.025,30.602,19,30.5,19c-0.102,0-0.205,0.025-0.297,0.076 h0.001l-4.907,2.715C25.113,21.892,25,22.08,25,22.282v5.433c0,0.203,0.113,0.39,0.297,0.492l4.908,2.717 c0.183,0.101,0.41,0.101,0.593,0l4.907-2.717C35.887,28.106,36,27.918,36,27.715V13.788C36,13.612,35.904,13.45,35.751,13.364z M32.866,26.458l-2.23,1.235c-0.083,0.046-0.186,0.046-0.269,0l-2.231-1.235C28.051,26.412,28,26.326,28,26.234v-2.47 c0-0.092,0.051-0.177,0.135-0.224l2.231-1.234h-0.001c0.042-0.023,0.088-0.034,0.135-0.034c0.047,0,0.093,0.012,0.135,0.034 l2.23,1.234C32.949,23.587,33,23.673,33,23.765v2.47C33,26.326,32.949,26.412,32.866,26.458z"></path><path fill="#2e7d32" d="M17.204,19.122L12,27.762c0,0.203,0.113,0.39,0.297,0.492l4.908,2.717 c0.183,0.101,0.41,0.101,0.593,0L23,22.329c0-0.203-0.113-0.39-0.297-0.492l-4.906-2.715c-0.092-0.051-0.195-0.076-0.297-0.076 c-0.103,0-0.205,0.025-0.297,0.076"></path><path fill="#4caf50" d="M17.204,19.122l-4.907,2.715C12.113,21.938,12,22.126,12,22.329l5.204,8.642 c0.183,0.101,0.41,0.101,0.593,0l4.907-2.717C22.887,28.152,23,27.965,23,27.762l-5.203-8.64c-0.092-0.051-0.195-0.076-0.297-0.076 c-0.103,0-0.205,0.025-0.297,0.076"></path><path fill="#37474f" d="M47.703 21.791l-4.906-2.715C42.705 19.025 42.602 19 42.5 19c-.102 0-.205.025-.297.076h.001l-4.907 2.715C37.114 21.892 37 22.084 37 22.294v5.411c0 .209.114.402.297.503l4.908 2.717c.184.102.409.102.593 0l2.263-1.253c.207-.115.206-.412-.002-.526l-4.924-2.687C40.052 26.412 40 26.325 40 26.231v-2.466c0-.092.05-.177.13-.221l2.235-1.236h-.001c.042-.023.088-.034.135-.034.047 0 .093.012.135.034l2.235 1.237c.08.044.13.129.13.221v2.012c0 .086.046.166.121.209.075.042.167.042.242-.001l2.398-1.393c.148-.086.24-.245.24-.417v-1.88C48 22.085 47.886 21.892 47.703 21.791zM10.703 21.791l-4.906-2.715C5.705 19.025 5.602 19 5.5 19c-.102 0-.205.025-.297.076h.001l-4.907 2.715C.114 21.892 0 22.084 0 22.294v7.465c0 .086.046.166.121.209.075.042.167.042.242-.001l2.398-1.393C2.909 28.488 3 28.329 3 28.157v-4.393c0-.092.05-.177.13-.221l2.235-1.236H5.365c.042-.023.088-.034.135-.034.047 0 .093.012.135.034l2.235 1.237C7.95 23.588 8 23.673 8 23.765v4.393c0 .172.091.331.24.417l2.398 1.393c.075.043.167.043.242.001C10.954 29.925 11 29.845 11 29.759v-7.464C11 22.085 10.886 21.892 10.703 21.791z"></path></svg>
                </div>
                <h3 class="alt-features-title font-alt">Node.js</h3>server-side Programming
              </div>
            </div>

            <div class="col-md-2 col-lg-2 hidden-xs hidden-sm"></div>
          </div>
        </div>
      </section>
      <hr class="divider-w">

      {{-- <section class="module bg-dark-60" data-background={{ asset("/images/section-3.jpg") }}>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Scoreboard</h2>
              <div class="module-subtitle font-serif"></div>
            </div>
          </div>
          <div class="row multi-columns-row">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="count-item mb-sm-40">
                <div class="count-icon"><span class="icon-wallet"></span></div>
                <h3 class="count-to font-alt" data-countto="6543"></h3>
                <h5 class="count-title font-serif">Dollars raised for charity</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="count-item mb-sm-40">
                <div class="count-icon"><span class="icon-wine"></span></div>
                <h3 class="count-to font-alt" data-countto="8"></h3>
                <h5 class="count-title font-serif">Cups of wine consumed</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="count-item mb-sm-40">
                <div class="count-icon"><span class="icon-camera"></span></div>
                <h3 class="count-to font-alt" data-countto="184"></h3>
                <h5 class="count-title font-serif">Photographs taken</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="count-item mb-sm-40">
                <div class="count-icon"><span class="icon-map-pin"></span></div>
                <h3 class="count-to font-alt" data-countto="32"></h3>
                <h5 class="count-title font-serif">Locations covered</h5>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background={{ asset("/images/testimonial_bg.jpg") }}>
        <div class="testimonials-slider pt-140 pb-140">
          <ul class="slides">
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Jack Woods</div>
                        <div class="testimonial-descr">SomeCompany INC, CEO</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Jim Stone</div>
                        <div class="testimonial-descr">SomeCompany INC, CEO</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Adele Snow</div>
                        <div class="testimonial-descr">SomeCompany INC, CEO</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section> --}}
      <section class="module-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
              <div class="callout-text font-alt">
                <h3 class="callout-title">Memulai Project</h3>
                <p>Tertarik untuk bekerja bersama? </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
              <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Mari Mulai Obrolan</a></div>
            </div>
          </div>
        </div>
      </section>

      <section class="module" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Get in touch</h2>
              <div class="module-subtitle font-serif"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <form id="contactForm" role="form" method="post" action="php/contact.php">
                <div class="form-group">
                  <label class="sr-only" for="name">Name</label>
                  <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="email">Email</label>
                  <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                  <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                </div>
              </form>
              <div class="ajax-response font-alt" id="contactFormResponse"></div>
            </div>
          </div>
        </div>
      </section>
      {{-- <section id="map-section">
        <div id="map"></div>
      </section> --}}
      <div class="module-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">About Titan</h5>
                <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                <p>Email:<a href="#">somecompany@example.com</a></p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Recent Comments</h5>
                <ul class="icon-list">
                  <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                  <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                  <li>Andy on <a href="#">Eco bag Mockup</a></li>
                  <li>Jack on <a href="#">Bottle Mockup</a></li>
                  <li>Mark on <a href="#">Our trip to the Alps</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Blog Categories</h5>
                <ul class="icon-list">
                  <li><a href="#">Photography - 7</a></li>
                  <li><a href="#">Web Design - 3</a></li>
                  <li><a href="#">Illustration - 12</a></li>
                  <li><a href="#">Marketing - 1</a></li>
                  <li><a href="#">Wordpress - 16</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="widget">
                <h5 class="widget-title font-alt">Popular Posts</h5>
                <ul class="widget-posts">
                  <li class="clearfix">
                    <div class="widget-posts-image"><a href="#"><img src={{ asset("/images/rp-1.jpg") }} alt="Post Thumbnail"/></a></div>
                    <div class="widget-posts-body">
                      <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                      <div class="widget-posts-meta">23 january</div>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="widget-posts-image"><a href="#"><img src={{ asset("/images/rp-2.jpg") }} alt="Post Thumbnail"/></a></div>
                    <div class="widget-posts-body">
                      <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                      <div class="widget-posts-meta">15 February</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="divider-d">
      <footer class="footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">KatanyaJati</a>, All Rights Reserved</p>
            </div>
            <div class="col-sm-6">
              <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
  </main>
@endsection