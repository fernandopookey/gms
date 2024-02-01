

                
                    
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card-header text-right">
                              <a href="{{ route('createPaketMember') }}" class="btn btn-primary" role="button">
                                <i class="fas fa-file-medical"></i> <span style="margin-left: 5px;">Tambah Paket</span>
                              </a>                                                        
                            </div>
                                <table id="example" class="table table-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Paket</th>
                                            <th>Durasi</th>
                                            <th>Harga Paket</th>
                                            <th>Biaya Admin</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($paketMembers as $member_packages)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td> {{ $member_packages->package_name }}</td>
                                            <td> {{ $member_packages->days }} hari</td>
                                            <td> {{ $member_packages->package_price }}</td>
                                            <td> {{ $member_packages->admin_price }}</td>
                                            <td> {{ $member_packages->description }}</td>
                                            <td class="kolom-aksi">
                                              <a href="{{ route('editPaketMember', ['id' => $member_packages->id]) }}" class="btn btn-warning btn-sm" role="button">
                                                <i class="fas fa-pencil-alt"></i>
                                              </a>
                                              <a onclick="confirmDelete(this)" data-url="{{ route('deletePaketMember', ['id' => $member_packages->id]) }}" class="btn btn-danger btn-sm" role="button">
                                                  <i class="fas fa-trash-alt"></i>
                                              </a>                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              </div>
                            </div>
                            
                        
                    
                
            
