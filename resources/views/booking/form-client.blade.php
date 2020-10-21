<div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientModalLabel">Tambah Data Klien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('create-client') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <p>NIK</p>
                            <input type="number" class="form-control" required name="nik" value="{{ old('nik') }}">
                        </div>
                        <div class="form-group">
                            <p>Nama</p>
                            <input type="text" class="form-control" required name="name" value="{{ old('name') }}" >
                        </div>
                        <div class="form-group">
                            <p>Tanggal Lahir</p>
                            <input type="text" class="form-control" required name="dob" value="{{ old('dob') }}" id="datepicker">
                        </div>
                        <div class="form-group">
                            <p>Phone</p>
                            <input type="number" class="form-control" required name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <p>Jenis Kelamin</p>
                            <select name="gender" class="form-control">
                                <option value="Laki-laki" {{ (old("gender") == 'Laki-laki' ? "selected":"") }}>Laki-laki</option>
                                <option value="Perempuan" {{ (old("gender") == 'Perempuan' ? "selected":"") }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Alamat</p>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" >
                        </div>
                    </div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</div>