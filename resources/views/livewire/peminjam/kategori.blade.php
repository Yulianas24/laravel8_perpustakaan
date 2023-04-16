
<ul class="navbar-nav ml-auto d-flex">
    <li class="nav-item dropdown d-flex">
        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        pilih
        </a>
        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown" style="cursor: pointer">
            <a class="dropdown-item" wire:click="semuaKategori">Semua Kategori</a>
            <div class="dropdown-divider"></div>
            @foreach ($kategori as $item)
            <a class="dropdown-item" onclick="ubah('{{ $item->nama }}')" wire:click="pilihKategori({{$item->id}})">{{$item->nama}}</a>
            @endforeach
        </div>
    </li>
</ul>

<script>
    function ubah(nama) {
        document.getElementById("kategori").innerText = nama
    }
</script>
