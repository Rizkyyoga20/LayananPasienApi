    <div  class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Antrian</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-antrian-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabAntrian1" 
              type="button" role="tab" 
              aria-controls="TabAntrian1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-antrian-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabAntrian2" 
              type="button" role="tab" 
              aria-controls="TabAntrian2" 
              aria-selected="false">No Antrian</button>
          </li>


        </ul>

        <div class="tab-content" id="myTabContent">
          <div 
            class="tab-pane fade show active" 
            id="TabAntrian1" 
            role="tabpanel" 
            aria-labelledby="tab-antrian-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API antrian pasien, digunakan untuk mengambil nomor antrian pasien, 
              pengambilan nomor antrian dapat dilakukan jika pasien telah terdaftar,
              jika belum harap melakukan pendaftaran terlebih dahulu.
            </p>            
        </div>
          
          <div 
            class="tab-pane fade" 
            id="TabAntrian2" 
            role="tabpanel" 
            aria-labelledby="tab-antrian-2" 
            tabindex="0">

              <input 
                class="form-control mb-2 mt-2" 
                type="text"
                name="nomor_antrian" 
                placeholder="nomor_antrian" 
              >
              <p style="margin:10px 0px 0px 0px;">email</p>
              <select class="form-control mb-2 mt-0">
                <option>-- Pilih Email --</option>
                  @foreach( $daftar as $d)
                    <option value="{{$d->id}}">{{$d->email}}</option>
                  @endforeach
              </select>
              <p style="margin:0px;">catatan_konsul</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="catatan_konsul"
              >
              </textarea>

              <button type="button" class="btn btn-danger" id="ApiAntrian">API</button>
              <div id="liveAlertAntrian"></div>



          </div>
        
          </div>

      </div>
    </div>


