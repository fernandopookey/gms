

    
         
            
                
                    <form action="{{ route('storePaketMember') }}" method="post">
                        @csrf
            
                        <div class="form-group">
                            <label for="nama">Nama Paket</label>
                            <input type="text" name="package_name" id="package_name" class="form-control" required="required" placeholder="Masukkan nama paket">
                        </div>
        
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="days" id="days" class="form-control" required="required" placeholder="Masukkan durasi">
                        </div>
        
                        <div class="form-group">
                            <label for="harga-paket">Harga Paket</label>
                            <input type="text" name="package_price" id="package_price" class="form-control" required="required" placeholder="Masukkan harga paket">
                        </div>
        
                        <div class="form-group">
                            <label for="biaya-admin">Biaya Admin</label>
                            <input type="text" name="admin_price" id="package_price" class="form-control" required="required" placeholder="Masukkan biaya admin">
                        </div>
            
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required="required" placeholder="Masukkan deskripsi paket"></textarea>
                        </div>
            
                        <div class="text-right">
                            <a href="{{ route('daftarPaketMember') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                
            
        
    