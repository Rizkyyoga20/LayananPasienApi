
    <div  class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Obat</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-obat-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabObat1" 
              type="button" role="tab" 
              aria-controls="TabObat1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-obat-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabObat2" 
              type="button" role="tab" 
              aria-controls="TabObat2" 
              aria-selected="false">Entri Obat</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-obat-3" 
              data-bs-toggle="tab" 
              data-bs-target="#TabObat3" 
              type="button" role="tab" 
              aria-controls="TabObat3" 
              aria-selected="false">List Obat</button>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div 
            class="tab-pane fade show active" 
            id="TabObat1" 
            role="tabpanel" 
            aria-labelledby="tab-obat-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API obat digunakan untuk mengelola data obat yang terhubung di API konsul.
            </p>            
        </div>

        <div 
            class="tab-pane fade" 
            id="TabObat3" 
            role="tabpanel" 
            aria-labelledby="tab-obat-3" 
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

            @foreach( $obats as $o)

              <div class="m-1 p-2" 
                style="
                  float:left; 
                  border:1px solid #000; 
                  border-radius:0px 10px 10px 0px;
                "
              >
                <b>Nama Obat : </b><br> {{ $o->nama_obat }} <br>
                <b>Stok Obat : </b><br> {{ $o->stok }} <br>
                <b>Harga Obat : </b><br> {{ $o->harga }} <br>
                <b>Keterangan Obat : </b><br> {{ $o->keterangan_obat }} <br>
              </div>

            @endforeach

          </div>



            <button type="button" class="btn btn-danger mt-2" id="ApiListObat">API</button>
            <div id="liveAlertListObat"></div>

        </div>
          
        <div 
            class="tab-pane fade" 
            id="TabObat2" 
            role="tabpanel" 
            aria-labelledby="tab-obat-2" 
            tabindex="0"
        >

              <p style="margin:0px;">nama_obat</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="nama_obat"
              >
              </textarea>
              <p style="margin:0px;">stok</p>
              <input 
                class="form-control mb-2 mt-2" 
                type="text"
                name="stok" 
                placeholder="stok" 
              >
              </textarea>
              <input 
                class="form-control mb-2 mt-2" 
                type="text"
                name="harga" 
                placeholder="harga" 
              >
              </textarea>
              <p style="margin:0px;">keterangan</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="keterangan_obat"
              >
              </textarea>

              <button type="button" class="btn btn-danger" id="ApiEntriObat">API</button>
              <div id="liveAlertEntriObat"></div>

      </div>
        

        </div>
        </div>
    </div>


