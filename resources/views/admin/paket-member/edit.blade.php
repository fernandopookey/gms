

   
        
            
                
                    <form action="{{ route('updatePaketMember', ['id' => $paketMember->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="package_name">Nama Paket</label>
                            <input type="text" name="package_name" id="package_name" value="{{ $paketMember->package_name }}" class="form-control" required="required" placeholder="Masukkan nama paket">
                        </div>
                        <div class="form-group">
                            <label for="days">Durasi</label>
                            <input type="text" name="days" id="days" value="{{ $paketMember->days }}" class="form-control" required="required" placeholder="Masukkan durasi">
                        </div>
                        <div class="form-group">
                            <label for="package_price">Harga Paket</label>
                            <input type="text" name="package_price" id="package_price" value="{{ $paketMember->package_price }}" class="form-control" required="required" placeholder="Masukkan harga paket">
                        </div>
                        <div class="form-group">
                            <label for="admin_price">Biaya Admin</label>
                            <input type="text" name="admin_price" id="admin_price" value="{{ $paketMember->admin_price }}" class="form-control" required="required"placeholder="Masukkan biaya admin">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required="required" placeholder="Masukkan deskripsi paket">{{ $paketMember->description }}</textarea>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('daftarPaketMember') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                
            
        
    