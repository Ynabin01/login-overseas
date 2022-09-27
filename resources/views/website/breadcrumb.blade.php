  <!-- Start Subheader -->
  <div class="normal-bg subheader" style="background-image: url('assets/images/subheader.jpg');">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="subheader-content">
                      <h1 class="page-title text-white fw-600">{{ $slug1->caption ?? $slug1 }}</h1>
                      @if (isset($slug2))
                          <ul class="custom-flex breadcrumb">
                              <li><a href="/">{{ $slug2->caption ?? $slug2 }}</a></li>
                          </ul>
                      @endif

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Subheader -->
