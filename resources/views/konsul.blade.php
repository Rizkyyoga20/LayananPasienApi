    <div class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Konsul</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-konsul-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabKonsul1" 
              type="button" role="tab" 
              aria-controls="TabKonsul1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-konsul-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabKonsul2" 
              type="button" role="tab" 
              aria-controls="TabKonsul2" 
              aria-selected="false">Entri Konsul</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-konsul-3" 
              data-bs-toggle="tab" 
              data-bs-target="#TabKonsul3" 
              type="button" role="tab" 
              aria-controls="TabKonsul3" 
              aria-selected="false">List Konsul</button>
          </li>

        </ul>

        <div class="tab-content" id="myTabContent">

          <div 
            class="tab-pane fade show active" 
            id="TabKonsul1" 
            role="tabpanel" 
            aria-labelledby="tab-konsul-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API konsul pasien adalah lanjutan dari API nomor antrian dimana API ini digunakan untuk mencatat 
              keluhan pasien serta catatan-catatan penting pasien setelah melakaukan pemerikasaan. dan keperluan
              obat yang dibutuhkan
            </p>            
        </div>

        <div 
            class="tab-pane fade" 
            id="TabKonsul3" 
            role="tabpanel" 
            aria-labelledby="tab-konsul-3" 
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

          @foreach( $konsuls as $k)

              <div class="m-1 p-2" 
                style="
                  float:left; 
                  border:1px solid #000; 
                  border-radius:0px 10px 10px 0px;
                "
              >
                <b>Nomor antrian : </b><br> {{ $k->nomor_antrian }} <br>
                <b>Nama Pasien : </b><br> {{ $k->nama_pasien }} <br>
                <b>Email Pasien : </b><br> {{ $k->email_pasien }} <br>
                <b>Keterangan Konsul : </b><br> {{ $k->keterangan_konsul }} <br>
                <b>Saran : </b><br> {{ $k->saran }} <br>
                <b>Informasi : </b><br> {{ $k->informasi }} <br>
              </div>

            @endforeach

          </div>
                        

            <button type="button" class="btn btn-danger mt-2" id="ApiListKonsul">API</button>
            <div id="liveAlertListKonsul"></div>

        </div>
          
        <div 
            class="tab-pane fade" 
            id="TabKonsul2" 
            role="tabpanel" 
            aria-labelledby="tab-konsul-2" 
            tabindex="0"
        >

              <p style="margin:10px 0px 0px 0px;">nomor_antrian</p>
              <select class="form-control mb-2 mt-0">
                <option>-- Pilih Nomor Antrian --</option>
                  @foreach( $konsuls as $k)
                    <option value="{{$k->id}}">{{$k->nomor_antrian}}</option>
                  @endforeach
              </select>
              <p style="margin:0px;">catatan_konsul</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="catatan_konsul"
              >
              </textarea>
              <p style="margin:0px;">saran</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="saran"
              >
              </textarea>
              <p style="margin:0px;">informasi</p>
              <textarea 
                class="form-control mb-2" 
                type="text"
                name="informasi"
              >
              </textarea>

              <button type="button" class="btn btn-danger" id="ApiEntriKonsul">API</button>
              <div id="liveAlertEntriKonsul"></div>

      </div>
        

        </div>
        </div>
    </div>

