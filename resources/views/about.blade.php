
    <div  class="card m-1" style="flex-basis: 65%; border-radius:7px;">
      <div class="card-body">
        <img src="{{ asset('img/layout-header-1.jpg')}}" 
          style="width:100%; height:100%;"
        >
      </div>
    </div>


    <div  class="card m-1" style="flex-basis: 25%; border-radius:7px;">
        <div class="card-body">
            <p class="card-text text-center">
              <img src="{{ asset('img/rizky.png')}}" style="width:6rem; height:6rem; border-radius:50%;"><br>
              Owner : Rizky Yoga <br> 
              Export : Web Developer <br> 
            </p>

              <ul class="justify-content-center nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button 
                    class="nav-link active" 
                    id="tab-1" 
                    data-bs-toggle="tab" 
                    data-bs-target="#Tab1" 
                    type="button" role="tab" 
                    aria-controls="Tab1" 
                    aria-selected="true">
                    <img src="{{ asset('img/github.png')}}" style="width:1rem;">
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button 
                    class="nav-link" 
                    id="tab-2" 
                    data-bs-toggle="tab" 
                    data-bs-target="#Tab2" 
                    type="button" role="tab" 
                    aria-controls="Tab2" 
                    aria-selected="false">
                    <img src="{{ asset('img/gmail.png')}}" style="width:1rem;">
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button 
                    class="nav-link" 
                    id="tab-3" 
                    data-bs-toggle="tab" 
                    data-bs-target="#Tab3" 
                    type="button" role="tab" 
                    aria-controls="Tab3" 
                    aria-selected="false">
                    <img src="{{ asset('img/wa.png')}}" style="width:1rem;">
                  </button>
                </li>

              </ul>

              <div class="tab-content" id="myTabContent">
                <div 
                  class="tab-pane fade show active" 
                  id="Tab1" 
                  role="tabpanel" 
                  aria-labelledby="tab-1" 
                  tabindex="0"
                >
                  GitHub : Rizkyyoga20           
              </div>
                
                <div 
                  class="tab-pane fade" 
                  id="Tab2" 
                  role="tabpanel" 
                  aria-labelledby="tab-2" 
                  tabindex="0">
                    Gmail : rizkyyoga281@gmail.com
                </div>

                <div 
                  class="tab-pane fade" 
                  id="Tab3" 
                  role="tabpanel" 
                  aria-labelledby="tab-3" 
                  tabindex="0">
                    WA : 087763578343  
                </div>
              
                </div>

            </div>
          </div>




