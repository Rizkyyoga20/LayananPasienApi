    <div class="card m-1" style="flex-basis: 45%; border-radius:7px;">
      <div class="card-body">
        <h5 class="card-title">Laporan Konsul Pasien</h5>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="tab-laporan-1" 
              data-bs-toggle="tab" 
              data-bs-target="#TabLaporan1" 
              type="button" role="tab" 
              aria-controls="TabLaporan1" 
              aria-selected="true">Info</button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="tab-laporan-2" 
              data-bs-toggle="tab" 
              data-bs-target="#TabLaporan2" 
              type="button" role="tab" 
              aria-controls="TabLaporan2" 
              aria-selected="false">Laporan Konsul Pasien</button>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

          <div 
            class="tab-pane fade show active" 
            id="TabLaporan1" 
            role="tabpanel" 
            aria-labelledby="tab-laporan-1" 
            tabindex="0"
          >
            <p class="card-text m-2">
              API laporan konsul pasien adalah hasil rekap konsul pasien secara keseluruhan dimana 
              terdapat list daftar konsul resep dan obat pasien.
            </p>            
        </div>

        <div 
            class="tab-pane fade" 
            id="TabLaporan2" 
            role="tabpanel" 
            aria-labelledby="tab-laporan-2" 
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
                  display:block;
                "
              >
                <b>Nomor antrian : </b><br> {{ $k->nomor_antrian }} <br>
                <b>Nama Pasien : </b><br> {{ $k->nama_pasien }} <br>
                <b>Email Pasien : </b><br> {{ $k->email_pasien }} <br>
                <b>Keterangan Konsul : </b><br> {{ $k->keterangan_konsul }} <br>
                <b>Saran : </b><br> {{ $k->saran }} <br>
                <b>Informasi : </b><br> {{ $k->informasi }} <br> 
                <div style="height:5px; background:#000; margin:5px 0px;"></div>
                
                <b>Resep Obat : </b> <br>
                @foreach( $k->reseps as $rk)                  
                    {{ $rk->nama_obat }} <br>
                    {{ $rk->stok }} <br>
                    {{ $rk->keterangan_obat }} <br>
                    {{ $rk->keterangan_obat_resep }}
                    <div style="height:1px; background:#000; margin:5px 0px;"></div>
                  
                @endforeach
                
              </div>

            @endforeach

          </div>

          <button type="button" class="btn btn-danger mt-2" id="ApiLaporanKonsulPasien">API</button>
          <div id="liveAlertLaporanKonsulPasien"></div>

        </div>
          
         

        </div>
        </div>
    </div>

  <script type="text/javascript" src="{{ asset('js/alert-hidden.js')}}"></script>