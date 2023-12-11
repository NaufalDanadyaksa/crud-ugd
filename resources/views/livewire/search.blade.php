<div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
               <input type="text" class="form-control me-2" name="search" wire:model.live.debounce.500ms="search" placeholder="Search" aria-label="Search"  id="liveSearchInput">
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{route('create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>
    
        <table class="table table-striped">
            <thead>
                <tr >
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">NIM</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Jurusan</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
               
               @foreach ($mahasiswa as $item)
               
                   <tr wire:key="item-{{ $item->id }}">
                        <td>{{$mahasiswa->firstItem() + $loop->index}}</td>
                        <td>{{$item->nim}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>
                            <a href='{{url('mahasiswa/'.$item->nim.'/edit')}}' class="btn btn-success btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{url('mahasiswa/'.$item->nim)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</Del></button>
                            </form>
                        </td>
                   </tr>
               @endforeach
            </tbody>
        </table>
        {{$mahasiswa->links()}}
        {{-- {{$data->withQueryString()->links()}} --}}
        <a href="{{ route('logout') }}">logout</a>
    </div>
   
</div>
