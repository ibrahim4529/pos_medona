<div class="sidebar sidebar-style-2" data-background-color="white">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset("img/profile.jpg") }}" alt="..."
                         class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::user()->name}}
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary" data-background-color="putple">
                <li class="nav-item @url('home') active @endurl">
                    <a href="{{ URL('home') }}">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    <h4 class="text-section">Menu Menejemen</h4>
                </li>
                <li class="nav-item @url('outlets') active @endurl">
                    <a href="{{ URL('outlets') }}">
                        <i class="fas fa-store-alt"></i>
                        <p>Outlets</p>
                    </a>
                </li>
                <li class="nav-item " >
                    <a data-toggle="collapse" href="#users" class="collapsed" @url('users*') aria-expanded="true" @endurl>
                        <i class="fas fa-address-book"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @url('users*') show @endurl" id="users">
                        <ul class="nav nav-collapse">
                            <li @url('users/pegawai') class=" active " @endurl>
                                <a href="{{ route('pegawai.index') }}">
                                    <span class="sub-item">Pegawai</span>
                                </a>
                            </li>
                            <li @url('users/customers') class=" active " @endurl>
                                <a href="{{ route('customers.index') }}">
                                    <span class="sub-item">Customer</span>
                                </a>
                            </li>
                            <li @url('users/suppliers') class=" active " @endurl>
                                <a href="{{ route('suppliers.index') }}">
                                    <span class="sub-item">Supplier</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    <h4 class="text-section">Produk</h4>
                </li>
                <li class="nav-item" >
                    <a data-toggle="collapse" href="#inventories" class="collapse"  @url('inventory*') aria-expanded="true" @endurl>
                        <i class="fa fa-th-large"></i>
                        <p>Inventory</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @url('inventory*') show @endurl" id="inventories">
                        <ul class="nav nav-collapse">
                            <li @url('inventory/categories') class=" active " @endurl>
                                <a href="{{ route('categories.index') }}">
                                    <i class="fas fa-th-list"></i>
                                    <p>Master Kategori</p>
                                </a>
                            </li>
                            <li @url('inventory/products') class=" active " @endurl>
                                <a href="{{ route('products.index') }}">
                                    <i class="fas fa-th"></i>
                                    <p>Master Produk</p>
                                </a>
                            </li>
                            <li @url('inventory/out') class=" active " @endurl>
                                <a href="{{ route('products.index') }}">
                                    <i class="fas fa-arrow-circle-left"></i>
                                    <p>Produk Masuk</p>
                                </a>
                            </li>
                            <li @url('inventory/in') class=" active " @endurl>
                                <a href="{{ route('products.index') }}">
                                    <i class="fas fa-share-square"></i>
                                    <p>Produk Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ URL('outlets') }}">
                        <i class="fa fa-shopping-bag"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
