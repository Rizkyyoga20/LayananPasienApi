    <div  class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Pasien</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-pasien-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabPasien1" 
              type="button" role="tab" 
              aria-controls="TabPasien1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-pasien-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabPasien2" 
              type="button" role="tab" 
              aria-controls="TabPasien2" 
              aria-selected="false">Entri data</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-pasien-3" 
              data-bs-toggle="tab" 
              data-bs-target="#TabPasien3" 
              type="button" role="tab" 
              aria-controls="TabPasien3" 
              aria-selected="false">List data</button>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">
          <div 
            class="tab-pane fade show active" 
            id="TabPasien1" 
            role="tabpanel" 
            aria-labelledby="tab-pasien-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API pendaftaran pasien dan daftar pasien, digunakan untuk pendaftaran pasien dan data pasien
            </p>            
          </div>
          
          <div 
            class="tab-pane fade" 
            id="TabPasien2" 
            role="tabpanel" 
            aria-labelledby="tab-pasien-2" 
            tabindex="0">

              <input 
                class="form-control mb-2 mt-2" 
                type="text" 
                placeholder="name" 
              >
              <input 
                class="form-control mb-2" 
                type="text" 
                placeholder="gmail" 
              >
              <input 
                class="form-control mb-2" 
                type="password" 
                placeholder="password" 
              >
              <input 
                class="form-control mb-2" 
                type="text" 
                placeholder="telepon" 
              >
              <p style="margin:0px;">alamat</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="alamat"
              >
              </textarea>

              <button type="button" class="btn btn-danger" id="ApiEntriPasien">API</button>
              <div id="liveAlertEntriPasien"></div>

          </div>
          
        <div 
            class="tab-pane fade" 
            id="TabPasien3" 
            role="tabpanel" 
            aria-labelledby="tab-pasien-3" 
            tabindex="0"
          >

          <div 
            style="		
            display:flex;
            width:100%;
            overflow-x:scroll;
            overflow-y:hidden;
            white-space:nowrap;
          ">

            @foreach( $daftar as $d)

              <div class="m-1 p-2" 
                style="
                  float:left; 
                  border:1px solid #000; 
                  border-radius:0px 10px 10px 0px;
                "
              >
                 <b>Nama : </b> <br> 
                 {{ $d->name }} <br>
                 <b>Email : </b> <br> 
                 {{ $d->email }} <br>
                 <b>Telepon : </b> <br> 
                 {{ $d->telepon }} <br>
                 <b>Alamat : </b> <br> 
                 {{ $d->alamat }}
              </div>

            @endforeach

          </div>

            <button type="button" class="btn btn-danger mt-2" id="ApiListPasien">API</button>
            <div id="liveAlertListPasien"></div>
        </div>
        
        </div>


      </div>
    </div>


