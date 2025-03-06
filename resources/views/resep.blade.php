
    <div class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Resep</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-resep-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabResep1" 
              type="button" role="tab" 
              aria-controls="TabResep1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-resep-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabResep2" 
              type="button" role="tab" 
              aria-controls="TabResep2" 
              aria-selected="false">Entri Resep</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-resep-3" 
              data-bs-toggle="tab" 
              data-bs-target="#TabResep3" 
              type="button" role="tab" 
              aria-controls="TabResep3" 
              aria-selected="false">List Resep</button>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div 
            class="tab-pane fade show active" 
            id="TabResep1" 
            role="tabpanel" 
            aria-labelledby="tab-resep-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API resep digunakan untuk mengelola data resep obat yang terhubung di API konsul.
            </p>            
        </div>

        <div 
            class="tab-pane fade" 
            id="TabResep3" 
            role="tabpanel" 
            aria-labelledby="tab-resep-3" 
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

            @foreach( $ResepObat as $r)

              <div class="m-1 p-2" 
                style="
                  float:left; 
                  border:1px solid #000; 
                  border-radius:0px 10px 10px 0px;
                "
              >
                <b>Nama Obat : </b><br> {{ $r->nama_obat_resep }} <br>
                <b>Stok Obat : </b><br> {{ $r->stok_obat_resep }} <br>
                <b>Harga Obat : </b><br> {{ $r->harga_obat_resep }} <br>
                <b>Keterangan Obat : </b><br> {{ $r->keterangan_obat_resep }} <br>
                <b>Keterangan Resep : </b><br>  {{ $r->keterangan_resep }} <br>
              </div>

            @endforeach

          </div>

            <button type="button" class="btn btn-danger mt-2" id="ApiListResep">API</button>
            <div id="liveAlertListResep"></div>

        </div>
          
        <div 
            class="tab-pane fade" 
            id="TabResep2" 
            role="tabpanel" 
            aria-labelledby="tab-resep-2" 
            tabindex="0"
        >

               <select class="form-control mb-2 mt-3">
                <option>--Pilih Obat--</option>
                  @foreach( $obats as $o)
                    <option value="{{$o->id}}">{{$o->nama_obat}}</option>
                  @endforeach
              </select>
              <p style="margin:0px;">keterangan_resep</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="keterangan_resep"
              >
              </textarea>

              <button type="button" class="btn btn-danger" id="ApiEntriResep">API</button>
              <div id="liveAlertEntriResep"></div>

      </div>
        

        </div>
        </div>
    </div>

